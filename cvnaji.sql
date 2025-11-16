-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2025 at 03:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvnaji`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `alamat` text,
  `ringkasan` text,
  `foto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_lengkap`, `posisi`, `email`, `no_hp`, `alamat`, `ringkasan`, `foto`) VALUES
(2, 'Naji Nugraha Suwarno', 'Web Developer', 'naji@gmail.com', '081234569090', 'Bogor, Jawa Barat', 'Saya adalah seorang mahasiswa yang memiliki minat dalam pengembangan web, UI/UX, dan manajemen proyek kecil. Terbiasa bekerja dalam tim dan suka belajar hal baru.', 'naji.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int UNSIGNED NOT NULL,
  `biodata_id` int UNSIGNED NOT NULL,
  `jenjang` varchar(50) DEFAULT NULL,
  `nama_institusi` varchar(150) NOT NULL,
  `jurusan` varchar(150) DEFAULT NULL,
  `tahun_mulai` year DEFAULT NULL,
  `tahun_selesai` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `biodata_id`, `jenjang`, `nama_institusi`, `jurusan`, `tahun_mulai`, `tahun_selesai`) VALUES
(3, 2, 'S1', 'Universitas Muhammadiyah Sukabumi', 'Teknik Informatika', '2023', '2027'),
(4, 2, 'SMA', 'SMAN 1 Cigombong ', 'IPS', '2018', '2021');

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman`
--

CREATE TABLE `pengalaman` (
  `id` int UNSIGNED NOT NULL,
  `biodata_id` int UNSIGNED NOT NULL,
  `posisi` varchar(150) NOT NULL,
  `institusi` varchar(150) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `tahun_mulai` year DEFAULT NULL,
  `tahun_selesai` year DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengalaman`
--

INSERT INTO `pengalaman` (`id`, `biodata_id`, `posisi`, `institusi`, `kategori`, `tahun_mulai`, `tahun_selesai`, `deskripsi`) VALUES
(1, 2, 'Frontend Developer Intern', 'PT Kreatif Digital', 'Magang', '2023', '2024', 'Membangun antarmuka website perusahaan'),
(2, 2, 'Staff Humas', 'Organisasi Mahasiswa Universitas Muhammadiyah Sukabumi', 'Organisasi', '2022', '2023', 'Mengelola publikasi kegiatan kampus dan membuat konten sosial media.'),
(3, 2, 'Web Developer Freelance', 'Proyek Mandiri', 'Proyek', '2022', '2023', 'Mengerjakan pembuatan landing page dan sistem sederhana untuk UMKM.'),
(4, 2, 'Web Developer', 'Shopee Indonesia', 'Proyek', '2022', '2023', 'Berkontribusi dalam pembuatan web Shopee Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int UNSIGNED NOT NULL,
  `biodata_id` int UNSIGNED NOT NULL,
  `judul` varchar(150) NOT NULL,
  `deskripsi` text,
  `link_project` varchar(200) DEFAULT NULL,
  `gambar_preview` varchar(200) DEFAULT NULL,
  `tahun` year DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `biodata_id`, `judul`, `deskripsi`, `link_project`, `gambar_preview`, `tahun`) VALUES
(5, 2, 'Sistem CV Website Pribadi', 'Aplikasi web CV menggunakan CodeIgniter 4 dan Bootstrap. Menampilkan biodata, pendidikan, pengalaman, skills, dan portofolio dari database.', 'https://github.com/naji/cv-web', 'portfolio/cvweb.jpeg', '2024'),
(6, 2, 'Landing Page UMKM Kopi', 'Landing page promosi untuk UMKM kopi. Dibangun dengan HTML, CSS, dan Bootstrap sebagai company profile modern.', 'https://github.com/naji/kopi-landing', 'portfolio/kopi.jpeg', '2023'),
(7, 2, 'Dashboard Admin Sederhana', 'Mini dashboard admin untuk mengelola data produk menggunakan CodeIgniter 4 dan MySQL.', 'https://github.com/naji/dashboard-admin', 'portfolio/dashboard.jpeg', '2023'),
(8, 2, 'Shopee Indonesia', 'Proyek website Shopee Indonesia membuat homepage Shopee, termasuk navbar, search bar, banner promo, dan grid produk. Dibuat menggunakan HTML, CSS, Bootstrap, dan sedikit JavaScript.', 'https://github.com/naji/shopee', 'portfolio/shopee.jpeg', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int UNSIGNED NOT NULL,
  `biodata_id` int UNSIGNED NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `biodata_id`, `nama_skill`, `level`) VALUES
(1, 2, 'HTML CSS', 'Advanced'),
(2, 2, 'Database MySQL', 'Intermediate'),
(3, 2, 'JavaScript', 'Intermediate'),
(4, 2, 'PHP', 'Intermediate'),
(5, 2, 'React.js', 'Intermediate'),
(6, 2, 'API', 'Advanced');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pendidikan_biodata` (`biodata_id`);

--
-- Indexes for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengalaman_biodata` (`biodata_id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_portofolio_biodata` (`biodata_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_skills_biodata` (`biodata_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengalaman`
--
ALTER TABLE `pengalaman`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `fk_pendidikan_biodata` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengalaman`
--
ALTER TABLE `pengalaman`
  ADD CONSTRAINT `fk_pengalaman_biodata` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `fk_portofolio_biodata` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `fk_skills_biodata` FOREIGN KEY (`biodata_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
