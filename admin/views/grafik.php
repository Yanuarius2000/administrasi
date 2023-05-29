<?php
$tahun_now = date('Y');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Grafik</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Grafik</li>
    </ol>

    <div class="row">
        <!-- KTP -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Grafik KTP <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="ktp"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $ktp = mysqli_query($con, "SELECT MONTH(ktp_tanggal_verifikasi) as bulan FROM ktp WHERE YEAR(ktp_tanggal_verifikasi) = '$tahun_now' GROUP BY MONTH(ktp_tanggal_verifikasi)");
        while ($rowktp = mysqli_fetch_array($ktp)) {
            $nama_bulan_ktp[] = $rowktp['bulan'];

            $ktp2 = mysqli_query($con, "SELECT * FROM ktp WHERE MONTH(ktp_tanggal_verifikasi) = '" . $rowktp['bulan'] . "' AND YEAR(ktp_tanggal_verifikasi) = '$tahun_now'");
            $jumlah_ktp[] = mysqli_num_rows($ktp2);
        }
        ?>
        <script>
            var ctx = document.getElementById("ktp").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_ktp); ?>,
                    datasets: [{
                        label: 'Grafik KTP Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_ktp); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>


        <!-- Kartu Keluarga -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Grafik Kartu Keluarga <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="kk"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $kk = mysqli_query($con, "SELECT MONTH(kk_tanggal_verifikasi) as bulan FROM kk WHERE YEAR(kk_tanggal_verifikasi) = '$tahun_now' GROUP BY MONTH(kk_tanggal_verifikasi)");
        while ($rowkk = mysqli_fetch_array($kk)) {
            $nama_bulan_kk[] = $rowkk['bulan'];

            $kk2 = mysqli_query($con, "SELECT * FROM kk WHERE MONTH(kk_tanggal_verifikasi) = '" . $rowkk['bulan'] . "' AND YEAR(kk_tanggal_verifikasi) = '$tahun_now'");
            $jumlah_kk[] = mysqli_num_rows($kk2);
        }
        ?>
        <script>
            var ctx = document.getElementById("kk").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_kk); ?>,
                    datasets: [{
                        label: 'Grafik Kartu Keluarga Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_kk); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>


        <!-- Domisili -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Domisili <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="domisili"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $domisili = mysqli_query($con, "SELECT MONTH(domisili_tanggal_verifikasi) as bulan FROM domisili WHERE YEAR(domisili_tanggal_verifikasi) = '$tahun_now' GROUP BY MONTH(domisili_tanggal_verifikasi)");
        while ($rowdomisili = mysqli_fetch_array($domisili)) {
            $nama_bulan_domisili[] = $rowdomisili['bulan'];

            $domisili2 = mysqli_query($con, "SELECT * FROM domisili WHERE MONTH(domisili_tanggal_verifikasi) = '" . $rowdomisili['bulan'] . "' AND YEAR(domisili_tanggal_verifikasi) = '$tahun_now'");
            $jumlah_domisili[] = mysqli_num_rows($domisili2);
        }
        ?>
        <script>
            var ctx = document.getElementById("domisili").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_domisili); ?>,
                    datasets: [{
                        label: 'Grafik Domisili Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_domisili); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>



        <!-- Pindah Masuk -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Pindah Masuk <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="pindah_masuk"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $pindah_masuk = mysqli_query($con, "SELECT MONTH(pindah_tanggal_verifikasi) as bulan FROM pindah WHERE YEAR(pindah_tanggal_verifikasi) = '$tahun_now' AND pindah_ket = 'Masuk' GROUP BY MONTH(pindah_tanggal_verifikasi)");
        while ($rowpindah_masuk = mysqli_fetch_array($pindah_masuk)) {
            $nama_bulan_pindah_masuk[] = $rowpindah_masuk['bulan'];

            $pindah_masuk2 = mysqli_query($con, "SELECT * FROM pindah WHERE pindah_ket = 'Masuk' AND MONTH(pindah_tanggal_verifikasi) = '" . $rowpindah_masuk['bulan'] . "' AND YEAR(pindah_tanggal_verifikasi) = '$tahun_now'");
            $jumlah_pindah_masuk[] = mysqli_num_rows($pindah_masuk2);
        }
        ?>
        <script>
            var ctx = document.getElementById("pindah_masuk").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_pindah_masuk); ?>,
                    datasets: [{
                        label: 'Grafik Pindah Masuk Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_pindah_masuk); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>



        <!-- Pindah Keluar -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Pindah Keluar <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="pindah_keluar"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $pindah_keluar = mysqli_query($con, "SELECT MONTH(pindah_tanggal_verifikasi) as bulan FROM pindah WHERE YEAR(pindah_tanggal_verifikasi) = '$tahun_now' AND pindah_ket = 'Keluar' GROUP BY MONTH(pindah_tanggal_verifikasi)");
        while ($rowpindah_keluar = mysqli_fetch_array($pindah_keluar)) {
            $nama_bulan_pindah_keluar[] = $rowpindah_keluar['bulan'];

            $pindah_keluar2 = mysqli_query($con, "SELECT * FROM pindah WHERE pindah_ket = 'Keluar' AND MONTH(pindah_tanggal_verifikasi) = '" . $rowpindah_keluar['bulan'] . "' AND YEAR(pindah_tanggal_verifikasi) = '$tahun_now'");
            $jumlah_pindah_keluar[] = mysqli_num_rows($pindah_keluar2);
        }
        ?>
        <script>
            var ctx = document.getElementById("pindah_keluar").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_pindah_keluar); ?>,
                    datasets: [{
                        label: 'Grafik Pindah Keluar Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_pindah_keluar); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>



        <!-- Pindah Kelahiran -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Kelahiran <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="kelahiran"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $kelahiran = mysqli_query($con, "SELECT MONTH(kelahiran_tanggal) as bulan FROM kelahiran WHERE YEAR(kelahiran_tanggal) = '$tahun_now' GROUP BY MONTH(kelahiran_tanggal)");
        while ($rowkelahiran = mysqli_fetch_array($kelahiran)) {
            $nama_bulan_kelahiran[] = $rowkelahiran['bulan'];

            $kelahiran2 = mysqli_query($con, "SELECT * FROM kelahiran WHERE MONTH(kelahiran_tanggal) = '" . $rowkelahiran['bulan'] . "' AND YEAR(kelahiran_tanggal) = '$tahun_now'");
            $jumlah_kelahiran[] = mysqli_num_rows($kelahiran2);
        }
        ?>
        <script>
            var ctx = document.getElementById("kelahiran").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_kelahiran); ?>,
                    datasets: [{
                        label: 'Grafik Kelahiran Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_kelahiran); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>



        <!-- Pindah Kematian -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Kematian <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="kematian"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $kematian = mysqli_query($con, "SELECT MONTH(kematian_tanggal) as bulan FROM kematian WHERE YEAR(kematian_tanggal) = '$tahun_now' GROUP BY MONTH(kematian_tanggal)");
        while ($rowkematian = mysqli_fetch_array($kematian)) {
            $nama_bulan_kematian[] = $rowkematian['bulan'];

            $kematian2 = mysqli_query($con, "SELECT * FROM kematian WHERE MONTH(kematian_tanggal) = '" . $rowkematian['bulan'] . "' AND YEAR(kematian_tanggal) = '$tahun_now'");
            $jumlah_kematian[] = mysqli_num_rows($kematian2);
        }
        ?>
        <script>
            var ctx = document.getElementById("kematian").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_kematian); ?>,
                    datasets: [{
                        label: 'Grafik Kematian Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_kematian); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>




        <!-- Pindah Izin Usaha -->
        <div class="col-lg-6 mt-4 mb-4">
            <div class="card">
                <div class="card-header">
                    Grafik Izin Usaha <?= $tahun_now ?>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <canvas id="izin_usaha"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $izin_usaha = mysqli_query($con, "SELECT MONTH(izin_usaha_tanggal) as bulan FROM izin_usaha WHERE YEAR(izin_usaha_tanggal) = '$tahun_now' GROUP BY MONTH(izin_usaha_tanggal)");
        while ($rowizin_usaha = mysqli_fetch_array($izin_usaha)) {
            $nama_bulan_izin_usaha[] = $rowizin_usaha['bulan'];

            $izin_usaha2 = mysqli_query($con, "SELECT * FROM izin_usaha WHERE MONTH(izin_usaha_tanggal) = '" . $rowizin_usaha['bulan'] . "' AND YEAR(izin_usaha_tanggal) = '$tahun_now'");
            $jumlah_izin_usaha[] = mysqli_num_rows($izin_usaha2);
        }
        ?>
        <script>
            var ctx = document.getElementById("izin_usaha").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: <?php echo json_encode($nama_bulan_izin_usaha); ?>,
                    datasets: [{
                        label: 'Grafik Izin Usaha Per-Bulan <?= $tahun_now ?>',
                        data: <?php echo json_encode($jumlah_izin_usaha); ?>,
                        backgroundColor: ["white"],
                        borderColor: 'red',
                        borderWidth: 4
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        </script>





    </div>

</div>