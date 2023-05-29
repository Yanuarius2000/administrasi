<div class="container-fluid px-4">
    <h1 class="mt-4">Kematian</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kematian</li>
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

            echo "<script>window.location='../report/report-kematian-admin.php?dari=$dari&hingga=$hingga';</script>";
        }
        ?>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kematian
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>RT</th>
                        <th>Tanggal Kirim</th>
                        <th>Nama Yang Meninggal</th>
                        <th>TTM</th>
                        <th>Surat Ket. Meninggal</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM kematian, user, rt WHERE kematian.kematian_user = user.user_id AND kematian.kematian_rt = rt.rt_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                        $ium = $data['kematian_user_meninggal'];
                        $sqlum = mysqli_query($con, "SELECT * FROM user WHERE user_id = '$ium'");
                        $dataum = mysqli_fetch_assoc($sqlum);
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['rt_nama'] ?></td>
                            <td><?= $data['kematian_tanggal'] ?></td>
                            <td><?= $dataum['user_nama'] ?></td>
                            <td><?= $data['kematian_tempat_meninggal'] ?>, <?= $data['kematian_tanggal_meninggal'] ?></td>
                            <td>
                                <a href="../assets/files/files-kematian/<?= $data['kematian_sk_dokter'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['kematian_status'] ?></td>
                            <td><?= $data['kematian_tanggal_verifikasi'] ?></td>
                            <td>
                                <?php
                                if ($data['kematian_status'] == 'Telah dikonfirmasi RT') {
                                ?>
                                    <a href="?page=detail-kematian&ver=konfirmasi&id=<?= $data['kematian_id'] ?>" class="text-success" onclick="return confirm('Yakin ingin konfirmasi data ini ?')"><i class="fas fa-check"></i></a>
                                    <a href="?page=detail-kematian&ver=tolak&id=<?= $data['kematian_id'] ?>" class="text-danger" onclick="return confirm('Yakin ingin tolak data ini ?')"><i class="fas fa-times"></i></a>
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