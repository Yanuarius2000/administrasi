<div class="container-fluid px-4">
    <h1 class="mt-4">KTP</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">KTP</li>
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

            echo "<script>window.location='../report/report-ktp-admin.php?dari=$dari&hingga=$hingga';</script>";
        }
        ?>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data KTP
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>RT</th>
                        <th>Tanggal Kirim</th>
                        <th>KK</th>
                        <th>Alamat</th>
                        <th>KTP-Lama</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM ktp, user, rt WHERE ktp.ktp_user = user.user_id AND ktp.ktp_rt = rt.rt_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['rt_nama'] ?></td>
                            <td><?= $data['ktp_tanggal'] ?></td>
                            <td>
                                <a href="../assets/files/files-ktp/<?= $data['ktp_kk'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['ktp_alamat'] ?></td>
                            <td>
                                <a href="../assets/files/files-ktp/<?= $data['ktp_lama'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['ktp_status'] ?></td>
                            <td><?= $data['ktp_tanggal_verifikasi'] ?></td>
                            <td>
                                <?php
                                if ($data['ktp_status'] == 'Telah dikonfirmasi RT') {
                                ?>
                                    <a href="?page=detail-ktp&ver=konfirmasi&id=<?= $data['ktp_id'] ?>" class="text-success" onclick="return confirm('Yakin ingin konfirmasi data ini ?')"><i class="fas fa-check"></i></a>
                                    <a href="?page=detail-ktp&ver=tolak&id=<?= $data['ktp_id'] ?>" class="text-danger" onclick="return confirm('Yakin ingin tolak data ini ?')"><i class="fas fa-times"></i></a>
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