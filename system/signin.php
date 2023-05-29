<?php
session_start();
include 'koneksi.php';

$emailtlp = $_POST['emailtlp'];
$password = md5($_POST['password']);

$sqlcek = mysqli_query($con, "SELECT * FROM user WHERE (user_email = '$emailtlp' OR user_wa = '$emailtlp') AND user_password = '$password' AND user_status = 'Aktif'");
$datacek = mysqli_fetch_assoc($sqlcek);

if (mysqli_num_rows($sqlcek) > 0) {
    $idusr = $datacek['user_id'];
    $_SESSION['id_user'] = $datacek['user_id'];
    $_SESSION['nama_user'] = $datacek['user_nama'];
    $sqlrt = mysqli_query($con, "SELECT * FROM rt WHERE rt_ketua_id = '$idusr'");
    if (mysqli_num_rows($sqlrt) > 0) {
        $datart = mysqli_fetch_assoc($sqlrt);
        $_SESSION['id_rt_ketua'] = $datart['rt_id'];
    } else {
        $_SESSION['id_rt_ketua'] = '0';
    }
    $_SESSION['id_rt'] = $_SESSION['id_rt_ketua'];

    echo "<script>alert('Login Berhasil !');window.location='../user/index.php';</script>";
} else {
    echo "<script>alert('Login Gagal ! Harap periksa kembali email dan password anda');window.location='../index.php';</script>";
}
