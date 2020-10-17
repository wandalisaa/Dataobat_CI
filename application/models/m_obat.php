<?php

class M_obat extends CI_Model{

	public function get_data($limit , $start){
		$this->db->order_by('id', 'desc');
		return $this->db->get('data_obat', $limit , $start);
	}
	public function get_detail($id = NULL)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('data_obat');
        return $query->row_array();
	}
	public function input_data($data)
    {
        $this->db->insert('data_obat',$data);
    }
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update_data($id , $data){
		$this->db->where('id', $id);
		$this->db->update('data_obat', $data);
	}

	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('data_obat');
		$this->db->like('nama',$keyword);
		$this->db->or_like('merek',$keyword);
		$this->db->or_like('kategori',$keyword);
		$this->db->or_like('keterangan',$keyword);
		$this->db->or_like('dikonsumsi_oleh',$keyword);
		$this->db->or_like('bentuk',$keyword);
		$this->db->or_like('gol_janin',$keyword);

		return $this->db->get()->result_array();

	}
}

?>
