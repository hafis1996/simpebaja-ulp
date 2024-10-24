-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2024 at 02:46 AM
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
-- Database: `okusimpebaja2`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pokja` int UNSIGNED NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nip`, `password`, `nama`, `jabatan`, `no_sk`, `handphone`, `email`, `id_pokja`, `status`, `rule`, `created_at`, `updated_at`) VALUES
(3, '18261944', '$2y$10$pvo1EqIJIn30D.p1QOyote9EVF688SZBYjYLV.cttvaw767skeVrW', 'rikaa', 'staff', '12414141', '7696060121', 'rika@example.com', 4, '0', '0', '2024-08-07 22:05:25', '2024-10-17 20:27:24'),
(4, '16554000123', '$2y$10$9xHVpXAV3EEqt7F3rq0WvOAfWJdgRJm2J.UB/93oR1./6PChidN0a', 'leo', 'staffonly', '123456abc123', '12947102', 'leonardo@example.com', 1, '1', '1', '2024-09-02 03:38:54', '2024-09-02 05:13:51'),
(5, '165540001234', '$2y$10$a6P8RpG0KhiqxRbWiWSGxec.WoKDPQT0WRc1pZh3I4sf.Qpn.uRR2', 'eko kurniawan', 'staff', '123456abcaa', '0897328562', 'eko@example.com', 1, '1', '1', '2024-09-02 04:49:05', '2024-09-02 04:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_posisi` enum('top','center','bottom') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'top',
  `banner_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita_kategori`
--

CREATE TABLE `berita_kategori` (
  `berita_kat_id` int NOT NULL,
  `berita_kat_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `berita_konten`
--

CREATE TABLE `berita_konten` (
  `berita_id` int NOT NULL,
  `berita_kat_id` int DEFAULT NULL,
  `berita_post` timestamp NOT NULL,
  `berita_admin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berita_judul` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berita_permalink` text COLLATE utf8mb4_unicode_ci,
  `berita_isi` text COLLATE utf8mb4_unicode_ci,
  `berita_gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berita_baca` int DEFAULT NULL,
  `berita_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogroll`
--

CREATE TABLE `blogroll` (
  `blog_id` int NOT NULL,
  `blog_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_pengadaan`
--

CREATE TABLE `checklist_pengadaan` (
  `check_id` int NOT NULL,
  `pengadaan_id` int DEFAULT NULL,
  `waktu_disposisi` timestamp NOT NULL,
  `asal_disposisi` int DEFAULT NULL,
  `nm_asli_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_asal` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penerima_disposisi` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nm_asli_penerima` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip_penerima` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan_penerima` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_approved` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_approved` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_approve` text COLLATE utf8mb4_unicode_ci,
  `progres_approve` enum('Kelengkapan','SP_POKJA','BAHP') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Kelengkapan',
  `status_persetujuan` enum('0','1','R','E') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sts_aproved` enum('0','1','E') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `checklist_penolakan`
--

CREATE TABLE `checklist_penolakan` (
  `check_id_p` int NOT NULL,
  `check_id` int DEFAULT NULL,
  `text_penolakan` text COLLATE utf8mb4_unicode_ci,
  `asal_penolakan` int DEFAULT NULL,
  `tujuan_penolakan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_dokumen_pengadaan`
--

CREATE TABLE `data_dokumen_pengadaan` (
  `dokumen_id` int NOT NULL,
  `dokumen_time` timestamp NOT NULL,
  `dokumen_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dokumen_kegiatan` int DEFAULT NULL,
  `dokumen_kode` int DEFAULT NULL,
  `dokumen_file` text COLLATE utf8mb4_unicode_ci,
  `dokumen_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `dokumen_download` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_evaluasi`
--

CREATE TABLE `data_evaluasi` (
  `eva_id` int NOT NULL,
  `eva_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_pengadaan` int DEFAULT NULL,
  `eva_kegiatan` text COLLATE utf8mb4_unicode_ci,
  `eva_teks_evaluasi` text COLLATE utf8mb4_unicode_ci,
  `eva_time_replay` timestamp NULL DEFAULT NULL,
  `eva_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_interaktif`
--

CREATE TABLE `data_interaktif` (
  `interaktif_id` int NOT NULL,
  `interaktif_time` timestamp NOT NULL,
  `interaktif_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interaktif_form_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interaktif_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interaktif_title` text COLLATE utf8mb4_unicode_ci,
  `interaktif_messages` text COLLATE utf8mb4_unicode_ci,
  `interaktif_attch` text COLLATE utf8mb4_unicode_ci,
  `interaktif_status_read` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `interaktif_status_msg` enum('Active','Delete','Archived') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_kontrak`
--

CREATE TABLE `data_jenis_kontrak` (
  `jenis_k_id` int NOT NULL,
  `jenis_k_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_kontrak_detil`
--

CREATE TABLE `data_jenis_kontrak_detil` (
  `jenis_k_detil_id` int NOT NULL,
  `jenis_k_id` int DEFAULT NULL,
  `jenis_k_detil_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `kegiatan_id` int NOT NULL,
  `skpd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  `lkpp_id_satker` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkpp_id_kegiatan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkpp_id_program` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lkpp_anggaran` double DEFAULT NULL,
  `lkpp_ta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kegiatan_kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kegiatan_nama` text COLLATE utf8mb4_unicode_ci,
  `kegiatan_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_kpa`
--

CREATE TABLE `data_kpa` (
  `kpa_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `kpa_tempat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpa_waktu` date DEFAULT NULL,
  `kpa_instansi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpa_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpa_nama_kpa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kpa_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pa`
--

CREATE TABLE `data_pa` (
  `pa_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `pa_instansi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_nama_pa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pengadaan`
--

CREATE TABLE `data_pengadaan` (
  `data_id` int NOT NULL,
  `data_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jenis_id` int DEFAULT NULL,
  `skpd_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_bulan` int DEFAULT NULL,
  `data_tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_id_program` int DEFAULT NULL,
  `id_prog_lkpp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_id_kegiatan` int DEFAULT NULL,
  `id_kegiatan_lkpp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_kegiatan` text COLLATE utf8mb4_unicode_ci,
  `data_kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagu_anggaran` double DEFAULT NULL,
  `id_data_objek` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_sumber_dana` int DEFAULT NULL,
  `data_jenis_kontrak_a` int DEFAULT NULL,
  `data_jenis_kontrak_a_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_b` int DEFAULT NULL,
  `data_jenis_kontrak_b_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_c` int DEFAULT NULL,
  `data_jenis_kontrak_c_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_d` int DEFAULT NULL,
  `data_jenis_kontrak_d_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ppk` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_paket_pekerjaan` text COLLATE utf8mb4_unicode_ci,
  `data_lokasi` text COLLATE utf8mb4_unicode_ci,
  `data_hps` double DEFAULT NULL,
  `data_paket_harga` double DEFAULT NULL,
  `data_jwaktu_pelaksanaan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_rpelaksanaan_a` date DEFAULT NULL,
  `data_rpelaksanaan_b` date DEFAULT NULL,
  `data_status_upload_dok` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nama_pemenang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pemenang` text COLLATE utf8mb4_unicode_ci,
  `npwp_pemenang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_status_kegiatan` enum('Pengajuan','Verifikasi','Evaluasi','E-Lelang','E-X','Pembatalan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pengajuan',
  `data_tanggal_verifikasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_admin_verifikasi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sts_disposisi` enum('1','0') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_disposisi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi_spbbj` enum('N','Y') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `time_disp_ver_sppbj` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sp_pokja` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sts_verifikasi_pokja` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_verifikasi_pokja` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sts_disposisi_bahp` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_disposisi_bahp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi_bahp` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `verifikasi_bahp_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kontrak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_day` int DEFAULT NULL,
  `jns_tahun` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_evaluasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_ex` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pengadaan`
--

INSERT INTO `data_pengadaan` (`data_id`, `data_posting`, `jenis_id`, `skpd_id`, `data_bulan`, `data_tahun`, `data_id_program`, `id_prog_lkpp`, `data_id_kegiatan`, `id_kegiatan_lkpp`, `sub_kegiatan`, `data_kode_rekening`, `pagu_anggaran`, `id_data_objek`, `data_sumber_dana`, `data_jenis_kontrak_a`, `data_jenis_kontrak_a_dt`, `data_jenis_kontrak_b`, `data_jenis_kontrak_b_dt`, `data_jenis_kontrak_c`, `data_jenis_kontrak_c_dt`, `data_jenis_kontrak_d`, `data_jenis_kontrak_d_dt`, `data_ppk`, `data_paket_pekerjaan`, `data_lokasi`, `data_hps`, `data_paket_harga`, `data_jwaktu_pelaksanaan`, `data_rpelaksanaan_a`, `data_rpelaksanaan_b`, `data_status_upload_dok`, `nama_pemenang`, `alamat_pemenang`, `npwp_pemenang`, `data_status_kegiatan`, `data_tanggal_verifikasi`, `data_admin_verifikasi`, `sts_disposisi`, `time_disposisi`, `verifikasi_spbbj`, `time_disp_ver_sppbj`, `status_sp_pokja`, `sts_verifikasi_pokja`, `time_verifikasi_pokja`, `sts_disposisi_bahp`, `time_disposisi_bahp`, `verifikasi_bahp`, `verifikasi_bahp_time`, `jenis_kontrak`, `no_surat`, `tgl_surat`, `jml_day`, `jns_tahun`, `tgl_evaluasi`, `tgl_ex`, `created_at`, `updated_at`) VALUES
(1, '2024-09-04 06:15:23', 1, '1', NULL, '2024', NULL, NULL, NULL, NULL, 'coba sub kegiatan3sgs', '16554000921', 100013, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coba kegiatan/paket lelang34', 'palembang', 10001, NULL, '121', '2024-09-05', '2024-09-05', '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '1', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '2', '13125', '2024-09-04', NULL, NULL, NULL, NULL, NULL, '2024-09-17 22:59:49'),
(2, '2024-09-05 03:45:04', 2, '2', NULL, '2024', NULL, NULL, NULL, NULL, 'coba sub kegiatan123', '165540009213', 12414, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coba kegiatan/paket lelang123', 'palembang', 100013, NULL, '123', '2024-09-05', '2024-09-07', '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '0', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '7', '13125aa', '2024-09-07', NULL, NULL, NULL, NULL, NULL, '2024-09-17 20:57:29'),
(3, '2024-09-06 09:22:59', 1, '1', NULL, '2025', NULL, NULL, NULL, NULL, 'coba sub kegiatan2', '1655400092334', 12414, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'coba kegiatan/paket lelang', 'palembang', 100015, NULL, '12313', '2024-09-20', '2024-09-22', '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '1', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '1', '13125aa', '2024-09-07', NULL, NULL, NULL, NULL, NULL, '2024-09-17 20:58:54'),
(4, '2024-09-18 07:36:55', 1, '1', NULL, '2025', NULL, NULL, NULL, NULL, 'coba sub kegiatan', '16554000921', 100013, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'adada', 'palembang', 10001, NULL, 'coba jangka waktu2fsf', '2024-09-28', '2024-09-30', '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '1', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '1', '13125', '2024-09-18', NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2024-09-18 07:41:43', 1, '1', NULL, '2025', NULL, NULL, NULL, NULL, 'coba sub kegiatanad', '165540009213', 12312, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'paket lelang coba', 'palembang', 123131, NULL, 'coba jangka waktu2as2', '2024-09-19', '2024-09-26', '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '0', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '1', '13125231', '2024-09-18', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_pengadaan_pembatalan`
--

CREATE TABLE `data_pengadaan_pembatalan` (
  `data_id` int NOT NULL,
  `data_posting` timestamp NOT NULL,
  `jenis_id` int DEFAULT NULL,
  `skpd_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_bulan` int DEFAULT NULL,
  `data_tahun` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_id_program` int DEFAULT NULL,
  `id_prog_lkpp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_id_kegiatan` int DEFAULT NULL,
  `id_kegiatan_lkpp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_kegiatan` text COLLATE utf8mb4_unicode_ci,
  `data_kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagu_anggaran` double DEFAULT NULL,
  `id_data_objek` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_sumber_dana` int DEFAULT NULL,
  `data_jenis_kontrak_a` int DEFAULT NULL,
  `data_jenis_kontrak_a_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_b` int DEFAULT NULL,
  `data_jenis_kontrak_b_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_c` int DEFAULT NULL,
  `data_jenis_kontrak_c_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_jenis_kontrak_d` int DEFAULT NULL,
  `data_jenis_kontrak_d_dt` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_ppk` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_paket_pekerjaan` text COLLATE utf8mb4_unicode_ci,
  `data_lokasi` text COLLATE utf8mb4_unicode_ci,
  `data_hps` double DEFAULT NULL,
  `data_paket_harga` double DEFAULT NULL,
  `data_jwaktu_pelaksanaan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_rpelaksanaan_a` date DEFAULT NULL,
  `data_rpelaksanaan_b` date DEFAULT NULL,
  `data_status_upload_dok` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `nama_pemenang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_pemenang` text COLLATE utf8mb4_unicode_ci,
  `npwp_pemenang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_status_kegiatan` enum('Pengajuan','Verifikasi','Evaluasi','E-Lelang','E-X','Pembatalan') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pengajuan',
  `data_tanggal_verifikasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_admin_verifikasi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sts_disposisi` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_disposisi` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi_spbbj` enum('N','Y') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `time_disp_ver_sppbj` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_sp_pokja` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `sts_verifikasi_pokja` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_verifikasi_pokja` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sts_disposisi_bahp` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `time_disposisi_bahp` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifikasi_bahp` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `verifikasi_bahp_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenis_kontrak` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_surat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jml_day` int DEFAULT NULL,
  `jns_tahun` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_evaluasi` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_ex` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pokja`
--

CREATE TABLE `data_pokja` (
  `pokja_id` int NOT NULL,
  `nama_pokja` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_no_sk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_cp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_usernm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pokja_kegiatan`
--

CREATE TABLE `data_pokja_kegiatan` (
  `keg_pokja_id` int NOT NULL,
  `keg_pokja_time` timestamp NOT NULL,
  `pokja_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_sk` text COLLATE utf8mb4_unicode_ci,
  `keg_pokja_tanggal` date DEFAULT NULL,
  `keg_pokja_keg` int DEFAULT NULL,
  `keg_bahp` text COLLATE utf8mb4_unicode_ci,
  `keg_date_bahp` date DEFAULT NULL,
  `keg_dok_pra` text COLLATE utf8mb4_unicode_ci,
  `keg_date_dok_pra` date DEFAULT NULL,
  `keg_surat_ppenyedia` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `keg_time_spl` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahp_approved` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `bahp_time` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keg_set_admin` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pokja_kegiatan_bahp`
--

CREATE TABLE `data_pokja_kegiatan_bahp` (
  `bahp_id` int NOT NULL,
  `bahp_time` timestamp NOT NULL,
  `bahp_nomor` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahp_tanggal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bahp_id_keg` int DEFAULT NULL,
  `bahp_dok` text COLLATE utf8mb4_unicode_ci,
  `bap_admin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_set_disposisi` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pokja_kegiatan_dok_pra`
--

CREATE TABLE `data_pokja_kegiatan_dok_pra` (
  `dok_pra_id` int NOT NULL,
  `dok_pra_time` timestamp NOT NULL,
  `dok_pra_id_keg` int DEFAULT NULL,
  `dok_pra_dok` text COLLATE utf8mb4_unicode_ci,
  `dok_pra_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_pokja_sub`
--

CREATE TABLE `data_pokja_sub` (
  `pokja_id` int NOT NULL,
  `pokja_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_no_sk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_cp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pokja_usernm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_ppk`
--

CREATE TABLE `data_ppk` (
  `ppk_id` int NOT NULL,
  `skpd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_no_sk` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_cp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppk_usernm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_program`
--

CREATE TABLE `data_program` (
  `program_id` int NOT NULL,
  `id_program_lkpp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_nama` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_sumber_dana`
--

CREATE TABLE `data_sumber_dana` (
  `dana_id` int NOT NULL,
  `dana_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dana_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sumber_dana`
--

INSERT INTO `data_sumber_dana` (`dana_id`, `dana_skpd`, `dana_nama`, `created_at`, `updated_at`) VALUES
(1, '1', 'APBD 2025', '2024-05-17 06:00:03', '2024-05-17 06:00:03'),
(4, '3', 'APBNA', NULL, NULL),
(13, '4', 'APBN', NULL, NULL),
(14, '2', 'APBD 2024', '2024-07-29 22:30:30', '2024-07-29 22:30:30'),
(15, NULL, 'APBD 2024', '2024-07-29 22:32:57', '2024-07-29 22:32:57'),
(16, NULL, 'APBD 2024', '2024-07-29 22:45:55', '2024-07-29 22:45:55'),
(17, NULL, 'APBD 2024', '2024-07-31 00:13:26', '2024-07-31 00:13:26'),
(18, '22', 'HIBAH', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evaluasi`
--

CREATE TABLE `evaluasi` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `pesan` text NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `tanggapi_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kontrak`
--

CREATE TABLE `jenis_kontrak` (
  `kontrak_id` int NOT NULL,
  `pengadaan_id` int DEFAULT NULL,
  `kontrak_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_kontrak`
--

INSERT INTO `jenis_kontrak` (`kontrak_id`, `pengadaan_id`, `kontrak_nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lump sum', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(2, 1, 'Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(3, 1, 'Gabungan Lump sum dan Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(4, 1, 'Terima Jadi (Turnkey)', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(5, 1, 'Kontrak Payung', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(6, 2, 'Lumpsum', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(7, 2, 'Waktu Penugasan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(8, 2, 'Kontrak Payung', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(9, 3, 'Lumsum', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(10, 3, 'Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(11, 3, 'Gabungan Lumsum dan Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(12, 3, 'Terima Jadi (Turnkey)', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(13, 4, 'Lumsum', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(14, 4, 'Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(15, 4, 'Gabungan Lumsum dan Harga Satuan', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(16, 4, 'Terima Jadi (Turnkey)', '2024-09-03 19:29:06', '2024-09-03 19:29:06'),
(17, 4, 'Kontrak Payung', '2024-09-03 19:29:06', '2024-09-03 19:29:06');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengadaan`
--

CREATE TABLE `jenis_pengadaan` (
  `jenis_id` int NOT NULL,
  `nama_pengadaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_pengadaan`
--

INSERT INTO `jenis_pengadaan` (`jenis_id`, `nama_pengadaan`, `created_at`, `updated_at`) VALUES
(1, 'Pengadaan Barang', '2024-08-04 18:54:03', '2024-08-04 18:54:03'),
(2, 'Jasa Konsultansi Badan Usaha', '2024-08-04 18:54:03', '2024-08-04 18:54:03'),
(3, 'Pekerjaan Konstruksi', '2024-08-04 18:54:03', '2024-08-04 18:54:03'),
(4, 'Jasa Lainnya', '2024-08-04 18:54:03', '2024-08-04 18:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_data_kegiatan`
--

CREATE TABLE `lkpp_data_kegiatan` (
  `id_data_k` int NOT NULL,
  `id_data_lkpp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_satket` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_kegiatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_program` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kegiatan` text COLLATE utf8mb4_unicode_ci,
  `pagu_kegiatan` double DEFAULT NULL,
  `tahun_anggaran` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_lkpp_keg` enum('true','false') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_data_kegiatan_sub`
--

CREATE TABLE `lkpp_data_kegiatan_sub` (
  `sub_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  `kegiatan_id` int DEFAULT NULL,
  `kode_objek` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraian_objek` text COLLATE utf8mb4_unicode_ci,
  `pagu_objek` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_data_program`
--

CREATE TABLE `lkpp_data_program` (
  `id_data_p` int NOT NULL,
  `id_data_p_lkpp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_program` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_program` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_satker` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_program` text COLLATE utf8mb4_unicode_ci,
  `pagu_program` double DEFAULT NULL,
  `status_lkpp` enum('true','false') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_data_satker`
--

CREATE TABLE `lkpp_data_satker` (
  `id_data_set` int NOT NULL,
  `id_dinas` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_satker` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_dinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_aktif` text COLLATE utf8mb4_unicode_ci,
  `status_aktif` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_paket_2020`
--

CREATE TABLE `lkpp_paket_2020` (
  `paket_id` int NOT NULL,
  `klpd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahunanggaran` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idrup` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapaket` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahpagu` double NOT NULL,
  `namasatker` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodesatker` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodepengadaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idmetodepengadaan` int NOT NULL,
  `jenispengadaan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idjenispengadaan` int NOT NULL,
  `spesifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalkebutuhan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalawalpemilihan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalakhirpemilihan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalawalpekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalakhirpekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspradipa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statuspenyedia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statustkdn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statususahakecil` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `statusumumkan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_ppk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalpengumuman` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rup_client` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_klpd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lkpp_satker_2020`
--

CREATE TABLE `lkpp_satker_2020` (
  `satker_id` int NOT NULL,
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kldi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_satker` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_aktif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_doc_elektronik`
--

CREATE TABLE `log_doc_elektronik` (
  `log_id` int NOT NULL,
  `log_time` timestamp NOT NULL,
  `log_doc_set` enum('SP_POKJA','BAHP') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SP_POKJA',
  `log_ip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_user` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_user_set` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_dokumen` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `log_keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_info`
--

CREATE TABLE `log_info` (
  `info_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `waktu_progres` timestamp NOT NULL,
  `info_progres` text COLLATE utf8mb4_unicode_ci,
  `admin_progres` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int UNSIGNED NOT NULL,
  `data_pengadaan_id` int NOT NULL,
  `from_user_id` int UNSIGNED NOT NULL,
  `to_user_id` int UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `data_pengadaan_id`, `from_user_id`, `to_user_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(8, 1, 7, 1, 'coba benarkan broa', '1', '2024-09-12 20:05:16', '2024-09-17 02:08:56'),
(9, 2, 7, 2, 'test', '0', '2024-09-17 02:14:32', '2024-09-17 02:14:32'),
(11, 1, 7, 1, 'coba lengkapi persyaratannya :)', '0', '2024-09-17 21:03:24', '2024-09-17 21:03:24'),
(12, 2, 7, 2, 'suuuuuuu', '0', '2024-09-17 23:02:53', '2024-09-17 23:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2024_05_17_110849_create_data_sumber_danas_table', 5),
(9, '2024_05_17_110724_create_data_sumber_danas_table', 6),
(323, '2024_08_01_060500_create_syarat_dokumen_table', 7),
(324, '2014_10_12_000000_create_users_disposisi', 8),
(325, '2014_10_12_100000_create_password_reset_tokens_table', 8),
(326, '2019_08_19_000000_create_failed_jobs_table', 8),
(327, '2019_12_14_000001_create_personal_access_tokens_table', 8),
(328, '2024_05_16_025947_create_user_skpd_table', 8),
(329, '2024_05_17_065429_add_time_to_user_skpd', 8),
(330, '2024_05_17_093511_add_time_to_user_skpd', 8),
(331, '2024_05_22_042201_create_data_pengadaans_table', 8),
(332, '2024_05_22_080155_create_data_jenis_kontraks_table', 8),
(333, '2024_05_22_121122_create_data_jenis_kontrak_detils_table', 8),
(334, '2024_05_27_033907_create_jenis_pengadaans_table', 8),
(335, '2024_06_02_235154_add_password_to_user_skpd', 8),
(336, '2024_06_03_235159_create_checklist_pengadaans_table', 8),
(337, '2024_06_04_041637_create_checklist_penolakans_table', 8),
(338, '2024_06_04_045816_create_data_dokumen_pengadaans_table', 8),
(339, '2024_06_04_050821_create_data_evaluasis_table', 8),
(340, '2024_06_04_052450_create_data_interaktifs_table', 8),
(341, '2024_06_04_073634_create_data_kegiatans_table', 8),
(342, '2024_06_04_075424_create_data_kpas_table', 8),
(343, '2024_06_04_080143_create_data_pas_table', 8),
(344, '2024_06_04_080635_create_data_pengadaan_pembatalans_table', 8),
(345, '2024_06_04_081926_create_data_pokjas_table', 8),
(346, '2024_06_04_114300_create_data_pokja_kegiatans_table', 8),
(347, '2024_06_04_115402_create_data_pokja_kegiatan_bahps_table', 8),
(348, '2024_06_04_115843_create_data_pokja_kegiatan_dok_pras_table', 8),
(349, '2024_06_04_121617_create_data_pokja_subs_table', 8),
(350, '2024_06_04_122801_create_data_ppks_table', 8),
(351, '2024_06_04_123313_create_data_programs_table', 8),
(352, '2024_06_04_123947_create_jenis_kontraks_table', 8),
(353, '2024_06_04_124256_create_lkpp_data_kegiatans_table', 8),
(354, '2024_06_04_130126_create_lkpp_data_kegiatan_subs_table', 8),
(355, '2024_06_04_133121_create_lkpp_data_programs_table', 8),
(356, '2024_06_04_133937_create_lkpp_data_satkers_table', 8),
(357, '2024_06_05_033832_create_banners_table', 8),
(358, '2024_06_05_035201_create_berita_kategoris_table', 8),
(359, '2024_06_05_035417_create_berita_kontens_table', 8),
(360, '2024_06_05_040117_create_blogrolls_table', 8),
(361, '2024_06_06_015552_create_lkpp_paket_2020s_table', 8),
(362, '2024_06_06_022025_create_lkpp_satker_2020s_table', 8),
(363, '2024_06_06_022542_create_log_doc_elektroniks_table', 8),
(364, '2024_06_06_023018_create_log_infos_table', 8),
(365, '2024_06_06_023405_create_monitorings_table', 8),
(366, '2024_06_06_024631_create_penilaian_polls_table', 8),
(367, '2024_06_06_025541_create_pesans_table', 8),
(368, '2024_06_06_033045_create_pesan_balasans_table', 8),
(369, '2024_06_06_033934_create_pollings_table', 8),
(370, '2024_06_06_034311_create_profiles_table', 8),
(371, '2024_06_06_040244_create_skpd_kategoris_table', 8),
(372, '2024_06_06_042602_create_skpd_lists_table', 8),
(373, '2024_06_10_062229_add_timestamp_to_jenis_pengadaan_table', 8),
(374, '2024_07_29_073140_create_users_simpebaja', 8),
(375, '2024_08_05_013353_create_syarat_dokumen_table', 8),
(376, '2024_08_05_023755_create_syarat_dokumen', 9),
(377, '2024_08_05_083605_create_pokja_table', 10),
(378, '2024_08_05_092348_create_pokja_table2', 11),
(379, '2024_08_08_032548_create_anggota_table', 12),
(381, '2024_08_13_022103_create_opd_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `monitoring_id` int NOT NULL,
  `skpd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_anggaran` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah_pengajuan` int DEFAULT NULL,
  `jumlah_verifikasi` int DEFAULT NULL,
  `jumlah_evaluasi` int DEFAULT NULL,
  `jumlah_e_lelang` int DEFAULT NULL,
  `jumlah_hps` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `opd`
--

CREATE TABLE `opd` (
  `id_opd` int UNSIGNED NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opd`
--

INSERT INTO `opd` (`id_opd`, `nama_opd`, `created_at`, `updated_at`) VALUES
(1, 'Dinas Kominfo', NULL, NULL),
(2, 'Dinas BKPSDM', NULL, NULL),
(3, 'Dinas Pekerjaan Umum', NULL, NULL),
(4, 'Dinas Sosial', '2024-08-13 07:34:35', '2024-08-13 07:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_poll`
--

CREATE TABLE `penilaian_poll` (
  `poll_id` int NOT NULL,
  `poll_time` timestamp NOT NULL,
  `poll_ip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_access` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_value` enum('C','B','SB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `pesan_id` int NOT NULL,
  `pesan_waktu` timestamp NOT NULL,
  `pesan_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_hp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_status` enum('0','1','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_balasan`
--

CREATE TABLE `pesan_balasan` (
  `balasan_id` int NOT NULL,
  `balasan_waktu` timestamp NOT NULL,
  `pesan_id` int NOT NULL,
  `balasan_user_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan_user_nip` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan_user_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `balasan_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pokja`
--

CREATE TABLE `pokja` (
  `id_pokja` int UNSIGNED NOT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pokja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pokja`
--

INSERT INTO `pokja` (`id_pokja`, `nip`, `nama_pokja`, `nama`, `jabatan`, `no_sk`, `handphone`, `email`, `created_at`, `updated_at`) VALUES
(1, '1655400092', '', 'muhammadhafis', 'staff only', '123456abc', '08956047674781', 'kgsmuhammadhafispalembang@gmail.com', '2024-08-05 02:43:03', '2024-09-02 03:27:11'),
(2, '1655400091', '', 'muhammad hafis', 'staff only12', '123456abc1', '7696060', 'muhammadhafisplm@gmail.com', '2024-08-06 01:19:16', '2024-08-28 00:39:16'),
(3, '1655400093', '', 'muhammadhafiss', 'staffs', '123456abc1s', '7696060s', 'user2@example.com', '2024-08-07 00:51:52', '2024-08-07 00:51:52'),
(4, '131313', '', 'muhammadhafis1231', 'staff only1321', '123456abc123', '7696060s31', 'user21@example.com', '2024-08-07 01:43:33', '2024-08-07 01:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `polling`
--

CREATE TABLE `polling` (
  `pol_id` int NOT NULL,
  `pol_post` timestamp NOT NULL,
  `pol_tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_user_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_skpd_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_value` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_komen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profil_id` int NOT NULL,
  `profil_institusi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil_pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil_nip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil_alamat` text COLLATE utf8mb4_unicode_ci,
  `profil_si_inisial` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_si` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil_visi` text COLLATE utf8mb4_unicode_ci,
  `profil_misi` text COLLATE utf8mb4_unicode_ci,
  `profil_struktur` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skpd_kategori`
--

CREATE TABLE `skpd_kategori` (
  `skpd_kat_id` int NOT NULL,
  `skpd_kat_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_kat_pimpinan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skpd_list`
--

CREATE TABLE `skpd_list` (
  `skpd_id` int NOT NULL,
  `skpd_kelompok` enum('BADAN','DINAS','KECAMATAN','BAGIAN') COLLATE utf8mb4_unicode_ci NOT NULL,
  `satker_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_kat_id` int DEFAULT NULL,
  `skpd_kode` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_nama` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_inisial` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_alamat` text COLLATE utf8mb4_unicode_ci,
  `skpd_telp` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_pimpinan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_pimpinan_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_pengajuan` int DEFAULT NULL,
  `skpd_verifikasi` int DEFAULT NULL,
  `skpd_e_lelang` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skpd_list`
--

INSERT INTO `skpd_list` (`skpd_id`, `skpd_kelompok`, `satker_id`, `skpd_kat_id`, `skpd_kode`, `skpd_nama`, `skpd_inisial`, `skpd_alamat`, `skpd_telp`, `skpd_pimpinan`, `skpd_pimpinan_nip`, `skpd_pengajuan`, `skpd_verifikasi`, `skpd_e_lelang`, `created_at`, `updated_at`) VALUES
(1, 'BADAN', '21432', 13, '12345', 'Dinas Pertanian', 'Pertanian', 'Batumarta', '089121', 'Sam', '8912121', NULL, NULL, NULL, '2024-08-04 18:52:03', '2024-08-28 00:38:13'),
(2, 'BADAN', '14', 4, '123456', 'Dinas Kelautan', 'Kelautan', 'baturaja', '0891212342', 'kgs muhammad hafis', '17251794', 1, 1, 1, '2024-08-07 22:11:39', '2024-08-07 22:36:20'),
(3, 'BADAN', '21432', 12, '1234563', 'Dinas Kominfo', 'Kominfo', 'Palembang', '09182471571', 'kgshafis', '1618410', 1, 1, 1, '2024-08-28 00:28:22', '2024-08-28 00:29:09'),
(4, 'BADAN', '12414125', 4214, '12414', 'Dinas Kehutanan', 'Kehutanan', 'baturaja', '1294721052', 'agus', '16554000101', 1, 1, 1, '2024-09-01 21:10:35', '2024-09-01 21:10:35');

-- --------------------------------------------------------

--
-- Table structure for table `sub_opd`
--

CREATE TABLE `sub_opd` (
  `id_subopd` int UNSIGNED NOT NULL,
  `nama_sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_opd` int NOT NULL,
  `kebutuhan` int NOT NULL,
  `tersedia` int NOT NULL,
  `kurang` int NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_opd`
--

INSERT INTO `sub_opd` (`id_subopd`, `nama_sub`, `id_opd`, `kebutuhan`, `tersedia`, `kurang`, `lokasi`, `syarat`, `created_at`, `updated_at`) VALUES
(1, 'sub perencanaan keuangan', 1, 10, 7, 3, 'Kota A', '/storage/uploads/syarat/1723567470_TRAIN_AWAY_e-ticket.pdf', NULL, '2024-08-13 09:44:31'),
(2, 'sub umum kepegawaian', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(3, 'bidang informasi dan komunikasi publik', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(4, 'bidang aplikasi dan informatika', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(5, 'bidang statistik dan persandian', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(6, 'sub umum kepegawaian', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(7, 'unit pelaksana teknis dinas', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(8, 'kelompok jabatan fungsional', 1, 8, 5, 3, 'Kota B', 'syarat2.pdf', NULL, NULL),
(9, 'sub perencanaan, evaluasi dan pelaporan', 2, 15, 12, 3, 'Kota C', 'syarat3.pdf', NULL, NULL),
(10, 'sub umum kepegawaian dan keuangan', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(11, 'sub bidang mutasi dan promosi', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(12, 'sub umum kepegawaian dan keuangan', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(13, 'sub bidang pengembangan kompetensi aparatur', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(14, ' bidang pengadaan pemberhentian dan informasi', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(15, 'bidang penilaian kinerja aparatur dan penghargaan', 2, 10, 8, 2, 'Kota D', 'syarat4.pdf', NULL, NULL),
(16, 'Jalan Tol X', 3, 20, 18, 2, 'Kota E', 'syarat5.pdf', NULL, NULL),
(17, 'Jalan Tol Y', 3, 20, 18, 2, 'Kota E', 'syarat5.pdf', NULL, NULL),
(18, 'Jalan Tol Z', 3, 20, 18, 2, 'Kota E', 'syarat5.pdf', NULL, NULL),
(19, 'Kepala Dinas', 4, 1, 1, 0, 'baturaja', '/storage/uploads/syarat/1723563438_Dinas PU  Pengguna.pdf', '2024-08-13 07:37:35', '2024-08-13 08:40:26');

-- --------------------------------------------------------

--
-- Table structure for table `syarat_dokumen`
--

CREATE TABLE `syarat_dokumen` (
  `syarat_id` bigint UNSIGNED NOT NULL,
  `jenis_pengadaan` enum('pengadaan_barang','jasa_konsultasi','pekerjaan_konstruksi','jasa_lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `syarat_dokumen`
--

INSERT INTO `syarat_dokumen` (`syarat_id`, `jenis_pengadaan`, `nama_dokumen`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'pengadaan_barang', 'Contoh Dokumen 1', 'Ini adalah contoh dokumen pertama.', '2024-08-04 19:57:35', '2024-08-04 19:57:35'),
(2, 'jasa_konsultasi', 'Contohaaa Dokumen 2a', 'Ini adalah contoh dokumen kedua.aaa', '2024-08-04 19:57:35', '2024-08-07 02:29:34'),
(3, 'pengadaan_barang', 'Dokumen Jasa Lainnya', 'dad', '2024-08-04 21:51:11', '2024-08-04 21:51:11'),
(4, 'jasa_konsultasi', 'jasa konsultasi', 'adad', '2024-08-04 21:51:44', '2024-08-04 21:51:44'),
(5, 'pekerjaan_konstruksi', 'dokumen perkerjaan kontruksi', 'dokumen oke', '2024-08-04 21:52:09', '2024-08-07 02:31:05'),
(6, 'jasa_lainnya', 'jasa lainnnya', 'jasa lainyaa', '2024-08-04 21:52:59', '2024-08-04 21:52:59'),
(7, 'pekerjaan_konstruksi', 'Dokumen konsultasi 111', 'dokumen konsultasi  asaa', '2024-08-07 02:14:23', '2024-08-07 02:29:47');

-- --------------------------------------------------------

--
-- Table structure for table `users_ulp`
--

CREATE TABLE `users_ulp` (
  `ulp_id` int NOT NULL,
  `ulp_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ulp_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulp_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulp_alamat` text COLLATE utf8mb4_unicode_ci,
  `ulp_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulp_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ulp_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_ulp`
--

INSERT INTO `users_ulp` (`ulp_id`, `ulp_register`, `ulp_nip`, `ulp_nama`, `ulp_alamat`, `ulp_email`, `ulp_hp`, `ulp_username`, `password`, `skpd_id`, `level`, `created_at`, `updated_at`) VALUES
(1, '2024-08-09 02:28:24', '1655400092', 'hafis', 'palembang', 'hafis@gmail.com', '0932749224', 'hafis', '$2y$10$9yxUswskzSRblkuHuTjOl.NwG3YwHcvNMbJF661rCYwYLgoLyLQia', '0', 'admin', '2024-08-08 19:28:24', '2024-08-12 18:46:55'),
(2, '2024-08-09 06:52:29', '1655400090', 'hafis2', 'palembang', 'hafis2@gmail.com', '920472052', 'hafis2', '$2y$10$LcP6OtJsHIadACF88rlyOOA2ZzWkbB/a87SiFdEOwTQ6lIS2uBl3G', '0', 'admin', '2024-08-08 23:52:29', '2024-08-12 18:47:34'),
(3, '2024-08-10 03:38:33', '1655400093', 'andi', 'palembang', 'andi@example.com', '935722521231', 'andi', '$2y$10$GykJs60NajIi5Ne8E1we1.QVNqyhXNCBY8OkB1s483j9JPZO9l8wS', '0', 'superadmin', '2024-08-09 20:38:33', '2024-08-09 20:38:33'),
(4, '2024-08-10 03:45:41', '1655400094', 'budi', 'baturaja', 'budi@example.com', '90237205', 'budi', '$2y$10$jR8DzMcMUYUsCcZTt2jF0ukZL.UJOjp3cyvVbYAe94D3Y8Rn59Thq', '0', 'superadmin', '2024-08-09 20:45:41', '2024-08-09 20:45:41'),
(5, '2024-08-10 03:48:46', '1655400095', 'joko', 'baturaja', 'joko@example.com', '902372052553', 'joko', '$2y$10$qygKBEcS0klUSxtSge0p1uiEOXVx/JzbmmDd/FVrqXd0RnJQOSDzm', '0', 'superadmin', '2024-08-09 20:48:46', '2024-08-09 20:48:46'),
(6, '2024-08-12 01:41:43', '1655400096', 'kadir', 'baturaja', 'kadir@example.com', '092137421', 'kadir', '$2y$10$o06uNlHyQf8Tq60mkQap6OshWu/KDQe1IDi0A1/dsGpLsegqS76LC', '0', 'superadmin', '2024-08-11 18:41:43', '2024-08-11 18:41:43'),
(7, '2024-08-28 08:06:27', '1655400099', 'jaka', 'palembang', 'jaka@example.com', '1243141', 'jaka', '$2y$10$Ln4vgBabgePVUED.zpX5l.qa/IcfZLpieG2pVoDYCVClsr/6mXbC.', '1', 'superadmin', '2024-08-28 01:06:27', '2024-08-28 01:06:27'),
(8, '2024-09-02 01:37:37', '1655400090', 'John Doe', 'Jl. Merdeka No. 1', 'johndoe@example.com', '081234567890', 'johndoe', '$2y$10$6A/7C8TSI5.0d0es/H2Z1eUlbqtgPTnXspLvut/Q8/2IFqxZnnH2.', '0', 'admin', '2024-09-01 18:37:37', '2024-09-01 18:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `user_disposisi`
--

CREATE TABLE `user_disposisi` (
  `dis_id` int NOT NULL,
  `user_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nm_asli` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_hp` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_disposisi`
--

INSERT INTO `user_disposisi` (`dis_id`, `user_nip`, `user_nm_asli`, `user_nama`, `user_hp`, `user_password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1655400077', 'yusuf mahardika', 'yusuf12', '091264018', '$2y$10$NnNOF.910iM8yG1CYI.MnuwC6LHEGirIwT3M/akjGSXcb77vRzuwa', NULL, '2024-09-13 02:46:43', '2024-09-16 20:54:24'),
(2, '1655400050', 'vino', 'vino', '08923759265', '$2y$10$UTl2Cn6jxloYELmitxnlxeQp3J855HYk6zU1bZpWPetwNSUSJz22K', NULL, '2024-09-16 19:28:16', '2024-09-16 19:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_skpd`
--

CREATE TABLE `user_skpd` (
  `user_id` int NOT NULL,
  `user_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_alamat` text COLLATE utf8mb4_unicode_ci,
  `user_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_usernm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_rule` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `skpd_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_skpd`
--

INSERT INTO `user_skpd` (`user_id`, `user_register`, `user_nip`, `password`, `user_nama`, `user_alamat`, `user_email`, `user_hp`, `user_usernm`, `user_status`, `user_rule`, `skpd_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, '2024-10-18 02:32:49', '1655400092', '$2y$10$WwsUKZCJlZlGP1igcxi8Eec8m5Svbck4CIbhPU2XK9bE.ksRngIaa', 'hafis', 'batukuning', 'hafis@gmail.com', '089237592', 'hafis', '1', '1', '1', '2024-08-04 18:49:47', '2024-10-17 19:32:49', NULL),
(2, '2024-09-05 03:41:47', '1655400070', '$2y$10$eyfiLSH4z83.n/quqdGuWe1TFSs1nAKxl.DfLhnikQOWHIMVc1kD2', 'Jend. Ahmad Yani', 'Baturaja', 'ahmadyani@example.com', '09832558', 'ahmadyani', '1', '1', '2', '2024-09-01 21:44:43', '2024-09-01 21:45:09', NULL),
(23, '2024-09-02 04:36:55', '1655400093', '$2y$10$m.CzRA752cLu.vhDNErZXuevwVaQtOQY7N4pjoAYT1dHqvG9Y75EC', 'fauzi', 'batukuning', 'fauzi@example.com', '0897683624', 'fauzi', '1', '1', '1', '2024-09-01 21:36:55', '2024-09-01 21:36:55', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD PRIMARY KEY (`berita_kat_id`);

--
-- Indexes for table `berita_konten`
--
ALTER TABLE `berita_konten`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indexes for table `blogroll`
--
ALTER TABLE `blogroll`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `checklist_pengadaan`
--
ALTER TABLE `checklist_pengadaan`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `checklist_penolakan`
--
ALTER TABLE `checklist_penolakan`
  ADD PRIMARY KEY (`check_id_p`);

--
-- Indexes for table `data_dokumen_pengadaan`
--
ALTER TABLE `data_dokumen_pengadaan`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indexes for table `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  ADD PRIMARY KEY (`eva_id`);

--
-- Indexes for table `data_interaktif`
--
ALTER TABLE `data_interaktif`
  ADD PRIMARY KEY (`interaktif_id`);

--
-- Indexes for table `data_jenis_kontrak`
--
ALTER TABLE `data_jenis_kontrak`
  ADD PRIMARY KEY (`jenis_k_id`);

--
-- Indexes for table `data_jenis_kontrak_detil`
--
ALTER TABLE `data_jenis_kontrak_detil`
  ADD PRIMARY KEY (`jenis_k_detil_id`);

--
-- Indexes for table `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indexes for table `data_kpa`
--
ALTER TABLE `data_kpa`
  ADD PRIMARY KEY (`kpa_id`);

--
-- Indexes for table `data_pa`
--
ALTER TABLE `data_pa`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indexes for table `data_pengadaan`
--
ALTER TABLE `data_pengadaan`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `data_pengadaan_pembatalan`
--
ALTER TABLE `data_pengadaan_pembatalan`
  ADD PRIMARY KEY (`data_id`);

--
-- Indexes for table `data_pokja`
--
ALTER TABLE `data_pokja`
  ADD PRIMARY KEY (`pokja_id`);

--
-- Indexes for table `data_pokja_kegiatan`
--
ALTER TABLE `data_pokja_kegiatan`
  ADD PRIMARY KEY (`keg_pokja_id`);

--
-- Indexes for table `data_pokja_kegiatan_bahp`
--
ALTER TABLE `data_pokja_kegiatan_bahp`
  ADD PRIMARY KEY (`bahp_id`);

--
-- Indexes for table `data_pokja_kegiatan_dok_pra`
--
ALTER TABLE `data_pokja_kegiatan_dok_pra`
  ADD PRIMARY KEY (`dok_pra_id`);

--
-- Indexes for table `data_pokja_sub`
--
ALTER TABLE `data_pokja_sub`
  ADD PRIMARY KEY (`pokja_id`);

--
-- Indexes for table `data_ppk`
--
ALTER TABLE `data_ppk`
  ADD PRIMARY KEY (`ppk_id`);

--
-- Indexes for table `data_program`
--
ALTER TABLE `data_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `data_sumber_dana`
--
ALTER TABLE `data_sumber_dana`
  ADD PRIMARY KEY (`dana_id`);

--
-- Indexes for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_kontrak`
--
ALTER TABLE `jenis_kontrak`
  ADD PRIMARY KEY (`kontrak_id`);

--
-- Indexes for table `jenis_pengadaan`
--
ALTER TABLE `jenis_pengadaan`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indexes for table `lkpp_data_kegiatan`
--
ALTER TABLE `lkpp_data_kegiatan`
  ADD PRIMARY KEY (`id_data_k`);

--
-- Indexes for table `lkpp_data_kegiatan_sub`
--
ALTER TABLE `lkpp_data_kegiatan_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `lkpp_data_program`
--
ALTER TABLE `lkpp_data_program`
  ADD PRIMARY KEY (`id_data_p`);

--
-- Indexes for table `lkpp_data_satker`
--
ALTER TABLE `lkpp_data_satker`
  ADD PRIMARY KEY (`id_data_set`);

--
-- Indexes for table `lkpp_paket_2020`
--
ALTER TABLE `lkpp_paket_2020`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `lkpp_satker_2020`
--
ALTER TABLE `lkpp_satker_2020`
  ADD PRIMARY KEY (`satker_id`);

--
-- Indexes for table `log_doc_elektronik`
--
ALTER TABLE `log_doc_elektronik`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`monitoring_id`);

--
-- Indexes for table `opd`
--
ALTER TABLE `opd`
  ADD PRIMARY KEY (`id_opd`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `penilaian_poll`
--
ALTER TABLE `penilaian_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indexes for table `pesan_balasan`
--
ALTER TABLE `pesan_balasan`
  ADD PRIMARY KEY (`balasan_id`);

--
-- Indexes for table `pokja`
--
ALTER TABLE `pokja`
  ADD PRIMARY KEY (`id_pokja`),
  ADD UNIQUE KEY `pokja_email_unique` (`email`);

--
-- Indexes for table `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`pol_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indexes for table `skpd_kategori`
--
ALTER TABLE `skpd_kategori`
  ADD PRIMARY KEY (`skpd_kat_id`);

--
-- Indexes for table `skpd_list`
--
ALTER TABLE `skpd_list`
  ADD PRIMARY KEY (`skpd_id`);

--
-- Indexes for table `sub_opd`
--
ALTER TABLE `sub_opd`
  ADD PRIMARY KEY (`id_subopd`);

--
-- Indexes for table `syarat_dokumen`
--
ALTER TABLE `syarat_dokumen`
  ADD PRIMARY KEY (`syarat_id`);

--
-- Indexes for table `users_ulp`
--
ALTER TABLE `users_ulp`
  ADD PRIMARY KEY (`ulp_id`);

--
-- Indexes for table `user_disposisi`
--
ALTER TABLE `user_disposisi`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indexes for table `user_skpd`
--
ALTER TABLE `user_skpd`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_pengadaan`
--
ALTER TABLE `data_pengadaan`
  MODIFY `data_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_sumber_dana`
--
ALTER TABLE `data_sumber_dana`
  MODIFY `dana_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `evaluasi`
--
ALTER TABLE `evaluasi`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=382;

--
-- AUTO_INCREMENT for table `opd`
--
ALTER TABLE `opd`
  MODIFY `id_opd` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pokja`
--
ALTER TABLE `pokja`
  MODIFY `id_pokja` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_opd`
--
ALTER TABLE `sub_opd`
  MODIFY `id_subopd` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `syarat_dokumen`
--
ALTER TABLE `syarat_dokumen`
  MODIFY `syarat_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_ulp`
--
ALTER TABLE `users_ulp`
  MODIFY `ulp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_disposisi`
--
ALTER TABLE `user_disposisi`
  MODIFY `dis_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_skpd`
--
ALTER TABLE `user_skpd`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `evaluasi`
--
ALTER TABLE `evaluasi`
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_skpd` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
