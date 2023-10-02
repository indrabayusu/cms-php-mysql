-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Okt 2023 pada 14.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `judul`, `isi`, `tgl`, `id_user`) VALUES
(18, 4, 'Perekonomian Indonesia Pulih: Pertumbuhan Positif di Tengah Pandemi', 'Jakarta, 1 Oktober 2023 - Perekonomian Indonesia menunjukkan tanda-tanda pulih yang menggembirakan meskipun masih dalam bayang-bayang pandemi COVID-19. Menurut data terbaru dari Badan Pusat Statistik (BPS), pertumbuhan ekonomi Indonesia pada kuartal ketiga tahun ini mencapai 5,2%, melampaui perkiraan sebelumnya.<br><br>\r\nPertumbuhan ini didorong oleh sektor manufaktur yang terus berkembang, ekspor komoditas utama seperti kelapa sawit dan batu bara yang mengalami peningkatan signifikan, serta program stimulus pemerintah yang mendorong konsumsi domestik.<br><br>\r\nMeskipun tantangan masih ada, seperti inflasi yang meningkat, pemerintah optimis bahwa tren positif ini akan berlanjut, membawa harapan bagi pemulihan ekonomi yang lebih kuat di masa depan', '2023-10-01', 1),
(19, 3, 'Indonesia Kembangkan Ekosistem Teknologi IT', 'Indonesia terus memperkuat ekosistem teknologi informasi (IT) dengan berbagai inisiatif yang mendukung perkembangan sektor ini. Pemerintah, perusahaan swasta, dan startup lokal berkolaborasi untuk mendorong inovasi dan pengembangan teknologi terbaru.\r\n\r\nInisiatif tersebut mencakup peluncuran program pelatihan IT bagi pemuda Indonesia, penyediaan akses internet murah ke daerah terpencil, dan pembentukan pusat inovasi teknologi. Selain itu, investor asing semakin tertarik untuk berinvestasi di perusahaan teknologi Indonesia yang berkembang pesat.<br><br>\r\nSemua ini bertujuan untuk memperkuat posisi Indonesia di panggung global teknologi, menciptakan lapangan kerja baru, dan meningkatkan kualitas hidup masyarakat melalui solusi teknologi yang inovatif.', '2023-10-01', 1),
(20, 3, 'Indonesia Menguatkan Infrastruktur Teknologi 5G', 'Indonesia semakin mengejar ketertinggalannya dalam sektor teknologi dengan meluncurkan jaringan 5G yang luas. Operator telekomunikasi utama di Indonesia telah bekerja sama dengan pemerintah untuk memperluas cakupan 5G ke kota-kota besar di seluruh negeri.\r\n\r\nTeknologi 5G akan mengubah lanskap digital Indonesia dengan memberikan kecepatan internet yang lebih tinggi, latency yang rendah, dan mendukung perkembangan teknologi canggih seperti Internet of Things (IoT) dan kendaraan otonom. Langkah ini diharapkan akan mendorong inovasi, mempercepat pertumbuhan ekonomi digital, serta meningkatkan kualitas hidup masyarakat Indonesia.', '2023-10-01', 1),
(21, 2, 'Basket Indonesia Merebut Gelar Juara Regional', 'Tim nasional basket Indonesia meraih kemenangan gemilang dalam kejuaraan regional terbaru. Tim yang dipimpin oleh pelatih berbakat berhasil mengalahkan tim-tim kuat dari negara tetangga dalam kompetisi sengit.\r\n\r\nPrestasi ini membawa semangat baru bagi perkembangan olahraga basket di Indonesia, dengan jumlah pemain muda yang semakin meningkat. Federasi Basket Indonesia (Perbasi) juga telah berinvestasi dalam pembinaan bakat muda, dan hasilnya semakin terlihat.\r\n\r\nKemenangan ini tidak hanya membanggakan, tetapi juga memotivasi pemuda Indonesia untuk bermimpi menjadi pemain basket profesional. Olahraga basket di Indonesia semakin berkembang, dan masa depannya semakin cerah.', '2023-10-01', 1),
(22, 2, 'Kemenangan Gemilang: Bulutangkis Indonesia di Puncak Prestasi', 'Bulutangkis Indonesia kembali menorehkan prestasi gemilang di kancah internasional. Tim bulutangkis Indonesia berhasil meraih berbagai medali emas dalam turnamen internasional terbaru.\r\n\r\nPrestasi ini mencerminkan dominasi Indonesia dalam olahraga bulutangkis dan memicu semangat pemain muda untuk mengikuti jejak pahlawan mereka. Pelatihan yang intensif dan dukungan dari pemerintah dan sponsor swasta telah menjadi kunci kesuksesan atlet bulutangkis Indonesia.\r\n\r\nKeberhasilan ini juga menunjukkan bahwa Indonesia tetap menjadi kekuatan dominan dalam bulutangkis dunia. Dengan perjuangan dan dedikasi yang terus menerus, para atlet Indonesia diharapkan akan terus mengharumkan nama negara di kancah internasional.', '2023-10-01', 1),
(23, 1, 'Olahraga Pendidikan di Indonesia: Siswa Bersemangat', 'Semangat olahraga di kalangan siswa sekolah dasar hingga sekolah menengah atas (SD-SMA) di Indonesia semakin berkobar. Program olahraga di sekolah-sekolah telah berhasil memotivasi siswa untuk berpartisipasi dalam berbagai kegiatan fisik.\r\n\r\nTurnamen sepak bola, bulutangkis, atletik, dan renang antar sekolah menjadi populer, menciptakan kompetisi yang sehat dan memupuk semangat kerja sama tim. Siswa juga mendapat kesempatan untuk mengembangkan bakat olahraga mereka.\r\n\r\nInisiatif seperti ini bukan hanya menghasilkan atlet muda yang berbakat, tetapi juga meningkatkan kesadaran akan pentingnya gaya hidup aktif dan kesehatan di kalangan generasi muda Indonesia. Pendidikan dan olahraga menjadi kombinasi yang membentuk masa depan yang cerah untuk anak-anak Indonesia.', '2023-10-01', 1),
(24, 5, 'Kucing Peliharaan Meningkat Populer di Indonesia', 'Kucing menjadi hewan peliharaan yang semakin populer di Indonesia. Penjualan kucing ras maupun kucing kampung telah meningkat pesat dalam beberapa tahun terakhir. Banyaknya komunitas pecinta kucing dan penyedia layanan perawatan kucing seperti klinik dan groomer telah mendukung pertumbuhan tren ini.\r\n\r\nKucing bukan hanya menjadi teman setia bagi banyak individu dan keluarga, tetapi juga memainkan peran penting dalam mengendalikan populasi tikus dan hewan pengerat di perkotaan. Kesenangan yang diberikan oleh kucing dalam bentuk hiburan dan dukungan emosional juga menjadi alasan utama di balik popularitas mereka.\r\n\r\nTren ini juga telah mendorong pertumbuhan bisnis terkait kucing, menciptakan peluang pekerjaan dan industri yang berkembang.', '2023-10-01', 1),
(25, 1, 'Pendidikan Perguruan Tinggi di Indonesia Terus Berkembang', 'Pendidikan perguruan tinggi di Indonesia terus mengalami perkembangan positif. Perguruan tinggi di seluruh negeri telah melakukan inovasi untuk meningkatkan kualitas pendidikan, termasuk penggunaan teknologi modern dalam pembelajaran.\r\n\r\nProgram-program akademik yang relevan dengan tuntutan pasar kerja semakin banyak ditawarkan, termasuk program studi dalam teknologi, bisnis, dan ilmu pengetahuan. Kolaborasi antara perguruan tinggi dan industri semakin kuat, memberikan mahasiswa peluang magang dan kerja sama riset yang berharga.\r\n\r\nSelain itu, akses ke pendidikan tinggi juga semakin merata berkat berbagai beasiswa dan program pembiayaan. Semua ini menunjukkan komitmen Indonesia untuk menciptakan sumber daya manusia yang kompeten dan berkontribusi positif dalam pembangunan negara.', '2023-10-01', 1),
(26, 5, 'Kekayaan Laut Indonesia: Keindahan dan Keragaman Hewan Laut', 'Indonesia terus mempesona dunia dengan kekayaan hewan lautnya. Terletak di jantung segitiga terumbu karang, perairan Indonesia adalah rumah bagi sejumlah besar spesies laut yang luar biasa.\r\n\r\nDari ikan-ikan berwarna-warni hingga hiu-hiu raksasa, dan kura-kura laut yang langka, hewan laut Indonesia menghadirkan keindahan alam yang menakjubkan. Taman-taman laut dan kawasan konservasi memberikan perlindungan bagi hewan-hewan ini, sementara upaya konservasi terus berlanjut untuk melindungi lingkungan laut yang rapuh.\r\n\r\nDengan demikian, pariwisata bawah air semakin berkembang, menarik penyelam dan pecinta alam dari seluruh dunia. Hewan laut Indonesia tidak hanya menjadi kekayaan nasional, tetapi juga aset global yang harus dijaga dengan baik.', '2023-10-01', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
--

CREATE TABLE `halaman` (
  `id` int(5) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `halaman`
--

INSERT INTO `halaman` (`id`, `judul`, `isi`) VALUES
(1, 'Profil', 'Kami adalah tim yang berkomitmen untuk menyediakan solusi pengelolaan berita yang efisien. Dengan pengalaman dan dedikasi kami, kami membantu memudahkan pengelolaan konten berita Anda.<br><br>\n\nKami memahami kompleksitas industri berita dan menawarkan alat-alat yang sederhana namun kuat untuk memenuhi kebutuhan Anda. Kami bangga menjadi bagian dari perjalanan Anda dalam menyajikan berita yang relevan dan terpercaya.<br><br>\n\nTim kami selalu siap untuk mendukung Anda dalam mencapai kesuksesan Anda dalam dunia berita digital. Terima kasih telah memilih \"CMS ku\" sebagai mitra Anda. Mari bersama-sama menjalani perjalanan sukses dalam dunia berita!'),
(2, 'Layanan Pembuatan Website', 'Kami berkomitmen untuk memberikan solusi web yang berkualitas tinggi yang memenuhi kebutuhan unik Anda. Jadikan situs web Anda sebagai alat yang efektif untuk pertumbuhan bisnis Anda. Dengan \"CMS ku,\" Anda mendapatkan keunggulan dalam dunia online.<br><br>\n\nMari diskusikan proyek Anda dan bertransformasi menjadi kekuatan digital bersama kami. Terima kasih telah memilih layanan kami!Kami adalah ahli dalam menciptakan situs web yang efektif dan menarik. Dengan fokus pada kebutuhan bisnis berita Anda, kami menyediakan layanan desain, pengembangan, dan optimisasi SEO untuk memastikan situs Anda mencapai hasil maksimal.<br><br>\n\nKami memahami pentingnya tampilan yang profesional dan fungsional untuk memenangkan persaingan dalam industri berita. Dengan \"CMS ku,\" Anda akan memiliki situs yang siap bersaing di era digital. Terima kasih telah memilih kami sebagai mitra Anda dalam perjalanan menciptakan situs web yang mengesankan. Mari mulai mewujudkan visi Anda bersama \"CMS ku.\"'),
(3, 'Layanan Pembuatan Company Profile', 'Kami adalah mitra yang andal dalam membantu Anda menciptakan Company Profile yang profesional dan mencengangkan. Dengan fokus pada identitas bisnis Anda, kami menyediakan layanan desain, penulisan konten, dan pengembangan visual untuk memastikan Company Profile Anda mencerminkan citra perusahaan dengan sempurna.<br><br>\n\nKami mengerti betapa pentingnya sebuah Company Profile yang kuat untuk menarik calon klien dan mitra bisnis. Dengan \"CMS ku,\" Anda akan memiliki alat yang tepat untuk mencapai tujuan Anda. Terima kasih telah memilih kami sebagai mitra Anda dalam mengembangkan Company Profile yang mengesankan. Mari bersama-sama menciptakan kesuksesan!'),
(4, 'Layanan Training', 'Kami adalah pusat pelatihan terkemuka yang siap membantu Anda mengembangkan keterampilan dan pengetahuan Anda. Dengan beragam program pelatihan yang kami tawarkan, kami membantu Anda mencapai potensi penuh Anda.<br><br>\n\nKami memiliki tim instruktur berpengalaman yang akan membimbing Anda dalam mencapai tujuan pembelajaran Anda. Pelatihan kami mencakup berbagai bidang, dari pengembangan profesional hingga keahlian teknis. Dengan \"CMS ku,\" Anda akan mendapatkan pelatihan berkualitas tinggi yang memungkinkan Anda untuk bersaing di dunia kerja yang kompetitif.<br><br>\n\nTerima kasih telah memilih kami sebagai mitra Anda dalam perjalanan pengembangan diri Anda. Mari bersama-sama mencapai kesuksesan melalui pembelajaran yang bermakna!'),
(5, 'Kontak Kami', 'Kami ingin mendengar dari Anda! Jangan ragu untuk menghubungi kami melalui formulir kontak di bawah ini atau melalui informasi kontak yang tersedia. Tim kami siap membantu menjawab pertanyaan, menerima umpan balik, dan merespons permintaan Anda. Kami menghargai komunikasi dengan pelanggan kami, yang membantu kami terus meningkatkan layanan kami. Terima kasih atas dukungan Anda, dan kami selalu siap melayani Anda dengan baik.'),
(6, 'Selamat Datang!', 'Platform yang sederhana dan efisien untuk pengelolaan berita. Dengan \"CMS ku,\" Anda dapat dengan mudah membuat, mengedit, dan mempublikasikan berita tanpa kerumitan. Kami menyediakan alat yang intuitif dan dukungan yang handal untuk membantu Anda menjalankan situs berita Anda dengan lancar..<br><br>\n\nManfaatkan fitur-fitur canggih kami untuk mengelola berita Anda dengan mudah. Mari bergabung dengan kami dan tingkatkan kualitas berita Anda dengan \"CMS ku.\" Terima kasih atas kepercayaan Anda dalam memilih platform kami. Selamat berkarya dalam dunia berita digital!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nm_kategori`) VALUES
(1, 'Pendidikan'),
(2, 'Olahraga'),
(3, 'Teknologi'),
(4, 'Ekonomi'),
(5, 'Binatang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `komentar` varchar(250) DEFAULT NULL,
  `tgl` date NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N',
  `id_berita` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`, `tgl`, `aktif`, `id_berita`) VALUES
(27, 'Adi', 'adi@gmail.com', 'Pertumbuhan ekonomi positif, harapan pemulihan di tengah pandemi yang berkepanjangan.', '2023-10-01', 'Y', 18),
(28, 'Cahyo', 'cahyo@gmail.com', 'Pertumbuhan ekonomi menggembirakan di tengah tantangan pandemi yang berlanjut.', '2023-10-01', 'Y', 18),
(29, 'Joseph', 'jos@gmail.com', 'Perkembangan teknologi 5G memacu inovasi dan pertumbuhan ekonomi digital Indonesia.', '2023-10-01', 'Y', 25),
(30, 'Bila', 'bil@gmail.com', 'Semangat olahraga di sekolah Indonesia mendukung pertumbuhan atlet muda berbakat.', '2023-10-01', 'Y', 23),
(31, 'Darmawan', 'darma@gmail.com', 'Prestasi gemilang bulutangkis Indonesia di tingkat internasional, dorong semangat generasi muda.', '2023-10-01', 'Y', 22),
(32, 'Indra', 'in@gmail.com', 'Prestasi basket nasional Indonesia membangkitkan semangat dan harapan akan masa depan cerah bagi atlet muda Indonesia.', '2023-10-01', 'Y', 21),
(33, 'Leo', 'leo@gmail.com', 'Peluncuran 5G di Indonesia adalah langkah besar menuju masa depan digital yang lebih canggih dan ekonomi yang semakin kuat.', '2023-10-01', 'Y', 20),
(34, 'Wanto', 'wanto@gmail.com', 'Inisiatif teknologi di Indonesia menjanjikan pertumbuhan ekonomi, lapangan kerja baru, dan solusi inovatif. Kolaborasi penting untuk masa depan teknologi yang cerah.', '2023-10-01', 'Y', 19),
(35, 'Indra ', 'ind@gmail.com', 'Tren populasi kucing sebagai hewan peliharaan di Indonesia membantu menciptakan industri yang berkembang dan memberikan dukungan emosional yang berharga bagi pemiliknya.', '2023-10-01', 'Y', 24),
(36, 'Adit', 'adit@gmail.com', 'Kekayaan laut Indonesia adalah harta alam yang harus dijaga dengan baik, menarik pecinta alam dan mendukung pariwisata bawah air yang berkembang.', '2023-10-01', 'Y', 26),
(39, 'Nabila', 'nabnab@gmail.com', 'Selain sebagai teman setia yang memberikan dukungan emosional, kucing juga membantu mengendalikan populasi hewan pengerat yang sering menjadi masalah di perkotaan.', '2023-10-01', 'Y', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(10) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `tmp_lahir` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` int(20) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jabatan` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `level` varchar(20) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama_lengkap`, `email`, `telp`, `level`, `aktif`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Indra Bayu', 'indra@gmail.com', '089612345678', 'Administrator', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_2` (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indeks untuk tabel `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_berita` (`id_berita`) USING BTREE;

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`),
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Ketidakleluasaan untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
