<?php
$adm = $_GET['adm'];
$status = $_GET['status'];
$id = $_GET['id'];

if ($adm == 'ktp') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE ktp SET ktp_status = '$st' WHERE ktp_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} elseif ($adm == 'kk') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE kk SET kk_status = '$st' WHERE kk_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} elseif ($adm == 'domisili') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE domisili SET domisili_status = '$st' WHERE domisili_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} elseif ($adm == 'pindah') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE pindah SET pindah_status = '$st' WHERE pindah_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} elseif ($adm == 'kelahiran') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE kelahiran SET kelahiran_status = '$st' WHERE kelahiran_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} elseif ($adm == 'kematian') {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE kematian SET kematian_status = '$st' WHERE kematian_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
} else {
    $st = '';
    if ($status == 'konfirmasi_rt') {
        $st = 'Telah dikonfirmasi RT';
    } else {
        $st = 'Permintaan ditolak RT';
    }
    $sql = mysqli_query($con, "UPDATE izin_usaha SET izin_usaha_status = '$st' WHERE izin_usaha_id = '$id'");
    if ($sql) {
        echo "<script>alert('Proses verifikasi berhasil !');window.location='?page=administrasi';</script>";
    } else {
        echo "<script>alert('Proses verifikasi gagal !');window.location='?page=administrasi';</script>";
    }
}
