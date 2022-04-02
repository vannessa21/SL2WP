-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 03:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `NamaDepan` varchar(30) NOT NULL,
  `NamaTengah` varchar(30) NOT NULL,
  `NamaBelakang` varchar(30) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TglLahir` date NOT NULL,
  `NIK` varchar(15) NOT NULL,
  `WargaNegara` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `NoHp` varchar(13) NOT NULL,
  `Alamat` text NOT NULL,
  `KodePos` char(5) NOT NULL,
  `FilePath` varchar(225) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`NamaDepan`, `NamaTengah`, `NamaBelakang`, `TempatLahir`, `TglLahir`, `NIK`, `WargaNegara`, `Email`, `NoHp`, `Alamat`, `KodePos`, `FilePath`, `Username`, `Password1`) VALUES
('kim', 'tae', 'hyung', 'lampung', '2022-04-01', '12345678910', 'Indonesia', 'diemcarpe2108@gmail.com', '+628180756501', 'Jl. Slamet Riyadi Gg. Mawar no 38 LK III RT046, Bumi Waras, Bandar Lampung,Lampung', '35534', 'terupload/lenovo-car.jpg', 'kim', 'a2lt'),
('van', 'van', 'van', 'lamp', '2022-04-03', '187107610802000', 'Indonesia', 'diemcarpe2108@gmail.com', '+628180756501', 'Jl. Slamet Riyadi Gg. Mawar no 38 LK III RT046, Bumi Waras, Bandar Lampung,Lampung', '35534', 'terupload/1277234-middle.png', 'jos', 'c2Fz'),
('van', 'nes', 'sa', 'lampung', '2022-04-01', '32112312312', 'Indonesia', 'diemajadeh@gmail.com', '+628180756501', 'Jl. Slamet Riyadi Gg. Mawar no 38 LK III RT046, Bumi Waras, Bandar Lampung,Lampung', '35225', 'terupload/', 'van', 'YzJGaA==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
