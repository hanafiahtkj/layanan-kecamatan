-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2021 at 07:38 PM
-- Server version: 5.7.30-0ubuntu0.16.04.1
-- PHP Version: 5.6.40-29+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banjar89_app_elok_utara`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahli_waris`
--

CREATE TABLE `ahli_waris` (
  `id_ahli_waris` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `nama_almarhum` varchar(50) NOT NULL,
  `nama_ahli_waris` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahli_waris`
--

INSERT INTO `ahli_waris` (`id_ahli_waris`, `tgl_permohonan`, `kelurahan`, `nama_almarhum`, `nama_ahli_waris`, `alamat`, `tgl_meninggal`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(1, '2020-11-25', 'Pangeran', 'H.Rustami Hata', 'Hj. Hairunisa', 'Jl. Brigjend H.Hasan Basri Komp.Kejaksaan No.26 Rt.19 ', '2008-09-11', '', '2020-11-25', 4, 'Selesai'),
(2, '2020-12-11', 'Kuin Utara', 'YULIANSYAH', 'MURNI, HARIYANTO, RAHAYU HIKMAH', 'Jl. Kuin Utara Rt.04 Rw.01 ', '2018-05-14', '', '2020-12-11', 4, 'Selesai'),
(3, '2020-12-15', 'Alalak Utara', 'Muchlisi Dai, DRS.APT.MM,H', 'Hj. Nurbaya Muchlisi,  Riska Mulyanti MD,DRG ', 'Jl. Perdagangan Komp. HKSN Permai 207 Rt.27/Rw.02 Kelurahan Alalak Utara', '2019-10-25', '', '2020-12-15', 4, 'Selesai'),
(4, '2020-12-15', 'Alalak Utara', 'Jhudi Bonosari', 'Eka Rahma Ningsih, Muhammad Rayyan Alfarizi ', 'Jl. Meranti 3 Komplek Grand Meranti Jalur 1 No.11 Rt.36/Rw.04', '2020-10-18', '', '2020-12-15', 4, 'Selesai'),
(5, '2020-12-15', 'Sungai Miai', 'Effendi', 'A.Agus Salim ', 'Jl. Sungai Miai Dalam Rt.06/Rw.01 Kelurahan Sungai Miai ', '2020-01-02', '', '2020-12-15', 4, 'Selesai'),
(6, '2020-12-15', 'Sungai Jingah', 'Ali Badrun ', 'Hailin Noor', 'Jl. Sungai Jingah Rt.05/Rw.01 Kelurahan Sungai Jingah ', '1988-01-01', '', '2020-12-15', 4, 'Selesai'),
(7, '2020-12-15', 'Sungai Jingah', 'Saruzie ', 'Noorzanie', 'Jl.  Sungai Jingah Rt.05/Rw.01 Kelurahan Sungai Jingah ', '1993-05-15', '', '2020-12-15', 4, 'Selesai'),
(8, '2020-12-16', 'Sungai Andai', 'Fredy', 'Ernawati', 'Jl. Padat Karya Komp Herlina P Blok Batu Safir Raya No. 73 ', '2020-12-11', '', '2020-12-16', 4, 'Selesai'),
(9, '2020-12-16', 'Sungai Miai', 'Faridah', 'Noor Syar i ', 'Gg. Palem V No.203/65 Blok IV Rt.21/Rw.02 Kelurahan Sungai Miai', '2020-12-05', '', '2020-12-16', 4, 'Selesai'),
(10, '2020-12-16', 'Sungai Jingah', 'Chairil Anwar', 'Haris Suherman', 'Jl. Sultan Adam Komp H.Iyus rt.23/Rw.02', '2020-12-04', '', '2020-12-16', 4, 'Selesai'),
(11, '2020-12-17', 'Alalak Tengah', 'Paridah', 'Abdul Muis', 'Jl. Alalak Tengah Rt.23 ', '2020-12-01', '', '2020-12-17', 4, 'Selesai'),
(12, '2020-12-17', 'Alalak Selatan', 'Eddy Gunawan', 'Rezki Warniah', 'Jl. HKSN Komp. Herlina Rt.015 Rw.002 Alalak Selatan', '2020-06-30', '', '2020-12-17', 4, 'Selesai'),
(13, '2020-12-29', 'Sungai Jingah', 'Aserani', 'Ardaniah ', 'Jalan Museum Perjuangan Blok A RT.16 RW.002 No.4', '2020-12-09', '', '2020-12-29', 4, 'Selesai'),
(14, '2020-12-29', 'Alalak Utara', 'Ujud Yuliarno', 'Erni Hairani', 'Jalan Simp.Gusti VI No.61 RT.31 Rw.003', '2020-12-25', '', '2020-12-29', 4, 'Selesai'),
(15, '2021-01-04', 'Sungai Miai', 'ISMADI, S.AB, H', 'NORBAYAH, HJ ', 'JL. CEMARA I NO.23 RT.36 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '2020-11-02', 'Proses sesuai prosedur', '2021-01-04', 4, 'Selesai'),
(16, '2021-01-05', 'Sungai Miai', 'SITI AISYAH, HJ', 'MUCHAMAD CIPTONO GIARTO', 'JL. CEMARA RAYA GG. TANJUNG VII NO. 41 RT.31 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '2019-06-24', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(17, '2021-01-05', 'Surgi Mufti', 'HENDRI HARTONO', 'ENI ASIH', 'JL. JAHRI SALEH KOMP. PANDAN ARUM BLOK.2C NO.40 RT.15 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2020-12-14', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(18, '2021-01-06', 'Surgi Mufti', 'SUNARTO', 'WARTINI', 'JL. SULTAN ADAM KOMP. PONDOK MERPATI BLOK.B/10 RT.13 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2020-12-09', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(19, '2021-01-11', 'Pangeran', 'DRS. H. DJAJADIE ASNAWIE, MM', 'ETNA PRILINA DIATY, S.FAR.APT', 'JL. MUKARRAMAH PERUM CPS BLOK. F 44 RT.19 RW.00', '2017-07-23', 'Proses sesuai prosedur', '2021-01-11', 4, 'Selesai'),
(21, '2021-01-12', 'Sungai Jingah', 'ALI BADRUN', 'NOORZANIE ', 'JL.SUNGAI JINGAH  NO.31  RT.17 RW.01 KELURAHAN  SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '1988-01-22', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(22, '2021-01-12', 'Sungai Andai', 'SRI WARTINI ', 'SUPYANI', 'JL. SUNGAI ANDAI KOMP. MUTIARA 4 BLOK.4 RT.58 RW.04 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2018-05-08', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(23, '2021-01-12', 'Surgi Mufti', 'MUHAMMAD, H', 'PUSPA WANGI, HJ', 'JL. SULTAN ADAM KOMP. MAHLIGAI/54 RT.18 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2021-01-01', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(24, '2021-01-12', 'Pangeran', 'ALIANNOR ', 'SITI KARTINAH', 'JL. HASAN BASRI KOMPLEK. KAYU TANGI II JALUR 4 NO.41', '2020-12-16', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(25, '2021-01-12', 'Sungai Andai', 'MADE BUDIARSA, DRS', 'NI KETUT SUCI LESTRAI', 'JL. KOMP. PURNAMA PERMAI I BLOK.VI/91 RT.03 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2020-12-23', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(26, '2021-01-12', 'Sungai Andai', 'SUGIAN NOOR, SE', 'RENY NOOR YULIANA, SE', 'JL. PADAT KARYA KOMP. PERDANA MANDIRI BLOK.A NO.53 RT.14 RW.02 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2021-01-05', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(27, '2021-01-13', 'Sungai Andai', 'ROHILLAH', 'RUJANI', 'JL. SUNGAI ANDAI RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2020-12-29', 'Proses sesuai prosedur', '2021-01-13', 4, 'Selesai'),
(28, '2021-01-13', 'Surgi Mufti', 'SETIADI GUNAWAN', 'HENNY', 'JL. SULTAN ADAM KOMP. MANDIRI PERMAI NO.15 RT.34 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2017-05-30', 'Proses sesuai prosedur', '2021-01-13', 4, 'Selesai'),
(32, '2021-01-13', 'Surgi Mufti', 'INOR MASURAI', 'SATRIANSYAH', 'JL. SULTAN ADAM KOMP. PERKASA INDAH NO.54 RT.21 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2002-07-24', 'Proses sesuai prosedur', '2021-01-13', 4, 'Selesai'),
(33, '2021-01-13', 'Sungai Andai', 'HJ. ZAIDAH ISNAWATI', 'H. MALIKUL ASAD, ST', 'JL. H. HASAN BASRI NO.88 RT.02 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '2020-12-01', 'Proses sesuai prosedur', '2021-01-13', 4, 'Selesai'),
(34, '2021-01-14', 'Alalak Selatan', 'MOHAMMAD HARDIANSYAH', 'EMI MARIANI', 'JL. HKSN KOMP. AMD PERMAI BLOK. C 11 NO.295 RT.23 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', '2021-01-08', 'Proses sesuai prosedur', '2021-01-14', 4, 'Selesai'),
(35, '2021-01-14', 'Alalak Utara', 'MUHAMMAD SYAMSUNI', 'FITRIANA LESTARI', 'JL. SIMPANG GUSTI I NO.5 RT.34RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMAISN UTARA', '2021-01-07', 'Proses sesuai prosedur', '2021-01-14', 4, 'Selesai'),
(36, '2021-01-15', 'Alalak Utara', 'DRS. MURJANI, MM', 'ENTRIATY, S.PD', 'JL. HKSN KOMP. AMD PERMAI BLOK.A3 NO.106 RT.25 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2021-02-11', 'Proses sesuai prosedur', '2021-01-15', 4, 'Selesai'),
(37, '2021-01-18', 'Alalak Utara', 'ARIF, SW', 'HJ. NANA', 'JL. PERDAGANGAN KOMP.HKSN PERMAI BLOK.13 A NO.617 RT.30 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2021-01-11', 'Proses sesuai prosedur', '2021-01-18', 4, 'Selesai'),
(38, '2021-01-19', 'Alalak Utara', 'RAHMAT HIDAYAT', 'YANA', 'JL. BRIGJEN H. HASAN BASRI GG.ABUYA JALUR I RT.39 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2020-12-07', 'Proses sesuai prosedur', '2021-01-19', 4, 'Selesai'),
(39, '2021-01-19', 'Alalak Selatan', 'MOHAMMAD HARDIANSYAH', 'EMI MARIANI', 'JL. HKSN KOMP. AMD PERMAI BLOK.CII NO.295 RT.23 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASI UTARA', '2021-01-08', 'Proses sesuai prosedur', '2021-01-19', 4, 'Selesai'),
(40, '2021-01-22', 'Alalak Utara', 'TALHAH', 'ANANG', 'JL. ALALAK UTARA RT.08 RW.01 KELURAHAN ALALAK TARA KECAMATAN BANJARMASIN UTARA', '2021-01-18', 'Proses sesuai prosedur', '2021-01-22', 4, 'Selesai'),
(41, '2021-01-22', 'Sungai Andai', 'MADE BUDIARSA, DRS', 'NI KETUT SUCI LESTRAI', 'JL. PURNAMA PERMAI I BLOK.VI/91 RT.09 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJRMASIN UTARA', '2020-12-23', 'Proses sesuai prosedur', '2021-01-22', 4, 'Selesai'),
(42, '2021-01-22', 'Sungai Miai', 'H.KASUBI', 'YANCE PRIATNO BIDIAWAN', 'JL. CEMARA RAYA NO.4 RT.34 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '2017-03-25', 'Proses sesuai prosedur', '2021-01-22', 4, 'Selesai'),
(43, '2021-01-12', 'Kuin Utara', 'KHASBULLAH, S.Sos', 'ANDRIANI', 'JL. KUIN UTARA GG. RAHMAT NO.9 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', '2020-12-17', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(44, '2021-01-27', 'Surgi Mufti', 'H. IDEHAM JAHRI', 'HJ. RUSMALIANTINI', 'JL. SULTAN ADAM KOMP. HAJI ANDIR RT.18 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2021-01-08', 'Proses sesuai prosedur', '2021-01-27', 4, 'Selesai'),
(45, '2021-01-28', 'Sungai Miai', 'RUSMAINAH', 'SUGIANOR', 'JL. SUNGAI MIAI LUAR NO.20 RT.04 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '2020-12-07', 'Proses sesuai prosedur', '2021-01-28', 4, 'Selesai'),
(46, '2021-02-02', 'Surgi Mufti', 'ACHMAD BASUKI IBUT', 'IHSAN MUZAKKI, SE', 'JL.SULTAN ADAM KOMP. MANDIRI PERMAI NO.0 RT.34 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2020-11-30', 'Proses sesuai prosedur', '2021-02-03', 4, 'Selesai'),
(47, '2021-02-04', 'Surgi Mufti', 'DRS. AMIRUDDIN', 'NINA MUIDAH, S.PD, MPD', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI BLOK.B.II Rt.32 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', '2020-12-19', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(48, '2021-02-04', 'Surgi Mufti', 'ABDURRAHMAN SIDIK', 'BAMBANG SURYA WIJAYA', 'JL. SUNGAI ANDAI KOMP. PWI E NO.13 RT.31 RW.03 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMAISN UTARA', '1995-03-10', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(49, '2021-02-05', 'Pangeran', 'HJ. RUSMIAH', 'DRS. H. SUMIADI BURHAN', 'JL. PERDAGANGAN NO.11 RT.22 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', '2021-01-21', 'Proses sesuai prosedur', '2021-02-06', 4, 'Selesai'),
(50, '2021-02-09', 'Antasan Kecil Timur', 'RIZQY EKO PRASET', 'NUR AISYIFA PERBRIANTI', 'JL. BINA KARYA GG. PERDANA RT.63 RW.04 KELURAHAN PELAMBUAN KECAMATAN BANJARMASIN BARAT', '2021-01-24', 'Proses sesuai prosedur', '2021-02-09', 4, 'Selesai'),
(51, '2021-02-10', 'Surgi Mufti', 'ARIEF INAYATULLAH YANUAR, H', 'ERMAYANI, HJ', 'JL. MESJID JAMI GG. ADIL NO.86 RT.04 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', '2020-12-21', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(52, '2021-02-15', 'Sungai Jingah', 'SARI HANIFAH', 'AYUDA DAMAIRI', 'JL. SUNGAI JINGAH NO.44A RT.04 RW.01 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', '2021-01-13', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(53, '2021-02-15', 'Sungai Andai', 'JUNAIDI', 'MASIYAH', 'JL. SUNGAI ANDAI KOMP. ANDAI JAYA PERSADA BLOK.H5 NO. 60 RT.36 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2021-01-31', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(54, '2021-02-15', 'Sungai Jingah', 'DRS. RIZIKAN ', 'NOOR BAITY', 'JL. SUNGAI JINGAH NO.113 RT.01 RW.01 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', '2021-02-05', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(55, '2021-02-15', 'Antasan Kecil Timur', 'SITI MURNI', 'ADB. SANI BIN DURAHMAN', 'JL. ANTASAN KECIL TIMUR GG. DAMAI RT.20 RW.02', '2020-02-21', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(56, '2021-02-15', 'Sungai Andai', 'MARDIANA', 'ANDI ', 'JL. SUNGAI ANDAI NO.05 RT.04 RW.01 ', '2021-02-06', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(57, '2021-02-15', 'Alalak Utara', 'MUHAMMAD JASMANI TAMIN', 'ARBAYAH', 'JL. BRIGJEN JEND.HASAN BASRI RT.18 RW.03', '2000-05-20', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(58, '2021-02-16', 'Sungai Miai', 'H. BURHANUDDIN CITRA', 'LINDAWATI', 'JL. PERUMNAS TANJUNG XI 168 RT.20', '2021-02-04', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(59, '2021-02-16', 'Sungai Jingah', 'SYAHRANI ILHAM SYUKUR', 'BHENY SYAFRIYUDIN', 'JL. JAHRI SALEH KOMP. JEPRI ZAM - ZAM NO.13 RT.26 RW.01', '2021-02-05', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(60, '2021-02-16', 'Alalak Tengah', 'CIPTO ABADI, SE', 'SYARIFAH NOOR HASANAH, S.PI, Hj', 'JL. HKSN KOMP. AMD PERMAI BLOK.D9 NO.230 RT.18', '2021-01-11', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(61, '2021-02-16', 'Alalak Utara', 'MAHYUDDIN', 'HELDAWATI RIANTY', 'JL. ALALAK UTARA KOMP. HERLINA', '2007-10-10', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(62, '2021-02-17', 'Sungai Andai', 'NORHIKMA', 'LATIFAHANI', 'JL. TANJUNG BLOK MATAHARI II NO.12 RW.01', '2021-02-02', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(63, '2021-02-17', 'Sungai Jingah', 'YUDI NOOR IRAWAN', 'NAJMI ROYANA, S.Pd', 'JL. SULTAN ADAM KOMP. MAHLIGAI RT.12 NO.28', '2021-01-09', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(64, '2021-02-17', 'Alalak Utara', 'AKHMADI, SKM', 'MULYANI', 'JL. KAYUTANGI GG.CEMARA III NO.41 RT.28 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', '2021-01-24', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(65, '2021-02-18', 'Kuin Utara', 'NURDIANSYAH', 'WIDYASTUTI', 'JL. HKSN KOMP. AMD PERMAI BLOK. A 18 NO.342 RT24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2020-01-21', 'Proses sesuai prosedur', '2021-02-18', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `blanko`
--

CREATE TABLE `blanko` (
  `id_blanko` int(11) NOT NULL,
  `nama_blanko` text NOT NULL,
  `file` text NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `camat`
--

CREATE TABLE `camat` (
  `id_camat` int(11) NOT NULL,
  `nama_camat` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `periode_awal_jabatan` date NOT NULL,
  `periode_akhir_jabatan` date NOT NULL,
  `status` enum('Aktif','Non-Aktif') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camat`
--

INSERT INTO `camat` (`id_camat`, `nama_camat`, `nip`, `jabatan`, `periode_awal_jabatan`, `periode_akhir_jabatan`, `status`) VALUES
(4, 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', '2018-01-19', '2023-01-19', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `iumk`
--

CREATE TABLE `iumk` (
  `id_iumk` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `nomor_iumk` varchar(30) DEFAULT NULL,
  `peraturan` longtext NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nomor_ktp` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `bentuk_perusahaan` varchar(30) NOT NULL,
  `npwp` varchar(50) NOT NULL,
  `kegiatan_usaha` varchar(30) NOT NULL,
  `sarana_usaha` varchar(30) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `jumlah_modal_usaha` varchar(20) NOT NULL,
  `nomor_pendaftaran` varchar(10) NOT NULL,
  `nama_camat` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `foto_pemohon` varchar(100) NOT NULL,
  `kelengkapan` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iumk`
--

INSERT INTO `iumk` (`id_iumk`, `id_masyarakat`, `nomor_iumk`, `peraturan`, `nama_pemohon`, `nomor_ktp`, `alamat`, `tanggal`, `no_telp`, `nama_perusahaan`, `bentuk_perusahaan`, `npwp`, `kegiatan_usaha`, `sarana_usaha`, `alamat_usaha`, `jumlah_modal_usaha`, `nomor_pendaftaran`, `nama_camat`, `jabatan`, `nip`, `foto_pemohon`, `kelengkapan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(7, 52, 'IUMK / 685 / BU / 2020', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'ASNAH', '6371045907760005', 'Jl. Alalak Tengah Gang SMA 8 No.42 Rt.23 RW.002 Kelurahan Alalak Tengah ', '2020-12-15 12:55:19', '085391385800', 'Sembako Asnah', 'Perseorangan', '', 'Jualan Sembako', 'Milik Sendiri', 'Jl. Alalak Tengah Gang SMA 8 No.42 Rt.23 RW.002 Kelurahan Alalak Tengah ', '25000000', '685', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '94173.jpeg', '', '', '2020-12-16', 4, 'Selesai'),
(8, 57, 'IUMK / 0686 / BU / 2020', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'DINA APRINA', '6371055704800011', 'JL. SUNGAI ANDAI KOMP. PESONA PERSADA BLOK ENO.14 RT.07 KELURAHAN SUNGAI ANDAI ', '2020-12-18 09:23:09', '082252000059', 'RAISYA TAILOR', 'Perseorangan', '66.075.816.0-731.000', 'MENJAHIT', 'Milik Sendiri', 'JL.SUNGAI ANDAI KOMP.PESONA PERSADA BLOK E NO.14 RT.07 KELURAHAN SUNGAI ANDAI', '3000000', '0686', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '3492.jpeg', 'Lengkap', '', '2020-12-18', 4, 'Selesai'),
(9, 64, 'IUMK / 001 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'JAINAP, HJ', '6371046206670004', 'JL. ALALAK TENGAH GG. SMA 8 RT.23 / 02 KEL.ALALAK TENGAH ', '2021-01-05 10:37:57', '085249060992', 'TOKO BAJU JAINAP', 'Perseorangan', '', 'JUALAN PAKAIAN JADI/KAIN', 'Milik Sendiri', 'JL. ALALAK TENGAH RT.23 RW.002 KELURAHAN ALALAK TENGAH', '30000000', '001', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '11599.jpeg', 'Lengkap', 'Selesai', '2021-01-26', 4, 'Selesai'),
(10, 71, 'IUMK / 002 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'SUTARMI', '6371045006700007', 'JL. HKSN KOMP. HERLINA PERKASA BLOK.A NO.35 RT.012 RW.002 KELURAHAN ALALAK SELATAN', '2021-01-20 11:25:53', '082252100652', 'MAMA HUSNUL', 'Perseorangan', '16.195.670.1-731.000', 'PEMBUATAN JAMU', 'Milik Sendiri', 'JL. HKSN KOMP. HERLINA PERKASA BLOK.A NO.35 RT.012 RW.002 KELURAHAN ALALAK SELATAN', '500000', '002', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '57722.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-01-20', 4, 'Selesai'),
(11, 73, 'IUMK / 003 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'ADE YULIA ANGGERAINI', '6301035107950005', 'JL. BALIREJO RT.17 A RW.006 KELURAHAN ANGSAU PELAIHARI', '2021-01-25 12:13:50', '08979415161', 'BUTIK INDRI ZEE', 'Perseorangan', '81.431.115.5-732.000', 'JUALAN PAKAIAN JADI', 'Sewa', 'JL. CEMARA RAYA RT.41 NO.27 D KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '250000000', '003', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '91429.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-01-25', 4, 'Selesai'),
(13, 106, 'IUMK / 004 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'MUHAMMAD FAUZIANNOOR', '6371040312920004', 'JL. CENGKEH II KOMP. HERLINA PERKASA NO.48 RT.69 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2021-02-09 14:27:37', '085654789545', 'AULIA SASIRANGAN', 'Perseorangan', '0', 'PRODUKSI KAIN SASIRANGAN', 'Milik Sendiri', 'JL. CENGKEH II KOMP. HERLINA PERKASA NO.48 RT.69 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '275000000', '004', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '59289.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-01-09', 4, 'Selesai'),
(14, 121, 'IUMK / 005 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'FITRIA', '6371045003940005', 'JL. SUNGAI ANDAI RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '2021-02-15 13:45:28', '088242659935', 'PEMASAR IKAN FITRIA', 'Perseorangan', '0', 'PEMASARAN IKAN SEGAR', 'Milik Sendiri', 'JL. SUNGAI ANDAI RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '8500000', '005', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '34450.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(15, 122, 'IUMK / 006 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'SIMUH', '6371041003890005', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2021-02-15 13:49:37', '085389284866', 'PEMASAR IKAN SIMUH', 'Perseorangan', '0', 'PEMASARAN IKAN SEGAR', 'Milik Sendiri', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '8000000', '006', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '41788.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(16, 123, 'IUMK / 007 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'WAHDAH', '6371044703920006', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2021-02-15 13:54:21', '0813143324252', 'PEMASAR IKAN WAHDAH', 'Perseorangan', '0', 'PEMASARAN IKAN SEGAR', 'Milik Sendiri', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '7500000', '007', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '76660.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(17, 124, 'IUMK / 008 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'AMINAH', '6371045307860009', 'JL. ALALAK UTARA RT. 03 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '2021-02-15 13:59:05', '085250353066', 'PEMASAR IKAN AMINAH', 'Perseorangan', '0', 'PEMASARAN IKAN SEGAR', 'Milik Sendiri', 'JL. ALALAK UTARA RT. 03 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '7500000', '008', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '30966.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(19, 125, 'IUMK / 009 / BU / 2021', '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>', 'ADREA FEBRY HASDI', '6372050502800005', 'JL. MESJID NO. 29 RT.02 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '2021-02-15 13:02:41', '085242711231', 'DEPOT NENG YASMIN', 'Perseorangan', '0', 'RUMAH MAKAN', 'Milik Sendiri', 'JL. MESJID NO. 29 RT.02 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '20000000', '009', 'APILUDDIN NOOR, S.Sos, M.AP', 'Pembina TK 1', '19661001 198902 1 001', '84045.jpeg', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan_usaha`
--

CREATE TABLE `kegiatan_usaha` (
  `id_kegiatan` int(11) NOT NULL,
  `kegiatan_usaha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan_usaha`
--

INSERT INTO `kegiatan_usaha` (`id_kegiatan`, `kegiatan_usaha`) VALUES
(1, 'Perdagangan Barang dan Jasa'),
(2, 'Perdagangan Barang'),
(3, 'Jasa'),
(6, 'Pancarekenan');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `kelurahan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `kelurahan`) VALUES
(1, 'Alalak Selatan'),
(2, 'Alalak Utara'),
(3, 'Alalak Tengah'),
(6, 'Sungai Miai'),
(10, 'Antasan Kecil Timur'),
(19, 'Kuin Utara'),
(20, 'Surgi Mufti'),
(22, 'Pangeran'),
(23, 'Sungai Andai'),
(24, 'Sungai Jingah');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_iumk`
--

CREATE TABLE `lampiran_iumk` (
  `id_lampiran` int(11) NOT NULL,
  `nama_lampiran` text NOT NULL,
  `ketentuan` varchar(15) NOT NULL,
  `deskripsi` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_iumk`
--

INSERT INTO `lampiran_iumk` (`id_lampiran`, `nama_lampiran`, `ketentuan`, `deskripsi`) VALUES
(1, 'Fotocopy KTP', 'Wajib', NULL),
(2, 'Fotocopy Lunas PBB Berjalan', 'Wajib', NULL),
(3, 'Surat Rekomendasi dari Kelurahan', 'Wajib', NULL),
(6, 'Surat Rekomendasi Dari RT', 'Wajib', '');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_iumk_file`
--

CREATE TABLE `lampiran_iumk_file` (
  `id_file` int(11) NOT NULL,
  `id_lampiran` int(11) NOT NULL,
  `id_iumk` varchar(50) NOT NULL,
  `file` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_iumk_file`
--

INSERT INTO `lampiran_iumk_file` (`id_file`, `id_lampiran`, `id_iumk`, `file`) VALUES
(20, 1, '7', '92638.jpeg'),
(21, 2, '7', '62478.jpeg'),
(22, 3, '7', '6091.jpeg'),
(23, 6, '7', 'Belum Ada Lampiran'),
(24, 1, '8', '93138.jpeg'),
(25, 2, '8', '63426.jpeg'),
(26, 3, '8', '39406.jpeg'),
(27, 6, '8', 'Belum Ada Lampiran'),
(28, 1, '9', '67350.jpeg'),
(29, 2, '9', '90232.jpeg'),
(30, 3, '9', '42921.jpeg'),
(31, 6, '9', '85143.jpeg'),
(32, 1, '10', '78785.jpeg'),
(33, 2, '10', '12274.jpeg'),
(34, 3, '10', '56423.jpeg'),
(35, 6, '10', '38773.jpeg'),
(36, 1, '11', '66439.jpeg'),
(37, 2, '11', '41631.jpeg'),
(38, 3, '11', '52754.jpeg'),
(39, 6, '11', '99420.jpeg'),
(44, 1, '13', '17860.jpeg'),
(45, 2, '13', '6541.jpeg'),
(46, 3, '13', '8996.jpeg'),
(47, 6, '13', '37414.jpeg'),
(48, 1, '14', '78277.jpeg'),
(49, 2, '14', '54430.jpeg'),
(50, 3, '14', '21061.jpeg'),
(51, 6, '14', '4898.jpeg'),
(52, 1, '15', '21502.jpeg'),
(53, 2, '15', '78750.jpeg'),
(54, 3, '15', '29085.jpeg'),
(55, 6, '15', '35223.jpeg'),
(56, 1, '16', '77331.jpeg'),
(57, 2, '16', '46343.jpeg'),
(58, 3, '16', '56868.jpeg'),
(59, 6, '16', '93103.jpeg'),
(60, 1, '17', '6201.jpeg'),
(61, 2, '17', '72631.jpeg'),
(62, 3, '17', '64608.jpeg'),
(63, 6, '17', '71522.jpeg'),
(68, 1, '19', '32210.jpeg'),
(69, 2, '19', '23184.jpeg'),
(70, 3, '19', '75514.jpeg'),
(71, 6, '19', '28939.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sktu`
--

CREATE TABLE `lampiran_sktu` (
  `id_lampiran` int(11) NOT NULL,
  `nama_lampiran` text NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `ketentuan` varchar(15) NOT NULL,
  `deskripsi` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sktu`
--

INSERT INTO `lampiran_sktu` (`id_lampiran`, `nama_lampiran`, `keterangan`, `ketentuan`, `deskripsi`) VALUES
(1, 'Fotocopy KTP', 'Baru dan Perpanjangan', 'Wajib', NULL),
(2, 'Fotocopy Akta Pendirian Yayasan/Koperasi/Lembaga', 'Baru', 'Wajib', ''),
(3, 'Fotocopy Rekening PDAM', 'Baru', 'Wajib', ''),
(4, 'Fotocopy SKTU Lama', 'Perpanjangan', 'Wajib', NULL),
(5, 'Fotocopy Lunas PBB Berjalan', 'Baru dan Perpanjangan', 'Wajib', ''),
(6, 'Iuran Retribusi Sampah', 'Baru dan Perpanjangan', 'Wajib', ''),
(7, 'Surat Pengantar Pembuatan SKTU dari Kelurahan', 'Baru', 'Wajib', ''),
(8, 'Perpanjangan SKTU yang terlambat 6 (enam) bulan atau lebih harus melampirkan Surat Keterangan dari Kelurahan', 'Perpanjangan', 'Wajib', ''),
(9, 'Surat Pernyataan Tidak Keberatan Tetangga Rapat Sisi Batas ', 'Baru', 'Tidak Wajib', '');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sktu_file`
--

CREATE TABLE `lampiran_sktu_file` (
  `id_file` int(11) NOT NULL,
  `id_lampiran` int(11) NOT NULL,
  `id_sktu` varchar(100) NOT NULL,
  `file` longtext,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sktu_file`
--

INSERT INTO `lampiran_sktu_file` (`id_file`, `id_lampiran`, `id_sktu`, `file`, `keterangan`) VALUES
(177, 1, '32', '69922.pdf', 'Baru'),
(178, 2, '32', '90401.pdf', 'Baru'),
(179, 3, '32', '51483.pdf', 'Baru'),
(180, 6, '32', '83676.pdf', 'Baru'),
(206, 1, '39', '34880.jpg', 'Baru'),
(207, 2, '39', '97557.jpg', 'Baru'),
(208, 3, '39', '23682.jpg', 'Baru'),
(209, 6, '39', '1646.jpg', 'Baru'),
(210, 7, '39', '18583.jpg', 'Baru'),
(216, 1, '41', 'Belum Ada Lampiran', 'Baru'),
(217, 2, '41', 'Belum Ada Lampiran', 'Baru'),
(218, 3, '41', 'Belum Ada Lampiran', 'Baru'),
(219, 6, '41', 'Belum Ada Lampiran', 'Baru'),
(220, 7, '41', 'Belum Ada Lampiran', 'Baru'),
(226, 1, '43', '12171.jpg', 'Baru'),
(227, 2, '43', '88508.jpg', 'Baru'),
(228, 3, '43', '15991.jpg', 'Baru'),
(229, 6, '43', '50371.jpg', 'Baru'),
(230, 7, '43', '97453.jpg', 'Baru'),
(236, 1, '45', '86258.jpg', 'Baru'),
(237, 2, '45', '38250.jpg', 'Baru'),
(238, 3, '45', '78763.jpg', 'Baru'),
(239, 6, '45', '60430.jpg', 'Baru'),
(240, 7, '45', '32122.jpg', 'Baru'),
(241, 1, '46', '23807.jpeg', 'Baru'),
(242, 2, '46', '81642.jpeg', 'Baru'),
(243, 3, '46', '25508.jpeg', 'Baru'),
(244, 6, '46', '34409.jpeg', 'Baru'),
(245, 7, '46', '28879.jpeg', 'Baru'),
(246, 1, '47', '2816.jpeg', 'Baru'),
(247, 2, '47', '9370.jpeg', 'Baru'),
(248, 3, '47', 'Belum Ada Lampiran', 'Baru'),
(249, 6, '47', '96951.jpeg', 'Baru'),
(250, 7, '47', '92568.jpeg', 'Baru'),
(251, 9, '47', '21143.jpeg', 'Baru'),
(252, 1, '48', '13491.jpeg', 'Baru'),
(253, 2, '48', 'Belum Ada Lampiran', 'Baru'),
(254, 3, '48', 'Belum Ada Lampiran', 'Baru'),
(255, 6, '48', '39805.jpeg', 'Baru'),
(256, 7, '48', '28004.jpeg', 'Baru'),
(257, 9, '48', '54075.jpeg', 'Baru'),
(258, 1, '49', '82201.jpeg', 'Baru'),
(259, 2, '49', '51696.jpeg', 'Baru'),
(260, 3, '49', '8404.jpeg', 'Baru'),
(261, 6, '49', '34669.jpeg', 'Baru'),
(262, 7, '49', '8798.jpeg', 'Baru'),
(263, 9, '49', '65453.jpeg', 'Baru'),
(264, 1, '50', '99806.jpeg', 'Baru'),
(265, 2, '50', '5254.jpeg', 'Baru'),
(266, 3, '50', '49705.jpeg', 'Baru'),
(267, 6, '50', '52241.jpeg', 'Baru'),
(268, 7, '50', '98779.jpeg', 'Baru'),
(269, 9, '50', '25219.jpeg', 'Baru'),
(270, 1, '51', '98553.jpeg', 'Baru'),
(271, 2, '51', '59044.jpeg', 'Baru'),
(272, 3, '51', '88015.jpeg', 'Baru'),
(273, 6, '51', '85311.jpeg', 'Baru'),
(274, 7, '51', '17166.jpeg', 'Baru'),
(275, 9, '51', '91463.jpeg', 'Baru'),
(338, 1, '62', '36051.jpeg', 'Baru'),
(339, 2, '62', '77270.jpeg', 'Baru'),
(340, 3, '62', '60690.jpeg', 'Baru'),
(341, 5, '62', '21049.jpeg', 'Baru'),
(342, 6, '62', '46768.jpeg', 'Baru'),
(343, 7, '62', '55188.jpeg', 'Baru'),
(344, 9, '62', '20961.jpeg', 'Baru'),
(352, 1, '64', '97939.jpeg', 'Baru'),
(353, 2, '64', '28939.jpeg', 'Baru'),
(354, 3, '64', '54899.jpeg', 'Baru'),
(355, 5, '64', '14625.jpeg', 'Baru'),
(356, 6, '64', '67257.jpeg', 'Baru'),
(357, 7, '64', '73459.jpeg', 'Baru'),
(358, 9, '64', '2016.jpeg', 'Baru'),
(359, 1, '65', '3357.jpeg', 'Baru'),
(360, 2, '65', '60360.jpeg', 'Baru'),
(361, 3, '65', '66836.jpeg', 'Baru'),
(362, 5, '65', '37738.jpeg', 'Baru'),
(363, 6, '65', '90736.jpeg', 'Baru'),
(364, 7, '65', '42679.jpeg', 'Baru'),
(365, 9, '65', '93186.jpeg', 'Baru'),
(366, 1, '66', '53143.jpeg', 'Baru'),
(367, 2, '66', '32499.jpeg', 'Baru'),
(368, 3, '66', '29780.jpeg', 'Baru'),
(369, 5, '66', '65735.jpeg', 'Baru'),
(370, 6, '66', '19262.jpeg', 'Baru'),
(371, 7, '66', '90490.jpeg', 'Baru'),
(372, 9, '66', '40259.jpeg', 'Baru'),
(373, 1, '67', '20314.jpeg', 'Baru'),
(374, 2, '67', '60467.jpeg', 'Baru'),
(375, 3, '67', '52596.jpeg', 'Baru'),
(376, 5, '67', '9.jpeg', 'Baru'),
(377, 6, '67', '76231.jpeg', 'Baru'),
(378, 7, '67', '17891.jpeg', 'Baru'),
(379, 9, '67', '44331.jpeg', 'Baru'),
(380, 1, '68', '43903.jpeg', 'Baru'),
(381, 2, '68', '80940.jpeg', 'Baru'),
(382, 3, '68', '9808.jpeg', 'Baru'),
(383, 5, '68', '6374.jpeg', 'Baru'),
(384, 6, '68', '19397.jpeg', 'Baru'),
(385, 7, '68', '47059.jpeg', 'Baru'),
(386, 9, '68', '69777.jpeg', 'Baru'),
(387, 1, '69', '27300.jpeg', 'Baru'),
(388, 2, '69', '14435.jpeg', 'Baru'),
(389, 3, '69', '49918.jpeg', 'Baru'),
(390, 5, '69', '77757.jpeg', 'Baru'),
(391, 6, '69', '11502.jpeg', 'Baru'),
(392, 7, '69', '29720.jpeg', 'Baru'),
(393, 9, '69', '16870.jpeg', 'Baru'),
(394, 1, '70', '91165.jpeg', 'Baru'),
(395, 2, '70', '49555.jpeg', 'Baru'),
(396, 3, '70', '94658.jpeg', 'Baru'),
(397, 5, '70', '62655.jpeg', 'Baru'),
(398, 6, '70', '20773.jpeg', 'Baru'),
(399, 7, '70', '96350.jpeg', 'Baru'),
(400, 9, '70', '89055.jpeg', 'Baru'),
(401, 1, '71', '68277.jpeg', 'Baru'),
(402, 2, '71', '9900.jpeg', 'Baru'),
(403, 3, '71', '19760.jpeg', 'Baru'),
(404, 5, '71', '94919.jpeg', 'Baru'),
(405, 6, '71', '71615.jpeg', 'Baru'),
(406, 7, '71', '99859.jpeg', 'Baru'),
(407, 9, '71', '13665.jpeg', 'Baru'),
(408, 1, '72', '4368.jpeg', 'Baru'),
(409, 2, '72', '63896.jpeg', 'Baru'),
(410, 3, '72', '86257.jpeg', 'Baru'),
(411, 5, '72', '9786.jpeg', 'Baru'),
(412, 6, '72', '76868.jpeg', 'Baru'),
(413, 7, '72', '92618.jpeg', 'Baru'),
(414, 9, '72', '68608.jpeg', 'Baru'),
(415, 1, '73', '28188.jpeg', 'Baru'),
(416, 2, '73', '15380.jpeg', 'Baru'),
(417, 3, '73', '81676.jpeg', 'Baru'),
(418, 5, '73', '39945.jpeg', 'Baru'),
(419, 6, '73', '21265.jpeg', 'Baru'),
(420, 7, '73', '24523.jpeg', 'Baru'),
(421, 9, '73', '69659.jpeg', 'Baru'),
(422, 1, '74', '8182.jpeg', 'Baru'),
(423, 2, '74', '25859.jpeg', 'Baru'),
(424, 3, '74', '11299.jpeg', 'Baru'),
(425, 5, '74', '22571.jpeg', 'Baru'),
(426, 6, '74', '73998.jpeg', 'Baru'),
(427, 7, '74', '86556.jpeg', 'Baru'),
(428, 9, '74', '10850.jpeg', 'Baru'),
(429, 1, '75', '26483.jpeg', 'Baru'),
(430, 2, '75', '67843.jpeg', 'Baru'),
(431, 3, '75', '41789.jpeg', 'Baru'),
(432, 5, '75', '28090.jpeg', 'Baru'),
(433, 6, '75', '73851.jpeg', 'Baru'),
(434, 7, '75', '53769.jpeg', 'Baru'),
(435, 9, '75', '86463.jpeg', 'Baru'),
(436, 1, '76', '54632.jpeg', 'Baru'),
(437, 2, '76', '15633.jpeg', 'Baru'),
(438, 3, '76', '31676.jpeg', 'Baru'),
(439, 5, '76', '53589.jpeg', 'Baru'),
(440, 6, '76', '42331.jpeg', 'Baru'),
(441, 7, '76', '40440.jpeg', 'Baru'),
(442, 9, '76', '41259.jpeg', 'Baru'),
(450, 1, '78', '85850.jpeg', 'Baru'),
(451, 2, '78', '93467.jpeg', 'Baru'),
(452, 3, '78', '55416.jpeg', 'Baru'),
(453, 5, '78', '35533.jpeg', 'Baru'),
(454, 6, '78', '16465.jpeg', 'Baru'),
(455, 7, '78', '85748.jpeg', 'Baru'),
(456, 9, '78', '62750.jpeg', 'Baru'),
(457, 1, '79', '49560.jpeg', 'Baru'),
(458, 2, '79', '2908.jpeg', 'Baru'),
(459, 3, '79', '21695.jpeg', 'Baru'),
(460, 5, '79', '24422.jpeg', 'Baru'),
(461, 6, '79', '73937.jpeg', 'Baru'),
(462, 7, '79', '75292.jpeg', 'Baru'),
(463, 9, '79', '6853.jpeg', 'Baru'),
(464, 1, '80', '78705.jpeg', 'Baru'),
(465, 2, '80', '42424.jpeg', 'Baru'),
(466, 3, '80', '56524.jpeg', 'Baru'),
(467, 5, '80', '59936.jpeg', 'Baru'),
(468, 6, '80', '92857.jpeg', 'Baru'),
(469, 7, '80', '3633.jpeg', 'Baru'),
(470, 9, '80', '96404.jpeg', 'Baru'),
(471, 1, '81', '57209.jpeg', 'Baru'),
(472, 2, '81', '52136.jpeg', 'Baru'),
(473, 3, '81', '49125.jpeg', 'Baru'),
(474, 5, '81', '48241.jpeg', 'Baru'),
(475, 6, '81', '63515.jpeg', 'Baru'),
(476, 7, '81', '7515.jpeg', 'Baru'),
(477, 9, '81', '68572.jpeg', 'Baru'),
(499, 1, '85', '54153.jpeg', 'Baru'),
(500, 2, '85', '4034.jpeg', 'Baru'),
(501, 3, '85', '93878.jpeg', 'Baru'),
(502, 5, '85', '27990.jpeg', 'Baru'),
(503, 6, '85', '53789.jpeg', 'Baru'),
(504, 7, '85', '32036.jpeg', 'Baru'),
(505, 9, '85', '99233.jpeg', 'Baru'),
(506, 1, '86', '49456.jpeg', 'Baru'),
(507, 2, '86', '61448.jpeg', 'Baru'),
(508, 3, '86', '22375.jpeg', 'Baru'),
(509, 5, '86', '53154.jpeg', 'Baru'),
(510, 6, '86', '92688.jpeg', 'Baru'),
(511, 7, '86', '75734.jpeg', 'Baru'),
(512, 9, '86', '34321.jpeg', 'Baru'),
(513, 1, '87', '74108.jpeg', 'Baru'),
(514, 2, '87', '21173.jpeg', 'Baru'),
(515, 3, '87', '17089.jpeg', 'Baru'),
(516, 5, '87', '72668.jpeg', 'Baru'),
(517, 6, '87', '88032.jpeg', 'Baru'),
(518, 7, '87', '48642.jpeg', 'Baru'),
(519, 9, '87', '28960.jpeg', 'Baru'),
(520, 1, '88', '5152.jpeg', 'Baru'),
(521, 2, '88', '1997.jpeg', 'Baru'),
(522, 3, '88', '1137.jpeg', 'Baru'),
(523, 5, '88', '52157.jpeg', 'Baru'),
(524, 6, '88', '79218.jpeg', 'Baru'),
(525, 7, '88', '59984.jpeg', 'Baru'),
(526, 9, '88', '41745.jpeg', 'Baru'),
(527, 1, '89', '18328.jpeg', 'Baru'),
(528, 2, '89', '30588.jpeg', 'Baru'),
(529, 3, '89', '25381.jpeg', 'Baru'),
(530, 5, '89', '49238.jpeg', 'Baru'),
(531, 6, '89', '15777.jpeg', 'Baru'),
(532, 7, '89', '29122.jpeg', 'Baru'),
(533, 9, '89', '46213.jpeg', 'Baru'),
(534, 1, '90', '53078.jpeg', 'Baru'),
(535, 2, '90', '43370.jpeg', 'Baru'),
(536, 3, '90', '93977.jpeg', 'Baru'),
(537, 5, '90', '75510.jpeg', 'Baru'),
(538, 6, '90', '40304.jpeg', 'Baru'),
(539, 7, '90', '67810.jpeg', 'Baru'),
(540, 9, '90', '83702.jpeg', 'Baru'),
(541, 1, '91', '51548.jpeg', 'Baru'),
(542, 2, '91', '64674.jpeg', 'Baru'),
(543, 3, '91', '24734.jpeg', 'Baru'),
(544, 5, '91', '68007.jpeg', 'Baru'),
(545, 6, '91', '89702.jpeg', 'Baru'),
(546, 7, '91', '72048.jpeg', 'Baru'),
(547, 9, '91', '83790.jpeg', 'Baru'),
(548, 1, '92', '78344.jpeg', 'Baru'),
(549, 2, '92', '59237.jpeg', 'Baru'),
(550, 3, '92', '7651.jpeg', 'Baru'),
(551, 5, '92', '43696.jpeg', 'Baru'),
(552, 6, '92', '12700.jpeg', 'Baru'),
(553, 7, '92', '23764.jpeg', 'Baru'),
(554, 9, '92', '52909.jpeg', 'Baru'),
(555, 1, '93', '96793.jpeg', 'Baru'),
(556, 2, '93', '64892.jpeg', 'Baru'),
(557, 3, '93', '20036.jpeg', 'Baru'),
(558, 5, '93', '25225.jpeg', 'Baru'),
(559, 6, '93', '1356.jpeg', 'Baru'),
(560, 7, '93', '28751.jpeg', 'Baru'),
(561, 9, '93', '10455.jpeg', 'Baru'),
(562, 1, '94', '46419.jpeg', 'Baru'),
(563, 2, '94', '58740.jpeg', 'Baru'),
(564, 3, '94', '47587.jpeg', 'Baru'),
(565, 5, '94', '44730.jpeg', 'Baru'),
(566, 6, '94', '63321.jpeg', 'Baru'),
(567, 7, '94', '15595.jpeg', 'Baru'),
(568, 9, '94', '47371.jpeg', 'Baru'),
(569, 1, '95', '32396.jpeg', 'Baru'),
(570, 2, '95', '35613.jpeg', 'Baru'),
(571, 3, '95', '23749.jpeg', 'Baru'),
(572, 5, '95', '7855.jpeg', 'Baru'),
(573, 6, '95', '86354.jpeg', 'Baru'),
(574, 7, '95', '83691.jpeg', 'Baru'),
(575, 9, '95', '5351.jpeg', 'Baru'),
(576, 1, '96', '42102.jpeg', 'Baru'),
(577, 2, '96', '58874.jpeg', 'Baru'),
(578, 3, '96', '55162.jpeg', 'Baru'),
(579, 5, '96', '1294.jpeg', 'Baru'),
(580, 6, '96', '46203.jpeg', 'Baru'),
(581, 7, '96', '59676.jpeg', 'Baru'),
(582, 9, '96', '99014.jpeg', 'Baru'),
(583, 1, '97', '37639.jpeg', 'Baru'),
(584, 2, '97', '19623.jpeg', 'Baru'),
(585, 3, '97', '55402.jpeg', 'Baru'),
(586, 5, '97', '70586.jpeg', 'Baru'),
(587, 6, '97', '93106.jpeg', 'Baru'),
(588, 7, '97', '13319.jpeg', 'Baru'),
(589, 9, '97', '78556.jpeg', 'Baru'),
(590, 1, '98', '53246.jpeg', 'Baru'),
(591, 2, '98', '75407.jpeg', 'Baru'),
(592, 3, '98', '27625.jpeg', 'Baru'),
(593, 5, '98', '26011.jpeg', 'Baru'),
(594, 6, '98', '11649.jpeg', 'Baru'),
(595, 7, '98', '86713.jpeg', 'Baru'),
(596, 9, '98', '41943.jpeg', 'Baru'),
(597, 1, '99', '58174.jpeg', 'Baru'),
(598, 2, '99', '7845.jpeg', 'Baru'),
(599, 3, '99', '65175.jpeg', 'Baru'),
(600, 5, '99', '24353.jpeg', 'Baru'),
(601, 6, '99', '55243.jpeg', 'Baru'),
(602, 7, '99', '39883.jpeg', 'Baru'),
(603, 9, '99', '78511.jpeg', 'Baru'),
(604, 1, '100', '80748.jpeg', 'Baru'),
(605, 2, '100', '89371.jpeg', 'Baru'),
(606, 3, '100', '16294.jpeg', 'Baru'),
(607, 5, '100', '33869.jpeg', 'Baru'),
(608, 6, '100', '51743.jpeg', 'Baru'),
(609, 7, '100', '57073.jpeg', 'Baru'),
(610, 9, '100', '89603.jpeg', 'Baru'),
(611, 1, '101', '98361.jpeg', 'Baru'),
(612, 2, '101', '16822.jpeg', 'Baru'),
(613, 3, '101', '3444.jpeg', 'Baru'),
(614, 5, '101', '79553.jpeg', 'Baru'),
(615, 6, '101', '12163.jpeg', 'Baru'),
(616, 7, '101', '9465.jpeg', 'Baru'),
(617, 9, '101', '10972.jpeg', 'Baru'),
(618, 1, '102', '55966.jpeg', 'Baru'),
(619, 2, '102', '3488.jpeg', 'Baru'),
(620, 3, '102', '58767.jpeg', 'Baru'),
(621, 5, '102', '12454.jpeg', 'Baru'),
(622, 6, '102', '52903.jpeg', 'Baru'),
(623, 7, '102', '89858.jpeg', 'Baru'),
(624, 9, '102', '67549.jpeg', 'Baru'),
(625, 1, '103', '73167.jpeg', 'Baru'),
(626, 2, '103', '44612.jpeg', 'Baru'),
(627, 3, '103', '29331.jpeg', 'Baru'),
(628, 5, '103', '27258.jpeg', 'Baru'),
(629, 6, '103', '63533.jpeg', 'Baru'),
(630, 7, '103', '76392.jpeg', 'Baru'),
(631, 9, '103', '6059.jpeg', 'Baru'),
(646, 1, '106', '7472.jpeg', 'Baru'),
(647, 2, '106', '69181.jpeg', 'Baru'),
(648, 3, '106', '95055.jpeg', 'Baru'),
(649, 5, '106', '96543.jpeg', 'Baru'),
(650, 6, '106', '77029.jpeg', 'Baru'),
(651, 7, '106', '84468.jpeg', 'Baru'),
(652, 9, '106', '33241.jpeg', 'Baru'),
(653, 1, '107', '94653.jpeg', 'Baru'),
(654, 2, '107', '45493.jpeg', 'Baru'),
(655, 3, '107', '36386.jpeg', 'Baru'),
(656, 5, '107', '96396.jpeg', 'Baru'),
(657, 6, '107', '79865.jpeg', 'Baru'),
(658, 7, '107', '95988.jpeg', 'Baru'),
(659, 9, '107', '71157.jpeg', 'Baru'),
(660, 1, '108', '37639.jpeg', 'Baru'),
(661, 2, '108', '36122.jpeg', 'Baru'),
(662, 3, '108', '2525.jpeg', 'Baru'),
(663, 5, '108', '53417.jpeg', 'Baru'),
(664, 6, '108', '46102.jpeg', 'Baru'),
(665, 7, '108', '14670.jpeg', 'Baru'),
(666, 9, '108', '60464.jpeg', 'Baru'),
(667, 1, '109', '36563.jpeg', 'Baru'),
(668, 2, '109', '95368.jpeg', 'Baru'),
(669, 3, '109', '34432.jpeg', 'Baru'),
(670, 5, '109', '5994.jpeg', 'Baru'),
(671, 6, '109', '70212.jpeg', 'Baru'),
(672, 7, '109', '41957.jpeg', 'Baru'),
(673, 9, '109', '71391.jpeg', 'Baru'),
(674, 1, '110', '96793.jpeg', 'Baru'),
(675, 2, '110', '60916.jpeg', 'Baru'),
(676, 3, '110', '54176.jpeg', 'Baru'),
(677, 5, '110', '10429.jpeg', 'Baru'),
(678, 6, '110', '39950.jpeg', 'Baru'),
(679, 7, '110', '30773.jpeg', 'Baru'),
(680, 9, '110', '74535.jpeg', 'Baru'),
(681, 1, '111', '82041.jpeg', 'Baru'),
(682, 2, '111', '95536.jpeg', 'Baru'),
(683, 3, '111', '3298.jpeg', 'Baru'),
(684, 5, '111', '53551.jpeg', 'Baru'),
(685, 6, '111', '39187.jpeg', 'Baru'),
(686, 7, '111', '32757.jpeg', 'Baru'),
(687, 9, '111', '55416.jpeg', 'Baru'),
(688, 1, '112', '32581.jpeg', 'Baru'),
(689, 2, '112', '6804.jpeg', 'Baru'),
(690, 3, '112', '55645.jpeg', 'Baru'),
(691, 5, '112', '32069.jpeg', 'Baru'),
(692, 6, '112', '80796.jpeg', 'Baru'),
(693, 7, '112', '98310.jpeg', 'Baru'),
(694, 9, '112', '68319.jpeg', 'Baru'),
(695, 1, '113', '76982.jpeg', 'Baru'),
(696, 2, '113', '18007.jpeg', 'Baru'),
(697, 3, '113', '38864.jpeg', 'Baru'),
(698, 5, '113', '84033.jpeg', 'Baru'),
(699, 6, '113', '85550.jpeg', 'Baru'),
(700, 7, '113', '26359.jpeg', 'Baru'),
(701, 9, '113', '47829.jpeg', 'Baru'),
(723, 1, '117', '61422.jpeg', 'Baru'),
(724, 2, '117', '65757.jpeg', 'Baru'),
(725, 3, '117', '68927.jpeg', 'Baru'),
(726, 5, '117', '22710.jpeg', 'Baru'),
(727, 6, '117', '30375.jpeg', 'Baru'),
(728, 7, '117', '78495.jpeg', 'Baru'),
(729, 9, '117', '66050.jpeg', 'Baru'),
(730, 1, '118', '48177.jpeg', 'Baru'),
(731, 2, '118', '98082.jpeg', 'Baru'),
(732, 3, '118', '84980.jpeg', 'Baru'),
(733, 5, '118', '24590.jpeg', 'Baru'),
(734, 6, '118', '49100.jpeg', 'Baru'),
(735, 7, '118', '87921.jpeg', 'Baru'),
(736, 9, '118', '91855.jpeg', 'Baru'),
(737, 1, '119', '16186.jpeg', 'Baru'),
(738, 2, '119', '9563.jpeg', 'Baru'),
(739, 3, '119', '2482.jpeg', 'Baru'),
(740, 5, '119', '2151.jpeg', 'Baru'),
(741, 6, '119', '89680.jpeg', 'Baru'),
(742, 7, '119', '15851.jpeg', 'Baru'),
(743, 9, '119', '89873.jpeg', 'Baru'),
(744, 1, '120', '43762.jpeg', 'Baru'),
(745, 2, '120', '74563.jpeg', 'Baru'),
(746, 3, '120', '82484.jpeg', 'Baru'),
(747, 5, '120', '1045.jpeg', 'Baru'),
(748, 6, '120', '92160.jpeg', 'Baru'),
(749, 7, '120', '29437.jpeg', 'Baru'),
(750, 9, '120', '53088.jpeg', 'Baru'),
(772, 1, '124', '90206.jpeg', 'Baru'),
(773, 2, '124', '3146.jpeg', 'Baru'),
(774, 3, '124', '5169.jpeg', 'Baru'),
(775, 5, '124', '23827.jpeg', 'Baru'),
(776, 6, '124', '34692.jpeg', 'Baru'),
(777, 7, '124', '13176.jpeg', 'Baru'),
(778, 9, '124', '50779.jpeg', 'Baru'),
(779, 1, '125', '76173.jpeg', 'Baru'),
(780, 2, '125', '90301.jpeg', 'Baru'),
(781, 3, '125', '4433.jpeg', 'Baru'),
(782, 5, '125', '31139.jpeg', 'Baru'),
(783, 6, '125', '97073.jpeg', 'Baru'),
(784, 7, '125', '13225.jpeg', 'Baru'),
(785, 9, '125', '65057.jpeg', 'Baru'),
(786, 1, '126', '91280.jpeg', 'Baru'),
(787, 2, '126', '66686.jpeg', 'Baru'),
(788, 3, '126', '58458.jpeg', 'Baru'),
(789, 5, '126', '65466.jpeg', 'Baru'),
(790, 6, '126', '78768.jpeg', 'Baru'),
(791, 7, '126', '19263.jpeg', 'Baru'),
(792, 9, '126', '49331.jpeg', 'Baru'),
(793, 1, '127', '67596.jpeg', 'Baru'),
(794, 2, '127', '47302.jpeg', 'Baru'),
(795, 3, '127', '37846.jpeg', 'Baru'),
(796, 5, '127', '97691.jpeg', 'Baru'),
(797, 6, '127', '84388.jpeg', 'Baru'),
(798, 7, '127', '36509.jpeg', 'Baru'),
(799, 9, '127', '88951.jpeg', 'Baru'),
(800, 1, '128', '96864.jpeg', 'Baru'),
(801, 2, '128', '84578.jpeg', 'Baru'),
(802, 3, '128', '80140.jpeg', 'Baru'),
(803, 5, '128', '7109.jpeg', 'Baru'),
(804, 6, '128', '36075.jpeg', 'Baru'),
(805, 7, '128', '29772.jpeg', 'Baru'),
(806, 9, '128', '32553.jpeg', 'Baru'),
(807, 1, '129', '66936.jpeg', 'Baru'),
(808, 2, '129', '74660.jpeg', 'Baru'),
(809, 3, '129', '61034.jpeg', 'Baru'),
(810, 5, '129', '70071.jpeg', 'Baru'),
(811, 6, '129', '84519.jpeg', 'Baru'),
(812, 7, '129', '91245.jpeg', 'Baru'),
(813, 9, '129', '14716.jpeg', 'Baru'),
(814, 1, '130', '71364.jpeg', 'Baru'),
(815, 2, '130', '58147.jpeg', 'Baru'),
(816, 3, '130', '57292.jpeg', 'Baru'),
(817, 5, '130', '55616.jpeg', 'Baru'),
(818, 6, '130', '5586.jpeg', 'Baru'),
(819, 7, '130', '9626.jpeg', 'Baru'),
(820, 9, '130', '25450.jpeg', 'Baru'),
(821, 1, '131', '52798.jpeg', 'Baru'),
(822, 2, '131', '2764.jpeg', 'Baru'),
(823, 3, '131', '35074.jpeg', 'Baru'),
(824, 5, '131', '71796.jpeg', 'Baru'),
(825, 6, '131', '76327.jpeg', 'Baru'),
(826, 7, '131', '2098.jpeg', 'Baru'),
(827, 9, '131', '33969.jpeg', 'Baru'),
(828, 1, '132', '86954.jpeg', 'Baru'),
(829, 2, '132', '23989.jpeg', 'Baru'),
(830, 3, '132', '47589.jpeg', 'Baru'),
(831, 5, '132', '23861.jpeg', 'Baru'),
(832, 6, '132', '43276.jpeg', 'Baru'),
(833, 7, '132', '7379.jpeg', 'Baru'),
(834, 9, '132', '20800.jpeg', 'Baru'),
(835, 1, '133', '17255.jpeg', 'Baru'),
(836, 2, '133', '36674.jpeg', 'Baru'),
(837, 3, '133', '67601.jpeg', 'Baru'),
(838, 5, '133', '30532.jpeg', 'Baru'),
(839, 6, '133', '50814.jpeg', 'Baru'),
(840, 7, '133', '43055.jpeg', 'Baru'),
(841, 9, '133', '68034.jpeg', 'Baru'),
(842, 1, '134', '53014.jpeg', 'Baru'),
(843, 2, '134', '9859.jpeg', 'Baru'),
(844, 3, '134', '91594.jpeg', 'Baru'),
(845, 5, '134', '95322.jpeg', 'Baru'),
(846, 6, '134', '23026.jpeg', 'Baru'),
(847, 7, '134', '48470.jpeg', 'Baru'),
(848, 9, '134', '80709.jpeg', 'Baru'),
(856, 1, '136', '2586.jpeg', 'Baru'),
(857, 2, '136', '52317.jpeg', 'Baru'),
(858, 3, '136', '52213.jpeg', 'Baru'),
(859, 5, '136', '7675.jpeg', 'Baru'),
(860, 6, '136', '80997.jpeg', 'Baru'),
(861, 7, '136', '55123.jpeg', 'Baru'),
(862, 9, '136', '2155.jpeg', 'Baru'),
(863, 1, '137', '69356.pdf', 'Baru'),
(864, 2, '137', '17838.pdf', 'Baru'),
(865, 3, '137', '69314.pdf', 'Baru'),
(866, 5, '137', '1222.pdf', 'Baru'),
(867, 6, '137', '7863.pdf', 'Baru'),
(868, 7, '137', '47514.pdf', 'Baru'),
(869, 9, '137', '63859.pdf', 'Baru'),
(870, 1, '138', '6502.jpeg', 'Baru'),
(871, 2, '138', '40668.jpeg', 'Baru'),
(872, 3, '138', '23613.jpeg', 'Baru'),
(873, 5, '138', '40065.jpeg', 'Baru'),
(874, 6, '138', '63959.jpeg', 'Baru'),
(875, 7, '138', '2002.jpeg', 'Baru'),
(876, 9, '138', '72756.jpeg', 'Baru'),
(877, 1, '139', '99426.jpeg', 'Baru'),
(878, 2, '139', '2867.jpeg', 'Baru'),
(879, 3, '139', '12499.jpeg', 'Baru'),
(880, 5, '139', '16367.jpeg', 'Baru'),
(881, 6, '139', '54214.jpeg', 'Baru'),
(882, 7, '139', '7197.jpeg', 'Baru'),
(883, 9, '139', '64265.jpeg', 'Baru'),
(898, 1, '142', '88708.jpeg', 'Baru'),
(899, 2, '142', '38591.jpeg', 'Baru'),
(900, 3, '142', '30709.jpeg', 'Baru'),
(901, 5, '142', '29958.jpeg', 'Baru'),
(902, 6, '142', '73160.jpeg', 'Baru'),
(903, 7, '142', '89359.jpeg', 'Baru'),
(904, 9, '142', '94771.jpeg', 'Baru'),
(905, 1, '143', '88691.jpeg', 'Baru'),
(906, 2, '143', '69491.jpeg', 'Baru'),
(907, 3, '143', '89583.jpeg', 'Baru'),
(908, 5, '143', '80874.jpeg', 'Baru'),
(909, 6, '143', '16538.jpeg', 'Baru'),
(910, 7, '143', '78297.jpeg', 'Baru'),
(911, 9, '143', '20031.jpeg', 'Baru'),
(912, 1, '144', '53398.jpeg', 'Baru'),
(913, 2, '144', '22793.jpeg', 'Baru'),
(914, 3, '144', '80555.jpeg', 'Baru'),
(915, 5, '144', '85960.jpeg', 'Baru'),
(916, 6, '144', '54432.jpeg', 'Baru'),
(917, 7, '144', '16235.jpeg', 'Baru'),
(918, 9, '144', '36973.jpeg', 'Baru'),
(919, 1, '145', '16646.jpeg', 'Baru'),
(920, 2, '145', '35562.jpeg', 'Baru'),
(921, 3, '145', '38233.jpeg', 'Baru'),
(922, 5, '145', '42111.jpeg', 'Baru'),
(923, 6, '145', '38605.jpeg', 'Baru'),
(924, 7, '145', '68220.jpeg', 'Baru'),
(925, 9, '145', '12707.jpeg', 'Baru'),
(926, 1, '146', '1587.jpeg', 'Baru'),
(927, 2, '146', '91870.jpeg', 'Baru'),
(928, 3, '146', '79819.jpeg', 'Baru'),
(929, 5, '146', '77880.jpeg', 'Baru'),
(930, 6, '146', '47786.jpeg', 'Baru'),
(931, 7, '146', '68025.jpeg', 'Baru'),
(932, 9, '146', '64671.jpeg', 'Baru'),
(933, 1, '147', '79346.jpeg', 'Baru'),
(934, 2, '147', '99475.jpeg', 'Baru'),
(935, 3, '147', '29164.jpeg', 'Baru'),
(936, 5, '147', '71533.jpeg', 'Baru'),
(937, 6, '147', '88049.jpeg', 'Baru'),
(938, 7, '147', '29584.jpeg', 'Baru'),
(939, 9, '147', '78660.jpeg', 'Baru'),
(940, 1, '148', '51884.jpeg', 'Baru'),
(941, 2, '148', '33940.jpeg', 'Baru'),
(942, 3, '148', '75852.jpeg', 'Baru'),
(943, 5, '148', '81606.jpeg', 'Baru'),
(944, 6, '148', '59912.jpeg', 'Baru'),
(945, 7, '148', '48155.jpeg', 'Baru'),
(946, 9, '148', '22471.jpeg', 'Baru'),
(947, 1, '149', '91102.jpeg', 'Baru'),
(948, 2, '149', '18555.jpeg', 'Baru'),
(949, 3, '149', '94446.jpeg', 'Baru'),
(950, 5, '149', '74458.jpeg', 'Baru'),
(951, 6, '149', '47027.jpeg', 'Baru'),
(952, 7, '149', '35967.jpeg', 'Baru'),
(953, 9, '149', '54639.jpeg', 'Baru'),
(954, 1, '150', '25007.jpeg', 'Baru'),
(955, 2, '150', '88550.jpeg', 'Baru'),
(956, 3, '150', '99022.jpeg', 'Baru'),
(957, 5, '150', '67360.jpeg', 'Baru'),
(958, 6, '150', '81570.jpeg', 'Baru'),
(959, 7, '150', '66439.jpeg', 'Baru'),
(960, 9, '150', '81916.jpeg', 'Baru'),
(961, 1, '151', '50561.jpeg', 'Baru'),
(962, 2, '151', '25430.jpeg', 'Baru'),
(963, 3, '151', '14380.jpeg', 'Baru'),
(964, 5, '151', '45298.jpeg', 'Baru'),
(965, 6, '151', '1208.jpeg', 'Baru'),
(966, 7, '151', '4578.jpeg', 'Baru'),
(967, 9, '151', '53946.jpeg', 'Baru'),
(968, 1, '152', '79063.jpeg', 'Baru'),
(969, 2, '152', '31516.jpeg', 'Baru'),
(970, 3, '152', '86589.jpeg', 'Baru'),
(971, 5, '152', '65923.jpeg', 'Baru'),
(972, 6, '152', '23885.jpeg', 'Baru'),
(973, 7, '152', '61795.jpeg', 'Baru'),
(974, 9, '152', '9425.jpeg', 'Baru'),
(975, 1, '153', '9414.jpeg', 'Baru'),
(976, 2, '153', '78658.jpeg', 'Baru'),
(977, 3, '153', '42991.jpeg', 'Baru'),
(978, 5, '153', '1395.jpeg', 'Baru'),
(979, 6, '153', '84333.jpeg', 'Baru'),
(980, 7, '153', '7814.jpeg', 'Baru'),
(981, 9, '153', '64382.jpeg', 'Baru'),
(982, 1, '154', '32243.jpeg', 'Baru'),
(983, 2, '154', '97191.jpeg', 'Baru'),
(984, 3, '154', '76518.jpeg', 'Baru'),
(985, 5, '154', '39054.jpeg', 'Baru'),
(986, 6, '154', '12149.jpeg', 'Baru'),
(987, 7, '154', '30112.jpeg', 'Baru'),
(988, 9, '154', '49790.jpeg', 'Baru'),
(989, 1, '155', '24225.jpeg', 'Baru'),
(990, 2, '155', '20428.jpeg', 'Baru'),
(991, 3, '155', '16885.jpeg', 'Baru'),
(992, 5, '155', '44500.jpeg', 'Baru'),
(993, 6, '155', '62315.jpeg', 'Baru'),
(994, 7, '155', '41841.jpeg', 'Baru'),
(995, 9, '155', '16174.jpeg', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `legalisasi_imb`
--

CREATE TABLE `legalisasi_imb` (
  `id_imb` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat_pemohon` text NOT NULL,
  `lokasi_bangunan` text NOT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legalisasi_imb`
--

INSERT INTO `legalisasi_imb` (`id_imb`, `tgl_permohonan`, `kelurahan`, `nama_pemohon`, `alamat_pemohon`, `lokasi_bangunan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(1, '2020-11-25', 'Alalak Utara', 'nora talib', 'jl antasan kecil barat ', 'jl. perdagangan rt.24', '', '2020-11-25', 4, 'Selesai'),
(2, '2020-12-16', 'Kuin Utara', 'Muhammad Rayen Pratama', 'Jl. Sultan Adam Komp Mandiri Lestari Permanen', 'Jl. Perdagangan Komp. Perum Anugrah Persada Rt.23 Kelurahan Kuin Utara', '', '2020-12-16', 4, 'Selesai'),
(3, '2020-12-16', 'Surgi Mufti', 'Ir. Abdurahman Amur,MM.Msi', 'Jl. Sungai Andai Komp H. Amur No.03 Rt.27/Rw.02', 'Jl. Sungai Andai Komp. H.Amur No.07Rt.27/Rw.02', '', '2020-12-16', 4, 'Selesai'),
(4, '2020-12-16', 'Kuin Utara', 'Syahrudin', 'Jl. HKSN Kuin Utara Banjarmasin', 'Jl. HKSN Kuin Utara Banjarmasin ', '', '2020-12-16', 4, 'Selesai'),
(7, '2021-01-04', 'Alalak Utara', 'ENDANG SRI WAHYUNI', 'JL. PRAMUKA KOMP.DPRD RT.19', 'JL. SIMPANG GUSTI V RT.32', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(8, '2021-01-04', 'Alalak Utara', 'A. RIYADI NOOR', 'JL. KARYA SABUMI', 'JL. PANGERAN RAUDATUL PERMAI 2', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(9, '2021-01-04', 'Sungai Miai', 'DR. DELIS', 'JL. SUTOYO S. NO.338', 'CEMARA RAYA RT.33', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(10, '2021-01-04', 'Surgi Mufti', 'MUHAMMADUN', 'JL.BULAN LAUT 95 TERATAI RT.4', 'SULTAN ADAM SMA 5 RT.20', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(11, '2021-01-05', 'Alalak Utara', 'GT. ROMYIRWAN IMANULLAH', 'JL. JAFRI ZAM - ZAM NO.2 RT.39', 'BRIGJEN H.HASAN BASRI KOMP. MERANTI', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(12, '2021-01-05', 'Sungai Jingah', 'SUROTO, S.Pd', 'JL. JAHRI SALEH KOMP. ALAM SARI NO.56 RT.28', 'JL. JAHRI SALEH KOMP. ALAM SARI NO.56 RT.28', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(13, '2021-01-05', 'Kuin Utara', 'MUHAMMAD FADLI', 'JL. HKSN NO.20 RT.21', 'JL. PERDAGANGAN', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(14, '2021-01-05', 'Alalak Utara', 'TAKDIN MATA NETTE', 'JL. PERUM CENTRAL PARK REGENCY', 'JL.PERDAGANGAN NO.585', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(15, '2021-01-06', 'Alalak Utara', 'HJ. FARIDAH, S. Pd', 'JL. SULTAN ADAM RT.16', 'TEMBUS PERUMNAS DAN PERMAI KOMP.DAHA JAYA PERMAI RT.45', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(16, '2021-01-06', 'Sungai Miai', 'HJ. FARIDAH, S. Pd', 'JL. SULTAN ADAM RT.16', 'JL. SULTAN ADAM RT.16', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(17, '2021-01-06', 'Sungai Miai', 'HJ. FARIDAH, S. Pd', 'JL. SULTAN ADAM RT.16', 'SULTAM ADAM RT.16 GG.KOMP. KADAR PERMAI', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(18, '2021-01-12', 'Alalak Utara', 'H.RUSRI', 'JL. AMD RT.10', 'JL. AMD NO.42 RT.28', 'Proses sesuai prosedur', '2021-01-13', 4, 'Selesai'),
(19, '2021-01-25', 'Sungai Miai', 'ABDURAHIM FIQRY', 'JL.CEMARA RAYA NO.43', 'L.CEMARA RAYA NO.42 RT.28', 'Proses sesuai prosedur', '2021-01-26', 4, 'Selesai'),
(20, '2021-01-26', 'Sungai Miai', 'WIDIANTO', 'JL.SALEM BABARIS', 'JL. ADHYAKSA NO.8 KAYU TANGI', 'Proses sesuai prosedur', '2021-01-27', 4, 'Selesai'),
(21, '2021-01-27', 'Surgi Mufti', 'ITA RIANI', 'JL. MALKON TEMON RT.23', 'JL. MALKON TEMON RT.23', 'Proses sesuai prosedur', '2021-01-28', 4, 'Selesai'),
(23, '2021-01-27', 'Pangeran', 'JONI RIADI', 'JL. SULTAN ADAM KOMP. TOEKWONDO JALUR 9', 'JL. BRIGJEN HASAN BASRI RT.31', 'Proses sesuai prosedur', '2021-02-28', 4, 'Selesai'),
(24, '2021-02-02', 'Alalak Utara', 'H. BAIHAQI HMS', 'JL. BRIGJEN H. HASAN BASRI NO.46 RT.41', 'CEMARA UJUNG LAWANG KOMP. AL.IKHLAS RT.46', 'Proses sesuai prosedur', '2021-02-02', 4, 'Selesai'),
(25, '2021-02-15', 'Sungai Miai', 'ERLIN MULYADI YAP', 'JL. KELAYAN A. RT.001 RW.001KELURAHAN LUAR KECAMATAN BANJARMASIN  TENGAH ', 'JL. FLAMBOYAN I RT.42 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(26, '2021-02-10', 'Sungai Andai', 'Riani', 'JL. VETERAN GG. SEPAKAT KELURAHAN KURIPAN KECAMATAN BANJARMAISN TIMUR', 'JL. PADAT KARYA KOMP. PURNAMA PERMAI II JALUR III NO.33 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'Proses sesuai prosedur', '2021-02-18', 4, 'Selesai'),
(27, '2021-02-17', 'Sungai Miai', 'MIATY ALMIRA', 'JL. A.YANI NO.15 RT.13 KELURAHAN SELAT HILIR KECAMATAN SELAT', 'JL. AWANG SEJAHTERA RT.15 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', 'Proses sesuai prosedur', '2021-02-18', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `legalisasi_izin_tower`
--

CREATE TABLE `legalisasi_izin_tower` (
  `id_izin_tower` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `alamat_pemohon` text NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `lokasi_tower` text NOT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `legalisasi_proposal`
--

CREATE TABLE `legalisasi_proposal` (
  `id_proposal` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul_proposal` text NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legalisasi_proposal`
--

INSERT INTO `legalisasi_proposal` (`id_proposal`, `nama`, `judul_proposal`, `tgl_permohonan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(1, 'YAYASAN MIFTAHUL JANNAH ', 'Mohon Bantuan Dana Renovasi Langgar Miftahul Jannah Menjadi Masjid', '2020-12-16', '2020-12-16', 4, 'Selesai'),
(2, 'MESJID AL BUSYARO', 'MOHON BANTUAN DANA', '2021-01-04', '2021-01-04', 4, 'Selesai'),
(3, 'SD ISLAM MADINATURRAMLAH', 'PERMOHONAN BANTUAN PEMBANGUNAN GEDUNG SEKOLAH', '2021-02-01', '2021-02-01', 4, 'Selesai'),
(5, 'TK/TP AL QUR AN BKPRMI MAHLIGAI AL QURAN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(6, 'TK/TP AL QURAN BKPRMI AL AMIN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(7, 'TK/TP AL QURAN BKPRMI ABDI PERSADA', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(8, 'TK/TP AL QURAN BKPRMI NURUL HUSNA', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(9, 'TK/TP AL QURAN BKPRMI AL KAUTSAR', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(10, 'TK/TP AL QURAN BKPRMI AL MUTSIRAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-05', '2021-02-06', 4, 'Selesai'),
(23, 'TK/TP AL QURAN BKPRMI NUR YASIN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-08', '2021-02-08', 4, 'Selesai'),
(24, 'TK/TP AL QURAN BKPRMI ASY YAFAAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-08', '2021-02-08', 4, 'Selesai'),
(25, 'TK/TP AL QURAN BKPRMI QORYAH THOYYIBAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-08', '2021-02-08', 4, 'Selesai'),
(26, 'TK/TP AL QURAN BKPRMI RUHAMAU BAINAHUM', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-08', '2021-02-08', 4, 'Selesai'),
(27, 'TK/TP AL QURAN BKPRMI MUNAWWARAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-08', '2021-02-08', 4, 'Selesai'),
(28, 'TK/TP AL QURAN AL JAMI', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(29, 'TK/TP AL QURAN BKPRMI AL MUJIRIN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(30, 'TK/TP AL QURAN BKPRMI AL IKHWAN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(31, 'TK/TP AL QURAN BKPRMI SULTAN SURIANSYAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(32, 'TK/TP AL QURAN BKPRMI HUNAFAA', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(33, 'TK/TP AL QURAN BKPRMI AL HAMID', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(34, 'TK/TP AL QURAN BKPRMI AL IKHWAN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-09', '2021-02-09', 4, 'Selesai'),
(35, 'TK/TP AL QURAN BKPRMI AR RAUDHAH III', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(36, 'TK/TP AL QURAN BKPRMI AL YAQIN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(37, 'TK/TP AL QURAN BKPRMI NURUL HUDA', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(38, 'TK/TP AL QURAN BKPRMI AL FIRDAUS', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(39, 'TK/TP AL QURAN BKPRMI AL IKHLAS', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(41, 'TK/TP AL QURAN BKPRMI AL IKHSAN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(42, 'TK/TP AL QURAN BKPRMI AN NOOR', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-10', '2021-02-10', 4, 'Selesai'),
(43, 'TK/TP AL QURAN BKPRMI USWATUN HASANAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-11', '2021-02-11', 4, 'Selesai'),
(44, 'TK/TP AL QURAN BKPRMI AL MUAJIRIN III', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-11', '2021-02-11', 4, 'Selesai'),
(45, 'TK/TP AL QURAN BKPRMI FUADHUL MUTTAQIEN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-11', '2021-02-11', 4, 'Selesai'),
(46, 'TK/TP AL QURAN BKPRMI AT TARIM', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-11', '2021-02-11', 4, 'Selesai'),
(47, 'TK/TP AL QURAN BKPRMI AT TAQWA', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-15', '2021-02-12', 4, 'Selesai'),
(48, 'TK/TP AL QURAN BKPRMI AR RAMATUL ABADIYAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-15', '2021-02-15', 4, 'Selesai'),
(49, 'TK/TP AL QURAN BKPRMI AL FATTAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-15', '2021-02-15', 4, 'Selesai'),
(50, 'TK/TP AL QURAN BKPRMI AL BARQAH', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-15', '2021-02-15', 4, 'Selesai'),
(51, 'TK/TP AL QURAN BKPRMI F242 FUAHUL MUTTAQIEN', 'PERMOHONAN IJIN OPERASIONAL DAN NOMOR STATISTIK TKA/TPA BKPRMI', '2021-02-15', '2021-02-15', 4, 'Selesai'),
(52, 'BADAN KONTAK MAJELIS TALIM KOTA BANJARMASIN', 'PERMOHONAN BANTUAN DANA PEMBINAAN MAJELIS TALIM KOTA BANJARMASIN', '2021-02-15', '2021-02-15', 4, 'Selesai'),
(53, 'PAUD TERPADU SULTHAN', 'PERMOHONAN BANTUAN SARANA DAN PRASARANA', '2021-02-16', '2021-02-16', 4, 'Selesai'),
(54, 'POKDARWIS KUIN SAMUDRA', 'PERMOHONAN BANTUAN ALAT PROTOKOL KESEHATAN DAN SARANA PRASARANA PARIWISATA', '2021-02-16', '2021-02-16', 4, 'Selesai'),
(55, 'POKDARWIS SENANJUNG', 'PERMOHONAN BANTUAN ALAT PROTOKOL KESEHATAN DAN SARANA PRASARANA PARIWISATA', '2021-02-19', '2021-02-19', 4, 'Selesai'),
(56, 'Penanggulang Musibah Kebakaran Sultan Adam', 'Pemberitahuan Keberadaan ORMAS PKM Sultan Adam', '2021-02-25', '2021-02-25', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `ket` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` text NOT NULL,
  `data_lama` text,
  `data_baru` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `ket`, `waktu`, `user`, `data_lama`, `data_baru`) VALUES
(1, 'Login User admin -> Admin', '2020-09-23 15:32:37', 'admin -> Admin', NULL, NULL),
(2, 'Login Masyarakat -> NIK = 1212121212121212', '2020-09-24 13:53:55', 'Rizal', NULL, NULL),
(3, 'Login User', '2020-09-24 13:54:31', 'admin -> Admin', NULL, NULL),
(4, 'Registrasi Masyarakat -> NIK = 4564233444447821', '2020-10-10 04:08:20', 'anjay1111', NULL, NULL),
(5, 'Login Masyarakat -> NIK = 4564233444447821', '2020-10-10 04:09:05', 'anjay1111', NULL, NULL),
(6, 'Login User', '2020-10-10 06:58:51', 'admin -> Admin', NULL, NULL),
(7, 'Login User', '2020-10-12 02:30:24', 'admin -> Admin', NULL, NULL),
(8, 'Login User', '2020-10-12 02:31:07', 'admin -> Admin', NULL, NULL),
(9, 'Login User', '2020-10-12 03:20:01', 'admin -> Admin', NULL, NULL),
(10, 'Login User', '2020-10-13 05:30:50', 'admin -> Admin', NULL, NULL),
(11, 'Registrasi Masyarakat -> NIK = 6371012406940007', '2020-10-13 07:33:26', 'Muhammad Muzakir, S.Kom', NULL, NULL),
(12, 'Login Masyarakat -> NIK = 6371012406940007', '2020-10-13 07:33:50', 'Muhammad Muzakir, S.Kom', NULL, NULL),
(13, 'Login Masyarakat -> NIK = 6371012406940007', '2020-10-13 19:55:10', 'Muhammad Muzakir, S.Kom', NULL, NULL),
(14, 'Login User', '2020-10-13 19:57:52', 'admin -> Admin', NULL, NULL),
(15, 'Login User', '2020-10-13 19:58:29', 'Naimah, SE -> Kasi', NULL, NULL),
(16, 'Login User', '2020-10-13 19:58:55', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(17, 'Login User', '2020-10-13 19:59:22', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(18, 'Login User', '2020-10-13 19:59:47', 'Staf Kasi -> Staf', NULL, NULL),
(19, 'Login Masyarakat -> NIK = 6371012406940007', '2020-10-13 20:00:21', 'Muhammad Muzakir, S.Kom', NULL, NULL),
(20, 'Login User', '2020-10-13 20:05:56', 'Staf Kasi -> Staf', NULL, NULL),
(21, 'Login User', '2020-10-14 12:48:06', 'admin -> Admin', NULL, NULL),
(22, 'Login User', '2020-10-15 01:11:58', 'admin -> Admin', NULL, NULL),
(23, 'Login User', '2020-10-15 01:20:18', 'admin -> Admin', NULL, NULL),
(24, 'Registrasi Masyarakat -> NIK = 6371040711740008', '2020-10-16 01:44:42', 'Muhammad Luthfi Azhari ', NULL, NULL),
(25, 'Login Masyarakat -> NIK = 6371040711740008', '2020-10-16 01:45:21', 'Muhammad Luthfi Azhari ', NULL, NULL),
(26, 'Login Masyarakat -> NIK = 6371040711740008', '2020-10-16 01:46:12', 'Muhammad Luthfi Azhari ', NULL, NULL),
(27, 'Registrasi Masyarakat -> NIK = 6371040306990004', '2020-10-16 03:27:20', 'Nur Solehah ', NULL, NULL),
(28, 'Login User', '2020-10-25 12:29:04', 'admin -> Admin', NULL, NULL),
(29, 'Login User', '2020-10-25 12:38:46', 'admin -> Admin', NULL, NULL),
(30, 'Login User', '2020-10-25 14:51:59', 'admin -> Admin', NULL, NULL),
(31, 'Registrasi Masyarakat -> NIK = 1122334455667788', '2020-10-29 17:26:01', 'Combet', NULL, NULL),
(32, 'Login Masyarakat -> NIK = 1122334455667788', '2020-10-29 17:26:22', 'Combet', NULL, NULL),
(33, 'Login User', '2020-10-31 02:02:04', 'admin -> Admin', NULL, NULL),
(34, 'Registrasi Masyarakat -> NIK = 6371030606970015', '2020-11-02 01:43:02', 'Muhammad Abdillah', NULL, NULL),
(35, 'Login Masyarakat -> NIK = 6371030606970015', '2020-11-02 01:43:52', 'Muhammad Abdillah', NULL, NULL),
(36, 'Login User', '2020-11-03 03:16:16', 'Staf Kasi -> Staf', NULL, NULL),
(37, 'Login User', '2020-11-03 03:19:33', 'admin -> Admin', NULL, NULL),
(38, 'Login User', '2020-11-04 11:46:55', 'admin -> Admin', NULL, NULL),
(39, 'Registrasi Masyarakat -> NIK = 6371044205740009', '2020-11-05 02:34:53', 'HELDA NORLIANI, HJ', NULL, NULL),
(40, 'Login Masyarakat -> NIK = 6371044205740009', '2020-11-05 02:36:22', 'HELDA NORLIANI, HJ', NULL, NULL),
(41, 'Login Masyarakat -> NIK = 6371044205740009', '2020-11-05 04:00:37', 'HELDA NORLIANI, HJ', NULL, NULL),
(42, 'Login User', '2020-11-05 14:37:26', 'admin -> Admin', NULL, NULL),
(43, 'Login User', '2020-11-05 15:05:06', 'Staf Kasi -> Staf', NULL, NULL),
(44, 'Login User', '2020-11-05 15:07:44', 'admin -> Admin', NULL, NULL),
(45, 'Login User', '2020-11-05 16:12:30', 'admin -> Admin', NULL, NULL),
(46, 'Login User', '2020-11-05 16:14:49', 'Naimah, SE -> Kasi', NULL, NULL),
(47, 'Login User', '2020-11-05 16:23:21', 'Staf Kasi -> Staf', NULL, NULL),
(48, 'Registrasi Masyarakat -> NIK = 6371055701720002', '2020-11-19 00:46:15', 'NORA TALIB', NULL, NULL),
(49, 'Login Masyarakat -> NIK = 6371055701720002', '2020-11-19 00:46:49', 'NORA TALIB', NULL, NULL),
(50, 'Login Masyarakat -> NIK = 6371044205740009', '2020-11-19 01:43:59', 'HELDA NORLIANI, HJ', NULL, NULL),
(51, 'Registrasi Masyarakat -> NIK = 3404022506660001', '2020-11-19 02:15:55', 'NURUL ATIK', NULL, NULL),
(52, 'Login Masyarakat -> NIK = 3404022506660001', '2020-11-19 02:16:20', 'NURUL ATIK', NULL, NULL),
(53, 'Registrasi Masyarakat -> NIK = 6371046503760004', '2020-11-20 06:38:00', 'Sri Rusdiana', NULL, NULL),
(54, 'Login Masyarakat -> NIK = 6371046503760004', '2020-11-20 06:40:38', 'Sri Rusdiana', NULL, NULL),
(55, 'Login Masyarakat -> NIK = 6371046503760004', '2020-11-20 07:28:32', 'Sri Rusdiana', NULL, NULL),
(56, 'Registrasi Masyarakat -> NIK = 6371030103500007', '2020-11-24 01:04:41', 'H. SUMARNO DS, M.Pd', NULL, NULL),
(57, 'Login Masyarakat -> NIK = 6371030103500007', '2020-11-24 01:05:23', 'H. SUMARNO DS, M.Pd', NULL, NULL),
(58, 'Login Masyarakat -> NIK = 6371044205740009', '2020-11-24 01:07:48', 'HELDA NORLIANI, HJ', NULL, NULL),
(59, 'Login User', '2020-11-25 03:23:49', 'admin -> Admin', NULL, NULL),
(60, 'Login User', '2020-11-25 03:42:17', 'Naimah, SE -> Kasi', NULL, NULL),
(61, 'Login User', '2020-11-25 03:44:50', 'admin -> Admin', NULL, NULL),
(62, 'Login User', '2020-11-25 03:58:33', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(63, 'Login User', '2020-11-25 04:00:07', 'admin -> Admin', NULL, NULL),
(64, 'Login User', '2020-11-25 04:09:35', 'Naimah, SE -> Kasi', NULL, NULL),
(65, 'Login User', '2020-11-25 04:11:36', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(66, 'Login User', '2020-11-25 04:12:53', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(67, 'Login User', '2020-11-25 04:29:15', 'Staf Kasi -> Staf', NULL, NULL),
(68, 'Login User', '2020-11-25 04:32:44', 'admin -> Admin', NULL, NULL),
(69, 'Login User', '2020-11-25 04:33:07', 'admin -> Admin', NULL, NULL),
(70, 'Login User', '2020-11-25 04:34:11', 'Staf Kasi -> Staf', NULL, NULL),
(71, 'Login User', '2020-11-25 04:39:41', 'Naimah, SE -> Kasi', NULL, NULL),
(72, 'Login User', '2020-11-25 04:40:42', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(73, 'Login User', '2020-11-25 04:41:31', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(74, 'Login User', '2020-11-25 04:42:19', 'Staf Kasi -> Staf', NULL, NULL),
(75, 'Login User', '2020-11-25 05:16:09', 'Staf Kasi -> Staf', NULL, NULL),
(76, 'Login User', '2020-11-25 05:16:49', 'admin -> Admin', NULL, NULL),
(77, 'Login Masyarakat -> NIK = 3173065309910003', '2020-11-25 05:26:24', 'lupita witono', NULL, NULL),
(78, 'Login User', '2020-11-25 05:28:13', 'Naimah, SE -> Kasi', NULL, NULL),
(79, 'Login Masyarakat -> NIK = 3173065309910003', '2020-11-25 05:29:38', 'lupita witono', NULL, NULL),
(80, 'Login User', '2020-11-25 05:32:55', 'admin -> Admin', NULL, NULL),
(81, 'Login User', '2020-11-25 07:09:02', 'Staf Kasi -> Staf', NULL, NULL),
(82, 'Login User', '2020-11-26 00:35:55', 'Staf Kasi -> Staf', NULL, NULL),
(83, 'Login Masyarakat -> NIK = 3173065309910003', '2020-11-26 00:45:30', 'lupita witono', NULL, NULL),
(84, 'Login User', '2020-11-26 01:16:13', 'admin -> Admin', NULL, NULL),
(85, 'Login Masyarakat -> NIK = 3173065309910003', '2020-11-26 01:17:47', 'lupita witono', NULL, NULL),
(86, 'Login User', '2020-11-26 01:21:08', 'admin -> Admin', NULL, NULL),
(87, 'Login User', '2020-11-26 01:22:31', 'Staf Kasi -> Staf', NULL, NULL),
(88, 'Login User', '2020-11-26 01:24:02', 'admin -> Admin', NULL, NULL),
(89, 'Login Masyarakat -> NIK = 3173065309910003', '2020-11-26 03:33:47', 'lupita witono', NULL, NULL),
(90, 'Login User', '2020-11-26 03:51:10', 'admin -> Admin', NULL, NULL),
(91, 'Login User', '2020-11-26 03:58:52', 'admin -> Admin', NULL, NULL),
(92, 'Login User', '2020-11-26 04:09:42', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(93, 'Login Masyarakat -> NIK = 6371046503760004', '2020-11-26 08:36:07', 'Sri Rusdiana', NULL, NULL),
(94, 'Login User', '2020-11-27 00:06:28', 'admin -> Admin', NULL, NULL),
(95, 'Login User', '2020-11-27 00:07:04', 'Staf Kasi -> Staf', NULL, NULL),
(96, 'Login User', '2020-11-27 00:10:29', 'admin -> Admin', NULL, NULL),
(97, 'Login User', '2020-11-27 00:13:12', 'Staf Kasi -> Staf', NULL, NULL),
(98, 'Login User', '2020-11-27 00:14:56', 'admin -> Admin', NULL, NULL),
(99, 'Login User', '2020-11-27 00:18:22', 'Staf Kasi -> Staf', NULL, NULL),
(100, 'Login User', '2020-11-27 00:20:07', 'admin -> Admin', NULL, NULL),
(101, 'Login User', '2020-11-27 00:32:18', 'Staf Kasi -> Staf', NULL, NULL),
(102, 'Login User', '2020-11-27 00:33:52', 'admin -> Admin', NULL, NULL),
(103, 'Login User', '2020-11-27 02:46:40', 'admin -> Admin', NULL, NULL),
(104, 'Registrasi Masyarakat -> NIK = 3524212404820003', '2020-11-27 02:48:14', 'Hendra Dwi Sujaryanto', NULL, NULL),
(105, 'Login Masyarakat -> NIK = 3524212404820003', '2020-11-27 02:48:30', 'Hendra Dwi Sujaryanto', NULL, NULL),
(106, 'Login User', '2020-11-27 02:51:09', 'admin -> Admin', NULL, NULL),
(107, 'Login Masyarakat -> NIK = 6371046503760004', '2020-11-27 03:41:07', 'Sri Rusdiana', NULL, NULL),
(108, 'Login User', '2020-12-02 00:28:30', 'admin -> Admin', NULL, NULL),
(109, 'Login User', '2020-12-02 00:29:42', 'Staf Kasi -> Staf', NULL, NULL),
(110, 'Login User', '2020-12-02 01:14:14', 'admin -> Admin', NULL, NULL),
(111, 'Login User', '2020-12-03 02:19:00', 'admin -> Admin', NULL, NULL),
(112, 'Registrasi Masyarakat -> NIK = 6371046601600001', '2020-12-03 03:43:28', 'MARPUAH,HJ', NULL, NULL),
(113, 'Login Masyarakat -> NIK = 6371046601600001', '2020-12-03 03:44:11', 'MARPUAH,HJ', NULL, NULL),
(114, 'Login User', '2020-12-03 03:52:57', 'admin -> Admin', NULL, NULL),
(115, 'Login User', '2020-12-07 02:29:11', 'admin -> Admin', NULL, NULL),
(116, 'Registrasi Masyarakat -> NIK = 6371034906740007', '2020-12-07 03:58:20', 'Siti rahayu', NULL, NULL),
(117, 'Login Masyarakat -> NIK = 6371034906740007', '2020-12-07 03:58:40', 'Siti rahayu', NULL, NULL),
(118, 'Registrasi Masyarakat -> NIK = 3173052904660003', '2020-12-07 04:56:15', 'NURUL AULIA', NULL, NULL),
(119, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-07 04:56:30', 'NURUL AULIA', NULL, NULL),
(120, 'Login User', '2020-12-08 02:42:22', 'admin -> Admin', NULL, NULL),
(121, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 02:45:22', 'NURUL AULIA', NULL, NULL),
(122, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 03:37:39', 'NURUL AULIA', NULL, NULL),
(123, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 03:37:41', 'NURUL AULIA', NULL, NULL),
(124, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 03:38:27', 'NURUL AULIA', NULL, NULL),
(125, 'Login User', '2020-12-08 03:53:26', 'admin -> Admin', NULL, NULL),
(126, 'Login User', '2020-12-08 03:53:56', 'Staf Kasi -> Staf', NULL, NULL),
(127, 'Login User', '2020-12-08 03:54:27', 'admin -> Admin', NULL, NULL),
(128, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 03:59:32', 'NURUL AULIA', NULL, NULL),
(129, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 04:01:12', 'NURUL AULIA', NULL, NULL),
(130, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-08 04:22:52', 'NURUL AULIA', NULL, NULL),
(131, 'Login User', '2020-12-08 04:33:07', 'admin -> Admin', NULL, NULL),
(132, 'Login User', '2020-12-10 05:35:17', 'admin -> Admin', NULL, NULL),
(133, 'Login User', '2020-12-10 05:37:51', 'admin -> Admin', NULL, NULL),
(134, 'Login User', '2020-12-10 05:42:31', 'admin -> Admin', NULL, NULL),
(135, 'Login Masyarakat -> NIK = 6308104410870001', '2020-12-10 05:50:14', 'HAYATIN NUFUS,AMD.KEB', NULL, NULL),
(136, 'Login Masyarakat -> NIK = 6308104410870001', '2020-12-11 01:38:57', 'HAYATIN NUFUS,AMD.KEB', NULL, NULL),
(137, 'Login User', '2020-12-11 01:43:40', 'admin -> Admin', NULL, NULL),
(138, 'Login User', '2020-12-15 01:25:27', 'admin -> Admin', NULL, NULL),
(139, 'Login User', '2020-12-15 02:40:28', 'admin -> Admin', NULL, NULL),
(140, 'Login User', '2020-12-15 03:13:20', 'admin -> Admin', NULL, NULL),
(141, 'Login User', '2020-12-15 03:28:39', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(142, 'Login User', '2020-12-15 03:30:29', 'admin -> Admin', NULL, NULL),
(143, 'Registrasi Masyarakat -> NIK = 6371045907760005', '2020-12-15 04:07:25', 'ASNAH', NULL, NULL),
(144, 'Login Masyarakat -> NIK = 6371045907760005', '2020-12-15 04:07:49', 'ASNAH', NULL, NULL),
(145, 'Login User', '2020-12-15 04:26:49', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(146, 'Login User', '2020-12-15 04:27:59', 'admin -> Admin', NULL, NULL),
(147, 'Login Masyarakat -> NIK = 6371046503760004', '2020-12-15 04:59:26', 'Sri Rusdiana', NULL, NULL),
(148, 'Login User', '2020-12-16 02:55:38', 'admin -> Admin', NULL, NULL),
(149, 'Login User', '2020-12-16 03:05:45', 'admin -> Admin', NULL, NULL),
(150, 'Login User', '2020-12-16 04:02:20', 'admin -> Admin', NULL, NULL),
(151, 'Login User', '2020-12-16 04:51:26', 'admin -> Admin', NULL, NULL),
(152, 'Login Masyarakat -> NIK = 6371042009900008', '2020-12-16 05:07:05', 'M. Haris Maulana,H', NULL, NULL),
(153, 'Registrasi Masyarakat -> NIK = 6371010305770016', '2020-12-16 05:31:22', 'Syaiful B', NULL, NULL),
(154, 'Login Masyarakat -> NIK = 6371010305770016', '2020-12-16 05:32:27', 'Syaiful B', NULL, NULL),
(155, 'Login User', '2020-12-16 05:34:43', 'admin -> Admin', NULL, NULL),
(156, 'Login User', '2020-12-16 05:43:15', 'admin -> Admin', NULL, NULL),
(157, 'Login User', '2020-12-16 06:04:43', 'admin -> Admin', NULL, NULL),
(158, 'Registrasi Masyarakat -> NIK = 6371051909840008', '2020-12-17 02:58:20', 'FIRMAN', NULL, NULL),
(159, 'Login Masyarakat -> NIK = 6371051909840008', '2020-12-17 02:58:51', 'FIRMAN', NULL, NULL),
(160, 'Login User', '2020-12-17 03:26:04', 'admin -> Admin', NULL, NULL),
(161, 'Login User', '2020-12-17 03:29:32', 'admin -> Admin', NULL, NULL),
(162, 'Login User', '2020-12-17 03:30:23', 'admin -> Admin', NULL, NULL),
(163, 'Login Masyarakat -> NIK = 6371051909840008', '2020-12-17 03:38:07', 'FIRMAN', NULL, NULL),
(164, 'Login User', '2020-12-17 04:08:03', 'admin -> Admin', NULL, NULL),
(165, 'Login User', '2020-12-17 04:30:25', 'admin -> Admin', NULL, NULL),
(166, 'Login User', '2020-12-17 06:09:25', 'admin -> Admin', NULL, NULL),
(167, 'Login User', '2020-12-18 00:50:55', 'admin -> Admin', NULL, NULL),
(168, 'Registrasi Masyarakat -> NIK = 6371055704800011', '2020-12-18 00:58:31', 'DINA APRINA', NULL, NULL),
(169, 'Login Masyarakat -> NIK = 6371055704800011', '2020-12-18 00:59:00', 'DINA APRINA', NULL, NULL),
(170, 'Login User', '2020-12-18 01:20:43', 'admin -> Admin', NULL, NULL),
(171, 'Registrasi Masyarakat -> NIK = 6371041701930007', '2020-12-21 03:14:59', 'NOOR IKHSAN', NULL, NULL),
(172, 'Login User', '2020-12-21 03:15:22', 'admin -> Admin', NULL, NULL),
(173, 'Login Masyarakat -> NIK = 6371041701930007', '2020-12-21 03:49:37', 'NOOR IKHSAN', NULL, NULL),
(174, 'Login User', '2020-12-21 04:06:28', 'admin -> Admin', NULL, NULL),
(175, 'Registrasi Masyarakat -> NIK = 6371046110730003', '2020-12-21 04:28:25', 'MARIA NITEM', NULL, NULL),
(176, 'Login Masyarakat -> NIK = 6371046110730003', '2020-12-21 04:29:22', 'MARIA NITEM', NULL, NULL),
(177, 'Login User', '2020-12-21 05:15:18', 'admin -> Admin', NULL, NULL),
(178, 'Login User', '2020-12-21 05:17:14', 'admin -> Admin', NULL, NULL),
(179, 'Login User', '2020-12-21 05:22:29', 'admin -> Admin', NULL, NULL),
(180, 'Login User', '2020-12-21 05:23:16', 'admin -> Admin', NULL, NULL),
(181, 'Login User', '2020-12-22 03:22:20', 'admin -> Admin', NULL, NULL),
(182, 'Login Masyarakat -> NIK = 6371041701930007', '2020-12-22 03:23:50', 'NOOR IKHSAN', NULL, NULL),
(183, 'Login User', '2020-12-22 03:40:16', 'admin -> Admin', NULL, NULL),
(184, 'Login Masyarakat -> NIK = 6371046110730003', '2020-12-22 03:45:11', 'MARIA NITEM', NULL, NULL),
(185, 'Login User', '2020-12-22 03:47:59', 'admin -> Admin', NULL, NULL),
(186, 'Registrasi Masyarakat -> NIK = 3524212404820002', '2020-12-23 03:50:23', 'HENDRA DWI SUJARYANTO', NULL, NULL),
(187, 'Login Masyarakat -> NIK = 3524212404820002', '2020-12-23 03:51:26', 'HENDRA DWI SUJARYANTO', NULL, NULL),
(188, 'Login User', '2020-12-29 03:23:22', 'admin -> Admin', NULL, NULL),
(189, 'Login User', '2020-12-29 03:23:53', 'admin -> Admin', NULL, NULL),
(190, 'Login User', '2020-12-29 03:26:24', 'admin -> Admin', NULL, NULL),
(191, 'Login User', '2020-12-29 03:28:05', 'Naimah, SE -> Kasi', NULL, NULL),
(192, 'Login User', '2020-12-29 03:29:27', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(193, 'Login User', '2020-12-29 03:31:01', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(194, 'Login User', '2020-12-29 03:34:07', 'admin -> Admin', NULL, NULL),
(195, 'Login User', '2020-12-29 04:16:25', 'admin -> Admin', NULL, NULL),
(196, 'Registrasi Masyarakat -> NIK = 3573052008900003', '2020-12-29 04:26:19', 'IMAN TABRONI, S.HI', NULL, NULL),
(197, 'Login Masyarakat -> NIK = 6371030103500007', '2020-12-29 04:27:33', 'H. SUMARNO DS, M.Pd', NULL, NULL),
(198, 'Login Masyarakat -> NIK = 3173052904660003', '2020-12-29 04:28:48', 'NURUL AULIA', NULL, NULL),
(199, 'Login Masyarakat -> NIK = 3573052008900003', '2020-12-29 04:31:28', 'IMAN TABRONI, S.HI', NULL, NULL),
(200, 'Login Masyarakat -> NIK = 3573052008900003', '2020-12-29 04:38:22', 'IMAN TABRONI, S.HI', NULL, NULL),
(201, 'Login Masyarakat -> NIK = 3404022506660001', '2020-12-29 05:10:56', 'NURUL ATIK', NULL, NULL),
(202, 'Registrasi Masyarakat -> NIK = 6371041007650004', '2020-12-29 06:01:38', 'SYAPRUDIN, H', NULL, NULL),
(203, 'Login Masyarakat -> NIK = 6371041007650004', '2020-12-29 06:02:06', 'SYAPRUDIN, H', NULL, NULL),
(204, 'Login User', '2020-12-29 06:04:08', 'admin -> Admin', NULL, NULL),
(205, 'Login Masyarakat -> NIK = 6371041007650004', '2020-12-29 06:06:28', 'SYAPRUDIN, H', NULL, NULL),
(206, 'Login User', '2020-12-29 06:14:12', 'admin -> Admin', NULL, NULL),
(207, 'Login User', '2020-12-29 06:17:35', 'Naimah, SE -> Kasi', NULL, NULL),
(208, 'Login User', '2020-12-29 06:21:17', 'admin -> Admin', NULL, NULL),
(209, 'Login Masyarakat -> NIK = 3404022506660001', '2020-12-30 03:53:09', 'NURUL ATIK', NULL, NULL),
(210, 'Registrasi Masyarakat -> NIK = 6371042103920004', '2020-12-30 04:08:16', 'MUHAMMAD RIZA FAHLEVI, SH, M.KN', NULL, NULL),
(211, 'Login Masyarakat -> NIK = 6371042103920004', '2020-12-30 04:08:44', 'MUHAMMAD RIZA FAHLEVI, SH, M.KN', NULL, NULL),
(212, 'Registrasi Masyarakat -> NIK = 6371046206670004', '2021-01-04 02:57:52', 'JAINAB, HJ', NULL, NULL),
(213, 'Login Masyarakat -> NIK = 6371046206670004', '2021-01-04 02:58:15', 'JAINAB, HJ', NULL, NULL),
(214, 'Login User', '2021-01-04 03:24:08', 'admin -> Admin', NULL, NULL),
(215, 'Login User', '2021-01-04 03:39:09', 'admin -> Admin', NULL, NULL),
(216, 'Login User', '2021-01-04 03:40:52', 'Staf Kasi -> Staf', NULL, NULL),
(217, 'Login Masyarakat -> NIK = 6371046206670004', '2021-01-04 03:42:47', 'JAINAB, HJ', NULL, NULL),
(218, 'Login User', '2021-01-04 03:51:21', 'admin -> Admin', NULL, NULL),
(219, 'Login User', '2021-01-04 04:26:07', 'Staf Kasi -> Staf', NULL, NULL),
(220, 'Login User', '2021-01-04 11:39:56', 'admin -> Admin', NULL, NULL),
(221, 'Login User', '2021-01-05 02:24:00', 'Staf Kasi -> Staf', NULL, NULL),
(222, 'Login User', '2021-01-05 02:25:11', 'admin -> Admin', NULL, NULL),
(223, 'Registrasi Masyarakat -> NIK = 6371031806560001', '2021-01-05 02:26:33', 'Geman Yusup', NULL, NULL),
(224, 'Login Masyarakat -> NIK = 6371031806560001', '2021-01-05 02:26:45', 'Geman Yusup', NULL, NULL),
(225, 'Login User', '2021-01-05 05:20:57', 'Naimah, SE -> Kasi', NULL, NULL),
(226, 'Login User', '2021-01-05 06:42:15', 'admin -> Admin', NULL, NULL),
(227, 'Registrasi Masyarakat -> NIK = 6371046209580005', '2021-01-06 04:23:39', 'HERNAWATI SABARUDIN HAMDI', NULL, NULL),
(228, 'Login Masyarakat -> NIK = 6371046209580005', '2021-01-06 04:25:00', 'HERNAWATI SABARUDIN HAMDI', NULL, NULL),
(229, 'Login User', '2021-01-06 04:46:45', 'Staf Kasi -> Staf', NULL, NULL),
(230, 'Login User', '2021-01-06 04:47:35', 'admin -> Admin', NULL, NULL),
(231, 'Login User', '2021-01-06 04:51:28', 'admin -> Admin', NULL, NULL),
(232, 'Login User', '2021-01-06 04:53:50', 'Naimah, SE -> Kasi', NULL, NULL),
(233, 'Login User', '2021-01-06 04:54:41', 'Staf Kasi -> Staf', NULL, NULL),
(234, 'Login User', '2021-01-06 05:21:13', 'admin -> Admin', NULL, NULL),
(235, 'Registrasi Masyarakat -> NIK = 6304051404960003', '2021-01-06 05:23:16', 'Gusti Muhammad Fahrubi', NULL, NULL),
(236, 'Login Masyarakat -> NIK = 6304051404960003', '2021-01-06 05:23:32', 'Gusti Muhammad Fahrubi', NULL, NULL),
(237, 'Login User', '2021-01-06 05:24:55', 'admin -> Admin', NULL, NULL),
(238, 'Login User', '2021-01-06 05:25:14', 'Naimah, SE -> Kasi', NULL, NULL),
(239, 'Login User', '2021-01-06 05:26:53', 'admin -> Admin', NULL, NULL),
(240, 'Login Masyarakat -> NIK = 6304051404960003', '2021-01-06 05:27:18', 'Gusti Muhammad Fahrubi', NULL, NULL),
(241, 'Login User', '2021-01-06 05:30:46', 'admin -> Admin', NULL, NULL),
(242, 'Login User', '2021-01-06 06:08:13', 'admin -> Admin', NULL, NULL),
(243, 'Login User', '2021-01-06 06:39:14', 'admin -> Admin', NULL, NULL),
(244, 'Login User', '2021-01-06 06:46:27', 'Naimah, SE -> Kasi', NULL, NULL),
(245, 'Login User', '2021-01-06 06:49:18', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(246, 'Login User', '2021-01-06 06:57:08', 'admin -> Admin', NULL, NULL),
(247, 'Login User', '2021-01-06 07:04:31', 'admin -> Admin', NULL, NULL),
(248, 'Login User', '2021-01-07 13:09:42', 'admin -> Admin', NULL, NULL),
(249, 'Registrasi Masyarakat -> NIK = 6371042308920004', '2021-01-08 01:05:25', 'MUHAMMAD ARFANI', NULL, NULL),
(250, 'Login Masyarakat -> NIK = 6371042308920004', '2021-01-08 01:06:00', 'MUHAMMAD ARFANI', NULL, NULL),
(251, 'Login User', '2021-01-11 03:28:33', 'admin -> Admin', NULL, NULL),
(252, 'Registrasi Masyarakat -> NIK = 6371031401680003', '2021-01-11 03:50:49', 'Drh.H.KHAIRIL FIANNOR ANSYARI', NULL, NULL),
(253, 'Login Masyarakat -> NIK = 6371031401680003', '2021-01-11 03:51:44', 'Drh.H.KHAIRIL FIANNOR ANSYARI', NULL, NULL),
(254, 'Login Masyarakat -> NIK = 6371031401680003', '2021-01-11 04:04:43', 'Drh.H.KHAIRIL FIANNOR ANSYARI', NULL, NULL),
(255, 'Login User', '2021-01-11 04:06:11', 'admin -> Admin', NULL, NULL),
(256, 'Registrasi Masyarakat -> NIK = 6371040110900009', '2021-01-18 04:20:24', 'DANIEL SETIAWAN', NULL, NULL),
(257, 'Login Masyarakat -> NIK = 6371040110900009', '2021-01-18 04:20:52', 'DANIEL SETIAWAN', NULL, NULL),
(258, 'Login User', '2021-01-26 01:52:43', 'admin -> Admin', NULL, NULL),
(259, 'Login User', '2021-01-26 02:10:28', 'admin -> Admin', NULL, NULL),
(260, 'Login User', '2021-01-26 02:14:38', 'admin -> Admin', NULL, NULL),
(261, 'Login User', '2021-01-26 02:42:41', 'Naimah, SE -> Kasi', NULL, NULL),
(262, 'Login User', '2021-01-26 02:43:52', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(263, 'Login User', '2021-01-26 02:45:19', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(264, 'Login User', '2021-01-26 02:47:20', 'Staf Kasi -> Staf', NULL, NULL),
(265, 'Login User', '2021-01-26 02:49:57', 'admin -> Admin', NULL, NULL),
(266, 'Login User', '2021-01-26 03:07:45', 'admin -> Admin', NULL, NULL),
(267, 'Registrasi Masyarakat -> NIK = 6371045006700007', '2021-01-26 03:15:42', 'SUTARMI', NULL, NULL),
(268, 'Login User', '2021-01-26 03:16:12', 'admin -> Admin', NULL, NULL),
(269, 'Login Masyarakat -> NIK = 6371045006700007', '2021-01-26 03:20:03', 'SUTARMI', NULL, NULL),
(270, 'Login User', '2021-01-26 03:21:32', 'admin -> Admin', NULL, NULL),
(271, 'Login User', '2021-01-26 05:03:24', 'admin -> Admin', NULL, NULL),
(272, 'Login User', '2021-01-26 05:53:56', 'admin -> Admin', NULL, NULL),
(273, 'Login User', '2021-01-27 01:28:21', 'admin -> Admin', NULL, NULL),
(274, 'Login Masyarakat -> NIK = 6371046209580005', '2021-01-27 01:31:58', 'HERNAWATI SABARUDIN HAMDI', NULL, NULL),
(275, 'Login Masyarakat -> NIK = 6371031401680003', '2021-01-27 01:35:33', 'Drh.H.KHAIRIL FIANNOR ANSYARI', NULL, NULL),
(276, 'Login Masyarakat -> NIK = 6371046209580005', '2021-01-27 01:37:44', 'HERNAWATI SABARUDIN HAMDI', NULL, NULL),
(277, 'Login User', '2021-01-27 01:38:56', 'admin -> Admin', NULL, NULL),
(278, 'Login User', '2021-01-27 01:42:35', 'admin -> Admin', NULL, NULL),
(279, 'Registrasi Masyarakat -> NIK = 6371027110570005', '2021-01-27 03:39:36', 'SESSI REWETTY RIVILLA', NULL, NULL),
(280, 'Login Masyarakat -> NIK = 6371027110570005', '2021-01-27 03:39:56', 'SESSI REWETTY RIVILLA', NULL, NULL),
(281, 'Login Masyarakat -> NIK = 6371046206670004', '2021-01-27 03:46:54', 'JAINAP, HJ', NULL, NULL),
(282, 'Login Masyarakat -> NIK = 6371045006700007', '2021-01-27 03:49:46', 'SUTARMI', NULL, NULL),
(283, 'Registrasi Masyarakat -> NIK = 6301035107950005', '2021-01-27 04:06:07', 'ADE YULIA ANGGERAINI', NULL, NULL),
(284, 'Login Masyarakat -> NIK = 6301035107950005', '2021-01-27 04:06:42', 'ADE YULIA ANGGERAINI', NULL, NULL),
(285, 'Login User', '2021-01-27 04:07:10', 'admin -> Admin', NULL, NULL),
(286, 'Login User', '2021-01-27 05:13:11', 'admin -> Admin', NULL, NULL),
(287, 'Registrasi Masyarakat -> NIK = 6371046212820007', '2021-01-27 05:46:36', 'MAHARANI, HJ', NULL, NULL),
(288, 'Login Masyarakat -> NIK = 6371046212820007', '2021-01-27 05:51:32', 'MAHARANI, HJ', NULL, NULL),
(289, 'Login User', '2021-01-27 06:01:32', 'admin -> Admin', NULL, NULL),
(290, 'Login User', '2021-01-27 06:06:56', 'admin -> Admin', NULL, NULL),
(291, 'Login User', '2021-01-28 01:00:51', 'admin -> Admin', NULL, NULL),
(292, 'Login User', '2021-01-28 04:36:17', 'admin -> Admin', NULL, NULL),
(293, 'Login User', '2021-01-29 01:27:34', 'admin -> Admin', NULL, NULL),
(294, 'Login User', '2021-01-29 03:06:17', 'admin -> Admin', NULL, NULL),
(295, 'Login User', '2021-02-01 02:14:56', 'admin -> Admin', NULL, NULL),
(296, 'Login User', '2021-02-01 03:47:28', 'admin -> Admin', NULL, NULL),
(297, 'Login User', '2021-02-01 04:08:29', 'admin -> Admin', NULL, NULL),
(298, 'Login User', '2021-02-02 02:18:38', 'admin -> Admin', NULL, NULL),
(299, 'Login User', '2021-02-02 05:41:06', 'admin -> Admin', NULL, NULL),
(300, 'Registrasi Masyarakat -> NIK = 6371030811010004', '2021-02-02 09:45:25', 'MUHAMMAD RAFI', NULL, NULL),
(301, 'Login Masyarakat -> NIK = 6371030811010004', '2021-02-02 09:51:23', 'MUHAMMAD RAFI', NULL, NULL),
(302, 'Login User', '2021-02-03 01:58:51', 'admin -> Admin', NULL, NULL),
(303, 'Login User', '2021-02-03 02:07:07', 'admin -> Admin', NULL, NULL),
(304, 'Login User', '2021-02-03 05:27:53', 'admin -> Admin', NULL, NULL),
(305, 'Login User', '2021-02-04 02:54:25', 'admin -> Admin', NULL, NULL),
(306, 'Login User', '2021-02-04 04:16:21', 'admin -> Admin', NULL, NULL),
(307, 'Login User', '2021-02-05 01:32:25', 'admin -> Admin', NULL, NULL),
(308, 'Login User', '2021-02-05 01:41:41', 'admin -> Admin', NULL, NULL),
(309, 'Login User', '2021-02-05 02:07:29', 'admin -> Admin', NULL, NULL),
(310, 'Login User', '2021-02-05 02:10:34', 'admin -> Admin', NULL, NULL),
(311, 'Login User', '2021-02-05 02:15:14', 'admin -> Admin', NULL, NULL),
(312, 'Login User', '2021-02-05 03:01:37', 'admin -> Admin', NULL, NULL),
(313, 'Login User', '2021-02-09 01:23:59', 'admin -> Admin', NULL, NULL),
(314, 'Login User', '2021-02-09 01:34:46', 'admin -> Admin', NULL, NULL),
(315, 'Login User', '2021-02-09 01:44:03', 'admin -> Admin', NULL, NULL),
(316, 'Login User', '2021-02-09 02:49:32', 'admin -> Admin', NULL, NULL),
(317, 'Login User', '2021-02-09 02:50:07', 'admin -> Admin', NULL, NULL),
(318, 'Login User', '2021-02-09 03:37:44', 'admin -> Admin', NULL, NULL),
(319, 'Login User', '2021-02-09 03:39:55', 'admin -> Admin', NULL, NULL),
(320, 'Login User', '2021-02-09 03:46:24', 'admin -> Admin', NULL, NULL),
(321, 'Login User', '2021-02-09 03:51:07', 'admin -> Admin', NULL, NULL),
(322, 'Login User', '2021-02-09 04:10:01', 'admin -> Admin', NULL, NULL),
(323, 'Login User', '2021-02-09 04:32:02', 'admin -> Admin', NULL, NULL),
(324, 'Login User', '2021-02-09 04:36:26', 'admin -> Admin', NULL, NULL),
(325, 'Login User', '2021-02-09 05:35:01', 'admin -> Admin', NULL, NULL),
(326, 'Login User', '2021-02-10 00:53:48', 'admin -> Admin', NULL, NULL),
(327, 'Login User', '2021-02-10 05:27:36', 'admin -> Admin', NULL, NULL),
(328, 'Login User', '2021-02-11 03:08:31', 'admin -> Admin', NULL, NULL),
(329, 'Registrasi Masyarakat -> NIK = 6371040708820012', '2021-02-12 07:57:59', 'Agustinus Hermawan Wijayanto', NULL, NULL),
(330, 'Login Masyarakat -> NIK = 6371040708820012', '2021-02-12 07:58:16', 'Agustinus Hermawan Wijayanto', NULL, NULL),
(331, 'Registrasi Masyarakat -> NIK = 6371044701730007', '2021-02-14 23:12:00', 'Ernani', NULL, NULL),
(332, 'Login Masyarakat -> NIK = 6371044701730007', '2021-02-14 23:13:09', 'Ernani', NULL, NULL),
(333, 'Login Masyarakat -> NIK = 6371044701730007', '2021-02-15 00:55:26', 'Ernani', NULL, NULL),
(334, 'Login User', '2021-02-15 02:21:18', 'admin -> Admin', NULL, NULL),
(335, 'Login User', '2021-02-15 02:26:51', 'admin -> Admin', NULL, NULL),
(336, 'Login User', '2021-02-15 04:07:37', 'admin -> Admin', NULL, NULL),
(337, 'Login Masyarakat -> NIK = 6371044701730007', '2021-02-15 04:24:13', 'Ernani', NULL, NULL),
(338, 'Login Masyarakat -> NIK = 6371044701730007', '2021-02-15 04:26:01', 'Ernani', NULL, NULL),
(339, 'Login User', '2021-02-15 04:41:35', 'admin -> Admin', NULL, NULL),
(340, 'Login Masyarakat -> NIK = 6371042803900004', '2021-02-15 04:42:07', 'IMAM RAMADHAN,  A.Md', NULL, NULL),
(341, 'Login Masyarakat -> NIK = 6371044701730007', '2021-02-15 05:52:19', 'Ernani', NULL, NULL),
(342, 'Login User', '2021-02-16 02:03:30', 'admin -> Admin', NULL, NULL),
(343, 'Registrasi Masyarakat -> NIK = 6371042601770010', '2021-02-16 03:51:18', 'AKHMAD WAHYUDI', NULL, NULL),
(344, 'Login Masyarakat -> NIK = 6371042601770010', '2021-02-16 03:52:04', 'AKHMAD WAHYUDI', NULL, NULL),
(345, 'Login User', '2021-02-16 04:12:30', 'admin -> Admin', NULL, NULL),
(346, 'Login User', '2021-02-16 04:46:21', 'admin -> Admin', NULL, NULL),
(347, 'Login Masyarakat -> NIK = 6371042601770010', '2021-02-16 05:35:16', 'AKHMAD WAHYUDI', NULL, NULL),
(348, 'Login Masyarakat -> NIK = 6371042601770010', '2021-02-16 06:05:51', 'AKHMAD WAHYUDI', NULL, NULL),
(349, 'Login User', '2021-02-16 06:20:34', 'admin -> Admin', NULL, NULL),
(350, 'Login User', '2021-02-16 06:21:33', 'Naimah, SE -> Kasi', NULL, NULL),
(351, 'Login User', '2021-02-16 06:29:55', 'admin -> Admin', NULL, NULL),
(352, 'Login User', '2021-02-17 01:14:36', 'admin -> Admin', NULL, NULL),
(353, 'Login User', '2021-02-17 02:12:37', 'admin -> Admin', NULL, NULL),
(354, 'Login User', '2021-02-17 04:41:12', 'admin -> Admin', NULL, NULL),
(355, 'Login User', '2021-02-17 06:03:29', 'admin -> Admin', NULL, NULL),
(356, 'Login User', '2021-02-18 01:43:06', 'admin -> Admin', NULL, NULL),
(357, 'Login User', '2021-02-18 01:46:08', 'admin -> Admin', NULL, NULL),
(358, 'Login User', '2021-02-18 03:28:31', 'admin -> Admin', NULL, NULL),
(359, 'Login User', '2021-02-18 03:28:42', 'admin -> Admin', NULL, NULL),
(360, 'Login User', '2021-02-18 05:32:20', 'admin -> Admin', NULL, NULL),
(361, 'Login User', '2021-02-18 05:32:30', 'admin -> Admin', NULL, NULL),
(362, 'Login User', '2021-02-19 02:58:47', 'admin -> Admin', NULL, NULL),
(363, 'Login Masyarakat -> NIK = 6371042601770010', '2021-02-22 03:35:20', 'AKHMAD WAHYUDI', NULL, NULL),
(364, 'Login User', '2021-02-23 01:19:20', 'admin -> Admin', NULL, NULL),
(365, 'Login User', '2021-02-23 02:59:35', 'admin -> Admin', NULL, NULL),
(366, 'Login User', '2021-02-24 02:55:51', 'admin -> Admin', NULL, NULL),
(367, 'Login User', '2021-02-24 02:58:16', 'admin -> Admin', NULL, NULL),
(368, 'Login User', '2021-02-25 03:33:57', 'admin -> Admin', NULL, NULL),
(369, 'Login User', '2021-02-25 04:37:21', 'admin -> Admin', NULL, NULL),
(370, 'Login User', '2021-02-26 03:06:21', 'admin -> Admin', NULL, NULL),
(371, 'Login User', '2021-03-01 02:34:10', 'admin -> Admin', NULL, NULL),
(372, 'Registrasi Masyarakat -> NIK = 6371041712610002', '2021-03-01 02:38:17', 'SAID ALI, SE', NULL, NULL),
(373, 'Login Masyarakat -> NIK = 6371041712610002', '2021-03-01 02:38:49', 'SAID ALI, SE', NULL, NULL),
(374, 'Login User', '2021-03-01 02:46:37', 'Naimah, SE -> Kasi', NULL, NULL),
(375, 'Login Masyarakat -> NIK = 6371041712610002', '2021-03-01 02:48:21', 'SAID ALI, SE', NULL, NULL),
(376, 'Login User', '2021-03-01 02:49:52', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(377, 'Login User', '2021-03-01 02:49:55', 'Noorahmawati, S. AP -> Sekcam', NULL, NULL),
(378, 'Login User', '2021-03-01 02:50:45', 'APILUDDIN NOOR, S.Sos, M.AP -> Camat', NULL, NULL),
(379, 'Login User', '2021-03-01 02:52:02', 'admin -> Admin', NULL, NULL),
(380, 'Login Masyarakat -> NIK = 6371041712610002', '2021-03-01 02:55:36', 'SAID ALI, SE', NULL, NULL),
(381, 'Login User', '2021-03-01 05:47:17', 'admin -> Admin', NULL, NULL),
(382, 'Login User', '2021-03-01 05:56:51', 'admin -> Admin', NULL, NULL),
(383, 'Login User', '2021-03-01 14:15:37', 'admin -> Admin', NULL, NULL),
(384, 'Login User', '2021-03-02 01:19:47', 'admin -> Admin', NULL, NULL),
(385, 'Login User', '2021-03-02 03:02:05', 'admin -> Admin', NULL, NULL),
(386, 'Login User', '2021-03-03 03:53:34', 'admin -> Admin', NULL, NULL),
(387, 'Login User', '2021-03-04 02:40:56', 'admin -> Admin', NULL, NULL),
(388, 'Login User', '2021-03-04 04:10:14', 'admin -> Admin', NULL, NULL),
(389, 'Login User', '2021-03-05 01:11:26', 'admin -> Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(12) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `telpon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `nama`, `nik`, `tempat_lahir`, `tgl_lahir`, `jk`, `agama`, `telpon`, `alamat`, `password`) VALUES
(34, 'Muhammad Muzakir, S.Kom', '6371012406940007', 'Banjarmasin', '1994-06-24', 'Laki-laki', 'Islam', '081294252730', 'Jl. Kelayan A, Gg. PGA Ujung No 87 RT07 RW 03 Banjarmasin selatan', '$2y$10$ZO3L0Y.hpWWbMU7ZGas.AeAIklR6yZpzpIqNGr62hzukuJvubuXNy'),
(35, 'Muhammad Luthfi Azhari ', '6371040711740008', 'Surabaya', '1974-11-07', 'Laki-laki', 'Islam', '081348366170', 'Jl. Sultan Adam Komplek Mandiri Lestari Blok BII No.3 R.32 RW.003 Kelurahan Surgi Mufti', '$2y$10$xc4XBW/Bi9WVSMIetX3HU.tHrGqNIVZ2rYL5pCmnPglaRK7OSslKO'),
(36, 'Nur Solehah ', '6371040306990004', 'Banjarmasin ', '1999-06-03', 'Perempuan', 'Islam', '083155825428', 'Jl. Alalak selatan GG.Marpati RT.01 RW.01 No 53', '$2y$10$s2D3bfTRs4a8/KjD0kOxd.cy178tBHSWlekxocTVDqkVkTESZniSq'),
(38, 'Muhammad Abdillah', '6371030606970015', 'Banjarmasin', '1997-06-06', 'Laki-laki', 'Islam', '087841589718', 'Jl. Belitung Darat Gg. Simpang Rahmat No.92 Rt.18 Rw.02, Banjarmasin', '$2y$10$iVls/kHSmbY25baLXBBR8uP3dI0aGh/EgitvzbSWrYYV6taccQN2O'),
(39, 'HELDA NORLIANI, HJ', '6371044205740009', 'Banjarmasin', '1974-05-02', 'Perempuan', 'Islam', '085251490909', 'Komp. Kayu Tangi II Jalur 6 No.115 Rt.21 Rw.02, Banjarmasin', '$2y$10$C.dAI2nt7iD/9L8M9Z.Tae7/zWr6QP6RnPnVEcrflkNfoykHWVDOq'),
(40, 'NORA TALIB', '6371055701720002', 'BANJARMASIN', '1972-01-17', 'Perempuan', 'Islam', '082155716876', 'JL. ANTASAN KECIL BARAT RT. 11 RW. 02', '$2y$10$3cOyD/JZrmFnP2zVwJ0Js.Qs2B6iuKgmDz.oFYe8SqoefjzecS0d.'),
(41, 'NURUL ATIK', '3404022506660001', 'Jepara', '1966-06-25', 'Laki-laki', 'Islam', '0818277981', 'Dukuh 04 RT.02 RW.08, Sleman ', '$2y$10$1Ru7i6MUC39oEAnJLqVTXu28YCDpctif6FdzU1A6gwxkjhZCbcd7K'),
(42, 'Sri Rusdiana', '6371046503760004', 'Banjarmasin', '1976-03-25', 'Perempuan', 'Islam', '08115112307', 'Jl. Sultan Adam Depan SMA5 RT.021 RW 002 No.74 Banjarmasin', '$2y$10$jEXtfaUNFuJeqaGuzc.nXOeaY2m.OUHKyEJHc.0WdhiwtZrZml3LG'),
(43, 'H. SUMARNO DS, M.Pd', '6371030103500007', 'Kebumen', '1950-03-01', 'Laki-laki', 'Islam', '08115110135 ', 'Jl. S Adam Komp. Kartika No.32 Rt.25 Rw.03 Surgi Mufti Banjarmasin 70122', '$2y$10$CdMqVDXnqK3DASe8A1Wmt.vjgDBAHECukew3UPMcGnBOwTeZ5R1eG'),
(44, 'LAYLI QADRIAH', '6371044707830012', 'banjarmasin', '1983-07-07', 'Perempuan', 'Islam', '0', 'Jl perdagangan komplek hksn permai blok 10 b no.463 ', '$2y$10$MPCiXjsWK6VJPZTgpC1UheSpwChQstU.OW5vCqYrRnfYCTLhktpym'),
(45, 'lupita witono', '3173065309910003', 'banjarmasin', '1991-09-13', 'Perempuan', 'katolik', '081250629221', 'jl. tm. semanan indah blok b3/30 rt. 002 rw. 012 jakarta barat ', '$2y$10$2tS07XSm2yeXJCzQxnywXOMGOGu72a/ZMp1H4XlHgIXaZcijoPKMC'),
(46, 'Hendra Dwi Sujaryanto', '3524212404820003', 'Lamongan', '1982-04-24', 'Laki-laki', 'Islam', '082275642256 ', 'Jl. Belitung Darat Gg. Rahayu Rt.18 Rw.02 Belitung Utara Banjarmasin 70116', '$2y$10$ewMxaygi5tPEgIBKy6QTUufk6GSRflmdVQC5tVwo/FvdmQKGuJbXK'),
(47, 'MARPUAH,HJ', '6371046601600001', 'BANJARMASIN', '1960-01-26', 'Perempuan', 'Islam', '0', 'JL. BRIGJEN H.HASAN BASRI TEMBUS PERUMNAS  NO. 86 RT.40 RW.03 KELURAHAN ALALAK UTARA', '$2y$10$SIGj/zt9QQqyOFPajs.xMOu1fM7przKRYQDtt4d7UdjEBYoEA4Iq2'),
(48, 'Siti rahayu', '6371034906740007', 'banjarmasin ', '1974-12-19', 'Perempuan', 'Islam', '081346237103', 'jln cemara raya blok 2 no 13 rt 31', '$2y$10$nPkGBQP9QJn8cwkywYCu.ee6HRhYPjTr5pjKE.kP85aJSks..TKFq'),
(49, 'NURUL AULIA', '3173052904660003', 'Jakarta', '1996-04-24', 'Laki-laki', 'Islam', '087712722065', 'KP Baru Jl.AA No.50 Rt.04 Kel.Sukabumi Selatan Kec.Kebon Jeruk  Jakarta Barat', '$2y$10$OdxKtdGRpUrHfJgylfzNRe1BAdGPxYY86MFD9j15E40D1WCS7D2Iq'),
(50, 'HAYATIN NUFUS,AMD.KEB', '6308104410870001', 'BANJARMASIN', '1987-10-04', 'Perempuan', 'Islam', '082248847766', 'JL. SULTAN ADAM KOMP. MAHLIGAI NO.108 KELURAHAN SURGI MUFTI', '$2y$10$bOvXGQfMS6noXsjy7XRYBOK1WHccz21DPn3yW5WqT0BNW.fW9.xHm'),
(52, 'ASNAH', '6371045907760005', 'BANJARMASIN', '1976-07-19', 'Perempuan', 'Islam', '085391385800', 'Jl. Alalak Tengah Gang SMA 8 No.42 Rt.23 RW.002 Kelurahan Alalak Tengah ', '$2y$10$b1T1yjb.BnlGpdyhTqx0/e1vBS82wYzxBVoEZoqj/2KJHlILxbK4K'),
(53, 'M. Haris Maulana,H', '6371042009900008', 'BANJARMASIN', '1990-09-20', 'Laki-laki', 'Islam', '0', 'Jl. Sultan Adam Komp Taekwando Permai Jalur. XII No.10 Rt.36', '$2y$10$j1/5sx0rkHStLHmgQGIIV./MyiisTQG7IrB/Dby7wAtUY7Ekwb8ri'),
(54, 'Syaiful B', '6371010305770016', 'BANJARMASIN', '1977-05-08', 'Laki-laki', 'Islam', '081257508857', 'Jl. Rantauan Timur II No.12 Rt.004/Rw.001 Kelurahan Pekauman ', '$2y$10$PJS2O39oZnKODSAi.ghwsuAJ8NIG/0hX1yAty/RqWAAdoASrbEDRm'),
(56, 'FIRMAN', '6371051909840008', 'BANJARMASIN', '1984-09-19', 'Laki-laki', 'Islam', '0811501211', 'jl.zafri zam zam komp.grawiratama III no.210 rt.39 rw.03 kelurahan belitung selatan', '$2y$10$tDRk9gi/bM0s0ViD5DcJsuLCwLsjT.x8fUk22LRxBuOFX8P6W9MtK'),
(57, 'DINA APRINA', '6371055704800011', 'BANJARMASIN', '1980-04-17', 'Perempuan', 'Islam', '082252000059', 'JL. SUNGAI ANDAI KOMP. PESONA PERSADA BLOK ENO.14 RT.07 KELURAHAN SUNGAI ANDAI ', '$2y$10$SQfBzBpn9arBiguIk8GSqOT.SdlxCfNJJgI50kjqXKWdGVb4PGU6G'),
(58, 'NOOR IKHSAN', '6371041701930007', 'BANJARMASIN', '1993-01-17', 'Laki-laki', 'Islam', '082159847209', 'Jl. Sungai Jingah No.67/12 Rt.016 Rw.01', '$2y$10$kMRJ7Cp8EWsYRS8mQ5TksO58VAWSYJnty/36yXooLw.QvsTwS8EwK'),
(59, 'MARIA NITEM', '6371046110730003', 'CILACAP', '1973-10-21', 'Perempuan', 'Islam', '0', 'JL. HKSN KOMP. DASA MAYA II BLOK F NO.8 RT.19 RW.02', '$2y$10$uJ0IYFBVGUSRQz1lAet92egjacpgG9X3uqYC4CfvhYSy1SyJLpNDC'),
(60, 'HENDRA DWI SUJARYANTO', '3524212404820003', 'Lamongan', '1982-04-24', 'Laki-laki', 'Islam', '082275642256', 'Jl. Belda Gg. Rahayu Rt.18 Rw.02 Kel Belitung Utara Kec. Banjarmasin Barat', '$2y$10$lGO/81YhdwyKiMh.lrcVE.bc7Igkg7KGOcgqlvVbRfCjCy1zpFhKW'),
(61, 'IMAN TABRONI, S.HI', '3573052008900003', 'Barito Kuala', '1990-08-20', 'Laki-laki', 'Islam', '081254900404', 'Jl. Kuin Selatan Gg. Pusara 4 No.124 Rt.13 Rw.01 Kel. Kuin Selatan Kec. Banjarmasin Barat 70128', '$2y$10$1s.L3eQ/l7IQTql3Jk4Mi.JxnNsvddLbxhRtTsEfPaT9XcyycOixS'),
(62, 'SYAPRUDIN, H', '6371041007650004', 'RANTAU BAHUANG', '1965-07-10', 'Laki-laki', 'Islam', '085771160341', 'Jalan AMD No.4 Rt.24 Rw. 001', '$2y$10$ocmPurf6b/DhYJhkcoSViOJn5hfSY8tLe.gy7YFaEOqazkrFDkvfq'),
(63, 'MUHAMMAD RIZA FAHLEVI, SH, M.KN', '6371042103920004', 'Banjarmasin', '1992-03-21', 'Laki-laki', 'Islam', '08115582121', 'Komp. Kayu Tangi II Jalur II No.25 Rt.15 Rw.02 Banjarmasin 70116', '$2y$10$C7a8X1YMpXnWYphmEQ1nHeDSKi0oleUVfMngPEAMgAsx6kCa40RPS'),
(64, 'JAINAP, HJ', '6371046206670004', 'BANJARMASIN', '1967-08-22', 'Perempuan', 'Islam', '085249060992', 'JL. ALALAK TENGAH GG. SMA 8 RT.23 / 02 KEL.ALALAK TENGAH ', '$2y$10$SLQXSFwKMQRvPzsFEucG7.dIfx36ur4D/E4D6bBofeGLhYBBZ.xva'),
(65, 'H. GEMAN YUSUP, SH, MH', '6371031806560001', 'BANJARMASIN', '1956-06-18', 'Laki-laki', 'Islam', '0811514828', 'Jl. BRIGJEND KATAMSO 6E/38 RT.09 RW.02 KELURAHAN KERTAK BARU ILIR KECAMATAN BANJARMASIN UTARA', '$2y$10$ezOeYMEzZ9cxr9Is5slBl.GKpnYUXuKxjh.rUAMm5hXnE5hje2xWm'),
(66, 'HERNAWATI SABARUDIN HAMDI', '6371046209580005', 'Banjarmasin', '1958-09-22', 'Perempuan', 'Islam', '081258986702', 'JL. HKSN KOMP.AMD PERMAI BLOK B 16 NO.24 RT.24 RW. 001 KELURAHAN ALALAK SELATAN', '$2y$10$4lm2Et146lquaBp4qEZSj.f8xze5t.B06U8oBQoDqQAgtcSkDlBr.'),
(67, 'Gusti Muhammad Fahrubi', '6304051404960003', 'Berangas', '1996-04-14', 'Laki-laki', 'Islam', '087815357404', 'Jl. Berangas Rt. 06 Rw. 02 Gang Mufakat No. 75', '$2y$10$Fp6rWpAbhyaynvHCyXfHR.nvQQfqYrsaPAX2MynDxiaX6HsvQWs/O'),
(68, 'MUHAMMAD ARFANI', '6371042308920004', 'Banjarmasin', '1992-08-23', 'Laki-laki', 'Islam', '08179376689', 'Jl. Perdagangan Komp. Perdagangan Permai I/109 Rt.22 Rw.02 Banjarmasin 70124', '$2y$10$qypJumQG9Vh1KT2pWKUmfeHdtFtAf6QxuuhgOp5rG11Uo9nZk7tRm'),
(69, 'Drh.H.KHAIRIL FIANNOR ANSYARI', '6371031401680003', 'Kandangan', '1968-01-14', 'Laki-laki', 'Islam', '081282169353', 'JL.CENDERAWASIH II NO.7 RT.019 RW.002 KELURAHAN BELITUNG SELATAN', '$2y$10$98Lsn2o.1Ii/FKz1CLVJhOohQRkgSNXhFF6rJPflo4dUqcEWdFs5a'),
(70, 'DANIEL SETIAWAN', '6371040110900009', 'Banjarmasin', '1990-10-01', 'Laki-laki', 'katolik', '082154605785', 'Jl. H. Hasan Basri No.33 Rt.16 Rw.02 Banjarmasin 70124', '$2y$10$aPWHRcpCXUoJcvPh9bcJSeHlHXw8QhwBeLnQvdD8YBwpEfKp2GJlC'),
(71, 'SUTARMI', '6371045006700007', 'BARITO KUALA', '1970-06-10', 'Perempuan', 'Islam', '082252100652', 'JL. HKSN KOMP. HERLINA PERKASA BLOK.A NO.35 RT.012 RW.002 KELURAHAN ALALAK SELATAN', '$2y$10$foYeDjSeOC9qjVXm1W4FkuE2b.CzekP6ohrqu2pKqOFBfojitvW4u'),
(72, 'SESSI REWETTY RIVILLA', '6371027110570005', 'BANJARMASIN', '1957-10-31', 'Perempuan', 'Islam', '08125109273', 'Jl. PRAMUKA KOMP. DPRD NO.21 RT.19 RW.02 KELURAHAN SUNGAI LULUT KECAMATAN BANJARMASIN TIMUR', '$2y$10$dGA/4ikoWmgj5PDG0Py57utWHDvRNEKn8y2FtbOhxJL79mA2a0wL.'),
(73, 'ADE YULIA ANGGERAINI', '6301035107950005', 'PELAIHARI', '1995-07-11', 'Perempuan', 'Islam', '08979415161', 'JL. BALIREJO RT.17 A RW.006 KELURAHAN ANGSAU PELAIHARI', '$2y$10$YbnRBCRs9Mw5kIqG3CuVzO/5/CtrwBegcVI/.K6.mkdaIPJYzDlIa'),
(74, 'MAHARANI, HJ', '6371046212820007', 'KOTABARU', '1982-12-22', 'Perempuan', 'Islam', '081351570090', 'JL. SULTAN ADAM KOMP. SULTAN ADAM PERMAI BLOK.8/14 RT.028 RW.003 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$0bBjlR6zUm5bs/4imxSj9O9XIiLaLOKxIl4qHj0UkXR30Tc5JOqoS'),
(75, 'RULIAN HAIRI, IR', '6371042511680002', 'TANJUNG', '1968-11-25', 'Laki-laki', 'Islam', '0', 'JL. AGATHIS II RT. 41 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$ozPgvDwIWIUW0m3XvQnZS.z7UrJ5wCZzN.3k1MF6kY7I2bZtScAbi'),
(76, 'YASMIN', '6371022406580002', 'BLORA', '1958-06-24', 'Laki-laki', 'Islam', '0', 'JL. HKSN KOMP. AMD PERMAI BLOK. 8 D NO.212 RT.18 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', '$2y$10$d9vI9QB.UIEf4iX0u/4VBOVGUdT2pEDnDxNHmGXGlZVUSJFlXUBGi'),
(77, 'NURINA HASYYATI MUJAHIDAH', '6371044904940009', 'BANJARMASIN', '1994-04-09', 'Perempuan', 'Islam', '0', 'JL. SULTAN ADAM KOMP PERKASA INDAH RT.21 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$px0EHfdg6c2sBdfsnEWf4uefcWJUjtL6BnNYuCE0YGO9.sg3Ub4bG'),
(78, 'FADHLI KAMIL', '6371041009540004', '-', '1954-09-10', 'Laki-laki', 'Islam', '0', 'JL. JAHRI SALEH NO.65 RT.19 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$Oyw7Dr.J4gGWCBYLnu7m5OUpZjbIHhMJg8vw3NNwbllZvVx3DedXu'),
(79, 'JAILANI', '6371040102930009', 'BANJARMASIN', '1993-02-01', 'Laki-laki', 'Islam', '081545440736', 'JL. KARANG ANYAR 3 NO.9 RT.02 RW.01 KELURAHAN CINDAI ALUS KECAMATAN MARTAPURA ', '$2y$10$tQX6Dm/hRUZqtjVWSzftJ.sAP0qtfDtEOsfDblVOsGAP0RpoJnN42'),
(80, 'ELLY HERLINA AGUSTINI, S.Pd', '6371044808660005', 'KUNINGAN', '1966-08-08', 'Perempuan', 'Islam', '085249499992', 'JL. HKSN KOMP. DASAMAYA II BLOK. F NO.66 RT.19 RW.02 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', '$2y$10$wzP2r4gtzvzyalhRXqE64OVRXkbYfV//iqsP0r6nTUbPvPrQEcvFq'),
(81, 'RAHMAH', '6371047006720004', 'BANJARMASIN', '1972-06-30', 'Perempuan', 'Islam', '0', 'JL. SUNGAI MIAI DALAM RT.12 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$V298w2vuWXCZ7BhuKITLMOxDXR7H2t.5xwW.vMl7UeJ0mRXY9z7hC'),
(82, 'JAHRANI', '6371042007720002', 'BANJARMASIN', '1972-07-20', 'Laki-laki', 'Islam', '0', 'JL. ANTASAN KECIL TIMUR  NO.16 RT.07 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', '$2y$10$Tx62HRPpXcp2SQB.HodaU.Aib2WicWeuGq/i17d3OhPS5NS.Yw59G'),
(83, 'H. GUSTI SOFYARRAHMAN FUADI', '6371040408670008', 'BANJARMASIN', '1967-08-04', 'Laki-laki', 'Islam', '0', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI BLOK. B.I NO.13 RT.32 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$hEUwv204xdCzPMTIr3Y5UuZcCnH0wCiuIcZDDa9gUEBEX8J8c6632'),
(84, 'ADDINNA WIEDIANI AISYA', '6371015411960007', 'BANJARMASIN', '1996-11-14', 'Perempuan', 'Islam', '081347025965', 'JL. SIMPANG GUSTI I NO.14 RT.34 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMAISN UTARA', '$2y$10$6UQhLlYuZZ5ZoC7IUr3bzekQ889aVb/Ikn2OLGgDqO5u1N6CXB3pi'),
(85, 'YUDI', '6371041902850005', 'BANJARMASIN', '1985-02-19', 'Laki-laki', 'Islam', '0', 'JL. SUNGAI MIAI LUAR NO.45 RT.04 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$FzJ.mXQ4Ffg6kQCJ7MYxou/AW5Vykzgh5XrTx9Plo34SkGYab16i.'),
(86, 'HJ. SITI HABIBAH', '6371055009710010', 'BANJARMASIN', '1970-09-10', 'Perempuan', 'Islam', '081256687864', 'JL. ANTASAN KECIL BARAT NO.61 RT.11 RW.01 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', '$2y$10$Rfn8xTFK6yqYMkZZQck8Y.LNYNA8V2l1D7VTPgp3lCVHhq1zsQ/RW'),
(87, 'NINA YUNITA', '6371046706880005', 'BANJARMASIN', '1988-06-27', 'Perempuan', 'Islam', '081952778816', 'JL. ADHYAKSA NO.21 RT.27 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$OXFcOD2pCF6RkuaGLDTPzuPmdE9HY0WDN6wGc3HTvjSvUn4eIg2cO'),
(88, 'DESILESTIA DWI SALMARINI, SST, M.KES', '630165212890005', 'BARABAI', '1989-12-12', 'Perempuan', 'Islam', '082153003399', 'JL. GERILYA KOMP. GRAHA MAHATAMA BLOK. III NO.21 RT.24 RW.02 KELURAHAN TANJUNG PAGAR', '$2y$10$lsBNvIQXxmAh2E3csYEyGuvZOgd2cOaxdtbrc7TZS9Dc5ejgj6LV.'),
(89, 'NURZENAH', '6371045609750003', 'BANJARMASIN', '1975-09-16', 'Perempuan', 'Islam', '085345161768', 'JL. RAYA PERDAGANGAN RT.24 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$P5SUJm2lBi/03FywNReFnO.ZZXVq0GvNXarO7layMUw2yHPvESSX.'),
(90, 'MAIRADI', '6371040506720010	', 'BANJARMASIN', '1985-02-19', 'Laki-laki', 'Islam', '0', 'JL. MERPATI NO.08 RT.24 KELURAHAN SEMANGAT DALAM', '$2y$10$AFiacJDvB7PVT0ji1RKPz.BxDVQEy8Nb4q559wHsl5gI3qeg/B94m'),
(91, 'MUHAMMAD RAFI', '6371030811010004', 'BANJARMASIN', '2001-11-08', 'Laki-laki', 'Islam', '082152226103', 'JL.KUIN SELATAN NO.58 RT/RW 001/001KUIN CERUCUK ', '$2y$10$5JOrXlqnICKljmakqlXgROtc8pgWBlQJScACrJEUd3Xhav38k/Vo6'),
(92, 'ABDULLAH AHMAD', '6371040807530006', 'NEGARA', '1953-07-08', 'Laki-laki', 'Islam', '081248351819', 'JL. FLAMBOYAN III NO.89A RT.42 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$2Rz57Rw3WktdlwIuN025Vuoy7Eh.pwGPfKa9UIqFOO9ICaN1Na61e'),
(93, 'HJ. KUSMA HANIAH', '6371045012720008', 'BLITAR', '1972-12-10', 'Perempuan', 'Islam', '0', 'JL. SULTAN ADAM RUKO II NO.1 RT.31 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$8lTDbrJMAeiWzRfQyMrB9elTzxLx74NyKPitrflPvWj80UEpUgx3C'),
(94, 'AKHMAD FAISAL RIZANI', '6371030304730013', 'BANJARMASIN', '1973-04-03', 'Laki-laki', 'Islam', '08170757000', 'KOMP. PERDAGANGAN PERMAI II KAV.III RT.22 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', '$2y$10$T0bNCI.KAjzjwB9fSnwj8eb2ExkJerz.Q.XA3Ux.Y55rCgzLrrRr6'),
(95, 'dr. H. ACHMAD DAMIRI', '6371012111650001', 'BANJARMASIN', '1965-11-21', 'Laki-laki', 'Islam', '0', 'JL. BRIGJEN H. HASAN BASRI NO.36 RT.01 KAYUTANGI KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$j0hd/KNlE8PZsnXjdOqouu3GXh527/G38PftU9dTbHSrWVAZnGhYS'),
(96, 'H. MUSTHAFA', '6371040309670003', 'BANJARMASIN', '1967-09-03', 'Laki-laki', 'Islam', '0', 'JL. ANTASAN KECIL TIMUR NO.41 RT.09 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMAISN UTARA', '$2y$10$ISOAfJXgHbWotGwJ7MzE8.9PZ4hks8Pn0jCu6hGXH4l6Mj9pVW9pC'),
(97, 'ARBAINAH', '6371026408660005', 'BANJARMASIN', '1966-08-24', 'Perempuan', 'Islam', '081253468885', 'JL. SIMPANG GUSTI IV GG.AMALIAH RT.34 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$3PO89ulhXgYg9StYX.f0U.Bl.191hibqQIOK6TRI5KP6t.TyXQN3a'),
(98, 'ANA NOPIANA NOOR RAHMAH, S.KOM', '6371057011880002', 'BANJARMASIN', '1988-11-30', 'Perempuan', 'Islam', '089691851818', 'JL. SIMPANG BALI I NO.35 RT.08 RW.01 KELURAHAN ANTASAN BESAR KECAMATAN BANJARMASIN TENGAH', '$2y$10$cQVGWo3ngP1.SuQZwpDZv.W/mzf0dKDVhj9oY1ZF82vRtE3s8rI.m'),
(99, 'WINA HARYANTI', '6371046911930003', 'BANJARMASIN', '1993-11-29', 'Perempuan', 'Islam', '0', 'JL. SULTAN ADAM KOMPLEK MAHLIGAI BLOK.C NO.13 RT.12 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', '$2y$10$1JU81sA0jBMZUCKvmf5q.eNPSRBj8mVGy7RzNMNQhnNV4xTvsYoVe'),
(100, 'H. HUSEIN ACHMAD', '6371050508550007', 'HULU SUNGAI SELATAN', '1955-08-05', 'Laki-laki', 'Islam', '0', 'JL. TEMBUS MUSEUM NO.36 RT.13 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', '$2y$10$Xr9jO8ubyz1.SL6tv2LxyOQN5OvwjPtx/8qIlM7cmV9Lt7OUFNxjO'),
(101, 'N. WARNIDAH', '6371044506670007', 'BANJARMASIN', '1967-06-05', 'Perempuan', 'Islam', '0', 'JL. AGATHIS II NO.35 B RT.41 RW. 03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$LvRO20GZjbAVOmbGoe8FGOzQCbFuwD1k413F07JOLUpie2SnAG2MC'),
(102, 'RIANDHI FIRDAUS, A.Md', '6371012510950009', 'BANJARMASIN', '1995-10-25', 'Laki-laki', 'Islam', '082127543045', 'JL.PRONA I KOMP. BUMI BANGUNAN JAYA/41A RT.10 RW. 01 KELURAHAN PEMURUS BARU KECAMATAN BANJARMASIN UTARA', '$2y$10$jWzbjBn5SCCEy3ykYQQ0iuQkax8QdXJXLNSssBHQRJ8f64Nectj.S'),
(103, 'ARJUNADI', '637104010750015', 'BANJARMASIN', '1975-10-10', 'Laki-laki', 'Islam', '0', 'JL. ALALAK TENGAH NO.11 RT.09 RW.02 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', '$2y$10$.SQ.FYzT9XWxmR/vAfSfOOz.YGf1zYJ6MyjpA0yAkqo0e1reCd7a2'),
(104, 'H. YUSRAN', '6371041710640003', 'BANJARMASIN', '1964-10-17', 'Laki-laki', 'Islam', '0', 'JL.  ALALAK TENGAH NO. 49 R.08 RW.02 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN ', '$2y$10$7wmVBN2vZO0RYbQ5ZmW4/uI0qruJa1eqHtiAD26xaoBZHhL7an3x2'),
(105, 'NORMARUSIDAH', '6371044501730004', 'MURUNG PUDAK', '1973-01-05', 'Perempuan', 'Islam', '0', 'JL. CEMARA RAYA AKASIA 2 NO.04 RT.37 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', '$2y$10$kFipu8v7/Fd6g7LQDSHgSehR/LsIyztPgCupdeNGiYLsxfzj6SaCG'),
(106, 'MUHAMMAD FAUZIANNOOR', '6371040312920004', 'BANJARMASIN', '1992-01-03', 'Laki-laki', 'Islam', '085654789545', 'JL. CENGKEH II KOMP. HERLINA PERKASA NO.48 RT.69 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '$2y$10$5HNzB.DgeEOGVM0FX88mXO2c.5HeEVGyrumxnCVYYJEkh3QM4osDe'),
(107, 'FITRI RAHMADANI', '6371015003940023', 'BANJARMASIN', '1994-03-10', 'Perempuan', 'Islam', '0', 'JL. K.S. TUBUN GG. IV / KELUARGA NO.19 RT.20 RW.02 KELURAHAN KELAYAN BARAT KECAMATAN BANJARMASIN SELATAN', '$2y$10$ZE7CtobVyaWpNOjyVJ2wluISIziQbbxnI5.GQsoNiHrLml.eh0oBK'),
(108, 'MUHAMMAD KAMIL', '6371041105750006', 'TUMBANG SAMBA', '1975-05-11', 'Laki-laki', 'Kristen', '0811510000', 'JL. SULTAN ADAM KOMP. ANDIKA NO.07 RT.15 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$eyV5Ex2jUAVEvIq/u8qYuOmOWMxvuXJOLfqX/Frwosq7CK62VlNqa'),
(109, 'HJ. JUHRIAH', '6371046810650005', 'BANJARMASIN', '1965-10-28', 'Perempuan', 'Islam', '081351094200', 'JL. H.HASAN BASRI KOMP. PONDOK METRO INDAH B13 RT.39 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$fVhfzorQg7p1AIyMYcYuHerMuyBNPWFOLT7hjjCI8ehjF6mED0GQK'),
(110, 'NUR INAYAH', '6371046203950005', 'BANJARMASIN', '1995-03-22', 'Perempuan', 'Islam', '0', 'JL. ALALAK SELATAN RT.08 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMAISN UTARA', '$2y$10$Gw73r9eI/OjRiQVc.s74SeLSEbmkQZnWqZ4KtTwS2spAN/nvn4iZe'),
(111, 'ABDUL WAHID, S.KOM', '6371040610850001', 'KUALA KAPUAS', '1985-10-06', 'Laki-laki', 'Islam', '0', 'JL. HKSN KOMP. AMD PERMAI BLOK.B10 NO.257 RT.22 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$Zt/GzsMj0f1CHbL5fbIWNeBTfBuqpdq5lxndfYINOqei06oYdrTpG'),
(112, 'EUIS AULIA, S.KOM', '6371047004870003', 'BANJARMASIN', '1987-04-30', 'Perempuan', 'Islam', '0', 'JL. HKSN KOMP. AMD PERMAI BLOK B.10 NO.257 RT.22 RW.02 KELUAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$0cluuoXeOmGbUodLb.4fbuBQu7VnevsZXeUXA5.ouEULHE9E0kBQO'),
(113, 'NUGROHO RUSLI', '6371051106740003', 'BANJARMASIN', '1974-06-11', 'Laki-laki', 'Islam', '082154601666', 'JL. VETERAN NO.20 RT.11 RW.02 KELURAHAN MELAYU KECAMATAN BANJARMASIN TENGAH', '$2y$10$MOSGAO2qIF4l0cI/M3JIK.z5FKPmzvQcQn18CWiiFhQP9p0vsrDie'),
(114, 'SITI MUGARI', '6371025304760003', 'BANJARMASIN', '1976-04-13', 'Perempuan', 'Islam', '081349339879', 'JL. SIMPANG GUSTI KOMP. MUTIARA EKSEKUTIF RT.32 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$BPWaRck2kq35jX420smX0eAZvWHgNU7C9fcDEjxbQLtr6YhARmUCu'),
(115, 'MARKANI. H', '6371031010650011', 'SUNGAI TABUK', '1965-10-10', 'Perempuan', 'Islam', '0', 'JL. KUIN SELATAN GG. INDRAJAYA RT.05 RW.01 KELURAHAN KUIN CERUCUK KECAMATAN BANJARMASIN BARAT', '$2y$10$nq5c.aaDcSFRo.IPCPtJV.HzNrciuP.qJTwFgwU/Rqz2s0rBMsV92'),
(116, 'Agustinus Hermawan Wijayanto', '6371040708820012', 'Boyolali', '1982-08-07', 'Laki-laki', 'katolik', '081348576850', 'Jl. HKSN Komplek AMD Permai Blok 10 A 1 no 33', '$2y$10$8wmxWhGnVolb9lLeGGhjLOgDloXrcz0bfWHa4AQYhmcIHAmgSg.U6'),
(117, 'Ernani', '6371044701730007', 'Banjarmasin', '1973-01-07', 'Perempuan', 'Islam', '081228362279', 'Jl. Sultan Adam Komplek Mandiri Lestari blok b2 No.03  RT.32 RW.003, Kelurahan Surgi Mufti', '$2y$10$ZCTxfPEKc9SwgKMi3d3BsugY.jgIIX2.vxreD09wBhScyehluVJl2'),
(118, 'AKHMAD RIADI, SE', '3214010506780011', 'BANJARMASIN', '1978-06-05', 'Laki-laki', 'Islam', '0', 'JL. SULAWESI NO.52 RT.16 RW.02 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', '$2y$10$VVZ2xkzELFAQvqAftpvtG.yOxvAHv5YnZQx5hcLietleaqkx0fxMy'),
(119, 'DAHNIAR ARIANI, HJ', '6371046503630001', 'BANJARMASIN', '1963-03-25', 'Perempuan', 'Islam', '0', 'JL. JAHRI SALEH RT.19 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$W9UqXcD4XIczvmuJYr3k9ese.if8uThKqG7e6iQWIVsgxFBRsz9aW'),
(120, 'IMAM RAMADHAN,  A.Md', '6371042803900004', 'BANJARMASIN', '1990-03-28', 'Laki-laki', 'Islam', '0', 'JL. ANTASAN KECIL TIMUR GG. JAMALUDIN 2 RT.05 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', '$2y$10$rtC9MvHL1a1Fw7YLTfYlAu2QYfBDVzivNmlEEZZhgvN1j2CpSe5FK'),
(121, 'FITRIA', '6371045003940005', 'BANJARMASIN', '1994-03-10', 'Perempuan', 'Islam', '088242659935', 'JL. SUNGAI ANDAI RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '$2y$10$LF0UVYkWrQ8wfA.1Yzty0uw.jbkDQln5DKwUBwOuEe7p1M0oe6j4y'),
(122, 'SIMUH', '6371041003890005', 'BANJARMASIN', '1989-03-10', 'Laki-laki', 'Islam', '085389284866', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$pTkC3kmn/eVCUBQlMWdsE.xTBP6ZOkPpJ.wuYOuUavye6XVbavGmG'),
(123, 'WAHDAH', '6371044703920006', 'BANJARMASIN', '1992-03-07', 'Perempuan', 'Islam', '0813143324252', 'JL. ALALAK UTARA RT.13 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$GAO/hf8hNPW.1bC4iyxWKOqmHuL5OITRbtgvUoD4jmY3LkGKqu10e'),
(124, 'AMINAH', '6371045307860009', 'BANJARMASIN', '1986-07-13', 'Perempuan', 'Islam', '085250353066', 'JL. ALALAK UTARA RT. 03 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$jAo2XmJgdTgOzvEKfL98d.an1rNYx5xPdVrqXczpTy8NhOD4F97jS'),
(125, 'ADREA FEBRY HASDI', '6372050502800005', 'JAKARTA', '1980-02-05', 'Laki-laki', 'Islam', '085242711231', 'JL. MESJID NO. 29 RT.02 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$PWyYe9xVNpeHjSnGmM6Z4ODIrecgrbeEZYfdKMZ0Tt84EfT.iMidW'),
(126, 'AKHMAD WAHYUDI', '6371042601770010', 'KOTABARU', '1977-01-26', 'Laki-laki', 'Islam', '081349711407', 'JALAN PERDAGANGAN KOMPLEK HKSN PERMAI BLOK 10C / 73 RT. 29 RW. 02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$JVICnhftt3njSOht9go6qO6OgV3uY2spuK.8qTdNXglwiV3bq0wne'),
(127, 'SUKARJAN, H', '6371040712620006', 'BANJARMASIN', '1962-12-07', 'Laki-laki', 'Islam', '0', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI  BLOK B.3 NO. 70 RT.32 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', '$2y$10$NSP2Wp7wMpwqjwSUGw6squeKFUum4GihnBCaNgGU7/PH8rmj/UyLG'),
(128, 'RUSMIN NURYADIN', '6371042001810013', 'BANJARMASIN', '1981-01-20', 'Laki-laki', 'Islam', '085346568637', 'JL. FLAMBOYAN II RT.42 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', '$2y$10$8rUZfA33YKf.Lng9L9mDlOadXZJPrnR.yTDxEKXQntWKO9v.G13BW'),
(129, 'NUGRAHA KUSUMA', '6371050606870006', 'BANJARMASIN', '1987-06-06', 'Laki-laki', 'Islam', '08115000866', 'JL. PULAU LAUT RT.04 RW.01 KELURAHAN ANTASAN BESAR KECAMATAN BANJARMASIN TENGAH', '$2y$10$vMiWSK.PDdF0V1kOdnBpV.1b7bYYSBGHDMFzv5za7x5EzB12WBM9e'),
(130, 'DEDY PRIHANTORO, ST', '6371040104760005', 'BANJARMASIN', '1976-04-01', 'Laki-laki', 'Islam', '081251099569', 'JL. SUNGAI ANDAI KOMP. BUMI INDAH LESTARI II/26 RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', '$2y$10$feBGDs3nFVt9ApIbVse0ke.szExVMiKWX86YaNS9bJKMg4hIbjRO6'),
(131, 'HAIRRULLAH', '6371042606950004', 'BANJARMASIN', '1995-06-28', 'Laki-laki', 'Islam', '0', 'JL. SULTAN ADAM KOMP. KADAR PERMAI IV NO.32 RT.16 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$b1ghzmXVawxNK7Logoqq8eUUVFLaIes1V.fLrGq.fLULyPGk1oM.O'),
(132, 'HASBI ELKHAIRI, S.Pd', '6371041407890003', 'BANJARMASIN', '1989-07-14', 'Laki-laki', 'Islam', '0', 'JL. SULTAN ADAM KOMP. KADAR PERMAI IV NO.32 RT.16 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$1YCyAYpcLrt40g3zX7NLeOetZEKz/ny0TaSwx/0ILM1UtcfN65rHW'),
(133, 'HUSAINI SUNI', '6303021707630004', 'ALABIO', '1963-07-17', 'Laki-laki', 'Islam', '085332534999', 'JL. A. YANI KM. 7.900 KOMP. ANGGRAINI NO.03 RT.03 RW.01 KELURAHAN MANARAP LAMA KECAMATAN KERTAK HANYAR', '$2y$10$fsmTWxsUiqdxLJ/AeqPJkO0Cn0Ki3BhJDHz0OmL/ltcbk8jGaZdE.'),
(134, 'YULIYANTI', '6371046307830010', 'BANJARMASIN', '1983-07-23', 'Perempuan', 'Islam', '085347623888', 'JL. ANGSANA RAYA NO.01 RT.24 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$/Fe56clLz4JtaNbXWHT3nODKQhZRstXg7D7svc92UZt9c41MJW/ee'),
(135, 'FITRIA, S.Far, APT', '6371045204820003', 'BANJARMASIN', '1982-04-12', 'Perempuan', 'Islam', '081933755031', 'JL. CEMARA RAYA NO.22 KAYUTANGI RT.41 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$MmZQDJLI4K8XY/bYgfi4MOzpfbvEbGTLol0xFm5N9UZBXr53MKuAa'),
(136, 'MAHLIANI, S.Pd', '6371010704700010', 'HULU SUNGAI UTARA', '1970-04-07', 'Laki-laki', 'Islam', '0', 'JL. NAKULA III NO. 14 RT.25 RW.03 KEURAHAN PEMURUS DALAM KECAMATAN BANJARMAISN SELATAN', '$2y$10$tNqwZBoWJa1Txl/L16.PJeYdqBSot89jzIBEckO.SEXyKYBqeIJPa'),
(137, 'MUHAMAD REZKY', '6371050509940001', 'BANJARMASIN', '1994-09-05', 'Laki-laki', 'Islam', '0', 'JL. KURIPAN GG.V RT.03 RW.01 KELURAHAN KURIPAN KECAMATAN BANJARMASIN TIMUR', '$2y$10$wf3eWHpFgHFbPVFKsmhXbOn9NNwn2Ddhi65jBSki9OXdDhyFPtTSy'),
(138, 'M. RIZKI ARIYANI', '6304071207950002', 'TANJUNG SELOR', '1995-07-12', 'Laki-laki', 'Islam', '0', 'JL. SUNGAI GAMPA ASAHI RT.11 KELURAHAN SUNGAI GAMPA ASAHI KECAMATAN BANJARMASIN RANTAU BADAUH', '$2y$10$W0eJ1wqCLOWGolkoUTzNju6bk2rKKikN7HZJk66egALMXyiH/7PD6'),
(139, 'GUSTI SUPRIADY RIZALI', '6371042606700004', 'MARTAPURA', '1970-06-26', 'Laki-laki', 'Islam', '085101339339', 'JL. SULTAN ADAM KOMP. H. IDRIS JALUR I NO.10 RT.13 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASN UTARA', '$2y$10$Qm061SKLEXFlHLerx9WAju2iN1TcqPwyMyCjjv6KJHZo2bQ2q13w6'),
(140, 'HELNA YULIA RAHAYU, ST', '6371044607910011', 'BANJARMASIN', '1991-07-06', 'Perempuan', 'Islam', '082143159872', 'JL. KAYUTANGI II JALUR I NO.23A RT.16 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', '$2y$10$3o5LtmawX.chbNth5RZW/eyFfTnH0VL8i8FVBUFF2apERwrCa4mEO'),
(141, 'H. JAPAR', '6371041907590006', 'UJUNG PANDANG', '1959-07-19', 'Laki-laki', 'Islam', '0', 'JL. HKSN KOMP. AMD PERMAI BLOK.A 18 NO.349 RT.24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$HeJPBek2Dr4JSJlwanhq8.BDIznbLzX0DB44S1eOI1M0VvDJcjOmS'),
(142, 'BUDI WIRATAMA', '6371020306910005', 'BANJARMASIN', '1991-06-03', 'Laki-laki', 'Kristen', '0', 'JL. PRAMUKA NO.52 RT.12 RW.02 KELURAHAN PENGAMBANGAN KECAMATAN BANJARMASIN TIMUR', '$2y$10$LJ8Nre8WnTCzORghQZHoc.jYQANnPNNYfb0O5clNAvsWZVYPBCk4u'),
(143, 'ROSMILAWATY', '6371044701630008', 'BANJARMASIN', '1963-01-07', 'Perempuan', 'Islam', '081343494201', 'JL. SUNGAI MIAI DALAM NO.13 RT.05 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', '$2y$10$s2zO.skYkZO01hXfX6sX7eUQjv/Ry5Xpqtrg902k4Cn.RX/gn068i'),
(144, 'HADIJATUL MUKARRAMAH, HJ', '6371054409530003', 'BANJARMASIN', '1953-09-04', 'Perempuan', 'Islam', '085251617533', 'JL. SULAWESI NO.15 B RT.20 RW.01 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', '$2y$10$/N.mNrr.2C5sq2zyxJx.6eHOEQbODFxIB4MApE/iOnyUGRAKfHW.S'),
(145, 'SAID ALI, SE', '6371041712610002', 'KUMAI', '1961-12-17', 'Laki-laki', 'Islam', '0', 'JL. MESJID JAMI NO.38 RT.01 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', '$2y$10$Cm9FzapcwUdoHJy0PjoKdutpXTav6GEuM1srMb1V7tfeCUK1xKXHW'),
(146, 'HJ. HERLINA AHMAD', '6371045804780006', 'AMUNTAI', '1978-01-18', 'Perempuan', 'Islam', '0', 'JL. KARYA SABUMI II NO.11A RT.17 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', '$2y$10$20BsyOR/NQSyBA/F9gkDC.HZJ57gYZLuCMHZUHkKZ7TkHi60/Mi06'),
(147, 'IRADAH HIDAYANI', '6371035501850015', 'BANJARMASIN', '1985-01-15', 'Perempuan', 'Islam', '085346568637', 'JL. YOS SUDARSO KOMP. AIRMANTAN GG.66 RT.32 RW.03 KELURAHAN TELAGA BIRU KECAMATAN BANJARMASIN BARAT', '$2y$10$238KZCSitpRzxxw1f3jA2eekoSjTlghtl0J5YHt1gMnpGNcTGd9sC'),
(148, 'IBERAHIM', '637102812590005', 'BANJARMASIN', '1959-12-28', 'Laki-laki', 'Islam', '0', 'JL. KUIN UTARA NO.115 RT.07 RW.01 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$Cw0Jw1YOO86btYSPAclj5eU4JIuOb.VjddWLHMQ/WPH9wq4o2eKxm'),
(149, 'NURIFANSYAH HASBI', '6371020510730008', 'BANJARMASIN', '1973-10-05', 'Laki-laki', 'Islam', '081346632013', 'JL. 9 NOPEMBER RT.10 RW.01 KELURAHAN BENUA ANYAR KECAMATAN BANJARMASIN TIMUR', '$2y$10$AAU6TaS.Q48E7Xfeo9ZDM./rspMyBRnP4TyGu09UeQMWYMsbgYTge'),
(150, 'SRI WULANDARI, SH. MH', '6205054202790005', 'PALANGKARAYA', '1979-02-02', 'Perempuan', 'Islam', '08125071358', 'JL. JAMRUD I KOMP GRIYA PERMATA RT.11 RW.03 KELURAHAN HANDIL BAKTI KECAMATAN ALALAK KABUPATEN BARITO KUALA', '$2y$10$1/5PAl7OkSOQRid2cX/zveR9HepsxLhLi8hauuIbOcB.A2FfqIbZ2'),
(151, 'MUSLIK SULAKSONO, SE', '6371042509790004', 'RANTAU', '1979-09-25', 'Laki-laki', 'Islam', '081349378910', 'JL. HKSN KOMP. SURYA GEMILANG BLOK P RT.21 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$4mZkTl0hjU/LbexCEEuxD.THsedJ7pF24zHY2.t3ECInNcLups/C2'),
(152, 'AGUS SUPRIADI', '6371041708760020', 'TULUNG AGUNG', '1976-08-17', 'Laki-laki', 'Islam', '0', 'JL. CEMARA UJUNG KAYUTANGI RT.46 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$SRCkK11JVnApfq2sePoSe.4LBVKCY8tGs9BwUpNBsOT/9Dzel7cxe'),
(153, 'ABDUL AZIZ FATRASUKMA WAAS', '6303023005870002', 'BANJARMASIN', '1987-05-30', 'Laki-laki', 'Islam', '081545423477', 'JL. MAHLIGAI KOMP. ISTANA AL FAZA NO.8C RT.06 RW.02 KELURAHAN KERTAK HANYAR II KECAMATAN KERTAK HANYAR', '$2y$10$RAzHMKw6tHaBxcehYv1A3Oxf2c3u6MZYyXdA.3EqmwN/Q/ZTwF6c2'),
(154, 'RIKA ANANDA', '6371045404940007', 'BANJARMASIN', '1995-04-14', 'Perempuan', 'Islam', '081251300988', 'JL. ALALAK UTARA NO.05 RT.16 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', '$2y$10$McNxPTkplqm1pWREBSEUC.bG9miFIHTbuE.yTCxY7jy/KRyPSQr0K'),
(155, 'ARMAYANI', '6371024905870014', 'BANJARMASIN', '1987-05-09', 'Perempuan', 'Islam', '081250884466', 'JL. PRAMUKA KOMP. MELATI INDAH VI NO.20 RT.10 RW.02 KELURAHAN PEMURUS LUAR KECAMATAN BANJARMASIN TIMUR', '$2y$10$3Dj5tPlpXf9cW0FgYZSIfuLfGqgrbZjXEXVauEri0xSC.8ejm0vvK');

-- --------------------------------------------------------

--
-- Table structure for table `nomor_urut_iumk`
--

CREATE TABLE `nomor_urut_iumk` (
  `id_no` int(11) NOT NULL,
  `nomor_urut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomor_urut_iumk`
--

INSERT INTO `nomor_urut_iumk` (`id_no`, `nomor_urut`) VALUES
(1, '010');

-- --------------------------------------------------------

--
-- Table structure for table `nomor_urut_sktu`
--

CREATE TABLE `nomor_urut_sktu` (
  `id_no` int(11) NOT NULL,
  `nomor_urut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomor_urut_sktu`
--

INSERT INTO `nomor_urut_sktu` (`id_no`, `nomor_urut`) VALUES
(1, '079');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_iumk`
--

CREATE TABLE `peraturan_iumk` (
  `id_peraturan` int(11) NOT NULL,
  `peraturan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_iumk`
--

INSERT INTO `peraturan_iumk` (`id_peraturan`, `peraturan`) VALUES
(1, '<ol><li style="text-align: justify; ">Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222).</li><li style="text-align: justify;">Peraturan Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil.</li><li><div style="text-align: justify;"><span style="font-size: 1rem;">Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin.</span></div></li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan_sktu`
--

CREATE TABLE `peraturan_sktu` (
  `id_peraturan` int(11) NOT NULL,
  `peraturan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peraturan_sktu`
--

INSERT INTO `peraturan_sktu` (`id_peraturan`, `peraturan`) VALUES
(9, '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>');

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `id_polling` int(11) NOT NULL,
  `sangatbaik` bigint(20) NOT NULL DEFAULT '0',
  `baik` bigint(20) NOT NULL DEFAULT '0',
  `cukup` bigint(20) NOT NULL DEFAULT '0',
  `kurang` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polling`
--

INSERT INTO `polling` (`id_polling`, `sangatbaik`, `baik`, `cukup`, `kurang`) VALUES
(1, 4, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posisi_berkas`
--

CREATE TABLE `posisi_berkas` (
  `id_posisi` int(11) NOT NULL,
  `posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi_berkas`
--

INSERT INTO `posisi_berkas` (`id_posisi`, `posisi`) VALUES
(1, 'Kepala Seksi'),
(2, 'Sekertaris Kecamatan'),
(3, 'Camat'),
(4, 'Staf Pelayanan');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi_pendirian_paud`
--

CREATE TABLE `rekomendasi_pendirian_paud` (
  `id_rpp` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `nama_pendiri` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nama_sekolah` text NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_tgl_sktu`
--

CREATE TABLE `riwayat_tgl_sktu` (
  `id_riwayat` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `id_sktu` int(11) NOT NULL,
  `nomor_sktu` varchar(50) DEFAULT NULL,
  `tgl_dibuat` date DEFAULT NULL,
  `terakhir_diperpanjang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_tgl_sktu`
--

INSERT INTO `riwayat_tgl_sktu` (`id_riwayat`, `id_masyarakat`, `id_sktu`, `nomor_sktu`, `tgl_dibuat`, `terakhir_diperpanjang`) VALUES
(29, 34, 32, '513/001/SKTU-X/CAM-BU/2020', '2020-10-13', '2021-10-14'),
(36, 44, 39, '513/436/SKTU-XI/CAM-BU/2020', '2020-11-25', '2021-11-25'),
(38, 45, 41, '513/0437/SKTU-XI/CAM-BU/2020', '2020-11-26', '2021-11-27'),
(40, 47, 43, '513/0439/SKTU-XII/CAM-BU/2020', '2020-12-03', '2021-12-10'),
(42, 49, 45, '513/0438/SKTU-XII/CAM-BU/2020', '2020-12-08', '2021-12-10'),
(43, 50, 46, '513/461/SKTU-XII/CAM-BU/2020', '2020-12-11', '2021-12-11'),
(44, 53, 47, '513/0462/SKTU-XII/CAM-BU/2020', '2020-12-16', '2021-12-16'),
(45, 54, 48, '513/0463/SKTU-XII/CAM-BU/2020', '2020-12-16', '2021-12-16'),
(46, 56, 49, '513/0464/SKTU-XII/CAM-BU/2020', '2020-12-17', '2021-12-17'),
(47, 58, 50, '513/0465/SKTU-XII/CAM-BU/2020', '2020-12-22', '2021-12-22'),
(48, 59, 51, '513/465/SKTU-XII/CAM-BU/2020', '2020-12-22', '2021-12-22'),
(59, 66, 62, '517/001/SKTU-I/CAM-BU/2021', '2021-01-05', '2022-01-05'),
(61, 69, 64, '517/002/SKTU-I/CAM-BU/2021', '2021-01-05', '2022-01-05'),
(62, 72, 65, '517/016/SKTU-I/CAM-BU/2021', '2021-01-27', '2022-01-27'),
(63, 75, 66, '517/003/SKTU-I/CAM-BU/2021', '2021-01-05', '2022-01-05'),
(64, 74, 67, '517/004/SKTU-I/CAM-BU/2021', '2021-01-06', '2022-01-06'),
(65, 65, 68, '517/005/SKTU-I/CAM-BU/2021', '2021-01-06', '2022-01-06'),
(66, 76, 69, '517/006/SKTU-I/CAM-BU/2021', '2021-01-07', '2022-01-08'),
(67, 77, 70, '517/007/SKTU-I/CAM-BU/2021', '2021-01-07', '2022-01-07'),
(68, 78, 71, '517/008/SKTU-I/CAM-BU/2021', '2021-01-07', '2022-01-07'),
(69, 79, 72, '517/009/SKTU-I/CAM-BU/2021', '2021-01-07', '2022-01-07'),
(70, 80, 73, '517/010/SKTU-I/CAM-BU/2021', '2021-01-11', '2022-01-11'),
(71, 81, 74, '517/011/SKTU-I/CAM-BU/2021', '2021-01-12', '2022-01-12'),
(72, 82, 75, '517/012/SKTU-I/CAM-BU/2021', '2021-01-20', '2022-01-20'),
(73, 83, 76, '517/013/SKTU-I/CAM-BU/2021', '2021-01-20', '2022-01-20'),
(75, 84, 78, '517/014/SKTU-I/CAM-BU/2021', '2021-01-26', '2022-01-26'),
(76, 85, 79, '517/015/SKTU-I/CAM-BU/2021', '2021-01-26', '2022-01-26'),
(77, 86, 80, '517/017/SKTU-I/CAM-BU/2021', '2021-01-27', '2022-01-27'),
(78, 86, 81, '517/018/SKTU-I/CAM-BU/2021', '2021-01-27', '2022-01-27'),
(82, 90, 85, '517/019/SKTU-II/CAM-BU/2021', '2021-01-29', '2022-01-29'),
(83, 88, 86, '517/020/SKTU-II/CAM-BU/2021', '2021-01-29', '2022-01-29'),
(84, 87, 87, '517/021/SKTU-II/CAM-BU/2021', '2021-01-29', '2022-01-29'),
(85, 89, 88, '517/022/SKTU-II/CAM-BU/2021', '2021-01-29', '2022-01-29'),
(86, 93, 89, '517/023/SKTU-II/CAM-BU/2021', '2021-01-29', '2022-01-29'),
(87, 94, 90, '517/024/SKTU-II/CAM-BU/2021', '2021-02-01', '2022-02-01'),
(88, 95, 91, '517/025/SKTU-II/CAM-BU/2021', '2021-02-02', '2022-02-02'),
(89, 92, 92, '517/026/SKTU-II/CAM-BU/2021', '2021-02-03', '2022-02-03'),
(90, 68, 93, '517/027/SKTU-II/CAM-BU/2021', '2021-02-03', '2022-02-03'),
(91, 96, 94, '517/028/SKTU-II/CAM-BU/2021', '2021-02-04', '2022-02-04'),
(92, 97, 95, '517/029/SKTU-II/CAM-BU/2021', '2021-02-04', '2022-02-04'),
(93, 98, 96, '517/030/SKTU-II/CAM-BU/2021', '2021-02-04', '2022-02-04'),
(94, 99, 97, '517/031/SKTU-II/CAM-BU/2021', '2021-02-05', '2022-02-05'),
(95, 100, 98, '517/032/SKTU-II/CAM-BU/2021', '2021-02-05', '2022-02-05'),
(96, 101, 99, '517/033/SKTU-II/CAM-BU/2021', '2021-02-05', '2022-02-05'),
(97, 103, 100, '517/034/SKTU-II/CAM-BU/2021', '2021-02-05', '2022-02-05'),
(98, 104, 101, '517/035/SKTU-II/CAM-BU/2021', '2021-02-05', '2022-02-05'),
(99, 105, 102, '517/036/SKTU-II/CAM-BU/2021', '2021-02-08', '2022-02-08'),
(100, 102, 103, '517/037/SKTU-II/CAM-BU/2021', '2021-02-08', '2022-02-09'),
(103, 107, 106, '517/038/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(104, 108, 107, '517/039/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(105, 109, 108, '517/040/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(106, 110, 109, '517/041/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(107, 111, 110, '517/042/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(108, 112, 111, '517/043/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(109, 113, 112, '517/044/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(110, 114, 113, '517/045/SKTU-II/CAM-BU/2021', '2021-02-10', '2022-02-10'),
(114, 115, 117, '517/046/SKTU-II/CAM-BU/2021', '2021-02-11', '2022-02-11'),
(115, 118, 118, '517/047/SKTU-II/CAM-BU/2021', '2021-02-15', '2022-02-15'),
(116, 119, 119, '517/048/SKTU-II/CAM-BU/2021', '2021-02-15', '2022-02-15'),
(117, 120, 120, '517/049/SKTU-II/CAM-BU/2021', '2021-02-15', '2022-02-15'),
(121, 127, 124, '517/050/SKTU-II/CAM-BU/2021', '2021-02-16', '2022-02-16'),
(122, 128, 125, '517/051/SKTU-II/CAM-BU/2021', '2021-02-16', '2022-02-16'),
(123, 129, 126, '517/052/SKTU-II/CAM-BU/2021', '2021-02-16', '2022-02-16'),
(124, 130, 127, '517/053/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(125, 131, 128, '517/054/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(126, 132, 129, '517/055/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(127, 133, 130, '517/056/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(128, 134, 131, '517/057/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(129, 135, 132, '517/058/SKTU-II/CAM-BU/2021', '2021-02-17', '2022-02-17'),
(130, 136, 133, '517/059/SKTU-II/CAM-BU/2021', '2021-02-18', '2022-02-18'),
(131, 137, 134, '517/060/SKTU-II/CAM-BU/2021', '2021-02-19', '2022-02-19'),
(133, 138, 136, '517/061/SKTU-II/CAM-BU/2021', '2021-02-19', '2022-02-19'),
(134, 126, 137, '517/065/SKTU-II/CAM-BU/2021', '2021-02-23', '2022-02-23'),
(135, 139, 138, '517/062/SKTU-II/CAM-BU/2021', '2021-02-22', '2022-02-23'),
(136, 140, 139, '517/063/SKTU-II/CAM-BU/2021', '2021-02-22', '2022-02-23'),
(139, 141, 142, '517/064/SKTU-II/CAM-BU/2021', '2021-02-23', '2022-02-23'),
(140, 143, 143, '517/066/SKTU-II/CAM-BU/2021', '2021-02-25', '2022-02-25'),
(141, 144, 144, '517/067/SKTU-II/CAM-BU/2021', '2021-02-26', '2022-02-26'),
(142, 145, 145, '517/068/SKTU-III/CAM-BU/2021', '2021-03-01', '2022-03-01'),
(143, 146, 146, '517/069/SKTU-III/CAM-BU/2021', '2021-03-01', '2022-03-01'),
(144, 147, 147, '517/070/SKTU-III/CAM-BU/2021', '2021-03-01', '2022-03-01'),
(145, 148, 148, '517/071/SKTU-III/CAM-BU/2021', '2021-03-02', '2022-03-02'),
(146, 149, 149, '517/072/SKTU-III/CAM-BU/2021', '2021-03-02', '2022-03-02'),
(147, 150, 150, '517/073/SKTU-III/CAM-BU/2021', '2021-03-02', '2022-03-02'),
(148, 151, 151, '517/074/SKTU-III/CAM-BU/2021', '2021-03-03', '2022-03-03'),
(149, 152, 152, '517/075/SKTU-III/CAM-BU/2021', '2021-03-03', '2022-03-03'),
(150, 153, 153, '517/076/SKTU-III/CAM-BU/2021', '2021-03-04', '2022-03-04'),
(151, 154, 154, '517/077/SKTU-III/CAM-BU/2021', '2021-03-05', '2022-03-05'),
(152, 155, 155, '517/078/SKTU-III/CAM-BU/2021', '2021-03-05', '2022-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id_role`, `role`, `keterangan`) VALUES
(1, 'Admin', 'Admin'),
(4, 'Kasi', 'Kepala Seksi'),
(6, 'Camat', 'Camat'),
(8, 'Sekcam', 'Sekretaris Camat'),
(9, 'Staf', 'Staf Kepala Seksi Pelayanan');

-- --------------------------------------------------------

--
-- Table structure for table `sktu_baru`
--

CREATE TABLE `sktu_baru` (
  `id_sktu` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `nomor_sktu` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl` datetime NOT NULL,
  `peraturan` longtext NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `nama_pimpinan_perusahaan` varchar(50) NOT NULL,
  `alamat_kediaman` text NOT NULL,
  `kegiatan_usaha` varchar(50) NOT NULL,
  `masa_berlaku_awal` date DEFAULT NULL,
  `masa_berlaku_akhir` date DEFAULT NULL,
  `sifat` varchar(30) NOT NULL,
  `nama_camat` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kelengkapan` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sktu_baru`
--

INSERT INTO `sktu_baru` (`id_sktu`, `id_masyarakat`, `nomor_sktu`, `nama_pemohon`, `no_telp`, `tgl`, `peraturan`, `nama_perusahaan`, `alamat_perusahaan`, `nama_pimpinan_perusahaan`, `alamat_kediaman`, `kegiatan_usaha`, `masa_berlaku_awal`, `masa_berlaku_akhir`, `sifat`, `nama_camat`, `nip`, `jabatan`, `kelengkapan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(32, 34, '513/001/SKTU-X/CAM-BU/2020', 'Muhammad Muzakir, S.Kom', '081294252730', '2020-10-13 15:38:27', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'Adz-Dzikra Sandwich', 'Jl. Pekapuran Raya no 19 Banjarmasin', 'Muhammad Muzakir, S.Kom', 'Jl. Kelayan A, Gg. PGA Ujung No 87 RT07 RW 03 Banjarmasin selatan', 'Perdagangan Barang', '2020-10-14', '2021-10-14', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '-', '2020-10-14', 4, 'Selesai'),
(39, 44, '513/436/SKTU-XI/CAM-BU/2020', 'LAYLI QADRIAH', '0', '2020-11-25 12:39:24', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'pangkalan zahra', 'Jl perdagangan komplek hksn permai blok 10 b no.463 ', 'layli qadriah', 'Jl perdagangan komplek hksn permai blok 10 b no.463 ', 'Perdagangan Barang dan Jasa', '2020-11-25', '2021-11-25', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'selesai', '2020-11-25', 4, 'Selesai'),
(41, 45, '513/0437/SKTU-XI/CAM-BU/2020', 'lupita witono', '081250629221', '2020-11-26 08:28:44', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'Perorangan', 'Jl. H.hasan basri komp. Pondok metro indah Rt. 39 Rw. 03', 'Lupita witono', 'jl. tm. semanan indah blok b3/30 rt. 002 rw. 012 jakarta barat ', 'Perdagangan Barang dan Jasa', '2020-11-27', '2021-11-27', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-11-26', 4, 'Selesai'),
(43, 47, '513/0439/SKTU-XII/CAM-BU/2020', 'MARPUAH,HJ', '0', '2020-12-03 13:41:06', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'PANGKALAN ELPIJI HJ. MARPUAH', 'JL. BRIGJEN H.HASAN BASRI TEMBUAS PERUMNAS NO.86 RT.40 RW.03 KELURAHAN ALALAK UTARA', 'HJ. MARPUAH ', 'JL. BRIGJEN H.HASAN BASRI TEMBUS PERUMNAS  NO. 86 RT.40 RW.03 KELURAHAN ALALAK UTARA', 'Perdagangan Barang', '2020-12-10', '2021-12-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-03', 4, 'Selesai'),
(45, 49, '513/0438/SKTU-XII/CAM-BU/2020', 'NURUL AULIA', '087712722065', '2020-12-08 13:39:28', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'PERUM LKBN ANTARA BIRO KALIMANTAN SELATAN ', 'JL. BRIGJEND H.HASAN BASRI NO.1 KELURAHAN PANGERAN ', 'NURUL AULIA ', 'KP Baru Jl.AA No.50 Rt.04 Kel.Sukabumi Selatan Kec.Kebon Jeruk  Jakarta Barat', 'Jasa', '2020-12-10', '2021-12-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-10', 4, 'Selesai'),
(46, 50, '513/461/SKTU-XII/CAM-BU/2020', 'HAYATIN NUFUS,AMD.KEB', '082248847766', '2020-12-11 10:37:54', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'KOS KOSAN BUSYUFUS ', 'JL. AMD RAYA  RT.20 RW.002 KELURAHAN ALALAK UTARA ', 'HAYATIN NUFUS,AMD.KEB', 'JL. SULTAN ADAM KOMP. MAHLIGAI NO.108 KELURAHAN SURGI MUFTI', 'Jasa', '2020-12-11', '2021-12-11', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-11', 4, 'Selesai'),
(47, 53, '513/0462/SKTU-XII/CAM-BU/2020', 'M. Haris Maulana,H', '0', '2020-12-16 13:35:24', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'H.M Motor', 'Jl. Sultan Adam Komp Taekwando Permai Jalur. XII No.10 Rt.36 Kelurahan Surgi Mufti ', 'M. Haris Maulana ', 'Jl. Sultan Adam Komp Taekwando Permai Jalur. XII No.10 Rt.36', 'Perdagangan Barang dan Jasa', '2020-12-16', '2021-12-16', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-16', 4, 'Selesai'),
(48, 54, '513/0463/SKTU-XII/CAM-BU/2020', 'Syaiful B', '081257508857', '2020-12-16 13:36:31', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'sumber mineral', 'Jl. Sultan Adam Rt.03/Rw.05 Kelurahan Surgi Mufti ', 'Syaiful B', 'Jl. Rantauan Timur II No.12 Rt.004/Rw.001 Kelurahan Pekauman ', 'Perdagangan Barang', '2020-12-16', '2021-12-16', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-16', 4, 'Selesai'),
(49, 56, '513/0464/SKTU-XII/CAM-BU/2020', 'FIRMAN', '0811501211', '2020-12-17 12:01:58', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'OPTIK ANSARI SALEH', 'jl.hasan basri no.01 rt.016 kelurahan alalak utara', 'FIRMAN', 'jl.jafri zam zam komp.grawiratama III no.210 rt.39 rw.03 kelurahan belitung selatan', 'Perdagangan Barang', '2020-12-17', '2021-12-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-17', 4, 'Selesai'),
(50, 58, '513/0465/SKTU-XII/CAM-BU/2020', 'NOOR IKHSAN', '082159847209', '2020-12-22 11:41:55', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'PANGKALAN LPG 3 KG ', 'Jl. Sungai Jingah No.67/12 Rt.016 Rw.01', 'NOOR IKHSAN', 'Jl. Sungai Jingah No.67/12 Rt.016 Rw.01', 'Perdagangan Barang dan Jasa', '2020-12-22', '2021-12-22', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-21', 4, 'Selesai'),
(51, 59, '513/465/SKTU-XII/CAM-BU/2020', 'MARIA NITEM', '0', '2020-12-22 11:48:40', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'CATERING MARIA', 'JL. HKSN KOMP. DASA MAYA II BLOK F NO.8 RT.19 RW.02', 'MARIA NITEM', 'JL. HKSN KOMP. DASA MAYA II BLOK F NO.8 RT.19 RW.02', 'Perdagangan Barang dan Jasa', '2020-12-22', '2021-12-22', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2020-12-21', 4, 'Selesai'),
(62, 66, '517/001/SKTU-I/CAM-BU/2021', 'HERNAWATI SABARUDIN HAMDI', '081258986702', '2021-01-05 14:01:02', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS 3 KG ', 'JL. HKSN KOMP. PERTOKOAN AMD NO.3 KELURAHAN ALALAK SELATAN', 'HERNAWATI SABARUDIN HAMDI', 'JALAN HKSN KOMP.AMD PERMAI BLOK B 16 NO.24 RT.24 RW. 001 KELURAHAN ALALAK SELATAN', 'Perdagangan Barang dan Jasa', '2021-01-05', '2022-01-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(64, 69, '517/002/SKTU-I/CAM-BU/2021', 'Drh.H.KHAIRIL FIANNOR ANSYARI', '081282169353', '2021-01-05 13:17:21', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YUQO PETSHOP', 'JL. H. HASAN BASRI PONDOK METRO INDAH KOMP. HM.YUSUF JALUR I NO.5 RT.039 RW.009 KELURAHAN ALALAK UTARA', 'Drh. H. KHAIRIL FIANNOR ANSYARI', 'JL.CENDERAWASIH II NO.7 RT.019 RW.002 KELURAHAN BELITUNG SELATAN', 'Perdagangan Barang', '2021-01-05', '2022-01-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(65, 72, '517/016/SKTU-I/CAM-BU/2021', 'SESSI REWETTY RIVILLA', '08125109273', '2021-01-27 11:51:11', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN BAKTI TRISULA KALIMANTAN SELATAN', 'JL. H. HASAN BASRI  KOMP. KAYU TANGI II RT.16 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'SESSI REWETTY RIVILLA', 'Jl. Pramuka Komp. DPRD No.21 Rt.19 Rw.02 Kel. Sungai Lulut Kec. Banjarmasin Timur', 'Jasa', '2021-01-27', '2022-01-27', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-27', 4, 'Selesai'),
(66, 75, '517/003/SKTU-I/CAM-BU/2021', 'RULIAN HAIRI, IR', '0', '2021-01-05 10:38:09', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS ELPIJI " AZ-ZAHRA "', 'JL. AGATHIS II RT. 41 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'RULIAN HAIRI, IR', 'JL. AGATHIS II RT. 41 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-05', '2022-01-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-05', 4, 'Selesai'),
(67, 74, '517/004/SKTU-I/CAM-BU/2021', 'MAHARANI, HJ', '081351570090', '2021-01-06 10:45:58', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DM CLINIC BEAUTY SALON & SPA', 'JL.SULTAN ADAM NO.79 RT.05 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'MAHARANI, HJ', 'JL. SULTAN ADAM KOMP. SULTAN ADAM PERMAI BLOK.8/14 RT.028 RW.003 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-01-06', '2022-01-06', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(68, 65, '517/005/SKTU-I/CAM-BU/2021', 'H. GEMAN YUSUP, SH, MH', '0811514828', '2021-01-06 10:46:21', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DEPOT SARI PATIN KAYU TANGI', 'JL. BRIGJEND H. HASAN BASRI NO.53 RT.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'H. GEMAN YUSUP, SH, MH', 'Jl. BRIGJEND KATAMSO 6E/38 RT.09 RW.02 KELURAHAN KERTAK BARU ILIR KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-01-06', '2022-01-06', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-06', 4, 'Selesai'),
(69, 76, '517/006/SKTU-I/CAM-BU/2021', 'YASMIN', '0', '2021-01-07 10:49:17', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS ELPIJI  YASMIN', 'JL. HKSN KOMP. AMD PERMAI BLOK. 8 D NO.212 RT.18 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', 'YASMIN', 'JL. HKSN KOMP. AMD PERMAI BLOK. 8 D NO.212 RT.18 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-08', '2022-01-08', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(70, 77, '517/007/SKTU-I/CAM-BU/2021', 'NURINA HASYYATI MUJAHIDAH', '0', '2021-01-07 10:53:36', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'MUHAMMAD IMRON', 'JL. MALKON TEMOR KOMPLEK TAMAN CITRA BLOK.B NO.22 RT.11 KELURAHAN SURGI MUFTI KECAMATN BANJARMASIN UTARA', 'NURINA HASYYATI MUJAHIDAH', 'JL. SULTAN ADAM KOMP PERKASA INDAH RT.21 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-07', '2022-01-07', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(71, 78, '517/008/SKTU-I/CAM-BU/2021', 'FADHLI KAMIL', '0', '2021-01-07 11:05:16', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG FADHLI KAMIL', 'JL. JAHRI SALEH NO.65 RT.19 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'FADHIL KAMIL', 'JL. JAHRI SALEH NO.65 RT.19 RW.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-07', '2022-01-07', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(72, 79, '517/009/SKTU-I/CAM-BU/2021', 'JAILANI', '081545440736', '2021-01-07 11:23:06', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG JAILANI', 'JL. ALALAK SELATAN RT. 03 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'JAILANI', 'JL. KARANG ANYAR 3 NO.9 RT.02 RW.01 KELURAHAN CINDAI ALUS KECAMATAN MARTAPURA ', 'Perdagangan Barang dan Jasa', '2021-01-07', '2022-01-07', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-07', 4, 'Selesai'),
(73, 80, '517/010/SKTU-I/CAM-BU/2021', 'ELLY HERLINA AGUSTINI, S.Pd', '085249499992', '2021-01-11 11:26:20', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN AL MUHAJIRIN SATU', 'JL. HKSN KOMP. DASAMAYA II BLOK. F NO.66 RT.19 RW.02 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'ELLY HERLINA AGUSTINI, S.Pd', 'JL. HKSN KOMP. DASAMAYA II BLOK. F NO.66 RT.19 RW.02 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-01-11', '2022-01-11', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-11', 4, 'Selesai'),
(74, 81, '517/011/SKTU-I/CAM-BU/2021', 'RAHMAH', '0', '2021-01-12 11:28:57', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KIOS VEIBBY', 'JL. SUNGAI MIAI DALAM RT.12 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'RAHMAH', 'JL. SUNGAI MIAI DALAM RT.12 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-12', '2022-01-12', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-12', 4, 'Selesai'),
(75, 82, '517/012/SKTU-I/CAM-BU/2021', 'JAHRANI', '0', '2021-01-20 11:31:15', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'JAHRANI', 'JL. ANTASAN KECIL TIMUR  NO.16 RT.07 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', 'JAHRANI', 'JL. ANTASAN KECIL TIMUR  NO.16 RT.07 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-20', '2022-01-20', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-20', 4, 'Selesai'),
(76, 83, '517/013/SKTU-I/CAM-BU/2021', 'H. GUSTI SOFYARRAHMAN FUADI', '0', '2021-01-20 11:36:12', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'TOKO / PERCETAKAN DIRGAHAYU', 'JL. SULTAN ADAM RT.22 NO.04  KELURAHAN SURGI MUFTI  KECAMATAN BANJARMASIN UTARA', 'H. GUSTI SOFYARRAHMAN FUADI', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI BLOK. B.I NO.13 RT.32 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-20', '2022-01-20', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-20', 4, 'Selesai'),
(78, 84, '517/014/SKTU-I/CAM-BU/2021', 'ADDINNA WIEDIANI AISYA', '081347025965', '2021-01-26 11:43:41', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN PENDIDIKAN YASSA HARSYA YUDA', 'JL. MESJID JAMI NO.23 RT.01 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'ADDINNA WIEDIANI AISYA', 'JL. SIMPANG GUSTI I NO.14 RT.34 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMAISN UTARA', 'Jasa', '2021-01-26', '2022-01-26', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-26', 4, 'Selesai'),
(79, 85, '517/015/SKTU-I/CAM-BU/2021', 'YUDI', '0', '2021-01-26 11:45:46', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " YUDI "', 'JL. SUNGAI MIAI LUAR NO.45 RT.04 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'YUDI', 'JL. SUNGAI MIAI LUAR NO.45 RT.04 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-26', '2022-01-26', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-26', 4, 'Selesai'),
(80, 86, '517/017/SKTU-I/CAM-BU/2021', 'HJ. SITI HABIBAH', '081256687864', '2021-01-27 11:54:04', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'SALON KECANTIKAN', 'JL. MALKON TEMON RAYA RT.023 NO.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'HJ. SITI HABIBAH', 'JL. ANTASAN KECIL BARAT NO.61 RT.11 RW.01 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', 'Jasa', '2021-01-27', '2022-01-27', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-27', 4, 'Selesai'),
(81, 86, '517/018/SKTU-I/CAM-BU/2021', 'HJ. SITI HABIBAH', '081256687864', '2021-01-27 11:56:46', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KOS - KOSAN', 'JL. MALKON TEMON RAYA RT.23 NO.02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'HJ. SITI HABIBAH', 'JL. ANTASAN KECIL BARAT NO.61 RT.11 RW.01 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', 'Jasa', '2021-01-27', '2022-01-27', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-27', 4, 'Selesai'),
(85, 90, '517/019/SKTU-II/CAM-BU/2021', 'MAIRADI', '0', '2021-01-29 10:28:04', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PERORANGAN " MAIRADI "', 'JL. TEMBUS PERUMNAS NO.33 RT.42 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'MAIRADI', 'JL. MERPATI NO.08 RT.24 KELURAHAN SEMANGAT DALAM', 'Perdagangan Barang', '2021-01-29', '2022-01-29', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-29', 4, 'Selesai'),
(86, 88, '517/020/SKTU-II/CAM-BU/2021', 'DESILESTIA DWI SALMARINI, SST, M.KES', '082153003399', '2021-01-29 10:34:30', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG  " NINA "', 'JL. SMA 8 KOMP. SURYANATA I BLOK. MAWAR RT.26 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', 'DESILESTIA DWI SALMARINI, SST, M.KES', 'JL. GERILYA KOMP. GRAHA MAHATAMA BLOK. III NO.21 RT.24 RW.02 KELURAHAN TANJUNG PAGAR', 'Perdagangan Barang dan Jasa', '2021-01-29', '2022-01-29', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-29', 4, 'Selesai'),
(87, 87, '517/021/SKTU-II/CAM-BU/2021', 'NINA YUNITA', '081952778816', '2021-01-29 10:34:50', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " NINA "', 'JL. PANGLIMA BATUR NO.1/10 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'NINA YUNITA', 'JL. ADHYAKSA NO.21 RT.27 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-29', '2022-01-29', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-29', 4, 'Selesai'),
(88, 89, '517/022/SKTU-II/CAM-BU/2021', 'NURZENAH', '085345161768', '2021-01-29 10:38:14', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DEPOT AIR MINUM NADYA', 'JL. PERDAGANGAN NO.50 RT.24 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'NURZENAH', 'JL. RAYA PERDAGANGAN RT.24 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-01-29', '2022-01-29', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-29', 4, 'Selesai'),
(89, 93, '517/023/SKTU-II/CAM-BU/2021', 'HJ. KUSMA HANIAH', '0', '2021-01-29 11:43:50', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. BORNEO WOODS', 'JL. ALALAK SELATAN RT.04 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'HJ. KUSMA HANIAH', 'JL. SULTAN ADAM RUKO II NO.1 RT.31 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-01-29', '2022-01-29', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-01-29', 4, 'Selesai'),
(90, 94, '517/024/SKTU-II/CAM-BU/2021', 'AKHMAD FAISAL RIZANI', '08170757000', '2021-02-01 11:55:22', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DAPUR WAHDAN', 'JL. ADHYAKSA NO. 03 RT.24 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'AKHMAD FAISAL RIZANI', 'KOMP. PERDAGANGAN PERMAI II KAV.III RT.22 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-01', '2022-02-01', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2022-02-01', 4, 'Selesai');
INSERT INTO `sktu_baru` (`id_sktu`, `id_masyarakat`, `nomor_sktu`, `nama_pemohon`, `no_telp`, `tgl`, `peraturan`, `nama_perusahaan`, `alamat_perusahaan`, `nama_pimpinan_perusahaan`, `alamat_kediaman`, `kegiatan_usaha`, `masa_berlaku_awal`, `masa_berlaku_akhir`, `sifat`, `nama_camat`, `nip`, `jabatan`, `kelengkapan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(91, 95, '517/025/SKTU-II/CAM-BU/2021', 'dr. H. ACHMAD DAMIRI', '0', '2021-02-02 11:17:07', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KLINIK KECANTIKAN DMR', 'JL. BRIGJEN H. HASAN BASRI NO.36 RT.01 KAYUTANGI KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'dr. H. ACHMAD DAMIRI', 'JL. BRIGJEN H. HASAN BASRI NO.36 RT.01 KAYUTANGI KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-02', '2022-02-02', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-02', 4, 'Selesai'),
(92, 92, '517/026/SKTU-II/CAM-BU/2021', 'ABDULLAH AHMAD', '081248351819', '2021-02-03 11:22:46', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'TOKO ALKES SUMBER MEDIKA', 'JL. HASAN BASRI NO.03 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'ABDULLAH AHMAD', 'JL. FLAMBOYAN III NO.89A RT.42 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-03', '2022-02-03', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-03', 4, 'Selesai'),
(93, 68, '517/027/SKTU-II/CAM-BU/2021', 'MUHAMMAD ARFANI', '08179376689', '2021-02-03 11:30:47', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'TOKO MS KOMPUTER', 'JL. BRIG.JEND.H.HASAN BASRI RUKO KAYUTANGI NO.6-B.7 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'MUHAMMAD ARFANI', 'Jl. Perdagangan Komp. Perdagangan Permai I/109 Rt.22 Rw.02 Banjarmasin 70124', 'Perdagangan Barang dan Jasa', '2021-02-03', '2022-02-03', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-03', 4, 'Selesai'),
(94, 96, '517/028/SKTU-II/CAM-BU/2021', 'H. MUSTHAFA', '0', '2021-02-04 11:41:29', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'AMI AWAD ', 'JL. CEMARA RAYA RUKO NO.04 RT.41 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'H. MUSTAFA', 'JL. ANTASAN KECIL TIMUR NO.41 RT.09 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMAISN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-04', '2022-02-04', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-04', 4, 'Selesai'),
(95, 97, '517/029/SKTU-II/CAM-BU/2021', 'ARBAINAH', '081253468885', '2021-02-04 12:47:09', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'JASMINE_STORE', 'JL. SIMPANG GUSTI IV GG. AMALIAH RT.34 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'ARBAINAH', 'JL. SIMPANG GUSTI IV GG.AMALIAH RT.34 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-02-04', '2022-02-04', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-04', 4, 'Selesai'),
(96, 98, '517/030/SKTU-II/CAM-BU/2021', 'ANA NOPIANA NOOR RAHMAH, S.KOM', '089691851818', '2021-02-04 12:57:43', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DELLY HOUSE', 'JL. KAYUTANGI II JALUR UTAMA NO.01 RT.21 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'ANA NOPIANA NOOR RAHMAN', 'JL. SIMPANG BALI I NO.35 RT.08 RW.01 KELURAHAN ANTASAN BESAR KECAMATAN BANJARMASIN TENGAH', 'Perdagangan Barang dan Jasa', '2021-02-04', '2022-02-04', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-04', 4, 'Selesai'),
(97, 99, '517/031/SKTU-II/CAM-BU/2021', 'WINA HARYANTI', '0', '2021-02-05 12:55:27', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'TOKO OBAT KASIH IBU', 'JL. SUNGAI MIAI DALAM NO.28 RT.09 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'WINA HARYANTI', 'JL. SULTAN ADAM KOMPLEK MAHLIGAI BLOK.C NO.13 RT.12 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-02-05', '2022-02-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(98, 100, '517/032/SKTU-II/CAM-BU/2021', 'H. HUSEIN ACHMAD', '0', '2021-02-05 12:59:13', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PJ. PUCUK SIRIH', 'JL. TEMBUS MUSEUM NO.36 RT.13 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', 'H. HUSEIN ACHMAD', 'JL. TEMBUS MUSEUM NO.36 RT.13 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-02-05', '2022-02-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(99, 101, '517/033/SKTU-II/CAM-BU/2021', 'N. WARNIDAH', '0', '2021-02-05 13:51:05', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " BARJAWI "', 'JL. AGATHIS II NO.35 B RT.41 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'N. WARNIDAH', 'JL. AGATHIS II NO.35 B RT.41 RW. 03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-02-05', '2022-02-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(100, 103, '517/034/SKTU-II/CAM-BU/2021', 'ARJUNADI', '0', '2021-02-05 13:11:16', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. SUMBER JAYA', 'JL. ALALAK TENGAH RT.08 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJRMASIN UTARA', 'ARJUNADI', 'JL. ALALAK TENGAH NO.11 RT.09 RW.02 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-05', '2022-02-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(101, 104, '517/035/SKTU-II/CAM-BU/2021', 'H. YUSRAN', '0', '2021-02-05 13:21:30', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. GUNA LIMBAH', 'JL. ALALAK TENGAH RT.07 RW.02 KWLURAHAN ALALAK TENGAH KECAMATAN BANJARMAISN UTARA', 'H. YUSRAN', 'JL.  ALALAK TENGAH NO. 49 R.08 RW.02 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN ', 'Perdagangan Barang dan Jasa', '2021-02-05', '2022-02-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-05', 4, 'Selesai'),
(102, 105, '517/036/SKTU-II/CAM-BU/2021', 'NORMARUSIDAH', '0', '2021-02-08 14:00:55', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " R3S', 'JL. PERDAGANGAN KOMP. HKSN PERMAI BLOK. II D NO. 568 RT.30 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'NORMARUSIDAH', 'JL. CEMARA RAYA AKASIA 2 NO.04 RT.37 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-08', '2022-02-08', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-08', 4, 'Selesai'),
(103, 102, '517/037/SKTU-II/CAM-BU/2021', 'RIANDHI FIRDAUS, A.Md', '082127543045', '2021-02-08 14:00:29', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " R3S', 'JL. SULTAN ADAM KOMP. H. IYUS PGRI BLOK.A NO.06 RT.23 RW.02 KELURAHAN SUNGAI JINGAH KECAMATAN BANJARMASIN UTARA', 'RIANDHI FIRDAUS, A.Md', 'JL.PRONA I KOMP. BUMI BANGUNAN JAYA/41A RT.10 RW. 01 KELURAHAN PEMURUS BARU KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-09', '2022-02-09', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-08', 4, 'Selesai'),
(106, 107, '517/038/SKTU-II/CAM-BU/2021', 'FITRI RAHMADANI', '0', '2021-02-10 09:34:07', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KOST PUTRI AZALELA', 'JL. KAYUTANGI II JALUR IV RT.21 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'FITRI RAHMADANI', 'JL. K.S. TUBUN GG. IV / KELUARGA NO.19 RT.20 RW.02 KELURAHAN KELAYAN BARAT KECAMATAN BANJARMASIN SELATAN', 'Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(107, 108, '517/039/SKTU-II/CAM-BU/2021', 'MUHAMMAD KAMIL', '0811510000', '2021-02-10 09:44:20', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN BAABUSSALAM', 'JL. SULTAN ADAM KOMP. ANDIKA NO.07 RT.15 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'MUHAMMAD KAMIL', 'JL. SULTAN ADAM KOMP. ANDIKA NO.07 RT.15 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(108, 109, '517/040/SKTU-II/CAM-BU/2021', 'HJ. JUHRIAH', '081351094200', '2021-02-10 09:57:51', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'ADANA MART', 'JL. ADHYAKSA RAYA NO.07 RT.27 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', 'HJ. JUHRIAH', 'JL. H.HASAN BASRI KOMP. PONDOK METRO INDAH B13 RT.39 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2022-02-10', 4, 'Selesai'),
(109, 110, '517/041/SKTU-II/CAM-BU/2021', 'NUR INAYAH', '0', '2021-02-10 10:15:30', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KIOS DAFFA', 'JL. HKSN GG. SWADAYA TANI NO. 186 RT.10 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'NUR INAYAH', 'JL. ALALAK SELATAN RT.08 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMAISN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(110, 111, '517/042/SKTU-II/CAM-BU/2021', 'ABDUL WAHID, S.KOM', '0', '2021-02-10 11:01:46', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'RDP MOTOR N HELM WASH', 'JL. HKSN KOMP. AMD PERMAI BLOK.A20 NO.397 RT.24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMAISN UTARA', 'ABDUL WAHID, S.KOM', 'JL. HKSN KOMP. AMD PERMAI BLOK.B10 NO.257 RT.22 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(111, 112, '517/043/SKTU-II/CAM-BU/2021', 'EUIS AULIA, S.KOM', '0', '2021-02-10 12:40:08', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'RDP', 'JL. HKSN KOMP. AMD PERMAI BLOK A.20 NO.397 RT.24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMAISN UTARA', 'EUIS AULIA, S.KOM', 'JL. HKSN KOMP. AMD PERMAI BLOK B.10 NO.257 RT.22 RW.02 KELUAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(112, 113, '517/044/SKTU-II/CAM-BU/2021', 'NUGROHO RUSLI', '082154601666', '2021-02-10 13:41:01', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'HOTEL WISATA', 'JL. BRIGJEN HASAN BASRI NO.70 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'NUGROHO RUSLI', 'JL. VETERAN NO.20 RT.11 RW.02 KELURAHAN MELAYU KECAMATAN BANJARMASIN TENGAH', 'Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(113, 114, '517/045/SKTU-II/CAM-BU/2021', 'SITI MUGARI', '081349339879', '2021-02-10 13:47:01', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KIOS ANUGERAH', 'JL. SIMPANG GUSTI KOMP. MUTIARA EKSEKUTIF RT.32 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'SITI MUGARI', 'JL. SIMPANG GUSTI KOMP. MUTIARA EKSEKUTIF RT.32 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-10', '2022-02-10', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-10', 4, 'Selesai'),
(117, 115, '517/046/SKTU-II/CAM-BU/2021', 'MARKANI. H', '0', '2021-02-11 11:52:03', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. HARAPAN BELITUNG JAYA', 'JL. ALALAK TENGAH RT.03 RW.01 KELURAHAN ALALAK TENGAH KECAMATAN BANJARMASIN UTARA', 'MARKANI. H', 'JL. KUIN SELATAN GG. INDRAJAYA RT.05 RW.01 KELURAHAN KUIN CERUCUK KECAMATAN BANJARMASIN BARAT', 'Perdagangan Barang dan Jasa', '2021-02-11', '2022-02-11', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-11', 4, 'Selesai'),
(118, 118, '517/047/SKTU-II/CAM-BU/2021', 'AKHMAD RIADI, SE', '0', '2021-02-15 10:41:25', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'MINI MARKET ANDRE SASA', 'JL. PADAT KAYA RT.12 KELUARAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'AKHMAD RIADI, SE', 'JL. SULAWESI NO.52 RT.16 RW.02 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', 'Perdagangan Barang', '2021-02-15', '2022-02-15', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(119, 119, '517/048/SKTU-II/CAM-BU/2021', 'DAHNIAR ARIANI, HJ', '0', '2021-02-15 11:03:03', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DAHNIAR ARIANI, HJ', 'JL. JAHRI SALEH RT.19 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'DAHNIAR ARIANI', 'JL. JAHRI SALEH RT.19 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-02-15', '2022-02-15', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(120, 120, '517/049/SKTU-II/CAM-BU/2021', 'IMAM RAMADHAN,  A.Md', '0', '2021-02-15 12:57:42', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. RMD MANDIRI GROUP', 'JL. ALALAK SELATAN RT.05 RW.01 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA', 'IMAM RAMADHAN, A.Md', 'JL. ANTASAN KECIL TIMUR GG. JAMALUDIN 2 RT.05 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-15', '2022-02-15', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-15', 4, 'Selesai'),
(124, 127, '517/050/SKTU-II/CAM-BU/2021', 'SUKARJAN, H', '0', '2021-02-16 14:50:32', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. FAUZAN ', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI  BLOK B.3 NO. 70 RT.32 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', 'SUKARJAN, H', 'JL. SULTAN ADAM KOMP. MANDIRI LESTARI  BLOK B.3 NO. 70 RT.32 RW.03 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-16', '2022-02-16', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(125, 128, '517/051/SKTU-II/CAM-BU/2021', 'RUSMIN NURYADIN', '085346568637', '2021-02-16 15:00:30', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'DEPOT BUNDA FLAMBOYAN', 'JL. FLAMBOYAN KAYUTANGI NO. 55 RT.42 RW. 01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'RUSMIN NURYADIN', 'JL. FLAMBOYAN II RT.42 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', 'Perdagangan Barang', '2021-02-16', '2022-02-16', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(126, 129, '517/052/SKTU-II/CAM-BU/2021', 'NUGRAHA KUSUMA', '08115000866', '2021-02-16 15:04:40', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'ROTASI KOPI', 'JL. FLAMBOYAN I RT.42 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'NUGRAHA KUSUMA', 'JL. PULAU LAUT RT.04 RW.01 KELURAHAN ANTASAN BESAR KECAMATAN BANJARMASIN TENGAH', 'Perdagangan Barang', '2021-02-16', '2022-02-16', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-16', 4, 'Selesai'),
(127, 130, '517/053/SKTU-II/CAM-BU/2021', 'DEDY PRIHANTORO, ST', '081251099569', '2021-02-17 12:02:35', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN DAKWAH BINA INSANI', 'JL. SUNGAI ANDAI KOMP. BUMI INDAH LESTARI II/26 RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'DEDY PRIHANTORO, ST', 'JL. SUNGAI ANDAI KOMP. BUMI INDAH LESTARI II/26 RT.02 RW.01 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(128, 131, '517/054/SKTU-II/CAM-BU/2021', 'HAIRRULLAH', '0', '2021-02-17 14:09:21', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'D KEBAB', 'JL. SULTAN ADAM RAYA RT.16 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'HAIRRULLAH', 'JL. SULTAN ADAM KOMP. KADAR PERMAI IV NO.32 RT.16 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(129, 132, '517/055/SKTU-II/CAM-BU/2021', 'HASBI ELKHAIRI, S.Pd', '0', '2021-02-17 14:15:11', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KEBAB UMI SALAMAH', 'JL. CEMARA RAYA KOMP. FLAMBOYAN I RT.42 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'HASBI ELKHAIRI, S.Pd', 'JL. SULTAN ADAM KOMP. KADAR PERMAI IV NO.32 RT.16 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(130, 133, '517/056/SKTU-II/CAM-BU/2021', 'HUSAINI SUNI', '085332534999', '2021-02-17 14:22:03', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " HUSAINI SUNI "', 'JL. SWADAYA TANI NO.79 RT.10 RW.01 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'HUSAINI SUNI', 'JL. A. YANI KM. 7.900 KOMP. ANGGRAINI NO.03 RT.03 RW.01 KELURAHAN MANARAP LAMA KECAMATAN KERTAK HANYAR', 'Perdagangan Barang dan Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(131, 134, '517/057/SKTU-II/CAM-BU/2021', 'YULIYANTI', '085347623888', '2021-02-17 14:25:22', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YULIA MUSLIMAH SALON DAN SPA', 'JL. CEMARA RAYA BLOK V ANGSANA RAYA NO.01 RT.24 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMAISN UTARA', 'YULIYANTI', 'JL. ANGSANA RAYA NO.01 RT.24 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai'),
(132, 135, '517/058/SKTU-II/CAM-BU/2021', 'FITRIA, S.Far, APT', '081933755031', '2021-02-17 14:35:57', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'APOTEK NAMIRA', 'JL. CEMARA RAYA NO.22 KAYUTANGI RT.41 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'FITRIA, S.Far, APT', 'JL. CEMARA RAYA NO.22 KAYUTANGI RT.41 RW.03 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-17', '2022-02-17', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-17', 4, 'Selesai');
INSERT INTO `sktu_baru` (`id_sktu`, `id_masyarakat`, `nomor_sktu`, `nama_pemohon`, `no_telp`, `tgl`, `peraturan`, `nama_perusahaan`, `alamat_perusahaan`, `nama_pimpinan_perusahaan`, `alamat_kediaman`, `kegiatan_usaha`, `masa_berlaku_awal`, `masa_berlaku_akhir`, `sifat`, `nama_camat`, `nip`, `jabatan`, `kelengkapan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(133, 136, '517/059/SKTU-II/CAM-BU/2021', 'MAHLIANI, S.Pd', '0', '2021-02-18 11:38:37', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KPN SEJAHTERA SMKN 4 BANJARMASIN', 'JL. BRIGJEN H. HASAN BASRI NO.07 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN', 'MAHLIANI, S.Pd', 'JL. NAKULA III NO. 14 RT.25 RW.03 KEURAHAN PEMURUS DALAM KECAMATAN BANJARMAISN SELATAN', 'Perdagangan Barang dan Jasa', '2021-02-18', '2022-02-18', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-18', 4, 'Selesai'),
(134, 137, '517/060/SKTU-II/CAM-BU/2021', 'MUHAMAD REZKY', '0', '2021-02-19 11:05:07', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'TK HARAPAN BUNDA', 'JL. SUNGAI ANDAI KOMP. HERLINA PERKASA BAWANG MERAH NO.39/41 RT.65 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'MUHAMAD REZKY', 'JL. KURIPAN GG.V RT.03 RW.01 KELURAHAN KURIPAN KECAMATAN BANJARMASIN TIMUR', 'Perdagangan Barang dan Jasa', '2021-02-19', '2022-02-19', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-19', 4, 'Selesai'),
(136, 138, '517/061/SKTU-II/CAM-BU/2021', 'M. RIZKI ARIYANI', '0', '2021-02-19 11:22:55', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KANTAN FOOD', 'JL. CENGKEH JL. UTAMA RT.69 KELURAHAN SUNGAI ANDAI KECAMATAN BANJARMASIN UTARA', 'M. RIZKI ARIYANI', 'JL. SUNGAI GAMPA ASAHI RT.11 KELURAHAN SUNGAI GAMPA ASAHI KECAMATAN BANJARMASIN RANTAU BADAUH', 'Perdagangan Barang dan Jasa', '2021-02-19', '2022-02-19', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-19', 4, 'Selesai'),
(137, 126, '517/065/SKTU-II/CAM-BU/2021', 'AKHMAD WAHYUDI', '081349711407', '2021-02-23 11:57:57', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'ADE FOTOCOPY', 'JL. SULTAN ADAM RT. 18 RW. 02 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'AKHMAD WAHYUDI', 'JALAN PERDAGANGAN KOMPLEK HKSN PERMAI BLOK 10C / 73 RT. 29 RW. 02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-23', '2022-02-23', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-23', 4, 'Selesai'),
(138, 139, '517/062/SKTU-II/CAM-BU/2021', 'GUSTI SUPRIADY RIZALI', '085101339339', '2021-02-22 11:25:49', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'YAYASAN HARAPAN BANGSA', 'JL. CENDANA 1 NO.06 RT.01 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARAMASIN UTARA', 'GUSTI SUPRIADY RIZALI', 'JL. SULTAN ADAM KOMP. H. IDRIS JALUR I NO.10 RT.13 RW.02 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASN UTARA', 'Jasa', '2021-02-23', '2022-02-23', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-22', 4, 'Selesai'),
(139, 140, '517/063/SKTU-II/CAM-BU/2021', 'HELNA YULIA RAHAYU, ST', '082143159872', '2021-02-22 11:39:02', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'HELNA YULIA RAHAYU, ST', 'JL. KAYUTANGI II JALUR I NO.23A RT.16 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'HELNA YULIA RAHAYU, ST', 'JL. KAYUTANGI II JALUR I NO.23A RT.16 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-23', '2022-02-23', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-22', 4, 'Selesai'),
(142, 141, '517/064/SKTU-II/CAM-BU/2021', 'H. JAPAR', '0', '2021-02-23 11:48:18', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. SUNDARI', 'JL. HKSN KOMP. AMD PERMAI BLOK.A 18 NO.349 RT.24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'H. JAPAR', 'JL. HKSN KOMP. AMD PERMAI BLOK.A 18 NO.349 RT.24 RW.02 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-23', '2022-02-23', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-23', 4, 'Selesai'),
(143, 143, '517/066/SKTU-II/CAM-BU/2021', 'ROSMILAWATY', '081343494201', '2021-02-25 12:54:59', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UPPKS KAYUTANGI 3', 'JL. SUNGAI MIAI DALAM NO.13 RT.05 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'ROSMILAWATY', 'JL. SUNGAI MIAI DALAM NO.13 RT.05 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-02-25', '2022-02-25', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-25', 4, 'Selesai'),
(144, 144, '517/067/SKTU-II/CAM-BU/2021', 'HADIJATUL MUKARRAMAH, HJ', '085251617533', '2021-02-26 11:24:22', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'APOTIK LALLYSA', 'JL. MESJID JAMI NO.29 RT.03 RW.01 KELURAHAN ANTASAN KECIL TIMUR KECAMATAN BANJARMASIN UTARA', 'HADIJATUL MUKARRAMAH, HJ', 'JL. SULAWESI NO.15 B RT.20 RW.01 KELURAHAN PASAR LAMA KECAMATAN BANJARMASIN TENGAH', 'Perdagangan Barang', '2021-02-26', '2022-02-26', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Proses sesuai prosedur', '2021-02-26', 4, 'Selesai'),
(145, 145, '517/068/SKTU-III/CAM-BU/2021', 'SAID ALI, SE', '0', '2021-03-01 10:56:09', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " SAID ALI "', 'JL. MESJID JAMI NO.38 RT.01 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMAISN UTARA', 'SAID ALI, SE', 'JL. MESJID JAMI NO.38 RT.01 RW.01 KELURAHAN SURGI MUFTI KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-03-01', '2022-03-01', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'Siap Diambil', '2021-03-01', 4, 'Selesai'),
(146, 146, '517/069/SKTU-III/CAM-BU/2021', 'HJ. HERLINA AHMAD', '0', '2021-03-01 11:36:23', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'STAR NET', 'JL. HKSN KOMP. AMD PERMAI RUKO NO.05 RT.22 RW.02 KELURAHAN ALALAK SELATAN KECAMATAN BANJARMASIN UTARA ', 'HJ. HERLINA AHMAD', 'JL. KARYA SABUMI II NO.11A RT.17 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'Jasa', '2021-03-01', '2022-03-01', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-01', 4, 'Selesai'),
(147, 147, '517/070/SKTU-III/CAM-BU/2021', 'IRADAH HIDAYANI', '085346568637', '2021-03-01 09:21:07', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KOS RAISYA', 'JL. BRIGJEN H. HASAN BASRI KOMP. KAYUTANGI II JALUR VI RT.21 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'IRADAH HIDAYANI', 'JL. YOS SUDARSO KOMP. AIRMANTAN GG.66 RT.32 RW.03 KELURAHAN TELAGA BIRU KECAMATAN BANJARMASIN BARAT', 'Jasa', '2021-03-01', '2022-03-01', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-01', 4, 'Selesai'),
(148, 148, '517/071/SKTU-III/CAM-BU/2021', 'IBERAHIM', '0', '2021-03-02 11:27:38', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " BERKAT GURU "', 'JL. KUIN UTARA RT.07 RW.01 KLEURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'IBERAHIM', 'JL. KUIN UTARA NO.115 RT.07 RW.01 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-03-02', '2022-03-02', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-02', 4, 'Selesai'),
(149, 149, '517/072/SKTU-III/CAM-BU/2021', 'NURIFANSYAH HASBI', '081346632013', '2021-03-02 12:01:44', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'UD. RAISA', 'JL. PERDAGANGAN NO.09 RT.22 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'NURIFANSYAH HASBI', 'JL. 9 NOPEMBER RT.10 RW.01 KELURAHAN BENUA ANYAR KECAMATAN BANJARMASIN TIMUR', 'Perdagangan Barang dan Jasa', '2021-03-02', '2022-03-02', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-02', 4, 'Selesai'),
(150, 150, '517/073/SKTU-III/CAM-BU/2021', 'SRI WULANDARI, SH. MH', '08125071358', '2021-03-02 12:05:44', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'KOST RAISA', 'JL. PERDAGANGAN RT.22 RW.02 KELURAHAN PANGERAN KECAMATAN BANJARMASIN UTARA', 'SRI WULANDARI, SH. MH', 'JL. JAMRUD I KOMP GRIYA PERMATA RT.11 RW.03 KELURAHAN HANDIL BAKTI KECAMATAN ALALAK KABUPATEN BARITO KUALA', 'Jasa', '2021-03-02', '2022-03-02', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-02', 4, 'Selesai'),
(151, 151, '517/074/SKTU-III/CAM-BU/2021', 'MUSLIK SULAKSONO, SE', '081349378910', '2021-03-03 12:07:19', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " MUSLIK SULAKSONO "', 'JL. HKSN KOMP. SURYA GEMILANG BLOK P RT.21 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'MUSLIK SULAKSONO, SE', 'JL. HKSN KOMP. SURYA GEMILANG BLOK P RT.21 RW.02 KELURAHAN KUIN UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-03-03', '2022-03-03', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-03', 4, 'Selesai'),
(152, 152, '517/075/SKTU-III/CAM-BU/2021', 'AGUS SUPRIADI', '0', '2021-03-03 12:16:26', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PERORANGAN " AGUS "', 'JL. CEMARA UJUNG KAYUTANGI RT.46 RW.03  KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'AGUS SUPRIADI', 'JL. CEMARA UJUNG KAYUTANGI RT.46 RW.03 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang dan Jasa', '2021-03-03', '2022-03-03', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-03', 4, 'Selesai'),
(153, 153, '517/076/SKTU-III/CAM-BU/2021', 'ABDUL AZIZ FATRASUKMA WAAS', '081545423477', '2021-03-04 10:52:03', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'MILTIE GARDEN', 'JL. ADHYAKSA RAYA RT.27 RW.01 KELURAHANSUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'ABDUL AZIZ FATRASUKMA WAAS', 'JL. MAHLIGAI KOMP. ISTANA AL FAZA NO.8C RT.06 RW.02 KELURAHAN KERTAK HANYAR II KECAMATAN KERTAK HANYAR', 'Perdagangan Barang dan Jasa', '2021-03-04', '2022-03-04', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-04', 4, 'Selesai'),
(154, 154, '517/077/SKTU-III/CAM-BU/2021', 'RIKA ANANDA', '081251300988', '2021-03-05 09:31:00', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'PANGKALAN GAS LPG 3 KG " ANANDA "', 'JL. ALALAK UTARA NO.05 RT.16 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'RIKA ANANDA', 'JL. ALALAK UTARA NO.05 RT.16 KELURAHAN ALALAK UTARA KECAMATAN BANJARMASIN UTARA', 'Perdagangan Barang', '2021-03-05', '2022-03-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-05', 4, 'Selesai'),
(155, 155, '517/078/SKTU-III/CAM-BU/2021', 'ARMAYANI', '081250884466', '2021-03-05 09:38:12', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 98 Tahun 2019 tentang Standar Pelayanan pada Kecamatan</li></ol>', 'LKP TRIYO', 'JL. BRIGJEN H.HASAN BASRI NO.61 RT.02 RW.01 KELURAHAN SUNGAI MIAI KECAMATAN BANJARMASIN UTARA', 'ARMAYANI', 'JL. PRAMUKA KOMP. MELATI INDAH VI NO.20 RT.10 RW.02 KELURAHAN PEMURUS LUAR KECAMATAN BANJARMASIN TIMUR', 'Jasa', '2021-03-05', '2022-03-05', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', '', '2021-03-05', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `sktu_perpanjangan`
--

CREATE TABLE `sktu_perpanjangan` (
  `id_sktu` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `nomor_sktu` varchar(50) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `tgl` datetime NOT NULL,
  `peraturan` longtext NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `nama_pimpinan_perusahaan` varchar(50) NOT NULL,
  `alamat_kediaman` text NOT NULL,
  `kegiatan_usaha` varchar(50) NOT NULL,
  `masa_berlaku_awal` date DEFAULT NULL,
  `masa_berlaku_akhir` date DEFAULT NULL,
  `sifat` varchar(30) NOT NULL,
  `nama_camat` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `kelengkapan` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `tgl_selesai` date DEFAULT NULL,
  `id_posisi` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `nip`, `jabatan`, `username`, `password`, `id_role`) VALUES
(1, 'admin', '1234', 'admin', 'admin', '$2y$10$hSzB0aZjowEtvpWQ5cb8meN0ji3F5ypSGe9R..feR4b0i.0Q0KOpu', 1),
(3, 'Naimah, SE', '197810272009012001', 'Kepala Seksi', 'kasi', '$2y$10$C4/Lv0OmJP41G9XpzjichegM9mCmuAOrDXvkpFmjEWJc2R0B0v7Oq', 4),
(4, 'Noorahmawati, S. AP', '63030123456789', 'Sekretaris Camat', 'sekcam', '$2y$10$mvHZMx.ORdnk.x/YQVs/.eNFboMLlfiVjyfbea91tRJK42lZvserC', 8),
(5, 'Staf Kasi', '98648676523536365753', 'Staf Pelayanan', 'staf', '$2y$10$nRmEqITE41hzXzAzg7V.VesaNOF3SGIcwihmULvwvZb7xmJD8pHL.', 9),
(6, 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'camat', '$2y$10$dO9PEC4SpBlWOACr2heqJ.yoG0RFdsAZH1CJ/mYE2pLeIGwQF9YeO', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahli_waris`
--
ALTER TABLE `ahli_waris`
  ADD PRIMARY KEY (`id_ahli_waris`);

--
-- Indexes for table `blanko`
--
ALTER TABLE `blanko`
  ADD PRIMARY KEY (`id_blanko`);

--
-- Indexes for table `camat`
--
ALTER TABLE `camat`
  ADD PRIMARY KEY (`id_camat`);

--
-- Indexes for table `iumk`
--
ALTER TABLE `iumk`
  ADD PRIMARY KEY (`id_iumk`);

--
-- Indexes for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indexes for table `lampiran_iumk`
--
ALTER TABLE `lampiran_iumk`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `lampiran_iumk_file`
--
ALTER TABLE `lampiran_iumk_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `lampiran_sktu`
--
ALTER TABLE `lampiran_sktu`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `lampiran_sktu_file`
--
ALTER TABLE `lampiran_sktu_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `legalisasi_imb`
--
ALTER TABLE `legalisasi_imb`
  ADD PRIMARY KEY (`id_imb`);

--
-- Indexes for table `legalisasi_izin_tower`
--
ALTER TABLE `legalisasi_izin_tower`
  ADD PRIMARY KEY (`id_izin_tower`);

--
-- Indexes for table `legalisasi_proposal`
--
ALTER TABLE `legalisasi_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indexes for table `nomor_urut_iumk`
--
ALTER TABLE `nomor_urut_iumk`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `nomor_urut_sktu`
--
ALTER TABLE `nomor_urut_sktu`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `peraturan_iumk`
--
ALTER TABLE `peraturan_iumk`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `peraturan_sktu`
--
ALTER TABLE `peraturan_sktu`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`id_polling`);

--
-- Indexes for table `posisi_berkas`
--
ALTER TABLE `posisi_berkas`
  ADD PRIMARY KEY (`id_posisi`);

--
-- Indexes for table `rekomendasi_pendirian_paud`
--
ALTER TABLE `rekomendasi_pendirian_paud`
  ADD PRIMARY KEY (`id_rpp`);

--
-- Indexes for table `riwayat_tgl_sktu`
--
ALTER TABLE `riwayat_tgl_sktu`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sktu_baru`
--
ALTER TABLE `sktu_baru`
  ADD PRIMARY KEY (`id_sktu`);

--
-- Indexes for table `sktu_perpanjangan`
--
ALTER TABLE `sktu_perpanjangan`
  ADD PRIMARY KEY (`id_sktu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahli_waris`
--
ALTER TABLE `ahli_waris`
  MODIFY `id_ahli_waris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `blanko`
--
ALTER TABLE `blanko`
  MODIFY `id_blanko` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `camat`
--
ALTER TABLE `camat`
  MODIFY `id_camat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `iumk`
--
ALTER TABLE `iumk`
  MODIFY `id_iumk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `lampiran_iumk`
--
ALTER TABLE `lampiran_iumk`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lampiran_iumk_file`
--
ALTER TABLE `lampiran_iumk_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `lampiran_sktu`
--
ALTER TABLE `lampiran_sktu`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `lampiran_sktu_file`
--
ALTER TABLE `lampiran_sktu_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=996;
--
-- AUTO_INCREMENT for table `legalisasi_imb`
--
ALTER TABLE `legalisasi_imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `legalisasi_izin_tower`
--
ALTER TABLE `legalisasi_izin_tower`
  MODIFY `id_izin_tower` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `legalisasi_proposal`
--
ALTER TABLE `legalisasi_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=390;
--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `nomor_urut_iumk`
--
ALTER TABLE `nomor_urut_iumk`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nomor_urut_sktu`
--
ALTER TABLE `nomor_urut_sktu`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peraturan_iumk`
--
ALTER TABLE `peraturan_iumk`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `peraturan_sktu`
--
ALTER TABLE `peraturan_sktu`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `polling`
--
ALTER TABLE `polling`
  MODIFY `id_polling` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `posisi_berkas`
--
ALTER TABLE `posisi_berkas`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rekomendasi_pendirian_paud`
--
ALTER TABLE `rekomendasi_pendirian_paud`
  MODIFY `id_rpp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat_tgl_sktu`
--
ALTER TABLE `riwayat_tgl_sktu`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sktu_baru`
--
ALTER TABLE `sktu_baru`
  MODIFY `id_sktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
--
-- AUTO_INCREMENT for table `sktu_perpanjangan`
--
ALTER TABLE `sktu_perpanjangan`
  MODIFY `id_sktu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
