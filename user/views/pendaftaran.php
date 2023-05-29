<div class="container" style="margin-top: 130px;">
    <div class="container mt-5">
        <h2 class="text-dark">Data Registrasi Warga RT <?= $namart ?></h2>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <?php
                if ($_SESSION['id_rt'] != '0') {
                ?>
                    <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#DaftarModal">Tambah Warga</a>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Telepon</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($con, "SELECT * FROM user WHERE user_rt_id = '$ketuart' AND user_status = 'Menunggu Konfirmasi'");
                    $no = 1;
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++; ?>.</td>
                            <td><?= $data['user_nama']; ?></td>
                            <td><?= $data['user_tempat_lahir'] ?>, <?= $data['user_tgl_lahir'] ?></td>
                            <td><?= $data['user_wa']; ?></td>
                            <td><?= $data['user_status']; ?></td>
                            <td>
                                <a href="?page=detail_verifikasi&id=<?= $data['user_id'] ?>" class="text-primary"><i class="fas fa-info-circle fa-md"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <!-- Modal Daftar -->
    <div class="modal fade" id="DaftarModal" tabindex="-1" role="dialog" aria-labelledby="DaftarModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Daftar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control" name="user_nama" required placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="user_tempat_lahir" required placeholder="Tempat Lahir">
                                </div>
                                <div class="col-lg-6">
                                    <input type="date" class="form-control" name="user_tgl_lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control" name="user_jk" required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <select class="form-control" name="user_rt_id" required>
                                        <option value="">-- Pilih RT --</option>
                                        <?php
                                        $sqlrt = mysqli_query($con, "SELECT * FROM rt WHERE rt_id = '$ketuart' ORDER BY rt_nama ASC");
                                        while ($datart = mysqli_fetch_assoc($sqlrt)) {
                                        ?>
                                            <option value="<?= $datart['rt_id'] ?>"><?= $datart['rt_nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <select class="form-control" name="user_rw_id" required>
                                        <option value="">-- Pilih RW --</option>
                                        <?php
                                        $sqlrw = mysqli_query($con, "SELECT * FROM rw ORDER BY rw_nama ASC");
                                        while ($datarw = mysqli_fetch_assoc($sqlrw)) {
                                        ?>
                                            <option value="<?= $datarw['rw_id'] ?>"><?= $datarw['rw_nama'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nomor Whatsapp</label>
                            <input type="text" class="form-control" name="user_wa" required placeholder="Whatsapp">
                        </div>
                        <div class="form-group">
                            <label>Status Perkawinan</label>
                            <select class="form-control" name="user_status_perkawinan" required>
                                <option value="">-- Pilih Status Perkawinan --</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Sudah Menikah">Sudah Menikah</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan</label>
                            <select class="form-control" name="user_pekerjaan" required>
                                <option value="">-- Pilih Pekerjaan --</option>
                                <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                <option value="Karyawan Swasta">Karyawan Swasta</option>
                                <option value="Pegawai Negeri">Pegawai Negeri</option>
                                <option value="TNI/POLRI">TNI/POLRI</option>
                                <option value="Wiraswasta">Wiraswasta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="user_email" required placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" name="user_password" required placeholder="Password">
                                </div>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" name="user_password2" required placeholder="Konfirmasi Password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Daftar -->

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
    $user_password = $_POST['user_password'];
    $user_password2 = $_POST['user_password2'];
    $password = md5($user_password);

    if ($user_password != $user_password2) {
        echo "<script>alert('Password Tidak Serasi ! Ulangi Pendaftaran !');window.location='?page=home';</script>";
    } else {
        $sql = mysqli_query($con, "INSERT INTO user VALUES('', '$user_nama', '$user_tempat_lahir', '$user_tgl_lahir', '$user_jk', '$user_rt_id', '$user_rw_id', '$user_wa', '$user_status_perkawinan', '$user_pekerjaan', '$user_status', '$user_email', '$password')");
        if ($sql) {
            echo "<script>alert('Pendaftaran Berhasil !');window.location='?page=home';</script>";
        } else {
            echo "<script>alert('Pendaftaran Gagal !');window.location='?page=home';</script>";
        }
    }
}
?>