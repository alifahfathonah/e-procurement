-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2019 at 05:54 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-bussines`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_golongan`
--

CREATE TABLE `tabel ms_golongan` (
  `GolonganID` int(2) NOT NULL,
  `Golongan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_golongan`
--

INSERT INTO `tabel ms_golongan` (`GolonganID`, `Golongan`) VALUES
(1, 'Gol I/a'),
(2, 'Gol II/a'),
(3, 'Gol III/a'),
(4, 'Gol IV/a'),
(5, 'Gol V/a');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jabatan`
--

CREATE TABLE `tabel ms_jabatan` (
  `JabatanID` int(2) NOT NULL,
  `NamaJabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jabatan`
--

INSERT INTO `tabel ms_jabatan` (`JabatanID`, `NamaJabatan`) VALUES
(1, 'Dir.Kespen');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jabatan_panitia`
--

CREATE TABLE `tabel ms_jabatan_panitia` (
  `JabatanPanitiaID` int(2) NOT NULL,
  `JabatanKepanitian` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jabatan_panitia`
--

INSERT INTO `tabel ms_jabatan_panitia` (`JabatanPanitiaID`, `JabatanKepanitian`) VALUES
(3, 'Anggota Panitia');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jenis_lelang`
--

CREATE TABLE `tabel ms_jenis_lelang` (
  `JenisLelangID` int(2) NOT NULL,
  `JenisLelang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jenis_lelang`
--

INSERT INTO `tabel ms_jenis_lelang` (`JenisLelangID`, `JenisLelang`) VALUES
(1, 'Pengadaan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jenis_tahapan_lelang`
--

CREATE TABLE `tabel ms_jenis_tahapan_lelang` (
  `TahapanLelangID` int(2) NOT NULL,
  `TahapanLelang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jenis_tahapan_lelang`
--

INSERT INTO `tabel ms_jenis_tahapan_lelang` (`TahapanLelangID`, `TahapanLelang`) VALUES
(7, 'Masa Sanggah Pasca Kualifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jns_pengumuman`
--

CREATE TABLE `tabel ms_jns_pengumuman` (
  `JenisPengumumanID` int(2) NOT NULL,
  `JenisPengumuman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jns_pengumuman`
--

INSERT INTO `tabel ms_jns_pengumuman` (`JenisPengumumanID`, `JenisPengumuman`) VALUES
(1, 'Pengumuman Rekanan');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_jns_user`
--

CREATE TABLE `tabel ms_jns_user` (
  `JenisUserID` int(2) NOT NULL,
  `JenisUser` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_jns_user`
--

INSERT INTO `tabel ms_jns_user` (`JenisUserID`, `JenisUser`) VALUES
(1, 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_pegawai`
--

CREATE TABLE `tabel ms_pegawai` (
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
-- Dumping data for table `tabel ms_pegawai`
--

INSERT INTO `tabel ms_pegawai` (`NIP`, `JabatanID`, `GolonganID`, `StatusPegawai`, `NamaPegawai`, `JenisKelamin`, `Agama`, `TmptLahir`, `TglLahir`, `Alamat`, `NoTelephone`, `NoHandPhone`, `Email`, `PhotoPegawai`, `LastUpdate`) VALUES
('120155245', 1, 1, 'Aktif', 'ENDAH PURNAMASARI,SH', 'W', 'Islam', 'Semarang', '1975-01-12', 'Perumahan Wisma Asri BLOK A', '62218877281', '085373320460', 'endah@gmail.com', 'photo.jpg', '2007-12-12 01:34:08');

-- --------------------------------------------------------

--
-- Table structure for table `tabel ms_rekanan`
--

CREATE TABLE `tabel ms_rekanan` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NO_NPWP` varchar(25) NOT NULL,
  `NO_SIUP` varchar(25) NOT NULL,
  `NamaRekanan` varchar(50) NOT NULL,
  `KontakPerson` varchar(50) NOT NULL,
  `AlamatRekanan` varchar(100) NOT NULL,
  `KodeAreaPhone` varchar(4) NOT NULL,
  `NoTelephone` varchar(25) NOT NULL,
  `KodeAreaFax` varchar(4) NOT NULL,
  `NoFax` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `AlamatKantorPusat` varchar(100) NOT NULL,
  `KodeAreaPhoneKantorPusat` varchar(4) NOT NULL,
  `NoTlpKantorPusat` varchar(25) NOT NULL,
  `KodeAreaFaxKantorPusat` varchar(25) NOT NULL,
  `NoFaxKntrPusat` varchar(25) NOT NULL,
  `DeskripsiPesanan` text NOT NULL,
  `StatusRekanan` varchar(15) NOT NULL,
  `dokRekanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel ms_rekanan`
--

INSERT INTO `tabel ms_rekanan` (`NoPendaftaran`, `NO_NPWP`, `NO_SIUP`, `NamaRekanan`, `KontakPerson`, `AlamatRekanan`, `KodeAreaPhone`, `NoTelephone`, `KodeAreaFax`, `NoFax`, `Email`, `AlamatKantorPusat`, `KodeAreaPhoneKantorPusat`, `NoTlpKantorPusat`, `KodeAreaFaxKantorPusat`, `NoFaxKntrPusat`, `DeskripsiPesanan`, `StatusRekanan`, `dokRekanan`) VALUES
('PEND0112147', '02.378.769.5.665.000', '01467/13.1.824.51', 'PT. INDOAVIS NUSANTARA', 'BAMBANG PAMUNGKAS', 'Bandara Internasional Halim Perdana Kusuma, Gedung Terminai Lantai 2 No. A-50/PK Jakarta 132240', '6336', '829729739', '6336', '808080808', 'indoavis@gmail.com', 'Bandara Internasional Halim Perdana Kusuma', '6336', '0808978876', '6336', '6336', 'PT. Indoavis bersiri pada tanggal 3 maret 2004', 'Aktif', 'Doklelang/profile.zip');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_daftar_hitam_rekanan`
--

CREATE TABLE `tabel tr_daftar_hitam_rekanan` (
  `DaftarHitamRekananID` int(10) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `NoPendaftaran` varchar(16) NOT NULL,
  `Awal_berlaku` date NOT NULL,
  `SebabDimasukkan` varchar(200) NOT NULL,
  `StatusDaftarHitam` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_daftar_hitam_rekanan`
--

INSERT INTO `tabel tr_daftar_hitam_rekanan` (`DaftarHitamRekananID`, `NIP`, `NoPendaftaran`, `Awal_berlaku`, `SebabDimasukkan`, `StatusDaftarHitam`) VALUES
(1, '123456784', 'PENG050405123443', '2007-04-03', 'Mencoba untuk mengoyok panitia lelang', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_dokumen_standart`
--

CREATE TABLE `tabel tr_dokumen_standart` (
  `DokumenStdID` int(6) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `JudulDokumen` varchar(50) NOT NULL,
  `DeskripsiDokumen` varchar(100) NOT NULL,
  `DokumenStandart` varchar(200) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_dokumen_standart`
--

INSERT INTO `tabel tr_dokumen_standart` (`DokumenStdID`, `NIP`, `JudulDokumen`, `DeskripsiDokumen`, `DokumenStandart`, `LastUpdate`) VALUES
(1, '123536798', 'Petunjuk tata cara pendaftaran', 'Petunjuk untuk calon pengunjung web', 'doc_standart/STD070806122324.doc', '2007-05-03 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_faq`
--

CREATE TABLE `tabel tr_faq` (
  `FaqID` int(4) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `EmailPenanya` varchar(100) NOT NULL,
  `Answer` varchar(500) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_faq`
--

INSERT INTO `tabel tr_faq` (`FaqID`, `NIP`, `Question`, `EmailPenanya`, `Answer`, `LastUpdate`) VALUES
(1, '123456798', 'Apakah ada peraturan yang mengatur proses lelang proyek pengadaan barang atau jasa?', 'ohm_john@yahoo.com', 'Ada yaitu kepres no 80tahun 2003', '2007-05-04 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_kompetensi`
--

CREATE TABLE `tabel tr_kompetensi` (
  `NIP` varchar(9) NOT NULL,
  `SertifikatYgDimiliki` varchar(100) NOT NULL,
  `LembagaPemberi` varchar(100) NOT NULL,
  `TglPerolehan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_kompetensi`
--

INSERT INTO `tabel tr_kompetensi` (`NIP`, `SertifikatYgDimiliki`, `LembagaPemberi`, `TglPerolehan`) VALUES
('120155245', 'Safety Audit Of Air Traffic Service Course', 'Singapore Aviation Academy', '2020-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_lelang`
--

CREATE TABLE `tabel tr_lelang` (
  `NomorLelang` varchar(16) NOT NULL,
  `JenisLelangID` int(2) NOT NULL,
  `NamaLelang` varchar(50) NOT NULL,
  `TanggalLelang` date NOT NULL,
  `PenggunaLelang` varchar(100) NOT NULL,
  `DeskripsiLelang` text NOT NULL,
  `HPS` float NOT NULL,
  `MetodePenyampainDok` varchar(50) NOT NULL,
  `DokumenPersyaratan` varchar(200) NOT NULL,
  `DeskripsiDokumenPersyaratan` varchar(200) NOT NULL,
  `DokumenLain` varchar(200) NOT NULL,
  `DeskripsiDokumenLain` varchar(250) NOT NULL,
  `StatusLelang` varchar(15) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_lelang`
--

INSERT INTO `tabel tr_lelang` (`NomorLelang`, `JenisLelangID`, `NamaLelang`, `TanggalLelang`, `PenggunaLelang`, `DeskripsiLelang`, `HPS`, `MetodePenyampainDok`, `DokumenPersyaratan`, `DeskripsiDokumenPersyaratan`, `DokumenLain`, `DeskripsiDokumenLain`, `StatusLelang`, `LastUpdate`) VALUES
('LLNG030405124432', 1, 'Lelang Pengadaan Seragam Direktorat Jenderal Per..', '2003-04-05', 'Seluruh Karyawan \r\nDirektorat jenderal Perhubungan Udara', 'Pengadaan pakaian seragam baru untuk karyawan', 100000000, 'Metode Dua Sampul', 'doc_persyaratan/LLNG030405124432', 'Dokumen Persyaratan Lelang', 'doc_lain/LLNG030405124432.doc', 'Jenis Bahan Yang Diperbolehkan', 'tidak aktif', '2003-04-05 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_panitia`
--

CREATE TABLE `tabel tr_panitia` (
  `NomorLelang` varchar(16) NOT NULL,
  `JabatanPanitiaID` int(2) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `StatusPantia` varchar(15) NOT NULL,
  `DeskripsiStatusPanitia` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_panitia`
--

INSERT INTO `tabel tr_panitia` (`NomorLelang`, `JabatanPanitiaID`, `NIP`, `StatusPantia`, `DeskripsiStatusPanitia`, `LastUpdate`) VALUES
('LLNG070304104532', 2, '120155245', 'TidakAktif', 'Anggota ini dicabut keanggotaannya karena harus menjalankan tugas yang lebih penting di kota surby', '2007-12-12 01:17:13');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_pengalaman`
--

CREATE TABLE `tabel tr_pengalaman` (
  `NIP` varchar(9) NOT NULL,
  `NamaPryk` varchar(50) NOT NULL,
  `JbtnPryk` varchar(50) NOT NULL,
  `PimpinanProyek` varchar(50) NOT NULL,
  `LokasiPryk` varchar(100) NOT NULL,
  `TglmulaiPryk` date NOT NULL,
  `TglBerakhirPryk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_pengalaman`
--

INSERT INTO `tabel tr_pengalaman` (`NIP`, `NamaPryk`, `JbtnPryk`, `PimpinanProyek`, `LokasiPryk`, `TglmulaiPryk`, `TglBerakhirPryk`) VALUES
('120155245', 'Pengadaan Enroute Chart', 'Anggota Panitia', 'ENDAH PURNAMASARI,SH', 'JAKARTA', '2019-10-01', '2019-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_pengumuman`
--

CREATE TABLE `tabel tr_pengumuman` (
  `NoPengumuman` varchar(16) NOT NULL,
  `JenisPengumumanID` int(2) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `TanggalPengumuman` date NOT NULL,
  `JudulPengumuman` varchar(50) NOT NULL,
  `IsiPengumuman` text NOT NULL,
  `JudulDokumenPengumuman` varchar(50) NOT NULL,
  `DokumenPengumuman` varchar(200) NOT NULL,
  `DeskripsiPengumuman` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_pengumuman`
--

INSERT INTO `tabel tr_pengumuman` (`NoPengumuman`, `JenisPengumumanID`, `NIP`, `TanggalPengumuman`, `JudulPengumuman`, `IsiPengumuman`, `JudulDokumenPengumuman`, `DokumenPengumuman`, `DeskripsiPengumuman`, `LastUpdate`) VALUES
('PENG070403094532', 1, '123456798', '2007-04-03', 'Pengumuman Lelang Pengadaan Alat Navigasi Pesawat', 'Direktorat Jenderak Perhubungan Udara\r\nsedangkan membuka lelang proyek pengadaan...', 'Dokumen Persyaratan Lelang proyekPengadaan Alat...', 'dokumen/PENG070403094532.doc', 'Dokumen Persyaratan Lelang proyekPengadaan Alat Navigasi Pesawat', '2007-05-04 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_pengumuman_lelang`
--

CREATE TABLE `tabel tr_pengumuman_lelang` (
  `NoPengumuman` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_pengumuman_lelang`
--

INSERT INTO `tabel tr_pengumuman_lelang` (`NoPengumuman`, `NomorLelang`) VALUES
('PENG070403094532', 'LLNG070305123454');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_pin_request`
--

CREATE TABLE `tabel tr_pin_request` (
  `RequestID` int(4) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `KdUser` varchar(16) NOT NULL,
  `JenisUser` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telephone` varchar(25) NOT NULL,
  `Handphone` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_pin_request`
--

INSERT INTO `tabel tr_pin_request` (`RequestID`, `NIP`, `KdUser`, `JenisUser`, `Email`, `Telephone`, `Handphone`) VALUES
(1, '173849374', 'PEND070101092334', 'Rekanan', 'info@perusahaanA.com', '62215307765', '6221085919');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_rekanan_lelang`
--

CREATE TABLE `tabel tr_rekanan_lelang` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `statusIkut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_rekanan_lelang`
--

INSERT INTO `tabel tr_rekanan_lelang` (`NoPendaftaran`, `NomorLelang`, `statusIkut`) VALUES
('PEND07010192334', 'LLNG070305123454', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_rekanan_tahapan_lelang`
--

CREATE TABLE `tabel tr_rekanan_tahapan_lelang` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `TahapanLelangID` int(2) NOT NULL,
  `dokRekanan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_rekanan_tahapan_lelang`
--

INSERT INTO `tabel tr_rekanan_tahapan_lelang` (`NoPendaftaran`, `NomorLelang`, `TahapanLelangID`, `dokRekanan`) VALUES
('PEND190120081315', 'LLNG100120081120', 2, 'dokLelang/PEND190120081DokLelang.zip');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_tahapan_lelang`
--

CREATE TABLE `tabel tr_tahapan_lelang` (
  `NomorLelang` varchar(16) NOT NULL,
  `TahapanLelangID` int(2) NOT NULL,
  `JudulDokumen` varchar(50) NOT NULL,
  `DokumenTahapan` varchar(200) NOT NULL,
  `DeskripsiDokumenTahapan` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_tahapan_lelang`
--

INSERT INTO `tabel tr_tahapan_lelang` (`NomorLelang`, `TahapanLelangID`, `JudulDokumen`, `DokumenTahapan`, `DeskripsiDokumenTahapan`, `LastUpdate`) VALUES
('LLNG070305123454', 2, 'Persyaratan Lelang', 'doc_tahapan/LLNG070305123454', 'Persyaratan Lelang Proyek', '2007-03-05 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_tanya_jawab`
--

CREATE TABLE `tabel tr_tanya_jawab` (
  `NoPendaftaran` varchar(16) NOT NULL,
  `NomorLelang` varchar(16) NOT NULL,
  `Pertanyaan` varchar(100) NOT NULL,
  `Jawaban` varchar(100) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_tanya_jawab`
--

INSERT INTO `tabel tr_tanya_jawab` (`NoPendaftaran`, `NomorLelang`, `Pertanyaan`, `Jawaban`, `LastUpdate`) VALUES
('PEND070101092334', 'LLNG070305123454', 'Kapan saya harus mengirimkan data-data proyek?', 'Tanggal 23 Desember 2007', '2007-12-23 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `tabel tr_user`
--

CREATE TABLE `tabel tr_user` (
  `UserID` varchar(6) NOT NULL,
  `JenisUserID` int(2) NOT NULL,
  `NIP` varchar(9) NOT NULL,
  `NoPendaftaran` varchar(16) NOT NULL,
  `PIN` varchar(6) NOT NULL,
  `StatusUser` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabel tr_user`
--

INSERT INTO `tabel tr_user` (`UserID`, `JenisUserID`, `NIP`, `NoPendaftaran`, `PIN`, `StatusUser`) VALUES
('1', 1, '123456798', 'null', '123456', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel ms_golongan`
--
ALTER TABLE `tabel ms_golongan`
  ADD PRIMARY KEY (`GolonganID`);

--
-- Indexes for table `tabel ms_jabatan`
--
ALTER TABLE `tabel ms_jabatan`
  ADD PRIMARY KEY (`JabatanID`);

--
-- Indexes for table `tabel ms_jabatan_panitia`
--
ALTER TABLE `tabel ms_jabatan_panitia`
  ADD PRIMARY KEY (`JabatanPanitiaID`);

--
-- Indexes for table `tabel ms_jenis_lelang`
--
ALTER TABLE `tabel ms_jenis_lelang`
  ADD PRIMARY KEY (`JenisLelangID`);

--
-- Indexes for table `tabel ms_jenis_tahapan_lelang`
--
ALTER TABLE `tabel ms_jenis_tahapan_lelang`
  ADD PRIMARY KEY (`TahapanLelangID`);

--
-- Indexes for table `tabel ms_jns_pengumuman`
--
ALTER TABLE `tabel ms_jns_pengumuman`
  ADD PRIMARY KEY (`JenisPengumumanID`);

--
-- Indexes for table `tabel ms_jns_user`
--
ALTER TABLE `tabel ms_jns_user`
  ADD PRIMARY KEY (`JenisUserID`);

--
-- Indexes for table `tabel ms_pegawai`
--
ALTER TABLE `tabel ms_pegawai`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `FK1` (`JabatanID`),
  ADD KEY `FK2` (`GolonganID`);

--
-- Indexes for table `tabel ms_rekanan`
--
ALTER TABLE `tabel ms_rekanan`
  ADD PRIMARY KEY (`NoPendaftaran`);

--
-- Indexes for table `tabel tr_daftar_hitam_rekanan`
--
ALTER TABLE `tabel tr_daftar_hitam_rekanan`
  ADD PRIMARY KEY (`DaftarHitamRekananID`),
  ADD KEY `FK1` (`NIP`),
  ADD KEY `FK2` (`NoPendaftaran`);

--
-- Indexes for table `tabel tr_dokumen_standart`
--
ALTER TABLE `tabel tr_dokumen_standart`
  ADD PRIMARY KEY (`DokumenStdID`),
  ADD KEY `FK` (`NIP`);

--
-- Indexes for table `tabel tr_faq`
--
ALTER TABLE `tabel tr_faq`
  ADD PRIMARY KEY (`FaqID`),
  ADD KEY `FK` (`NIP`);

--
-- Indexes for table `tabel tr_kompetensi`
--
ALTER TABLE `tabel tr_kompetensi`
  ADD KEY `FK` (`NIP`);

--
-- Indexes for table `tabel tr_lelang`
--
ALTER TABLE `tabel tr_lelang`
  ADD PRIMARY KEY (`NomorLelang`),
  ADD KEY `FK1` (`JenisLelangID`);

--
-- Indexes for table `tabel tr_panitia`
--
ALTER TABLE `tabel tr_panitia`
  ADD KEY `FK1` (`NomorLelang`),
  ADD KEY `FK2` (`JabatanPanitiaID`),
  ADD KEY `FK3` (`NIP`);

--
-- Indexes for table `tabel tr_pengalaman`
--
ALTER TABLE `tabel tr_pengalaman`
  ADD KEY `FK` (`NIP`);

--
-- Indexes for table `tabel tr_pengumuman`
--
ALTER TABLE `tabel tr_pengumuman`
  ADD PRIMARY KEY (`NoPengumuman`),
  ADD KEY `FK1` (`JenisPengumumanID`),
  ADD KEY `FK2` (`NIP`);

--
-- Indexes for table `tabel tr_pengumuman_lelang`
--
ALTER TABLE `tabel tr_pengumuman_lelang`
  ADD KEY `FK1` (`NoPengumuman`),
  ADD KEY `FK2` (`NomorLelang`);

--
-- Indexes for table `tabel tr_pin_request`
--
ALTER TABLE `tabel tr_pin_request`
  ADD PRIMARY KEY (`RequestID`),
  ADD KEY `FK1` (`NIP`);

--
-- Indexes for table `tabel tr_rekanan_lelang`
--
ALTER TABLE `tabel tr_rekanan_lelang`
  ADD KEY `FK1` (`NoPendaftaran`),
  ADD KEY `FK2` (`NomorLelang`);

--
-- Indexes for table `tabel tr_rekanan_tahapan_lelang`
--
ALTER TABLE `tabel tr_rekanan_tahapan_lelang`
  ADD KEY `FK1` (`NoPendaftaran`),
  ADD KEY `FK2` (`NomorLelang`),
  ADD KEY `FK3` (`TahapanLelangID`);

--
-- Indexes for table `tabel tr_tahapan_lelang`
--
ALTER TABLE `tabel tr_tahapan_lelang`
  ADD KEY `FK1` (`NomorLelang`),
  ADD KEY `FK2` (`TahapanLelangID`);

--
-- Indexes for table `tabel tr_tanya_jawab`
--
ALTER TABLE `tabel tr_tanya_jawab`
  ADD KEY `FK1` (`NoPendaftaran`),
  ADD KEY `FK2` (`NomorLelang`);

--
-- Indexes for table `tabel tr_user`
--
ALTER TABLE `tabel tr_user`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `FK1` (`JenisUserID`),
  ADD KEY `FK2` (`NIP`),
  ADD KEY `FK3` (`NoPendaftaran`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
