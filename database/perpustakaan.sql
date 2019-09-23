-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2019 pada 23.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataperpus`
--

CREATE TABLE `dataperpus` (
  `nim` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kode_bk` int(30) NOT NULL,
  `judul_bk` varchar(50) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `hrs_kembali` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `lambat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dataperpus`
--

INSERT INTO `dataperpus` (`nim`, `nama`, `kode_bk`, `judul_bk`, `tgl_pinjam`, `hrs_kembali`, `tgl_kembali`, `lambat`) VALUES
(1301174021, 'Irbah Salsabila', 12, 'Dasar Algoritma Asik', '2019-09-01', '2019-09-03', '2019-09-13', 10),
(1301174029, 'Irbah Saraswati', 123, 'tips agar dapat dapat cowok', '2020-02-01', '2020-02-10', '2019-10-17', 8),
(1301174033, 'Nurul Zakiyyah', 1414, 'Matematika Diskrit', '2019-11-14', '2019-11-19', '2019-12-03', 15),
(1301174057, 'Aanisah Rifda Rusjdy', 13, 'Logika Matematika', '2019-09-11', '2019-09-14', '2019-09-16', 2),
(1301174343, 'Setyo Adji Pratomo', 5673, 'Belajar Bahasa Kalbu', '2020-01-01', '2020-01-04', '2020-02-01', 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataperpus`
--
ALTER TABLE `dataperpus`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
