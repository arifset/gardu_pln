-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 26 Feb 2016 pada 14.15
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `gardu_pln`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_gardu`
--

CREATE TABLE IF NOT EXISTS `data_gardu` (
  `id_gardu` int(20) NOT NULL AUTO_INCREMENT,
  `nama_gardu` varchar(60) NOT NULL,
  `id_trafo` int(20) NOT NULL,
  `jenis_gardu` int(50) NOT NULL,
  `gi_gardu` int(50) NOT NULL,
  `alamat_gardu` varchar(200) NOT NULL,
  `temp_gardu` varchar(100) NOT NULL,
  PRIMARY KEY (`id_gardu`),
  KEY `id_gardu` (`id_gardu`,`id_trafo`),
  KEY `jenis_gardu` (`jenis_gardu`),
  KEY `gi_gardu` (`gi_gardu`),
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `data_gardu`
--

INSERT INTO `data_gardu` (`id_gardu`, `nama_gardu`, `id_trafo`, `jenis_gardu`, `gi_gardu`, `alamat_gardu`, `temp_gardu`) VALUES
(16, 'AM 003', 4, 1, 5, 'GUNUNG PENGSONG', '30'),
(17, 'AM 002', 4, 1, 5, 'TANJUNG KARANG', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_minyak_trafo`
--

