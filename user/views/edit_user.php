<?php
$id = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$id'");
$data = mysqli_fetch_assoc($sql);
?>

<div class="container" style="margin-top: 130px;">
    <div class="container mt-5 mb-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="user_nama" required value="<?= $data['user_nama'] ?>">
                </div>
                <div class="form-group">
                    <label>Tempat, Tanggal Lahir</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" name="user_tempat_lahir" required value="<?= $data['user_tempat_lahir'] ?>">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" name="user_tgl_lahir" required value="<?= $data['user_tgl_lahir'] ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select class="form-control" name="user_jk" required>
                        <?php
                        if ($data['user_jk'] == 'Laki-laki') {
                        ?>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki" selected>Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        <?php
                        } elseif ($data['user_jk'] == 'Perempuan') {
                        ?>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                        <?php
                        } else {
                        ?>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <select class="form-control" name="user_rt_id" required>
                                <option value="">-- Pilih RT --</option>
                                <?php
                                $sel = '';
                                $sqlrt = mysqli_query($con, "SELECT * FROM rt ORDER BY rt_nama ASC");
                                while ($datart = mysqli_fetch_assoc($sqlrt)) {
                                    if ($data['user_rt_id'] == $datart['rt_id']) {
                                        $sel = 'selected';
                                    }
                                ?>
                                    <option value="<?= $datart['rt_id'] ?>" <?= $sel ?>><?= $datart['rt_nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <select class="form-control" name="user_rw_id" required>
                                <option value="">-- Pilih RW --</option>
                                <?php
                                $s = '';
                                $sqlrw = mysqli_query($con, "SELECT * FROM rw ORDER BY rw_nama ASC");
                                while ($datarw = mysqli_fetch_assoc($sqlrw)) {
                                    if ($data['user_rw_id'] == $datarw['rw_id']) {
                                        $s = 'selected';
                                    }
                                ?>
                                    <option value="<?= $datarw['rw_id'] ?>" <?= $s ?>><?= $datarw['rw_nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nomor Whatsapp</label>
                    <input type="text" class="form-control" name="user_wa" required value="<?= $data['user_wa'] ?>">
                </div>
                <div class="form-group">
                    <label>Status Perkawinan</label>
                    <select class="form-control" name="user_status_perkawinan" required>
                        <?php
                        if ($data['user_status_perkawinan'] == 'Belum Menikah') {
                        ?>
                            <option value="">-- Pilih Status Perkawinan --</option>
                            <option value="Belum Menikah" selected>Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        <?php
                        } elseif ($data['user_status_perkawinan'] == 'Sudah Menikah') {
                        ?>
                            <option value="">-- Pilih Status Perkawinan --</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah" selected>Sudah Menikah</option>
                        <?php
                        } else {
                        ?>
                            <option value="">-- Pilih Status Perkawinan --</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pekerjaan</label>
                    <select class="form-control" name="user_pekerjaan" required>
                        <?php
                        if ($data['user_pekerjaan'] == 'Pelajar/Mahasiswa') {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa" selected>Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        <?php
                        } elseif ($data['user_pekerjaan'] == 'Karyawan Swasta') {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta" selected>Karyawan Swasta</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        <?php
                        } elseif ($data['user_pekerjaan'] == 'Pegawai Negeri') {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pegawai Negeri" selected>Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        <?php
                        } elseif ($data['user_pekerjaan'] == 'TNI/POLRI') {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI" selected>TNI/POLRI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        <?php
                        } elseif ($data['user_pekerjaan'] == 'Wiraswasta') {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Wiraswasta" selected>Wiraswasta</option>
                        <?php
                        } else {
                        ?>
                            <option value="">-- Pilih Pekerjaan --</option>
                            <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pegawai Negeri">Pegawai Negeri</option>
                            <option value="TNI/POLRI">TNI/POLRI</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="user_email" required value="<?= $data['user_email'] ?>">
                </div>
            </div>
            <div class="row">
                <input type="submit" class="btn btn-primary btn-block" name="simpan" value="Simpan">
            </div>
        </form>
    </div>
</div>

<?php
if (isset($_POST['simpan'])) {
    $user_nama = $_POST['user_nama'];
    $user_tempat_lahir = $_POST['user_tempat_lahir'];
    $user_tgl_lahir = $_POST['user_tgl_lahir'];
    $user_jk = $_POST['user_jk'];
    $user_rt_id = $_POST['user_rt_id'];
    $user_rw_id = $_POST['user_rw_id'];
    $user_wa = $_POST['user_wa'];
    $user_status_perkawinan = $_POST['user_status_perkawinan'];
    $user_pekerjaan = $_POST['user_pekerjaan'];
    $user_status = 'Aktif';
    $user_email = $_POST['user_email'];

    $sql = mysqli_query($con, "UPDATE user SET user_nama='$user_nama', user_tempat_lahir='$user_tempat_lahir', user_tgl_lahir='$user_tgl_lahir', user_jk='$user_jk', user_rt_id='$user_rt_id', user_rw_id='$user_rw_id', user_wa='$user_wa', user_status_perkawinan='$user_status_perkawinan', user_pekerjaan='$user_pekerjaan', user_status='$user_status', user_email='$user_email' WHERE user_id = '$id'");
    if ($sql) {
        echo "<script>alert('Ubah data Berhasil !');window.location='?page=home';</script>";
    } else {
        echo "<script>alert('Ubah data Gagal !');window.location='?page=home';</script>";
    }
}
?>