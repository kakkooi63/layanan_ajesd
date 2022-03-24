-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 08 Mar 2022 pada 11.12
-- Versi server: 10.5.13-MariaDB-cll-lve
-- Versi PHP: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `akta_cerai`
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akta_cerai`
--

INSERT INTO `akta_cerai` (`akta_cerai_id`, `kecamatan_id`, `desa_id`, `akta_cerai_nomor`, `akta_cerai_nama`, `akta_cerai_jk`, `akta_cerai_no_kk`, `akta_cerai_no_ktp`, `akta_cerai_alamat_lama`, `akta_cerai_alamat_baru`, `akta_cerai_file_akta`, `akta_cerai_file_ktp`, `akta_cerai_file_kk`, `akta_cerai_form_perubahan`, `akta_cerai_status`, `akta_cerai_klasifikasi`, `akta_cerai_status_anak`, `akta_cerai_tanggal_proses`, `akta_cerai_tanggal`, `akta_cerai_tanggal_selesai`, `created_at`, `updated_at`, `keterangan`) VALUES
(21, '1606010', '1606010001', '1233333333', 'ani', 'Perempuan', '122222221111', '12222222222211', 'jl. merdeka 1', 'jl. merdeka 2', '86ad68f40b6e9d37daa41a1a222791dd.docx', '60cfca54055f56f4695def9d657a1c6a.docx', 'fbb955e9f63008a3695d4552774c0fde.docx', '92a2d0c0b84cba1776d7a03809d654a9.docx', 'Dikembalikan', 'Pemohon', 'Ikut', '2021-03-30 01:47:10', '2021-03-28', '2021-03-30 01:47:54', '2021-03-30 01:42:12', '2021-03-30 01:42:12', ''),
(22, '1606020', '1606020028', '111111', 'dela', 'Perempuan', '2222222', '3333333333', 'jl merdeka 1', 'jl merdeka 2', 'd8c48e4bc9553b00df65e9b560969407.docx', '6615986f5f86bd62ca0c2af1d4729ced.docx', '50b87dbacb9f51aa354388c9e4dec3f2.docx', 'e675e9b6b9c30b52e17c9d1d706e975e.docx', 'Dikembalikan', 'Penggugat', 'Ikut', '2021-03-30 02:03:10', '2021-03-22', '2021-03-30 02:04:03', '2021-03-30 02:02:04', '2021-03-30 02:02:04', ''),
(23, '1606020', '1606020027', '0140/AC/2021/PA.Sky', 'Eka Indri Gustini', 'Perempuan', '1606063003210006', '1606065308890005', 'Dusun III Toman, Desa Toman, Kecamatan Babat Toman, Kabupaten Musi Banyuasin, Provinsi Sumatera Selatan', 'Dusun III Toman, Desa Toman, Kecamatan Babat Toman, Kabupaten Musi Banyuasin, Provinsi Sumatera Selatan', '6af5748468640ee59ff3c14b304fbf5b.pdf', '350b5f8a173f7e21c6b6ca69216af88e.pdf', 'd8e06cb361a56792f0d51d1843179b22.pdf', '5cb1851275bf0976fba6cfcd53982c51.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-03-30 08:38:57', '2021-03-08', '2021-03-30 08:56:05', '2021-03-30 07:10:12', '2021-03-30 07:10:12', ''),
(24, '1606040', '1606040006', '0129/AC/2021/PA.Sky', 'Faridawati', 'Perempuan', '1606013103210006 ', '1606016002890003', 'Sukarami, Kecamatan Sekayu, Kab Musibanyuasin', 'Jl Merdeka, Kelurahan Balai Agung, Kecamatan Sekayu, Kab Musibanyuasin', 'd9972f294825891b18d575997833d8f3.pdf', 'ef9d17e2325849eb6a7dccbd03a2246b.pdf', 'f1fc7d76f81aef3143d6dd2b4d471b2e.pdf', '8f0511f86d13af0d6a8a53be23416d9f.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-03-31 04:48:04', '2021-03-08', '2021-03-31 06:47:03', '2021-03-31 04:08:01', '2021-03-31 04:08:01', ''),
(25, '1606040', '1606040005', '0155/AC/2021/PA.Sky', 'Eka Kurniati', 'Perempuan', '1606010104210003', '1606015905920001', 'jln. sekayu pendopo, kelurahan soak baru, kecamatan sekayu, kabupaten musibanyuasin.', 'Jln Sekayu Pendopo, Kelurahan Soak Baru, Kecamatan Sekayu Kabupaten Musibanyuasin', '3846d58f0d7338171ec97aa5d692134f.pdf', '8d09cb5672f2812c831d407cec9c8c40.pdf', 'cb975f3d6744e74889340fbb5a6ff29c.pdf', 'bb09a314f5567ed5a7248df7575a077c.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-04-01 04:43:59', '2021-03-17', '2021-04-01 04:56:56', '2021-04-01 02:56:44', '2021-04-01 02:56:44', ''),
(26, '1606090', '1606090023', '0186/AC/2021/PA.Sky', 'Mu\'arif Bin Tukimin', 'Laki - Laki', '1606073012130009', '1606070510760005', 'Bumi Kencana,Kecamatan Sungai Lilin, Kabupaten Musi Banyuasin.', 'Bumi Kencana,Kecamatan Sungai Lilin, Kabupaten Musi Banyuasi.', '4382c8f5df6649dbbbc15cd75edebd3a.pdf', 'f0c696779c4bd5ad6cc0270a4d876982.pdf', '2ffef1487359ae9cad8a8b9b94f5309c.pdf', 'c1e1d594d2aa5c6724da546e19326d13.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-04-05 09:22:10', '2021-04-05', '2021-04-06 00:43:06', '2021-04-05 05:04:59', '2021-04-05 05:04:59', ''),
(27, '1606092', '1606092004', '0138/AC/2021/PA.Sky', 'Linda Lestari', 'Perempuan', '1606140604210001', '1606075404870006', 'Dusun V, Babat Supat, Kecamatan Babat Supat,Kab Musi Banyuasin.', 'Dusun V, Babat Supat, Kecamatan Babat Supat,Kab Musi Banyuasin.', '50fdf827fd7ffc1830a60a3fa4d0a229.pdf', '8c229b8182f248fbd68a6814f54192f6.pdf', 'ddb297b4b51c3572eb29d24a4f0fd782.pdf', '0bc563de9dc2a7ceab3924804fe66a35.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-04-06 05:48:51', '2021-03-08', '2021-04-06 07:00:50', '2021-04-06 02:36:42', '2021-04-06 02:36:42', ''),
(28, '1606101', '1606101001', '1234567', 'amir fatah', 'Laki - Laki', '987654321', '987654321', 'jl merdeka', 'jl merdeka', '88cb74576f6342a723dd288b7e41e9bc.docx', 'b72c9c7dc04aaad2704ecb92652f6eaf.docx', 'd6a76e3148a1a09cebc34a0b6f86d1f8.docx', 'ed1185180845fff98571ca09d430864f.docx', 'Diterima', 'Pemohon', 'Ikut', '2021-04-07 09:39:31', '2021-04-06', '2021-04-07 09:40:02', '2021-04-07 09:38:40', '2021-04-07 09:38:40', ''),
(30, '1606040', '1606040022', '0181/AC/2021/PA.Sky', 'Sukaisi Binti Rusman', 'Perempuan', '1606011404210003', '1606015205910005', 'Dusun IV,  Muara Teladan, Kecamatan, Sekayu, Kabupaten Musi banyuasin', 'Lumpatan, Kecamatan Sekayu, Kab Musi Banyuasin.', '4c03bb0857e0fbd01ae5ebb3996fb2ba.pdf', 'eb1bba3ca96efb5362332d16a93c30fa.pdf', '4c67b85f3584e5890171dfcf6d069307.pdf', '05c1bb0479172c6dcee9629458e37d87.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-04-14 01:53:57', '2021-04-01', '2021-04-15 02:28:57', '2021-04-12 05:20:55', '2021-04-12 05:20:55', ''),
(31, '1606023', '1606023011', '0188/AC/2021/PA.Sky', 'Yeni Andriani Binti Mustem', 'Perempuan', '1606131404210001', '1606074804970002', 'Dusun Kampung Baru, Kecamatan Bayung Lincir, Kab Musi Banyuasin.', 'Dusun II, Ulak Teberau, Kecamatan Lawang Wetan, Kabupaten Muba.', 'ec20efd73fa33ccaeec7aa46306eca15.pdf', '15d4fb7e0b883a5ed6c8145d4046c80b.pdf', '47f361c344346a15425c923ff9faf8f7.pdf', '64f2fa41f2dc2f6926fc7e1aabbf24a0.pdf', 'Diterima', 'Pemohon', 'Tidak Ikut', '2021-04-14 01:59:07', '2021-04-05', '2021-04-15 02:28:53', '2021-04-13 03:35:25', '2021-04-13 03:35:25', ''),
(32, '1606040', '1606040008', '0200/AC/2021/PA.Sky', 'Sumarni Eka Romaita Binti Ibrahim', 'Perempuan', '1606011404210004', '1606014410860006', 'Jl Pramuka, Rt 006, Rw 003, Kelurahan Serasan Jaya, Kecamatan Sekayu, Kab Muba.', 'Jl Merdeka, Lk II, Kelurahan, Serasan Jaya, Kecamatan Sekayu, Kab Muba.', '4c3a9b34965510e0d22f381395aea283.pdf', '2d20ec8fdd4be1293f0a05f53d5120d1.pdf', '1d952bde7429817eb4a572dd9621f63d.pdf', '999f2eca2e592512f1bd66e2fec0ff35.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-04-14 02:03:45', '2021-04-12', '2021-04-15 02:28:45', '2021-04-13 07:29:03', '2021-04-13 07:29:03', ''),
(33, '1606040', '1606040009', '0189/AC/2021/PA.Sky', 'Luspa Santi Binti Zainudin', 'Perempuan', '1606011604210009', '1606016501830003', 'Dusun III, Lumpatan, Kec, Sekayu, Kab Musi Banyuasin.', 'Dusun III, Lumpatan, Kec, Sekayu, Kab Musi Banyuasin.', 'db27819903a05242c984f2df14e58b7b.pdf', '540cce133bfd6447ce5731388b39937e.pdf', 'c01f0e247d9396766f430a2239b32175.pdf', '8bedb6dae1bb36dbd13a6f965f7d72c5.pdf', 'Diterima', 'Penggugat', 'Tidak Ikut', '2021-04-16 03:43:55', '2021-04-06', '2021-04-16 04:50:17', '2021-04-15 06:14:04', '2021-04-15 06:14:04', ''),
(34, '1606023', '1606023013', '0202/AC/2021/PA.Sky', 'Yuliana Binti Mulyadi', 'Perempuan', '1606131904210001', '1606065706820004', 'Dusun II, Ulak Paceh Jaya, Kec Lawang Wetan, Kab Musi Banyuasin.', 'Dusun IV, Ulak Paceh Jaya, Kec Lawang Wetan, Kab Musi Banyuasin.', 'f4cfc9b36ab97c1853e9cb900c10324b.pdf', '3323fdfa0c70aa17c6e6707a9fceba38.pdf', '8186ac1f358baba9ab3f9ead24895ffd.pdf', '2e610c47722148562506f86818c64c28.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-04-19 02:30:21', '2021-04-12', '2021-04-19 04:47:18', '2021-04-16 04:12:27', '2021-04-16 04:12:27', ''),
(35, '1606022', '1606022008', '0183/AC/2021/PA.Sky', 'Teguh Arifin Bin Rahmad', 'Laki - Laki', '1606101311080004', '1606100203800003', 'Jl. Beringin, Desa Bukit Indah, Kec, Plakat Tinggi, Kab, Musi Banyuasin.', 'Jl. Beringin, Desa Bukit Indah, Kec, Plakat Tinggi, Kab, Musi Banyuasin.', '5ae0e0aa76871d4d710eb2279d6f8309.pdf', 'e0f4cae864960a14b12a8ff5d082fb5b.pdf', '9f09361162fc66a0fae3fd4430254d80.pdf', '35576159e699c39b07afca833259b203.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-04-20 02:53:20', '2021-04-01', '2021-04-20 05:30:43', '2021-04-19 03:40:45', '2021-04-19 03:40:45', ''),
(36, '1606040', '1606040008', '0089/AC/2021/PA.Sky', 'Revy Meydia Binti Junaidi', 'Perempuan', '1606012904210026', '1606014105870009', 'Komp. Griya Randik Blok B,02 No,06. Kel. Kayuara, Kab, Muba.', 'Komp. Griya Randik Blok B,02 No,06. Kel. Kayuara, Kab, Muba.', '80bd952169d27f5f13a58ee560847536.pdf', 'd98906a75d26aa8b541151d874d11bc3.pdf', '3d6daccb1178118479075bf7cb33b50b.pdf', '71f3a66bd63afcb5de6cd1cf39ec676e.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-04-29 06:06:39', '2021-02-16', '2021-04-29 08:19:04', '2021-04-28 05:22:51', '2021-04-28 05:22:51', ''),
(37, '1606022', '1606022009', '0204/AC/2021/PA.Sky', 'Rosita Hamam Binti Wagiman', 'Perempuan', '1606102904210005', '1606104203910001', 'Desa Air Putih, RT 002, RW 005 Ulu, Kec Plakat Tinggi, Kab Muba.', 'Desa Air Putih, RT 002, RW 005 Ulu, Kec Plakat Tinggi, Kab Muba.', '97681662f3a797e26dce09ac809d2d82.pdf', '5726b99220bb68a4d64c7ffbea5c57ea.pdf', '11e66b837171a8f39f7cecbd50f63033.pdf', 'abf613868559d76a5a6c55f1c5621b36.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-04-29 06:02:15', '2021-04-14', '2021-04-29 08:19:08', '2021-04-29 03:59:31', '2021-04-29 03:59:31', ''),
(38, '1606091', '1606091002', '02607/AC/2021/PA.Sky', 'Juniansyah Alfarudin Bin Sopian', 'Laki - Laki', '1606082101190002', '1606082206930001', 'Jln. Keluang Dawas RT 013, RW 004, Kec, Keluang, Kab, Muba.', 'Jln. Keluang Dawas RT 013, RW 004, Kec, Keluang, Kab, Muba.', '4ab05b7483f7584857e69215129c9c26.pdf', '746141d439d2409228c27a87d9cbf341.pdf', '1aa5ac1a950ecff4002ff89622199c37.pdf', 'c447403f6dcf6462d7129c4cef34e710.pdf', 'Diterima', 'Pemohon', 'Tidak Ikut', '2021-04-29 05:59:29', '2020-12-17', '2021-04-29 08:19:11', '2021-04-29 04:09:28', '2021-04-29 04:09:28', ''),
(39, '1606090', '1606090022', '0275/AC/2021/PA.Sky', 'Dwi Arianto Bin Samsi', 'Laki - Laki', '1606072208080001', '1606070402830007', 'Desa Srigunung, Kecamatan Sungai Lilin, Kabupaten Musi Banyuasin.', 'Desa Srigunung, Kecamatan Sungai Lilin, Kabupaten Musi Banyuasin.', '840dedfb072c605da4e0657bcedf0159.pdf', '8a3d9ce3ab374731fd8f5a76c168283b.pdf', 'bc2d9b9bd3b33ca705ffb882ee4cba6c.pdf', '2893dfa04a82945fd3bb3efefe722079.pdf', 'Diterima', 'Pemohon', 'Ikut', '2021-05-18 02:49:44', '2021-05-17', '2021-05-19 03:51:28', '2021-05-18 00:51:44', '2021-05-18 00:51:44', ''),
(40, '1606090', '1606090022', '0275/AC/2021/PA.Sky', 'Halimah Binti M. Hasan Mahdi', 'Perempuan', '1606071805210001', '1606076010810004', 'Desa Srigunung, Kecamatan Sungai Lilin, Kabupaten Musi Banyuasin.', 'Desa Srigunung, Kecamatan Sungai Lilin, Kabupaten Musi Banyuasin.', '0f59682a7d381cfa12556df13cbff70f.pdf', '2a461e10c7de77e8909b730163a865e4.pdf', '985ea4938587291d03aab2456422a2dd.pdf', '14943f1e3feab83c5b935de860b0c75a.pdf', 'Diterima', 'Termohon', 'Tidak Ikut', '2021-05-18 02:44:05', '2021-05-17', '2021-05-19 03:51:09', '2021-05-18 00:56:09', '2021-05-18 00:56:09', ''),
(41, '1606040', '1606040009', '0241/AC/2021/PA.Sky', 'Rindah Liana Binti Jaya Sakti', 'Perempuan', '1606011905210002', '1606016002870001', 'Dusun I Lumpatan, Kecamatan Sekayu, Kabupaten Musi Banyuasin.', 'Dusun I Lumpatan, Kecamatan Sekayu, Kabupaten Musi Banyuasin.', '325eaa1d9d5f92c44881535032e5b5b5.pdf', '73642534f0e21d5e8ff38e7b7026c3fa.pdf', 'cfc97e60b723d8d8bb851d699359f400.pdf', 'edb9ff0e62a962ff22554920ba3607c6.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-05-19 03:49:15', '2021-05-04', '2021-05-24 09:32:34', '2021-05-18 08:00:05', '2021-05-18 08:00:05', ''),
(42, '1606021', '1606021006', '0284/AC/2021/PA.Sky', 'Poniah Binti Juantak', 'Perempuan', '1606041905210001', '1606044403960001', 'Desa Bikit Sejahtera, Kecamatan, Batang Hari Leko, Kabupaten, Musi Banyuasin.', 'Desa Bikit Sejahtera, Kecamatan, Batang Hari Leko, Kabupaten, Musi Banyuasin.', '8c65b3c303d4c1d59aeb71c26970df25.pdf', 'f21e14803082d959d0670657157dcb20.pdf', '831114b1b9916a18434bf7881c8d9514.pdf', '1717c7969fc1716941c2c4bf55620569.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-05-19 03:46:44', '2021-05-18', '2021-05-24 09:31:36', '2021-05-19 03:42:22', '2021-05-19 03:42:22', ''),
(43, '1606040', '1606040005', '0255/AC/2021/PA.Sky', 'Rica Voviyenti Binti Ruslan', 'Perempuan', '1606012505210003', '1606015011850006', 'Jln Merdeka No. 408 Rt/Rw 006, 003. Kelurahan, Soak Baru, Kecamatan, Sekayu, Kabupaten Musi Banyuasin.', 'Jln Merdeka No. 408 Rt/Rw 006, 003. Kelurahan, Soak Baru, Kecamatan, Sekayu, Kabupaten Musi Banyuasin.', '32f37906710107b432b28a3d8337e13a.pdf', '16a166a8830d935e6076ff6740a658ba.pdf', 'e027140eb26443589f0054ac4e01b8f1.pdf', 'a4836133a382ca82d6b4e68526c745ad.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-05-25 01:35:42', '2021-05-10', '2021-05-25 09:00:59', '2021-05-24 02:34:58', '2021-05-24 02:34:58', ''),
(44, '1606040', '1606040006', '0218/AC/2021/PA.Sky', 'Indri Dwi Putri Binti Airo Hendri', 'Perempuan', '1606012505210002', '1606014411000002', 'Jl Merdeka No 012 Lk II, Kelurahan Balai Agung, Kabupaten Musi Banyuasin.', 'Jl Merdeka No 012 Lk II, Kelurahan Balai Agung, Kabupaten Musi Banyuasin.', '1ec8fd2be107faac035e6cdae7207749.pdf', '393ac446c2af4c0944eb1bf1c710de2b.pdf', 'f71a1071d90d069b427fea9d2265666f.pdf', '0accc99dfe877ae611988a22261a6e28.pdf', 'Diterima', 'Penggugat', 'Tidak Ikut', '2021-05-25 01:34:06', '2021-04-21', '2021-05-25 09:01:34', '2021-05-24 04:58:15', '2021-05-24 04:58:15', ''),
(45, '1606022', '1606022004', '0237/AC/2021/PA.Sky', 'Ahmad Nuryani Bin Irpan', 'Laki - Laki', '1606100904082340', '1606102903820001', 'Desa Suka Damai, Kecamatan Plakat Tinggi, Kabupaten Musi Banyuasin.', 'Desa Suka Damai, Kecamatan Plakat Tinggi, Kabupaten Musi Banyuasin.', 'e5b81a26ca14ee81135b5a48cce55969.pdf', '46fa211f0211037c04bb3a048cfdf6f1.pdf', 'b9f4816090f3877ee0df056a19c4ad74.pdf', '15782f6f56703e9c9303898e3d4b7b74.pdf', 'Diterima', 'Pemohon', 'Tidak Ikut', '2021-05-25 01:31:35', '2021-05-03', '2021-05-25 09:01:40', '2021-05-24 05:03:58', '2021-05-24 05:03:58', ''),
(46, '1606040', '1606040006', '0216/AC/2021/PA.Sky', 'Herawati Binti Usman', 'Perempuan', '1606011106210009', '3273035907790008', 'Jl. K.H Ahmad Dahlan No 13, Kelurahan Balai Agung, Kecamatan Sekayu, Kabupaten Muai Banyuasin.', 'Jl. K.H Ahmad Dahlan No 13, Kelurahan Balai Agung, Kecamatan Sekayu, Kabupaten Muai Banyuasin.', 'c41f59e47dc44a5534a8e7e6e71732fe.pdf', '626f21e7bc38d043cd5975e4a6550c07.pdf', 'f7d3c1a55c27ffdfec5e77e00e47b422.pdf', 'c773db6d28fa84e44159b22a410f2fc5.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-06-07 03:01:00', '2021-04-20', '2021-06-11 09:07:18', '2021-06-04 00:35:43', '2021-06-04 00:35:43', ''),
(47, '1606040', '1606040007', '0244/AC/2021/PA.Sky', 'Yuliani Binti Yohan', 'Perempuan', '1606011106210011', '1606015607870004', 'Jl. Merdeka No.096, Kel. Serasan Jaya, Kec Sekayu, Kab Muba.', 'Jl. Depati Lk. II No. 836, Kel. Serasan Jaya. Kec. Sekayu. Kab Muba.', '736a9cfdf0e7715c61e44b3944343e54.pdf', 'a77d0982c85d0eecbc7e02b8c6f35340.pdf', 'a256555e069e89a61682c361f3f00816.pdf', '13acab1d0fa00c59b6e796b646974f98.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-06-11 07:49:25', '2021-05-05', '2021-06-11 09:07:14', '2021-06-10 06:39:04', '2021-06-10 06:39:04', ''),
(48, '1606040', '1606040006', '0308/AC/2021/PA.Sky', 'Yunita Binti Rusli', 'Perempuan', '1606012206210004', '1606104107950002', 'Dusun I No.141, Desa Sungai Batang, Kecamatan Sekayu, Kab Musi Banyuasin.', 'Komplek Prumnas Blok C.No.30, Kel Balai Agung, Kec Sekayu, Kab Musi Banyuasin.', 'cb003417983a48ee5521eb87bb7ce7b0.pdf', 'e8468cada52b560db8055f7107b2fbc7.pdf', 'b7fbff6982ff3b279252f2480601e6b7.pdf', '3542588194cb15238a67dedc561b7358.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-06-22 02:04:08', '2021-05-28', '2021-06-22 04:07:23', '2021-06-16 09:12:11', '2021-06-16 09:12:11', ''),
(49, '1606040', '1606040006', '0306/AC/2021/PA.Sky', 'Emi Marlina Binti Arasadi', 'Perempuan', '1606012206210003', '1606045504870004', 'Desa Pandan Dulang, Kec Lawang Wetan, Kab Muba.', 'Jln Impres Penjara Baru, Kel Balai Agung, Kec Sekayu, Kab Muba.', '1be062935e9227f7ec0d2ee66cfbbe86.pdf', '82ef487b6e779105d32045a8602be7d5.pdf', '8b9f8f937cb87e30f77038676f1a711d.pdf', '9b6529c82b4b68b0f11d90fe5bc1ddc0.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-06-22 01:59:53', '2021-05-28', '2021-06-22 04:07:27', '2021-06-18 03:08:33', '2021-06-18 03:08:33', ''),
(50, '1606022', '1606022006', '0261/AC/2021/PA.Sky', 'Rika Hartati Binti Rozali', 'Perempuan', '1606102206210001', '1606184801570002', 'Jln Sekayu Rimba Ukur C5 Kec Plakat Tinggi, Kab Muba.', 'Dusun III, Desa Suka Jaya, Kec Plakat Tinggi, Kab Muba.', 'cd111ee54047597571f5f8878ec3969c.pdf', '1e90741c188e6083bd40d30b21252df7.pdf', '77b94f803e99f9bc3f3241d711cc51c1.pdf', 'a62be6bf6b14581033bc3b32fa107ea3.pdf', 'Diterima', 'Penggugat', 'Tidak Ikut', '2021-06-22 01:55:28', '2021-05-11', '2021-06-22 04:07:30', '2021-06-18 03:53:12', '2021-06-18 03:53:12', ''),
(51, '1606040', '1606040006', '0322/AC/2021/PA.Sky', 'Rita Yuliana Binti Periyadi', 'Perempuan', '1606012306210001', '1606016907990003', 'Jln. Sekayu Sukarami Lk II, Kel. Balai Agung, Kec. Sekayu, Kab. Musi Banyuasin. ', 'Jln. Merdeka Lk II, Kel Balai Agung, Kec Sekayu, Kab Musi Banyuasin.', '4f675fb46260c1b11883f126f7758318.pdf', '0406e55423b6db7c474f88d65e6f0f77.pdf', '8e0740c4ce49d1f83895c897103f5c60.pdf', 'f99b6b92b24d8499e4fd47d3a603df2f.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-06-23 02:34:17', '2021-06-04', '2021-06-28 02:07:54', '2021-06-23 02:06:32', '2021-06-23 02:06:32', ''),
(52, '1606023', '1606023005', '0266/AC/2021/PA.Sky', 'Mariana Binti Sukri', 'Perempuan', '1606130107210001', '1606014101890013', 'Dusun I. Desa Ulak Paceh, Kec Lawang Wetan. Kab Muba.', 'Dusun I. Desa Ulak Paceh, Kec Lawang Wetan. Kab Muba.', '9a4dfb041b32dc0e95e5d02809405a67.pdf', 'b7b01efb8bf6d0febb253890a4221393.pdf', '7481d51485997bbf3ab87e8697fdf3e2.pdf', '62f212e71bd10e7783183e201fdeb78d.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-07-01 01:35:33', '2021-05-17', '2021-07-07 06:05:42', '2021-06-28 07:08:29', '2021-06-28 07:08:29', ''),
(53, '1606023', '1606023004', '0344/AC/2021/PA.Sky', 'Oktariani Binti Arapik', 'Perempuan', '1606130607210001', '1606066510000006', 'Dusun II, Desa Bumi Ayu, Kecamatan Lawang Wetan, Kabupaten Muba.', 'Dusun II, Desa Bumi Ayu, Kecamatan Lawang Wetan, Kabupaten Muba.', 'dc81fe4aa4a0d35a12c5e36046110571.pdf', '214ca2f58081ad139b7e4e0a0feb155a.pdf', '83905790d1472eb961e773cc466dc2cd.pdf', '7aa39c6c8a3c6145e2634958d0606462.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-07-06 02:08:52', '2021-06-22', '2021-07-07 06:05:38', '2021-07-05 03:51:38', '2021-07-05 03:51:38', ''),
(54, '1606040', '1606040006', '0445/AC/2021/PA.Sky', 'Ferianto Bin Abu Bakar', 'Laki - Laki', '1606012105080009', '1606013006800001', 'Jln Merdeka. Lr 9 Mawar Lk II.Kel Balai Agung, Kec Sekayu, Kab Musi Banyuasin.', 'Jln Merdeka. Lr 9 Mawar Lk II.Kel Balai Agung, Kec Sekayu, Kab Musi Banyuasin.', 'e39d6d54b08913c60c22600332d8192f.pdf', 'cd8359b49d10dd362712a6d7897417e5.pdf', 'efdf36383751b1e7ab82cb5154fe18bf.pdf', '8d5fb83508477f5f8a4695320d7412e3.pdf', 'Diterima', 'Tergugat', 'Ikut', '2021-09-23 01:49:25', '2019-07-15', NULL, '2021-07-12 08:26:11', '2021-07-12 08:26:11', ''),
(55, '1606040', '1606040022', '0369/AC/2021/PA.Sky', 'Neneng Sapitri Binti Sulaiman', 'Perempuan', '1606012309210002', '1606014506000006', 'Dusun I Lumpatan,Kecamatan Sekayu, Kabupaten Musi Banyuasin.', 'Dusun II Muara Teladan Rt 003 Rw 005,Kecamatan Sekayu, Kabupaten Musi Banyuasin.', 'ef26974ed8fe800cdff28310e7d1da54.pdf', '0b0f7235ea996949fb077cbb8f8416d4.pdf', '40203ac0756aae69c09aa429d022028b.pdf', 'dd62366a54102ca51bc64b28e42b168a.pdf', 'Diterima', 'Penggugat', 'Ikut', '2021-09-23 01:52:40', '2021-07-07', NULL, '2021-09-15 06:03:44', '2021-09-15 06:03:44', ''),
(56, '1606040', '1606040009', '0392/AC/2021/PA.Sky', 'Veti Vera Binti Awaludin', 'Perempuan', '1606030411130004', '1606016504960003', 'Dusun I Bumi Ayu, Kecamatan Lawang Wetan, Musi Banyuasin.', 'Lumpatan Kampung II, Kecamatan Sekayu, Musi Banyuasin.', '51911c96c46e8d43de748e4e5a3df42b.pdf', 'e53e6223d4f07a73a2ae05723a7e3863.pdf', 'e1661c322da3caf470b14c34884d1994.pdf', '1de2e6fa2f9058c982635b6e04ff6a8d.pdf', 'Diterima', 'Penggugat', 'Ikut', NULL, '2021-07-22', NULL, '2021-09-15 06:11:24', '2021-09-15 06:11:24', ''),
(57, '1606091', '1606091010', '0386/AC/2021/PA.Sky', 'Sujiati Binti Rasid', 'Perempuan', '1606081607120005', '1606084808840001', 'Cipta Praja Rt Rw 10,03, Kecamatan Keluang, Musi Banyuasin.', 'Cipta Praja Rt Rw 10,03, Kecamatan Keluang, Musi Banyuasin.', '52c2dc347c6c1224e29b93def022f2a9.pdf', '9adc9d2453bcabfd6bcea7f0e70fc9be.pdf', 'a172247ad24ff6422604d1775fd9d519.pdf', '6025b43e19888178dee2011d6381c5a5.pdf', 'Diterima', 'Penggugat', 'Ikut', NULL, '2021-07-12', NULL, '2021-09-15 06:29:51', '2021-09-15 06:29:51', ''),
(59, '1606100', '1606100056', '0662/AC/2021/PA.Sky', 'Yeni Junaidi Bin Wardik', 'Laki - Laki', '1606090712160003', '1606091908860006', 'Desa Sukajaya, Rt.021, Rw.04, Kecamatan Bayng Lencir, Kabupaten Musi Banyuasin', 'Desa Sukajaya, Rt.021, Rw.04, Kecamatan Bayng Lencir, Kabupaten Musi Banyuasin', '889bbccd592a5a14f3ede6069c3205ef.pdf', '7fbbce40930941c77403187af1d17098.pdf', 'a0a4f16cf7a8970e3ea0dbd34f96c37c.pdf', '678202eb8e53fc913db80bbc1dfde1d3.pdf', 'Diambil', 'Pemohon', 'Ikut', '2021-12-14 04:57:11', '2021-11-08', '2021-12-16 08:41:28', '2021-11-30 02:39:01', '2021-12-14 04:57:20', ''),
(60, '1606041', '1606041008', '0571/AC/2021/PA.Sky', 'Yuhardi Bin Ponimin', 'Laki - Laki', '160602110608193', '1606021205740003', 'Desa Teluk Kijing III Kecamatan Lais, Kabupaten Musi Banyuasin,', 'Desa Teluk Kijing III Kecamatan Lais, Kabupaten Musi Banyuasin,', '47956edb94adf31500682aa3dd6a427e.pdf', '8c1457548e024ef1753b52332488f3e2.pdf', '4ba490542348dc23746378fb5a500de0.pdf', 'abc84e9c789380dc265547d69fc77bcf.pdf', 'Diambil', 'Pemohon', 'Ikut', '2021-12-13 02:35:44', '2021-10-04', '2021-12-16 08:41:32', '2021-11-30 03:19:17', '2021-12-13 02:35:54', ''),
(61, '1606040', '1606040006', '0572/AC/2021/PA.Sky', 'Meri Marlina Binti Yusmada', 'Perempuan', '1606011312210002', '1606015806950003', 'Jln.Letnan Munandar, LK. I, Rt.004, Rw.002, Kecamtan Sekayu, Kabupaten Musi Banyuasin', 'Jln.Letnan Munandar, LK. I, Rt.004, Rw.002, Kecamtan Sekayu, Kabupaten Musi Banyuasin', '655b0ae853ec955bf3c3f4b6317bbd36.pdf', '6e11dfc0d391b72590f19ac10d45f4d3.pdf', '4e64998390f9d4d3be92a846764a06ce.pdf', '6e22b25a04dd8b1e32b631b7b104d7fc.pdf', 'Diambil', 'Penggugat', 'Ikut', '2021-12-13 02:21:30', '2021-10-04', '2021-12-16 08:41:35', '2021-11-30 04:21:51', '2021-12-13 02:21:44', ''),
(63, '1606040', '1606040008', '0641/AC/2021/PA.Sky', 'Titin Liana Anggraini', 'Perempuan', '1606011312210001', '1606016604890002', 'Dusun IV Desa Lumpatan II, Kecamatn, Sekayu. Kabupaten Musi Banyuasin', 'Lk.I, Rt.001, Rw.001. Kelurahan Kayuara, Kabupaten Musi Banyuasin', 'e72e5f68adc0e5a6d626b909b9e151d8.pdf', '1952c17df0e0d128f5b389925919861e.pdf', '5bd39f522c4c7dea50fcb26b8930a1c5.pdf', '3d7fe8ce71f5feb445a057694e12ce0b.pdf', 'Diambil', 'Penggugat', 'Ikut', '2021-12-13 01:59:48', '2021-11-08', '2021-12-16 08:41:38', '2021-11-30 05:45:09', '2021-12-13 02:00:15', ''),
(64, '1606023', '1606023004', '0392/AC/2021/PA.Sky', 'Veti Vera Binti Awaludin', 'Perempuan', '1606011612210003', '1606016504960003', 'Dusun I, Desa Bumi Ayu, Kecamatan Lawang Wetan, Kabupaten Musi Banyuasin', 'Dusun II, Desa Lumpata, Kecamatan Sekayu, Kabupaten Musi Banyuasin', '1f2603ed995a460e6a9d0f86cd61fd01.pdf', '7c4c467d696ba7cead04c40a0f162ce0.pdf', '604b224a0788d18191f1955d91c508f0.pdf', 'be09f285246585b2b9f43391f8b65970.pdf', 'Diambil', 'Penggugat', 'Ikut', '2021-12-16 03:06:18', '2021-07-09', '2021-12-16 08:41:22', '2021-12-15 05:25:06', '2021-12-16 03:06:28', ''),
(65, '1606040', '1606040008', '0742/AC/2021/PA.Sky', 'Umi Arbert Binti Ali Imron', 'Perempuan', '1606011612210002', '1606016404890004', 'Komplek Griya Randik Blok B 6 NO 7 Rt.018, Rw.007, Kelurahan Kayuaran, Kecamatan Sekayu, Kabupaten Musi Banyuasin', 'Jl. Kolonel Wahid Udin, Rt.002, Rw.001, Kelurahan Serasan Jaya, Kecamatan Sekayu, Kabupaten Musi Banyuasin', '99735ce433d42844e79f8c80d61704ae.pdf', 'a52b0b9279c5b6d507741b587bf8c4ca.pdf', '115696e4205c2e03233d47f2aadcf4f7.pdf', '53e63da6f90aa63e3f9f274dd0ef0dce.pdf', 'Diambil', 'Penggugat', 'Ikut', '2021-12-16 03:00:07', '2021-12-14', '2021-12-16 08:41:25', '2021-12-15 05:40:47', '2021-12-16 03:00:30', ''),
(66, '1606102', '1606102016', '1234567', 'ASAD', 'Laki - Laki', '21323123', '231231', 'gajah mati tenggaro', 'gajah mati tenggaro', 'cf7c10a92654d31328f9e9b89515c2e7.png', '335d4d4e41f283e957c63e1a0d075e67.png', '9f2c66eb83951f5471b036cb0bc3af8d.png', 'eea24c81776f941827a3f8962d300cae.png', '', 'Pemohon', 'Ikut', '2022-03-08 04:04:16', '2022-03-08', NULL, '2022-03-08 04:03:10', '2022-03-08 04:03:10', 'qwwwww');

-- --------------------------------------------------------

--
-- Struktur dari tabel `audit`
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
-- Dumping data untuk tabel `audit`
--

INSERT INTO `audit` (`audit_id`, `audit_tanggal`, `audit_by`, `audit_ip`, `audit_action`, `audit_keterangan`, `audit_link`) VALUES
(10, '2021-03-28 15:08:57', 'admin', '182.1.237.205', 'CREATE', 'M User dengan ID = 8', 'http://serasansekate.pa-sekayu.go.id/user'),
(11, '2021-03-28 15:09:23', 'admin', '182.1.237.205', 'CREATE', 'M User dengan ID = 9', 'http://serasansekate.pa-sekayu.go.id/user'),
(12, '2021-03-28 15:09:48', 'admin', '182.1.237.205', 'CREATE', 'M User dengan ID = 10', 'http://serasansekate.pa-sekayu.go.id/user'),
(13, '2021-03-28 15:21:23', 'admin', '182.1.237.205', 'DELETE', 'M Akta Cerai dengan ID = 17', 'http://serasansekate.pa-sekayu.go.id/report'),
(14, '2021-03-28 15:21:54', 'admin', '182.1.237.205', 'UPDATE', 'M Akta Cerai menjadi Selesai dengan ID = 16', 'http://serasansekate.pa-sekayu.go.id/report'),
(15, '2021-03-28 15:22:04', 'admin', '182.1.237.205', 'DELETE', 'M Akta Cerai dengan ID = 15', 'http://serasansekate.pa-sekayu.go.id/report'),
(16, '2021-03-29 01:33:49', 'dukcapil', '117.74.114.10', 'UPDATE', 'M Akta Cerai menjadi Dilihat dengan ID = 20', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(17, '2021-03-29 03:30:25', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 19', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(18, '2021-03-29 03:30:27', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 19', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(19, '2021-03-29 03:30:30', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 18', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(20, '2021-03-29 03:30:31', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 18', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(21, '2021-03-29 03:30:35', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 20', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(22, '2021-03-29 03:32:31', 'dukcapil', '117.74.114.10', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 20', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(23, '2021-03-29 03:32:52', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 20', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(24, '2021-03-29 03:38:34', 'dukcapil', '117.74.114.10', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 18', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(25, '2021-03-29 03:38:38', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 18', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(26, '2021-03-29 03:42:05', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 19', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(27, '2021-03-29 03:44:05', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 8', 'http://serasansekate.pa-sekayu.go.id/report'),
(28, '2021-03-29 03:44:13', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 6', 'http://serasansekate.pa-sekayu.go.id/report'),
(29, '2021-03-29 03:44:19', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 4', 'http://serasansekate.pa-sekayu.go.id/report'),
(30, '2021-03-29 03:44:26', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 5', 'http://serasansekate.pa-sekayu.go.id/report'),
(31, '2021-03-29 03:44:45', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 9', 'http://serasansekate.pa-sekayu.go.id/report'),
(32, '2021-03-29 03:44:50', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 2', 'http://serasansekate.pa-sekayu.go.id/report'),
(33, '2021-03-29 03:44:54', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 11', 'http://serasansekate.pa-sekayu.go.id/report'),
(34, '2021-03-29 03:44:58', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 20', 'http://serasansekate.pa-sekayu.go.id/report'),
(35, '2021-03-29 03:45:01', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 18', 'http://serasansekate.pa-sekayu.go.id/report'),
(36, '2021-03-29 03:45:05', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 19', 'http://serasansekate.pa-sekayu.go.id/report'),
(37, '2021-03-29 03:45:11', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 16', 'http://serasansekate.pa-sekayu.go.id/report'),
(38, '2021-03-29 03:45:14', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 13', 'http://serasansekate.pa-sekayu.go.id/report'),
(39, '2021-03-29 03:45:18', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 12', 'http://serasansekate.pa-sekayu.go.id/report'),
(40, '2021-03-29 03:45:22', 'admin', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 7', 'http://serasansekate.pa-sekayu.go.id/report'),
(41, '2021-03-30 01:42:13', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(42, '2021-03-30 01:46:37', 'dukcapil', '182.1.63.113', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(43, '2021-03-30 01:47:06', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(44, '2021-03-30 01:47:10', 'dukcapil', '182.1.63.113', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(45, '2021-03-30 01:47:47', 'dukcapil', '23.106.249.54', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(46, '2021-03-30 01:47:54', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(47, '2021-03-30 01:49:05', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(48, '2021-03-30 01:51:12', 'admin', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/report'),
(49, '2021-03-30 01:51:57', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dikembalikan dengan ID = 21', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(50, '2021-03-30 02:02:04', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 22', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(51, '2021-03-30 02:02:33', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 22', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(52, '2021-03-30 02:03:10', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 22', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(53, '2021-03-30 02:03:39', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = ', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(54, '2021-03-30 02:04:03', 'dukcapil', '23.106.249.54', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 22', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(55, '2021-03-30 07:10:12', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 23', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(56, '2021-03-30 08:21:59', 'dukcapil', '116.206.35.17', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 23', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(57, '2021-03-30 08:38:57', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 23', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(58, '2021-03-30 08:41:06', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 23', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(59, '2021-03-30 08:56:05', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 23', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(60, '2021-03-31 04:08:02', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 24', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(61, '2021-03-31 04:48:01', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 24', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(62, '2021-03-31 04:48:04', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 24', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(63, '2021-03-31 04:48:41', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 24', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(64, '2021-03-31 06:47:03', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 24', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(65, '2021-04-01 02:56:44', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 25', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(66, '2021-04-01 04:43:56', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 25', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(67, '2021-04-01 04:43:59', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 25', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(68, '2021-04-01 04:44:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 25', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(69, '2021-04-01 04:56:56', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 25', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(70, '2021-04-05 05:04:59', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 26', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(71, '2021-04-05 09:22:01', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 26', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(72, '2021-04-05 09:22:10', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 26', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(73, '2021-04-05 09:23:09', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 26', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(74, '2021-04-05 09:47:14', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 23', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(75, '2021-04-05 09:51:34', 'admin', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 23', 'http://serasansekate.pa-sekayu.go.id/report'),
(76, '2021-04-05 09:52:55', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dikembalikan dengan ID = 22', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(77, '2021-04-06 00:43:06', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 26', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(78, '2021-04-06 02:36:42', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 27', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(79, '2021-04-06 03:02:39', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 27', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(80, '2021-04-06 03:02:41', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 27', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(81, '2021-04-06 03:03:40', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 27', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(82, '2021-04-06 05:47:32', 'admin', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Belum Dilihat dengan ID = 27', 'http://serasansekate.pa-sekayu.go.id/report'),
(83, '2021-04-06 05:48:31', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 27', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(84, '2021-04-06 05:48:55', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 27', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(85, '2021-04-06 06:42:44', 'admin', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 24', 'http://serasansekate.pa-sekayu.go.id/report'),
(86, '2021-04-06 07:00:50', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 27', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(87, '2021-04-07 09:38:40', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 28', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(88, '2021-04-07 09:39:28', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 28', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(89, '2021-04-07 09:39:31', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 28', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(90, '2021-04-07 09:40:02', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 28', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(91, '2021-04-09 04:12:28', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 29', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(92, '2021-04-12 02:02:49', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 29', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(93, '2021-04-12 05:20:55', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 30', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(94, '2021-04-13 03:35:26', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 31', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(95, '2021-04-13 06:53:19', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 30', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(96, '2021-04-13 06:53:22', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 31', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(97, '2021-04-13 07:29:03', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 32', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(98, '2021-04-14 01:53:57', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 30', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(99, '2021-04-14 01:57:12', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 30', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(100, '2021-04-14 01:59:07', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 31', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(101, '2021-04-14 02:02:28', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 31', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(102, '2021-04-14 02:02:36', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 30', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(103, '2021-04-14 02:03:28', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 32', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(104, '2021-04-14 02:03:45', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 32', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(105, '2021-04-14 02:07:33', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 32', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(106, '2021-04-15 02:28:45', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 32', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(107, '2021-04-15 02:28:53', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 31', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(108, '2021-04-15 02:28:57', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 30', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(109, '2021-04-15 02:54:26', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 26', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(110, '2021-04-15 06:14:04', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 33', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(111, '2021-04-15 07:07:41', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 33', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(112, '2021-04-16 03:43:55', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 33', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(113, '2021-04-16 03:44:48', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 33', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(114, '2021-04-16 04:12:29', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 34', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(115, '2021-04-16 04:50:17', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 33', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(116, '2021-04-19 01:45:49', 'admin', '117.74.114.10', 'UPDATE', 'MERUBAH DATA  User dengan ID = 7', 'http://serasansekate.pa-sekayu.go.id/user'),
(117, '2021-04-19 02:30:11', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 34', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(118, '2021-04-19 02:30:21', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 34', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(119, '2021-04-19 02:33:58', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 34', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(120, '2021-04-19 03:40:45', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 35', 'http://serasansekate.pa-sekayu.go.id/akta-cerai'),
(121, '2021-04-19 04:47:18', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 34', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(122, '2021-04-19 04:50:01', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 35', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(123, '2021-04-19 07:04:42', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 32', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(124, '2021-04-20 02:53:20', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 35', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(125, '2021-04-20 05:30:43', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 35', 'http://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(126, '2021-04-22 01:50:00', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 27', 'http://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(127, '2021-04-22 04:02:00', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 30', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(128, '2021-04-26 01:11:55', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 34', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(129, '2021-04-27 00:20:53', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 35', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(130, '2021-04-28 05:22:51', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 36', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(131, '2021-04-28 06:31:00', 'pengadilan', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Akta Cerai dengan ID = 29', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(132, '2021-04-29 03:59:31', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 37', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(133, '2021-04-29 04:09:28', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 38', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(134, '2021-04-29 05:54:35', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 38', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(135, '2021-04-29 05:59:29', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 38', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(136, '2021-04-29 06:02:13', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 37', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(137, '2021-04-29 06:02:16', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 37', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(138, '2021-04-29 06:02:36', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 37', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(139, '2021-04-29 06:06:37', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 36', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(140, '2021-04-29 06:06:39', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 36', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(141, '2021-04-29 06:07:00', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 36', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(142, '2021-04-29 08:19:04', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 36', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(143, '2021-04-29 08:19:08', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 37', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(144, '2021-04-29 08:19:11', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 38', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(145, '2021-05-04 02:26:03', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 36', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(146, '2021-05-04 04:35:01', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 37', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(147, '2021-05-04 05:55:25', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 24', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(148, '2021-05-04 06:08:23', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 23', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(149, '2021-05-10 02:09:22', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 38', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(150, '2021-05-18 00:51:44', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 39', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(151, '2021-05-18 00:56:09', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 40', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(152, '2021-05-18 02:44:02', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 40', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(153, '2021-05-18 02:44:05', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 40', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(154, '2021-05-18 02:45:50', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 40', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(155, '2021-05-18 02:49:42', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 39', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(156, '2021-05-18 02:49:44', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 39', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(157, '2021-05-18 02:50:22', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 39', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(158, '2021-05-18 08:00:05', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 41', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(159, '2021-05-19 03:42:22', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 42', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(160, '2021-05-19 03:44:14', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 42', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(161, '2021-05-19 03:46:44', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 42', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(162, '2021-05-19 03:47:39', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 41', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(163, '2021-05-19 03:49:17', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 41', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(164, '2021-05-19 03:50:00', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 41', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(165, '2021-05-19 03:50:49', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 42', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(166, '2021-05-19 03:51:18', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 40', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(167, '2021-05-19 03:51:31', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 39', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(168, '2021-05-24 02:35:02', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 43', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(169, '2021-05-24 04:58:15', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 44', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(170, '2021-05-24 05:03:58', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 45', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(171, '2021-05-24 09:31:22', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = ', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(172, '2021-05-24 09:31:36', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 42', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(173, '2021-05-24 09:32:34', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 41', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(174, '2021-05-25 01:30:16', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 45', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(175, '2021-05-25 01:31:35', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 45', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(176, '2021-05-25 01:32:33', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 44', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(177, '2021-05-25 01:34:06', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 44', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(178, '2021-05-25 01:34:31', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 44', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(179, '2021-05-25 01:34:55', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 43', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(180, '2021-05-25 01:35:42', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 43', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(181, '2021-05-25 01:36:37', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 43', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(182, '2021-05-25 09:01:11', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 43', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(183, '2021-05-25 09:01:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = ', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(184, '2021-05-25 09:01:34', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 44', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(185, '2021-05-25 09:01:40', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 45', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(186, '2021-05-27 03:14:36', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 41', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(187, '2021-06-02 03:15:56', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 39', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(188, '2021-06-04 00:35:44', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 46', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(189, '2021-06-04 01:24:53', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 43', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(190, '2021-06-04 03:49:39', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 42', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(191, '2021-06-07 03:00:15', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 45', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(192, '2021-06-07 03:00:58', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 46', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(193, '2021-06-07 03:01:00', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 46', 'https://www.serasansekate.pa-sekayu.go.id/akta-cerai'),
(194, '2021-06-10 06:39:04', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(195, '2021-06-11 07:47:49', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 46', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(196, '2021-06-11 07:49:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(197, '2021-06-11 07:49:25', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(198, '2021-06-11 07:52:55', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(199, '2021-06-11 09:07:14', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(200, '2021-06-11 09:07:18', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 46', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(201, '2021-06-14 07:56:17', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 40', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(202, '2021-06-15 06:10:07', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 47', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(203, '2021-06-16 02:26:26', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 31', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(204, '2021-06-16 09:12:11', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(205, '2021-06-18 03:08:33', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(206, '2021-06-18 03:53:12', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(207, '2021-06-22 01:55:26', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(208, '2021-06-22 01:55:28', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(209, '2021-06-22 01:56:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(210, '2021-06-22 01:59:02', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(211, '2021-06-22 01:59:53', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(212, '2021-06-22 02:00:53', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(213, '2021-06-22 02:04:02', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(214, '2021-06-22 02:04:08', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(215, '2021-06-22 02:06:02', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(216, '2021-06-22 04:07:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(217, '2021-06-22 04:07:27', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(218, '2021-06-22 04:07:30', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(219, '2021-06-23 02:06:32', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 51', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(220, '2021-06-23 02:34:11', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 51', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(221, '2021-06-23 02:34:17', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 51', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(222, '2021-06-23 02:34:42', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 51', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(223, '2021-06-28 02:07:54', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 51', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(224, '2021-06-28 07:08:30', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(225, '2021-06-30 03:53:00', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 25', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(226, '2021-07-01 01:35:31', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(227, '2021-07-01 01:35:33', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(228, '2021-07-01 01:35:50', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(229, '2021-07-05 01:33:02', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 49', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(230, '2021-07-05 03:51:38', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(231, '2021-07-06 02:08:50', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(232, '2021-07-06 02:08:52', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(233, '2021-07-06 02:09:08', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(234, '2021-07-07 06:05:39', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(235, '2021-07-07 06:05:42', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Selesai dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(236, '2021-07-07 07:35:55', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 46', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(237, '2021-07-07 09:20:40', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 48', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(238, '2021-07-09 01:37:39', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 50', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(239, '2021-07-12 08:26:11', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 54', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(240, '2021-08-24 03:11:16', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = ', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(241, '2021-08-24 03:11:55', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 53', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(242, '2021-08-26 03:38:17', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 44', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(243, '2021-09-07 04:15:01', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 52', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(244, '2021-09-15 06:03:44', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 55', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(245, '2021-09-15 06:11:24', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 56', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(246, '2021-09-15 06:29:51', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Akta Cerai dengan ID = 57', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(247, '2021-09-23 01:49:23', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 54', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(248, '2021-09-23 01:49:25', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 54', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(249, '2021-09-23 01:49:38', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 54', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(250, '2021-09-23 01:52:39', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Dilihat dengan ID = 55', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(251, '2021-09-23 01:52:40', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diproses dengan ID = 55', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(252, '2021-09-23 01:53:07', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Akta Cerai dengan ID = 55', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(253, '2021-09-28 14:43:34', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 28', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(254, '2021-09-28 14:43:35', 'pengadilan', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Akta Cerai menjadi Diterima dengan ID = 28', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/selesai'),
(255, '2021-11-30 02:00:55', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 58', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(256, '2021-11-30 02:01:05', 'pengadilan', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Data Permohonan dengan ID = 58', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(257, '2021-11-30 02:39:02', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 59', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(258, '2021-11-30 03:19:17', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 60', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(259, '2021-11-30 04:21:51', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 61', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(260, '2021-11-30 04:48:14', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 62', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(261, '2021-11-30 05:45:09', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 63', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(262, '2021-12-13 01:57:37', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 63', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(263, '2021-12-13 01:59:48', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 63', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(264, '2021-12-13 02:00:15', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 63', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(265, '2021-12-13 02:03:38', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 61', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(266, '2021-12-13 02:21:30', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 61', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(267, '2021-12-13 02:21:44', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 61', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(268, '2021-12-13 02:31:54', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 60', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(269, '2021-12-13 02:35:44', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 60', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(270, '2021-12-13 02:35:54', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 60', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(271, '2021-12-13 04:32:07', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 59', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(272, '2021-12-13 06:59:16', 'pengadilan', '117.74.114.10', 'DELETE', 'MENGHAPUS DATA  Data Permohonan dengan ID = 62', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(273, '2021-12-14 04:57:11', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 59', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(274, '2021-12-14 04:57:20', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 59', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(275, '2021-12-15 05:25:06', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 64', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(276, '2021-12-15 05:40:47', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 65', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(277, '2021-12-16 02:56:10', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 65', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(278, '2021-12-16 03:00:07', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 65', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(279, '2021-12-16 03:00:30', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 65', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(280, '2021-12-16 03:03:13', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 64', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(281, '2021-12-16 03:06:18', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Diproses dengan ID = 64', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(282, '2021-12-16 03:06:28', 'dukcapil', '103.160.57.22', 'UPDATE', 'MERUBAH DATA  Data Permohonan dengan ID = 64', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(283, '2021-12-16 08:41:22', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 64', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(284, '2021-12-16 08:41:25', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 65', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(285, '2021-12-16 08:41:28', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 59', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(286, '2021-12-16 08:41:32', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 60', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(287, '2021-12-16 08:41:35', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 61', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses'),
(288, '2021-12-16 08:41:38', 'dukcapil', '103.160.57.22', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Selesai dengan ID = 63', 'https://serasansekate.pa-sekayu.go.id/akta-cerai/proses');
INSERT INTO `audit` (`audit_id`, `audit_tanggal`, `audit_by`, `audit_ip`, `audit_action`, `audit_keterangan`, `audit_link`) VALUES
(289, '2022-03-08 04:03:10', 'pengadilan', '117.74.114.10', 'CREATE', 'MENAMBAH DATA  Data Permohonan dengan ID = 66', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(290, '2022-03-08 04:03:21', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Dilihat dengan ID = 66', 'https://serasansekate.pa-sekayu.go.id/akta-cerai'),
(291, '2022-03-08 04:04:16', 'dukcapil', '117.74.114.10', 'UPDATE', 'MENGGANTI STATUS  Data Permohonan menjadi Ditolak dengan ID = 66', 'https://serasansekate.pa-sekayu.go.id/akta-cerai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `desa_id` varchar(10) NOT NULL,
  `desa_nama` varchar(40) DEFAULT NULL,
  `kecamatan_id` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desa`
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
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kecamatan_id` varchar(7) NOT NULL,
  `kabupaten_id` int(4) NOT NULL,
  `kecamatan_nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kecamatan`
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
-- Struktur dari tabel `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_judul` varchar(150) NOT NULL,
  `slide_isi` text NOT NULL,
  `slide_gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_judul`, `slide_isi`, `slide_gambar`) VALUES
(1, 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Musi Banyuasin', 'Membangun Zona Integritas', '4a06008838a0d36fd4bfe3215c387c52.jpg'),
(3, 'Pengadilan Agama Sekayu', '', 'c7a669f4e6fc48a7fecd24f95d669484.png'),
(4, 'AREA ZONA INTEGRITAS', '', '3ddd603f7a01f93617730f77324d3d5e.png'),
(5, 'Dinas Kependudukan dan Pencatatan Sipil Kabupaten Musi Banyuasin', '', '037e89bba291f5ef0d29311830b9c64d.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `user_username`, `user_nama`, `user_password`, `user_role`, `last_login`, `user_status`, `created_by`) VALUES
(7, 'admin', 'admin', 'ff4dcac8e34165ac5ac8a89a76b6e9f0', 'Admin', '2022-01-17 11:41:43', 'active', 'adityads'),
(8, 'pengadilan', 'pengadilan', 'b969f66a6b1cf9487aee47baa7c16cf0', 'Operator Pengadilan', '2022-03-08 11:00:14', 'active', 'admin'),
(9, 'dukcapil', 'dukcapil', '0ac49cffeb2bf4a6494833140d0e4821', 'Operator Dukcapil', '2022-03-08 10:58:16', 'active', 'admin'),
(10, 'admindukcapil', 'admindukcapil', 'a0f1634e04f8ca1cfefeaa0eae36af0c', 'Admin Dukcapil', '2021-03-30 15:09:20', 'active', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akta_cerai`
--
ALTER TABLE `akta_cerai`
  ADD PRIMARY KEY (`akta_cerai_id`),
  ADD KEY `desa_id` (`desa_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indeks untuk tabel `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kecamatan_id`);

--
-- Indeks untuk tabel `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akta_cerai`
--
ALTER TABLE `akta_cerai`
  MODIFY `akta_cerai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `audit`
--
ALTER TABLE `audit`
  MODIFY `audit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT untuk tabel `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `akta_cerai`
--
ALTER TABLE `akta_cerai`
  ADD CONSTRAINT `akta_cerai_ibfk_1` FOREIGN KEY (`desa_id`) REFERENCES `desa` (`desa_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `akta_cerai_ibfk_2` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`kecamatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_ibfk_1` FOREIGN KEY (`kecamatan_id`) REFERENCES `kecamatan` (`kecamatan_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
