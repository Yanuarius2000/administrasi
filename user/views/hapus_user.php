<?php
$id = $_GET['id'];

$sql = mysqli_query($con, "DELETE FROM user WHERE user_id = '$id'");

if ($sql) {
    echo "<script>alert('Hapus data Berhasil !');window.location='?page=home';</script>";
} else {
    echo "<script>alert('Hapus data Gagal !');window.location='?page=home';</script>";
}
