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
        <a class="navbar-brand" href="<?php echo base_url();?>">
            <img src="<?php echo base_url();?>medipharma/css/img/logo-05.png" width="30" height="30" class="d-inline-block align-top" alt="">
            MEDIPHARMA</a>
    </nav>
    <div class="container">
        <div class="card detail-obat w-100 shadow-lg p-3 mb-5 bg-white">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <a href="<?php echo base_url();?>">
                        <button class="btn btn-secondary btn-back mt-2">
                            <i class="fa fa-angle-left text-light mr-2"></i>
                            Beranda</button>
                    </a>
                    <div class="mb-3 animate__animated animate__zoomIn  nama-obat">
                        <div class="mt-3 card w-100 foto-obat" style="background-color:white;"> 
														<img class="w-100 h-100 fotoObat" src="<?php echo base_url();?>assets/foto/<?php echo $info_obat['foto'];?>"
														style="border-radius: 20px; object-fit: fit;"alt="">
                        </div>
                        <h3 class="mt-3"><?=$info_obat['nama']?></h3>
                        <span><?=$info_obat['merek']?></span>
                    </div>
                    <button class="btn btn-i btn-danger" data-toggle="modal" data-target="#infoObat">
                        <span><i class="fa fa-info"></i> </span>
                    </button>
                    <a href="<?php echo base_url(); ?>Dataobat/edit/<?php echo $info_obat['id']; ?>"><button class="btn-up px-2 btn-primary"><span><i class="fa fa-refresh"></i> </span></button></a>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="info-obat">
                        <table class="table ">
                            <tbody>
                              <tr>
                                <th scope="row">Katergori</th>
                                <td colspan="2"><?=$info_obat['kategori']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Dikonsumsi Oleh</th>
                                <td><?=$info_obat['dikonsumsi_oleh']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Bentuk</th>
                                <td><?=$info_obat['bentuk']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Umur simpan</th>
                                <td colspan="2"><?=$info_obat['umur_simpan']?> bulan</td>
                              </tr>
                              <tr>
                                <th scope="row">Expired</th>
                                <td><?=$info_obat['expired']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Kategori untuk Ibu Hamil/Menyusui</th>
                                <td><?=$info_obat['gol_janin']?></td>
                              </tr>
                              <tr>
                                <th scope="row">Stok</th>
                                <td colspan="2"><?=$info_obat['stok']?> kotak</td>
                              </tr>
                              <tr>
                                <th scope="row">Keterangan</th>
                                <td colspan="2"><?=$info_obat['keterangan']?></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
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
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
      </script>
</body>

</html>
