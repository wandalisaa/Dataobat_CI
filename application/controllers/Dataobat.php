<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataobat extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_obat');
        $this->load->helper('url');
    }
	
	public function index()
	{
		$config['base_url'] = site_url('Dataobat/index');
		$config['total_rows'] = $this->db->count_all('data_obat');
		$config['per_page'] = 5;
		$config['uri_segment'] = 3;
		$choice				= $config["total_rows"] / $config['per_page'];
		$config["num_links"] = floor($choice);
		
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Prev';
		$config['full_tag_open'] = '<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">';
	  $config['full_tag_close'] = '</li></ul></nav>'; 
	  $config['num_tag_open'] = '<li class="page-item">
	  <span class="page-link" >';
		$config['num_tag_close'] = '</span></li>';
		$config['cur_tag_open'] = '<li class="page-item active">
		<span class="page-link" >';
		$config['cur_tag_close'] = '</span></li>';
		$config['next_tag_open'] = '<li class="page-item" >
	  <span class="page-link" >';
		$config['next_tag_close'] = '</span></li>';
		$config['prev_tag_open'] = '<li class="page-item ">
		<span class="page-link" >';
		$config['prev_tag_close'] = '</span></li>';
		$config['first_tag_open'] = '<li class="page-item ">
	  <span class="page-link" >';
		$config['first_tag_close'] = '</span></li>';
		$config['last_tag_open'] = '<li class="page-item ">
	  <span class="page-link" >';
		$config['last_tag_close'] = '</span></li>';
		



		$this->pagination->initialize($config);
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


		$data['obat'] = $this->m_obat->get_data($config["per_page"], $data['page'])->result_array();
		$data['pagination'] = $this->pagination->create_links();
		$this->load->view('index', $data);
	}
	public function detail($id){
		$data['info_obat'] = $this->m_obat->get_detail($id);
		$this->load->view('obat', $data);
	}
	public function edit($id){
		$data['info_obat'] = $this->m_obat->get_detail($id);
		$this->load->view('update_obat', $data);
	}
	public function update($id){

		// $config['upload_path']          = './assets/foto/';
		// $config['allowed_types']        = 'gif|jpg|png';
		// $config['max_size']             = 100;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;
 
		// $this->load->library('upload', $config);
		// $this->upload->initialize($config);
 
		// if ( ! $this->upload->do_upload('image')){
		// 	$foto = 'default.jpg';
		// }else{
		// 	$foto = $this->upload->data("file_name");
		// }
		$nama = $this->input->post('namaObat');
		$merek = $this->input->post('namaMerek');
		$kategori = $this->input->post('kategori_obat');
		$konsumen = $this->input->post('konsumen');
		$bentuk = $this->input->post('bentuk_obat');
		$umursimpan = $this->input->post('umurSimpan');
		$expired = $this->input->post('tanggalExpired');
		$golhamil = $this->input->post('golHamil');
		$stok = $this->input->post('stokObat');
		$foto = 'default.jpg';
		$keterangan = $this->input->post('ketObat');

		$data = array(
			"nama"=>  $nama ,
			"merek"=>  $merek ,
			"umur_simpan" => $umursimpan,
			"expired" => $expired,
			"stok" => $stok,
			"kategori" => $kategori,
			"dikonsumsi_oleh" => $konsumen,
			"bentuk" => $bentuk,
			"gol_janin" => $golhamil,
			"foto"=> $foto ,
			"keterangan"=>  $keterangan 
		);
		$this->m_obat->update_data($id , $data);
		redirect('Dataobat/index');
	}
	public function tambah(){
		$this->load->view('tambah_obat');
	}
	public function input(){
		$config['upload_path']          = './assets/foto/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('image')){
			$foto = 'default.jpg';
		}else{
			$foto = $this->upload->data("file_name");
		}
		$nama = $this->input->post('namaObat');
		$merek = $this->input->post('namaMerek');
		$kategori = $this->input->post('kategori_obat');
		$konsumen = $this->input->post('konsumen');
		$bentuk = $this->input->post('bentuk_obat');
		$umursimpan = $this->input->post('umurSimpan');
		$expired = $this->input->post('tanggalExpired');
		$golhamil = $this->input->post('golHamil');
		$stok = $this->input->post('stokObat');
		$keterangan = $this->input->post('ketObat');

		$data = array(
			"nama"=>  $nama ,
			"merek"=>  $merek ,
			"umur_simpan" => $umursimpan,
			"expired" => $expired,
			"stok" => $stok,
			"kategori" => $kategori,
			"dikonsumsi_oleh" => $konsumen,
			"bentuk" => $bentuk,
			"gol_janin" => $golhamil,
			"foto"=> $foto ,
			"keterangan"=>  $keterangan 
		);
		$this->m_obat->input_data($data); 
		redirect('Dataobat/index');
	}
	public function hapus($id){
		$where = array('id' => $id);
		$this->m_obat->hapus_data($where,'data_obat');
		redirect('Dataobat/index');
	}
	public function search()
	{
		$keyword = $this->input->post('keyword');
		$data['obat']=$this->m_obat->get_keyword($keyword);
		
		$this->load->view('cari', $data);
	}
	

}
