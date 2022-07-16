-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsimpeg`
--

-- --------------------------------------------------------

--
-- Table structure for table `tcuti`
--

CREATE TABLE `tcuti` (
  `idcuti` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `tanggal_pengajuan` datetime NOT NULL,
  `tanggal_masuk` datetime NOT NULL,
  `alasan` text NOT NULL,
  `status` enum('terima','tolak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcuti`
--

INSERT INTO `tcuti` (`idcuti`, `nip`, `tanggal_pengajuan`, `tanggal_masuk`, `alasan`, `status`) VALUES
(11, '2001093001', '2022-01-17 00:00:00', '2022-01-25 00:00:00', 'Ingin Liburan Soalnya Lelah', 'terima');

-- --------------------------------------------------------

--
-- Table structure for table `tjabatan`
--

CREATE TABLE `tjabatan` (
  `idjabatan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `namajabatan` varchar(30) NOT NULL,
  `eselon` varchar(30) NOT NULL,
  `periode` date NOT NULL,
  `statusjabatan` enum('Pensiun','Tidak Pensiun') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tkeluarga`
--

CREATE TABLE `tkeluarga` (
  `nik` varchar(20) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `namakel` varchar(30) NOT NULL,
  `tempatlahir` text NOT NULL,
  `tgllahir` date NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `hubungan` enum('Ayah','Ibu','Suami','Istri','Anak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tkeluarga`
--

INSERT INTO `tkeluarga` (`nik`, `nip`, `namakel`, `tempatlahir`, `tgllahir`, `pendidikan`, `pekerjaan`, `hubungan`) VALUES
('20031701006', '2001093001', 'Maylia', 'Padang', '1969-05-05', 'SMA', 'Pegawai Swasta', 'Ibu');

-- --------------------------------------------------------

--
-- Table structure for table `tpangkat`
--

CREATE TABLE `tpangkat` (
  `id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `namapangkat` varchar(30) NOT NULL,
  `jenispangkat` varchar(30) NOT NULL,
  `tamat` date NOT NULL,
  `sahsk` date NOT NULL,
  `pengesahsk` varchar(30) NOT NULL,
  `nosk` varchar(30) NOT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpangkat`
--

INSERT INTO `tpangkat` (`id`, `nip`, `namapangkat`, `jenispangkat`, `tamat`, `sahsk`, `pengesahsk`, `nosk`, `status`) VALUES
(8, '2001093001', 'Sekretaris', 'II', '2023-02-14', '2022-01-14', 'Ronal', '2022011029', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tpegawai`
--

CREATE TABLE `tpegawai` (
  `nip` varchar(15) NOT NULL,
  `namapegawai` varchar(30) NOT NULL,
  `fotopegawai` longblob NOT NULL,
  `tempatlahir` text NOT NULL,
  `tanggallahir` date NOT NULL,
  `jeniskel` enum('Laki-laki','Perempuan') NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `goldar` enum('A','B','AB','O') NOT NULL,
  `statuspernikahan` enum('Kawin','Lajang') NOT NULL,
  `statuskepegawaian` enum('PNS','Honor') NOT NULL,
  `statususer` enum('Aktif','Nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpegawai`
--

INSERT INTO `tpegawai` (`nip`, `namapegawai`, `fotopegawai`, `tempatlahir`, `tanggallahir`, `jeniskel`, `nohp`, `agama`, `email`, `alamat`, `goldar`, `statuspernikahan`, `statuskepegawaian`, `statususer`) VALUES
('2001091006', 'Elvirina Joice', 0x706e672d636c69706172742d636f6d70757465722d69636f6e732d6176617461722d72657374617572616e742d6368696c642d6f636375706174696f6e2d70656f706c652d6368696c642d666163652e706e67, 'Medan', '2003-01-14', 'Perempuan', '08136637442', 'Kristen Protestan', 'elvijc@yahoo.com', 'Jl. Toba No.14', 'O', 'Lajang', 'Honor', 'Aktif'),
('2001091018', 'Rita', 0x696d61676573202831292e706e67, 'Padang', '2002-12-14', 'Laki-laki', '081203947582', 'Islam', 'ritarmdn@gmail.com', 'Jl. Tunggul Hitam No.5', 'AB', 'Lajang', 'PNS', 'Aktif'),
('2001092016', 'Winda Wulandari', 0x706e672d636c69706172742d636f6d70757465722d69636f6e732d6176617461722d72657374617572616e742d6368696c642d6f636375706174696f6e2d70656f706c652d6368696c642d666163652e706e67, 'Solok', '2002-09-16', 'Perempuan', '082291837821', 'Islam', 'windawul@gmail.com', 'Jl. Solok No.17 RT 03 ', 'AB', 'Kawin', 'PNS', 'Aktif'),
('2001092019', 'Azlan', 0x36332d3633343537345f627573696e6573732d70656f706c652d636c69706172742d706e672d627573696e6573732d706572736f6e2d636c69706172742d636c69702e706e67, 'Payakumbuh', '2002-05-12', 'Laki-laki', '082199384214', 'Islam', 'zlan23@gmail.com', 'Jl.Koto No.4 Payakumbuh', 'O', 'Lajang', 'Honor', 'Aktif'),
('2001092062', 'Ronny Febrian Saputra', 0x696d61676573202832292e706e67, 'Payakumbuh', '2002-07-25', 'Laki-laki', '08228734657', 'Islam', 'ronn@gmail.com', 'Jl.Arau No.20 Payakumbuh', 'A', 'Kawin', 'PNS', 'Aktif'),
('2001093001', 'Farah Hisanah Adwina', 0x312e6a706567, 'Padang', '2003-01-17', 'Perempuan', '082172709486', 'Islam', 'frah3393@gmail.com', 'Jl.Cendrawasih No.1 Air Tawar Barat', 'B', 'Lajang', 'Honor', 'Aktif'),
('2001093002', 'Nazlah', 0x696d61676573202831292e6a666966, 'Sawahlunto', '2002-02-18', 'Laki-laki', '081301932877', 'Islam', 'nazlah@gmail.com', 'Jl.Baru No.19 Sawahlunto', 'A', 'Lajang', 'PNS', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tpendidikan`
--

CREATE TABLE `tpendidikan` (
  `idpendidikan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `namainstansi` varchar(30) NOT NULL,
  `lokasi` text NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `tglijazah` date NOT NULL,
  `noijazah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tpendidikan`
--

INSERT INTO `tpendidikan` (`idpendidikan`, `nip`, `tingkat`, `namainstansi`, `lokasi`, `jurusan`, `tglijazah`, `noijazah`) VALUES
(2, '2001093001', 'SMA', 'SMAN 3 PADANG', 'Jl. Gajah Mada Dalam No.11, Gn. Pangilun, Kec. Padang Utara, Kota Padang, Sumatera Barat 25137', 'IPA', '2020-05-15', '1701200301'),
(3, '2001091018', 'SMK', 'SMK Khatib', 'Jl.Khatib Sulaiman No.9', 'Teknik Informatika', '2020-04-08', '091028312'),
(4, '2001093002', 'SMA', 'SMAN 2 Sawahlunto', 'Jl.Sawahlunto No.08', 'IPA', '2020-06-16', '2020391842'),
(5, '2001092062', 'SMK', 'SMK 1 Payakumbuh', 'Jl.Payakumbuh No.01', 'Teknologi dan Rekayasa', '2020-05-27', '202013924');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`iduser`, `username`, `password`) VALUES
(6, 'farahhisanah@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit` varchar(50) NOT NULL,
  `kepala_unit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id_unit`, `nama_unit`, `kepala_unit`) VALUES
(10, 'Dosen Teknologi Informasi', 'Ronal Hadi, ST., M.Kom.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tcuti`
--
ALTER TABLE `tcuti`
  ADD PRIMARY KEY (`idcuti`);

--
-- Indexes for table `tjabatan`
--
ALTER TABLE `tjabatan`
  ADD PRIMARY KEY (`idjabatan`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tkeluarga`
--
ALTER TABLE `tkeluarga`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tpangkat`
--
ALTER TABLE `tpangkat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tpegawai`
--
ALTER TABLE `tpegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tpendidikan`
--
ALTER TABLE `tpendidikan`
  ADD PRIMARY KEY (`idpendidikan`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tcuti`
--
ALTER TABLE `tcuti`
  MODIFY `idcuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tjabatan`
--
ALTER TABLE `tjabatan`
  MODIFY `idjabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tpangkat`
--
ALTER TABLE `tpangkat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tpendidikan`
--
ALTER TABLE `tpendidikan`
  MODIFY `idpendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tjabatan`
--
ALTER TABLE `tjabatan`
  ADD CONSTRAINT `tjabatan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tpegawai` (`nip`);

--
-- Constraints for table `tkeluarga`
--
ALTER TABLE `tkeluarga`
  ADD CONSTRAINT `tkeluarga_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tpegawai` (`nip`);

--
-- Constraints for table `tpangkat`
--
ALTER TABLE `tpangkat`
  ADD CONSTRAINT `tpangkat_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tpegawai` (`nip`);

--
-- Constraints for table `tpendidikan`
--
ALTER TABLE `tpendidikan`
  ADD CONSTRAINT `tpendidikan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tpegawai` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
