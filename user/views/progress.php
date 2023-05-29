<div class="container" style="margin-top: 130px; margin-bottom: 50px">
    <div class="container mt-5">
        <h2 class="text-dark">Data <?= $namauser ?></h2>
        <div id="accordion">
            <!-- 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Kartu Tanda Penduduk
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM ktp WHERE ktp_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['ktp_tanggal']; ?></td>
                                            <td><?= $data['ktp_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['ktp_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-ktp-user.php?id=<?= $data['ktp_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 2 -->
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kartu Keluarga
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kk WHERE kk_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['kk_tanggal']; ?></td>
                                            <td><?= $data['kk_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['kk_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-kk-user.php?id=<?= $data['kk_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 3 -->
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Domisili
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM domisili WHERE domisili_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['domisili_tanggal']; ?></td>
                                            <td><?= $data['domisili_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['domisili_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-domisili-user.php?id=<?= $data['domisili_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 4 -->
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Pindah Penduduk
                        </button>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Pindah</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM pindah WHERE pindah_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['pindah_ket']; ?></td>
                                            <td><?= $data['pindah_tanggal']; ?></td>
                                            <td><?= $data['pindah_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['pindah_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-pindah-user.php?id=<?= $data['pindah_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 5 -->
            <div class="card">
                <div class="card-header" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Kelahiran
                        </button>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Anak</th>
                                        <th>TTL</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kelahiran WHERE kelahiran_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['kelahiran_nama']; ?></td>
                                            <td><?= $data['kelahiran_tempat_lahir']; ?>, <?= $data['kelahiran_tanggal_lahir']; ?></td>
                                            <td><?= $data['kelahiran_tanggal']; ?></td>
                                            <td><?= $data['kelahiran_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['kelahiran_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-kelahiran-user.php?id=<?= $data['kelahiran_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 6 -->
            <div class="card">
                <div class="card-header" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Kematian
                        </button>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>TTM</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kematian, user WHERE kematian.kematian_user_meninggal = user.user_id AND kematian_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['kematian_tempat_meninggal']; ?>, <?= $data['kematian_tanggal_meninggal']; ?></td>
                                            <td><?= $data['kematian_tanggal']; ?></td>
                                            <td><?= $data['kematian_status']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['kematian_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-kematian-user.php?id=<?= $data['kematian_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
            <!-- 7 -->
            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Izin Usaha
                        </button>
                    </h5>
                </div>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Nama Pemilik</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM izin_usaha WHERE izin_usaha_user = '$userid'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['izin_usaha_nama']; ?></td>
                                            <td><?= $data['izin_usaha_nama_pemilik']; ?></td>
                                            <td><?= $data['izin_usaha_tanggal']; ?></td>
                                            <td>
                                                <?php
                                                if ($data['izin_usaha_status'] == 'Permintaan ditolak RT') {
                                                    echo $data['izin_usaha_status'] . '(' . $data['izin_usaha_ket'] . ')';
                                                } else {
                                                    echo $data['izin_usaha_status'];
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($data['izin_usaha_status'] == 'Selesai') {
                                                ?>
                                                    <a href="../report/report-izin_usaha-user.php?id=<?= $data['izin_usaha_id'] ?>&userid=<?= $userid ?>" class="btn btn-sm btn-primary" target="_blank"><i class="fas fa-print"></i></a>
                                                <?php
                                                }
                                                ?>
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
            </div>
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
                                        $sqlrt = mysqli_query($con, "SELECT * FROM rt ORDER BY rt_nama ASC");
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