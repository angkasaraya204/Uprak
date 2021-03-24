-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 07.13
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
(14, 'VIEWSONICs Curved Monitor 32 Inch VX3216', 'https://static.bmdstatic.com/pk/product/medium/5b4c467f3ad28.jpg', 5000000, 1, 'Screen Size 32 Inch Curved <br>Resolution 1920 x 1080 <br>Contrast Ratio 3000:1 <br>Brightness 280 cd/m2 <br>Connector HDMI/DVI-D/VGA <br>Unit Utama', 'ViewSonic VX3216-SCMH adalah monitor lengkung dengan layar 32 inci. \r\nMonitor ini dibuat untuk memberikan pengalaman menonton imersif untuk pengguna rumahan. \r\nMonitor ini memiliki sudut kelengkungan layar 1800R yang memberi kenyamanan di mata Anda. \r\nCakupan warna gamut lebar 88% NTSC secara dratis meningkatkan warna pada layar. \r\nSpeaker ganda menambah sensasi suara stereo saat menikmati hiburan multimedia. \r\nViewSonic menyediakan opsi konektvitas HDMI, VGA, dan DVI sehingga fleksibel dihubungkan ke banyak perangkat. \r\nFitur ViewMode eksklusif menawarkan setingan preset untuk disesuaikan dengan kebutuhan Anda. \r\nBerikut ini semua kelebihan monitor ViewSonic VX3216-SCMH.', '2021-03-24 01:21:57'),
(15, ' SAMSUNGs Galaxy M21', 'https://static.bmdstatic.com/pk/product/medium/5ecc9845900f0.jpg', 3500000, 1, 'wetvrwegt er', 'ebyybrebyyr', '2021-03-23 09:06:32'),
(16, 'SAMSUNG Galaxy Watch Active 2 44mm', 'https://static.bmdstatic.com/pk/product/medium/5d84ae902450f.jpg', 4200000, 1, 'er gebtebtet', 'ewrtvbvewt3', '2021-03-23 09:07:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `katasandi` varchar(250) DEFAULT NULL,
  `nama` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `katasandi`, `nama`) VALUES
(4, 'angkasaraya', '714b7771e5a001d74efe95808e7be19e', 'angkasa'),
(5, 'jembarwiradhika', '5195b2a16d85b04303da4492caeeedb1', 'jembar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `allproduk`
--
ALTER TABLE `allproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
