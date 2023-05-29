<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="css/tiny-slider.css" />
    <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- DATATABLES -->
    <link rel="stylesheet" href="assets/datatables/css/lib/datatable/dataTables.bootstrap.min.css">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="assets/fa/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>
        Kantor Desa -
    </title>
</head>

<body>
    <?php
    include "system/koneksi.php";
    ?>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <a href="?page=home" class="logo m-0 float-start">Kantor Desa Dualasi</a>

                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li><a href="?page=home">Home</a></li>
                        <li><a href="?page=profile">Profile</a></li>
                        <li>
                            <a href="" class="text-light btn btn-info" data-toggle="modal" data-target="#DaftarModal"><b>SIGN-UP</b></a>
                        </li>
                        <li>
                            <a href="" class="text-light btn btn-success" data-toggle="modal" data-target="#LoginModal"><b>SIGN-IN</b></a>
                        </li>
                    </ul>

                    <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="system/signin.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email / Telepon</label>
                            <input type="text" class="form-control" name="emailtlp" placeholder="Email / Telepon">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Sign-in">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Login -->

    <!-- Modal Daftar -->
    <div class="modal fade" id="DaftarModal" tabindex="-1" role="dialog" aria-labelledby="DaftarModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Daftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="system/signup.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="user_nama" required placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="user_tempat_lahir" required placeholder="Tempat Lahir">
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" name="user_tgl_lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="user_jk" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <select class="form-control" name="user_rt_id" required>
                                        <option value="">-- Pilih RT --</option>
                                        <?php
                                        $sqlrt = mysqli_query($con, "SELECT * FROM rt ORDER BY rt_nama ASC");
                                        while ($datart = mysqli_fetch_assoc($sqlrt)) {
                                        ?>
                                            <option value="<?= $datart['rt_id'] ?>"><?= $datart['rt_nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-control" name="user_rw_id" required>
                                        <option value="">-- Pilih RW --</option>
                                        <?php
                                        $sqlrw = mysqli_query($con, "SELECT * FROM rw ORDER BY rw_nama ASC");
                                        while ($datarw = mysqli_fetch_assoc($sqlrw)) {
                                        ?>
                                            <option value="<?= $datarw['rw_id'] ?>"><?= $datarw['rw_nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Whatsapp</label>
                            <input type="text" class="form-control" name="user_wa" required placeholder="Whatsapp">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="form-control" name="user_status_perkawinan" required>
                                <option value="">-- Pilih Status Perkawinan --</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <select class="form-control" name="user_pekerjaan" required>
                                <option value="">-- Pilih Pekerjaan --</option>
                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="user_email" required placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" name="user_password" required placeholder="Password">
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" name="user_password2" required placeholder="Konfirmasi Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Daftar -->

    <!-- MAIN ================================================================================== -->
    <div class="content-wrapper">
        <?php
        include "system/koneksi.php";
        if (@$_GET['page'] == 'home' || @$_GET['page'] == '') {
            include "views/home.php";
        } else if (@$_GET['page'] == 'profile') {
            include "views/profile.php";
        }
        ?>
    </div>
    <!-- END MAIN ============================================================================== -->



    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Kontak</h3>
                        <address>Jl. Sabuk merah, Aululik, Kec. Lasiolat, Kabupaten Belu</address>
                        <ul class="list-unstyled links">
                            <li><a href="tel://11234567890">+62 8146894618</a></li>
                            <li>
                                <a href="">iksonmoruk@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <!-- <h3>Sources</h3>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Vision</a></li>
                            <li><a href="#">Mission</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                        <ul class="list-unstyled float-start links">
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Creative</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="widget">
                        <h3>Links</h3>
                        <!-- <ul class="list-unstyled links">
                            <li><a href="#">Our Vision</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul> -->

                        <ul class="list-unstyled social">
                            <li>
                                <a href="#"><span class="icon-instagram"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-twitter"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-facebook"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-linkedin"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-pinterest"></span></a>
                            </li>
                            <li>
                                <a href="#"><span class="icon-dribbble"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 text-center">
                    <p>
                        Copyright &copy;
                        <!-- <script>
                            document.write(new Date().getFullYear());
                        </script> -->
                        Yanuarius I Moruk
                        . All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

    <!-- Button trigger modal -->

    <!-- DATATABLES -->
    <script src="assets/datatables/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/datatables/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/datatables/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/datatables/js/init/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>


</body>

</html>