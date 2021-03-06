<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>medipharma/css/obat.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="<?php echo base_url();?>medipharma/css/img/logo-05.ico" type="image/x-icon">
	<title>Medipharma</title>
	<style>
			.navbar a {
	color: #638153;
	font-family: "Montserrat";
}
a:hover {
    color: #63c132;
}
		</style>
</head>

<body>
    <nav class="navbar">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url();?>medipharma/css/img/logo-05.png" width="30" height="30" class="d-inline-block align-top" alt="">
            MEDIPHARMA</a>
    </nav>
    <div class="container">
        <div class=" card detail-obat w-100 shadow-lg p-3 mb-5 bg-white">
            <a href="<?php echo base_url(); ?>">
                <button class="btn btn-secondary btn-back mt-2">
                    <i class="fa fa-angle-left text-light mr-2"></i>
                    Beranda</button>
            </a>
            <form  method="post" enctype="multipart/form-data" action="<?php echo base_url();?>Dataobat/update/<?php echo $info_obat['id']?>" class="needs-validation" novalidate >
                <div class="form-row">
                    <div class="col-lg-6 col-sm-12">
                        <table class="table form-group table-borderless">
						<tbody>
                                <tr>
                                    <th scope="row">Nama Obat</th>
                                    <td >
                                        <input type="text" class="form-control" name="namaObat" value="<?=$info_obat['nama']?>" placeholder="nama" required>
                                        <div class="invalid-feedback">
                                            Tambahkan nama obat
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Merek</th>
                                    <td>
                                        <input type="text" class="form-control" name="namaMerek" placeholder="merek" required value="<?=$info_obat['merek']?>">
                                        <div class="invalid-feedback">
                                            Tambahkan nama merek obat
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori</th>
                                    <td>
                                        <div class="form-group">
                                            <select class="custom-select" name="kategori_obat" required value="<?=$info_obat['kategori']?>">
                                              <option value="<?=$info_obat['kategori']?>"><?=$info_obat['kategori']?></option>
                                              <option value="obat resep">obat resep</option>
                                              <option value="obat bebas">obat bebas</option>
											  <option value="obat keras">obat keras</option>
											  <option value="obat wajib apotek">obat wajib apotek</option>
                                              <option value="obat psikotropika">obat psikotropika</option>
											  <option value="obat herbal">obat herbal</option>
											  <option value="obat golongan narkotika">obat golongan narkotika</option>
                                            </select>
                                            <div class="invalid-feedback">Pilih salah satu kategori</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Dikonsumsi Oleh</th>
                                    <td>
                                        <div class="form-group">
                                            <select class="custom-select" name="konsumen" required value="<?=$info_obat['dikonsumsi_oleh']?>">
                                              <option value="<?=$info_obat['dikonsumsi_oleh']?>"><?=$info_obat['dikonsumsi_oleh']?></option>
                                              <option value="Semua Umur">Semua Umur</option>
                                              <option value="Anak-Anak">Anak-Anak</option>
                                              <option value="Dewasa">Dewasa</option>
                                            </select>
                                            <div class="invalid-feedback">Pilih salah satu</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Bentuk</th>
                                    <td>
                                        <div class="form-group">
                                            <select class="custom-select" name="bentuk_obat" required value="<?=$info_obat['bentuk']?>">
                                              <option value="<?=$info_obat['bentuk']?>"><?=$info_obat['bentuk']?></option>
                                              <option value="Serbuk">Serbuk</option>
                                              <option value="Tablet">Tablet</option>
											  <option value="Pil">Pil</option>
											  <option value="Larutan">Larutan</option>
                                              <option value="Ekstrak">Ekstrak</option>
											  <option value="Infusa">Infusa</option>
											  <option value="Salep">Salep</option>
                                              <option value="Obat tetes">Obat tetes</option>
                                              <option value="Injeksi">Injeksi</option>
                                            </select>
                                            <div class="invalid-feedback">Pilih salah satu bentuk obat</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Umur simpan</th>
                                    <td colspan="2">
                                        <div class="form-inline">
                                            <input type="number" class="form-control" name="umurSimpan" placeholder="umur simpan" required value="<?=$info_obat['umur_simpan']?>">
                                        <small  class="text-muted ml-2">
                                            Bulan
                                          </small>
                                        <div class="invalid-feedback">
                                            Tambahkan umur simpan obat
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <th scope="row">Expired</th>
                                    <td>
                                        <input type="date" class="form-control" name="tanggalExpired" placeholder="tanggal kadaluarsa" required value="<?=$info_obat['expired']?>">
                                        <div class="invalid-feedback">
                                            Tambahkan tanggal kadaluarsa
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Kategori untuk Ibu Hamil/Menyusui</th>
                                    <td>
                                        <div class="form-group">
                                            <select class="custom-select" name="golHamil" required value="<?=$info_obat['gol_janin']?>">
                                              <option value="<?=$info_obat['gol_janin']?>"><?=$info_obat['gol_janin']?></option>
                                              <option value="Kategori A">A (aman)</option>
                                              <option value="Kategori B">B</option>
											  <option value="Kategori C">C</option>
											  <option value="Kategori D">D</option>
                                              <option value="Kategori X">X ( berbahaya )</option>
                                            </select>
                                            <div class="invalid-feedback">Pilih salah satu kategori</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Stok</th>
                                    <td>
                                        <div class="form-inline">
                                            <input type="number" min="0" class="form-control" name="stokObat" placeholder="stok obat" required value="<?=$info_obat['stok']?>">
                                        <small  class="text-muted ml-2">
                                            Kotak
                                          </small>
                                        <div class="invalid-feedback">
                                            Tambahkan Stok obat
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">Keterangan</th>
                                    <td >
                                        <textarea class="form-control" name="ketObat" placeholder="manfaat atau cara penggunaan" rows="3" value="<?=$info_obat['keterangan']?>"><?=$info_obat['keterangan']?></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button class="btn btn-sub btn-success float-right" type="submit" >Update</button>
            </form>
            <button class="btn btn-i btn-danger mt-3" data-toggle="modal" data-target="#infoObat">
                <span><i class="fa fa-info"></i> </span>
            </button>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade w-100" id="infoObat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 900px !important;">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Informasi Obat</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <section class="ket-hamil">
            <table class="table table-borderless">
                <tr>
                    <th><span class="badge badge-success">kategori A</span></th>
                    <td>obat kategori ini tidak menyebabkan risiko kehamilan atau malformasi pada trimester pertama.</td>
                </tr>
                <tr>
                    <th><span class="badge badge-primary">kategori B</span></th>
                    <td>Studi reproduksi hewan telah gagal menunjukkan risiko pada janin.</td>
                </tr>
                <tr>
                    <th><span class="badge badge-secondary">kategori C</span></th>
                    <td>Studi reproduksi hewan telah menunjukkan efek buruk pada janin, tetapi karena manfaat potensial mungkin beberapa ibu hamil memerlukan penggunaan obat ini.</td>
                </tr>
                <tr>
                    <th><span class="badge badge-warning">kategori D</span></th>
                    <td>Obat-obat golongan ini terbukti bisa menyebabkan malformasi dan berbahaya bagi janin.</td>
                </tr>
                <tr>
                    <th><span class="badge badge-danger">kategori X</span></th>
                    <td>Studi pada hewan atau manusia telah menunjukkan kelainan janin dan dilarang untuk dikonsumsi selama kehamilan.</td>
                </tr>
            </table>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    <script>
        (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
            });
        }, false);
        })();
    </script>
</body>

</html>
