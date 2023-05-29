<div class="container-fluid px-4">
    <h1 class="mt-4">Kelahiran</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Kelahiran</li>
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

            echo "<script>window.location='../report/report-kelahiran-admin.php?dari=$dari&hingga=$hingga';</script>";
        }
        ?>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Kelahiran
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Pengirim</th>
                        <th>RT</th>
                        <th>Tanggal Kirim</th>
                        <th>Nama Anak</th>
                        <th>Jenis Kelamin</th>
                        <th>TTL</th>
                        <th>KK</th>
                        <th>KTP Ayah</th>
                        <th>Nama Ayah</th>
                        <th>KTP Ibu</th>
                        <th>Nama Ibu</th>
                        <th>Surat Ket. Lahir</th>
                        <th>Status</th>
                        <th>Verifikasi</th>
                        <th><i class="fas fa-cogs"></i></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM kelahiran, user, rt WHERE kelahiran.kelahiran_user = user.user_id AND kelahiran.kelahiran_rt = rt.rt_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['rt_nama'] ?></td>
                            <td><?= $data['kelahiran_tanggal'] ?></td>
                            <td><?= $data['kelahiran_nama'] ?></td>
                            <td><?= $data['kelahiran_jk'] ?></td>
                            <td><?= $data['kelahiran_tempat_lahir'] ?>, <?= $data['kelahiran_tanggal_lahir'] ?></td>
                            <td>
                                <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_kk'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td>
                                <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_ktp_ayah'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['kelahiran_nama_ayah'] ?></td>
                            <td>
                                <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_ktp_ibu'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['kelahiran_nama_ibu'] ?></td>
                            <td>
                                <a href="../assets/files/files-kelahiran/<?= $data['kelahiran_sk_dokter'] ?>" class="text-primary" target="_blank"><i class="fas fa-image fa-lg"></i></a>
                            </td>
                            <td><?= $data['kelahiran_status'] ?></td>
                            <td><?= $data['kelahiran_tanggal_verifikasi'] ?></td>
                            <td>
                                <?php
                                if ($data['kelahiran_status'] == 'Telah dikonfirmasi RT') {
                                ?>
                                    <a href="?page=detail-kelahiran&ver=konfirmasi&id=<?= $data['kelahiran_id'] ?>" class="text-success" onclick="return confirm('Yakin ingin konfirmasi data ini ?')"><i class="fas fa-check"></i></a>
                                    <a href="?page=detail-kelahiran&ver=tolak&id=<?= $data['kelahiran_id'] ?>" class="text-danger" onclick="return confirm('Yakin ingin tolak data ini ?')"><i class="fas fa-times"></i></a>
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