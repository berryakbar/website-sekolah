-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2019 at 10:03 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id_alumni` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id_alumni`, `nisn`, `nama`, `tanggal_lahir`, `email`, `tahun_lulus`, `keterangan`, `alamat`, `foto`) VALUES
(1, '9962158486', 'Berry Akbar Sukmantono', '1997-11-20', 'berry.akbar10@gmail.com', '2012', 'MTs Daarul Muttaqiin Jotang', 'Desa Pamanto', '5c013284195b0.jpg'),
(5, '9962158487', 'Dicky Wahyudi p', '1996-11-01', 'dicky@gmail.com', '2012', 'MTs Daarul Muttaqiin Jotang', 'Desa Lamenta', '5c01332c62417.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_buku_tamu` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `penilaian` varchar(15) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku_tamu`, `nama`, `email`, `alamat`, `penilaian`, `komentar`) VALUES
(6, 'bima andromeda', 'bima@gmail.com', 'yogya condong catur', 'Sangat_Bagus', 'sangat membantu'),
(7, 'andre', 'andre@gmail.com', 'klaten', 'Bagus', 'membantu'),
(8, 'Obet nego pangallo', 'Obetnego05@gmail.com', 'Jl.laksda adisucipto', 'Bagus', '');

-- --------------------------------------------------------

--
-- Table structure for table `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `id_ekstra` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`id_ekstra`, `nama`, `keterangan`, `foto`) VALUES
(1, 'PRAMUKA', '<p>Kegiatan ekstra&nbsp; pramuka merupakan kegiatan ekstra yang wajib di ikuti oleh siswa siswi SD N Adisucipto 2, adapun Golongan Siaga adalah kelas 3 dan 4, sedangkan golongan Penggalang kelas 5 dan 6, kegiatan penggalang biasanyaa di akhiri dengan kemah pramuka di setiap akhir tahun.</p>\r\n', '5c00ad46bdd06.jpg'),
(2, 'TARI', '<p>Kegiatan ekstra tari merupakan salah satu ekstra pilihan, dilaksanakan seminggu sekali diluar jam pelajaran. Tari yang dipelajari merupakan tari-tarian daerah ataupun tari tarian tradisional</p>\r\n', '5c00ae141059b.jpg'),
(3, 'TIK', '<p>Kegiatan ekstra teknologi informasi dan komunikasi merupakan salah satu upaya supaya anak dapat mengikuti perkembANGAN ZAMAN dan lulusan SD dapat bersaing dengan tuntutan global zaman sekarang.</p>\r\n', '5c00aec9f0cb3.jpg'),
(4, 'BAHASA INGGRIS', '<p>Kegiatan ekstra B. Inggris merupakan salah satu kegiatan ekstra untuk anak kelas 1 2 dan 3, agar mereka dapat mengikuti arus perkembangan zaman.</p>\r\n', '5c00a98745633.png'),
(5, 'RENANG', '<p>Kegiatan ekstra renang merupakan salah satu ekstra pilihan, dilaksanakan di kolam renang indoor salsabila.</p>\r\n', '5c00ac4ed1e60.png');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama` text NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama`, `kategori`, `jumlah`) VALUES
(2, 'Ruang kelas yang nyaman, kondusif, dan luas', 'dll', 1),
(3, 'Halaman Sekolah yg luas', 'dll', 1),
(4, 'Aula atau gedung serba guna yang luas', 'dll', 1),
(5, 'Ruang UKS', 'dll', 1),
(6, 'Mushala', 'dll', 1),
(7, 'Tempat parker sepeda anak', 'dll', 1),
(8, 'LCD Projector', 'dll', 6),
(9, 'Alat alat olahraga', 'dll', 1),
(10, 'Ruang Laboratorium IPA', 'ipa', 1),
(11, 'Ruang Tekhnologi Informasi dan Komunikasi', 'dll', 1),
(12, 'Ruang Kesenian', 'seni', 1),
(13, 'Kantin Sekolah', 'dll', 1),
(14, 'Koprasi Sekolah', 'dll', 1);

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id_foto` int(5) NOT NULL,
  `foto` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_foto`
--

INSERT INTO `galeri_foto` (`id_foto`, `foto`, `keterangan`) VALUES
(12, '5bd7b46b4ed60.jpg', 'kegiatan menggambar dan mewarai'),
(13, '5bd7b4f7ec4f9.jpg', 'Perjusami'),
(14, '5bd7b530ef58f.jpg', 'Foto Bersama'),
(15, '5bd7b56e3c1e4.jpg', 'Perpustakaan Berjalan'),
(16, '5bd7b5fec5688.jpg', 'Paskubra SDN Adisucipto 2 Depok'),
(17, '5bd7b6549af7d.jpg', 'Lomba Pidato Bahasa Jawa'),
(18, '5bd7b70bc569b.jpg', 'Pentas Seni'),
(21, '5bec30310f491.jpg', 'upacara ');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id_video` int(5) NOT NULL,
  `video` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri_video`
--

INSERT INTO `galeri_video` (`id_video`, `video`, `keterangan`) VALUES
(1, 'https://www.youtube.com/embed/2P8bfGEZtzI', 'VIDEO CONTOH');

-- --------------------------------------------------------

--
-- Table structure for table `guru_karyawan`
--

CREATE TABLE `guru_karyawan` (
  `id` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelahiran` date NOT NULL,
  `pendidikan` varchar(10) NOT NULL,
  `jabatan` varchar(15) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_karyawan`
--

INSERT INTO `guru_karyawan` (`id`, `nama`, `kelahiran`, `pendidikan`, `jabatan`, `foto`) VALUES
(1, 'ISTI TURMIASIH, M.Pd', '1967-08-18', 'S2', 'Kepala_Sekolah', '5bc69ff88cbc2.jpg'),
(2, 'TRI WINARNI, S.Pd.', '1969-09-01', 'S1', 'Guru Kelas', '5c00d6380588e.jpg'),
(3, 'LISTIJANINGSIH, S.Pd.,M.Pd.', '1971-02-03', 'S2', 'Guru Kelas', '5c00d72f7b32e.png'),
(4, 'YOGI HESTUAJI, S.Pd.', '1990-06-30', 'S1', 'Guru Kelas', '5c00d8539b70c.jpg'),
(5, 'ABDUL MALIK, S.Pd.', '1990-12-30', 'S1', 'Guru penjas', '5c00d9c84f99c.jpg'),
(6, 'MEYNITA DYAH UTAMI, S.Pd.', '1995-06-09', 'S1', 'Guru Kelas', '5c00dab824c9b.jpg'),
(7, 'IKA SRI WULANDARI, S.Pd.', '1992-02-21', 'S1', 'Guru Kelas', '5c00dc3be5a41.jpg'),
(8, 'PRAMESTHI WIDODO, S.Pd.', '1990-10-25', 'S1', 'Guru Kelas', '5c00dd6792e3f.png'),
(9, 'KHAMIM, S.Pd.I.', '1992-02-04', 'S1', 'Guru Agama', '5c00dded87b35.jpg'),
(10, 'ELIYES SUPRIYANTO', '1989-04-12', 'SMA', 'Penjaga Sekolah', '5c00df08a77af.jpg'),
(11, 'SUHARNO', '1961-12-31', 'SD', 'Petugas Kebersi', '5c00df6e47315.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `no` int(2) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`no`, `isi`) VALUES
(1, 'Melaksanakan pembelajaran yang mantab, disertai dengan perkembangan zaman dan lingkungan.'),
(2, 'Melaksanakan pembelajaran yan efektif, efisien, dan berkualitas untuk meningkatkan prestasi belajar.'),
(3, 'Meningkatkan keimanan dan bertaqwa sesuai ajaran agama bagi seluruh warga sekolah.'),
(4, 'melaksanakan kegiatan ekstrakurikuler dikembangkan sesuai bakat, minat dan potensi peserta didik.'),
(5, 'meningkatkan prestasi dalam bidang olahraga.'),
(6, 'meningkatkan disiplin dan mengembangkan nilai etika dan tata krama bagi seluruh warga sekolah.'),
(7, 'menumbuhkan sikap untuk melestarikan dan menghargai budaya bangsa.');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(4) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tingkat` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama`, `tanggal`, `tingkat`, `keterangan`) VALUES
(2, 'PPMBI', '2015-06-09', 'Kec. Depok', 'Enam Besar'),
(3, 'Lomba Lukis', '2015-07-16', 'Kab. Sleman', 'Juara II'),
(4, 'Lomba Busana Jawa', '2016-06-05', 'Kec. Depok', 'Juara Harapan I'),
(5, 'Lomba Gugus', '2016-02-17', 'Kab. Sleman', 'Juara I'),
(6, 'Kemah Galang', '2016-03-09', 'Kec. Depok', 'Juara I'),
(7, 'Olimpiade MIPA (Matematika)', '2017-01-12', 'Kec. Depok', 'Juara Harapan I'),
(8, 'O2SN (volly mini putri)', '2017-03-08', 'Kec. Depok', 'Juara I'),
(9, 'O2SN (volly mini putri)', '2017-06-06', 'Kab. Sleman', 'Juara I'),
(10, 'Pionering Kemah Prestasi Galang', '2018-11-01', 'Kec. Depok', 'Juara II'),
(11, 'Atletik Putri O2SN', '2018-11-01', 'Kab. Sleman', 'Juara III');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `akreditas` varchar(1) NOT NULL,
  `nss` varchar(16) NOT NULL,
  `npsn` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `kode_pos` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `luas_tanah` varchar(8) NOT NULL,
  `luas_bangunan` varchar(8) NOT NULL,
  `status_tanah` varchar(15) NOT NULL,
  `visi` text NOT NULL,
  `sejarah` text NOT NULL,
  `logo` varchar(20) NOT NULL,
  `video` varchar(50) NOT NULL,
  `facebook` varchar(80) NOT NULL,
  `kepala_sekolah` varchar(30) NOT NULL,
  `sambutan` text NOT NULL,
  `struktur_organisasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `akreditas`, `nss`, `npsn`, `alamat`, `no_telepon`, `kode_pos`, `email`, `luas_tanah`, `luas_bangunan`, `status_tanah`, `visi`, `sejarah`, `logo`, `video`, `facebook`, `kepala_sekolah`, `sambutan`, `struktur_organisasi`) VALUES
