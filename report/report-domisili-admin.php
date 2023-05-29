<?php
ob_start();

include '../system/koneksi.php';

$dari = $_GET['dari'];
$hingga = $_GET['hingga'];

require('../assets/fpdf16/fpdf.php');

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Arial', 'B', 18, 'C');
$pdf->Cell(40, 0);
$pdf->Cell(40, 10, 'LAPORAN ADMINISTRASI DOMISILI', 0, 1);

$pdf->SetFont('Arial', 'B', 15, 'C');
$pdf->Cell(65, 0);
$pdf->Cell(65, 10, 'Kantor Desa Dualasi', 0, 1);

$pdf->SetFont('Arial', 'I', 12, 'C');
$pdf->Cell(40, 0);
$pdf->Cell(40, 10, 'Jl. Sabuk merah, Aululik, Kec. Lasiolat, Kabupaten Belu', 0, 1);

$pdf->Cell(189, 5, '', 0, 1);

$pdf->Line(20, 50, 189, 50);
// $pdf->SetLineWidth(2);
$pdf->Line(20, 50, 189, 50);

$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(40, 5, '', 0, 0);
$pdf->Cell(15, 5, 'Periode', 0, 0);
$pdf->Cell(3, 5, ':', 0, 0);
$pdf->Cell(15, 5, $dari, 0, 0);
$pdf->Cell(3, 5, ' - ', 0, 0);
$pdf->Cell(15, 5, $hingga, 0, 1);

$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(40, 5, '', 0, 0);
$pdf->Cell(6, 5, 'No.', 1, 0);
$pdf->Cell(50, 5, 'Nama Orang', 1, 0);
$pdf->Cell(20, 5, 'RT', 1, 0);
$pdf->Cell(30, 5, 'Tanggal Verifikasi', 1, 1);

$pdf->SetFont('Arial', '', 8);
$no = 1;
$sql = mysqli_query($con, "SELECT * FROM domisili, user, rt WHERE domisili.domisili_user=user.user_id AND domisili.domisili_rt=rt.rt_id AND domisili.domisili_tanggal_verifikasi BETWEEN '$dari' AND '$hingga'");
while ($data = mysqli_fetch_assoc($sql)) {
    $pdf->Cell(40, 5, '', 0, 0);
    $pdf->Cell(6, 5, $no++ . '.', 1, 0);
    $pdf->Cell(50, 5, $data['user_nama'], 1, 0);
    $pdf->Cell(20, 5, $data['rt_nama'], 1, 0);
    $pdf->Cell(30, 5, $data['domisili_tanggal_verifikasi'], 1, 1);
}


$pdf->SetFont('Times', '', 8);

$pdf->Cell(189, 10, '', 0, 1);
$pdf->Cell(189, 10, '', 0, 1);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(115, 0);
$pdf->Cell(115, 5, 'Dualasi, ' . date('Y-m-d'), 0, 1);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(120, 0);
$pdf->Cell(110, 5, 'Kepala Desa Dualasi', 0, 1);

$pdf->Cell(189, 20, '', 0, 1);
// $pdf->Image('../assets/img/Mafer-Leitex1666673690.jpeg', 125, 148, 40, 20);

$pdf->SetFont('Times', '', 10);
$pdf->Cell(120, 0);
$pdf->Cell(120, 5, 'Lino Mauk', 0, 1);

$pdf->Output();

ob_end_flush();
//-------------------------------------------------------------------------------------------------------------------------
