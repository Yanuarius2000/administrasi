<?php
$id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM jenis_administrasi WHERE jenis_administrasi_id = '$id'");
$data = mysqli_fetch_assoc($sql);

?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit Jenis Administrasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nama" type="text" value="<?= $data['jenis_administrasi_nama'] ?>" required />
                            <label>Nama Jenis Administrasi</label>
                        </div>
                        <input type="submit" name="simpan" class="btn btn-success btn-block" value="Simpan" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $sqledit = mysqli_query($con, "UPDATE jenis_administrasi SET jenis_administrasi_nama='$nama' WHERE jenis_administrasi_id = '$id'");

    if ($sqledit) {
        echo "<script>alert('Berhasil mengubah !');window.location='?page=jenis';</script>";
    } else {
        echo "<script>alert('Gagal mengubah !');window.location='?page=jenis';</script>";
    }
}
?>