<div class="container-fluid px-4">
    <h1 class="mt-4">Izin Usaha</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Izin Usaha</li>
    </ol>

    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Dari :</label>
                        <input type="date" class="form-control" name="dari" value="<?= date('Y-m-d') ?>">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label>Hingga :</label>
                        <input type="date" class="form-control" name="hingga" value="<?= date('Y-m-d') ?>">
                    </div>
                </div>
                <div class="col-lg-3" style="margin-top: 35px;">
                    <input type="submit" class="btn btn-sm btn-primary" name="cetak" value="Cetak">
                </div>
            </div>
        </form>
        <?php
        if (isset($_POST['cetak'])) {
            $dari = $_POST['dari'];
            $hingga = $_POST['hingga'];

            echo "<script>window.location='../report/report-izin_usaha-admin.php?dari=$dari&hingga=$hingga';</script>";
        }
        ?>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Izin Usaha
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>RT</th>
                        <th>Tanggal Kirim</th>
                        <th>Nama Usaha</th>
                        <th>Alamat</th>
                        <th>Nama Pemilik</th>
                        <th>NIK</th>
                        <th>KTP</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM izin_usaha, user, rt WHERE izin_usaha.izin_usaha_user = user.user_id AND izin_usaha.izin_usaha_rt = rt.rt_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['rt_nama'] ?></td>
                            <td><?= $data['izin_usaha_tanggal'] ?></td>
                            <td><?= $data['izin_usaha_nama'] ?></td>
                            <td><?= $data['izin_usaha_alamat'] ?></td>
                            <td><?= $data['izin_usaha_nama_pemilik'] ?></td>
                            <td><?= $data['izin_usaha_nik'] ?></td>
                            <td>
                                <a href="../assets/files/files-izinusaha/<?= $data['izin_usaha_ktp'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['izin_usaha_status'] ?></td>
                            <td><?= $data['izin_usaha_tanggal_verifikasi'] ?></td>
                            <td>
                                <?php
                                if ($data['izin_usaha_status'] == 'Telah dikonfirmasi RT') {
                                ?>
                                    <a href="?page=detail-izin_usaha&ver=konfirmasi&id=<?= $data['izin_usaha_id'] ?>" class="text-success" onclick="return confirm('Yakin ingin konfirmasi data ini ?')"><i class="fas fa-check"></i></a>
                                    <a href="?page=detail-izin_usaha&ver=tolak&id=<?= $data['izin_usaha_id'] ?>" class="text-danger" onclick="return confirm('Yakin ingin tolak data ini ?')"><i class="fas fa-times"></i></a>
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