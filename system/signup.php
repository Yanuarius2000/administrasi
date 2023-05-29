<?php
include 'koneksi.php';

$user_nama = $_POST['user_nama'];
$user_tempat_lahir = $_POST['user_tempat_lahir'];
$user_tgl_lahir = $_POST['user_tgl_lahir'];
$user_jk = $_POST['user_jk'];
$user_rt_id = $_POST['user_rt_id'];
$user_rw_id = $_POST['user_rw_id'];
$user_wa = $_POST['user_wa'];
$user_status_perkawinan = $_POST['user_status_perkawinan'];
$user_pekerjaan = $_POST['user_pekerjaan'];
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];
$user_password2 = $_POST['user_password2'];
$password = md5($user_password);

$sqlcekrt = mysqli_query($con, "SELECT * FROM rt WHERE rt_id = '$user_rt_id'");
$datacekrt = mysqli_fetch_assoc($sqlcekrt);

$user_status = '';
if ($datacekrt['rt_ketua_id'] == '0') {
    $user_status = 'Aktif';
} else {
    $user_status = 'Menunggu Konfirmasi';
}

if ($user_password != $user_password2) {
    echo "<script>alert('Password Tidak Serasi ! Ulangi Pendaftaran !');window.location='../index.php';</script>";
} else {
    $sql = mysqli_query($con, "INSERT INTO user VALUES('', '$user_nama', '$user_tempat_lahir', '$user_tgl_lahir', '$user_jk', '$user_rt_id', '$user_rw_id', '$user_wa', '$user_status_perkawinan', '$user_pekerjaan', '$user_status', '$user_email', '$password')");
    if ($sql) {
        echo "<script>alert('Pendaftaran Berhasil ! Silahkan Lakukan Proses Login Kembali !');window.location='../index.php';</script>";
    } else {
        echo "<script>alert('Pendaftaran Gagal !');window.location='../index.php';</script>";
    }
}
