-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2021 pada 05.39
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`, `gender`, `agama`, `status`, `no_telp`, `alamat`, `foto`) VALUES
(1, 'GR0001', 'Isni Annisa, S.Hum., M.Pd.', 'Perempuan', 'Islam', 'Koordinator BP/BK', '087827833700', 'Cicalengka', 'item-211214-4da540c0d9.jpeg'),
(6, 'GR0002', 'Eros Rodiana, S.T.', 'Laki-laki', 'Islam', 'Kepala Sekolah', '08999911111', '-', 'item-211210-0585409f9b.jpg'),
(7, 'GR0003', 'Febryawan Yuda P., S.st.,M.Kom', 'Laki-laki', 'Islam', 'Wakasek Kurikulum', '0838222327421', '-', 'item-211214-7264969d3f.jpeg'),
(8, 'GR0004', 'Ahmad Sahidatullah, S.Tr.T', 'Laki-laki', 'Islam', 'Kepala Program Keahlian Teknik Kendaraan Ringan (TKR)', '0', '-', 'item-211214-d3a47f756e.jpg'),
(9, 'GR0005', 'M. Mulky Faridzky, S.Tr.T', 'Laki-laki', 'Islam', 'Kepala Program Keahlian Teknik Elektronika Industri (TEI)', '081805861056', '-', 'item-211214-90501d1175.jpeg'),
(16, 'GR0006', 'Elis Susilowati, S.Pd.', 'Perempuan', 'Islam', 'Kepala Tata Usaha (TU)', '0', '-', 'item-211221-b892a9326b.jpg'),
(18, 'GR0007', 'Dendin Supriadi', 'Laki-laki', 'Islam', 'Pengawas Yayasan', '0', '-', '7bb1925fc63dea92586e30f2011b860a.jpeg'),
(19, 'GR0008', 'Radi Pratama', 'Laki-laki', 'Islam', 'Staff TU', '0', '-', '164a51bb76f4deffc00af8df0bc4dd88.jpeg'),
(20, 'GR0009', 'Dea Miftahul', 'Laki-laki', 'Islam', 'Kord Bengkel', '0', '-', 'item-211214-7e3654fb86.jpg'),
(21, 'GR0010', 'Muhamad Jihad Andiana', 'Laki-laki', 'Islam', 'Operator Sekolah', '0', '-', 'item-211221-be83f4671c.jpg'),
(22, 'GR0011', 'Agus Muharrom', 'Laki-laki', 'Islam', 'Guru', '0', '-', '4dd5e08a9fe5f2380760fbc16f0102df.jpeg'),
(23, 'GR0012', 'Krisna Aditya, M.Kom.', 'Laki-laki', 'Islam', 'Guru', '0', '-', 'cad3ba8c0c080d30adc5d44197776683.jpeg'),
(24, 'GR0013', 'Bulan Maulida Islami, MTA', 'Perempuan', 'Islam', 'Guru', '0', '-', '88e519973065e5bc89bad4d83008768b.jpeg'),
(25, 'GR0014', 'Dadan Suhanda', 'Laki-laki', 'Islam', 'Guru', '0', '-', 'ee3fb8f872a0cbc67cfc382cf47c5faa.jpg'),
(26, 'GR0015', 'Nanang Mulyana', 'Laki-laki', 'Islam', 'Guru', '0', '-', 'a974cc51abf1191237e4a5a9345f36f1.jpeg'),
(27, 'GR0016', 'Elin Nia Kurnia', 'Perempuan', 'Islam', 'Wakasek Sarpras', '0', '-', '69d3facab7c733feebe75f88a4570624.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inbox`
--

CREATE TABLE `inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(100) NOT NULL,
  `inbox_email` varchar(50) NOT NULL,
  `inbox_kontak` varchar(50) NOT NULL,
  `inbox_pesan` text NOT NULL,
  `inbox_tanggal` timestamp NOT NULL DEFAULT current_timestamp() COMMENT '1=Belum dilihat\r\n0=Telah dilihat',
  `inbox_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inbox`
--

INSERT INTO `inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(7, 'KaSetya', '404ErrorNotFound@gmail.com', '0810101010404', 'Seputar SMK', '2021-12-08 02:06:26', 0),
(9, 'Pratama', '500ErrorNotServer@gmai.com', '08969696969', 'Sekolah Taruna Wiyata Kebangganku', '2021-12-08 06:52:08', 1),
(10, 'Kata Nune', 'siti@gmail.com', '08987654321', 'Untuk Pendaftaran Baru Kapan Dibuka?', '2021-12-08 06:56:08', 1),
(13, 'Wahyu', 'wahyu@gmail.com', '0858888012', 'Info PPDB 2022 Kapan?', '2021-12-21 03:07:39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `siswa` varchar(50) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `gender` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(25) NOT NULL,
  `kelas` enum('X','XI','XII') NOT NULL,
  `jurusan` enum('RPL','TKR','TEI') NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `siswa`, `nama_siswa`, `gender`, `agama`, `kelas`, `jurusan`, `no_telp`, `alamat`, `foto`) VALUES
(3, '90012', 'Madnae Jin', 'Laki-laki', 'Kristen', 'XI', 'RPL', '02221888820', 'Seol Korea', 'item-210712-c50b5cea88.jpg'),
(20, '90013', 'Adinda Rahma Yanti', 'Perempuan', 'Islam', 'XII', 'TEI', '085295278809', 'Kampung Babakan, Ciomas Bogor', 'item-210712-7cba67fe1e.jpg'),
(22, '90014', 'Sandi', 'Laki-laki', 'Islam', 'X', 'TKR', '+628954615830', 'Nagreg', 'item-211207-a0dca1e761.jpg'),
(40, '90015', 'Asdian', 'Laki-laki', 'Islam', 'X', 'TKR', '0', 'Ciherang Nagreg', 'item-211221-6414ecc557.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `role` enum('operator','admin') NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `foto` text NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `email`, `no_telp`, `role`, `password`, `created_at`, `foto`, `is_active`) VALUES
(17, 'Tech-Info19', 'admin', 'arimsetyawan@gmail.com', '+628877396635', 'admin', '$2y$10$E9I6ZtmWbf0vBCmC2hbokOZWW4JetdeoUNUNlSZ2uM0G6ByqDOC5a', 1623322564, '3dad5fcbc4fb31f351e7fbe7e1861d9b.jpg', 1),
(30, 'Muhamad Jihad Andiana', 'administrator', 'smktaruna.wiyatamandala@gmail.com', '0850040440012', 'admin', '$2y$10$mOl.g4.9DTNyI6rcv9ZhceQrMDB7BeabRLDJJ7AEO4dIRHy9YGNgy', 1640058583, '4bbe1befdbaf0158a4e1ec8ed2b0f26a.jpg', 1),
(31, 'Operator Sekolah', 'Operator', 'smkwiyatamandala@gmail.com', '0227941891', 'operator', '$2y$10$APwDjq8m1KuWx1gTswB2ZOQRzaJWBIcipOkJyHdwGAotffsy4Fcdm', 1640060165, 'ad0af9b972df55a8336375917b8cfe00.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(49, 'arimsetyawan@gmail.com', '7yfCOfgmfELCLYFj1eqwhg3SRhOECBJWh5UPrm5kDJc=', 1640061252);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `inbox`
--
ALTER TABLE `inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
