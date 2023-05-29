<?php
$adm = $_GET['adm'];
$id = $_GET['id'];
?>

<div class="container" style="margin-top: 130px; margin-bottom: 50px">
    <div class="container mt-5">

        <?php
        if ($adm == 'ktp') {
            $sql = mysqli_query($con, "SELECT * FROM ktp, user WHERE ktp.ktp_user = user.user_id AND ktp.ktp_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">KTP | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['ktp_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>KK</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-ktp/<?= $data['ktp_kk'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <th><?= $data['ktp_alamat'] ?></th>
                </tr>
                <tr>
                    <th>KTP Lama</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-ktp/<?= $data['ktp_lama'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['ktp_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['ktp_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=ktp&status=konfirmasi_rt&id=<?= $data['ktp_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=ktp&status=tolak&id=<?= $data['ktp_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } elseif ($adm == 'kk') {
            $sql = mysqli_query($con, "SELECT * FROM kk, user WHERE kk.kk_user = user.user_id AND kk.kk_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">Kartu Keluarga | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['kk_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>Akte</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kk/<?= $data['kk_akte'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Surat Nikah</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kk/<?= $data['kk_surat_nikah'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['kk_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['kk_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kk&status=konfirmasi_rt&id=<?= $data['kk_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kk&status=tolak&id=<?= $data['kk_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } elseif ($adm == 'domisili') {
            $sql = mysqli_query($con, "SELECT * FROM domisili, user WHERE domisili.domisili_user = user.user_id AND domisili.domisili_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">Domisili | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['domisili_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>KTP</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-domisili/<?= $data['domisili_ktp'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Kartu Keluarga</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-domisili/<?= $data['domisili_kk'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['domisili_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['domisili_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=domisili&status=konfirmasi_rt&id=<?= $data['domisili_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=domisili&status=tolak&id=<?= $data['domisili_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } elseif ($adm == 'pindah') {
            $sql = mysqli_query($con, "SELECT * FROM pindah, user WHERE pindah.pindah_user = user.user_id AND pindah.pindah_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">Pindah | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['pindah_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>Pindah</th>
                    <th>:</th>
                    <th><?= $data['pindah_ket'] ?></th>
                </tr>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <th><?= $data['pindah_nik'] ?></th>
                </tr>
                <tr>
                    <th>KTP</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-pindah/<?= $data['pindah_ktp'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Akte</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-pindah/<?= $data['pindah_akte'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['pindah_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['pindah_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=pindah&status=konfirmasi_rt&id=<?= $data['pindah_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=pindah&status=tolak&id=<?= $data['pindah_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } elseif ($adm == 'kelahiran') {
            $sql = mysqli_query($con, "SELECT * FROM kelahiran, user WHERE kelahiran.kelahiran_user = user.user_id AND kelahiran.kelahiran_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">Kelahiran | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>Nama Anak</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_nama'] ?></th>
                </tr>
                <tr>
                    <th>Jenis Kelamin Anak</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_jk'] ?></th>
                </tr>
                <tr>
                    <th>TTL Anak</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_tempat_lahir'] ?>, <?= $data['kelahiran_tanggal_lahir'] ?></th>
                </tr>
                <tr>
                    <th>Kartu Keluarga</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_kk'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Nama Ayah</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_nama_ayah'] ?></th>
                </tr>
                <tr>
                    <th>KTP Ayah</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_ktp_ayah'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Nama Ibu</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_nama_ibu'] ?></th>
                </tr>
                <tr>
                    <th>KTP Ibu</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_ktp_ibu'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Surat Keterangan Dokter</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_sk_dokter'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['kelahiran_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['kelahiran_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kelahiran&status=konfirmasi_rt&id=<?= $data['kelahiran_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kelahiran&status=tolak&id=<?= $data['kelahiran_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } elseif ($adm == 'kematian') {
            $sql = mysqli_query($con, "SELECT * FROM kematian, user WHERE kematian.kematian_user = user.user_id AND kematian.kematian_id = '$id'");
            $no = 1;
            $data = mysqli_fetch_assoc($sql);
            $uid = $data['kematian_user'];
            $uim = $data['kematian_user_meninggal'];

            $sqlu = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uid'");
            $datau = mysqli_fetch_assoc($sqlu);
            $sqlm = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$uim'");
            $datam = mysqli_fetch_assoc($sqlm);
        ?>
            <h2 class="text-dark">Kematian | <small> <?= $datau['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $datau['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['kematian_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>Nama Meninggal</th>
                    <th>:</th>
                    <th><?= $datam['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tempat Tanggal Meninggal</th>
                    <th>:</th>
                    <th><?= $data['kematian_tempat_meninggal'] ?>, <?= $data['kematian_tanggal_meninggal'] ?></th>
                </tr>
                <tr>
                    <th>Surat Keterangan Dokter</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-kematian/<?= $data['kematian_sk_dokter'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th><?= $data['kematian_status'] ?></th>
                </tr>
            </table>
            <?php
            if ($data['kematian_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kematian&status=konfirmasi_rt&id=<?= $data['kematian_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=kematian&status=tolak&id=<?= $data['kematian_id'] ?>" class="btn btn-sm btn-danger btn-block" onclick="return confirm('Yakin ingin menolak permintaan ini ?')">Tolak Permintaan</a>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        } else {
            $sql = mysqli_query($con, "SELECT * FROM izin_usaha, user WHERE izin_usaha.izin_usaha_user = user.user_id AND izin_usaha.izin_usaha_id = '$id'");
            $data = mysqli_fetch_assoc($sql);
        ?>
            <h2 class="text-dark">Izin Usaha | <small> <?= $data['user_nama'] ?></small></h2>
            <table class="table table-hover">
                <tr>
                    <th>Nama Pengirim</th>
                    <th>:</th>
                    <th><?= $data['user_nama'] ?></th>
                </tr>
                <tr>
                    <th>Tanggal Kirim</th>
                    <th>:</th>
                    <th><?= $data['izin_usaha_tanggal'] ?></th>
                </tr>
                <tr>
                    <th>Nama Usaha</th>
                    <th>:</th>
                    <th><?= $data['izin_usaha_nama'] ?></th>
                </tr>
                <tr>
                    <th>Alamat Usaha</th>
                    <th>:</th>
                    <th><?= $data['izin_usaha_alamat'] ?></th>
                </tr>
                <tr>
                    <th>Nama Pemilik</th>
                    <th>:</th>
                    <th><?= $data['izin_usaha_nama_pemilik'] ?></th>
                </tr>
                <tr>
                    <th>NIK Pemilik</th>
                    <th>:</th>
                    <th><?= $data['izin_usaha_nik'] ?></th>
                </tr>
                <tr>
                    <th>KTP</th>
                    <th>:</th>
                    <th>
                        <a href="../assets/files/files-izinusaha/<?= $data['izin_usaha_ktp'] ?>" target="_blank" class="btn btn-primary">Preview</a>
                    </th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <th>
                        <?php
                        if ($data['izin_usaha_status'] == 'Permintaan ditolak RT') {
                            echo $data['izin_usaha_status'] . '(' . $data['izin_usaha_ket'] . ')';
                        } else {
                            echo $data['izin_usaha_status'];
                        }
                        ?>
                    </th>
                </tr>
            </table>
            <?php
            if ($data['izin_usaha_status'] == 'Menunggu Verifikasi RT') {
            ?>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="?page=verifikasi&adm=izin_usaha&status=konfirmasi_rt&id=<?= $data['izin_usaha_id'] ?>" class="btn btn-sm btn-success btn-block" onclick="return confirm('Yakin ingin konfirmasi permintaan ini ?')">Konfirmasi</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="#" class="btn btn-sm btn-danger btn-block" data-toggle="modal" data-target="#tolakIzinUsaha<?= $data['izin_usaha_id'] ?>">Tolak Permintaan</a>

                        <!-- Modal -->
                        <div class="modal fade" id="tolakIzinUsaha<?= $data['izin_usaha_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="" method="post">
                                        <div class="modal-body">
                                            <label for="">Alasan :</label>
                                            <input type="hidden" class="form-control" name="izin_usaha_id" value="<?= $data['izin_usaha_id'] ?>" required>
                                            <input type="text" class="form-control" name="izin_usaha_ket" required>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <input type="submit" name="simpan_izin_usaha" class="btn btn-primary" value="Kirim">
                                        </div>
                                    </form>
                                    <?php
                                    if (isset($_POST['simpan_izin_usaha'])) {
                                        $izin_usaha_ket = $_POST['izin_usaha_ket'];
                                        $izin_usaha_id = $_POST['izin_usaha_id'];

                                        $sql_izin_usaha = mysqli_query($con, "UPDATE izin_usaha SET izin_usaha_ket = '$izin_usaha_ket' WHERE izin_usaha_id = '$izin_usaha_id'");

                                        echo "<script>window.location='?page=verifikasi&adm=izin_usaha&status=tolak&id=$izin_usaha_id';</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        <?php
        }
        ?>
    </div>
</div>