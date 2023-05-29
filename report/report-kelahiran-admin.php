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
$pdf->Cell(35, 0);
$pdf->Cell(35, 10, 'LAPORAN ADMINISTRASI KELAHIRAN', 0, 1);

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
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(15, 5, 'Periode', 0, 0);
$pdf->Cell(3, 5, ':', 0, 0);
$pdf->Cell(15, 5, $dari, 0, 0);
$pdf->Cell(3, 5, ' - ', 0, 0);
$pdf->Cell(15, 5, $hingga, 0, 1);

$pdf->Cell(189, 5, '', 0, 1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(5, 5, '', 0, 0);
$pdf->Cell(6, 5, 'No.', 1, 0);
$pdf->Cell(40, 5, 'Nama Orang', 1, 0);
$pdf->Cell(15, 5, 'RT', 1, 0);
$pdf->Cell(40, 5, 'Nama Anak', 1, 0);
$pdf->Cell(30, 5, 'TTL Anak', 1, 0);
$pdf->Cell(20, 5, 'Jenis Kelamin', 1, 0);
$pdf->Cell(20, 5, 'Verifikasi', 1, 1);

$pdf->SetFont('Arial', '', 8);
$no = 1;
$sql = mysqli_query($con, "SELECT * FROM kelahiran, user, rt WHERE kelahiran.kelahiran_user=user.user_id AND kelahiran.kelahiran_rt=rt.rt_id AND kelahiran.kelahiran_tanggal_verifikasi BETWEEN '$dari' AND '$hingga'");
while ($data = mysqli_fetch_assoc($sql)) {
    $pdf->Cell(5, 5, '', 0, 0);
    $pdf->Cell(6, 5, $no++ . '.', 1, 0);
    $pdf->Cell(40, 5, $data['user_nama'], 1, 0);
    $pdf->Cell(15, 5, $data['rt_nama'], 1, 0);
    $pdf->Cell(40, 5, $data['kelahiran_nama'], 1, 0);
    $pdf->Cell(30, 5, $data['kelahiran_tempat_lahir'] . ', ' . $data['kelahiran_tanggal_lahir'], 1, 0);
    $pdf->Cell(20, 5, $data['kelahiran_jk'], 1, 0);
    $pdf->Cell(20, 5, $data['kelahiran_tanggal_verifikasi'], 1, 1);
}


// $sqlkades = mysqli_query($con, "SELECT * FROM kepala_desa LIMIT 1");
// $datakades = mysqli_fetch_assoc($sqlkades);

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
