<div class="container-fluid px-4">
    <h1 class="mt-4">Jenis Administrasi</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Jenis Administrasi</li>
    </ol>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data Jenis Administrasi
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Jenis Administrasi</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($con, "SELECT * FROM jenis_administrasi");
                            while ($data = mysqli_fetch_assoc($sql)) {
                            ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data['jenis_administrasi_nama'] ?></td>
                                    <td>
                                        <a href="?page=edit_jenis&id=<?= $data['jenis_administrasi_id'] ?>" class="text-primary"><i class="fas fa-edit fa-sm"></i></a>
                                        <a href="?page=hapus_jenis&id=<?= $data['jenis_administrasi_id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?')" class="text-danger"><i class="fas fa-trash fa-sm"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tambah Jenis Administrasi
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nama" type="text" placeholder="Nama Jenis Administrasi" required />
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

    $sql = mysqli_query($con, "INSERT INTO jenis_administrasi VALUES ('', '$nama')");

    if ($sql) {
        echo "<script>alert('Berhasil menambahkan !');window.location='?page=jenis';</script>";
    }
}
?>