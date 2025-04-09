-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2024 pada 17.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(20) NOT NULL,
  `judul_buku` varchar(256) NOT NULL,
  `penulis` varchar(256) NOT NULL,
  `edisi` int(20) NOT NULL,
  `impersum` varchar(256) NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `isbn` varchar(256) NOT NULL,
  `golongan` varchar(256) NOT NULL,
  `bahasa` varchar(30) NOT NULL,
  `gambar_buku` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `edisi`, `impersum`, `lokasi`, `isbn`, `golongan`, `bahasa`, `gambar_buku`) VALUES
('1', 'Mikrotik Fundamental', 'Very Setiawan', 1, '2018', 'Blitar', '123', 'Mata Pelajaran', 'Indonesia', ''),
('2', 'Hujan', 'Tere Liye', 1, '1029', 'Jakarta', '1234', 'Novel', 'Indonesia', ''),
('3', 'Menjalankan Container menggunakan Ubuntu', 'M. Galih A.', 2019, 'xx', 'Jakarta', '123', 'Mata Pelajaran', 'Indonesia', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `no_data` int(15) NOT NULL,
  `tanggal_pendataan` date NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nim` int(15) NOT NULL,
  `nama_pengunjung` varchar(256) NOT NULL,
  `prodi` varchar(256) NOT NULL,
  `fakultas` varchar(256) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`nim`, `nama_pengunjung`, `prodi`, `fakultas`, `id_petugas`) VALUES
(1800018041, 'Destia Eka', 'XI TKJ 1', 'Teknik Komputer dan Jaringan', 12355),
(1800018042, 'Gea Viki Adinda Putri', 'XI TKJ 1', 'Teknik Komputer dan Jaringan', 174),
(1800018158, 'Nabila Keysha', 'X BD 1', 'Bisnis Digital', 114),
(1900018150, 'Shaberina Syafa', 'XII JB 2', 'Jasa Boga', 189);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(15) NOT NULL,
  `nama_petugas` varchar(256) NOT NULL,
  `pekerjaan` varchar(256) NOT NULL,
  `sift` enum('senin - rabu pagi, kamis - sabtu siang','senin -  rabu siang, kamis - sabtu pagi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `pekerjaan`, `sift`) VALUES
(109, 'Afifah', 'Bersih-bersih', 'senin - rabu pagi, kamis - sabtu siang'),
(111, 'Afrizal', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(112, 'Ahmad', 'Student Employment', 'senin -  rabu siang, kamis - sabtu pagi'),
(113, 'Yusron', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(114, 'Aila', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(124, 'Aldo', 'apa aja', 'senin -  rabu siang, kamis - sabtu pagi'),
(145, 'Ananda', 'Penjaga', 'senin -  rabu siang, kamis - sabtu pagi'),
(156, 'Sabril', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(174, 'Niya', 'Bersih-bersih buku', 'senin - rabu pagi, kamis - sabtu siang'),
(189, 'Awalun ', 'Bersih-bersih', 'senin -  rabu siang, kamis - sabtu pagi'),
(199, 'Bagas', 'Bersih-bersih', 'senin -  rabu siang, kamis - sabtu pagi'),
(1111, 'Brian', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(1234, 'Cahaya', 'Student Employment', 'senin - rabu pagi, kamis - sabtu siang'),
(12355, 'Chelsea', 'Bersih-bersih', 'senin - rabu pagi, kamis - sabtu siang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `no_pinjam` int(255) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `nim` int(15) NOT NULL,
  `id_buku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`no_pinjam`, `tanggal_pinjam`, `nim`, `id_buku`) VALUES
(1, '2019-12-18', 1700018174, 'AB11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`no_data`),
  ADD KEY `no_buku` (`id_buku`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_petugas_2` (`id_petugas`),
  ADD KEY `id_petugas_3` (`id_petugas`),
  ADD KEY `id_petugas_4` (`id_petugas`),
  ADD KEY `id_petugas_5` (`id_petugas`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `nim` (`nim`,`id_buku`),
  ADD KEY `id_buku` (`id_buku`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `nim` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1900018151;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12356;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `no_pinjam` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `daftar_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD CONSTRAINT `pengunjung_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
