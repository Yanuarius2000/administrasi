<div class="container-fluid px-4">
    <h1 class="mt-4">Data RT</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data RT</li>
    </ol>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Data RT
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama RT</th>
                                <th>Nama RW</th>
                                <th>Ketua</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $sql = mysqli_query($con, "SELECT * FROM rt, rw WHERE rt.rw_id = rw.rw_id");
                            while ($data = mysqli_fetch_assoc($sql)) {
                                $idketrt = $data['rt_ketua_id'];
                                $sqlketua = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$idketrt'");
                                $dataketua = mysqli_fetch_assoc($sqlketua);
                            ?>
                                <tr>
                                    <td><?= $no++ ?>.</td>
                                    <td><?= $data['rt_nama'] ?></td>
                                    <td><?= $data['rw_nama'] ?></td>
                                    <td><?php
                                        if (mysqli_num_rows($sqlketua) > 0) {
                                        ?>
                                            <?= $dataketua['user_nama'] ?>
                                        <?php
                                        } else {
                                        ?>
                                            -
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="?page=edit_rt&id=<?= $data['rt_id']; ?>" class="text-primary"><i class="fas fa-edit fa-sm"></i></a>
                                        <a href="?page=hapus_rt&id=<?= $data['rt_id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?')" class="text-danger"><i class="fas fa-trash fa-sm"></i></a>
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
                    Tambah RT
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nama" type="text" placeholder="Nama RT" required />
                            <label>Nama RT</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select class="form-control" name="rw_id" required>
                                <option value="">-- Pilih RW --</option>
                                <?php
                                $sqlrw = mysqli_query($con, "SELECT * FROM rw");
                                while ($datarw = mysqli_fetch_assoc($sqlrw)) {
                                ?>
                                    <option value="<?= $datarw['rw_id'] ?>"><?= $datarw['rw_nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <label>Pilih RW</label>
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
    $rw_id = $_POST['rw_id'];

    $sql = mysqli_query($con, "INSERT INTO rt VALUES ('', '$nama', '$rw_id', '0')");

    if ($sql) {
        echo "<script>alert('Berhasil menambahkan RT dan Rw!');window.location='?page=rt';</script>";
    }
}
?>