(1, 'SDN ADISUCIPTO 2 DEPOK', 'A', '101040214010', '20401338', 'Komplek Lanud Adisucipto Depok, Sleman, Yogyakarta', '025678923', '55282', 'adisuciptodua@gmail.com', '3600 m2', '887 m2', 'Hak Pakai', 'Unggul Dalam Prestasi, Beriman Takwa, dan Berbudaya Bangsa', '<p>SD Negeri Adisucipto 2 berada di wilayah kecamatan Depok. Secara geografis letaknya berada di komplek perumahan AU. Sebelah utara berbatasan dengan SMP Angkasa dan SMK Penerbangan, SMA Angkasa, dan SD Negeri Adisucipto 1. Sebelah selatan berbatasan dengan komplek perumahan AU, Pasar Angkasa, dan rumah sakit Harjolukito. Sebelah timur berbatasan dengan komplek perumahan AU dan STTA. Sebelah barat berbatasan dengan komplek pertokoan dan kampus AKAKOM. Sebagian besar peserta didik berasal dari lingkungan wilayah Kecamatan Depok dan wilayak Kecamatan Bantul.</p>\r\n\r\n<p>SD Negeri Adisucipto 2 pada tahun 2003 merupakan regrouping dari SD Negeri Adisucipto III dan SD Angkasa I. Memiliki rombongan belajar 6 kelas sampai sekarang</p>\r\n', '5bc01f8f89181.png', 'https://www.youtube.com/embed/2P8bfGEZtzI', '', 'ISTI TURMIASIH, S.Pd.SD', '<p>Bismillahirohmannirrohim</p>\r\n\r\n<p>Assalamualaikum Warahmatullah Wabarakatuh</p>\r\n\r\n<p>Alhamdulillahi robbil alamin kami panjatkan kehadlirat Allah SWT, bahwasannya dengan rahmat dan karunia-Nya lah akhirnya Website sekolah ini dengan alamat&nbsp;<strong>www.sdnadisucipto2.sch.id</strong>&nbsp;dapat kami perbaharui. Kami mengucapkan selamat datang di Website kami Sekolah Menengah Kejuruan SD Negeri Adisucipto 2 Depok&nbsp;yang saya tujukan untuk seluruh unsur pimpinan, guru, karyawan dan siswa serta khalayak umum guna dapat mengakses seluruh informasi tentang segala profil, aktifitas/kegiatan serta fasilitas sekolah kami.</p>\r\n\r\n<p>Kami selaku pimpinan sekolah mengucapkan terima kasih kepada tim pembuat Website ini yang telah berusaha untuk dapat lebih memperkenalkan segala perihal yang dimiliki oleh sekolah. Dan tentunya Website sekolah kami masih terdapat banyak kekurangan, oleh karena itu kepada seluruh civitas akademika dan masyarakat umum dapat memberikan saran dan kritik yang membangun demi kemajuan Website ini lebih lanjut.</p>\r\n\r\n<p>Saya berharap Website ini dapat dijadikan wahana interaksi yang positif baik antar civitas akademika maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi yang erat disegala unsur. Mari kita bekerja dan berkarya dengan mengharap ridho sang Kuasa dan keikhlasan yang tulus dijiwa demi anak bangsa.</p>\r\n\r\n<p>Terima kasih semoga Allah &lsquo;Azza Wa Jalla menyertai doa kita semua&hellip;&hellip;amin.</p>\r\n', '5bc01f8f89e18.png');

