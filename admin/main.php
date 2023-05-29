<?php
session_start();
include '../system/koneksi.php';
if (!isset($_SESSION['id_admin'])) {
    echo "<script>alert('Anda harus login terlebih dahulu !');window.location='index.php';</script>";
} else {
    $idadmin = $_SESSION['id_admin'];
    $namaadmin = $_SESSION['nama_admin'];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" /> -->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- DATATABLES -->
    <link rel="stylesheet" href="../assets/datatables/css/lib/datatable/dataTables.bootstrap.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Chart -->
    <script type="text/javascript" src="assets/js/chart/Chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html"><?= $namaadmin ?></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="index.php" onclick="return confirm('Yakin ingin keluar?')">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Menu</div>
                        <a class="nav-link" href="?page=home">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="?page=rt">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            RT
                        </a>
                        <!-- <a class="nav-link" href="?page=administrasi">
                            <div class="sb-nav-link-icon"><i class="fas fa-book"></i></div>
                            Administrasi
                        </a> -->
                        <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Administrasi
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="?page=ktp">KTP</a>
                                <a class="nav-link" href="?page=kk">Kartu Keluarga</a>
                                <a class="nav-link" href="?page=domisili">Domisili</a>
                                <a class="nav-link" href="?page=pindah">Pindah</a>
                                <a class="nav-link" href="?page=kelahiran">Kelahiran</a>
                                <a class="nav-link" href="?page=kematian">Kematian</a>
                                <a class="nav-link" href="?page=izin_usaha">Izin Usaha</a>
                            </nav>
                        </div>
                        <a class="nav-link" href="?page=grafik">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Grafik
                        </a>
                        <!--
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Authentication
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div>
                                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Error
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                </a>
                                <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div>
                            </nav>
                        </div> -->
                        <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                        <a class="nav-link" href="charts.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Charts
                        </a>
                        <a class="nav-link" href="tables.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Tables
                        </a> -->
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $namaadmin ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <?php
                include "../system/koneksi.php";
                if (@$_GET['page'] == 'home' || @$_GET['page'] == '') {
                    include "views/home.php";
                } else if (@$_GET['page'] == 'jenis') {
                    include "views/jenis.php";
                } else if (@$_GET['page'] == 'hapus_jenis') {
                    include "views/hapus_jenis.php";
                } else if (@$_GET['page'] == 'edit_jenis') {
                    include "views/edit_jenis.php";
                } else if (@$_GET['page'] == 'rt') {
                    include "views/rt.php";
                } else if (@$_GET['page'] == 'edit_rt') {
                    include "views/edit_rt.php";
                } else if (@$_GET['page'] == 'administrasi') {
                    include "views/administrasi.php";
                } else if (@$_GET['page'] == 'ktp') {
                    include "views/ktp.php";
                } else if (@$_GET['page'] == 'detail-ktp') {
                    include "views/detail-ktp.php";
                } else if (@$_GET['page'] == 'kk') {
                    include "views/kk.php";
                } else if (@$_GET['page'] == 'detail-kk') {
                    include "views/detail-kk.php";
                } else if (@$_GET['page'] == 'domisili') {
                    include "views/domisili.php";
                } else if (@$_GET['page'] == 'detail-domisili') {
                    include "views/detail-domisili.php";
                } else if (@$_GET['page'] == 'pindah') {
                    include "views/pindah.php";
                } else if (@$_GET['page'] == 'detail-pindah') {
                    include "views/detail-pindah.php";
                } else if (@$_GET['page'] == 'kelahiran') {
                    include "views/kelahiran.php";
                } else if (@$_GET['page'] == 'detail-kelahiran') {
                    include "views/detail-kelahiran.php";
                } else if (@$_GET['page'] == 'kematian') {
                    include "views/kematian.php";
                } else if (@$_GET['page'] == 'detail-kematian') {
                    include "views/detail-kematian.php";
                } else if (@$_GET['page'] == 'izin_usaha') {
                    include "views/izin_usaha.php";
                } else if (@$_GET['page'] == 'detail-izin_usaha') {
                    include "views/detail-izin_usaha.php";
                } else if (@$_GET['page'] == 'grafik') {
                    include "views/grafik.php";
                }
                ?>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; 2022</div>
                        <!-- <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script> -->
    <!-- <script src="js/datatables-simple-demo.js"></script> -->

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