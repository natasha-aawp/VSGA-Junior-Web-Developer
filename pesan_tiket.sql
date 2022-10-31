-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2022 pada 05.15
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesan_tiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembeli`
--

CREATE TABLE `data_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama_pembeli` varchar(50) NOT NULL,
  `no_identitas` int(17) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `tempat_wisata` varchar(30) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `pengunjung_dewasa` int(11) NOT NULL,
  `pengunjung_anak_anak` int(11) NOT NULL,
  `total_pengunjung_anak_anak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_pembeli`
--

INSERT INTO `data_pembeli` (`id_pembeli`, `nama_pembeli`, `no_identitas`, `no_hp`, `tempat_wisata`, `tanggal_kunjungan`, `pengunjung_dewasa`, `pengunjung_anak_anak`, `total_pengunjung_anak_anak`) VALUES
(4, 'anastasia ardhiani', 9876, 2147483647, 'lawang sewu', '2022-09-21', 1, 1, 0),
(5, 'wiwik', 23141, 893124787, 'lawang sewu', '2022-09-30', 2, 1, 0),
(6, 'lina', 312412, 89728749, 'taman ancol', '2022-09-22', 10, 21, 0),
(7, 'kevin', 213246541, 2147483647, 'merbabu', '2022-09-30', 23, 1, 0),
(8, 'danang', 352352, 8647263, 'taman mini', '2022-09-24', 35, 10, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_wisata`
--

CREATE TABLE `data_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `harga_wisata` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pembeli`
--
ALTER TABLE `data_pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `data_wisata`
--
ALTER TABLE `data_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pembeli`
--
ALTER TABLE `data_pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `data_wisata`
--
ALTER TABLE `data_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
