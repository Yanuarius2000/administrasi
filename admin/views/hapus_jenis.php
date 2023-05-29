<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "DELETE FROM jenis_administrasi WHERE jenis_administrasi_id = '$id'");
if ($sql) {
    echo "<script>alert('Berhasil menghapus !');window.location='?page=jenis';</script>";
} else {
    echo "<script>alert('Gagal menghapus !');window.location='?page=jenis';</script>";
}
