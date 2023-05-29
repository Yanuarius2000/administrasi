<?php
$id = $_GET['id'];
$ver = $_GET['ver'];
$pindah_tanggal_verifikasi = date('Y-m-d');

$pindah_status = '';
if ($ver == 'konfirmasi') {
    $pindah_status = "Selesai";
} else {
    $pindah_status = "Ditolak";
}

$sql = mysqli_query($con, "UPDATE pindah SET pindah_status = '$pindah_status', pindah_tanggal_verifikasi = '$pindah_tanggal_verifikasi' WHERE pindah_id = '$id'");

$sql_pindah = mysqli_query($con, "SELECT * FROM pindah WHERE pindah_id = '$id'");
$data_pindah = mysqli_fetch_assoc($sql_pindah);
$id_user = $data_pindah['pindah_user'];

$sql_user = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$id_user'");
$data_user = mysqli_fetch_assoc($sql_user);

// ===== E-Mail ==============================================================================================================================================================
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/src/Exception.php';
require 'assets/PHPMailer/src/PHPMailer.php';
require 'assets/PHPMailer/src/SMTP.php';

$email = $data_user['user_email'];
$judul = 'Notifikasi Pemberitahuan - Kantor Desa Dualasi';
$pesan = '';
if ($ver == 'konfirmasi') {
    $pesan = 'Selamat... Permintaan surat pindah anda telah dikonfirmasi. Silahkan login untuk mendownload surat anda !';
} else {
    $pesan = 'Ooooppss...!! Permintaan surat pindah anda gagal diverifikasi. Silahkan ajukan pengajuan ulang !';
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
echo "<script>alert('Email berhasil terkirim!');window.location='?page=pindah';</script>";
// ====== E-Mail =======================================================================================================================================================
