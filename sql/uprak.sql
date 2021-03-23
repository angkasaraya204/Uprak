-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Mar 2021 pada 13.09
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uprak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `allproduk`
--

CREATE TABLE `allproduk` (
  `id` int(11) NOT NULL,
  `nma_produk` varchar(250) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `hrga_produk` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `desk` text DEFAULT NULL,
  `unggul` text DEFAULT NULL,
  `latestup` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `allproduk`
--

INSERT INTO `allproduk` (`id`, `nma_produk`, `gambar`, `hrga_produk`, `quantity`, `desk`, `unggul`, `latestup`) VALUES
(14, 'VIEWSONICs Curved Monitor 32 Inch VX3216', 'https://static.bmdstatic.com/pk/product/medium/5b4c467f3ad28.jpg', 5000000, 1, 'eregrvetgetgfedsvs', 'sadgsageabeat', '2021-03-23 09:05:59'),
(15, ' SAMSUNGs Galaxy M21', 'https://static.bmdstatic.com/pk/product/medium/5ecc9845900f0.jpg', 3500000, 1, 'wetvrwegt er', 'ebyybrebyyr', '2021-03-23 09:06:32'),
(16, 'SAMSUNG Galaxy Watch Active 2 44mm', 'https://static.bmdstatic.com/pk/product/medium/5d84ae902450f.jpg', 4200000, 1, 'er gebtebtet', 'ewrtvbvewt3', '2021-03-23 09:07:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
