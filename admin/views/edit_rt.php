<?php
$id = $_GET['id'];

$sql = mysqli_query($con, "SELECT * FROM rt WHERE rt_id = '$id'");
$data = mysqli_fetch_assoc($sql);

?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Edit RT
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama RT</label>
                            <input class="form-control" name="nama" type="text" value="<?= $data['rt_nama'] ?>" required />
                        </div>
                        <div class="form-group">
                            <label>Pilih RW</label>
                            <select class="form-control" name="rw_id" required>
                                <option value="">-- Pilih RW --</option>
                                <?php
                                $sqlrw = mysqli_query($con, "SELECT * FROM rw");
                                while ($datarw = mysqli_fetch_assoc($sqlrw)) {
                                    $sel = '';
                                    if ($data['rw_id'] == $datarw['rw_id']) {
                                        $sel = 'selected';
                                    } else {
                                        $sel = '';
                                    }
                                ?>
                                    <option value="<?= $datarw['rw_id'] ?>" <?= $sel ?>><?= $datarw['rw_nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Ketua RT</label>
                            <select class="form-control" name="rt_ketua_id">
                                <option value="0">-- Pilih Ketua --</option>
                                <?php
                                $sqlketua = mysqli_query($con, "SELECT * FROM user WHERE user_rt_id = '$id'");
                                while ($dataketua = mysqli_fetch_assoc($sqlketua)) {
                                    $sel = '';
                                    if ($data['rt_ketua_id'] == $dataketua['user_id']) {
                                        $sel = 'selected';
                                    } else {
                                        $sel = '';
                                    }
                                ?>
                                    <option value="<?= $dataketua['user_id'] ?>" <?= $sel ?>><?= $dataketua['user_nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
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
    $rt_ketua_id = $_POST['rt_ketua_id'];

    $sqledit = mysqli_query($con, "UPDATE rt SET rt_nama='$nama', rw_id='$rw_id', rt_ketua_id='$rt_ketua_id' WHERE rt_id = '$id'");

    if ($sqledit) {
        echo "<script>alert('Berhasil mengubah data Rt dan Rw !');window.location='?page=rt';</script>";
    } else {
        echo "<script>alert('Gagal mengubah data Rt dan Rw !');window.location='?page=rt';</script>";
    }
}
?>