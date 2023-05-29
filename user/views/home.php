<div class="hero">
    <div class="hero-slide">
        <div class="img overlay" style="background-image: url('../images/img/foto4.jpeg')"></div>
        <div class="img overlay" style="background-image: url('../images/img/foto1.jpeg')"></div>
        <div class="img overlay" style="background-image: url('../images/img/foto3.jpeg')"></div>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">
                <h1 class="heading" data-aos="fade-up">
                    Welcome... <br>
                    <?= $namauser ?>
                </h1>
                <!-- <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
                    <input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. New York" />
                    <button type="submit" class="btn btn-primary">Search</button>
                </form> -->
            </div>
        </div>
    </div>
</div>

<!-- ====================================================================================== -->

<div class="container mt-5">
    <h2 class="text-dark">RT <?= $namart ?></h2>
    <?php
    if ($_SESSION['id_rt'] != '0') {
    ?>
        <div class="row">
            <div class="col-lg-6 mt-4">
                <a href="" class="btn btn-sm btn-success" data-toggle="modal" data-target="#DaftarModal">Tambah Warga</a>
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
                    $sql = mysqli_query($con, "SELECT * FROM user, rt WHERE user.user_rt_id = rt.rt_id AND user.user_rt_id = '$ketuart'");
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
                                <?php
                                if ($_SESSION['id_rt'] != '0') {
                                ?>
                                    <!-- <a href="?page=edit_user&id=<?= $data['user_id'] ?>" class="text-info"><i class="fas fa-edit fa-md"></i></a>
                                    <a href="?page=hapus_user&id=<?= $data['user_id'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ???')" class="text-danger"><i class="fas fa-trash fa-md"></i></a> -->
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
    <?php
    } else {
    ?>

        <section class="features-1 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Pindah Penduduk</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalPindah">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Izin Usaha</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalIzin">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Kartu Keluarga</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalKK">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Kartu Tanda Penduduk</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalKTP">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Kelahiran</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalKelahiran">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Kematian</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalKematian">Start!</a></p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature">
                            <span class="flaticon-house-3"></span>
                            <h3 class="mb-3">Domisili</h3>
                            <p>
                            </p>
                            <p><a href="#" class="btn btn-suceess learn-more" data-toggle="modal" data-target="#ModalDomisili">Start!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php
    }
    ?>
</div>

<!-- Modal Pindah -->
<div class="modal fade" id="ModalPindah" tabindex="-1" role="dialog" aria-labelledby="ModalPindahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalPindahLabel">Pindah Penduduk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Jenis Pindah Penduduk</label>
                        <select class="form-control" name="pindah_ket" required>
                            <option value="Masuk">Masuk</option>
                            <option value="Keluar">Keluar</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dari</label>
                        <input type="text" class="form-control" name="pindah_dari" placeholder="Dari">
                    </div>
                    <div class="form-group">
                        <label>Tujuan</label>
                        <input type="text" class="form-control" name="pindah_tujuan" placeholder="Tujuan">
                    </div>
                    <div class="form-group">
                        <label>NIK</label>
                        <input type="text" class="form-control" name="pindah_nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <label>Upload KTP</label>
                        <input type="file" class="form-control" name="pindah_ktp">
                    </div>
                    <div class="form-group">
                        <label>Upload Akte Kelahiran</label>
                        <input type="file" class="form-control" name="pindah_akte">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpanpindah" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpanpindah'])) {
                $pindah_user = $iduser;
                $pindah_rt = $ketuart;
                $pindah_tanggal = date('Y-m-d');
                $pindah_ket = $_POST['pindah_ket'];
                $pindah_dari = $_POST['pindah_dari'];
                $pindah_tujuan = $_POST['pindah_tujuan'];
                $pindah_nik = $_POST['pindah_nik'];

                $extensi = explode(".", $_FILES['pindah_ktp']['name']);
                $pindah_ktp = "$namauser - Pindah KTP - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['pindah_ktp']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-pindah/" . $pindah_ktp);

                $extensi = explode(".", $_FILES['pindah_akte']['name']);
                $pindah_akte = "$namauser - Pindah AKTE - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['pindah_akte']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-pindah/" . $pindah_akte);

                $pindah_status = 'Menunggu Verifikasi RT';
                $pindah_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO pindah VALUES('', '$pindah_user', '$pindah_rt', '$pindah_tanggal', '$pindah_ket', '$pindah_dari', '$pindah_tujuan', '$pindah_nik', '$pindah_ktp', '$pindah_akte', '$pindah_status', '$pindah_tanggal_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ================================================================================================ -->

<!-- Modal Izin -->
<div class="modal fade" id="ModalIzin" tabindex="-1" role="dialog" aria-labelledby="ModalIzinLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalIzinLabel">Izin Usaha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Usaha</label>
                        <input type="text" class="form-control" name="izin_usaha_nama" placeholder="Nama Usaha">
                    </div>
                    <div class="form-group">
                        <label>Alamat Usaha</label>
                        <textarea class="form-control" name="izin_usaha_alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Nama Lengkap Pemilik</label>
                        <input type="text" class="form-control" name="izin_usaha_nama_pemilik" placeholder="Nama Pemilik Usaha">
                    </div>
                    <div class="form-group">
                        <label>NIK Pemilik</label>
                        <input type="text" class="form-control" name="izin_usaha_nik" placeholder="NIK Pemilik Usaha">
                    </div>
                    <div class="form-group">
                        <label>Upload KTP Pemilik</label>
                        <input type="file" class="form-control" name="izin_usaha_ktp">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpanizin" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpanizin'])) {
                $izin_usaha_user = $iduser;
                $izin_usaha_rt = $ketuart;
                $izin_usaha_tanggal = date('Y-m-d');
                $izin_usaha_nama = $_POST['izin_usaha_nama'];
                $izin_usaha_alamat = $_POST['izin_usaha_alamat'];
                $izin_usaha_nama_pemilik = $_POST['izin_usaha_nama_pemilik'];
                $izin_usaha_nik = $_POST['izin_usaha_nik'];

                $extensi = explode(".", $_FILES['izin_usaha_ktp']['name']);
                $izin_usaha_ktp = "$namauser - Izin Usaha KTP - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['izin_usaha_ktp']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-izinusaha/" . $izin_usaha_ktp);

                $izin_usaha_status = 'Menunggu Verifikasi RT';
                $izin_usaha_tanggal_verifikasi = '';
                $izin_usaha_ket = '';

                $sql = mysqli_query($con, "INSERT INTO izin_usaha VALUES('', '$izin_usaha_user', '$izin_usaha_rt', '$izin_usaha_tanggal', '$izin_usaha_nama', '$izin_usaha_alamat', '$izin_usaha_nama_pemilik', '$izin_usaha_nik', '$izin_usaha_ktp', '$izin_usaha_status', '$izin_usaha_tanggal_verifikasi', '$izin_usaha_ket')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->


<!-- Modal KK -->
<div class="modal fade" id="ModalKK" tabindex="-1" role="dialog" aria-labelledby="ModalKKLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalKKLabel">Kartu Keluarga</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Akte Kelahiran</label>
                        <input type="file" class="form-control" name="kk_akte">
                    </div>
                    <div class="form-group">
                        <label>Upload Surat Nikah</label>
                        <input type="file" class="form-control" name="kk_surat_nikah">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpankk" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpankk'])) {
                $kk_user = $iduser;
                $kk_rt = $ketuart;
                $kk_tanggal = date('Y-m-d');

                $extensi = explode(".", $_FILES['kk_akte']['name']);
                $kk_akte = "$namauser - KK Akte - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kk_akte']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kk/" . $kk_akte);

                $extensi = explode(".", $_FILES['kk_surat_nikah']['name']);
                $kk_surat_nikah = "$namauser - KK Surat Nikah - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kk_surat_nikah']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kk/" . $kk_surat_nikah);

                $kk_status = 'Menunggu Verifikasi RT';
                $kk_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO kk VALUES('', '$kk_user', '$kk_rt', '$kk_tanggal', '$kk_akte', '$kk_surat_nikah', '$kk_status', '$kk_tanggal_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->


<!-- Modal KTP -->
<div class="modal fade" id="ModalKTP" tabindex="-1" role="dialog" aria-labelledby="ModalKTPLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalKTPLabel">Kartu Tanda Penduduk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload Kartu Keluarga</label>
                        <input type="file" class="form-control" name="ktp_kk">
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" name="ktp_alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload KTP Lama</label>
                        <input type="file" class="form-control" name="ktp_lama">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpanktp" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpanktp'])) {
                $ktp_user = $iduser;
                $ktp_rt = $ketuart;
                $ktp_tanggal = date('Y-m-d');

                $extensi = explode(".", $_FILES['ktp_kk']['name']);
                $ktp_kk = "$namauser - KTP KK - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['ktp_kk']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-ktp/" . $ktp_kk);

                $ktp_alamat = $_POST['ktp_alamat'];

                $extensi = explode(".", $_FILES['ktp_lama']['name']);
                $ktp_lama = "$namauser - KTP Lama - " . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['ktp_lama']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-ktp/" . $ktp_lama);

                $ktp_status = 'Menunggu Verifikasi RT';
                $ktp_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO ktp VALUES('', '$ktp_user', '$ktp_rt', '$ktp_tanggal', '$ktp_kk', '$ktp_alamat', '$ktp_lama', '$ktp_status', '$ktp_tanggal_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim  !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->



<!-- Modal KELAHIRAN -->
<div class="modal fade" id="ModalKelahiran" tabindex="-1" role="dialog" aria-labelledby="ModalKelahiranLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalKelahiranLabel">Kelahiran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Anak</label>
                        <input type="text" class="form-control" name="kelahiran_nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin Anak</label>
                        <select class="form-control" name="kelahiran_jk" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tempat Lahir Anak</label>
                                <input type="text" class="form-control" name="kelahiran_tempat_lahir">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Lahir Anak</label>
                                <input type="date" class="form-control" name="kelahiran_tanggal_lahir">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Kartu Keluarga</label>
                        <input type="file" class="form-control" name="kelahiran_kk">
                    </div>
                    <div class="form-group">
                        <label>Upload KTP Ayah</label>
                        <input type="file" class="form-control" name="kelahiran_ktp_ayah">
                    </div>
                    <div class="form-group">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control" name="kelahiran_nama_ayah">
                    </div>
                    <div class="form-group">
                        <label>Upload KTP Ibu</label>
                        <input type="file" class="form-control" name="kelahiran_ktp_ibu">
                    </div>
                    <div class="form-group">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control" name="kelahiran_nama_ibu">
                    </div>
                    <div class="form-group">
                        <label>Upload Surat Ket. Dokter</label>
                        <input type="file" class="form-control" name="kelahiran_sk_dokter">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpankelahiran" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpankelahiran'])) {
                $kelahiran_user = $iduser;
                $kelahiran_rt = $ketuart;
                $kelahiran_tanggal = date('Y-m-d');
                $kelahiran_nama = $_POST['kelahiran_nama'];
                $kelahiran_jk = $_POST['kelahiran_jk'];
                $kelahiran_tempat_lahir = $_POST['kelahiran_tempat_lahir'];
                $kelahiran_tanggal_lahir = $_POST['kelahiran_tanggal_lahir'];

                $extensi = explode(".", $_FILES['kelahiran_kk']['name']);
                $kelahiran_kk = "$namauser-Kelahiran-KK-" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kelahiran_kk']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kelahiran/" . $kelahiran_kk);

                $extensi = explode(".", $_FILES['kelahiran_ktp_ayah']['name']);
                $kelahiran_ktp_ayah = "$namauser-Kelahiran-KTP Ayah-" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kelahiran_ktp_ayah']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kelahiran/" . $kelahiran_ktp_ayah);

                $kelahiran_nama_ayah = $_POST['kelahiran_nama_ayah'];

                $extensi = explode(".", $_FILES['kelahiran_ktp_ibu']['name']);
                $kelahiran_ktp_ibu = "$namauser-Kelahiran-KTP Ibu" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kelahiran_ktp_ibu']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kelahiran/" . $kelahiran_ktp_ibu);

                $kelahiran_nama_ibu = $_POST['kelahiran_nama_ibu'];

                $extensi = explode(".", $_FILES['kelahiran_sk_dokter']['name']);
                $kelahiran_sk_dokter = "$namauser-Kelahiran-SK Dokter" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kelahiran_sk_dokter']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kelahiran/" . $kelahiran_sk_dokter);

                $kelahiran_status = 'Menunggu Verifikasi RT';
                $kelahiran_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO kelahiran VALUES('', '$kelahiran_user', '$kelahiran_rt', '$kelahiran_tanggal', '$kelahiran_nama', '$kelahiran_jk', '$kelahiran_tempat_lahir', '$kelahiran_tanggal_lahir', '$kelahiran_kk', '$kelahiran_ktp_ayah', '$kelahiran_nama_ayah', '$kelahiran_ktp_ibu', '$kelahiran_nama_ibu', '$kelahiran_sk_dokter', '$kelahiran_status', '$kelahiran_tanggal_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim  !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->



<!-- Modal KEMATIAN -->
<div class="modal fade" id="ModalKematian" tabindex="-1" role="dialog" aria-labelledby="ModalKematianLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalKematianLabel">Kematian</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <select class="form-control" name="kematian_user_meninggal" required>
                            <option value=""> -- Pilih Nama --</option>
                            <?php
                            $sqlus = mysqli_query($con, "SELECT * FROM user WHERE user_rt_id = '$ketuart'");
                            while ($dataus = mysqli_fetch_assoc($sqlus)) {
                            ?>
                                <option value="<?= $dataus['user_id'] ?>"><?= $dataus['user_nama'] ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tempat Meninggal</label>
                                <input type="text" class="form-control" name="kematian_tempat_meninggal">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Tanggal Meninggal</label>
                                <input type="date" class="form-control" name="kematian_tanggal_meninggal">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Upload Surat Ket. Dokter</label>
                        <input type="file" class="form-control" name="kematian_sk_dokter">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpankematian" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpankematian'])) {
                $kematian_user = $iduser;
                $kematian_rt = $ketuart;
                $kematian_tanggal = date('Y-m-d');
                $kematian_user_meninggal = $_POST['kematian_user_meninggal'];
                $kematian_tempat_meninggal = $_POST['kematian_tempat_meninggal'];
                $kematian_tanggal_meninggal = $_POST['kematian_tanggal_meninggal'];

                $extensi = explode(".", $_FILES['kematian_sk_dokter']['name']);
                $kematian_sk_dokter = "$namauser-Kematian-SK Dokter" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['kematian_sk_dokter']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-kematian/" . $kematian_sk_dokter);

                $kematian_status = 'Menunggu Verifikasi RT';
                $kematian_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO kematian VALUES('', '$kematian_user', '$kematian_rt', '$kematian_tanggal', '$kematian_user_meninggal', '$kematian_tempat_meninggal', '$kematian_tanggal_meninggal', '$kematian_sk_dokter', '$kematian_status', '$kematian_tanggal_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim  !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->




<!-- Modal DOMISILI -->
<div class="modal fade" id="ModalDomisili" tabindex="-1" role="dialog" aria-labelledby="ModalDomisiliLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalDomisiliLabel">Domisili</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Upload KTP</label>
                        <input type="file" class="form-control" name="domisili_ktp">
                    </div>
                    <div class="form-group">
                        <label>Upload Kartu Keluarga</label>
                        <input type="file" class="form-control" name="domisili_kk">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="simpankematian" value="Simpan">
                </div>
            </form>
            <?php
            if (isset($_POST['simpankematian'])) {
                $domisili_user = $iduser;
                $domisili_rt = $ketuart;
                $domisili_tanggal = date('Y-m-d');

                $extensi = explode(".", $_FILES['domisili_ktp']['name']);
                $domisili_ktp = "$namauser-Domisili-ktp" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['domisili_ktp']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-domisili/" . $domisili_ktp);

                $extensi = explode(".", $_FILES['domisili_kk']['name']);
                $domisili_kk = "$namauser-Domisili-kk" . round(microtime(true)) . "." . end($extensi);
                $sumber = $_FILES['domisili_kk']['tmp_name'];
                $upload = move_uploaded_file($sumber, "../assets/files/files-domisili/" . $domisili_kk);

                $domisili_status = 'Menunggu Verifikasi RT';
                $domisili_tanggal_verifikasi = '';

                $sql = mysqli_query($con, "INSERT INTO domisili VALUES('', '$domisili_user', '$domisili_rt', '$domisili_tanggal', '$domisili_ktp', '$domisili_kk', '$domisili_status', '$domisili_status_verifikasi')");

                if ($sql) {
                    echo "<script>alert('Permintaan anda berhasil dikirim  !');window.location='?page=home';</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- ============================================================================================== -->




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