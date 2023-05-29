<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$id = $_GET['id'];
$ver = $_GET['ver'];
$domisili_tanggal_verifikasi = date('Y-m-d');

$domisili_status = '';
if ($ver == 'konfirmasi') {
    $domisili_status = "Selesai";
} else {
    $domisili_status = "Ditolak";
}

$sql = mysqli_query($con, "UPDATE domisili SET domisili_status = '$domisili_status', domisili_tanggal_verifikasi = '$domisili_tanggal_verifikasi' WHERE domisili_id = '$id'");

$sql_domisili = mysqli_query($con, "SELECT * FROM domisili WHERE domisili_id = '$id'");
$data_domisili = mysqli_fetch_assoc($sql_domisili);
$id_user = $data_domisili['domisili_user'];

$sql_user = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$id_user'");
$data_user = mysqli_fetch_assoc($sql_user);

// ===== E-Mail ==============================================================================================================================================================


require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

$email = $data_user['user_email'];
$judul = 'Notifikasi Pemberitahuan - Kantor Desa Dualasi';
$pesan = '';
if ($ver == 'konfirmasi') {
    $pesan = 'Selamat... Permintaan surat keterangan domisili anda telah dikonfirmasi. Silahkan login untuk mendownload surat anda !';
} else {
    $pesan = 'Ooooppss...!! Permintaan surat keterangan domisili anda gagal diverifikasi. Silahkan ajukan pengajuan ulang !';
}


$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'iksonmoruk17@gmail.com';
    $mail->Password   = 'dpuu gwlo tnfz vcyv';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $mail->setFrom('iksonmoruk17@gmail.com', 'KANTOR DESA DUALASI');
    $mail->addAddress($email);

    $mail->isHTML(true);
    $mail->Subject = $judul;
    $mail->Body    = $pesan;
    $mail->AltBody = '';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
echo "<script>alert('Email berhasil terkirim!');window.location='?page=ktp';</script>";
// ====== E-Mail =======================================================================================================================================================
