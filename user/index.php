<?php
session_start();
include '../system/koneksi.php';
$ketua_rt = '';
if (!isset($_SESSION['id_user'])) {
    echo "<script>alert('Anda harus login terlebih dahulu !');window.location='../index.php';</script>";
} else {
    $iduser = $_SESSION['id_user'];
}
$ketuart = '';
if ($_SESSION['id_rt'] != 0) {
    $ketuart = $_SESSION['id_rt'];
    $sqlketuart = mysqli_query($con, "SELECT * FROM rt WHERE rt_id = '$ketuart'");
    $dataketuart = mysqli_fetch_assoc($sqlketuart);
    $namart = $dataketuart['rt_nama'];
    $namauser = $_SESSION['nama_user'];
    $userid = $_SESSION['id_user'];
} else {
    $sqluser = mysqli_query($con, "SELECT * FROM user, rt WHERE user.user_rt_id = rt.rt_id AND user.user_id = '$iduser'");
    $datauser = mysqli_fetch_assoc($sqluser);
    $namart = $datauser['rt_nama'];
    $namauser = $datauser['user_nama'];
    $ketuart = $datauser['rt_id'];
    $namauser = $_SESSION['nama_user'];
    $userid = $_SESSION['id_user'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="../favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="../fonts/icomoon/style.css" />
    <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css" />

    <link rel="stylesheet" href="../css/tiny-slider.css" />
    <link rel="stylesheet" href="../css/aos.css" />
    <link rel="stylesheet" href="../css/style.css" />

    <!-- DATATABLES -->
    <link rel="stylesheet" href="../assets/datatables/css/lib/datatable/dataTables.bootstrap.min.css">

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="../assets/fa/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>
        Kantor Desa -
    </title>
</head>

<body>
    <?php
    include "../system/koneksi.php";
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
                    <a href="?page=home" class="logo m-0 float-start">RT : <?= $namart ?></a>
                    <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                        <li><a href="?page=home">Home</a></li>
                        <!-- <li class="has-children">
                            <a href="properties.html">Properties</a>
                            <ul class="dropdown">
                                <li><a href="#">Buy Property</a></li>
                                <li><a href="#">Sell Property</a></li>
                                <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Sub Menu One</a></li>
                                        <li><a href="#">Sub Menu Two</a></li>
                                        <li><a href="#">Sub Menu Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->
                        <?php
                        if ($_SESSION['id_rt'] != '0') {
                        ?>
                            <li><a href="?page=pendaftaran">Pendaftaran</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION['id_rt'] != '0') {
                        ?>
                            <li><a href="?page=administrasi">Administrasi</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION['id_rt'] != '0') {
                        ?>
                            <li><a href="?page=warga">Warga</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        if ($_SESSION['id_rt'] == '0') {
                        ?>
                            <li><a href="?page=progress">Progress</a></li>
                        <?php
                        }
                        ?>
                        <li>
                            <a href="../index.php" onclick="return confirm('Yakin ingin keluar ?')" class="text-light btn btn-danger"><b>LOGOUT</b></a>
                        </li>
                    </ul>

                    <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                        <span></span>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN ================================================================================== -->
    <div class="content-wrapper">
        <?php
        include "../system/koneksi.php";
        if (@$_GET['page'] == 'home' || @$_GET['page'] == '') {
            include "views/home.php";
        } else if (@$_GET['page'] == 'pendaftaran') {
            include "views/pendaftaran.php";
        } else if (@$_GET['page'] == 'administrasi') {
            include "views/administrasi.php";
        } else if (@$_GET['page'] == 'detail_verifikasi') {
            include "views/detail_verifikasi.php";
        } else if (@$_GET['page'] == 'edit_user') {
            include "views/edit_user.php";
        } else if (@$_GET['page'] == 'hapus_user') {
            include "views/hapus_user.php";
        } else if (@$_GET['page'] == 'progress') {
            include "views/progress.php";
        } else if (@$_GET['page'] == 'detail') {
            include "views/detail.php";
        } else if (@$_GET['page'] == 'verifikasi') {
            include "views/verifikasi.php";
        } else if (@$_GET['page'] == 'warga') {
            include "views/warga.php";
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

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/tiny-slider.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="../js/counter.js"></script>
    <script src="../js/custom.js"></script>

    <!-- Button trigger modal -->

    <!-- DATATABLES -->
    <script src="../assets/datatables/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/datatables/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/datatables/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/datatables/js/init/datatables-init.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

</body>

</html>