-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2020 pada 16.48
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_corona`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_corona`
--

CREATE TABLE `tbl_corona` (
  `id` int(11) NOT NULL,
  `kecamatan` varchar(30) DEFAULT NULL,
  `pp` int(11) DEFAULT NULL,
  `odp` int(11) DEFAULT NULL,
  `pdp` int(11) DEFAULT NULL,
  `otg` int(11) DEFAULT NULL,
  `positif` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_corona`
--

INSERT INTO `tbl_corona` (`id`, `kecamatan`, `pp`, `odp`, `pdp`, `otg`, `positif`) VALUES
(1, 'KEDUNG', 857, 192, 21, 2, 42),
(2, 'PECANGAAN', 1050, 52, 11, 4, 33),
(3, 'KALINYAMATAN', 259, 20, 8, 3, 15),
(4, 'WELAHAN', 1401, 57, 16, 5, 31),
(5, 'MAYONG', 977, 64, 18, 7, 12),
(6, 'NALUMSARI', 1703, 65, 11, 3, 14),
(7, 'BATEALIT', 574, 48, 7, 4, 28),
(8, 'TAHUNAN', 714, 36, 8, 2, 19),
(9, 'JEPARA', 1356, 45, 14, 8, 43),
(10, 'MLONGGO', 1436, 60, 16, 4, 20),
(11, 'BANGSRI', 2015, 48, 8, 3, 19),
(12, 'KELING', 1411, 138, 9, 1, 2),
(13, 'KARIMUNJAWA', 333, 1, 0, 1, 0),
(14, 'KEMBANG', 2182, 18, 6, 3, 7),
(15, 'DONOROJO', 1752, 42, 5, 2, 0),
(16, 'PAKISAJI', 564, 59, 1, 2, 15),
(17, 'LUAR DAERAH', 0, 6, 14, 0, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_acces_menu`
--

CREATE TABLE `user_acces_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_acces_menu`
--

INSERT INTO `user_acces_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'MENU'),
(2, 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'tamu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'index.php/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 1, 'Data Corona', 'index.php/corona_t', 'fas fa-fw fa-copy', 1),
(3, 1, 'Chart', 'index.php/chart_corona', 'fas fa-fw fa-chart-bar', 1),
(4, 2, 'Ubah Data', 'index.php/corona', 'fas fa-fw fa-edit', 1),
(5, 2, 'Profil', 'index.php/login/profil', 'fas fa-fw fa-user', 1),
(6, 2, 'Buat Akun Baru', 'index.php/login/registration', 'fas fa-fw fa-user-circle', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `web_login`
--

CREATE TABLE `web_login` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `web_login`
--

INSERT INTO `web_login` (`id`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Guest', 'tamu@gmail.com', 'default.jpg', '$2y$10$OD6fdRSTaL4HI0tKeGRTp.zFFs21Zm1Vd8iaSQDr.lmeSlk01Nr7.', 1, 1, 1594746431),
(10, 'Novi Alfiani', 'novialfiani8888@gmail.com', 'default.jpg', '$2y$10$zA/9FHbDZiF9g2uVs1nBO.F0obqg.nW3ivSpbc91HjlD0xgt8lrPC', 2, 1, 1594746462),
(11, 'Admin', 'admin@gmail.com', 'default.jpg', '$2y$10$VEdlIUr8tJBTpV8gFtJ7aO9NGbMUI6OY9wl.FBoHKYGydgFK7jQLy', 2, 1, 1594746525);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_corona`
--
ALTER TABLE `tbl_corona`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `web_login`
--
ALTER TABLE `web_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_corona`
--
ALTER TABLE `tbl_corona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_acces_menu`
--
ALTER TABLE `user_acces_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `web_login`
--
ALTER TABLE `web_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
