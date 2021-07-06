-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2021 pada 08.01
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bukutamu`
--

CREATE TABLE `tb_bukutamu` (
  `id_bukutamu` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_bukutamu`
--

INSERT INTO `tb_bukutamu` (`id_bukutamu`, `nama`, `email`, `komentar`) VALUES
(2, 'Reza', 'rezarinanda11@gmail.com', 'keren\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gallery`
--

CREATE TABLE `tb_gallery` (
  `id_gallery` int(15) NOT NULL,
  `gambar_gallery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_home`
--

CREATE TABLE `tb_home` (
  `no_home` int(10) NOT NULL,
  `gambar_home` varchar(255) NOT NULL,
  `isi_home` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_home`
--

INSERT INTO `tb_home` (`no_home`, `gambar_home`, `isi_home`) VALUES
(1, '', 'Lorem Ipsum Adalah'),
(2, '', 'Lorem Ipsum Adalah Yang Kedua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hotel`
--

CREATE TABLE `tb_hotel` (
  `id_hotel` int(15) NOT NULL,
  `nama_hotel` varchar(255) NOT NULL,
  `waktu_hotel` varchar(255) NOT NULL,
  `alamat_hotel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hotel`
--

INSERT INTO `tb_hotel` (`id_hotel`, `nama_hotel`, `waktu_hotel`, `alamat_hotel`) VALUES
(2, 'Hotel Genggong', '12 Januari 2021 - 30 Januari 2021', 'depok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kuliner`
--

CREATE TABLE `tb_kuliner` (
  `id_kuliner` int(15) NOT NULL,
  `nama_kuliner` varchar(255) NOT NULL,
  `jumlah_kuliner` varchar(255) NOT NULL,
  `alamat_kuliner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kuliner`
--

INSERT INTO `tb_kuliner` (`id_kuliner`, `nama_kuliner`, `jumlah_kuliner`, `alamat_kuliner`) VALUES
(1, 'reza', '1', 'cisalak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(15) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `role`) VALUES
(1, 'ida', 'ida', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tiketwisata`
--

CREATE TABLE `tb_tiketwisata` (
  `id_tiket` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(15) NOT NULL,
  `nama_wisata` varchar(255) NOT NULL,
  `alamat_wisata` varchar(255) NOT NULL,
  `harga_tiket` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jumlah_tiket` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `nama_wisata`, `alamat_wisata`, `harga_tiket`, `email`, `jumlah_tiket`) VALUES
(1, 'reza', 'cisalak', 'Rp 50.000', 'rezarinanda11@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  ADD PRIMARY KEY (`id_bukutamu`);

--
-- Indeks untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tb_home`
--
ALTER TABLE `tb_home`
  ADD PRIMARY KEY (`no_home`);

--
-- Indeks untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  ADD PRIMARY KEY (`id_hotel`);

--
-- Indeks untuk tabel `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tb_tiketwisata`
--
ALTER TABLE `tb_tiketwisata`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indeks untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_bukutamu`
--
ALTER TABLE `tb_bukutamu`
  MODIFY `id_bukutamu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_gallery`
--
ALTER TABLE `tb_gallery`
  MODIFY `id_gallery` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_home`
--
ALTER TABLE `tb_home`
  MODIFY `no_home` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hotel`
--
ALTER TABLE `tb_hotel`
  MODIFY `id_hotel` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_kuliner`
--
ALTER TABLE `tb_kuliner`
  MODIFY `id_kuliner` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_tiketwisata`
--
ALTER TABLE `tb_tiketwisata`
  MODIFY `id_tiket` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
