-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 03:49 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `layanan_kecamatan`
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
(2, '2020-06-16', 'argarga', 'hrthr', 'hdrh', 'rhdrhdr', '2020-06-16', 'Proses Selesai', '2020-07-05', 4, 'Selesai'),
(4, '2020-06-24', 'Alalak Selatan', 'alm nya', 'Tomi', 'Banjarbaru', '2020-06-24', 'Proses Selesai', '2020-07-05', 4, 'Selesai');

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
(1, 'Udin, SH', '345678', 'Pembina TK 2', '2015-05-21', '2020-05-21', 'Non-Aktif'),
(3, 'Anang', '123', 'Pembina TK 1', '2020-05-21', '2025-05-21', 'Non-Aktif'),
(4, 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', '2018-01-19', '2023-01-19', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `iumk`
--

CREATE TABLE `iumk` (
  `id_iumk` int(11) NOT NULL,
  `id_masyarakat` int(11) NOT NULL,
  `nomor_iumk` varchar(30) NOT NULL,
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
(3, 'Jasa');

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
(6, 'alalak'),
(10, 'Kuin Selatan'),
(13, 'afafafa'),
(16, 'argarga'),
(17, 'argagar'),
(18, 'fgadfgadgfa'),
(19, 'Kuin Utara');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_iumk`
--

CREATE TABLE `lampiran_iumk` (
  `id_lampiran` int(11) NOT NULL,
  `nama_lampiran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_iumk`
--

INSERT INTO `lampiran_iumk` (`id_lampiran`, `nama_lampiran`) VALUES
(1, 'Fotocopy KTP'),
(2, 'Fotocopy Lunas PBB Berjalan');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_iumk_file`
--

CREATE TABLE `lampiran_iumk_file` (
  `id_file` int(11) NOT NULL,
  `id_lampiran` int(11) NOT NULL,
  `nomor_iumk` varchar(50) NOT NULL,
  `file` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sktu`
--

CREATE TABLE `lampiran_sktu` (
  `id_lampiran` int(11) NOT NULL,
  `nama_lampiran` text NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sktu`
--

INSERT INTO `lampiran_sktu` (`id_lampiran`, `nama_lampiran`, `keterangan`) VALUES
(1, 'Fotocopy KTP', 'Baru'),
(2, 'Fotocopy Akta Pendirian Yayasan/Koperasi/Lembaga', 'Baru'),
(3, 'Fotocopy Rekening PDAM', 'Baru'),
(4, 'Fotocopy SKTU Lama', 'Perpanjangan'),
(5, 'Fotocopy Lunas PBB Berjalan', 'Perpanjangan');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran_sktu_file`
--

CREATE TABLE `lampiran_sktu_file` (
  `id_file` int(11) NOT NULL,
  `id_lampiran` int(11) NOT NULL,
  `nomor_sktu` varchar(50) NOT NULL,
  `file` longtext NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `file_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran_sktu_file`
--

INSERT INTO `lampiran_sktu_file` (`id_file`, `id_lampiran`, `nomor_sktu`, `file`, `keterangan`, `file_count`) VALUES
(55, 1, '513/001/SKTU-V/CAM-BU/2020', '34314.png', 'Baru', NULL),
(56, 2, '513/001/SKTU-V/CAM-BU/2020', '59146.png', 'Baru', NULL),
(57, 3, '513/001/SKTU-V/CAM-BU/2020', '66757.jpg', 'Baru', NULL),
(58, 4, '513/001/SKTU-V/CAM-BU/2020', '22022.png', 'Perpanjangan', 1),
(59, 5, '513/001/SKTU-V/CAM-BU/2020', '62698.jpg', 'Perpanjangan', 1);

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
(2, '2020-06-17', 'Alalak Selatan', 'gusti', 'berangas', 'banjarmasin', '-', NULL, 1, 'Belum Diproses'),
(3, '2020-06-24', 'Alalak Selatan', 'rtrbsrb', 'sdbsfbsb', 'dbsdbsdbsdb', 'Proses Selesai', '2020-07-05', 4, 'Selesai'),
(4, '2020-06-25', 'Alalak Selatan', 'Angga', 'Banjarbaru', 'Banjarbaru', 'Belum tuntung', NULL, 2, 'Dalam Proses');

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

--
-- Dumping data for table `legalisasi_izin_tower`
--

INSERT INTO `legalisasi_izin_tower` (`id_izin_tower`, `tgl_permohonan`, `kelurahan`, `nama_pemohon`, `alamat_pemohon`, `nama_perusahaan`, `alamat_perusahaan`, `lokasi_tower`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(2, '2020-06-17', 'Alalak Selatan', 'julak utuh', 'kandangan', 'perusahaan utuh', 'perusahaan utuh', 'kandangan', 'Proses Selesai', '2020-07-05', 4, 'Selesai'),
(3, '2020-06-25', 'Alalak Utara', 'ujang', 'bandung', 'kicimpring family', 'kicimpring family', 'Banjarmasin', '-', NULL, 1, 'Belum Diproses'),
(4, '2020-07-05', 'Alalak Utara', 'Arul', 'bsdhbsfhsfh', 'hgsfhfsh', 'hgsfhfsh', 'dfhdhdfh', 'Proses Selesai', '2020-07-05', 4, 'Selesai');

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
(12, 'utuh julak', 'minta dana bantuan', '2020-06-10', NULL, 1, 'Belum Diproses'),
(13, 'ada', 'hahaha', '2020-06-10', NULL, 2, 'Dalam Proses'),
(14, 'tes', 'tes', '2020-06-25', '2020-07-05', 4, 'Selesai'),
(15, 'ggbdsb', 'fbdsbdsfb', '2020-07-05', '2020-07-05', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` int(25) NOT NULL,
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
(1, 'Gusti', 123, 'Berangas', '2020-06-21', 'Laki-laki', 'Islam', '0987654323456', 'Jl. Berangas Rt. 06', '$2y$10$OzU6t..tySlkSyGQ1wZnj.eEoJmu5PD3Cg/o3KB9L7jNqfnV2IF.G'),
(6, 'Wahab', 1234567890, 'Banjarmasin', '2020-06-27', 'Laki-laki', 'Islam', '1234567890', 'Banjarmasin', '$2y$10$UTW83H7OyDeiXjjQa/K3BerDaYfq765bt7hjF3QA7c4bCHVPPkUMa'),
(7, 'Muhammad Sahruji', 456, 'Banjarmasin', '1980-06-27', 'Laki-laki', 'Islam', '0987654321', 'Banjarmasin', '$2y$10$Faa0R/fXmUe4C7M/AGHLHeIFKO1dwG9hXc/rw/i0PVlKNBxcEsO32'),
(8, 'amat', 789, 'banjarmasin', '2020-06-28', 'Laki-laki', 'Islam', '0809734523947', 'Banjarmasin', '$2y$10$PFCR7xRXybsSMcZYQOnNg.IHe.G6hrl4kagAPl6GxDdog6svCrmLe'),
(9, 'tomi', 12345, 'banjarbaru', '1997-07-06', 'Laki-laki', 'Islam', '098765432345', 'Banjarbaru', '$2y$10$s/3RkQQ6XRLzgHz3ZQYJv.xciTR9ZRSVYokTcExfWefIud53MKxVC');

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
(1, '<p>Berdasarkan Peraturan Presiden Nomor 98 Tahun 2014 tentang Perizinan Untuk Mikro dan Kecil (Lembar Negara Republik Indonesia Tahun 2014 nomor 222);&nbsp; Peratura Menteri Dalam Negeri Republik Indonesia Nomor 83 Tahun 2014 tentang Pedoman Pemberian Izin Usaha Mikro dan Kecil; Surat Keputusan Walikota Banjarmasin Nomor 577 Tahun 2015 tentang Pendelegasian Kewenangan Pelaksanaan Izin Usaha Mikro dan Kecil (IUMK) Kepada Camat di Kota Banjarmasin, bersama ini menyatakan dan memberikan izin kepada :&nbsp;<br></p>');

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
(9, '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>');

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
(2, 'Sekretariat Kecamatan'),
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

--
-- Dumping data for table `rekomendasi_pendirian_paud`
--

INSERT INTO `rekomendasi_pendirian_paud` (`id_rpp`, `tgl_permohonan`, `kelurahan`, `nama_pendiri`, `alamat`, `nama_sekolah`, `alamat_sekolah`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`) VALUES
(4, '2020-06-16', 'Alalak Utara', 'Utuh', 'Gang Buntu', 'SMP 39', 'Banjarmasin', 'Proses Selesai', '2020-07-05', 4, 'Selesai'),
(5, '2020-06-16', 'alalak', 'Julak Anang', 'HKSN', 'SMA Julak', 'Banjarmasin', 'Proses Selesai', '2020-07-05', 4, 'Selesai'),
(6, '2020-06-25', 'alalak', 'hbjhbjh', 'jhbjhb,jhb', 'kjbjhb', 'jhbjhvjhvjh', 'tuntung', '2020-07-05', 4, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_tgl_sktu`
--

CREATE TABLE `riwayat_tgl_sktu` (
  `id_riwayat` int(11) NOT NULL,
  `nomor_sktu` varchar(50) NOT NULL,
  `tgl_dibuat` date DEFAULT NULL,
  `terakhir_diperpanjang` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_tgl_sktu`
--

INSERT INTO `riwayat_tgl_sktu` (`id_riwayat`, `nomor_sktu`, `tgl_dibuat`, `terakhir_diperpanjang`) VALUES
(24, '513/001/SKTU-V/CAM-BU/2020', '2019-07-09', '2021-07-09');

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
(8, 1, '513/001/SKTU-V/CAM-BU/2020', 'Gusti', '098765432', '2019-07-09 03:12:59', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'Pangkalan Gas LPG', 'banjarmasin', 'Gusti', 'Jl. Berangas', 'Perdagangan Barang', '2019-07-09', '2020-07-09', 'Baru', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'ambil di kecamatan', '2019-07-09', 4, 'Selesai');

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
  `status` varchar(30) NOT NULL,
  `file_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sktu_perpanjangan`
--

INSERT INTO `sktu_perpanjangan` (`id_sktu`, `id_masyarakat`, `nomor_sktu`, `nama_pemohon`, `no_telp`, `tgl`, `peraturan`, `nama_perusahaan`, `alamat_perusahaan`, `nama_pimpinan_perusahaan`, `alamat_kediaman`, `kegiatan_usaha`, `masa_berlaku_awal`, `masa_berlaku_akhir`, `sifat`, `nama_camat`, `nip`, `jabatan`, `kelengkapan`, `keterangan`, `tgl_selesai`, `id_posisi`, `status`, `file_count`) VALUES
(6, 1, '513/001/SKTU-V/CAM-BU/2020', 'Gusti', '098765432', '2020-07-09 03:19:19', '<ol><li>Undang-undang Nomor 32 Tahun 2004 tentang Pemerintahan Daerah;</li><li>Peraturan Menteri Dalam Negeri Nomor 4 Tahun 2010 tentang Pedoman Penyelenggaraan Pelayanan Administrasi Terpadu Kecamatan;</li><li>Peraturan Walikota Banjarmasin Nomor 1 Tahun 2012 tentang Retribusi Pelayanan Persampahan/Kebersihan di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin No. 49 Tahun 2012 tentang Tugas Pokok dan Fungsi dan Tata Kerja Kecamatan Kota Banjarmasin;</li><li>Peratuaran Walikota Banjarmasin Nomor 35 Tahun 2013 tentang Pelimpahan Sebagian Kewenangan Walikota kepada Camat Dalam Rangka Pelayanan Administrasi Terpadu Kecamatan (PATEN) di Kota Banjarmasin;</li><li>Peraturan Walikota Banjarmasin Nomor 37 Tahun 2013 tentang Standar Pelayanan Perizinan dan Non Perizinan Dalam Rangka PATEN di Kota Banjarmasin;</li></ol>', 'Pangkalan Gas LPG', 'banjarmasin', 'Gusti', 'Jl. Berangas Rt. 06', 'Perdagangan Barang', '2020-07-09', '2021-07-09', 'Perpanjangan', 'APILUDDIN NOOR, S.Sos, M.AP', '19661001 198902 1 001', 'Pembina TK 1', 'Lengkap', 'selesai, silahkan ambil berkas', '2020-07-09', 4, 'Selesai', 1);

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
(1, 'admin', '1234', 'admin', 'admin', '$2y$10$3rgUfzYX3/2OcCfQEZPqN.8ku/7OnQv2uEeAY7ZVlmy.Cn1jrj4PG', 1),
(2, 'gusti', '123', 'programmer', 'gusti', '$2y$10$2upLFJZTgaUPuSoMstzLquqswIFn4hQkEap4D2aIL0t8qzupbb81.', 1),
(3, 'Naimah, SE', '6868686868686868686868', 'Kepala Seksi', 'kasi', '$2y$10$C4/Lv0OmJP41G9XpzjichegM9mCmuAOrDXvkpFmjEWJc2R0B0v7Oq', 4),
(4, 'Noorahmawati, S. AP', '63030123456789', 'Sekretariat Kecamatan', 'sekcam', '$2y$10$mvHZMx.ORdnk.x/YQVs/.eNFboMLlfiVjyfbea91tRJK42lZvserC', 8),
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
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

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
  MODIFY `id_ahli_waris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `camat`
--
ALTER TABLE `camat`
  MODIFY `id_camat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `iumk`
--
ALTER TABLE `iumk`
  MODIFY `id_iumk` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kegiatan_usaha`
--
ALTER TABLE `kegiatan_usaha`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `lampiran_iumk`
--
ALTER TABLE `lampiran_iumk`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lampiran_iumk_file`
--
ALTER TABLE `lampiran_iumk_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lampiran_sktu`
--
ALTER TABLE `lampiran_sktu`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lampiran_sktu_file`
--
ALTER TABLE `lampiran_sktu_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `legalisasi_imb`
--
ALTER TABLE `legalisasi_imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `legalisasi_izin_tower`
--
ALTER TABLE `legalisasi_izin_tower`
  MODIFY `id_izin_tower` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `legalisasi_proposal`
--
ALTER TABLE `legalisasi_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
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
-- AUTO_INCREMENT for table `posisi_berkas`
--
ALTER TABLE `posisi_berkas`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `rekomendasi_pendirian_paud`
--
ALTER TABLE `rekomendasi_pendirian_paud`
  MODIFY `id_rpp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `riwayat_tgl_sktu`
--
ALTER TABLE `riwayat_tgl_sktu`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `sktu_baru`
--
ALTER TABLE `sktu_baru`
  MODIFY `id_sktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `sktu_perpanjangan`
--
ALTER TABLE `sktu_perpanjangan`
  MODIFY `id_sktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
