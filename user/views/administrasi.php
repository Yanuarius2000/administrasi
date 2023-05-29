<div class="container" style="margin-top: 130px; margin-bottom: 50px">
    <div class="container mt-5">
        <h2 class="text-dark">Data <?= $namauser ?></h2>
        <div id="accordion">

            <!-- ALERT KTP -->
            <?php
            $sqlktp = mysqli_query($con, "SELECT * FROM ktp WHERE ktp_rt = '$ketuart' AND ktp_status = 'Menunggu Verifikasi RT'");
            $numktp = mysqli_num_rows($sqlktp);
            if ($numktp > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan KTP !</strong> <?= $numktp ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT KK -->
            <?php
            $sqlkk = mysqli_query($con, "SELECT * FROM kk WHERE kk_rt = '$ketuart' AND kk_status = 'Menunggu Verifikasi RT'");
            $numkk = mysqli_num_rows($sqlkk);
            if ($numkk > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Kartu Keluarga !</strong> <?= $numkk ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT DOMISILI -->
            <?php
            $sqldomisili = mysqli_query($con, "SELECT * FROM domisili WHERE domisili_rt = '$ketuart' AND domisili_status = 'Menunggu Verifikasi RT'");
            $numdomisili = mysqli_num_rows($sqldomisili);
            if ($numdomisili > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Domisili !</strong> <?= $numdomisili ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT PINDAH PENDUDUK -->
            <?php
            $sqlpindah = mysqli_query($con, "SELECT * FROM pindah WHERE pindah_rt = '$ketuart' AND pindah_status = 'Menunggu Verifikasi RT'");
            $numpindah = mysqli_num_rows($sqlpindah);
            if ($numpindah > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Pindah Penduduk !</strong> <?= $numpindah ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT KELAHIRAN -->
            <?php
            $sqlkelahiran = mysqli_query($con, "SELECT * FROM kelahiran WHERE kelahiran_rt = '$ketuart' AND kelahiran_status = 'Menunggu Verifikasi RT'");
            $numkelahiran = mysqli_num_rows($sqlkelahiran);
            if ($numkelahiran > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Kelahiran !</strong> <?= $numkelahiran ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT KEMATIAN -->
            <?php
            $sqlkematian = mysqli_query($con, "SELECT * FROM kematian WHERE kematian_rt = '$ketuart' AND kematian_status = 'Menunggu Verifikasi RT'");
            $numkematian = mysqli_num_rows($sqlkematian);
            if ($numkematian > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Kematian !</strong> <?= $numkematian ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->
            <!-- ALERT IZIN USAHA -->
            <?php
            $sqlizin_usaha = mysqli_query($con, "SELECT * FROM izin_usaha WHERE izin_usaha_rt = '$ketuart' AND izin_usaha_status = 'Menunggu Verifikasi RT'");
            $numizin_usaha = mysqli_num_rows($sqlizin_usaha);
            if ($numizin_usaha > 0) {
            ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Pemberitahuan Izin Usaha !</strong> <?= $numizin_usaha ?> data sedang menunggu verifikasi!.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php
            }
            ?>
            <!-- ================================================================= -->

            <!-- 1 -->
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Kartu Tanda Penduduk
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="card-body table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM ktp, user WHERE ktp.ktp_user = user.user_id AND ktp.ktp_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['ktp_tanggal']; ?></td>
                                            <td><?= $data['ktp_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=ktp&id=<?= $data['ktp_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th>Nama</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kk, user WHERE kk.kk_user = user.user_id AND kk.kk_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['kk_tanggal']; ?></td>
                                            <td><?= $data['kk_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=kk&id=<?= $data['kk_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th>Nama</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM domisili, user WHERE domisili.domisili_user = user.user_id AND domisili.domisili_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['domisili_tanggal']; ?></td>
                                            <td><?= $data['domisili_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=domisili&id=<?= $data['domisili_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th>Nama</th>
                                        <th>Pindah</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM pindah, user WHERE pindah.pindah_user = user.user_id AND pindah.pindah_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['pindah_ket']; ?></td>
                                            <td><?= $data['pindah_tanggal']; ?></td>
                                            <td><?= $data['pindah_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=pindah&id=<?= $data['pindah_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th>Nama</th>
                                        <th>Anak</th>
                                        <th>TTL</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kelahiran, user WHERE kelahiran.kelahiran_user = user.user_id AND kelahiran.kelahiran_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['user_nama']; ?></td>
                                            <td><?= $data['kelahiran_nama']; ?></td>
                                            <td><?= $data['kelahiran_tempat_lahir']; ?>, <?= $data['kelahiran_tanggal_lahir']; ?></td>
                                            <td><?= $data['kelahiran_tanggal']; ?></td>
                                            <td><?= $data['kelahiran_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=kelahiran&id=<?= $data['kelahiran_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th>Nama Yang Meninggal</th>
                                        <th>TTM</th>
                                        <th>Tanggal Ajukan</th>
                                        <th>Status</th>
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM kematian, user WHERE kematian.kematian_user = user.user_id AND kematian.kematian_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                        $uid = $data['kematian_user'];
                                        $uim = $data['kematian_user_meninggal'];

                                        $sqlu = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uid'");
                                        $datau = mysqli_fetch_assoc($sqlu);
                                        $sqlm = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uim'");
                                        $datam = mysqli_fetch_assoc($sqlm);
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $datau['user_nama']; ?></td>
                                            <td><?= $datam['user_nama']; ?></td>
                                            <td><?= $data['kematian_tempat_meninggal']; ?>, <?= $data['kematian_tanggal_meninggal']; ?></td>
                                            <td><?= $data['kematian_tanggal']; ?></td>
                                            <td><?= $data['kematian_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=kematian&id=<?= $data['kematian_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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
                                        <th><i class="fas fa-cogs"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = mysqli_query($con, "SELECT * FROM izin_usaha, user WHERE izin_usaha.izin_usaha_user = user.user_id AND izin_usaha_rt = '$ketuart'");
                                    $no = 1;
                                    while ($data = mysqli_fetch_assoc($sql)) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?>.</td>
                                            <td><?= $data['izin_usaha_nama']; ?></td>
                                            <td><?= $data['izin_usaha_nama_pemilik']; ?></td>
                                            <td><?= $data['izin_usaha_tanggal']; ?></td>
                                            <td><?= $data['izin_usaha_status']; ?></td>
                                            <td>
                                                <a href="?page=detail&adm=izin_usaha&id=<?= $data['izin_usaha_id'] ?>" class="btn btn-sm btn-info"><i class="fas fa-info-circle"></i></a>
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