CREATE TABLE IF NOT EXISTS `data_minyak_trafo` (
  `id_minyak` int(10) NOT NULL AUTO_INCREMENT,
  `id_trafo` int(20) NOT NULL,
  `warna_minyak` varchar(20) NOT NULL,
  `bdv_minyak` int(20) NOT NULL,
  `acidity_minyak` int(10) NOT NULL,
  PRIMARY KEY (`id_minyak`),
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_trafo`
--

CREATE TABLE IF NOT EXISTS `data_trafo` (
  `id_trafo` int(20) NOT NULL AUTO_INCREMENT,
  `kode_trafo` varchar(20) NOT NULL,
  `sn_trafo` varchar(60) NOT NULL,
  `kapasitas_trafo` varchar(50) NOT NULL,
  `hvnominal_trafo` varchar(50) NOT NULL,
  `lvnominal_trafo` varchar(50) NOT NULL,
  `temp_oil_trafo` varchar(30) NOT NULL,
  `merk_trafo` varchar(20) NOT NULL,
  `tahun_trafo` varchar(20) NOT NULL,
  `type_trafo` int(20) NOT NULL,
  PRIMARY KEY (`id_trafo`),
  KEY `name_trafo` (`kode_trafo`,`type_trafo`),
  KEY `type_trafo` (`type_trafo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `data_trafo`
--

INSERT INTO `data_trafo` (`id_trafo`, `kode_trafo`, `sn_trafo`, `kapasitas_trafo`, `hvnominal_trafo`, `lvnominal_trafo`, `temp_oil_trafo`, `merk_trafo`, `tahun_trafo`, `type_trafo`) VALUES
(1, '0', 'ASDAD2200', '240', '30', '240', '30', '', '2000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gi_gardu_list`
--

CREATE TABLE IF NOT EXISTS `gi_gardu_list` (
  `id_gi_gardu` int(50) NOT NULL AUTO_INCREMENT,
  `nama_gi_gardu` varchar(60) NOT NULL,
  PRIMARY KEY (`id_gi_gardu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `gi_gardu_list`
--

INSERT INTO `gi_gardu_list` (`id_gi_gardu`, `nama_gi_gardu`) VALUES
(5, 'AMPENAN'),
(6, 'JIRANJANG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_gardu_list`
--

CREATE TABLE IF NOT EXISTS `jenis_gardu_list` (
  `id_jenis_gardu` int(50) NOT NULL AUTO_INCREMENT,
  `nama_jenis_gardu` varchar(60) NOT NULL,
  PRIMARY KEY (`id_jenis_gardu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `jenis_gardu_list`
--

INSERT INTO `jenis_gardu_list` (`id_jenis_gardu`, `nama_jenis_gardu`) VALUES
(1, 'Gardu Portal'),
(2, 'Gardu Cantol');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(20) NOT NULL AUTO_INCREMENT,
  `name_jurusan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `name_jurusan`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kebocoran_list`
--

CREATE TABLE IF NOT EXISTS `kebocoran_list` (
  `id_bocor` int(20) NOT NULL AUTO_INCREMENT,
  `name_bocor` varchar(50) NOT NULL,
  `nilai_bocor` int(60) NOT NULL,
  PRIMARY KEY (`id_bocor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `kebocoran_list`
--

INSERT INTO `kebocoran_list` (`id_bocor`, `name_bocor`, `nilai_bocor`) VALUES
(1, 'REMBES', 1),
(2, 'TIDAK REMBES', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi_trafo`
--

CREATE TABLE IF NOT EXISTS `kondisi_trafo` (
  `id_trafo` int(20) NOT NULL,
  `tap_trafo` int(20) NOT NULL,
  `kebocoran_trafo` int(20) NOT NULL,
  `silicagel_trafo` varchar(50) NOT NULL,
  `oil_level_trafo` int(20) NOT NULL,
  `oti_trafo` varchar(50) NOT NULL,
  `oti_max_trafo` varchar(50) NOT NULL,
  `gassing_trafo` varchar(50) NOT NULL,
  `grounding_trafo` varchar(50) NOT NULL,
  KEY `id_trafo` (`id_trafo`,`tap_trafo`,`kebocoran_trafo`,`oil_level_trafo`),
  KEY `tap_trafo` (`tap_trafo`),
  KEY `oil_level_trafo` (`oil_level_trafo`),
  KEY `kebocoran_trafo` (`kebocoran_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `name_trafo_list`
--

CREATE TABLE IF NOT EXISTS `name_trafo_list` (
  `id_name` int(20) NOT NULL AUTO_INCREMENT,
  `name_trafo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `name_trafo_list`
--

INSERT INTO `name_trafo_list` (`id_name`, `name_trafo`) VALUES
(1, 'TRAFINDO'),
(2, 'UNINDO'),
(3, 'FOLTRA'),
(4, 'SINTRA'),
(5, 'STARLITE'),
(6, 'BAMBANG DJAJA'),
(7, 'HIKO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note_gardu`
--

CREATE TABLE IF NOT EXISTS `note_gardu` (
  `id_gardu` int(20) NOT NULL,
  `note_gardu` varchar(200) NOT NULL,
  KEY `id_gardu` (`id_gardu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `note_gardu`
--

INSERT INTO `note_gardu` (`id_gardu`, `note_gardu`) VALUES
(1, 'BAIK'),
(2, 'GARDU KOTOR'),
(3, 'PINTU LV BOARD RUSAK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `note_rak`
--

CREATE TABLE IF NOT EXISTS `note_rak` (
  `id_rak` int(20) NOT NULL,
  `note_rak` varchar(200) NOT NULL,
  KEY `id_rak` (`id_rak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `note_trafo`
--

CREATE TABLE IF NOT EXISTS `note_trafo` (
  `id_trafo` int(20) NOT NULL,
  `note_trafo` varchar(200) NOT NULL,
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `oil_level_list`
--

CREATE TABLE IF NOT EXISTS `oil_level_list` (
  `id_level` int(20) NOT NULL AUTO_INCREMENT,
  `name_level` varchar(50) NOT NULL,
  `nilai_level` int(50) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `oil_level_list`
--

INSERT INTO `oil_level_list` (`id_level`, `name_level`, `nilai_level`) VALUES
(1, 'FULL', 100),
(2, 'MEDIUM', 70),
(3, 'LOW', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rk_tr`
--

CREATE TABLE IF NOT EXISTS `rk_tr` (
  `id_gardu` int(20) NOT NULL,
  `id_rak` int(20) NOT NULL,
  `name_rak` varchar(100) NOT NULL,
  `kapasitas_rak` int(100) NOT NULL,
  `jmljurusan_rak` int(100) NOT NULL,
  PRIMARY KEY (`id_rak`),
  KEY `id_gardu` (`id_gardu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rst_jurusan`
--

CREATE TABLE IF NOT EXISTS `rst_jurusan` (
  `id_rst_jurusan` int(20) NOT NULL AUTO_INCREMENT,
  `id_jurusan` int(20) NOT NULL,
  `name_rst` varchar(60) NOT NULL,
  PRIMARY KEY (`id_rst_jurusan`),
  KEY `id_jurusan` (`id_jurusan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `rst_jurusan`
--

INSERT INTO `rst_jurusan` (`id_rst_jurusan`, `id_jurusan`, `name_rst`) VALUES
(1, 1, 'R'),
(2, 1, 'S'),
(3, 1, 'T'),
(4, 2, 'R'),
(5, 2, 'S'),
(6, 2, 'T'),
(7, 3, 'R'),
(8, 3, 'S'),
(9, 3, 'T'),
(10, 4, 'R'),
(11, 4, 'S'),
(12, 4, 'T');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rst_tabel`
--

CREATE TABLE IF NOT EXISTS `rst_tabel` (
  `id_rst` int(20) NOT NULL AUTO_INCREMENT,
  `name_rst2` varchar(50) NOT NULL,
  PRIMARY KEY (`id_rst`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `rst_tabel`
--

INSERT INTO `rst_tabel` (`id_rst`, `name_rst2`) VALUES
(1, 'RS'),
(2, 'ST'),
(3, 'RT'),
(4, 'RN'),
(5, 'SN'),
(6, 'TN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tap_list`
--

CREATE TABLE IF NOT EXISTS `tap_list` (
  `id_tap_list` int(20) NOT NULL AUTO_INCREMENT,
  `name_tap` varchar(50) NOT NULL,
  `nilai_tap` int(50) NOT NULL,
  PRIMARY KEY (`id_tap_list`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tegangan_pq`
--

CREATE TABLE IF NOT EXISTS `tegangan_pq` (
  `id_jurusan` int(20) NOT NULL,
  `id_rst` int(20) NOT NULL,
  `nilai_rst` int(50) NOT NULL,
  KEY `id_jurusan` (`id_jurusan`,`id_rst`),
  KEY `id_rst` (`id_rst`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_rak`
--

CREATE TABLE IF NOT EXISTS `temp_rak` (
  `id_gardu` int(10) NOT NULL,
  `id_rk` int(10) NOT NULL,
  `kabel_rk` int(10) NOT NULL,
  `handle_rk_tr` int(10) NOT NULL,
  `fuse_tr` int(10) NOT NULL,
  KEY `id_rk` (`id_rk`),
  KEY `id_gardu` (`id_gardu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_trafo`
--

CREATE TABLE IF NOT EXISTS `temp_trafo` (
  `id_temp_trafo` int(10) NOT NULL AUTO_INCREMENT,
  `id_trafo` int(10) NOT NULL,
  `temp_CO` int(10) NOT NULL,
  `temp_body` int(10) NOT NULL,
  `temp_atastrafo` int(10) NOT NULL,
  `temp_bushingtr` int(10) NOT NULL,
  `temp_bushingtm` int(10) NOT NULL,
  PRIMARY KEY (`id_temp_trafo`),
  KEY `id_trafo` (`id_trafo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_trafo_list`
--

CREATE TABLE IF NOT EXISTS `type_trafo_list` (
  `id_type_trafo` int(20) NOT NULL AUTO_INCREMENT,
  `name_type_trafo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type_trafo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `type_trafo_list`
--

INSERT INTO `type_trafo_list` (`id_type_trafo`, `name_type_trafo`) VALUES
(1, 'HERMATICAL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukur_pq`
--

CREATE TABLE IF NOT EXISTS `ukur_pq` (
  `id_rst_jurusan` int(20) NOT NULL,
  `id_ukur_pq` int(20) NOT NULL AUTO_INCREMENT,
  `beban_ukur` int(50) NOT NULL,
  `fuse_ukur` int(50) NOT NULL,
  `cosphi_ukur` int(50) NOT NULL,
  PRIMARY KEY (`id_ukur_pq`),
  KEY `id_rst_jurusan` (`id_rst_jurusan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 1);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_gardu`
--
ALTER TABLE `data_gardu`
  ADD CONSTRAINT `data_gardu_ibfk_1` FOREIGN KEY (`gi_gardu`) REFERENCES `gi_gardu_list` (`id_gi_gardu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_2` FOREIGN KEY (`jenis_gardu`) REFERENCES `jenis_gardu_list` (`id_jenis_gardu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_gardu_ibfk_3` FOREIGN KEY (`id_trafo`) REFERENCES `name_trafo_list` (`id_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_minyak_trafo`
--
ALTER TABLE `data_minyak_trafo`
  ADD CONSTRAINT `data_minyak_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `data_trafo`
--
ALTER TABLE `data_trafo`
  ADD CONSTRAINT `data_trafo_ibfk_2` FOREIGN KEY (`type_trafo`) REFERENCES `type_trafo_list` (`id_type_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kondisi_trafo`
--
ALTER TABLE `kondisi_trafo`
  ADD CONSTRAINT `kondisi_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_2` FOREIGN KEY (`tap_trafo`) REFERENCES `tap_list` (`id_tap_list`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_3` FOREIGN KEY (`oil_level_trafo`) REFERENCES `oil_level_list` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kondisi_trafo_ibfk_4` FOREIGN KEY (`kebocoran_trafo`) REFERENCES `kebocoran_list` (`id_bocor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `note_rak`
--
ALTER TABLE `note_rak`
  ADD CONSTRAINT `note_rak_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rk_tr` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `note_trafo`
--
ALTER TABLE `note_trafo`
  ADD CONSTRAINT `note_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_trafo` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rk_tr`
--
ALTER TABLE `rk_tr`
  ADD CONSTRAINT `rk_tr_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `data_gardu` (`id_gardu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rst_jurusan`
--
ALTER TABLE `rst_jurusan`
  ADD CONSTRAINT `rst_jurusan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tegangan_pq`
--
ALTER TABLE `tegangan_pq`
  ADD CONSTRAINT `tegangan_pq_ibfk_1` FOREIGN KEY (`id_rst`) REFERENCES `rst_tabel` (`id_rst`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tegangan_pq_ibfk_2` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `temp_rak`
--
ALTER TABLE `temp_rak`
  ADD CONSTRAINT `temp_rak_ibfk_1` FOREIGN KEY (`id_gardu`) REFERENCES `data_gardu` (`id_gardu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `temp_rak_ibfk_2` FOREIGN KEY (`id_rk`) REFERENCES `rk_tr` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `temp_trafo`
--
ALTER TABLE `temp_trafo`
  ADD CONSTRAINT `temp_trafo_ibfk_1` FOREIGN KEY (`id_trafo`) REFERENCES `data_gardu` (`id_trafo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ukur_pq`
--
ALTER TABLE `ukur_pq`
  ADD CONSTRAINT `ukur_pq_ibfk_1` FOREIGN KEY (`id_rst_jurusan`) REFERENCES `rst_jurusan` (`id_rst_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
