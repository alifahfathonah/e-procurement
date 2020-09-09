-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 03:46 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e_procurement`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` varchar(10) CHARACTER SET utf8 NOT NULL,
  `Nama` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Nama`, `Email`, `Status`) VALUES
('ADM-00001', 'Ujang Tempe', 'admin@gmail.com', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_hitam_rekanan`
--

CREATE TABLE IF NOT EXISTS `daftar_hitam_rekanan` (
  `DaftarHitamRekananID` int(10) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `NoPendaftaran` varchar(16) NOT NULL,
  `Awal_berlaku` date NOT NULL,
  `SebabDimasukkan` varchar(200) NOT NULL,
  `StatusDaftarHitam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daftar_hitam_rekanan`
--

INSERT INTO `daftar_hitam_rekanan` (`DaftarHitamRekananID`, `NIP`, `NoPendaftaran`, `Awal_berlaku`, `SebabDimasukkan`, `StatusDaftarHitam`) VALUES
(1, '123456784', 'PENG050405123443', '2007-04-03', 'Mencoba untuk mengoyok panitia lelang', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_standart`
--

CREATE TABLE IF NOT EXISTS `dokumen_standart` (
  `DokumenStdID` int(6) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `JudulDokumen` varchar(50) NOT NULL,
  `DeskripsiDokumen` varchar(100) NOT NULL,
  `DokumenStandart` varchar(200) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokumen_standart`
--

INSERT INTO `dokumen_standart` (`DokumenStdID`, `NIP`, `JudulDokumen`, `DeskripsiDokumen`, `DokumenStandart`, `LastUpdate`) VALUES
(1, '123536798', 'Petunjuk tata cara pendaftaran', 'Petunjuk untuk calon pengunjung web', 'doc_standart/STD070806122324.doc', '2007-05-03 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `FaqID` int(4) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `EmailPenanya` varchar(100) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`FaqID`, `NIP`, `Question`, `EmailPenanya`, `Answer`, `LastUpdate`) VALUES
(1, '123456798', 'Apakah ada peraturan yang mengatur proses lelang proyek pengadaan barang atau jasa?', 'ohm_john@yahoo.com', 'Ada yaitu kepres no 80tahun 2003', '2007-05-04 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE IF NOT EXISTS `golongan` (
  `GolonganID` int(2) NOT NULL,
  `Golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`GolonganID`, `Golongan`) VALUES
(1, 'Gol I/a'),
(2, 'Gol II/a'),
(3, 'Gol III/a'),
(4, 'Gol IV/a'),
(5, 'Gol V/a');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `JabatanID` int(2) NOT NULL,
  `NamaJabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`JabatanID`, `NamaJabatan`) VALUES
(1, 'Dir.Kespen'),
(2, 'Kepala Bagian');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan_panitia`
--

CREATE TABLE IF NOT EXISTS `jabatan_panitia` (
  `JabatanPanitiaID` int(2) NOT NULL,
  `JabatanKepanitian` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan_panitia`
--

INSERT INTO `jabatan_panitia` (`JabatanPanitiaID`, `JabatanKepanitian`) VALUES
(1, 'Ketua Panitia'),
(2, 'Anggota Panitia');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_lelang`
--

CREATE TABLE IF NOT EXISTS `jenis_lelang` (
`JenisLelangID` int(6) NOT NULL,
  `JenisLelang` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `jenis_lelang`
--

INSERT INTO `jenis_lelang` (`JenisLelangID`, `JenisLelang`) VALUES
(1, 'Pengadaan Barang'),
(2, 'Pekerjaan Konstruksi'),
(3, 'Jasa Lainnya');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tahapan_lelang`
--

CREATE TABLE IF NOT EXISTS `jenis_tahapan_lelang` (
  `TahapanLelangID` int(2) NOT NULL,
  `TahapanLelang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_tahapan_lelang`
--

INSERT INTO `jenis_tahapan_lelang` (`TahapanLelangID`, `TahapanLelang`) VALUES
(1, 'Pengumuman Lelang'),
(2, 'Download Dokumen Persyaratan'),
(7, 'Upload Dokumen Penawaran'),
(8, 'Evaluasi Penawaran'),
(9, 'Penetapan Peringkat Teknis'),
(10, 'Pengumuman Pemenang'),
(11, 'Masa Sanggah Hasil Tender'),
(12, 'Pembuatan Berita Acara'),
(13, 'Penandatangan Kontrak'),
(14, 'Sudah Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `jns_pengumuman`
--

CREATE TABLE IF NOT EXISTS `jns_pengumuman` (
  `JenisPengumumanID` int(2) NOT NULL,
  `JenisPengumuman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jns_pengumuman`
--

INSERT INTO `jns_pengumuman` (`JenisPengumumanID`, `JenisPengumuman`) VALUES
(1, 'Pengumuman Rekanan'),
(2, 'Pengumuman Umum'),
(3, 'Pengumuman Pemenang');

-- --------------------------------------------------------

--
-- Table structure for table `jns_user`
--

CREATE TABLE IF NOT EXISTS `jns_user` (
  `JenisUserID` int(2) NOT NULL,
  `JenisUser` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jns_user`
--

INSERT INTO `jns_user` (`JenisUserID`, `JenisUser`) VALUES
(1, 'Administrator'),
(2, 'Rekanan'),
(3, 'Panitia');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE IF NOT EXISTS `kompetensi` (
  `NIP` varchar(9) NOT NULL,
  `SertifikatYgDimiliki` varchar(100) NOT NULL,
  `LembagaPemberi` varchar(100) NOT NULL,
  `TglPerolehan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`NIP`, `SertifikatYgDimiliki`, `LembagaPemberi`, `TglPerolehan`) VALUES
('120155245', 'Safety Audit Of Air Traffic Service Course', 'Singapore Aviation Academy', '2020-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `lelang`
--

CREATE TABLE IF NOT EXISTS `lelang` (
  `NomorLelang` varchar(16) NOT NULL,
  `JenisLelangID` int(6) NOT NULL,
  `NamaLelang` varchar(100) NOT NULL,
  `TanggalBuat` date NOT NULL,
  `TanggalSelesai` datetime NOT NULL,
  `PenggunaLelang` varchar(100) NOT NULL,
  `Keterangan` text NOT NULL,
  `HPS` int(20) NOT NULL,
  `DokumenPersyaratan` varchar(200) NOT NULL,
  `StatusLelang` varchar(15) NOT NULL,
  `LastUpdate` datetime NOT NULL,
  `SumberDana` varchar(10) NOT NULL,
  `TahunAnggaran` varchar(4) NOT NULL,
  `NilaiPagu` int(20) NOT NULL,
  `LokasiPekerjaan` varchar(50) NOT NULL,
  `SatuanKerja` varchar(100) NOT NULL,
  `Instansi` varchar(100) NOT NULL,
  `SistemPengadaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lelang`
--

INSERT INTO `lelang` (`NomorLelang`, `JenisLelangID`, `NamaLelang`, `TanggalBuat`, `TanggalSelesai`, `PenggunaLelang`, `Keterangan`, `HPS`, `DokumenPersyaratan`, `StatusLelang`, `LastUpdate`, `SumberDana`, `TahunAnggaran`, `NilaiPagu`, `LokasiPekerjaan`, `SatuanKerja`, `Instansi`, `SistemPengadaan`) VALUES
('LLG-00000', 1, 'Lelang Pengadaan Seragam Direktorat Jenderal Perhubungan Udara', '2019-04-30', '2019-05-25 11:00:00', 'Seluruh Karyawan \r\nDirektorat jenderal Perhubungan Udara', 'Pengadaan pakaian seragam baru untuk karyawan', 100000000, 'doc_persyaratanLLG-00000.pdf', 'aktif', '2019-04-08 06:05:04', 'APBN', '2019', 120000000, 'Jl.Merak Sakti Panam', 'Direktorat Jenderal Perhubungan Udara', 'Tentara Negara Indonesia', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00001', 2, 'Pembuatan Jalan Tol Pekanbaru ke Pandau Jaya', '2019-05-01', '2019-05-10 23:59:00', 'Masyarakat Pandau Jaya', 'Lelang ini di adakan untuk pembuatan jalan tol dari Pekanbaru ke Pandau Jaya', 400000000, 'doc_persyaratanLLG-00001.pdf', 'aktif', '2019-03-20 07:23:07', 'APBD', '2019', 450000000, 'Desa Pandau Jaya', 'Kantor Desa Pandau Jaya', 'Pemerintah Daerah Kanupaten Kampar', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00002', 3, 'Sewa Alat Berat Pengeruk Sungai', '2019-04-23', '2019-05-14 23:59:00', 'Kantor Desa Pandau Jaya', 'Lelang ini diadakan untuk mencari alat berat guna mengeruk sungai ', 15000000, 'doc_persyaratanLLG-00002.pdf', 'aktif', '2019-03-01 09:05:00', 'APBD', '2019', 16000000, 'Sungai Pandau Jaya', 'Kantor Desa Pandau Jaya', 'Pemerintah Daerah Kabupaten Kampar', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00003', 1, 'Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum', '2019-03-03', '2019-03-24 12:00:00', 'Karyawan Dinas Pekerjaan Umum', 'Lelang ini diadakan untuk mencari sepatu yang sesuai dengan kebutuhan dinas pekerjaan umum', 100000000, 'doc_persyaratanLLG-00003.pdf', 'aktif', '2019-03-03 09:00:00', 'APBN', '2019', 90000000, 'Kantor Dinas Pekerjaan Umum', 'Kantor Dinas Pekerjaan Umum', 'Pemerintah Pusat Republik Indonesia', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00004', 3, 'Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pendidikan Kota Pekanbaru', '2019-04-01', '2019-05-13 23:17:00', 'Karyawan Dinas Pendidikan Kota Pekanbaru', 'Lelang ini diadakan untuk membantu dinas pendidikan kota Pekanbaru untuk mencari konsumsi anggota rapat', 15000000, 'doc_persyaratanLLG-00004.pdf', 'aktif', '2019-04-01 11:13:00', 'APBD', '2019', 13000000, 'Kantor Dinas Pendidikan Kota Pekanbaru', 'Kantor Dinas Pendidikan Kota Pekanbaru', 'Dinas Pendidikan Kota Pekanbaru', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00005', 1, 'Lelang Pengadaan Komputer Karyawan Kominfo', '2019-05-16', '2019-05-19 23:59:00', 'Karyawan Kementrian Komunikasi dan Informasi', 'fasfsa', 150000000, '01_AMBARWATI1.pdf', 'aktif', '2019-05-16 00:48:13', 'APBN', '2019', 170000000, 'Kantor Kominfo', 'Kementrian Kominfo', 'Pemerintahan Pusat Republik Indonesia', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah'),
('LLG-00007', 1, 'Lelang Pengadaan Baju Karyawan Kominfo', '2019-05-16', '2019-05-18 23:59:00', 'asdas', 'sdaddfsa', 150000000, 'Sertifikat_Magang.pdf', 'aktif', '2019-05-16 03:12:04', 'APBN', '2019', 170000000, 'Kantor Kominfo', 'Kementrian Kominfo', 'Pemerintahan Pusat Republik Indonesia', 'Tender Cepat - Pascakualifikasi Satu File - Harga Terendah');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE IF NOT EXISTS `panitia` (
`No` int(5) NOT NULL,
  `JenisLelangID` int(5) NOT NULL,
  `JabatanPanitiaID` int(2) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `StatusPantia` varchar(15) NOT NULL,
  `DeskripsiStatusPanitia` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`No`, `JenisLelangID`, `JabatanPanitiaID`, `NIP`, `StatusPantia`, `DeskripsiStatusPanitia`, `LastUpdate`) VALUES
(1, 1, 2, 'NIP-00002', 'Aktif', 'Evaluasi Dokumen Penawaran Lelang', '2007-12-12 01:17:13'),
(2, 2, 2, 'NIP-00003', 'Aktif', 'Evaluasi Dokumen Penawaran Lelang', '2019-05-07 08:00:00'),
(3, 3, 2, 'NIP-00004', 'Aktif', 'Evaluasi Dokumen Penawaran Lelang', '2019-05-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `NIP` varchar(9) NOT NULL,
  `JabatanID` int(2) NOT NULL,
  `GolonganID` int(2) NOT NULL,
  `StatusPegawai` varchar(10) NOT NULL,
  `NamaPegawai` varchar(50) NOT NULL,
  `JenisKelamin` char(1) NOT NULL,
  `Agama` varchar(15) NOT NULL,
  `TmptLahir` varchar(50) NOT NULL,
  `TglLahir` date NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `NoTelephone` varchar(25) NOT NULL,
  `NoHandPhone` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhotoPegawai` varchar(200) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `JabatanID`, `GolonganID`, `StatusPegawai`, `NamaPegawai`, `JenisKelamin`, `Agama`, `TmptLahir`, `TglLahir`, `Alamat`, `NoTelephone`, `NoHandPhone`, `Email`, `PhotoPegawai`, `LastUpdate`) VALUES
('NIP-00001', 1, 1, 'Aktif', 'ENDAH PURNAMASARI,SH', 'W', 'Islam', 'Semarang', '1975-01-12', 'Perumahan Wisma Asri BLOK A', '62218877281', '085373320460', 'endah@gmail.com', 'photo.jpg', '2007-12-12 01:34:08'),
('NIP-00002', 2, 2, 'Aktif', 'Indah Permatasari', 'W', 'Islam', 'Bukittinggi', '1998-03-09', 'Jl. Suka Karya', '082386730568', '082386730568', 'indah@gmail.com', 'Indah.jpg', '2019-04-20 11:00:00'),
('NIP-00003', 2, 3, 'Aktif', 'Kurnia Ageng Sugara', 'P', 'Islam', 'Pekanbaru', '1998-04-01', 'Jl.Imam Munandar', '082386730568', '082386730568', 'kurnia@gmail.com', 'kurnia.jpg', '2019-04-20 14:00:00'),
('NIP-00004', 2, 1, 'Aktif', 'Yusuf Saputra Sipahutar', 'P', 'Islam', 'Rantau Prapat', '1998-05-06', 'Kos Pak Ujang', '082386730568', '082386730568', 'ucup@gmail.com', 'ucup.jpg', '2019-04-20 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE IF NOT EXISTS `pengalaman` (
  `NIP` varchar(9) NOT NULL,
  `NamaPryk` varchar(50) NOT NULL,
  `JbtnPryk` varchar(50) NOT NULL,
  `PimpinanProyek` varchar(50) NOT NULL,
  `LokasiPryk` varchar(100) NOT NULL,
  `TglmulaiPryk` date NOT NULL,
  `TglBerakhirPryk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`NIP`, `NamaPryk`, `JbtnPryk`, `PimpinanProyek`, `LokasiPryk`, `TglmulaiPryk`, `TglBerakhirPryk`) VALUES
('120155245', 'Pengadaan Enroute Chart', 'Anggota Panitia', 'ENDAH PURNAMASARI,SH', 'JAKARTA', '2019-10-01', '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `NoPengumuman` varchar(16) NOT NULL,
  `JenisPengumumanID` int(2) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `TanggalPengumuman` date NOT NULL,
  `JudulPengumuman` text NOT NULL,
  `IsiPengumuman` text NOT NULL,
  `JudulDokumenPengumuman` varchar(100) NOT NULL,
  `DokumenPengumuman` varchar(200) NOT NULL,
  `DeskripsiPengumuman` varchar(1000) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`NoPengumuman`, `JenisPengumumanID`, `NIP`, `TanggalPengumuman`, `JudulPengumuman`, `IsiPengumuman`, `JudulDokumenPengumuman`, `DokumenPengumuman`, `DeskripsiPengumuman`, `LastUpdate`) VALUES
('PNG-00000', 1, 'NIP-00002', '2019-04-01', 'Pengumuman Lelang Pengadaan Lelang Pengadaan Seragam Direktorat Jenderal Perhubungan Udara', 'Direktorat Jenderak Perhubungan Udara sedangkan membuka lelang proyek pengadaan alat navigasi pesawat', 'Dokumen Persyaratan Lelang proyekPengadaan Alat Navigasi Pesawat', 'PNG-00000.pdf', 'Dokumen Persyaratan Lelang proyekPengadaan Alat Navigasi Pesawat', '2019-04-01 06:05:04'),
('PNG-00001', 2, 'NIP-00003', '2019-04-02', 'Pengumuman Lelang Pekerjaan Konstruksi Jalan Tol Pekanbaru-Dumai', 'Dalam rangka mempercepat akses transportasi dari kota Pekanbaru menuju kota Dumai, dibutuhkan kontraktor untuk mengerjakan konstruksi jalan tol. Adapun kualifikasi dapat dilihat pada file terlampir', 'Kualifikasi Lelang Pekerjaan Konstruksi  Jalan Tol Pekanbaru-Dumai', 'PNG-00001.pdf', 'Pengumuman Lelang Pekerjaan Konstruksi Jalan Tol Pekanbaru-Dumai', '2019-04-02 06:06:14'),
('PNG-00002', 2, 'NIP-00002', '2019-04-03', 'Pengumuman Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum', 'Dalam rangka meningkatkan kinerja karyawan dinas pekerjaan umum, maka dilakukan pelelangan pengadaan sepatu kerja. Adapun spesifikasi yang dibutuhkan dapat dilihat pada file terlampir', 'Pengumuman Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum', 'PNG-00002.pdf', 'Dokumen Spesifikasi Barang yang dibutuhkan', '2019-03-01 09:03:00'),
('PNG-00003', 2, 'NIP-00004', '2019-04-04', 'Pengumuman Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pendidikan Kota Pekanbaru', 'Dalam rangka mengadakan rapat evaluasi kinerja Dinas Pendidikan Kota Pekanbaru, dibutuhkan jasa Event Organizer. Adapun kualifikasi dapat dilihat pada file terlampir', 'Pengumuman Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pendidikan Kota Pekan', 'PNG-00003.pdf', 'Dokumen Kualifikasi Event Organizer Rapat', '2019-04-04 09:15:30'),
('PNG-00004', 3, 'NIP-00004', '2019-04-10', 'Pengumuman Sewa Alat Berat Pengeruk Sungai', 'Dalam rangka untuk mengurangi terjadinya banjir, pihak kantor desa akan melakukan pengerukan di sungai. Maka dibutuhkan sebuah alat berat untuk melakukannya. Untuk melihat persyaratan dapat di lihat pada file terlampir ', 'Pengumuman Hasil Kualifikasi Lelang Pekerjaan Konstruksi Jalan Tol Pekanbaru-Dumai', 'PNG-00004.pdf', 'Dokumen Pengumuman Hasil Kualifikasi Lelang Pekerjaan Konstruksi Jalan Tol Pekanbaru-Dumai', '2019-04-10 06:06:14'),
('PNG-00005', 3, 'NIP-00002', '2019-04-11', 'Pengumuman Hasil Kualifikasi Lelang Pengadaan Alat Navigasi Pesawat', 'Berikut nama-nama rekanan yang lolos tahap kualifikasi. Nama-nama rekanan dapat dilihat pada file terrlampir. Jika ingin menyanggah silahlan isi pada form dibawah.', 'Pengumuman Hasil Kualifikasi Lelang Pengadaan Alat Navigasi Pesawat', 'PNG-00005.pdf', 'Dokumen Pengumuman Hasil Kualifikasi Lelang Pengadaan Alat Navigasi Pesawat', '2019-04-11 09:10:14'),
('PNG-00006', 3, 'NIP-00003', '2019-04-12', 'Pengumuman Hasil Kualifikasi Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum', 'Berikut nama-nama rekanan yang lolos pada tahap kualifikasi. Dapat di lihat pada file terlampir. Jika ingin menyanggah silahlan isi pada form dibawah.', 'Pengumuman Hasil Kualifikasi Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum', 'PNG-00006.pdf', 'Dokumen Pengumuman Hasil Kualifikasi Pengadaan Sepatu Kerja Karyawan Dinas Pekerjaan Umum\r\n', '2019-04-12 10:07:07'),
('PNG-00007', 3, 'NIP-00004', '2019-04-13', 'Pengumuman Hasil Kualifikasi Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pendidikan Kota Pekanbaru', 'Berikut nama-nama rekanan yang lolos pada tahap kualifikasi. Dapat di lihat pada file terlampir. Jika ingin menyanggah silahlan isi pada form dibawah.', 'Pengumuman Hasil Kualifikasi Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pen', 'PNG-00007.pdf', 'Dokumen Pengumuman Hasil Kualifikasi Jasa Lainnya Event Organizer (EO) Rangkaian Kegiatan Rapat di Dinas Pendidikan Kota Pekanbaru', '2019-04-14 13:18:12');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman_lelang`
--

CREATE TABLE IF NOT EXISTS `pengumuman_lelang` (
`No` int(11) NOT NULL,
  `NoPengumuman` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengumuman_lelang`
--

INSERT INTO `pengumuman_lelang` (`No`, `NoPengumuman`, `NomorLelang`) VALUES
(1, 'PNG-00000', 'LLG-00000'),
(2, 'PNG-00001', 'LLG-00001'),
(3, 'PNG-00002', 'LLG-00003'),
(4, 'PNG-00003', 'LLG-00004'),
(5, 'PNG-00004', 'LLG-00002');

-- --------------------------------------------------------

--
-- Table structure for table `pin_request`
--

CREATE TABLE IF NOT EXISTS `pin_request` (
  `RequestID` int(4) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `KdUser` varchar(16) NOT NULL,
  `JenisUser` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` varchar(25) NOT NULL,
  `Handphone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pin_request`
--

INSERT INTO `pin_request` (`RequestID`, `NIP`, `KdUser`, `JenisUser`, `Email`, `Telephone`, `Handphone`) VALUES
(1, '173849374', 'PEND070101092334', 'Rekanan', 'info@perusahaanA.com', '62215307765', '6221085919');

-- --------------------------------------------------------

--
-- Table structure for table `rekanan`
--

CREATE TABLE IF NOT EXISTS `rekanan` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NO_NPWP` varchar(25) NOT NULL,
  `NO_SIUP` varchar(25) NOT NULL,
  `NamaRekanan` varchar(50) NOT NULL,
  `TahunBerdiri` date NOT NULL,
  `KontakPerson` varchar(50) NOT NULL,
  `AlamatRekanan` varchar(100) NOT NULL,
  `NoTelephone` varchar(25) NOT NULL,
  `NoFax` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AlamatKantorPusat` varchar(100) NOT NULL,
  `DeskripsiPerusahaan` text NOT NULL,
  `StatusRekanan` varchar(15) NOT NULL,
  `dokRekanan` varchar(200) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rekanan`
--

INSERT INTO `rekanan` (`NoPendaftaran`, `NO_NPWP`, `NO_SIUP`, `NamaRekanan`, `TahunBerdiri`, `KontakPerson`, `AlamatRekanan`, `NoTelephone`, `NoFax`, `Email`, `AlamatKantorPusat`, `DeskripsiPerusahaan`, `StatusRekanan`, `dokRekanan`, `LastUpdate`) VALUES
('PEN-00001', '02.378.769.5.665.000', '01467/13.1.824.51', 'PT. INDOAVIS NUSANTARA', '2018-08-01', 'BAMBANG PAMUNGKAS', 'Bandara Internasional Halim Perdana Kusuma, Gedung Terminai Lantai 2 No. A-50/PK Jakarta 132240', '829729739', '808080808', 'indoavis@gmail.com', 'Bandara Internasional Halim Perdana Kusuma', 'PT. Indoavis bersiri pada tanggal 3 maret 2004', 'Aktif', 'upload-progressbar.zip', '2019-05-01 00:00:00'),
('PEN-00002', '05.468.754.5.665.654', '63424/62.1.536.63', 'PT. Indah Karya', '2014-04-14', 'fahmi abdul yakub', 'gading marpoyan', '0823', '1234', 'fahmiabdulyakub28@gmail.com', 'pandau jaya', '0823', 'aktif', '111713251218BAB_12_Android_-_PHP-MySQL.zip', '2019-05-05 09:08:09'),
('PEN-00003', '04.523.679.7.341.903', '85334/76.5.753.63', 'PT. Maju Jaya Bersama', '2005-04-12', 'fahmi abdul yakub', 'Jl. Beringin dingin', '0823', '1234', 'majujaya@gmail.com', 'pandau jaya', '0823', 'aktif', '501015210918BAB_2_Android.zip', '2019-05-06 10:33:03'),
('PEN-00004', '09.952.842.8.542.665', '83452/76.7.742.52', 'PT. INDOMARCO', '2010-03-23', 'Mas Yanto', 'gading marpoyan', '0823', '1234', 'indomarco@gmail.com', 'pandau jaya', '0823', 'aktif', '111713251218BAB_12_Android_-_PHP-MySQL1.zip', '2019-05-07 12:57:09'),
('PEN-00005', '04.378.769.5.665.234', '01467/13.1.824.61', 'PT. Indofood', '2011-05-18', 'Sumarno Supriono', 'Jl.Kaharudin Nasution', '0823', '1234', 'indofood@gmail.com', 'Cengkareng, Jakarta Pusat', '0823', 'aktif', 'AnimasiAnnisa.zip', '2019-05-08 10:35:51'),
('PEN-00006', '01.385.549.5.523.214', '01467/13.1.824.74', 'PT. Telkom Jaya Abadi', '2012-03-20', 'Sukirman Miniman', 'gading marpoyan', '0823', '1234', 'telkom@gmail.com', 'Cengkareng, Jakarta Pusat', '0823', 'aktif', 'lpse-master.zip', '2019-05-08 10:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `rekanan_tahapan_lelang`
--

CREATE TABLE IF NOT EXISTS `rekanan_tahapan_lelang` (
`No` int(11) NOT NULL,
  `NoPendaftaran` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `HargaPenawaran` int(20) NOT NULL,
  `dokPenawaran` varchar(200) NOT NULL,
  `TanggalMenawar` datetime NOT NULL,
  `StatusPeserta` varchar(20) NOT NULL,
  `StatusDokumen` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `rekanan_tahapan_lelang`
--

INSERT INTO `rekanan_tahapan_lelang` (`No`, `NoPendaftaran`, `NomorLelang`, `HargaPenawaran`, `dokPenawaran`, `TanggalMenawar`, `StatusPeserta`, `StatusDokumen`) VALUES
(1, 'PEN-00001', 'LLG-00000', 80000000, '111713251218BAB_12_Android_-_PHP-MySQL.zip', '2019-04-30 14:00:00', 'Belum Pemenang', 'proses'),
(2, 'PEN-00002', 'LLG-00000', 700000000, '124012301018BAB_7_Google_Maps.zip', '2019-05-06 15:24:45', 'Belum Pemenang', 'proses'),
(3, 'PEN-00003', 'LLG-00000', 500000000, '501015210918BAB_2_Android.zip', '2019-05-07 01:12:37', 'Belum Pemenang', 'proses'),
(20, 'PEN-00005', 'LLG-00000', 90000000, '100804_cvcard-wp_v140.zip', '2019-05-08 22:37:41', 'Belum Pemenang', 'proses'),
(21, 'PEN-00006', 'LLG-00000', 50000000, '152013251218BAB_9_Analisis_Keberhasilan_Bank.zip', '2019-05-08 23:38:33', 'Pemenang', 'Lengkap'),
(22, 'PEN-00006', 'LLG-00001', 350000000, 'actionbar_style_example.zip', '2019-05-08 23:39:23', 'proses', 'proses'),
(23, 'PEN-00004', 'LLG-00000', 700000000, '483307141118BAB_8_WEBVIEW.zip', '2019-05-09 00:01:21', 'Belum Pemenang', 'proses'),
(25, 'PEN-00001', 'LLG-00001', 700000000, '381020190319Modul_3_Model_Model_E-Bisniss.zip', '2019-05-09 00:08:15', 'proses', 'proses'),
(26, 'PEN-00002', 'LLG-00001', 50000000, '491220190319Modul_6_Pengembangan_Strategi_E-Bisniss_(1).zip', '2019-05-09 00:11:14', 'proses', 'proses'),
(27, 'PEN-00002', 'LLG-00003', 50000000, 'Web-master.zip', '2019-03-21 16:47:25', 'Belum Pemenang', 'proses'),
(28, 'PEN-00001', 'LLG-00003', 30000000, 'upload-file-codeigniter-ajax-master.zip', '2019-03-22 16:48:37', 'Pemenang', 'Lengkap'),
(29, 'PEN-00005', 'LLG-00003', 60000000, 'procurement_sys-master.zip', '2019-03-23 16:51:31', 'Belum Pemenang', 'proses'),
(30, 'PEN-00004', 'LLG-00003', 80000000, '011207240918BAB_4_Layout_dan_View.zip', '2019-03-23 16:52:54', 'Belum Pemenang', 'proses'),
(31, 'PEN-00002', 'LLG-00004', 10000000, 'Web-master1.zip', '2019-05-16 05:39:32', 'proses', 'proses'),
(32, 'PEN-00001', 'LLG-00004', 11000000, 'upload-progressbar.zip', '2019-05-16 05:40:27', 'proses', 'proses'),
(33, 'PEN-00004', 'LLG-00004', 12000000, 'lpse-master.zip', '2019-05-16 05:41:47', 'proses', 'proses'),
(34, 'PEN-00003', 'LLG-00004', 7000000, '023213251218BAB_11_Teknologi_Perbankan.zip', '2019-05-16 05:43:09', 'proses', 'proses'),
(35, 'PEN-00006', 'LLG-00004', 13500000, 'crud-demo-master.zip', '2019-05-16 05:44:13', 'proses', 'proses'),
(36, 'PEN-00006', 'LLG-00002', 14000000, 'AjaxCrud-master.zip', '2019-05-16 05:49:15', 'proses', 'proses'),
(37, 'PEN-00001', 'LLG-00002', 1000000, '254312041218BAB_5_Kliring.zip', '2019-05-16 05:50:14', 'proses', 'proses'),
(38, 'PEN-00004', 'LLG-00002', 9500000, '164212241018sim_bank.zip', '2019-05-16 05:51:23', 'proses', 'proses'),
(39, 'PEN-00005', 'LLG-00002', 12000000, '381020190319Modul_3_Model_Model_E-Bisniss1.zip', '2019-05-16 05:53:58', 'proses', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tahapan_lelang`
--

CREATE TABLE IF NOT EXISTS `tahapan_lelang` (
`NomorTahapan` int(5) NOT NULL,
  `TanggalMulai` datetime NOT NULL,
  `TanggalSelesai` datetime NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `TahapanLelangID` int(2) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=160 ;

--
-- Dumping data for table `tahapan_lelang`
--

INSERT INTO `tahapan_lelang` (`NomorTahapan`, `TanggalMulai`, `TanggalSelesai`, `NomorLelang`, `TahapanLelangID`, `LastUpdate`) VALUES
(1, '2019-04-30 09:12:09', '2019-05-04 23:59:00', 'LLG-00000', 1, '2019-03-02 09:00:00'),
(2, '2019-04-30 09:12:00', '2019-05-04 23:59:00', 'LLG-00000', 2, '2019-03-02 09:00:00'),
(7, '2019-05-05 11:00:00', '2019-05-25 11:00:00', 'LLG-00000', 7, '2019-03-02 09:00:00'),
(8, '2019-05-26 10:00:00', '2019-05-30 23:59:00', 'LLG-00000', 8, '2019-03-02 09:00:00'),
(9, '2019-06-01 10:00:00', '2019-06-03 11:00:00', 'LLG-00000', 9, '2019-03-02 09:00:00'),
(10, '2019-06-10 10:00:00', '2019-06-15 23:59:00', 'LLG-00000', 10, '2019-03-02 09:00:00'),
(11, '2019-06-10 10:00:00', '2019-06-15 23:59:00', 'LLG-00000', 11, '2019-03-02 09:00:00'),
(12, '2019-06-17 10:00:00', '2019-06-19 15:00:00', 'LLG-00000', 12, '2019-03-02 09:00:00'),
(13, '2019-06-24 08:00:00', '2019-06-24 15:00:00', 'LLG-00000', 13, '2019-03-02 09:00:00'),
(14, '2019-05-01 09:00:00', '2019-05-07 23:59:00', 'LLG-00001', 1, '2019-04-01 08:00:00'),
(15, '2019-05-01 09:00:00', '2019-05-07 23:59:00', 'LLG-00001', 2, '2019-04-01 08:00:00'),
(20, '2019-05-08 11:00:00', '2019-05-10 23:59:00', 'LLG-00001', 7, '2019-04-01 08:00:00'),
(21, '2019-05-11 09:00:00', '2019-05-15 23:59:00', 'LLG-00001', 8, '2019-04-01 08:00:00'),
(22, '2019-05-16 08:00:00', '2019-05-16 23:59:00', 'LLG-00001', 9, '2019-04-01 00:00:00'),
(23, '2019-05-17 08:00:00', '2019-05-27 23:59:00', 'LLG-00001', 10, '2019-04-01 08:00:00'),
(24, '2019-05-17 08:00:00', '2019-05-27 23:59:00', 'LLG-00001', 11, '2019-04-01 08:00:00'),
(25, '2019-05-29 08:00:00', '2019-05-29 15:00:00', 'LLG-00001', 12, '2019-04-01 08:00:00'),
(26, '2019-05-30 08:00:00', '2019-05-30 15:00:00', 'LLG-00001', 13, '2019-04-01 08:00:00'),
(27, '2019-06-01 00:00:00', '2019-06-01 00:00:00', 'LLG-00001', 14, '2019-04-01 08:00:00'),
(28, '2019-06-25 00:00:00', '2019-06-25 00:00:00', 'LLG-00000', 14, '2019-03-02 09:00:00'),
(29, '2019-04-23 11:00:00', '2019-05-10 23:59:00', 'LLG-00002', 1, '2019-03-04 09:00:00'),
(30, '2019-04-23 11:00:00', '2019-05-10 23:59:00', 'LLG-00002', 2, '2019-03-04 09:00:00'),
(35, '2019-05-11 10:00:00', '2019-05-14 23:59:00', 'LLG-00002', 7, '2019-03-04 00:00:00'),
(36, '2019-05-15 08:00:00', '2019-05-18 23:59:00', 'LLG-00002', 8, '2019-03-04 09:00:00'),
(37, '2019-05-20 09:00:00', '2019-05-21 23:59:00', 'LLG-00002', 9, '2019-03-04 00:00:00'),
(38, '2019-05-22 10:00:00', '2019-05-25 07:00:00', 'LLG-00002', 10, '2019-03-04 09:00:00'),
(39, '2019-05-22 10:00:00', '2019-05-25 23:59:00', 'LLG-00002', 11, '2019-03-04 00:00:00'),
(40, '2019-05-27 08:00:00', '2019-05-28 16:00:00', 'LLG-00002', 12, '2019-03-04 00:00:00'),
(41, '2019-05-28 09:00:00', '2019-05-28 15:00:00', 'LLG-00002', 13, '2019-03-04 09:00:00'),
(42, '2019-05-29 00:00:00', '2019-05-29 00:00:00', 'LLG-00002', 14, '2019-03-04 09:00:00'),
(43, '2019-03-03 10:00:00', '2019-03-20 23:59:00', 'LLG-00003', 1, '2019-03-03 09:00:00'),
(44, '2019-03-03 10:00:00', '2019-03-20 23:59:00', 'LLG-00003', 2, '2019-03-03 09:00:00'),
(49, '2019-03-21 10:00:00', '2019-03-24 23:59:00', 'LLG-00003', 7, '2019-03-03 09:00:00'),
(50, '2019-03-25 08:00:00', '2019-03-27 23:59:00', 'LLG-00003', 8, '2019-03-03 09:00:00'),
(51, '2019-03-28 11:00:00', '2019-03-29 23:59:00', 'LLG-00003', 9, '2019-03-03 09:00:00'),
(52, '2019-03-30 10:00:00', '2019-04-03 23:59:00', 'LLG-00003', 10, '2019-03-03 09:00:00'),
(53, '2019-03-30 10:00:00', '2019-04-03 23:59:00', 'LLG-00003', 11, '2019-03-03 09:00:00'),
(54, '2019-04-05 08:00:00', '2019-04-06 15:00:00', 'LLG-00003', 12, '2019-03-03 09:00:00'),
(55, '2019-04-08 09:00:00', '2019-04-08 16:00:00', 'LLG-00003', 13, '2019-03-03 00:00:00'),
(56, '2019-04-09 00:00:00', '2019-04-09 00:00:00', 'LLG-00003', 14, '2019-03-03 00:00:00'),
(57, '2019-04-01 11:00:00', '2019-04-30 09:00:00', 'LLG-00004', 1, '2019-04-01 08:00:00'),
(58, '2019-04-01 11:00:00', '2019-04-30 09:00:00', 'LLG-00004', 2, '2019-04-01 08:00:00'),
(63, '2019-05-01 00:00:00', '2019-05-13 23:17:00', 'LLG-00004', 7, '2019-04-01 08:00:00'),
(64, '2019-05-14 11:00:00', '2019-05-14 23:00:00', 'LLG-00004', 8, '2019-04-01 08:00:00'),
(65, '2019-05-15 08:00:00', '2019-05-15 23:59:00', 'LLG-00004', 9, '2019-04-01 08:00:00'),
(66, '2019-05-16 10:19:00', '2019-05-16 15:00:00', 'LLG-00004', 10, '2019-04-01 08:00:00'),
(67, '2019-05-16 16:00:00', '2019-05-18 15:00:00', 'LLG-00004', 11, '2019-04-01 08:00:00'),
(68, '2019-05-19 09:00:00', '2019-05-19 23:00:00', 'LLG-00004', 12, '2019-04-01 08:00:00'),
(69, '2019-05-20 08:00:00', '2019-05-20 16:00:00', 'LLG-00004', 13, '2019-04-01 08:00:00'),
(70, '2019-05-21 00:00:00', '2019-05-21 00:00:00', 'LLG-00004', 14, '2019-04-01 08:00:00'),
(100, '2019-05-16 00:00:00', '2019-05-17 23:59:00', 'LLG-00005', 1, '2019-05-16 00:48:13'),
(101, '2019-05-16 00:00:00', '2019-05-17 23:59:00', 'LLG-00005', 2, '2019-05-16 00:48:14'),
(102, '2019-05-18 00:00:00', '2019-05-19 23:59:00', 'LLG-00005', 7, '2019-05-16 00:48:14'),
(103, '2019-05-20 00:00:00', '2019-05-21 23:59:00', 'LLG-00005', 8, '2019-05-16 00:48:14'),
(104, '2019-05-21 00:00:00', '2019-05-21 23:59:00', 'LLG-00005', 9, '2019-05-16 00:48:14'),
(105, '2019-05-22 00:00:00', '2019-05-24 23:59:00', 'LLG-00005', 10, '2019-05-16 00:48:14'),
(106, '2019-05-22 00:00:00', '2019-05-24 23:59:00', 'LLG-00005', 11, '2019-05-16 00:48:14'),
(107, '2019-05-25 00:00:00', '2019-05-26 23:59:00', 'LLG-00005', 12, '2019-05-16 00:48:14'),
(108, '2019-05-27 00:00:00', '2019-05-27 23:59:00', 'LLG-00005', 13, '2019-05-16 00:48:15'),
(109, '2019-05-28 00:00:00', '2019-05-28 23:59:00', 'LLG-00005', 14, '2019-05-16 00:48:15'),
(150, '2019-05-13 23:59:00', '2019-05-14 23:59:00', 'LLG-00007', 1, '2019-05-16 03:12:04'),
(151, '2019-05-13 00:00:00', '2019-05-14 23:59:00', 'LLG-00007', 2, '2019-05-16 03:12:04'),
(152, '2019-05-15 00:00:00', '2019-05-18 23:59:00', 'LLG-00007', 7, '2019-05-16 03:12:04'),
(153, '2019-05-19 00:00:00', '2019-05-20 23:59:00', 'LLG-00007', 8, '2019-05-16 03:12:04'),
(154, '2019-05-21 00:00:00', '2019-05-22 23:59:00', 'LLG-00007', 9, '2019-05-16 03:12:04'),
(155, '2019-05-23 00:00:00', '2019-05-24 23:59:00', 'LLG-00007', 10, '2019-05-16 03:12:04'),
(156, '2019-05-23 00:00:00', '2019-05-25 23:59:00', 'LLG-00007', 11, '2019-05-16 03:12:04'),
(157, '2019-05-26 00:00:00', '2019-05-27 23:59:00', 'LLG-00007', 12, '2019-05-16 03:12:04'),
(158, '2019-05-27 00:00:00', '2019-05-28 23:59:00', 'LLG-00007', 13, '2019-05-16 03:12:04'),
(159, '2019-05-29 00:00:00', '2019-05-29 00:00:00', 'LLG-00007', 14, '2019-05-16 03:12:04');

-- --------------------------------------------------------

--
-- Table structure for table `tanya_jawab`
--

CREATE TABLE IF NOT EXISTS `tanya_jawab` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `Pertanyaan` varchar(100) NOT NULL,
  `Jawaban` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tanya_jawab`
--

INSERT INTO `tanya_jawab` (`NoPendaftaran`, `NomorLelang`, `Pertanyaan`, `Jawaban`, `LastUpdate`) VALUES
('PEND070101092334', 'LLNG070305123454', 'Kapan saya harus mengirimkan data-data proyek?', 'Tanggal 23 Desember 2007', '2007-12-23 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `JenisUserID` int(2) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `StatusUser` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`JenisUserID`, `Email`, `Password`, `StatusUser`) VALUES
(1, 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(3, 'endah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(2, 'fahmiabdulyakub28@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(3, 'indah@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(2, 'indoavis@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Aktif'),
(2, 'indofood@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(2, 'indomarco@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(3, 'kurnia@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(2, 'majujaya@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(2, 'telkom@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif'),
(3, 'ucup@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`AdminID`), ADD KEY `Email` (`Email`);

--
-- Indexes for table `daftar_hitam_rekanan`
--
ALTER TABLE `daftar_hitam_rekanan`
 ADD PRIMARY KEY (`DaftarHitamRekananID`), ADD KEY `FK1` (`NIP`), ADD KEY `FK2` (`NoPendaftaran`);

--
-- Indexes for table `dokumen_standart`
--
ALTER TABLE `dokumen_standart`
 ADD PRIMARY KEY (`DokumenStdID`), ADD KEY `FK` (`NIP`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
 ADD PRIMARY KEY (`FaqID`), ADD KEY `FK` (`NIP`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
 ADD PRIMARY KEY (`GolonganID`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
 ADD PRIMARY KEY (`JabatanID`);

--
-- Indexes for table `jabatan_panitia`
--
ALTER TABLE `jabatan_panitia`
 ADD PRIMARY KEY (`JabatanPanitiaID`);

--
-- Indexes for table `jenis_lelang`
--
ALTER TABLE `jenis_lelang`
 ADD PRIMARY KEY (`JenisLelangID`);

--
-- Indexes for table `jenis_tahapan_lelang`
--
ALTER TABLE `jenis_tahapan_lelang`
 ADD PRIMARY KEY (`TahapanLelangID`);

--
-- Indexes for table `jns_pengumuman`
--
ALTER TABLE `jns_pengumuman`
 ADD PRIMARY KEY (`JenisPengumumanID`);

--
-- Indexes for table `jns_user`
--
ALTER TABLE `jns_user`
 ADD PRIMARY KEY (`JenisUserID`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
 ADD KEY `FK` (`NIP`);

--
-- Indexes for table `lelang`
--
ALTER TABLE `lelang`
 ADD PRIMARY KEY (`NomorLelang`), ADD KEY `FK1` (`JenisLelangID`);

--
-- Indexes for table `panitia`
--
ALTER TABLE `panitia`
 ADD PRIMARY KEY (`No`), ADD KEY `FK1` (`JenisLelangID`), ADD KEY `FK2` (`JabatanPanitiaID`), ADD KEY `FK3` (`NIP`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
 ADD PRIMARY KEY (`NIP`), ADD KEY `FK1` (`JabatanID`), ADD KEY `FK2` (`GolonganID`), ADD KEY `Email` (`Email`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
 ADD KEY `FK` (`NIP`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
 ADD PRIMARY KEY (`NoPengumuman`), ADD KEY `FK1` (`JenisPengumumanID`), ADD KEY `FK2` (`NIP`);

--
-- Indexes for table `pengumuman_lelang`
--
ALTER TABLE `pengumuman_lelang`
 ADD PRIMARY KEY (`No`), ADD KEY `FK1` (`NoPengumuman`), ADD KEY `FK2` (`NomorLelang`);

--
-- Indexes for table `pin_request`
--
ALTER TABLE `pin_request`
 ADD PRIMARY KEY (`RequestID`), ADD KEY `FK1` (`NIP`);

--
-- Indexes for table `rekanan`
--
ALTER TABLE `rekanan`
 ADD PRIMARY KEY (`NoPendaftaran`), ADD KEY `Email` (`Email`);

--
-- Indexes for table `rekanan_tahapan_lelang`
--
ALTER TABLE `rekanan_tahapan_lelang`
 ADD PRIMARY KEY (`No`), ADD KEY `FK1` (`NoPendaftaran`), ADD KEY `FK2` (`NomorLelang`), ADD KEY `FK3` (`HargaPenawaran`);

--
-- Indexes for table `tahapan_lelang`
--
ALTER TABLE `tahapan_lelang`
 ADD PRIMARY KEY (`NomorTahapan`), ADD KEY `FK1` (`NomorLelang`), ADD KEY `FK2` (`TahapanLelangID`);

--
-- Indexes for table `tanya_jawab`
--
ALTER TABLE `tanya_jawab`
 ADD KEY `FK1` (`NoPendaftaran`), ADD KEY `FK2` (`NomorLelang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Email`), ADD KEY `FK1` (`JenisUserID`), ADD KEY `FK2` (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_lelang`
--
ALTER TABLE `jenis_lelang`
MODIFY `JenisLelangID` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `panitia`
--
ALTER TABLE `panitia`
MODIFY `No` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengumuman_lelang`
--
ALTER TABLE `pengumuman_lelang`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rekanan_tahapan_lelang`
--
ALTER TABLE `rekanan_tahapan_lelang`
MODIFY `No` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `tahapan_lelang`
--
ALTER TABLE `tahapan_lelang`
MODIFY `NomorTahapan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=160;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lelang`
--
ALTER TABLE `lelang`
ADD CONSTRAINT `lelang_ibfk_1` FOREIGN KEY (`JenisLelangID`) REFERENCES `jenis_lelang` (`JenisLelangID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panitia`
--
ALTER TABLE `panitia`
ADD CONSTRAINT `panitia_ibfk_1` FOREIGN KEY (`JabatanPanitiaID`) REFERENCES `jabatan_panitia` (`JabatanPanitiaID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `panitia_ibfk_2` FOREIGN KEY (`JenisLelangID`) REFERENCES `jenis_lelang` (`JenisLelangID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `panitia_ibfk_3` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman`
--
ALTER TABLE `pengumuman`
ADD CONSTRAINT `pengumuman_ibfk_1` FOREIGN KEY (`JenisPengumumanID`) REFERENCES `jns_pengumuman` (`JenisPengumumanID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengumuman_ibfk_2` FOREIGN KEY (`NIP`) REFERENCES `pegawai` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengumuman_lelang`
--
ALTER TABLE `pengumuman_lelang`
ADD CONSTRAINT `pengumuman_lelang_ibfk_1` FOREIGN KEY (`NoPengumuman`) REFERENCES `pengumuman` (`NoPengumuman`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengumuman_lelang_ibfk_2` FOREIGN KEY (`NomorLelang`) REFERENCES `lelang` (`NomorLelang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekanan`
--
ALTER TABLE `rekanan`
ADD CONSTRAINT `rekanan_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekanan_tahapan_lelang`
--
ALTER TABLE `rekanan_tahapan_lelang`
ADD CONSTRAINT `rekanan_tahapan_lelang_ibfk_1` FOREIGN KEY (`NomorLelang`) REFERENCES `lelang` (`NomorLelang`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `rekanan_tahapan_lelang_ibfk_2` FOREIGN KEY (`NoPendaftaran`) REFERENCES `rekanan` (`NoPendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tahapan_lelang`
--
ALTER TABLE `tahapan_lelang`
ADD CONSTRAINT `tahapan_lelang_ibfk_1` FOREIGN KEY (`TahapanLelangID`) REFERENCES `jenis_tahapan_lelang` (`TahapanLelangID`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `tahapan_lelang_ibfk_2` FOREIGN KEY (`NomorLelang`) REFERENCES `lelang` (`NomorLelang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`JenisUserID`) REFERENCES `jns_user` (`JenisUserID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
