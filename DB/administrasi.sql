-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2022 pada 13.22
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nama` varchar(255) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_username`, `admin_password`, `admin_status`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `administrasi`
--

CREATE TABLE `administrasi` (
  `administrasi_id` int(11) NOT NULL,
  `administrasi_jenis_administrasi_id` int(11) NOT NULL,
  `administrasi_user_id` int(11) NOT NULL,
  `administrasi_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
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
-- Dumping data untuk tabel `domisili`
--

INSERT INTO `domisili` (`domisili_id`, `domisili_user`, `domisili_rt`, `domisili_tanggal`, `domisili_ktp`, `domisili_kk`, `domisili_status`, `domisili_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-11', 'Mafer Fernandez Leite-Domisili-ktp1665472628.pdf', 'Mafer Fernandez Leite-Domisili-kk1665472628.jpeg', 'Selesai', '2022-10-19'),
(2, 10, 1, '2022-11-27', 'nato soares-Domisili-ktp1669551223.png', 'nato soares-Domisili-kk1669551223.jpg', 'Selesai', '2022-11-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `izin_usaha`
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
  `izin_usaha_tanggal_verifikasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `izin_usaha`
--

INSERT INTO `izin_usaha` (`izin_usaha_id`, `izin_usaha_user`, `izin_usaha_rt`, `izin_usaha_tanggal`, `izin_usaha_nama`, `izin_usaha_alamat`, `izin_usaha_nama_pemilik`, `izin_usaha_nik`, `izin_usaha_ktp`, `izin_usaha_status`, `izin_usaha_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-07', 'Tess Usaha', 'Di Tes saja', 'Mafer G', '0984638393567', 'Mafer Fernandez Leite - Izin Usaha - 1665130790.jpeg', 'Selesai', '2022-10-19'),
(2, 9, 1, '2022-11-27', 'mebel', 'duabesi', 'ikson', '1234567', 'ikson moruk - Izin Usaha KTP - 1669549784.png', 'Selesai', '2022-11-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_administrasi`
--

CREATE TABLE `jenis_administrasi` (
  `jenis_administrasi_id` int(11) NOT NULL,
  `jenis_administrasi_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_administrasi`
--

INSERT INTO `jenis_administrasi` (`jenis_administrasi_id`, `jenis_administrasi_nama`) VALUES
(1, 'Pindah Penduduk'),
(2, 'Kelahiran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
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
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`kelahiran_id`, `kelahiran_user`, `kelahiran_rt`, `kelahiran_tanggal`, `kelahiran_nama`, `kelahiran_jk`, `kelahiran_tempat_lahir`, `kelahiran_tanggal_lahir`, `kelahiran_kk`, `kelahiran_ktp_ayah`, `kelahiran_nama_ayah`, `kelahiran_ktp_ibu`, `kelahiran_nama_ibu`, `kelahiran_sk_dokter`, `kelahiran_status`, `kelahiran_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-10', 'Denadu', 'Laki-laki', 'Tes', '2021-05-10', 'Mafer Fernandez Leite-Kelahiran-KK-1665391020.jpeg', 'Mafer Fernandez Leite-Kelahiran-KTP Ayah-1665391020.jpeg', 'Tes Ayah', 'Mafer Fernandez Leite-Kelahiran-KTP Ibu1665391020.pdf', 'Tes Ibu', 'Mafer Fernandez Leite-Kelahiran-SK Dokter1665391020.jpeg', 'Selesai', '2022-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
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
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`kematian_id`, `kematian_user`, `kematian_rt`, `kematian_tanggal`, `kematian_user_meninggal`, `kematian_tempat_meninggal`, `kematian_tanggal_meninggal`, `kematian_sk_dokter`, `kematian_status`, `kematian_tanggal_verifikasi`) VALUES
(2, 3, 1, '2022-10-10', 1, 'Tes', '2022-10-09', 'Mafer Fernandez Leite-Kematian-SK Dokter1665391160.pdf', 'Selesai', '2022-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk`
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
-- Dumping data untuk tabel `kk`
--

INSERT INTO `kk` (`kk_id`, `kk_user`, `kk_rt`, `kk_tanggal`, `kk_akte`, `kk_surat_nikah`, `kk_status`, `kk_tanggal_verifikasi`) VALUES
(3, 3, 1, '2022-10-16', 'Mafer Fernandez Leite - KK Akte - 1665931089.docx', 'Mafer Fernandez Leite - KK Surat Nikah - 1665931089.jpeg', 'Selesai', '2022-10-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktp`
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
-- Dumping data untuk tabel `ktp`
--

INSERT INTO `ktp` (`ktp_id`, `ktp_user`, `ktp_rt`, `ktp_tanggal`, `ktp_kk`, `ktp_alamat`, `ktp_lama`, `ktp_status`, `ktp_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-10', 'Mafer Fernandez Leite - KTP - 1665378110.docx', 'Tes Alamat', 'Mafer Fernandez Leite - KTP - 1665378110.jpeg', 'Selesai', '2022-10-18'),
(2, 5, 1, '2022-11-23', 'Mafer Leite - KTP KK - 1669165159.png', 'Dusun A', 'Mafer Leite - KTP Lama - 1669165159.jpg', 'Selesai', '2022-11-23'),
(3, 5, 1, '2022-11-23', 'Mafer Leite - KTP KK - 1669166171.png', 'Dusun 2', 'Mafer Leite - KTP Lama - 1669166171.jpg', 'Selesai', '2022-11-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah`
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
-- Dumping data untuk tabel `pindah`
--

INSERT INTO `pindah` (`pindah_id`, `pindah_user`, `pindah_rt`, `pindah_tanggal`, `pindah_ket`, `pindah_dari`, `pindah_tujuan`, `pindah_nik`, `pindah_ktp`, `pindah_akte`, `pindah_status`, `pindah_tanggal_verifikasi`) VALUES
(1, 3, 1, '2022-10-07', 'Masuk', '', '', '13245678909876', 'Mafer Fernandez Leite - KTP - 1665113763.jpeg', 'Mafer Fernandez Leite - AKTE - 1665113763.jpeg', 'Selesai', '2022-10-19'),
(2, 6, 1, '2022-10-26', 'Masuk', '', '', '1234567', 'ikson - Pindah KTP - 1666788459.png', 'ikson - Pindah AKTE - 1666788459.jpg', 'Selesai', '2022-10-26'),
(3, 5, 1, '2022-11-21', 'Keluar', 'Dualasi', 'Kupang', '23114046', 'Mafer Leite - Pindah KTP - 1669009935.jpg', 'Mafer Leite - Pindah AKTE - 1669009935.jpg', 'Selesai', '2022-11-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt`
--

CREATE TABLE `rt` (
  `rt_id` int(11) NOT NULL,
  `rt_nama` varchar(255) NOT NULL,
  `rw_id` int(11) NOT NULL,
  `rt_ketua_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rt`
--

INSERT INTO `rt` (`rt_id`, `rt_nama`, `rw_id`, `rt_ketua_id`) VALUES
(1, '001', 1, 1),
(2, '002', 1, 0),
(3, '003', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rw`
--

CREATE TABLE `rw` (
  `rw_id` int(11) NOT NULL,
  `rw_nama` varchar(255) NOT NULL,
  `rw_ketua_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rw`
--

INSERT INTO `rw` (`rw_id`, `rw_nama`, `rw_ketua_id`) VALUES
(1, '001', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_tempat_lahir`, `user_tgl_lahir`, `user_jk`, `user_rt_id`, `user_rw_id`, `user_wa`, `user_status_perkawinan`, `user_pekerjaan`, `user_status`, `user_email`, `user_password`) VALUES
(1, 'Tes RT 001 RW 001', 'Kupang', '1999-09-09', 'Laki-laki', 1, 1, '085337025611', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'tes@gmail.com', '28b662d883b6d76fd96e4ddc5e9ba780'),
(3, 'Mafer Fernandez Leite', 'Naibonat', '1992-10-10', 'Perempuan', 1, 1, '08123456789', 'Belum Menikah', 'Wiraswasta', 'Aktif', 'tes2@gmail.com', '7a8a80e50f6ff558f552079cefe2715d'),
(5, 'Mafer Leite', 'Larantuka', '1996-09-24', 'Laki-laki', 1, 1, '085337025611', 'Sudah Menikah', 'Karyawan Swasta', 'Aktif', 'manfdz70@gmail.com', '4c08ab9ef09bd1575f65fcd022dd5f83'),
(6, 'ikson', 'atambua', '2000-12-01', 'Laki-laki', 1, 1, '09999', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'ikson@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Tes tambah orang RT 3', 'Tes rt3', '2000-09-10', 'Laki-laki', 3, 1, '08539864885', 'Belum Menikah', 'Karyawan Swasta', 'Aktif', 'tesorang3@gmail.com', 'd02aae65ebfb8f3ce0abde7d59016e79'),
(8, 'Mafer Leite', 'Larantuka', '1996-09-24', 'Laki-laki', 2, 1, '085337025611', 'Belum Menikah', 'Karyawan Swasta', 'Aktif', 'manfdz70@gmail.com', '4c08ab9ef09bd1575f65fcd022dd5f83'),
(9, 'ikson moruk', 'duabesi', '2000-12-01', 'Laki-laki', 1, 1, '082146894618', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'iksonmoruk17@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'nato soares', 'timor', '1119-12-11', 'Laki-laki', 1, 1, '11654', 'Belum Menikah', 'Pelajar/Mahasiswa', 'Aktif', 'natalioluansoares@gmail.com', 'd93591bdf7860e1e4ee2fca799911215');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`administrasi_id`);

--
-- Indeks untuk tabel `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`domisili_id`);

--
-- Indeks untuk tabel `izin_usaha`
--
ALTER TABLE `izin_usaha`
  ADD PRIMARY KEY (`izin_usaha_id`);

--
-- Indeks untuk tabel `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  ADD PRIMARY KEY (`jenis_administrasi_id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`kelahiran_id`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`kematian_id`);

--
-- Indeks untuk tabel `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`kk_id`);

--
-- Indeks untuk tabel `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`ktp_id`);

--
-- Indeks untuk tabel `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`pindah_id`);

--
-- Indeks untuk tabel `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indeks untuk tabel `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`rw_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `administrasi_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `domisili`
--
ALTER TABLE `domisili`
  MODIFY `domisili_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `izin_usaha`
--
ALTER TABLE `izin_usaha`
  MODIFY `izin_usaha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis_administrasi`
--
ALTER TABLE `jenis_administrasi`
  MODIFY `jenis_administrasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `kelahiran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `kematian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kk`
--
ALTER TABLE `kk`
  MODIFY `kk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `ktp`
--
ALTER TABLE `ktp`
  MODIFY `ktp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pindah`
--
ALTER TABLE `pindah`
  MODIFY `pindah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rt`
--
ALTER TABLE `rt`
  MODIFY `rt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rw`
--
ALTER TABLE `rw`
  MODIFY `rw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
