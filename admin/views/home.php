<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>


    <!-- <div class="row">
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area me-1"></i>
                    Area Chart Example
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-bar me-1"></i>
                    Bar Chart Example
                </div>
                <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
            </div>
        </div>
    </div> -->


    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Penduduk
        </div>
        <div class="card-body">
            <table id="bootstrap-data-table" class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor</th>
                        <th>RT/RW</th>
                        <th>Status Prkwnan</th>
                        <th>Pekerjaan</th>
                        <th>Status</th>
                        <th>E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql = mysqli_query($con, "SELECT * FROM user, rt, rw WHERE user.user_rt_id = rt.rt_id AND user.user_rw_id = rw.rw_id");
                    while ($data = mysqli_fetch_assoc($sql)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?>.</td>
                            <td><?= $data['user_nama'] ?></td>
                            <td><?= $data['user_tempat_lahir'] ?>, <?= $data['user_tgl_lahir'] ?></td>
                            <td><?= $data['user_jk'] ?></td>
                            <td><?= $data['user_wa'] ?></td>
                            <td><?= $data['rt_nama'] ?>/<?= $data['rw_nama'] ?></td>
                            <td><?= $data['user_status_perkawinan'] ?></td>
                            <td><?= $data['user_pekerjaan'] ?></td>
                            <td><?= $data['user_status'] ?></td>
                            <td><?= $data['user_email'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>