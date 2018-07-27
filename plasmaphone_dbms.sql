-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2018 pada 05.29
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plasmaphone_dbms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `d_mem`
--

CREATE TABLE `d_mem` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(255) NOT NULL,
  `m_password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `d_mem`
--

INSERT INTO `d_mem` (`m_id`, `m_username`, `m_password`, `created_at`, `updated_at`) VALUES
(1, 'dirga', '$2y$10$MhRRoO2srXh4BccJnbpdd.bAvRSnbSbLOsE/nR6A6zHPRCsB7t4UK', '2018-07-26 09:37:29', '2018-07-26 10:15:35'),
(2, 'developer', '$2y$10$bbmhzaCmXmlTP70D54k5Se/2hjLPHYBkmFpyHqcXz3wW97r8IfumG', '2018-07-26 10:15:40', '2018-07-26 10:15:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `d_mem`
--
ALTER TABLE `d_mem`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `d_mem`
--
ALTER TABLE `d_mem`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
