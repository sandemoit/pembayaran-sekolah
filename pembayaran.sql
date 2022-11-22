-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 01:16 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `nok` bigint(20) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(128) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `alamat_ortu` varchar(258) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nik`, `nok`, `nama_siswa`, `jenis_kelamin`, `kelas_id`, `nama_ayah`, `nama_ibu`, `alamat_ortu`) VALUES
(8, 230482903, 2394923, 'sandi', 'Laki-laki', 2, 'sandi', 'sandi', 'cambai'),
(9, 983428402, 3246327472729, 'Sapei Rahamun', 'Laki-laki', 2, 'Robi', 'Anjelina', 'Jakarta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `bulan_bayar` varchar(128) NOT NULL,
  `jmlh_bayar_lunas` bigint(20) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `bulan_bayar`, `jmlh_bayar_lunas`, `tahun`) VALUES
(1, 'Januari', 600000, 2024),
(2, 'Februari', 600000, 2022),
(3, 'Maret', 600000, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `nama_kelas` varchar(128) NOT NULL,
  `id_kurikulum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `id_kurikulum`) VALUES
(2, 'Kelas VII-2', 1),
(3, 'Kelas VIII-1', 1),
(4, 'Kelas VIII-2', 1),
(10, 'Kelas V-2', 1),
(11, 'Kelas V-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tahun` int(11) NOT NULL,
  `semester` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `nama`, `tahun`, `semester`) VALUES
(1, 'K-2013 Paket', 2020, 'Genap'),
(2, 'K-2013 Paket', 2020, 'Ganjil');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `nama_sekolah` varchar(128) NOT NULL,
  `alamat_sekolah` varchar(128) NOT NULL,
  `nama_kota` varchar(128) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `email_sekolah` varchar(80) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nip_kepsek` varchar(50) NOT NULL,
  `bendahara` varchar(50) NOT NULL,
  `nip_bendahara` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `nama_sekolah`, `alamat_sekolah`, `nama_kota`, `nohp`, `email_sekolah`, `kepsek`, `nip_kepsek`, `bendahara`, `nip_bendahara`, `logo`) VALUES
(1, 'SMA NEGERI 1 GELUMBANG', 'Jl. Kemerdekaan km 50', 'Muara Enim', '087801751656', 'smansagel@gmail.com', '', '', '', '', '2f634f1e397220c026a684aae4dc8a46.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_kelas` varchar(128) NOT NULL,
  `bulan_bayar` varchar(128) NOT NULL,
  `tahun_bayar` bigint(20) NOT NULL,
  `jmlh_bayar` bigint(20) NOT NULL,
  `status` varchar(128) NOT NULL,
  `sisa` bigint(20) NOT NULL,
  `tgl_bayar` int(11) NOT NULL,
  `nama_petugas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_siswa`, `id_kelas`, `bulan_bayar`, `tahun_bayar`, `jmlh_bayar`, `status`, `sisa`, `tgl_bayar`, `nama_petugas`) VALUES
(35, 8, '', 'Januari', 2024, 8700000, '<span class=\"label label-success\">Lunas</span>', -8100000, 1668234677, 'Sandi Maulidika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `nohp` varchar(128) NOT NULL,
  `maps` text NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `nohp`, `maps`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Sandi Maulidika', 'sandimaulidika@gmail.com', 'default.jpg', '087801751656', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127504.42574919028!2d104.69292371930901!3d-2.9549663460093805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75e8fc27a3e3%3A0x3039d80b220d0c0!2sPalembang%2C%20Kota%20Palembang%2C%20Sumatera%20Selatan!5e0!3m2!1sid!2sid!4v1662633404758!5m2!1sid!2sid', '$2y$10$xptqV1Vy4H9.Z9Zb/UXSJuxSfM6uXy2OefVTjfYce1qZuZ0TTWDFi', 1, 1, 1571583076),
(15, 'Sandi Maulidika', 'infosandemo@gmail.com', 'default.jpg', '087801751656', '', '$2y$10$uzhZyrhaASQhRlGMiwxhcuA5Uf9DSmTRblbHsZNqcChZwHIbTWCa6', 3, 1, 1662642156);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 4),
(5, 1, 4),
(8, 1, 3),
(9, 1, 6),
(10, 2, 2),
(11, 3, 3),
(12, 3, 2),
(13, 1, 7),
(14, 1, 8),
(15, 3, 8),
(16, 3, 4),
(17, 1, 2),
(19, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `sort` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `sort`) VALUES
(1, 'admin', '1'),
(2, 'user', '2'),
(3, 'walikelas', '5'),
(4, 'siswa', '4'),
(6, 'menu', '8'),
(8, 'Master', '3'),
(9, 'Other', '7');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Siswa'),
(3, 'Walikelas');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'ti-world', 1),
(2, 2, 'My Profile', 'user', 'icons-Profile', 1),
(4, 6, 'Menu Management', 'menu', ' icons-Folder-Add', 1),
(5, 6, 'Submenu Manage', 'menu/submenu', 'icons-Folder-Cloud', 1),
(8, 1, 'Role', 'admin/role', 'icon-user', 1),
(24, 4, 'Data Siswa', 'siswa', 'icon-people', 1),
(26, 3, 'Walikelas', 'walikelas', 'icons-Teacher', 1),
(28, 4, 'Tambah Siswa', 'siswa/tambahsiswa', 'icon-user-follow', 1),
(29, 4, 'Transaksi', 'siswa/transaksi', 'icons-Money-Bag', 1),
(31, 8, 'Data Iuran', 'master', 'ti-server', 1),
(32, 8, 'Data Kelas', 'master/kelas', 'ti-harddrives', 1),
(33, 8, 'Data Kurikulum', 'master/kurikulum', 'icon-book-open', 1),
(34, 3, 'Tambah W. Kelas', 'walikelas/tambahwalikelas', 'icons-Address-Book', 1),
(37, 9, 'Setting', 'other/setting', 'icon-settings', 1),
(38, 9, 'Laporan', 'other', 'ti-printer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(3, 'salahul.bain@gmail.com', '1Hhk07PDKI2IztOZycD0HxetyG0mTCvYEiJW+WW2f3w=', 1572755551),
(4, 'salahul.bain@gmail.com', 'PLoRjekBgIOjF81HWfVCH1Jf02J8zE3W2nuG+5Grlw8=', 1572757912),
(5, 'salahul.bain@gmail.com', 'Lau66LGCMJbWDas6eR+qyLMggMLn5dbcB59Zabnuz9g=', 1572758051),
(7, 's1c.salahul1@gmail.com', 'ZY9K6bBNmZvuxunkHdOYiDxzxFGLOvHvdLrUIlzq2o0=', 1572801090),
(8, 'fazryanp@gmail.com', 'uWTwpdT7L+atxMOa+2ubf4DRQWyKEauyOO+YxWulYIs=', 1573876944);

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `nip` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_nama_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id`, `name`, `nip`, `email`, `id_nama_kelas`) VALUES
(4, 'Sandi Maulidika', '149324784', 'infosandemo@gmail.com', 2),
(5, 'anjeng', '21381928', 'anjeng@gmail.com', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
