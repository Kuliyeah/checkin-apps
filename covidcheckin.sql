-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2021 pada 15.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covidcheckin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(10) NOT NULL,
  `namaAdmin` varchar(50) NOT NULL,
  `usernameAdmin` varchar(20) NOT NULL,
  `passwordAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idAdmin`, `namaAdmin`, `usernameAdmin`, `passwordAdmin`) VALUES
(1, 'Lovanto', 'admin', '$2y$10$hRi1qju2KOeEPcBZ0wYfhu/PN5e9Wl.ddWeDTds8Uokad764X9D1a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kunjungan`
--

CREATE TABLE `kunjungan` (
  `idKunjungan` int(100) NOT NULL,
  `idPengunjung` int(10) NOT NULL,
  `idMitra` int(10) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `checkout` varchar(255) NOT NULL,
  `statusKunjungan` enum('Selesai','Dalam Kunjungan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kunjungan`
--

INSERT INTO `kunjungan` (`idKunjungan`, `idPengunjung`, `idMitra`, `tanggal`, `checkin`, `checkout`, `statusKunjungan`) VALUES
(1, 6, 3, '29-12-2021', '09:00:00', '10:15:00', 'Selesai'),
(2, 1, 1, '29-12-2021', '09:10:00', '-', 'Dalam Kunjungan'),
(3, 4, 3, '29-12-2021', '09:59:50', '12:00:17', 'Selesai'),
(4, 2, 4, '29-12-2021', '13:21:00', '14:05:01', 'Selesai'),
(5, 3, 4, '29-12-2021', '13:25:55', '-', 'Dalam Kunjungan'),
(6, 5, 5, '29-12-2021', '14:22:04', '-', 'Dalam Kunjungan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `idMitra` int(10) NOT NULL,
  `namaMitra` varchar(50) NOT NULL,
  `alamatMitra` varchar(100) NOT NULL,
  `noHpMitra` varchar(12) NOT NULL,
  `jenisUsaha` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `fotoUsaha` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Verifikasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`idMitra`, `namaMitra`, `alamatMitra`, `noHpMitra`, `jenisUsaha`, `deskripsi`, `fotoUsaha`, `status`) VALUES
(1, 'Lasco Kaffe1', 'Jl. Buah Batu No.54, Burangrang, Kec. Lengkong, Kota Bandung, Jawa Barat 402621', '08210000001', 'Kaffe1', 'Kaffe1', '', 'Sudah Verifikasi'),
(2, 'Hoods Coffee', 'Jl. Kw. Industri Tunas Ruko No.1, Belian, Kec. Batam Kota, Kota Batam, Kepulauan Riau 29444', '082111190909', 'Kaffe', 'Menjual aneka minuman dan tempat santai', '', 'Sudah Verifikasi'),
(3, 'Lotte Mart', 'Jl. Trans Sumatera, Lampung', '08219999990', 'Modern Market', 'Tempat grosir termurah', '', 'Belum Verifikasi'),
(4, 'Transmart Bubat', 'Terusan Buah Batu, Bandung', '08222909900', 'Modern market dan tempat hiburan', 'tempat hiburan keluarga dan penjualan', '', 'Sudah Verifikasi'),
(5, 'Telyu Coffee', 'Lingkungan Telkom University, Bandung, Indonesia', '088131434225', 'Kaffe', 'Menjual aneka minuman mahasiswa', '', 'Belum Verifikasi'),
(9, 'Lasco Kaffe1', 'Jl. Buah Batu No.54, Burangrang, Kec. Lengkong, Kota Bandung, Jawa Barat 402621', '08210000001', 'Kaffe1', 'dwadaw aw daw dwda wd a dwa daw', 'TTD.png', 'Sudah Verifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE `pengunjung` (
  `idPengunjung` int(10) NOT NULL,
  `namaPengunjung` varchar(50) NOT NULL,
  `alamatPengunjung` varchar(100) NOT NULL,
  `noHpPengunjung` varchar(12) NOT NULL,
  `umurPengunjung` int(2) NOT NULL,
  `jenisKelaminPengunjung` enum('Pria','Wanita') NOT NULL,
  `statusKesehatan` enum('Negatif','Positif','ODP','OTG') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengunjung`
--

INSERT INTO `pengunjung` (`idPengunjung`, `namaPengunjung`, `alamatPengunjung`, `noHpPengunjung`, `umurPengunjung`, `jenisKelaminPengunjung`, `statusKesehatan`) VALUES
(1, 'Tatang Ruhiyan', 'Jl Sekolah Kencana 4 Bl B/604, Dki Jakarta', '08881213131', 18, 'Pria', 'Negatif'),
(2, 'Bambang Jaelani', 'Jl Raya Bekasi, Dki Jakarta', '08909028323', 23, 'Pria', 'Negatif'),
(3, 'Ismed Sofian', 'Gg. Pegangsaan timur, Jakarta.', '083134242424', 25, 'Pria', 'ODP'),
(4, 'Ayu Fadhila', 'Gg. Pegangsaan barat, Jakarta', '082932424233', 22, 'Wanita', 'Negatif'),
(5, 'Salsabilla Aini', 'Jl. Manasaja, Kec. Apasaja, Jateng', '083134141312', 22, 'Wanita', 'Negatif'),
(6, 'Aina Salsabilla Muslim', 'Bandar Jaya, Lampung', '081121311342', 21, 'Wanita', 'Negatif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indeks untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`idKunjungan`),
  ADD KEY `fk_idPengunjung` (`idPengunjung`),
  ADD KEY `fk_idMitra` (`idMitra`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`idMitra`);

--
-- Indeks untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`idPengunjung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `idKunjungan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `idMitra` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `idPengunjung` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `fk_idMitra` FOREIGN KEY (`idMitra`) REFERENCES `mitra` (`idMitra`),
  ADD CONSTRAINT `fk_idPengunjung` FOREIGN KEY (`idPengunjung`) REFERENCES `pengunjung` (`idPengunjung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
