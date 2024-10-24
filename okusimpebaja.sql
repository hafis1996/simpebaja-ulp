-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2024 pada 10.21
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `okusimpebaja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(255) DEFAULT NULL,
  `banner_posisi` enum('top','center','bottom') NOT NULL DEFAULT 'top',
  `banner_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_kategori`
--

CREATE TABLE `berita_kategori` (
  `berita_kat_id` int(11) NOT NULL,
  `berita_kat_nama` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita_konten`
--

CREATE TABLE `berita_konten` (
  `berita_id` int(11) NOT NULL,
  `berita_kat_id` int(11) DEFAULT NULL,
  `berita_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `berita_admin` varchar(200) DEFAULT NULL,
  `berita_judul` varchar(255) DEFAULT NULL,
  `berita_permalink` text DEFAULT NULL,
  `berita_isi` text DEFAULT NULL,
  `berita_gambar` varchar(255) DEFAULT NULL,
  `berita_baca` int(11) DEFAULT NULL,
  `berita_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `blogroll`
--

CREATE TABLE `blogroll` (
  `blog_id` int(11) NOT NULL,
  `blog_name` varchar(100) DEFAULT NULL,
  `blog_link` varchar(100) DEFAULT NULL,
  `blog_status` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checklist_pengadaan`
--

CREATE TABLE `checklist_pengadaan` (
  `check_id` int(11) NOT NULL,
  `pengadaan_id` int(11) DEFAULT NULL,
  `waktu_disposisi` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `asal_disposisi` int(11) DEFAULT NULL,
  `nm_asli_asal` varchar(100) DEFAULT NULL,
  `nip_asal` varchar(100) DEFAULT NULL,
  `jabatan_asal` varchar(100) DEFAULT NULL,
  `penerima_disposisi` varchar(300) DEFAULT NULL,
  `nm_asli_penerima` varchar(100) DEFAULT NULL,
  `nip_penerima` varchar(100) DEFAULT NULL,
  `jabatan_penerima` varchar(100) DEFAULT NULL,
  `waktu_approved` varchar(50) DEFAULT NULL,
  `key_approved` varchar(15) DEFAULT NULL,
  `note_approve` text DEFAULT NULL,
  `progres_approve` enum('Kelengkapan','SP_POKJA','BAHP') NOT NULL DEFAULT 'Kelengkapan',
  `status_persetujuan` enum('0','1','R','E') NOT NULL DEFAULT '0',
  `sts_aproved` enum('0','1','E') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checklist_penolakan`
--

CREATE TABLE `checklist_penolakan` (
  `check_id_p` int(11) NOT NULL,
  `check_id` int(11) DEFAULT NULL,
  `text_penolakan` text DEFAULT NULL,
  `asal_penolakan` int(11) DEFAULT NULL,
  `tujuan_penolakan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokumen_pengadaan`
--

CREATE TABLE `data_dokumen_pengadaan` (
  `dokumen_id` int(11) NOT NULL,
  `dokumen_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dokumen_skpd` varchar(255) DEFAULT NULL,
  `dokumen_admin` varchar(255) DEFAULT NULL,
  `dokumen_kegiatan` int(11) DEFAULT NULL,
  `dokumen_kode` int(11) DEFAULT NULL,
  `dokumen_file` text DEFAULT NULL,
  `dokumen_status` enum('0','1') NOT NULL DEFAULT '1',
  `dokumen_download` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_evaluasi`
--

CREATE TABLE `data_evaluasi` (
  `eva_id` int(11) NOT NULL,
  `eva_skpd` varchar(255) DEFAULT NULL,
  `eva_pengadaan` int(11) DEFAULT NULL,
  `eva_kegiatan` text DEFAULT NULL,
  `eva_teks_evaluasi` text DEFAULT NULL,
  `eva_time_replay` timestamp NULL DEFAULT NULL,
  `eva_status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_interaktif`
--

CREATE TABLE `data_interaktif` (
  `interaktif_id` int(11) NOT NULL,
  `interaktif_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `interaktif_from` varchar(255) DEFAULT NULL,
  `interaktif_form_name` varchar(255) DEFAULT NULL,
  `interaktif_to` varchar(255) DEFAULT NULL,
  `interaktif_title` text DEFAULT NULL,
  `interaktif_messages` text DEFAULT NULL,
  `interaktif_attch` text DEFAULT NULL,
  `interaktif_status_read` enum('0','1') NOT NULL DEFAULT '0',
  `interaktif_status_msg` enum('Active','Delete','Archived') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jenis_kontrak`
--

CREATE TABLE `data_jenis_kontrak` (
  `jenis_k_id` int(11) NOT NULL,
  `jenis_k_nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_jenis_kontrak_detil`
--

CREATE TABLE `data_jenis_kontrak_detil` (
  `jenis_k_detil_id` int(11) NOT NULL,
  `jenis_k_id` int(11) DEFAULT NULL,
  `jenis_k_detil_nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kegiatan`
--

CREATE TABLE `data_kegiatan` (
  `kegiatan_id` int(11) NOT NULL,
  `skpd_id` varchar(255) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `lkpp_id_satker` varchar(50) DEFAULT NULL,
  `lkpp_id_kegiatan` varchar(50) DEFAULT NULL,
  `lkpp_id_program` varchar(50) DEFAULT NULL,
  `lkpp_anggaran` double DEFAULT NULL,
  `lkpp_ta` varchar(50) DEFAULT NULL,
  `kegiatan_kode_rekening` varchar(100) DEFAULT NULL,
  `kegiatan_nama` text DEFAULT NULL,
  `kegiatan_status` enum('0','1') DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kpa`
--

CREATE TABLE `data_kpa` (
  `kpa_id` int(11) NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `kpa_tempat` varchar(100) DEFAULT NULL,
  `kpa_waktu` date DEFAULT NULL,
  `kpa_instansi` varchar(100) DEFAULT NULL,
  `kpa_jabatan` varchar(100) DEFAULT NULL,
  `kpa_nama_kpa` varchar(100) DEFAULT NULL,
  `kpa_nip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pa`
--

CREATE TABLE `data_pa` (
  `pa_id` int(11) NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `pa_instansi` varchar(100) DEFAULT NULL,
  `pa_jabatan` varchar(100) DEFAULT NULL,
  `pa_nama_pa` varchar(100) DEFAULT NULL,
  `pa_nip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengadaan`
--

CREATE TABLE `data_pengadaan` (
  `data_id` int(11) NOT NULL,
  `data_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis_id` int(11) DEFAULT NULL,
  `skpd_id` varchar(200) DEFAULT NULL,
  `data_bulan` int(11) DEFAULT NULL,
  `data_tahun` varchar(5) DEFAULT NULL,
  `data_id_program` int(11) DEFAULT NULL,
  `id_prog_lkpp` varchar(50) DEFAULT NULL,
  `data_id_kegiatan` int(11) DEFAULT NULL,
  `id_kegiatan_lkpp` varchar(50) DEFAULT NULL,
  `sub_kegiatan` text DEFAULT NULL,
  `data_kode_rekening` varchar(100) DEFAULT NULL,
  `pagu_anggaran` double DEFAULT NULL,
  `id_data_objek` varchar(50) DEFAULT NULL,
  `data_sumber_dana` int(11) DEFAULT NULL,
  `data_jenis_kontrak_a` int(11) DEFAULT NULL,
  `data_jenis_kontrak_a_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_b` int(11) DEFAULT NULL,
  `data_jenis_kontrak_b_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_c` int(11) DEFAULT NULL,
  `data_jenis_kontrak_c_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_d` int(11) DEFAULT NULL,
  `data_jenis_kontrak_d_dt` varchar(50) DEFAULT NULL,
  `data_ppk` varchar(300) DEFAULT NULL,
  `data_paket_pekerjaan` text DEFAULT NULL,
  `data_lokasi` text DEFAULT NULL,
  `data_hps` double DEFAULT NULL,
  `data_paket_harga` double DEFAULT NULL,
  `data_jwaktu_pelaksanaan` varchar(50) DEFAULT NULL,
  `data_rpelaksanaan_a` date DEFAULT NULL,
  `data_rpelaksanaan_b` date DEFAULT NULL,
  `data_status_upload_dok` enum('0','1') NOT NULL DEFAULT '0',
  `nama_pemenang` varchar(100) DEFAULT NULL,
  `alamat_pemenang` text DEFAULT NULL,
  `npwp_pemenang` varchar(100) DEFAULT NULL,
  `data_status_kegiatan` enum('Pengajuan','Verifikasi','Evaluasi','E-Lelang','E-X','Pembatalan') NOT NULL DEFAULT 'Pengajuan',
  `data_tanggal_verifikasi` varchar(30) DEFAULT NULL,
  `data_admin_verifikasi` varchar(200) DEFAULT NULL,
  `sts_disposisi` enum('0','1') NOT NULL DEFAULT '0',
  `time_disposisi` varchar(50) DEFAULT NULL,
  `verifikasi_spbbj` enum('N','Y') NOT NULL DEFAULT 'N',
  `time_disp_ver_sppbj` varchar(50) DEFAULT NULL,
  `status_sp_pokja` enum('0','1') NOT NULL DEFAULT '0',
  `sts_verifikasi_pokja` enum('0','1') NOT NULL DEFAULT '0',
  `time_verifikasi_pokja` varchar(40) DEFAULT NULL,
  `sts_disposisi_bahp` enum('0','1') NOT NULL DEFAULT '0',
  `time_disposisi_bahp` varchar(50) DEFAULT NULL,
  `verifikasi_bahp` enum('0','1') NOT NULL DEFAULT '0',
  `verifikasi_bahp_time` varchar(50) DEFAULT NULL,
  `jenis_kontrak` varchar(100) DEFAULT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `tgl_surat` varchar(50) DEFAULT NULL,
  `jml_day` int(11) DEFAULT NULL,
  `jns_tahun` varchar(50) DEFAULT NULL,
  `tgl_evaluasi` varchar(30) DEFAULT NULL,
  `tgl_ex` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_pengadaan`
--

INSERT INTO `data_pengadaan` (`data_id`, `data_posting`, `jenis_id`, `skpd_id`, `data_bulan`, `data_tahun`, `data_id_program`, `id_prog_lkpp`, `data_id_kegiatan`, `id_kegiatan_lkpp`, `sub_kegiatan`, `data_kode_rekening`, `pagu_anggaran`, `id_data_objek`, `data_sumber_dana`, `data_jenis_kontrak_a`, `data_jenis_kontrak_a_dt`, `data_jenis_kontrak_b`, `data_jenis_kontrak_b_dt`, `data_jenis_kontrak_c`, `data_jenis_kontrak_c_dt`, `data_jenis_kontrak_d`, `data_jenis_kontrak_d_dt`, `data_ppk`, `data_paket_pekerjaan`, `data_lokasi`, `data_hps`, `data_paket_harga`, `data_jwaktu_pelaksanaan`, `data_rpelaksanaan_a`, `data_rpelaksanaan_b`, `data_status_upload_dok`, `nama_pemenang`, `alamat_pemenang`, `npwp_pemenang`, `data_status_kegiatan`, `data_tanggal_verifikasi`, `data_admin_verifikasi`, `sts_disposisi`, `time_disposisi`, `verifikasi_spbbj`, `time_disp_ver_sppbj`, `status_sp_pokja`, `sts_verifikasi_pokja`, `time_verifikasi_pokja`, `sts_disposisi_bahp`, `time_disposisi_bahp`, `verifikasi_bahp`, `verifikasi_bahp_time`, `jenis_kontrak`, `no_surat`, `tgl_surat`, `jml_day`, `jns_tahun`, `tgl_evaluasi`, `tgl_ex`, `created_at`, `updated_at`) VALUES
(9, '2024-06-24 07:35:30', 1, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '0', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '2', NULL, NULL, NULL, '-', NULL, NULL, NULL, NULL),
(10, '2024-06-24 07:36:32', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '0', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '---Pilih Jenis Kontrak---', '897900088', NULL, NULL, '-', NULL, NULL, NULL, NULL),
(11, '2024-06-24 07:36:57', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, 'Pengajuan', NULL, NULL, '0', NULL, 'N', NULL, '0', '0', NULL, '0', NULL, '0', NULL, '---Pilih Jenis Kontrak---', '900/172/XVIII/2019', NULL, NULL, '-', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengadaan_pembatalan`
--

CREATE TABLE `data_pengadaan_pembatalan` (
  `data_id` int(11) NOT NULL,
  `data_posting` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis_id` int(11) DEFAULT NULL,
  `skpd_id` varchar(200) DEFAULT NULL,
  `data_bulan` int(11) DEFAULT NULL,
  `data_tahun` varchar(5) DEFAULT NULL,
  `data_id_program` int(11) DEFAULT NULL,
  `id_prog_lkpp` varchar(50) DEFAULT NULL,
  `data_id_kegiatan` int(11) DEFAULT NULL,
  `id_kegiatan_lkpp` varchar(50) DEFAULT NULL,
  `sub_kegiatan` text DEFAULT NULL,
  `data_kode_rekening` varchar(100) DEFAULT NULL,
  `pagu_anggaran` double DEFAULT NULL,
  `id_data_objek` varchar(50) DEFAULT NULL,
  `data_sumber_dana` int(11) DEFAULT NULL,
  `data_jenis_kontrak_a` int(11) DEFAULT NULL,
  `data_jenis_kontrak_a_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_b` int(11) DEFAULT NULL,
  `data_jenis_kontrak_b_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_c` int(11) DEFAULT NULL,
  `data_jenis_kontrak_c_dt` varchar(50) DEFAULT NULL,
  `data_jenis_kontrak_d` int(11) DEFAULT NULL,
  `data_jenis_kontrak_d_dt` varchar(50) DEFAULT NULL,
  `data_ppk` varchar(300) DEFAULT NULL,
  `data_paket_pekerjaan` text DEFAULT NULL,
  `data_lokasi` text DEFAULT NULL,
  `data_hps` double DEFAULT NULL,
  `data_paket_harga` double DEFAULT NULL,
  `data_jwaktu_pelaksanaan` varchar(50) DEFAULT NULL,
  `data_rpelaksanaan_a` date DEFAULT NULL,
  `data_rpelaksanaan_b` date DEFAULT NULL,
  `data_status_upload_dok` enum('0','1') NOT NULL DEFAULT '0',
  `nama_pemenang` varchar(100) DEFAULT NULL,
  `alamat_pemenang` text DEFAULT NULL,
  `npwp_pemenang` varchar(100) DEFAULT NULL,
  `data_status_kegiatan` enum('Pengajuan','Verifikasi','Evaluasi','E-Lelang','E-X','Pembatalan') NOT NULL DEFAULT 'Pengajuan',
  `data_tanggal_verifikasi` varchar(30) DEFAULT NULL,
  `data_admin_verifikasi` varchar(200) DEFAULT NULL,
  `sts_disposisi` enum('0','1') NOT NULL DEFAULT '0',
  `time_disposisi` varchar(50) DEFAULT NULL,
  `verifikasi_spbbj` enum('N','Y') NOT NULL DEFAULT 'N',
  `time_disp_ver_sppbj` varchar(50) DEFAULT NULL,
  `status_sp_pokja` enum('0','1') NOT NULL DEFAULT '0',
  `sts_verifikasi_pokja` enum('0','1') NOT NULL DEFAULT '0',
  `time_verifikasi_pokja` varchar(40) DEFAULT NULL,
  `sts_disposisi_bahp` enum('0','1') NOT NULL DEFAULT '0',
  `time_disposisi_bahp` varchar(50) DEFAULT NULL,
  `verifikasi_bahp` enum('0','1') NOT NULL DEFAULT '0',
  `verifikasi_bahp_time` varchar(50) DEFAULT NULL,
  `jenis_kontrak` varchar(100) DEFAULT NULL,
  `no_surat` varchar(50) DEFAULT NULL,
  `tgl_surat` varchar(50) DEFAULT NULL,
  `jml_day` int(11) DEFAULT NULL,
  `jns_tahun` varchar(50) DEFAULT NULL,
  `tgl_evaluasi` varchar(30) DEFAULT NULL,
  `tgl_ex` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pokja`
--

CREATE TABLE `data_pokja` (
  `pokja_id` int(11) NOT NULL,
  `nama_pokja` varchar(100) DEFAULT NULL,
  `pokja_nip` varchar(50) DEFAULT NULL,
  `pokja_nama` varchar(100) DEFAULT NULL,
  `pokja_jabatan` varchar(100) DEFAULT NULL,
  `pokja_no_sk` varchar(100) DEFAULT NULL,
  `pokja_cp` varchar(20) DEFAULT NULL,
  `pokja_email` varchar(100) DEFAULT NULL,
  `pokja_usernm` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `pokja_status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pokja_kegiatan`
--

CREATE TABLE `data_pokja_kegiatan` (
  `keg_pokja_id` int(11) NOT NULL,
  `keg_pokja_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pokja_id` varchar(255) DEFAULT NULL,
  `pokja_sk` text DEFAULT NULL,
  `keg_pokja_tanggal` date DEFAULT NULL,
  `keg_pokja_keg` int(11) DEFAULT NULL,
  `keg_bahp` text DEFAULT NULL,
  `keg_date_bahp` date DEFAULT NULL,
  `keg_dok_pra` text DEFAULT NULL,
  `keg_date_dok_pra` date DEFAULT NULL,
  `keg_surat_ppenyedia` enum('0','1') NOT NULL DEFAULT '0',
  `keg_time_spl` varchar(50) DEFAULT NULL,
  `bahp_approved` enum('0','1') NOT NULL DEFAULT '0',
  `bahp_time` varchar(50) DEFAULT NULL,
  `keg_set_admin` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pokja_kegiatan_bahp`
--

CREATE TABLE `data_pokja_kegiatan_bahp` (
  `bahp_id` int(11) NOT NULL,
  `bahp_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `bahp_nomor` varchar(50) DEFAULT NULL,
  `bahp_tanggal` varchar(50) DEFAULT NULL,
  `bahp_id_keg` int(11) DEFAULT NULL,
  `bahp_dok` text DEFAULT NULL,
  `bap_admin` varchar(50) DEFAULT NULL,
  `upload_set_disposisi` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pokja_kegiatan_dok_pra`
--

CREATE TABLE `data_pokja_kegiatan_dok_pra` (
  `dok_pra_id` int(11) NOT NULL,
  `dok_pra_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dok_pra_id_keg` int(11) DEFAULT NULL,
  `dok_pra_dok` text DEFAULT NULL,
  `dok_pra_admin` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pokja_sub`
--

CREATE TABLE `data_pokja_sub` (
  `pokja_id` int(11) NOT NULL,
  `pokja_data` varchar(255) DEFAULT NULL,
  `pokja_nip` varchar(50) DEFAULT NULL,
  `pokja_nama` varchar(100) DEFAULT NULL,
  `pokja_jabatan` varchar(100) DEFAULT NULL,
  `pokja_no_sk` varchar(100) DEFAULT NULL,
  `pokja_cp` varchar(20) DEFAULT NULL,
  `pokja_email` varchar(100) DEFAULT NULL,
  `pokja_usernm` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_ppk`
--

CREATE TABLE `data_ppk` (
  `ppk_id` int(11) NOT NULL,
  `skpd_id` varchar(255) DEFAULT NULL,
  `ppk_nip` varchar(50) DEFAULT NULL,
  `ppk_nama` varchar(100) DEFAULT NULL,
  `ppk_jabatan` varchar(100) DEFAULT NULL,
  `ppk_no_sk` varchar(100) DEFAULT NULL,
  `ppk_cp` varchar(20) DEFAULT NULL,
  `ppk_usernm` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_program`
--

CREATE TABLE `data_program` (
  `program_id` int(11) NOT NULL,
  `id_program_lkpp` varchar(100) DEFAULT NULL,
  `program_skpd` varchar(255) DEFAULT NULL,
  `program_kode_rekening` varchar(100) DEFAULT NULL,
  `program_nama` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sumber_dana`
--

CREATE TABLE `data_sumber_dana` (
  `dana_id` int(11) NOT NULL,
  `dana_skpd` varchar(255) DEFAULT NULL,
  `dana_nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_sumber_dana`
--

INSERT INTO `data_sumber_dana` (`dana_id`, `dana_skpd`, `dana_nama`, `created_at`, `updated_at`) VALUES
(1, '1', 'APBD 2025', '2024-05-17 06:00:03', '2024-05-17 06:00:03'),
(4, '3', 'APBNA', NULL, NULL),
(13, '4', 'APBN', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kontrak`
--

CREATE TABLE `jenis_kontrak` (
  `kontrak_id` int(11) NOT NULL,
  `pengadaan_id` int(11) DEFAULT NULL,
  `kontrak_nama` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_kontrak`
--

INSERT INTO `jenis_kontrak` (`kontrak_id`, `pengadaan_id`, `kontrak_nama`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lump sum', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(2, 1, 'Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(3, 1, 'Gabungan Lump sum dan Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(4, 1, 'Terima Jadi (Turnkey)', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(5, 1, 'Kontrak Payung', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(6, 2, 'Lumpsum', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(7, 2, 'Waktu Penugasan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(8, 2, 'Kontrak Payung', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(9, 3, 'Lumsum', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(10, 3, 'Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(11, 3, 'Gabungan Lumsum dan Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(12, 3, 'Terima Jadi (Turnkey)', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(13, 4, 'Lumsum', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(14, 4, 'Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(15, 4, 'Gabungan Lumsum dan Harga Satuan', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(16, 4, 'Terima Jadi (Turnkey)', '2024-06-11 04:39:37', '2024-06-11 04:39:37'),
(17, 4, 'Kontrak Payung', '2024-06-11 04:39:37', '2024-06-11 04:39:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pengadaan`
--

CREATE TABLE `jenis_pengadaan` (
  `jenis_id` int(11) NOT NULL,
  `nama_pengadaan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenis_pengadaan`
--

INSERT INTO `jenis_pengadaan` (`jenis_id`, `nama_pengadaan`, `created_at`, `updated_at`) VALUES
(1, 'Pengadaan Barang', '2024-06-09 23:24:58', '2024-06-09 23:24:58'),
(2, 'Jasa Konsultansi Badan Usaha', '2024-06-09 23:24:58', '2024-06-09 23:24:58'),
(3, 'Pekerjaan Konstruksi', '2024-06-09 23:24:58', '2024-06-09 23:24:58'),
(4, 'Jasa Lainnya', '2024-06-09 23:24:58', '2024-06-09 23:24:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_data_kegiatan`
--

CREATE TABLE `lkpp_data_kegiatan` (
  `id_data_k` int(11) NOT NULL,
  `id_data_lkpp` varchar(100) DEFAULT NULL,
  `id_satket` varchar(100) DEFAULT NULL,
  `id_kegiatan` varchar(100) DEFAULT NULL,
  `id_program` varchar(100) DEFAULT NULL,
  `nama_kegiatan` text DEFAULT NULL,
  `pagu_kegiatan` double DEFAULT NULL,
  `tahun_anggaran` varchar(100) DEFAULT NULL,
  `status_lkpp_keg` enum('true','false') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_data_kegiatan_sub`
--

CREATE TABLE `lkpp_data_kegiatan_sub` (
  `sub_id` int(11) NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `program_id` int(11) DEFAULT NULL,
  `kegiatan_id` int(11) DEFAULT NULL,
  `kode_objek` varchar(50) DEFAULT NULL,
  `uraian_objek` text DEFAULT NULL,
  `pagu_objek` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_data_program`
--

CREATE TABLE `lkpp_data_program` (
  `id_data_p` int(11) NOT NULL,
  `id_data_p_lkpp` varchar(100) DEFAULT NULL,
  `id_program` varchar(100) DEFAULT NULL,
  `tahun_program` varchar(5) DEFAULT NULL,
  `id_satker` varchar(100) DEFAULT NULL,
  `nama_program` text DEFAULT NULL,
  `pagu_program` double DEFAULT NULL,
  `status_lkpp` enum('true','false') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_data_satker`
--

CREATE TABLE `lkpp_data_satker` (
  `id_data_set` int(11) NOT NULL,
  `id_dinas` varchar(30) DEFAULT NULL,
  `id_satker` varchar(50) DEFAULT NULL,
  `nama_dinas` varchar(255) DEFAULT NULL,
  `tahun_aktif` text DEFAULT NULL,
  `status_aktif` enum('0','1') NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_paket_2020`
--

CREATE TABLE `lkpp_paket_2020` (
  `paket_id` int(11) NOT NULL,
  `klpd` varchar(100) NOT NULL,
  `tahunanggaran` varchar(5) NOT NULL,
  `idrup` varchar(50) NOT NULL,
  `namapaket` text NOT NULL,
  `jumlahpagu` double NOT NULL,
  `namasatker` varchar(100) NOT NULL,
  `kodesatker` varchar(100) NOT NULL,
  `metodepengadaan` varchar(50) NOT NULL,
  `idmetodepengadaan` int(11) NOT NULL,
  `jenispengadaan` varchar(100) NOT NULL,
  `idjenispengadaan` int(11) NOT NULL,
  `spesifikasi` text NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `tanggalkebutuhan` varchar(50) NOT NULL,
  `tanggalawalpemilihan` varchar(50) NOT NULL,
  `tanggalakhirpemilihan` varchar(50) NOT NULL,
  `tanggalawalpekerjaan` varchar(50) NOT NULL,
  `tanggalakhirpekerjaan` varchar(50) NOT NULL,
  `statuspradipa` varchar(100) NOT NULL,
  `statuspenyedia` varchar(100) NOT NULL,
  `statustkdn` varchar(100) NOT NULL,
  `statususahakecil` varchar(100) NOT NULL,
  `statusumumkan` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `ppk` varchar(100) NOT NULL,
  `nip_ppk` varchar(100) NOT NULL,
  `tanggalpengumuman` varchar(50) NOT NULL,
  `id_rup_client` varchar(50) NOT NULL,
  `kd_klpd` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `lkpp_satker_2020`
--

CREATE TABLE `lkpp_satker_2020` (
  `satker_id` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `id_kldi` varchar(100) NOT NULL,
  `id_satker` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tahun_aktif` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_doc_elektronik`
--

CREATE TABLE `log_doc_elektronik` (
  `log_id` int(11) NOT NULL,
  `log_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_doc_set` enum('SP_POKJA','BAHP') NOT NULL DEFAULT 'SP_POKJA',
  `log_ip` varchar(50) NOT NULL,
  `log_user` varchar(300) NOT NULL,
  `log_user_set` varchar(100) NOT NULL,
  `log_dokumen` varchar(300) NOT NULL,
  `log_keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_info`
--

CREATE TABLE `log_info` (
  `info_id` int(11) NOT NULL,
  `data_id` int(11) DEFAULT NULL,
  `waktu_progres` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `info_progres` text DEFAULT NULL,
  `admin_progres` varchar(300) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_disposisi', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_05_16_025947_create_user_skpd_table', 2),
(6, '2024_05_17_065429_add_time_to_user_skpd', 3),
(7, '2024_05_17_093511_add_time_to_user_skpd', 4),
(8, '2024_05_17_110849_create_data_sumber_danas_table', 5),
(9, '2024_05_17_110724_create_data_sumber_danas_table', 6),
(17, '2024_05_22_042201_create_data_pengadaans_table', 7),
(19, '2024_05_22_080155_create_data_jenis_kontraks_table', 8),
(20, '2024_05_22_121122_create_data_jenis_kontrak_detils_table', 8),
(21, '2024_05_27_033907_create_jenis_pengadaans_table', 9),
(22, '2024_06_02_235154_add_password_to_user_skpd', 10),
(23, '2024_06_03_235159_create_checklist_pengadaans_table', 11),
(24, '2024_06_04_041637_create_checklist_penolakans_table', 12),
(25, '2024_06_04_045816_create_data_dokumen_pengadaans_table', 13),
(26, '2024_06_04_050821_create_data_evaluasis_table', 14),
(27, '2024_06_04_052450_create_data_interaktifs_table', 15),
(28, '2024_06_04_073634_create_data_kegiatans_table', 16),
(29, '2024_06_04_075424_create_data_kpas_table', 17),
(30, '2024_06_04_080143_create_data_pas_table', 18),
(31, '2024_06_04_080635_create_data_pengadaan_pembatalans_table', 19),
(32, '2024_06_04_081926_create_data_pokjas_table', 20),
(33, '2024_06_04_114300_create_data_pokja_kegiatans_table', 21),
(34, '2024_06_04_115402_create_data_pokja_kegiatan_bahps_table', 22),
(35, '2024_06_04_115843_create_data_pokja_kegiatan_dok_pras_table', 23),
(36, '2024_06_04_121617_create_data_pokja_subs_table', 24),
(37, '2024_06_04_122801_create_data_ppks_table', 25),
(38, '2024_06_04_123313_create_data_programs_table', 26),
(39, '2024_06_04_123947_create_jenis_kontraks_table', 27),
(40, '2024_06_04_124256_create_lkpp_data_kegiatans_table', 28),
(41, '2024_06_04_130126_create_lkpp_data_kegiatan_subs_table', 29),
(42, '2024_06_04_133121_create_lkpp_data_programs_table', 30),
(43, '2024_06_04_133937_create_lkpp_data_satkers_table', 31),
(44, '2024_06_05_033832_create_banners_table', 32),
(45, '2024_06_05_035201_create_berita_kategoris_table', 33),
(46, '2024_06_05_035417_create_berita_kontens_table', 34),
(47, '2024_06_05_040117_create_blogrolls_table', 35),
(48, '2024_06_06_015552_create_lkpp_paket_2020s_table', 36),
(49, '2024_06_06_022025_create_lkpp_satker_2020s_table', 37),
(50, '2024_06_06_022542_create_log_doc_elektroniks_table', 38),
(51, '2024_06_06_023018_create_log_infos_table', 39),
(52, '2024_06_06_023405_create_monitorings_table', 40),
(53, '2024_06_06_024631_create_penilaian_polls_table', 41),
(55, '2024_06_06_025541_create_pesans_table', 42),
(57, '2024_06_06_033045_create_pesan_balasans_table', 43),
(58, '2024_06_06_033934_create_pollings_table', 44),
(59, '2024_06_06_034311_create_profiles_table', 45),
(60, '2024_06_06_040244_create_skpd_kategoris_table', 46),
(61, '2024_06_06_042602_create_skpd_lists_table', 47),
(62, '2024_06_10_062229_add_timestamp_to_jenis_pengadaan_table', 48);

-- --------------------------------------------------------

--
-- Struktur dari tabel `monitoring`
--

CREATE TABLE `monitoring` (
  `monitoring_id` int(11) NOT NULL,
  `skpd_id` varchar(255) DEFAULT NULL,
  `skpd_nama` varchar(100) DEFAULT NULL,
  `tahun_anggaran` varchar(5) DEFAULT NULL,
  `jumlah_pengajuan` int(11) DEFAULT NULL,
  `jumlah_verifikasi` int(11) DEFAULT NULL,
  `jumlah_evaluasi` int(11) DEFAULT NULL,
  `jumlah_e_lelang` int(11) DEFAULT NULL,
  `jumlah_hps` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penilaian_poll`
--

CREATE TABLE `penilaian_poll` (
  `poll_id` int(11) NOT NULL,
  `poll_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `poll_ip` varchar(30) NOT NULL,
  `poll_access` text NOT NULL,
  `poll_nama` varchar(50) NOT NULL,
  `poll_hp` varchar(20) NOT NULL,
  `poll_value` enum('C','B','SB') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `pesan_id` int(11) NOT NULL,
  `pesan_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pesan_nama` varchar(100) NOT NULL,
  `pesan_hp` varchar(30) NOT NULL,
  `pesan_email` varchar(90) NOT NULL,
  `pesan_isi` text NOT NULL,
  `pesan_status` enum('0','1','N') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan_balasan`
--

CREATE TABLE `pesan_balasan` (
  `balasan_id` int(11) NOT NULL,
  `balasan_waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pesan_id` int(11) NOT NULL,
  `balasan_user_id` varchar(300) NOT NULL,
  `balasan_user_nip` varchar(50) NOT NULL,
  `balasan_user_nama` varchar(100) NOT NULL,
  `balasan_isi` text NOT NULL,
  `balasan_status` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `polling`
--

CREATE TABLE `polling` (
  `pol_id` int(11) NOT NULL,
  `pol_post` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pol_tahun` varchar(255) NOT NULL,
  `pol_user_id` varchar(300) NOT NULL,
  `pol_skpd_id` varchar(300) NOT NULL,
  `pol_value` enum('0','1','2') NOT NULL,
  `pol_komen` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `profil_id` int(11) NOT NULL,
  `profil_institusi` varchar(255) DEFAULT NULL,
  `profil_pimpinan` varchar(255) DEFAULT NULL,
  `profil_nip` varchar(100) DEFAULT NULL,
  `profil_alamat` text DEFAULT NULL,
  `profil_si_inisial` varchar(100) DEFAULT NULL,
  `profile_si` varchar(500) DEFAULT NULL,
  `profil_visi` text DEFAULT NULL,
  `profil_misi` text DEFAULT NULL,
  `profil_struktur` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_kategori`
--

CREATE TABLE `skpd_kategori` (
  `skpd_kat_id` int(11) NOT NULL,
  `skpd_kat_name` varchar(50) DEFAULT NULL,
  `skpd_kat_pimpinan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skpd_list`
--

CREATE TABLE `skpd_list` (
  `skpd_id` int(11) NOT NULL,
  `satker_id` varchar(50) DEFAULT NULL,
  `skpd_kat_id` int(11) DEFAULT NULL,
  `skpd_kode` varchar(50) DEFAULT NULL,
  `skpd_nama` varchar(200) DEFAULT NULL,
  `skpd_inisial` varchar(100) DEFAULT NULL,
  `skpd_alamat` text DEFAULT NULL,
  `skpd_telp` varchar(30) DEFAULT NULL,
  `skpd_pimpinan` varchar(100) DEFAULT NULL,
  `skpd_pimpinan_nip` varchar(50) DEFAULT NULL,
  `skpd_pengajuan` int(11) DEFAULT NULL,
  `skpd_verifikasi` int(11) DEFAULT NULL,
  `skpd_e_lelang` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skpd_list`
--

INSERT INTO `skpd_list` (`skpd_id`, `satker_id`, `skpd_kat_id`, `skpd_kode`, `skpd_nama`, `skpd_inisial`, `skpd_alamat`, `skpd_telp`, `skpd_pimpinan`, `skpd_pimpinan_nip`, `skpd_pengajuan`, `skpd_verifikasi`, `skpd_e_lelang`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '12345', 'Dinas Kominfo', 'Kominfo', 'Bakung', '089121', 'Priyatno', '8912121', NULL, NULL, NULL, '2024-06-06 20:19:56', '2024-06-06 20:19:56'),
(2, NULL, NULL, '12345', 'Dinas Pertanian', 'Pertanian', 'Bakung', '089121', 'Samuel', '89121211', NULL, NULL, NULL, '2024-06-06 20:54:21', '2024-06-06 20:54:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_disposisi`
--

CREATE TABLE `user_disposisi` (
  `dis_id` int(11) NOT NULL,
  `user_nip` varchar(50) DEFAULT NULL,
  `user_nm_asli` varchar(100) DEFAULT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_hp` varchar(14) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_skpd`
--

CREATE TABLE `user_skpd` (
  `user_id` int(11) NOT NULL,
  `user_register` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `skpd_id` int(11) DEFAULT NULL,
  `user_nip` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `user_nama` varchar(50) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_hp` varchar(20) DEFAULT NULL,
  `user_usernm` varchar(255) DEFAULT NULL,
  `user_status` enum('0','1') NOT NULL DEFAULT '0',
  `user_rule` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user_skpd`
--

INSERT INTO `user_skpd` (`user_id`, `user_register`, `skpd_id`, `user_nip`, `password`, `user_nama`, `user_alamat`, `user_email`, `user_hp`, `user_usernm`, `user_status`, `user_rule`, `created_at`, `updated_at`) VALUES
(4, '2024-06-24 08:00:22', 1, '12345', '$2y$10$yxvfx4qNOjUXHZ7dw1iTP.ItRXxzcqxDmyyrTEDs0nA3tIaBPBQzm', NULL, NULL, 'randi@gmail.com', NULL, 'Randi', '0', '0', '2024-06-11 04:30:06', '2024-06-11 04:30:06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indeks untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  ADD PRIMARY KEY (`berita_kat_id`);

--
-- Indeks untuk tabel `berita_konten`
--
ALTER TABLE `berita_konten`
  ADD PRIMARY KEY (`berita_id`);

--
-- Indeks untuk tabel `blogroll`
--
ALTER TABLE `blogroll`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indeks untuk tabel `checklist_pengadaan`
--
ALTER TABLE `checklist_pengadaan`
  ADD PRIMARY KEY (`check_id`);

--
-- Indeks untuk tabel `checklist_penolakan`
--
ALTER TABLE `checklist_penolakan`
  ADD PRIMARY KEY (`check_id_p`);

--
-- Indeks untuk tabel `data_dokumen_pengadaan`
--
ALTER TABLE `data_dokumen_pengadaan`
  ADD PRIMARY KEY (`dokumen_id`);

--
-- Indeks untuk tabel `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  ADD PRIMARY KEY (`eva_id`);

--
-- Indeks untuk tabel `data_interaktif`
--
ALTER TABLE `data_interaktif`
  ADD PRIMARY KEY (`interaktif_id`);

--
-- Indeks untuk tabel `data_jenis_kontrak`
--
ALTER TABLE `data_jenis_kontrak`
  ADD PRIMARY KEY (`jenis_k_id`);

--
-- Indeks untuk tabel `data_jenis_kontrak_detil`
--
ALTER TABLE `data_jenis_kontrak_detil`
  ADD PRIMARY KEY (`jenis_k_detil_id`);

--
-- Indeks untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  ADD PRIMARY KEY (`kegiatan_id`);

--
-- Indeks untuk tabel `data_kpa`
--
ALTER TABLE `data_kpa`
  ADD PRIMARY KEY (`kpa_id`);

--
-- Indeks untuk tabel `data_pa`
--
ALTER TABLE `data_pa`
  ADD PRIMARY KEY (`pa_id`);

--
-- Indeks untuk tabel `data_pengadaan`
--
ALTER TABLE `data_pengadaan`
  ADD PRIMARY KEY (`data_id`);

--
-- Indeks untuk tabel `data_pengadaan_pembatalan`
--
ALTER TABLE `data_pengadaan_pembatalan`
  ADD PRIMARY KEY (`data_id`);

--
-- Indeks untuk tabel `data_pokja`
--
ALTER TABLE `data_pokja`
  ADD PRIMARY KEY (`pokja_id`);

--
-- Indeks untuk tabel `data_pokja_kegiatan`
--
ALTER TABLE `data_pokja_kegiatan`
  ADD PRIMARY KEY (`keg_pokja_id`);

--
-- Indeks untuk tabel `data_pokja_kegiatan_bahp`
--
ALTER TABLE `data_pokja_kegiatan_bahp`
  ADD PRIMARY KEY (`bahp_id`);

--
-- Indeks untuk tabel `data_pokja_kegiatan_dok_pra`
--
ALTER TABLE `data_pokja_kegiatan_dok_pra`
  ADD PRIMARY KEY (`dok_pra_id`);

--
-- Indeks untuk tabel `data_pokja_sub`
--
ALTER TABLE `data_pokja_sub`
  ADD PRIMARY KEY (`pokja_id`);

--
-- Indeks untuk tabel `data_ppk`
--
ALTER TABLE `data_ppk`
  ADD PRIMARY KEY (`ppk_id`);

--
-- Indeks untuk tabel `data_program`
--
ALTER TABLE `data_program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indeks untuk tabel `data_sumber_dana`
--
ALTER TABLE `data_sumber_dana`
  ADD PRIMARY KEY (`dana_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jenis_kontrak`
--
ALTER TABLE `jenis_kontrak`
  ADD PRIMARY KEY (`kontrak_id`);

--
-- Indeks untuk tabel `jenis_pengadaan`
--
ALTER TABLE `jenis_pengadaan`
  ADD PRIMARY KEY (`jenis_id`);

--
-- Indeks untuk tabel `lkpp_data_kegiatan`
--
ALTER TABLE `lkpp_data_kegiatan`
  ADD PRIMARY KEY (`id_data_k`);

--
-- Indeks untuk tabel `lkpp_data_kegiatan_sub`
--
ALTER TABLE `lkpp_data_kegiatan_sub`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indeks untuk tabel `lkpp_data_program`
--
ALTER TABLE `lkpp_data_program`
  ADD PRIMARY KEY (`id_data_p`);

--
-- Indeks untuk tabel `lkpp_data_satker`
--
ALTER TABLE `lkpp_data_satker`
  ADD PRIMARY KEY (`id_data_set`);

--
-- Indeks untuk tabel `lkpp_paket_2020`
--
ALTER TABLE `lkpp_paket_2020`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indeks untuk tabel `lkpp_satker_2020`
--
ALTER TABLE `lkpp_satker_2020`
  ADD PRIMARY KEY (`satker_id`);

--
-- Indeks untuk tabel `log_doc_elektronik`
--
ALTER TABLE `log_doc_elektronik`
  ADD PRIMARY KEY (`log_id`);

--
-- Indeks untuk tabel `log_info`
--
ALTER TABLE `log_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`monitoring_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `penilaian_poll`
--
ALTER TABLE `penilaian_poll`
  ADD PRIMARY KEY (`poll_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`pesan_id`);

--
-- Indeks untuk tabel `pesan_balasan`
--
ALTER TABLE `pesan_balasan`
  ADD PRIMARY KEY (`balasan_id`);

--
-- Indeks untuk tabel `polling`
--
ALTER TABLE `polling`
  ADD PRIMARY KEY (`pol_id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profil_id`);

--
-- Indeks untuk tabel `skpd_kategori`
--
ALTER TABLE `skpd_kategori`
  ADD PRIMARY KEY (`skpd_kat_id`);

--
-- Indeks untuk tabel `skpd_list`
--
ALTER TABLE `skpd_list`
  ADD PRIMARY KEY (`skpd_id`);

--
-- Indeks untuk tabel `user_disposisi`
--
ALTER TABLE `user_disposisi`
  ADD PRIMARY KEY (`dis_id`);

--
-- Indeks untuk tabel `user_skpd`
--
ALTER TABLE `user_skpd`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita_kategori`
--
ALTER TABLE `berita_kategori`
  MODIFY `berita_kat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `berita_konten`
--
ALTER TABLE `berita_konten`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `blogroll`
--
ALTER TABLE `blogroll`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `checklist_pengadaan`
--
ALTER TABLE `checklist_pengadaan`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `checklist_penolakan`
--
ALTER TABLE `checklist_penolakan`
  MODIFY `check_id_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_dokumen_pengadaan`
--
ALTER TABLE `data_dokumen_pengadaan`
  MODIFY `dokumen_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_evaluasi`
--
ALTER TABLE `data_evaluasi`
  MODIFY `eva_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_interaktif`
--
ALTER TABLE `data_interaktif`
  MODIFY `interaktif_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_jenis_kontrak`
--
ALTER TABLE `data_jenis_kontrak`
  MODIFY `jenis_k_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_jenis_kontrak_detil`
--
ALTER TABLE `data_jenis_kontrak_detil`
  MODIFY `jenis_k_detil_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kegiatan`
--
ALTER TABLE `data_kegiatan`
  MODIFY `kegiatan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_kpa`
--
ALTER TABLE `data_kpa`
  MODIFY `kpa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pa`
--
ALTER TABLE `data_pa`
  MODIFY `pa_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pengadaan`
--
ALTER TABLE `data_pengadaan`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_pengadaan_pembatalan`
--
ALTER TABLE `data_pengadaan_pembatalan`
  MODIFY `data_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pokja`
--
ALTER TABLE `data_pokja`
  MODIFY `pokja_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pokja_kegiatan`
--
ALTER TABLE `data_pokja_kegiatan`
  MODIFY `keg_pokja_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pokja_kegiatan_dok_pra`
--
ALTER TABLE `data_pokja_kegiatan_dok_pra`
  MODIFY `dok_pra_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pokja_sub`
--
ALTER TABLE `data_pokja_sub`
  MODIFY `pokja_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_ppk`
--
ALTER TABLE `data_ppk`
  MODIFY `ppk_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_program`
--
ALTER TABLE `data_program`
  MODIFY `program_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_sumber_dana`
--
ALTER TABLE `data_sumber_dana`
  MODIFY `dana_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenis_kontrak`
--
ALTER TABLE `jenis_kontrak`
  MODIFY `kontrak_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `jenis_pengadaan`
--
ALTER TABLE `jenis_pengadaan`
  MODIFY `jenis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lkpp_data_kegiatan`
--
ALTER TABLE `lkpp_data_kegiatan`
  MODIFY `id_data_k` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpp_data_kegiatan_sub`
--
ALTER TABLE `lkpp_data_kegiatan_sub`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpp_data_program`
--
ALTER TABLE `lkpp_data_program`
  MODIFY `id_data_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpp_data_satker`
--
ALTER TABLE `lkpp_data_satker`
  MODIFY `id_data_set` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpp_paket_2020`
--
ALTER TABLE `lkpp_paket_2020`
  MODIFY `paket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `lkpp_satker_2020`
--
ALTER TABLE `lkpp_satker_2020`
  MODIFY `satker_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_doc_elektronik`
--
ALTER TABLE `log_doc_elektronik`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `log_info`
--
ALTER TABLE `log_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `monitoring_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penilaian_poll`
--
ALTER TABLE `penilaian_poll`
  MODIFY `poll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `pesan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan_balasan`
--
ALTER TABLE `pesan_balasan`
  MODIFY `balasan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `polling`
--
ALTER TABLE `polling`
  MODIFY `pol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `profil_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `skpd_kategori`
--
ALTER TABLE `skpd_kategori`
  MODIFY `skpd_kat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_disposisi`
--
ALTER TABLE `user_disposisi`
  MODIFY `dis_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user_skpd`
--
ALTER TABLE `user_skpd`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
