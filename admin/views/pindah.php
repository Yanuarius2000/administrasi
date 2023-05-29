<div class="container-fluid px-4">
    <h1 class="mt-4">Pindah</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Pindah</li>
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

            echo "<script>window.location='../report/report-pindah-admin.php?dari=$dari&hingga=$hingga';</script>";
        }
        ?>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pindah
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>RT</th>
                        <th>Tanggal Kirim</th>
                        <th>Ket</th>
                        <th>Dari</th>
                        <th>Tujuan</th>
                        <th>NIK</th>
                        <th>KTP</th>
                        <th>Akte</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM pindah, user, rt WHERE pindah.pindah_user = user.user_id AND pindah.pindah_rt = rt.rt_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['rt_nama'] ?></td>
                            <td><?= $data['pindah_tanggal'] ?></td>
                            <td><?= $data['pindah_ket'] ?></td>
                            <td><?= $data['pindah_dari'] ?></td>
                            <td><?= $data['pindah_tujuan'] ?></td>
                            <td><?= $data['pindah_nik'] ?></td>
                            <td>
                                <a href="../assets/files/files-pindah/<?= $data['pindah_ktp'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td>
                                <a href="../assets/files/files-pindah/<?= $data['pindah_akte'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['pindah_status'] ?></td>
                            <td><?= $data['pindah_tanggal_verifikasi'] ?></td>
                            <td>
                                <?php
                                if ($data['pindah_status'] == 'Telah dikonfirmasi RT') {
                                ?>
                                    <a href="?page=detail-pindah&ver=konfirmasi&id=<?= $data['pindah_id'] ?>" class="text-success" onclick="return confirm('Yakin ingin konfirmasi data ini ?')"><i class="fas fa-check"></i></a>
                                    <a href="?page=detail-pindah&ver=tolak&id=<?= $data['pindah_id'] ?>" class="text-danger" onclick="return confirm('Yakin ingin tolak data ini ?')"><i class="fas fa-times"></i></a>
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