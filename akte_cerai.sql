-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2021 at 10:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasekayu_serasansekate`
--

-- --------------------------------------------------------

--
-- Table structure for table `akta_cerai`
--

CREATE TABLE `akta_cerai` (
  `akta_cerai_id` int(11) NOT NULL,
  `kecamatan_id` varchar(7) DEFAULT NULL,
  `desa_id` varchar(10) DEFAULT NULL,
  `akta_cerai_nomor` varchar(30) DEFAULT NULL,
  `akta_cerai_nama` varchar(150) DEFAULT NULL,
  `akta_cerai_jk` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `akta_cerai_no_kk` varchar(30) DEFAULT NULL,
  `akta_cerai_no_ktp` varchar(30) DEFAULT NULL,
  `akta_cerai_alamat_lama` text DEFAULT NULL,
  `akta_cerai_alamat_baru` text DEFAULT NULL,
  `akta_cerai_file_akta` varchar(100) DEFAULT NULL,
  `akta_cerai_file_ktp` varchar(100) DEFAULT NULL,
  `akta_cerai_file_kk` varchar(100) DEFAULT NULL,
  `akta_cerai_form_perubahan` varchar(100) DEFAULT NULL,
  `akta_cerai_status` enum('Dilihat','Belum Dilihat','Diproses','Selesai','Diterima','Dikembalikan','Diambil') NOT NULL DEFAULT 'Belum Dilihat',
  `akta_cerai_klasifikasi` enum('Pemohon','Termohon','Penggugat','Tergugat') DEFAULT NULL,
  `akta_cerai_status_anak` enum('Ikut','Tidak Ikut') DEFAULT NULL,
  `akta_cerai_tanggal_proses` timestamp NULL DEFAULT NULL,
  `akta_cerai_tanggal` date DEFAULT NULL,
  `akta_cerai_tanggal_selesai` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akta_cerai`
--