-- --------------------------------------------------------

--
-- Table structure for table `tulisan`
--

CREATE TABLE `tulisan` (
  `id_tulisan` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tulisan`
--

INSERT INTO `tulisan` (`id_tulisan`, `judul`, `kategori`, `isi`, `tanggal`, `penulis`, `foto`) VALUES
(13, 'berita heboh', 'berita', '<h2>su sa su sagn</h2>\r\n\r\n<p>nsdbas&nbsp; asdbajausd as dhas</p>\r\n', '2018-10-24', 'administrator', '5bc03b8c4a856.jpg'),
(14, 'trik belajar', 'artikel', '<p>menggunakan buku terpercaya</p>\r\n', '2018-10-12', 'administrator', '5bc04623c5be9.png'),
(15, 'libur sekolah', 'pengumuman', '<p>s takan berpin dah karna sa tracinta</p>\r\n', '2018-10-12', 'administrator', '5bc048a5473b7.png'),
(16, 'Contoh Berita', 'berita', '<p>Contoh Isi Berita</p>\r\n', '2018-10-09', 'admin', '5c00f0b014a02.jpg'),
(17, 'Contoh Berita 2', 'berita', '<p>Contoh isi berita&nbsp;</p>\r\n', '2018-10-16', 'admin', '5bd7a79290eeb.jpg'),
(18, 'Contoh Berita 3', 'berita', '<p>sada asd awd as dawd&nbsp;&nbsp;</p>\r\n', '2018-10-19', 'admin', '5bd7a7b581292.jpg'),
(19, 'hebohnya nusantara4', 'berita', '<p>ssada&nbsp; aw d asd w</p>\r\n', '2018-08-10', 'admin', '5bd7a7f26965a.jpg'),
(20, 'Contoh Berita', 'berita', '<p>Contoh isi berita</p>\r\n', '2018-10-30', 'admin', '5c00f41747d14.jpg'),
(21, 'contoh artikel 1', 'artikel', '<p>su e&nbsp;</p>\r\n', '2018-10-12', 'admin', '5bd7a8fe32f6a.jpg'),
(22, 'Kegiatan Belajar Mengajar ', 'artikel', '<p><em>PENDAHULUAN</em></p>\r\n\r\n<p><em>Kegiatan belajar-mengajar merupakan inti dan pelaksanaan kurikulum Baik-buruknya mutu pendidikan atau mutu lulusan dipengaruhi oleh mutu kegiatan belajar-mengajar. Bila mutu lulusanya bagus dapat diproduksi bagus mutu kegiatan belajar-mengajarnya juga bagus: atau sebaliknya, bila mutu kegiatan belajar-mengajarnya bagus, maka mutu lulusannya juga akan bagus.</em></p>\r\n\r\n<p><em>Di lingkugan sekolah, para siswa memilik kemampuan yang heterogen, baik kemampuan awal, minat, dan gaya belajarnya masing-masing. Mengajar anak-anak yang memiliki kemampuan heterogen pun berbeda dengan mengajar anak-anak yang memiliki kemampuan homogen. </em><em>Oleh karenanya sebelum kegiatan belajar mengajar berlangsung perlu dilakukan perencanaan kegiatan belajar mengajar.</em></p>\r\n\r\n<p><strong>A.&nbsp;&nbsp;Rancangan Pembelajaran</strong></p>\r\n\r\n<p>Kegiatan belajar-mengajar hendaknya dirancang sesuai dengan kemampuan dan karakteristik siswa, serta mengacu kepada kurikulum yang telah dikembangkan. Hal-hal yang perlu diperhatikan dalam merancang kegiatan belajar mengajar antara lain seperti di bawah ini.</p>\r\n\r\n<p>&nbsp;<strong>1. Merencanakan Kegiatan Belajar Mengajar</strong></p>\r\n\r\n<ol>\r\n	<li>Merencanakan pengelolaan kelas</li>\r\n	<li>Merencanakan pengorganisasian bahan</li>\r\n	<li>Merencanakan pengelolaan kegiatan belajar mengajar</li>\r\n	<li>Merencanakan penggunaan sumber belajar</li>\r\n	<li>Merencanakan penilaian</li>\r\n</ol>\r\n\r\n<p><strong>2. Melaksanakan Kegiatan belajar Mengajar</strong></p>\r\n\r\n<ol>\r\n	<li>Menyajikan materi/bahan pelajaran</li>\r\n	<li>Mengimplementasikan metode, sumber belajar dan bahan latihan yang sesuai dengan kemampuan awal dan karakterisitik siswa, serta sesuai dengan tujuan pembelajaran</li>\r\n	<li>Mendorong siswa untuk terlihat secara aktif</li>\r\n	<li>Mendemonstrasikan penguasaan materi pelajaran dan relevansinya dalam kehidupan</li>\r\n	<li>Mengelola waktu, ruang, bahan, dan perlengkapan pengajaran.</li>\r\n</ol>\r\n\r\n<p><strong>3. Membina Hubungan Antarpribadi</strong></p>\r\n\r\n<ol>\r\n	<li>Bersikap terbuka, toleran, dan simpati terhadap siswa</li>\r\n	<li>Menampilkan kegairahan dan kesungguhan</li>\r\n	<li>Mengelola interaksi antarpribadi</li>\r\n</ol>\r\n\r\n<p><strong>4. Melaksanakan Evaluasi</strong></p>\r\n\r\n<ol>\r\n	<li>Melakukan penilaian selama kegiatan belajar-mengajar berlangsung, baik secara lisan tertulis, maupun melalui pengamatan</li>\r\n	<li>Mengadakan tindak lanjut.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n', '2018-11-30', 'admin', '5c00ef37e3a3b.jpg'),
(23, 'Berita Baru 12', 'berita', '<p>lorem</p>\r\n', '2018-12-15', 'berry', '5c14b65fca8b4.jpg'),
(24, 'Berita Baru 13', 'berita', '<p>gygygy</p>\r\n', '2018-12-15', 'berry', '5c14b6e5246b3.png'),
(25, 'libur tahun baru siswa manfaatkan dengan berkumpul dengan keluarga besar', 'berita', '<p>libur tahun baru siswa manfaatkan dengan berkumpul dengan keluarga besar</p>\r\n', '2018-12-25', 'berry', '5c21860e44678.jpg'),
(26, 'Bermain untuk Isi Libur Sekolah', 'artikel', '<p>Bermain untuk Isi Libur Sekolah</p>\r\n', '2018-12-25', 'berry', 'no_image');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id_alumni`);

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indexes for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tulisan`
--
ALTER TABLE `tulisan`
  ADD PRIMARY KEY (`id_tulisan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id_alumni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_buku_tamu` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `id_ekstra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id_foto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru_karyawan`
--
ALTER TABLE `guru_karyawan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tulisan`
--
ALTER TABLE `tulisan`
  MODIFY `id_tulisan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
