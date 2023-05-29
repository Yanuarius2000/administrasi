<?php
ob_start();

include '../system/koneksi.php';

$id = $_GET['id'];
$userid = $_GET['userid'];

$sql = mysqli_query($con, "SELECT * FROM kematian WHERE kematian_id = '$id'");
$data = mysqli_fetch_assoc($sql);
$usermeninggal = $data['kematian_user_meninggal'];

$sqluser = mysqli_query($con, "SELECT * FROM user, rt, rw WHERE user.user_rt_id = rt.rt_id AND user.user_rw_id = rw.rw_id AND user.user_id = '$userid'");
$datauser = mysqli_fetch_assoc($sqluser);

$sqlusermeninggal = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$usermeninggal'");
$datausermeninggal = mysqli_fetch_assoc($sqlusermeninggal);

// ===============================================================================================

require('../assets/fpdf16/fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 18, 'C');
$pdf->Cell(40, 0);
$pdf->Cell(45, 10, 'SURAT KETERANGAN KEMATIAN', 0, 1);

$pdf->SetFont('Arial', 'B', 15, 'C');
$pdf->Cell(60, 0);
$pdf->Cell(58, 10, 'Kantor Desa Dualasi', 0, 1);

$pdf->SetFont('Arial', 'I', 12, 'C');
$pdf->Cell(50, 0);
$pdf->Cell(45, 10, 'Jl. Sabuk merah, Aululik, Kec. Lasiolat, Kabupaten Belu', 0, 1);

$pdf->Cell(189, 10, '', 0, 1);

$pdf->Line(20, 50, 189, 50);
$pdf->SetLineWidth(2);
$pdf->Line(20, 50, 189, 50);

$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Arial', '', 8);
$no = 0;

$pdf->SetFont('Times', '', 11);

// ------------------------------------------------------------------------------------------------------------
$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Yang bertanda tangan dibawah ini kepala desa Dualasi, Kecamatan Lasiolat,  ', 0, 1);
$pdf->Cell(10, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Kabupaten Belu, Provinsi Nusa Tenggara Timur, menerangkan dengan sebenarnya bahwa pada :  ', 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Nama', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datausermeninggal['user_nama'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Tempat, Tanggal lahir', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datausermeninggal['user_tempat_lahir'] . ', ' . $datausermeninggal['user_tgl_lahir'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Jenis kelamin', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datausermeninggal['user_jk'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Pekerjaan', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datausermeninggal['user_pekerjaan'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Status', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datausermeninggal['user_status_perkawinan'], 0, 1);

$pdf->Cell(10, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Telah meninggal dunia pada : ', 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Tempat', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $data['kematian_tempat_meninggal'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Tanggal', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $data['kematian_tanggal_meninggal'], 0, 1);

$pdf->Cell(10, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Surat keterangan ini dibuat berdasarkan keterangan pelapor :', 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Nama lengkap', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datauser['user_nama'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Tempat, Tanggal Lahir', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datauser['user_tempat_lahir'] . ', ' . $datauser['user_tgl_lahir'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Jenis kelamin', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datauser['user_jk'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Pekerjaan', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datauser['user_pekerjaan'], 0, 1);

$pdf->Cell(30, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Status', 0, 0);
$pdf->Cell(10, 8, ':', 0, 0);
$pdf->Cell(10, 8, $datauser['user_status_perkawinan'], 0, 1);

$pdf->Cell(189, 10, '', 0, 1);

$pdf->Cell(10, 8, '', 0, 0);
$pdf->Cell(40, 8, 'Demikian surat keterangan ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.', 0, 1);
// ------------------------------------------------------------------------------------------------------------------------------


$pdf->SetFont('Times', '', 8);

$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(115, 0);
$pdf->Cell(115, 5, 'Desa, ' . $data['kematian_tanggal_verifikasi'], 0, 1);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(120, 0);
$pdf->Cell(110, 5, 'Kepala Desa Dualasi', 0, 1);

$pdf->Cell(189, 20, '', 0, 1);
//$pdf->Image('../assets/img/Mafer-Leitex1666673690.jpeg', 125, 235, 40, 20);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(120, 0);
$pdf->Cell(120, 5, 'Lino Mauk', 0, 1);

$pdf->Output();

ob_end_flush();
//-------------------------------------------------------------------------------------------------------------------------
