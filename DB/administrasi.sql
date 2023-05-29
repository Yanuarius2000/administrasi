-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2023 at 05:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_status`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `administrasi_id` int(11) NOT NULL,
  `administrasi_jenis_administrasi_id` int(11) NOT NULL,
  `administrasi_user_id` int(11) NOT NULL,
  `administrasi_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `domisili`
--

CREATE TABLE `domisili` (
  `domisili_id` int(11) NOT NULL,
  `domisili_user` int(11) NOT NULL,
  `domisili_rt` int(11) NOT NULL,
  `domisili_tanggal` date NOT NULL,
  `domisili_ktp` text NOT NULL,
  `domisili_kk` text NOT NULL,
  `domisili_status` varchar(255) NOT NULL,
  `domisili_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `domisili`
--

INSERT INTO `domisili` (`domisili_id`, `domisili_user`, `domisili_rt`, `domisili_tanggal`, `domisili_ktp`, `domisili_kk`, `domisili_status`, `domisili_tanggal_verifikasi`) VALUES
(2, 10, 1, '2022-11-27', 'nato soares-Domisili-ktp1669551223.png', 'nato soares-Domisili-kk1669551223.jpg', 'Selesai', '2022-11-27'),
(3, 11, 1, '2023-02-11', 'ikson moruk-Domisili-ktp1676114971.jpg', 'ikson moruk-Domisili-kk1676114971.jpg', 'Selesai', '2023-02-11'),
(4, 11, 1, '2023-02-11', 'ikson moruk-Domisili-ktp1676115066.', 'ikson moruk-Domisili-kk1676115066.', 'Selesai', '2023-02-11'),
(5, 11, 1, '2023-02-12', 'ikson moruk-Domisili-ktp1676210127.jpg', 'ikson moruk-Domisili-kk1676210127.jpg', 'Telah dikonfirmasi RT', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `izin_usaha`
--

CREATE TABLE `izin_usaha` (
  `izin_usaha_id` int(11) NOT NULL,
  `izin_usaha_user` int(11) NOT NULL,
  `izin_usaha_rt` int(11) NOT NULL,
  `izin_usaha_tanggal` date NOT NULL,
  `izin_usaha_nama` varchar(255) NOT NULL,
  `izin_usaha_alamat` text NOT NULL,
  `izin_usaha_nama_pemilik` varchar(255) NOT NULL,
  `izin_usaha_nik` varchar(255) NOT NULL,
  `izin_usaha_ktp` text NOT NULL,
  `izin_usaha_status` varchar(255) NOT NULL,
  `izin_usaha_tanggal_verifikasi` date NOT NULL,
  `izin_usaha_ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izin_usaha`
--

INSERT INTO `izin_usaha` (`izin_usaha_id`, `izin_usaha_user`, `izin_usaha_rt`, `izin_usaha_tanggal`, `izin_usaha_nama`, `izin_usaha_alamat`, `izin_usaha_nama_pemilik`, `izin_usaha_nik`, `izin_usaha_ktp`, `izin_usaha_status`, `izin_usaha_tanggal_verifikasi`, `izin_usaha_ket`) VALUES
(2, 9, 1, '2022-11-27', 'mebel', 'duabesi', 'ikson', '1234567', 'ikson moruk - Izin Usaha KTP - 1669549784.png', 'Selesai', '2022-11-27', ''),
(3, 11, 1, '2023-02-11', 'Mebel', 'jln. Sabuk merah, Duabesi.', 'Ikson', '12345678', 'ikson moruk - Izin Usaha KTP - 1676115693.jpg', 'Selesai', '2023-02-11', ''),
(4, 11, 1, '2023-02-11', 'Bengkel', 'Duabesi 2', 'Ikson Moruk', '12345678', 'ikson moruk - Izin Usaha KTP - 1676117108.jpg', 'Selesai', '2023-02-12', ''),
(6, 11, 1, '2023-05-09', 'bengkel las', 'motakmarak', 'Ikson Moruk', '12345678', 'ikson moruk - Izin Usaha KTP - 1683639024.jpg', 'Selesai', '2023-05-09', ''),
(7, 11, 1, '2023-05-29', 'Mebel', 'penfui', 'Ikson Moruk', '12345678', 'ikson moruk - Izin Usaha KTP - 1685371171.jpg', 'Permintaan ditolak RT', '0000-00-00', 'Tes alasan');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_administrasi`
--

CREATE TABLE `jenis_administrasi` (
  `jenis_administrasi_id` int(11) NOT NULL,
  `jenis_administrasi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_administrasi`
--

INSERT INTO `jenis_administrasi` (`jenis_administrasi_id`, `jenis_administrasi_nama`) VALUES
(1, 'Pindah Penduduk'),
(2, 'Kelahiran');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `kelahiran_id` int(11) NOT NULL,
  `kelahiran_user` int(11) NOT NULL,
  `kelahiran_rt` int(11) NOT NULL,
  `kelahiran_tanggal` date NOT NULL,
  `kelahiran_nama` varchar(255) NOT NULL,
  `kelahiran_jk` varchar(255) NOT NULL,
  `kelahiran_tempat_lahir` varchar(255) NOT NULL,
  `kelahiran_tanggal_lahir` date NOT NULL,
  `kelahiran_kk` text NOT NULL,
  `kelahiran_ktp_ayah` text NOT NULL,
  `kelahiran_nama_ayah` varchar(255) NOT NULL,
  `kelahiran_ktp_ibu` text NOT NULL,
  `kelahiran_nama_ibu` varchar(255) NOT NULL,
  `kelahiran_sk_dokter` text NOT NULL,
  `kelahiran_status` varchar(255) NOT NULL,
  `kelahiran_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`kelahiran_id`, `kelahiran_user`, `kelahiran_rt`, `kelahiran_tanggal`, `kelahiran_nama`, `kelahiran_jk`, `kelahiran_tempat_lahir`, `kelahiran_tanggal_lahir`, `kelahiran_kk`, `kelahiran_ktp_ayah`, `kelahiran_nama_ayah`, `kelahiran_ktp_ibu`, `kelahiran_nama_ibu`, `kelahiran_sk_dokter`, `kelahiran_status`, `kelahiran_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-10', 'Denadu', 'Laki-laki', 'Tes', '2021-05-10', 'Mafer Fernandez Leite-Kelahiran-KK-1665391020.jpeg', 'Mafer Fernandez Leite-Kelahiran-KTP Ayah-1665391020.jpeg', 'Tes Ayah', 'Mafer Fernandez Leite-Kelahiran-KTP Ibu1665391020.pdf', 'Tes Ibu', 'Mafer Fernandez Leite-Kelahiran-SK Dokter1665391020.jpeg', 'Selesai', '2022-10-19'),
(2, 11, 1, '2023-02-11', 'Risal', 'Laki-laki', 'duabesi', '2023-02-11', 'ikson moruk-Kelahiran-KK-1676115176.jpg', 'ikson moruk-Kelahiran-KTP Ayah-1676115176.jpg', 'Norman', 'ikson moruk-Kelahiran-KTP Ibu1676115176.jpg', 'Ursula', 'ikson moruk-Kelahiran-SK Dokter1676115176.jpg', 'Selesai', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `kematian_id` int(11) NOT NULL,
  `kematian_user` int(11) NOT NULL,
  `kematian_rt` int(11) NOT NULL,
  `kematian_tanggal` date NOT NULL,
  `kematian_user_meninggal` int(11) NOT NULL,
  `kematian_tempat_meninggal` varchar(255) NOT NULL,
  `kematian_tanggal_meninggal` date NOT NULL,
  `kematian_sk_dokter` text NOT NULL,
  `kematian_status` varchar(255) NOT NULL,
  `kematian_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`kematian_id`, `kematian_user`, `kematian_rt`, `kematian_tanggal`, `kematian_user_meninggal`, `kematian_tempat_meninggal`, `kematian_tanggal_meninggal`, `kematian_sk_dokter`, `kematian_status`, `kematian_tanggal_verifikasi`) VALUES
(6, 11, 1, '2023-02-11', 6, 'duabesi', '2023-12-11', 'ikson moruk-Kematian-SK Dokter1676115066.jpg', 'Selesai', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `kk_id` int(11) NOT NULL,
  `kk_user` int(11) NOT NULL,
  `kk_rt` int(11) NOT NULL,
  `kk_tanggal` date NOT NULL,
  `kk_akte` text NOT NULL,
  `kk_surat_nikah` text NOT NULL,
  `kk_status` varchar(255) NOT NULL,
  `kk_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`kk_id`, `kk_user`, `kk_rt`, `kk_tanggal`, `kk_akte`, `kk_surat_nikah`, `kk_status`, `kk_tanggal_verifikasi`) VALUES
(5, 11, 1, '2023-02-03', 'ikson moruk - KK Akte - 1675354317.jpg', 'ikson moruk - KK Surat Nikah - 1675354317.jpg', 'Selesai', '2023-02-03'),
(6, 11, 1, '2023-02-06', 'ikson moruk - KK Akte - 1675624604.jpg', 'ikson moruk - KK Surat Nikah - 1675624604.jpg', 'Selesai', '2023-02-06'),
(7, 11, 1, '2023-02-09', 'ikson moruk - KK Akte - 1675944723.jpg', 'ikson moruk - KK Surat Nikah - 1675944723.jpg', 'Selesai', '2023-02-09'),
(8, 11, 1, '2023-02-11', 'ikson moruk - KK Akte - 1676130617.jpg', 'ikson moruk - KK Surat Nikah - 1676130618.jpg', 'Permintaan ditolak RT', '0000-00-00'),
(9, 11, 1, '2023-02-21', 'ikson moruk - KK Akte - 1676974830.jpg', 'ikson moruk - KK Surat Nikah - 1676974830.jpg', 'Telah dikonfirmasi RT', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `ktp_id` int(11) NOT NULL,
  `ktp_user` int(11) NOT NULL,
  `ktp_rt` int(11) NOT NULL,
  `ktp_tanggal` date NOT NULL,
  `ktp_kk` text NOT NULL,
  `ktp_alamat` text NOT NULL,
  `ktp_lama` text NOT NULL,
  `ktp_status` varchar(255) NOT NULL,
  `ktp_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`ktp_id`, `ktp_user`, `ktp_rt`, `ktp_tanggal`, `ktp_kk`, `ktp_alamat`, `ktp_lama`, `ktp_status`, `ktp_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-10', 'Mafer Fernandez Leite - KTP - 1665378110.docx', 'Tes Alamat', 'Mafer Fernandez Leite - KTP - 1665378110.jpeg', 'Selesai', '2022-10-18'),
(2, 5, 1, '2022-11-23', 'Mafer Leite - KTP KK - 1669165159.png', 'Dusun A', 'Mafer Leite - KTP Lama - 1669165159.jpg', 'Selesai', '2022-11-23'),
(3, 5, 1, '2022-11-23', 'Mafer Leite - KTP KK - 1669166171.png', 'Dusun 2', 'Mafer Leite - KTP Lama - 1669166171.jpg', 'Selesai', '2022-11-23'),
(4, 11, 1, '2023-02-11', 'ikson moruk - KTP KK - 1676115744.jpg', 'Duabesi 1', 'ikson moruk - KTP Lama - 1676115744.jpg', 'Selesai', '2023-02-11'),
(5, 11, 1, '2023-02-12', 'ikson moruk - KTP KK - 1676209634.jpg', 'duabesi 2', 'ikson moruk - KTP Lama - 1676209634.jpg', 'Permintaan ditolak RT', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pindah`
--

CREATE TABLE `pindah` (
  `pindah_id` int(11) NOT NULL,
  `pindah_user` int(11) NOT NULL,
  `pindah_rt` int(11) NOT NULL,
  `pindah_tanggal` date NOT NULL,
  `pindah_ket` varchar(255) NOT NULL,
  `pindah_dari` text NOT NULL,
  `pindah_tujuan` text NOT NULL,
  `pindah_nik` varchar(255) NOT NULL,
  `pindah_ktp` text NOT NULL,
  `pindah_akte` text NOT NULL,
  `pindah_status` varchar(255) NOT NULL,
  `pindah_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pindah`
--

INSERT INTO `pindah` (`pindah_id`, `pindah_user`, `pindah_rt`, `pindah_tanggal`, `pindah_ket`, `pindah_dari`, `pindah_tujuan`, `pindah_nik`, `pindah_ktp`, `pindah_akte`, `pindah_status`, `pindah_tanggal_verifikasi`) VALUES
(2, 6, 1, '2022-10-26', 'Masuk', '', '', '1234567', 'ikson - Pindah KTP - 1666788459.png', 'ikson - Pindah AKTE - 1666788459.jpg', 'Selesai', '2022-10-26'),
(4, 11, 1, '2023-02-11', 'Masuk', 'penfui', 'dualasi', '12345678', 'ikson moruk - Pindah KTP - 1676121780.jpg', 'ikson moruk - Pindah AKTE - 1676121781.jpg', 'Selesai', '2023-02-11'),
(5, 11, 1, '2023-05-28', 'Masuk', 'penfui', 'dualasi', '1234567', 'ikson moruk - Pindah KTP - 1685272509.jpg', 'ikson moruk - Pindah AKTE - 1685272509.jpg', 'Selesai', '2023-05-28'),
(6, 11, 1, '2023-05-29', 'Masuk', 'penfui', 'dualasi', '1234567', 'ikson moruk - Pindah KTP - 1685349211.jpg', 'ikson moruk - Pindah AKTE - 1685349211.jpg', 'Selesai', '2023-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `rt_id` int(11) NOT NULL,
  `rt_nama` varchar(255) NOT NULL,
  `rw_id` int(11) NOT NULL,
  `rt_ketua_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`rt_id`, `rt_nama`, `rw_id`, `rt_ketua_id`) VALUES
(1, '001', 1, 1),
(2, '002', 1, 0),
(3, '003', 1, 0),
(4, '004', 1, 0),
(5, '005', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `rw_id` int(11) NOT NULL,
  `rw_nama` varchar(255) NOT NULL,
  `rw_ketua_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`rw_id`, `rw_nama`, `rw_ketua_id`) VALUES
(1, '001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_tempat_lahir` varchar(255) NOT NULL,
  `user_tgl_lahir` date NOT NULL,
  `user_jk` varchar(255) NOT NULL,
  `user_rt_id` int(11) NOT NULL,
  `user_rw_id` int(11) NOT NULL,
  `user_wa` varchar(255) NOT NULL,
  `user_status_perkawinan` varchar(255) NOT NULL,
  `user_pekerjaan` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_tempat_lahir`, `user_tgl_lahir`, `user_jk`, `user_rt_id`, `user_rw_id`, `user_wa`, `user_status_perkawinan`, `user_pekerjaan`, `user_status`, `user_email`, `user_password`) VALUES
(1, 'Tes RT 001 RW 001', 'Kupang', '1999-09-09', 'Laki-laki', 1, 1, '085337025611', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'tes@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780'),
(6, 'ikson', 'atambua', '2000-12-01', 'Laki-laki', 1, 1, '09999', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'ikson@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Tes tambah orang RT 3', 'Tes rt3', '2000-09-10', 'Laki-laki', 3, 1, '08539864885', 'Belum Menikah', 'Karyawan Swasta', 'Aktif', 'tesorang3@gmail.com', 'd02aae65ebfb8f3ce0abde7d59016e79'),
(11, 'ikson moruk', 'duabesi', '2000-01-16', 'Laki-laki', 1, 1, '082146894618', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'morukbere@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(12, 'jose Elu', 'kefa', '1997-02-23', 'Laki-laki', 1, 1, '082236488612', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Non-Aktif', 'elunormandius@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(13, 'viviani', 'flores', '1999-08-26', 'Perempuan', 1, 1, '081146894618', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Non-Aktif', 'vivianiladommuke@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(14, 'ikson moruk', 'dualasi', '2000-01-16', 'Laki-laki', 1, 1, '082146894618', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Menunggu Konfirmasi', 'morukbere@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`administrasi_id`);

--
-- Indexes for table `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`domisili_id`);

--
-- Indexes for table `izin_usaha`
--
ALTER TABLE `izin_usaha`
  ADD PRIMARY KEY (`izin_usaha_id`);

--
-- Indexes for table `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  ADD PRIMARY KEY (`jenis_administrasi_id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`kelahiran_id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`kematian_id`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`kk_id`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`ktp_id`);

--
-- Indexes for table `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`pindah_id`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`rw_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `administrasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domisili`
--
ALTER TABLE `domisili`
  MODIFY `domisili_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `izin_usaha`
--
ALTER TABLE `izin_usaha`
  MODIFY `izin_usaha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  MODIFY `jenis_administrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `kelahiran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `kematian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `kk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ktp`
--
ALTER TABLE `ktp`
  MODIFY `ktp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pindah`
--
ALTER TABLE `pindah`
  MODIFY `pindah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
  MODIFY `rw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
