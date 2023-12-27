-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 06:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websiteskincare_2314`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(255) DEFAULT NULL,
  `produk_jenis` enum('Face Wash','Toner','Serum','Moisturizer','Sunscreen') DEFAULT NULL,
  `produk_deskripsi` text DEFAULT NULL,
  `produk_harga` int(10) DEFAULT NULL,
  `produk_foto` varchar(255) DEFAULT NULL,
  `user_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_jenis`, `produk_deskripsi`, `produk_harga`, `produk_foto`, `user_nama`) VALUES
(1, 'Avoskin Your Skin Bae Serum Niacinamide 12%', 'Serum', 'Avoskin Your Skin Bae Serum Niacinamide 12% + Centella merupakan brightening dan hydrating serum terbaru dari Avoskin dengan Niacinamide 12% yang berfungsi optimal sebagai booster untuk mencerahkan kulit, memudarkan dark-spots, anti-acne, anti-aging, dan memiliki melembapkan kulit. Dipadukan dengan ekstrak Centella Asiatica sebagai anti-inflammatory agent yang juga efektif berfungsi sebagai wound healing. Perpaduan keduanya menghasilkan serum yang efektif untuk menjaga kulit cerah maksimal, terhidrasi, terhindar dari masalah jerawat, dan iritasi.', 157900, 'uploads/4.jpg', 'admin'),
(2, 'Naturie Hatomugi Skin Conditioner', 'Toner', 'Naturie Hatomugi Skin Conditioner merupakan toner lotion untuk mempertahankan kondisi kulit dengan meningkatkan hidrasi. Diformulasikan dengan ekstrak Hatomugi, bahan pelembab alami.', 115000, 'uploads/3.jpg', 'admin'),
(17, 'Kojie San Skin Lightening Soap Kojic Acid', 'Face Wash', 'Kojie San Skin Lightening Soap Kojic Acid adalah sabun dengan formula yang dapat memutihkan, minyak kelapa yang menutrisi, dengan harum jeruk yang segar. Kandungannya terbukti aman digunakan dan efektif untuk meratakan warna kulit dengan cara menghilangkan bintik hitam, warna kulit yang tidak rata dan ketidaksempurnaan kulit lainnya.\r\n', 45000, 'uploads/1.jpeg', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_deskripsi` text DEFAULT NULL,
  `review_rating` float DEFAULT NULL,
  `review_rekomendasi` enum('Ya','Tidak','','') NOT NULL,
  `review_tanggal` date NOT NULL,
  `produk_id` int(11) DEFAULT NULL,
  `user_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `review_deskripsi`, `review_rating`, `review_rekomendasi`, `review_tanggal`, `produk_id`, `user_nama`) VALUES
(2, 'Sudah lama pake serum ini dan lumayan bagus dan cocok untuk kulit muka gue. gue juga suka serum ini karena muka gue ga kusam apalagi seharian panas2an. ', 3, 'Ya', '2023-10-12', 1, 'rifqirifqi'),
(3, 'TONER HARGA MURCEEE TAPI ISINYA BANYAK DAN BAGUS BIKIN KULITT LEMBAB! dengan kandungan yang gak banyak aneh2nya, lebih sering pake botol spray biar lebih mudah dan buat abisin produkbya butuh waktu lama sih buat aku hehehe worth to try sihh produk ini!🫶🏻 ', 5, 'Ya', '2023-10-13', 2, 'nrahmiani'),
(4, 'toner yang isinya super duper banyak tapi bagusss banget, ingredients nya pun ga aneh aneh dan bikin kulit lembab sama kenyel jugaa😣 mana harganya pun superrrrr terjangkau dengan isiannya sebanyak itu, kadang juga dipake buat kompresan kulit sebelum makeup dan worth to try banget karna hasil makeup jadi lebiii bagus😍', 4, 'Ya', '2023-10-25', 2, 'viondenkow'),
(18, 'Aku ga tau salahnya apa, tapi diaku kering banget. Bikin kulit kering, mungkin harus dibarengin sama serum hyaluronic biar ga bikin kering, texture sama kaya serum avoskin lainnya, tapi yg ini agak kentel, ga begitu running. Belum dapet hasil yg memuaskan dari serum ini 😭', 3, 'Tidak', '2023-10-31', 1, 'AbiyazkaZahra'),
(20, 'serum niacinamide avo ini jujur bagus untuk mencerahkan ya tekstur nya agak kental warna nya bening dan no fragrance tapi sayang nya serum ini agak lama buat meresap ke kulit wajah dan menurut ku emang varian ini paling thick di antara varian serum avo yang lain nya\r\n\r\n', 4, 'Ya', '2023-10-31', 1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_nama` varchar(50) NOT NULL,
  `user_pass` varchar(255) DEFAULT NULL,
  `user_namalengkap` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_nama`, `user_pass`, `user_namalengkap`, `user_email`) VALUES
('AbiyazkaZahra', '3101', 'Abiyazka Zahra', 'AbiyazkaZahra@gmail.com'),
('admin', 'admin', 'Administrator', 'admin@universalwoman.com'),
('nrahmiani', '9012', 'Nur Rahmiani', 'nrahmiani@gmail.com'),
('rifqirifqi', '5678', 'Rifqi Rifqi', 'rifqi@gmail.com'),
('viondenkow', '3456', 'Viona', 'viondenkow@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `produk_id` (`produk_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`user_nama`) REFERENCES `user` (`user_nama`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`user_nama`) REFERENCES `user` (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
