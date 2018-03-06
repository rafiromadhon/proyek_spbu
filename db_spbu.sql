-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2018 at 01:14 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_spbu`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `penulis_artikel` varchar(250) DEFAULT NULL,
  `photo_artikel` varchar(250) DEFAULT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `penulis_artikel`, `photo_artikel`, `tgl_artikel`) VALUES
(4, 'Jajal sing dawa', 'Otaku terkadang tidak terlalu menunjukkan kesukaannya terhadap Jepang, dan masih mencintai budaya negeri sendiri.\r\nKesimpulan\r\n\r\nYa, definisi wibu dan otaku sendiri masih banyak diperbincangkan oleh banyak orang dan komunitas. Namun definisi wibu dan otaku pada postingan ini adalah pendapat dari mimin sendiri.\r\n\r\nKalau kamu suka dengan budaya Jepang, jangan lupakan apalagi membenci budaya sendiri ya!\r\n\r\nUntuk pengertian lebih mendalam mengenai istilah ini, jangan hanya mengambil sumber dari satu artikel saja agar tidak menimbulkan pengertian yang bersifat subjektif ya, readers!\r\n\r\nAyo sebarkan biar teman-teman kamu jadi tahu! ðŸ˜€', 'Boz Daffa', '3.jpg', '2018-02-15 09:24:26'),
(5, '"Unique", Kata bule yang sedang berlibur di Tegal', 'Inilah salah satu keunggulan SPBU Muri. SPBU kok ada kolam renangnya. Ya beginilah. SPBU kelas atas. Dacre Montgomery turis asal Australia ini. . . ', 'Boz Daffa', 'Susu.jpg', '2018-02-15 09:29:08'),
(6, 'Cek', 'contoh pidato tema pemuda harapan bangsa \r\nAssalamu Alaikum Warahmatullahi Wabarakatuh ... \r\n\r\n\r\nAlhamdulilalahi Robbil â€˜alamin wabihi nastaâ€™inu â€˜ala umuridunya wa diin wa sholatu wassalamu â€˜ala asrofil anbiai wal mursalin wa â€˜ala alihi washakhbihi ajmaâ€™in ama baâ€™du.\r\n\r\nSebelumnya , marilah kita panjatkan puji dan syukur kehadirat Allah SWT yang telah melimpahkan rahmat-Nya kepada kita semua, sehingga pada kesempatan yang baik ini kita dapat berkumpul bersama di tempat ini, ber-muwajahah di tempat ini. Tidak lupa juga, shalawat serta salam semoga tetap tercurahkan kepada Nabi besar kita yaitu Nabi Muhammad SAW, kepada keluarganya, kepada sahabat-sahabatnya, juga kepada para tabiâ€™it dan tabiâ€™atnya, dan kepada kita semuanya selaku umatnya yang patuh terhadap semua ajaran-ajarannya. Amiin..\r\n       \r\n\r\n\r\nHadirin yang berbahagia \r\nBangsa yang kuat adalah bangsa yang memiliki pemuda-pemuda yang hebat. Pemuda sebagai ujung tombak perubahan,yang mampu menbawa bangsa nya untuk bersaing dengan bangsa lain, dan sejajar dengan bangsa lain. \r\nSeperti ungkapan yang pernah disampaikan oleh tokoh nasional kita Bung Karno, orator ulung yang sudah dikenal dunia kebanggaan bangsa Indonesia.\r\n\r\nâ€Beri aku sepuluh pemuda, maka akan kugoncangkan dunia ,â€. Kalimat tersebut    menyanjung betapa pentingnya keberadaan sebuah komunitas pemuda dalam suatu bangsa dan Negara. Dalam sejarah Indonesia dari prolog sampai epilog kemerdekaan, pemuda memiliki peranan luar biasa sebagai ujung tombak perubahan. Tonggak kebangkitan lahirnya kesadaran â€œberbangsaâ€. \r\nHadirin yang berbahagia.\r\nMarilah kita sebagai generasi penerus kiranya perlu merenung dengan jiwa dan semangat kebangsaan serta keinginan bersatu yang tinggi. Apakah ikatan kita sebagai sebuah bangsa sudah kuat dan kokoh?\r\n\r\n            Teman-teman yang saya banggakan, sudah bukan menjadi rahasia umum, kalau kebangkitan atau kemerosotan sebuah bangsa sangat dipengaruhi oleh semangat pemuda - pemudanya. Ada banyak sejarah yang membuktikan ketika kekuatan para pemuda yang bersatu padu dapat menggulingkan kekuasaan yang sangat kokoh sekalipun.\r\n', 'Boz Daffa', 'mie-ayam-kuah-kental.JPG', '2018-02-16 14:55:57'),
(9, 'Artikel 1 hohoi', 'Apache License\r\n                           Version 2.0, January 2004\r\n                        http://www.apache.org/licenses/\r\n\r\n   TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTION\r\n\r\n   1. Definitions.\r\n\r\n      "License" shall mean the terms and conditions for use, reproduction,\r\n      and distribution as defined by Sections 1 through 9 of this document.\r\n\r\n      "Licensor" shall mean the copyright owner or entity authorized by\r\n      the copyright owner that is granting the License.\r\n\r\n      "Legal Entity" shall mean the union of the acting entity and all\r\n      other entities that control, are controlled by, or are under common\r\n      control with that entity. For the purposes of this definition,\r\n      "control" means (i) the power, direct or indirect, to cause the\r\n      direction or management of such entity, whether by contract or\r\n      otherwise, or (ii) ownership of fifty percent (50%) or more of the\r\n      outstanding shares, or (iii) beneficial ownership of such entity.\r\n\r\n      "You" (or "Your") shall mean an individual or Legal Entity\r\n      exercising permissions granted by this License.\r\n\r\n      "Source" form shall mean the preferred form for making modifications,\r\n      including but not limited to software source code, documentation\r\n      source, and configuration files.\r\n\r\n      "Object" form shall mean any form resulting from mechanical\r\n      transformation or translation of a Source form, including but\r\n      not limited to compiled object code, generated documentation,\r\n      and conversions to other media types.\r\n\r\n      "Work" shall mean the work of authorship, whether in Source or\r\n      Object form, made available under the License, as indicated by a\r\n      copyright notice that is included in or attached to the work\r\n      (an example is provided in the Appendix below).\r\n\r\n      "Derivative Works" shall mean any work, whether in Source or Object\r\n      form, that is based on (or derived from) the Work and for which the\r\n      editorial revisions, annotations, elaborations, or other modifications\r\n      represent, as a whole, an original work of authorship. For the purposes\r\n      of this License, Derivative Works shall not include works that remain\r\n      separable from, or merely link (or bind by name) to the interfaces of,\r\n      the Work and Derivative Works thereof.\r\n\r\n', 'Boz Rafi', 'Mie-Ayam-Bakso-wonogiri.jpg', '2018-02-16 17:55:37'),
(10, 'I wish that everybody knew', 'Apache License\r\n                           Version 2.0, January 2004\r\n                        http://www.apache.org/licenses/\r\n\r\n   TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTION\r\n\r\n   1. Definitions.\r\n\r\n      "License" shall mean the terms and conditions for use, reproduction,\r\n      and distribution as defined by Sections 1 through 9 of this document.\r\n\r\n      "Licensor" shall mean the copyright owner or entity authorized by\r\n      the copyright owner that is granting the License.\r\n\r\n      "Legal Entity" shall mean the union of the acting entity and all\r\n      other entities that control, are controlled by, or are under common\r\n      control with that entity. For the purposes of this definition,\r\n      "control" means (i) the power, direct or indirect, to cause the\r\n      direction or management of such entity, whether by contract or\r\n      otherwise, or (ii) ownership of fifty percent (50%) or more of the\r\n      outstanding shares, or (iii) beneficial ownership of such entity.\r\n\r\n      "You" (or "Your") shall mean an individual or Legal Entity\r\n      exercising permissions granted by this License.\r\n\r\n      "Source" form shall mean the preferred form for making modifications,\r\n      including but not limited to software source code, documentation\r\n      source, and configuration files.\r\n\r\n      "Object" form shall mean any form resulting from mechanical\r\n      transformation or translation of a Source form, including but\r\n      not limited to compiled object code, generated documentation,\r\n      and conversions to other media types.\r\n\r\n      "Work" shall mean the work of authorship, whether in Source or\r\n      Object form, made available under the License, as indicated by a\r\n      copyright notice that is included in or attached to the work\r\n      (an example is provided in the Appendix below).\r\n\r\n      "Derivative Works" shall mean any work, whether in Source or Object\r\n      form, that is based on (or derived from) the Work and for which the\r\n      editorial revisions, annotations, elaborations, or other modifications\r\n      represent, as a whole, an original work of authorship. For the purposes\r\n      of this License, Derivative Works shall not include works that remain\r\n      separable from, or merely link (or bind by name) to the interfaces of,\r\n      the Work and Derivative Works thereof.\r\n\r\n', 'Boz Rafi', 'mie-ayam-putra-22.jpg', '2018-02-16 18:09:13'),
(11, 'Cek Artikel Lagi', 'Apache License\r\n                           Version 2.0, January 2004\r\n                        http://www.apache.org/licenses/\r\n\r\n   TERMS AND CONDITIONS FOR USE, REPRODUCTION, AND DISTRIBUTION\r\n\r\n   1. Definitions.\r\n\r\n      "License" shall mean the terms and conditions for use, reproduction,\r\n      and distribution as defined by Sections 1 through 9 of this document.\r\n\r\n      "Licensor" shall mean the copyright owner or entity authorized by\r\n      the copyright owner that is granting the License.\r\n\r\n      "Legal Entity" shall mean the union of the acting entity and all\r\n      other entities that control, are controlled by, or are under common\r\n      control with that entity. For the purposes of this definition,\r\n      "control" means (i) the power, direct or indirect, to cause the\r\n      direction or management of such entity, whether by contract or\r\n      otherwise, or (ii) ownership of fifty percent (50%) or more of the\r\n      outstanding shares, or (iii) beneficial ownership of such entity.\r\n\r\n      "You" (or "Your") shall mean an individual or Legal Entity\r\n      exercising permissions granted by this License.\r\n\r\n      "Source" form shall mean the preferred form for making modifications,\r\n      including but not limited to software source code, documentation\r\n      source, and configuration files.\r\n\r\n      "Object" form shall mean any form resulting from mechanical\r\n      transformation or translation of a Source form, including but\r\n      not limited to compiled object code, generated documentation,\r\n      and conversions to other media types.\r\n\r\n      "Work" shall mean the work of authorship, whether in Source or\r\n      Object form, made available under the License, as indicated by a\r\n      copyright notice that is included in or attached to the work\r\n      (an example is provided in the Appendix below).\r\n\r\n      "Derivative Works" shall mean any work, whether in Source or Object\r\n      form, that is based on (or derived from) the Work and for which the\r\n      editorial revisions, annotations, elaborations, or other modifications\r\n      represent, as a whole, an original work of authorship. For the purposes\r\n      of this License, Derivative Works shall not include works that remain\r\n      separable from, or merely link (or bind by name) to the interfaces of,\r\n      the Work and Derivative Works thereof.\r\n\r\n', 'Boz Rafi', '13-mie-ayam-ceker-spesial.jpg', '2018-02-16 18:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(3, 'Usamah', 'bungausamah@gmail.com', 'Waaahhh. semoga toiletnya tambah jadi seribu yeah. Semangat terus . . . .'),
(5, 'Tiyas', 'tiyas@gmail.com', 'waah'),
(6, 'Cie', 'cie@cie.com', 'Apa coba'),
(7, 'Daffa', 'daffa@gmail.com', 'Bagus Banget Guys :)'),
(8, 'Ganteng', 'ganteng@gmail.com', 'Ganteng yah'),
(9, 'Sayang', 'sayang@gmail.com', 'Aku sayang kamu ini bukan spam! :@'),
(10, 'untuk', 'saslk@sasklka.com', 'okay'),
(11, 'Steve Rogers', 'steve@gmail.com', 'I can do this all day'),
(15, 'Ulhaq Botax', 'botak@gmail.com', 'Keren'),
(17, 'Sandi', 'sandi@sas', 'Ini keren banget'),
(18, 'Mas Ganteng', 'Mganteng@gmail.com', 'Ngantuq koh'),
(19, 'Natasha ', 'Blackw@gmail.com', 'Bagus'),
(21, 'Bucky', 'winters@gmial.com', 'Hail HYDRA'),
(22, 'Peter Parker', 'spiderguy@stark.com', 'great power comes great responsibility\r\n'),
(23, 'Hoho', 'dodo@gmail.com', 'sasas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(1, 'admin', '05282285c66ae95ff0e9378ed95105dd', 'Administrator', 'admin@admin.com', 1),
(2, 'guest', '084e0343a0486ff05530df6c705c8bb4', 'Guest', 'guest@gmail.com', 2),
(3, 'rafi', '9ac65ba3c9df0006a89113889e9c8e8b', 'Rafi Nur', 'rafiromadhon006@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
