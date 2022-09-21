-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2022 pada 06.41
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipesu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_surat_keluar`
--

CREATE TABLE `jenis_surat_keluar` (
  `id` int(11) NOT NULL,
  `nama_jenis` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_surat_keluar`
--

INSERT INTO `jenis_surat_keluar` (`id`, `nama_jenis`) VALUES
(1, 'Perintah'),
(2, 'Umum'),
(3, 'Pemanggilan'),
(4, 'Pidana'),
(5, 'Kejati Kejagung'),
(6, 'Keputusan'),
(10, 'Kejaksaann');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_surat` int(11) DEFAULT NULL,
  `nomor` varchar(255) DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `perihal` text DEFAULT NULL,
  `lampiran` text DEFAULT NULL,
  `file_lampiran` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `username`, `tanggal`, `jenis_surat`, `nomor`, `asal`, `tujuan`, `perihal`, `lampiran`, `file_lampiran`) VALUES
(1, 'admin', '2022-09-10', 1, 'PRINT-1232/O.3.20/EOH.1/08/2022', 'P-16 ; ANDRYAWAN PERDANA DISTA AGARA, S.H.', 'JPU', 'SP Penunjukkan JPU Untuk Mengikuti Perkembangan Penyidikan Perkara Tindak Pidana an. M. RIDUAN Alias DUAN Alias AMANG Bin IMBERAN', '-', NULL),
(2, 'admin', '2022-09-12', 2, 'B-221/O.3.20/Cp.3/07/2023', 'DATUN', 'BADAN PENGELOLA PAJAK DAN RETRIBUSI DAERAH KOTA BANJARBARU', 'Permohonan Pendampingan Hukum (Legal Assistence) Sehubungan dengan Peningkatan PAD Kota Banjarbaru yang Rencananya dimulai pada Bulan Mei s/d Desember 2022', 'Lampiran berupa penomoran surat', 'Penomoran_Surat.xlsx'),
(3, 'admin', '2022-09-27', 5, 'PRINT-122/O.3.20/EOH.1/08/2022', 'P-16 ; ANDRYAWAN PERDANA DISTA AGARA, S.H.', 'BANJARBARU', 'P-16 ; ANDRYAWAN PERDANA DISTA AGARA, S.H.', '-', NULL),
(7, 'admin', '2022-09-14', 4, 'KOKPRINT-1232/O.3.20/EOH.1/08/2022', 'kontlas', 'asdlmasl', 'askdoan', ' - ', '31318-Penomoran_Surat.xlsx'),
(8, 'roman', '2022-09-22', 5, 'BCDPRINT-1232/O.3.20/EOH.1/08/2022', 'Pelaihari', 'BANJARBAUR', 'TIDKA ADA KSNFSklfmas', '-', '54951-Flowchart Helpdesk.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nip` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `pangkat` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` enum('admin','pegawai') NOT NULL DEFAULT 'pegawai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nip`, `nik`, `nama`, `pangkat`, `username`, `email`, `password`, `avatar`, `role`) VALUES
(1, '123456789', '630972139213', 'Administrator', 'Admin', 'admin', 'admin@sipesu.com', '$2y$10$IV7U0ytNizR91olnFO30hOEA2PFFcdREi7qDNC7yJKFCRXuV6VM4S', NULL, 'admin'),
(2, '5621312412412', '63081246123', 'Roman Zidan Ramadhan', 'Staff IT STM', 'roman', 'romanzidanramadhan@gmail.com', '$2y$10$yVyhK6Qeev04s7dEwXXXF.dQ3gfBjPTDIE6ZjAPNmMdRn0k7yaPhC', 'roman.jpg', 'pegawai'),
(4, '1297312739', '640127394612', 'Ezra Garendraa', 'Staff IT', 'ezra', 'ezra@gmail.com', '$2y$10$23fT91UL5KVEpgvydHgbC.qKmq4NqqCbTxgtwIMpNieIlknDU5uYa', NULL, 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jenis_surat_keluar`
--
ALTER TABLE `jenis_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jenis_surat_keluar`
--
ALTER TABLE `jenis_surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
