<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM user, rt, rw WHERE user.user_rt_id = rt.rt_id AND user.user_rw_id = rw.rw_id AND user.user_id = '$id'");
$data = mysqli_fetch_assoc($sql);
?>

<div class="container" style="margin-top: 130px;">
    <div class="container mt-5">
        <form action="" method="post">
            <div class="modal-body">
                <table>
                    <tr>
                        <th>Nama</th>
                        <th>:</th>
                        <th><?= $data['user_nama'] ?></th>
                    </tr>
                    <tr>
                        <th>TTL</th>
                        <th>:</th>
                        <th><?= $data['user_tempat_lahir'] ?>, <?= $data['user_tgl_lahir'] ?></th>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <th>:</th>
                        <th><?= $data['user_jk'] ?></th>
                    </tr>
                    <tr>
                        <th>Nomor</th>
                        <th>:</th>
                        <th><?= $data['user_wa'] ?></th>
                    </tr>
                    <tr>
                        <th>Status Perkawinan</th>
                        <th>:</th>
                        <th><?= $data['user_status_perkawinan'] ?></th>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <th>:</th>
                        <th><?= $data['user_pekerjaan'] ?></th>
                    </tr>
                    <tr>
                        <th>E-Mail</th>
                        <th>:</th>
                        <th><?= $data['user_email'] ?></th>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group mt-3">
                            <label>Verifikasi</label>
                            <select class="form-control" name="ver" required>
                                <?php
                                if ($data['user_status'] == 'Aktif') {
                                ?>
                                    <option value="">-- Verifikasi --</option>
                                    <option value="Aktif" selected>Aktif</option>
                                    <option value="Non-Aktif">Non-Aktif</option>
                                    <option value="Non-Aktif">Ditolak</option>
                                <?php
                                } elseif ($data['user_status'] == 'Non-Aktif') {
                                ?>
                                    <option value="">-- Verifikasi --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non-Aktif" selected>Non-Aktif</option>
                                    <option value="Non-Aktif">Ditolak</option>
                                <?php
                                } elseif ($data['user_status'] == 'Ditolak') {
                                ?>
                                    <option value="">-- Verifikasi --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non-Aktif">Non-Aktif</option>
                                    <option value="Non-Aktif" selected>Ditolak</option>
                                <?php
                                } else {
                                ?>
                                    <option value="">-- Verifikasi --</option>
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non-Aktif">Non-Aktif</option>
                                    <option value="Non-Aktif">Ditolak</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Simpan" name="save">
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['save'])) {
    $ver = $_POST['ver'];
    $sqledit = mysqli_query($con, "UPDATE user SET user_status = '$ver' WHERE user_id = '$id'");
    if ($sqledit) {
        echo "<script>alert('Verifikasi Berhasil !');window.location='?page=warga';</script>";
    } else {
        echo "<script>alert('Verifikasi Gagal !');window.location='?page=warga';</script>";
    }
}
?>