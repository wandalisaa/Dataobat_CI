<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>medipharma/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
		<script src="<?php echo base_url("js/config.js"); ?>"></script> <!-- Load file process.js -->
		<link rel="shortcut icon" href="<?php echo base_url();?>medipharma/css/img/logo-05.ico" type="image/x-icon">
		<title>Medipharma</title>
		<style>
			.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #9ee37d;
    border-color: #9ee37d;
}
a {
    color: #63c132;
    text-decoration: none;
    background-color: transparent;
}
a:hover {
    color: #63c132;
}
.maincontent {
    background-image: linear-gradient(rgb(255, 255, 255), rgb(212, 212, 212));
	height: fit-content;
    min-height: fit-content;
}
		</style>
</head>

<body>
    <section class="display pb-5" style="background-image: url(<?php echo base_url();?>medipharma/css/img/bgtop.png);">
        <nav class="navbar">
            <a class="navbar-brand" href="<?php echo base_url();?>index.php">
                <img src="<?php echo base_url();?>medipharma/css/img/logo-05.png" width="30" height="30" class="d-inline-block align-top" alt="">
                MEDIPHARMA</a>
        </nav>
        <div class="animate__animated animate__fadeInUp container text-center mt-5">
            <h2 class="my-2 part-name">DAFTAR OBAT</h2>
            <h1 class="brand-name">MEDIPHARMA</h1>
        </div>
    </section>
    <div class="maincontent">
        <div class="container">
            <div class="fitur">
                <div class="tag-popular"><form action="<?php echo base_url(); ?>Dataobat/search" method = "post">
                    <div class="row">
										
                        <div class="col-lg-3 col-md-6 col-6 mt-2">
                            <button class="btn btn-light w-100" value="obat herbal" name="keyword">
															Herbal
														</button>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mt-2">
                            <button class="btn btn-light w-100" value="anak" name="keyword">
															Obat Anak
														</button>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mt-2">
                            <button class="btn btn-light w-100" value="kategori A" name="keyword">
															Aman Untuk ibu hamil
														</button>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6 mt-2">
                            <button class="btn btn-light w-100" value="salep" name="keyword">
															Salep
														</button>
												</div>
											
                    </div></form>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 mt-2">
												<form action="<?php echo base_url(); ?>Dataobat/search" method = "post">
                            <div class="dropdown">
                                <button class="btn w-100 btn-kat btn-secondary text-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Kategori
																</button>
                                <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
                                  <button class="dropdown-item" value="obat resep" name="keyword" style="border: none;">obat resep</button>
                                  <button class="dropdown-item" value="obat bebas" name="keyword" style="border: none;">obat bebas</button>
																	<button class="dropdown-item" value="obat keras" name="keyword" style="border: none;">obat keras</button>
																	<button class="dropdown-item" value="obat wajib apotek" name="keyword" style="border: none;">obat wajib apotek</button>
                                  <button class="dropdown-item" value="obat psikotropika" name="keyword" style="border: none;">obat psikotropika</button>
																	<button class="dropdown-item" value="obat golongan narkotika" name="keyword" style="border: none;">obat golongan narkotika</button>
																</div>
															</div>
												</form>
                        </div>
                        <div class="col-lg-8 col-sm-12 mt-2">
                                <div class="float-right  w-100 ">
																<form action="<?php echo base_url(); ?>Dataobat/search" method = "post">
                                    <div class="search__container w-100 text-center">
																				<input class="search__input w-50" type="text" id="keyword" name = "keyword" placeholder="Pencarian Obat">
																				<button class="btn btn-light" type="submit">cari</button>
																				<a href="<?php echo base_url(); ?>" class="btn btn-secondary" style="border-radius: 20px;">reset</a>
																		</div>
																</form>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-data w-100 shadow-lg p-3 mb-3 bg-white rounded mt-2">
                <div class="col-12 float-right mb-2">
                    <a href="<?php echo base_url(); ?>Dataobat/tambah/">
                      <button class="btn btn-circle px-2 float-right">
                        <span><i class="fa fa-plus"></i></span>
                      </button>
                    </a>
								</div>
								<div class="table-responsive " style="overflow-x: hidden;">
                    <table class="table table-bordered">
                        <thead class="thead">
                          <tr>
                            <th scope="col" class="text-center" width="50px">No</th>
                            <th scope="col" class="text-center">Nama Obat</th>
                            <th scope="col" width="300px" class="text-center aksi">Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
													<?php
													$no = 0;
													foreach($obat as $obt){ 
														?>
                          <tr>
														<th scope="row"><?=++$no?></th>
                            <td class="med-name" >
                              <a href="<?php echo base_url(); ?>Dataobat/detail/<?php echo $obt['id']; ?>" title="nama obat" data-toggle="tooltip" data-placement="bottom"><?php echo $obt['nama'];?></a>
                              <span data-toggle="tooltip" data-placement="bottom" title="merek"><?php echo $obt['merek'];?></span>
                            </td>
                            <td class="text-center btn-aksi">
                                <a href="<?php echo base_url(); ?>Dataobat/edit/<?php echo $obt['id']; ?>"><button class="btn-up px-2 btn-primary"><span><i class="fa fa-refresh"></i> </span></button></a>
                                <button class="btn-delete px-2 btn-danger" href="#myModal<?php echo $obt['id']; ?>" class="trigger-btn" data-toggle="modal"><span><i class="fa fa-trash"></i> </span></button>
                                <a href="<?php echo base_url(); ?>Dataobat/detail/<?php echo $obt['id']; ?>"><button class="btn-detail px-2 btn-success"><span><i class="fa fa-ellipsis-h"></i> </span></button></a>
                            </td>
													</tr>
                          <!-- Modal HTML -->
                          <div id="myModal<?php echo $obt['id']; ?>" class="modal fade">
                            <div class="modal-dialog modal-confirm">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <div class="row">
                                    <div class="icon-box">
                                              <i class="material-icons">&#xE5CD;</i>
                                            </div>
                                    </div>
                                    <h4 class="modal-title">Yakin ingin menghapus data ini ?</h4>
                                  <p>Klik hapus untuk melanjutkan</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-info" data-dismiss="modal">Kembali</button>
                                  <a href="<?php echo base_url(); ?>Dataobat/hapus/<?php echo $obt['id'];?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                                </div>
                              </div>
                            </div>
                          </div>     
													<?php } ?>
                        </tbody>
											</table>
                </div>

            </div>
        </div>
        <footer class="footer text-center pb-5">
            <span>Wanda Khalishah &#169; 2020</span>
        </footer>
    </div>
    <script>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
</body>

</html>