INSERT INTO `akta_cerai` (`akta_cerai_id`, `kecamatan_id`, `desa_id`, `akta_cerai_nomor`, `akta_cerai_nama`, `akta_cerai_jk`, `akta_cerai_no_kk`, `akta_cerai_no_ktp`, `akta_cerai_alamat_lama`, `akta_cerai_alamat_baru`, `akta_cerai_file_akta`, `akta_cerai_file_ktp`, `akta_cerai_file_kk`, `akta_cerai_form_perubahan`, `akta_cerai_status`, `akta_cerai_klasifikasi`, `akta_cerai_status_anak`, `akta_cerai_tanggal_proses`, `akta_cerai_tanggal`, `akta_cerai_tanggal_selesai`, `created_at`, `updated_at`) VALUES
(2, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Termohon', 'Tidak Ikut', '2021-03-21 18:56:48', NULL, '2021-03-21 18:57:05', '2021-02-28 10:38:19', '2021-03-18 10:38:19'),
(4, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Dikembalikan', 'Tergugat', 'Ikut', '2021-03-18 13:20:11', NULL, '2021-03-21 18:57:16', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(5, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Penggugat', 'Ikut', '2021-03-18 13:20:27', NULL, '2021-03-21 18:57:09', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(6, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Termohon', 'Tidak Ikut', '2021-03-18 13:20:11', NULL, '2021-03-18 13:33:37', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(7, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Penggugat', 'Ikut', '2021-03-21 18:57:51', NULL, '2021-03-24 00:44:48', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(8, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Termohon', 'Tidak Ikut', '2021-03-18 13:20:11', NULL, '2021-03-21 18:48:03', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(9, '1606010', '1606010005', '123', '12312', 'Perempuan', '123', '123', '123', '12321', NULL, NULL, NULL, '7874c01bcdb00fb75f94c5fdc73152e9.png', 'Diterima', 'Termohon', 'Tidak Ikut', '2021-03-18 13:20:27', NULL, '2021-03-21 18:57:13', '2021-03-18 10:38:19', '2021-03-18 10:38:19'),
(11, '1606010', '1606010005', 'no.123/34/56', 'budi angkasa', 'Laki - Laki', '123456', '321654', 'Jl. merdeka lingkar selatan', 'Jl. merdeka lingkar utara', 'ee3ff20290e530fdbfc60d414ccc3557.pdf', 'd590340b4fe1f54795a1dcb5c502f677.pdf', '9961a87aa077f544674ff4642742d703.pdf', 'dc27db91a0c98b2cb2cbc75550d32368.pdf', 'Dikembalikan', 'Termohon', 'Ikut', '2021-03-24 00:03:10', NULL, '2021-03-24 00:05:33', '2021-03-23 19:48:45', '2021-03-23 19:48:45'),
(12, '1606010', '1606010005', '123', 'aaa', 'Laki - Laki', '123', '123', 'aaaaaaa', 'aaaaaa', '25239c181a190e71785e573166dfe145.pdf', 'db8c96577aae0a703684bbc5cacd4f7b.pdf', '1d0ddef4d4a17599ac7f865d55185c85.pdf', 'fa56207c4a78aa2e32223bcdec9377e9.pdf', 'Dilihat', 'Termohon', 'Tidak Ikut', '2021-03-24 00:15:23', NULL, '2021-03-24 00:15:42', '2021-03-24 00:14:37', '2021-03-24 00:14:37'),
(13, '1606010', '1606010005', '121', 'aaaaa', 'Laki - Laki', '1221', '1222', 'aaaaaa', 'aaaaa', '0907eb818c2188e10344a0e0609e33a6.pdf', '3c351f24b38ba005622cc79d76fedc2c.pdf', '8e85fba790cb93fea78d8133108fca1d.pdf', '61912d88c3b94e7beb1395d86a8a3408.pdf', 'Diproses', 'Pemohon', 'Ikut', '2021-03-24 01:01:35', NULL, NULL, '2021-03-24 01:00:59', '2021-03-24 01:00:59'),
(15, '1606010', '1606010005', '1234567', 'Amir fatah', 'Laki - Laki', '21323123', '231231', 'Jl. Letnan Simanjuntak lr. lebak mulyo', 'Jl. Letnan Simanjuntak lr. lebak mulyo', '6c7e9be640739e1aafa7f18fec3bb213.pdf', 'a4a635677212e17ac99005eb64cc91fa.pdf', '92543c09c124f8ecd7ad5739eb8bc401.pdf', 'c66289c2139a0a30125a3e2893b8c68c.pdf', 'Diambil', 'Termohon', 'Tidak Ikut', NULL, '2021-03-01', NULL, '2021-03-24 19:26:53', '2021-03-24 19:26:53'),
(16, '1606010', '1606010005', '98765366', 'budi susilo', 'Perempuan', '3232312132', '2131231231', 'Jl. Kol. Wahid Udin, Serasan Jaya, Sekayu, Kabupaten Musi Banyuasin', 'Jl. Kol. Wahid Udin, Serasan Jaya, Sekayu, Kabupaten Musi Banyuasin', 'be877ea26c404f2b746b19edcf2883a1.pdf', 'e2dd0bdcacf70435cd5f80958d975552.pdf', '08f1925051c584ccccfb1fc77a6cd594.pdf', '00a1ee286a4aa7b5ed6cc4b051bd34de.pdf', 'Selesai', 'Pemohon', 'Tidak Ikut', '2021-03-24 21:08:23', NULL, '2021-03-24 21:08:52', '2021-03-24 19:58:20', '2021-03-24 19:58:20'),
(17, '1606010', '1606010005', '22', '233', 'Laki - Laki', '123', '123', 'asd', 'asd', 'ded78ece719ff9d641b5508446c5b6e9.png', 'f9755d97fcfd6b3da39d73a607625f88.png', 'c433b644b6ce37900237d6a0d8149f1e.png', 'f02e129dcced280c246606dc6a94892c.png', 'Diambil', 'Tergugat', 'Tidak Ikut', NULL, '2021-02-28', NULL, '2021-03-27 18:43:18', '2021-03-27 18:43:18'),
(18, '1606091', '1606091013', '123', '123', 'Perempuan', '123', '12312', '12321', '321', 'c34d1d6956e93dae84f0911a45658986.png', '7fb3e079e144d9ad0238f640a9490c95.png', 'c5f1070a9cf42e79651c3aba38c4b4cd.png', '9107ff7b3306b8f97847fad31a17fff3.png', 'Belum Dilihat', 'Pemohon', 'Ikut', NULL, '2021-03-01', NULL, '2021-03-28 07:57:34', '2021-03-28 07:57:34'),
(19, '1606100', '1606100027', '12321', '12312', 'Perempuan', '13', '123', '123', '123', '8b7668af4b4e019f457f0dab7270c279.png', '05cd16c4e229f827acbd7594a0b75a63.png', '4fc62223741530826ed44abf58eff008.png', '31f97bf847fef92a4c633c2922b3290b.png', 'Belum Dilihat', 'Pemohon', 'Ikut', NULL, '2021-03-09', NULL, '2021-03-28 07:58:23', '2021-03-28 07:58:23'),
(20, '1606100', '1606100027', '12321', '12312', 'Perempuan', '13', '123', '123', '123', 'b4ce4237c09d40f8b432e2946c97b5af.png', '5f0e0edea5f0e9388204caf161a1b03a.png', '8be4250ccb283b87243175d2a1b18dd3.png', '88fccd2242f314021e67fefada4b3e05.png', 'Belum Dilihat', 'Pemohon', 'Ikut', NULL, '2021-03-09', NULL, '2021-03-28 07:58:30', '2021-03-28 07:58:30');

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `audit_id` int(11) NOT NULL,
  `audit_tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `audit_by` varchar(100) NOT NULL,
  `audit_ip` varchar(20) NOT NULL,
  `audit_action` enum('CREATE','READ','UPDATE','DELETE') NOT NULL,
  `audit_keterangan` text NOT NULL,
  `audit_link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`audit_id`, `audit_tanggal`, `audit_by`, `audit_ip`, `audit_action`, `audit_keterangan`, `audit_link`) VALUES
(1, '2021-03-28 07:58:30', 'adityadss', '::1', 'CREATE', 'MENAMBAH DATA  Dengan ID = 20', ''),
(2, '2021-03-28 08:32:43', 'adityads', '::1', 'UPDATE', 'MERUBAH DATA  User dengan ID = 1', 'http://localhost/akte_cerai/user'),
(3, '2021-03-28 08:32:57', 'adityads', '::1', 'UPDATE', 'MERUBAH DATA  User dengan ID = 1', 'http://localhost/akte_cerai/user');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `desa_id` varchar(10) NOT NULL,
  `desa_nama` varchar(40) DEFAULT NULL,
  `kecamatan_id` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`desa_id`, `desa_nama`, `kecamatan_id`) VALUES
('1606010001', 'Air Balui', '1606010'),
('1606010002', 'Nganti', '1606010'),
('1606010003', 'Jud Ii', '1606010'),
('1606010004', 'Jud I', '1606010'),
('1606010005', 'Penggage', '1606010'),
('1606010006', 'Ngulak Iii', '1606010'),
('1606010007', 'Ngunang', '1606010'),
('1606010008', 'Ulak  Embacang', '1606010'),
('1606010009', 'Ngulak I', '1606010'),
('1606010010', 'Ngulak Ii', '1606010'),
('1606010011', 'Terusan', '1606010'),
('1606010012', 'Kemang', '1606010'),
('1606010013', 'Tanjung Raya', '1606010'),
('1606010014', 'Air Itam', '1606010'),
('1606010015', 'Keban Ii', '1606010'),
('1606010016', 'Keban I', '1606010'),
('1606010017', 'Panai', '1606010'),
('1606010018', 'Macang Sakti', '1606010'),
('1606010019', 'Ngulak', '1606010'),
('1606020026', 'Kasmaran', '1606020'),
('1606020027', 'Toman', '1606020'),
('1606020028', 'Babat', '1606020'),
('1606020029', 'Mangun Jaya', '1606020'),
('1606020030', 'Muara Punjung', '1606020'),
('1606020031', 'Beruga', '1606020'),
('1606020032', 'Sugiwaras', '1606020'),
('1606020033', 'Sugi Raya', '1606020'),
('1606020034', 'Sereka', '1606020'),
('1606020035', 'Sri Mulyo', '1606020'),
('1606020036', 'Sungai Angit', '1606020'),
('1606020037', 'Bangun Sari', '1606020'),
('1606021001', 'Pengaturan', '1606021'),
('1606021002', 'Pinggap', '1606021'),
('1606021003', 'Tanah Abang', '1606021'),
('1606021004', 'Talang Leban', '1606021'),
('1606021005', 'Saud', '1606021'),
('1606021006', 'Bukit Sejahtera', '1606021'),
('1606021007', 'Bukit Selabu Upt Ii', '1606021'),
('1606021008', 'Tanjung Bali', '1606021'),
('1606021009', 'Lubuk Buah', '1606021'),
('1606021010', 'Bukit Pangkuasan Upt Iv', '1606021'),
('1606021011', 'Talang Buluh', '1606021'),
('1606021012', 'Sungai Napal', '1606021'),
('1606021013', 'Pangkalan Bulian', '1606021'),
('1606021014', 'Lubuk Bintialo', '1606021'),
('1606021015', 'Sako Suban', '1606021'),
('1606021016', 'Ulak Kembang', '1606021'),
('1606022001', 'Bangun Harjo', '1606022'),
('1606022002', 'Sukamaju', '1606022'),
('1606022003', 'Suka Makmur', '1606022'),
('1606022004', 'Suka Damai', '1606022'),
('1606022005', 'Sido Mukti', '1606022'),
('1606022006', 'Sukajaya', '1606022'),
('1606022007', 'Sidorahayu', '1606022'),
('1606022008', 'Bukit Indah', '1606022'),
('1606022009', 'Air Putih Ulu', '1606022'),
('1606022010', 'Cinta Karya', '1606022'),
('1606022011', 'Sialang Agung', '1606022'),
('1606022012', 'Warga Mulya', '1606022'),
('1606022013', 'Tanjung Kaputran', '1606022'),
('1606022014', 'Air Putih Ilir', '1606022'),
('1606022015', 'Sumber Rezeki', '1606022'),
('1606023001', 'Rantau Panjang', '1606023'),
('1606023002', 'Karang Anyar', '1606023'),
('1606023003', 'Karang Waru', '1606023'),
('1606023004', 'Bumi Ayu', '1606023'),
('1606023005', 'Ulak Paceh', '1606023'),
('1606023006', 'Tanjung Durian', '1606023'),
('1606023007', 'Napal', '1606023'),
('1606023008', 'Rantau Kasih', '1606023'),
('1606023009', 'Karang Ringin Ii', '1606023'),
('1606023010', 'Karang Ringin I', '1606023'),
('1606023011', 'Ulak Teberau', '1606023'),
('1606023012', 'Simpang Sari', '1606023'),
('1606023013', 'Ulak Paceh Jaya', '1606023'),
('1606023014', 'Talang Piase', '1606023'),
('1606023015', 'Pandan Dulang', '1606023'),
('1606030001', 'Jirak', '1606030'),
('1606030002', 'Talang Mandung', '1606030'),
('1606030003', 'Sungai Dua', '1606030'),
('1606030004', 'Setia Jaya', '1606030'),
('1606030005', 'Pagar Kaya', '1606030'),
('1606030006', 'Suka Lali', '1606030'),
('1606030007', 'Kertayu', '1606030'),
('1606030008', 'Sindang Marga', '1606030'),
('1606030009', 'Tebing Bulang', '1606030'),
('1606030010', 'Gajah Mati', '1606030'),
('1606030011', 'Rantau Sialang', '1606030'),
('1606030012', 'Kerta Jaya', '1606030'),
('1606030013', 'Rukun Rahayu', '1606030'),
('1606030014', 'Mekarjaya', '1606030'),
('1606030015', 'Rejo Sari', '1606030'),
('1606030016', 'Jembatan Gantung', '1606030'),
('1606030017', 'Baru Jaya', '1606030'),
('1606030018', 'Layan', '1606030'),
('1606030019', 'Keramat Jaya', '1606030'),
('1606030020', 'Sinar Jaya', '1606030'),
('1606030021', 'Talang Simpang', '1606030'),
('1606030022', 'Bangkit Jaya', '1606030'),
('1606040001', 'Rimbah Ukur', '1606040'),
('1606040002', 'Sungai Medak', '1606040'),
('1606040003', 'Sungai Batang', '1606040'),
('1606040004', 'Sukarami', '1606040'),
('1606040005', 'Soak Baru', '1606040'),
('1606040006', 'Balai Agung', '1606040'),
('1606040007', 'Serasan Jaya', '1606040'),
('1606040008', 'Kayuara', '1606040'),
('1606040009', 'Lumpatan', '1606040'),
('1606040010', 'Bailangu', '1606040'),
('1606040022', 'Muara Teladan', '1606040'),
('1606040023', 'Bandar Jaya', '1606040'),
('1606040024', 'Lumpatan Ii', '1606040'),
('1606040025', 'Bailangu Timur', '1606040'),
('1606041001', 'Danau Cala', '1606041'),
('1606041002', 'Rantau Keroya', '1606041'),
('1606041003', 'Teluk Kijing I', '1606041'),
('1606041004', 'Tanjung Agung Barat', '1606041'),
('1606041005', 'Tanjung Agung Timur', '1606041'),
('1606041006', 'Tanjung Agung Utara', '1606041'),
('1606041007', 'Purwosari', '1606041'),
('1606041008', 'Teluk Kijing Iii', '1606041'),
('1606041009', 'Teluk Kijing Ii', '1606041'),
('1606041010', 'Petaling', '1606041'),
('1606041011', 'Lais', '1606041'),
('1606041012', 'Teluk', '1606041'),
('1606041013', 'Epil', '1606041'),
('1606041014', 'Tanjung Agung Selatan', '1606041'),
('1606090007', 'Sungai Lilin', '1606090'),
('1606090018', 'Sumber Rejeki', '1606090'),
('1606090019', 'Sukadamai Baru', '1606090'),
('1606090020', 'Cinta Damai', '1606090'),
('1606090021', 'Berlian Makmur', '1606090'),
('1606090022', 'Srigunung', '1606090'),
('1606090023', 'Bumi Kencana', '1606090'),
('1606090024', 'Panca Tunggal', '1606090'),
('1606090025', 'Mulyorejo', '1606090'),
('1606090026', 'Linggo Sari', '1606090'),
('1606090027', 'Nusa Serasan', '1606090'),
('1606090028', 'Pinang Banjar', '1606090'),
('1606090029', 'Mekar Jadi', '1606090'),
('1606090035', 'Bukit Jaya', '1606090'),
('1606090036', 'Sungai Lilin Jaya', '1606090'),
('1606091001', 'Tenggaro', '1606091'),
('1606091002', 'Keluang', '1606091'),
('1606091003', 'Sumber Agung', '1606091'),
('1606091004', 'Karya Maju', '1606091'),
('1606091005', 'Tegal Mulya', '1606091'),
('1606091006', 'Mekar Jaya', '1606091'),
('1606091007', 'Loka Jaya', '1606091'),
('1606091008', 'Dawas', '1606091'),
('1606091009', 'Tanjung Dalam', '1606091'),
('1606091010', 'Cipta Praja', '1606091'),
('1606091011', 'Mekarsari', '1606091'),
('1606091012', 'Mulyo Asih', '1606091'),
('1606091013', 'Sido Rejo', '1606091'),
('1606091014', 'Sridamai', '1606091'),
('1606092001', 'Gajah Mati', '1606092'),
('1606092002', 'Tanjung Kerang', '1606092'),
('1606092003', 'Babat Banyuasin', '1606092'),
('1606092004', 'Supat', '1606092'),
('1606092005', 'Letang', '1606092'),
('1606092006', 'Suka Maju', '1606092'),
('1606092007', 'Langkap', '1606092'),
('1606092008', 'Tenggulang Jaya', '1606092'),
('1606092009', 'Bandar Tenggulang', '1606092'),
('1606092010', 'Sumber Jaya', '1606092'),
('1606092011', 'Tenggulang Baru', '1606092'),
('1606092012', 'Seratus Lapan', '1606092'),
('1606092013', 'Babat Ramba Jaya', '1606092'),
('1606092014', 'Supat Barat', '1606092'),
('1606092015', 'Supat Timur', '1606092'),
('1606100027', 'Muara Merang', '1606100'),
('1606100028', 'Mangsang', '1606100'),
('1606100040', 'Tampang Baru', '1606100'),
('1606100041', 'Pulai Gading', '1606100'),
('1606100042', 'Muara Medak', '1606100'),
('1606100043', 'Kali Berau', '1606100'),
('1606100047', 'Sindang Marga', '1606100'),
('1606100048', 'Telang', '1606100'),
('1606100049', 'Mendis', '1606100'),
('1606100050', 'Simpang Bayat', '1606100'),
('1606100051', 'Pangkalan Bayat', '1606100'),
('1606100052', 'Pagar Desa', '1606100'),
('1606100053', 'Bayat Ilir', '1606100'),
('1606100054', 'Bayung Lencir', '1606100'),
('1606100055', 'Senawar Jaya', '1606100'),
('1606100056', 'Sukajaya', '1606100'),
('1606100057', 'Muara Bahar', '1606100'),
('1606100058', 'Mekar Jaya', '1606100'),
('1606100059', 'Kepayang', '1606100'),
('1606100060', 'Mendis Jaya', '1606100'),
('1606100061', 'Lubuk Harjo', '1606100'),
('1606100062', 'Bayung Lencir Jaya', '1606100'),
('1606100063', 'Wonorejo', '1606100'),
('1606101001', 'Karang Agung', '1606101'),
('1606101002', 'Gali Sari', '1606101'),
('1606101003', 'Perumpung Raya', '1606101'),
('1606101004', 'Karang Makmur', '1606101'),
('1606101005', 'Karang Rejo', '1606101'),
('1606101006', 'Karya Mukti', '1606101'),
('1606101007', 'Mulya Agung', '1606101'),
('1606101008', 'Madya Mulya', '1606101'),
('1606101009', 'Karang Tirta', '1606101'),
('1606101010', 'Purwa Agung', '1606101'),
('1606101011', 'Tri Mulya Agung', '1606101'),
('1606101012', 'Ringin Agung', '1606101'),
('1606101013', 'Mekar Sari', '1606101'),
('1606101014', 'Sri Karang Rejo', '1606101'),
('1606101015', 'Karang Mukti', '1606101'),
('1606101016', 'Karang Sari', '1606101'),
('1606101017', 'Mulya Jaya', '1606101'),
('1606101018', 'Sari Agung', '1606101'),
('1606101019', 'Sukajadi', '1606101'),
('1606101020', 'Bandar Agung', '1606101'),
('1606101021', 'Mandala Sari', '1606101'),
('1606101022', 'Sri Gading', '1606101'),
('1606101023', 'Bumi Agung', '1606101'),
('1606101024', 'Agung Jaya', '1606101'),
('1606101025', 'Jaya Agung', '1606101'),
('1606101026', 'Suka Makmur', '1606101'),
('1606102001', 'Berojaya Timur', '1606102'),
('1606102002', 'Beji Mulyo', '1606102'),
('1606102003', 'Margo Mulyo', '1606102'),
('1606102004', 'Pandan Sari', '1606102'),
('1606102005', 'Simpang Tungkal', '1606102'),
('1606102006', 'Suka Damai', '1606102'),
('1606102007', 'Peninggalan', '1606102'),
('1606102008', 'Pangkalan Tungkal', '1606102'),
('1606102009', 'Berlian Jaya', '1606102'),
('1606102010', 'Sumber Harum', '1606102'),
('1606102011', 'Sumber Sari', '1606102'),
('1606102012', 'Srimulyo', '1606102'),
('1606102013', 'Banjar Jaya', '1606102'),
('1606102014', 'Sinar Harapan', '1606102'),
('1606102015', 'Sinar Tungkal', '1606102'),
('1606102016', 'Sido Mulyo', '1606102');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` varchar(7) NOT NULL,
  `kabupaten_id` int(4) NOT NULL,
  `kecamatan_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kecamatan_id`, `kabupaten_id`, `kecamatan_nama`) VALUES
('1606010', 1606, ' Sanga Desa'),
('1606020', 1606, ' Babat Toman'),
('1606021', 1606, ' Batanghari Leko'),
('1606022', 1606, ' Plakat Tinggi'),
('1606023', 1606, ' Lawang Wetan'),
('1606030', 1606, ' Sungai Keruh'),
('1606040', 1606, ' Sekayu'),
('1606041', 1606, ' Lais'),
('1606090', 1606, ' Sungai Lilin'),
('1606091', 1606, ' Keluang'),
('1606092', 1606, ' Babat Supat'),
('1606100', 1606, ' Bayung Lencir'),
('1606101', 1606, ' Lalan'),
('1606102', 1606, ' Tungkal Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_judul` varchar(150) NOT NULL,
  `slide_isi` text NOT NULL,
  `slide_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_judul`, `slide_isi`, `slide_gambar`) VALUES
(1, 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Musi Banyuasin', 'Membangun Zona Integritas', '4a06008838a0d36fd4bfe3215c387c52.jpg'),
(3, 'Pengadilan Agama Sekayu', '', 'c7a669f4e6fc48a7fecd24f95d669484.png'),
(4, 'AREA ZONA INTEGRITAS', '', '3ddd603f7a01f93617730f77324d3d5e.png'),
(5, 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Musi Banyuasin', '', '037e89bba291f5ef0d29311830b9c64d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_nama` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_role` enum('Admin','Operator Pengadilan','Operator Dukcapil','Admin Dukcapil') DEFAULT NULL,
  `last_login` datetime NOT NULL,
  `user_status` enum('active','nonactive') NOT NULL DEFAULT 'active',
  `created_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_nama`, `user_password`, `user_role`, `last_login`, `user_status`, `created_by`) VALUES
(1, 'adityads', 'adityads', '202cb962ac59075b964b07152d234b70', 'Admin', '2021-03-28 15:23:49', 'active', 'adityads'),
(2, 'adityadss', 'adityadss', '202cb962ac59075b964b07152d234b70', 'Operator Pengadilan', '2021-03-28 14:36:18', 'active', 'adityads'),
(3, 'adityadsss', 'adityadsss', '202cb962ac59075b964b07152d234b70', 'Operator Dukcapil', '2021-03-28 02:41:07', 'active', 'adityads'),
(6, 'adityadsiv', 'adityadsiv', '202cb962ac59075b964b07152d234b70', 'Admin Dukcapil', '2021-03-28 03:24:16', 'active', 'adityads');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akta_cerai`
--
ALTER TABLE `akta_cerai`
  ADD PRIMARY KEY (`akta_cerai_id`),
  ADD KEY `desa_id` (`desa_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akta_cerai`
--
ALTER TABLE `akta_cerai`
  MODIFY `akta_cerai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akta_cerai`
--
ALTER TABLE `akta_cerai`
  ADD CONSTRAINT `akta_cerai_ibfk_1` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akta_cerai_ibfk_2` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`kecamatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`kecamatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
