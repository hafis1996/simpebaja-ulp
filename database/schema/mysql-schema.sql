/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
DROP TABLE IF EXISTS `anggota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anggota` (
  `id_anggota` int unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pokja` int unsigned NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_anggota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banner` (
  `banner_id` int NOT NULL,
  `banner_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_posisi` enum('top','center','bottom') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'top',
  `banner_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `berita_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita_kategori` (
  `berita_kat_id` int NOT NULL,
  `berita_kat_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`berita_kat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `berita_konten`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`berita_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `blogroll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blogroll` (
  `blog_id` int NOT NULL,
  `blog_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_status` enum('Y','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `checklist_pengadaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`check_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `checklist_penolakan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checklist_penolakan` (
  `check_id_p` int NOT NULL,
  `check_id` int DEFAULT NULL,
  `text_penolakan` text COLLATE utf8mb4_unicode_ci,
  `asal_penolakan` int DEFAULT NULL,
  `tujuan_penolakan` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`check_id_p`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_dokumen_pengadaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dokumen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_evaluasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_evaluasi` (
  `eva_id` int NOT NULL,
  `eva_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eva_pengadaan` int DEFAULT NULL,
  `eva_kegiatan` text COLLATE utf8mb4_unicode_ci,
  `eva_teks_evaluasi` text COLLATE utf8mb4_unicode_ci,
  `eva_time_replay` timestamp NULL DEFAULT NULL,
  `eva_status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`eva_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_interaktif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`interaktif_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_jenis_kontrak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_jenis_kontrak` (
  `jenis_k_id` int NOT NULL,
  `jenis_k_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`jenis_k_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_jenis_kontrak_detil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_jenis_kontrak_detil` (
  `jenis_k_detil_id` int NOT NULL,
  `jenis_k_id` int DEFAULT NULL,
  `jenis_k_detil_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`jenis_k_detil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kegiatan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_kpa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kpa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pa` (
  `pa_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `pa_instansi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_jabatan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_nama_pa` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pa_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pa_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pengadaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pengadaan` (
  `data_id` int NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pengadaan_pembatalan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pokja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pokja_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pokja_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`keg_pokja_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pokja_kegiatan_bahp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`bahp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pokja_kegiatan_dok_pra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pokja_kegiatan_dok_pra` (
  `dok_pra_id` int NOT NULL,
  `dok_pra_time` timestamp NOT NULL,
  `dok_pra_id_keg` int DEFAULT NULL,
  `dok_pra_dok` text COLLATE utf8mb4_unicode_ci,
  `dok_pra_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dok_pra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_pokja_sub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pokja_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_ppk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ppk_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_program` (
  `program_id` int NOT NULL,
  `id_program_lkpp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_kode_rekening` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_nama` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`program_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `data_sumber_dana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_sumber_dana` (
  `dana_id` int NOT NULL AUTO_INCREMENT,
  `dana_skpd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dana_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dana_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `evaluasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `evaluasi` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pesan` text NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `tanggapi_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user_skpd` (`user_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jenis_kontrak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_kontrak` (
  `kontrak_id` int NOT NULL,
  `pengadaan_id` int DEFAULT NULL,
  `kontrak_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kontrak_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `jenis_pengadaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_pengadaan` (
  `jenis_id` int NOT NULL,
  `nama_pengadaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`jenis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_data_kegiatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_k`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_data_kegiatan_sub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkpp_data_kegiatan_sub` (
  `sub_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `program_id` int DEFAULT NULL,
  `kegiatan_id` int DEFAULT NULL,
  `kode_objek` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uraian_objek` text COLLATE utf8mb4_unicode_ci,
  `pagu_objek` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_data_program`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_p`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_data_satker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkpp_data_satker` (
  `id_data_set` int NOT NULL,
  `id_dinas` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_satker` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_dinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun_aktif` text COLLATE utf8mb4_unicode_ci,
  `status_aktif` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_data_set`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_paket_2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`paket_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `lkpp_satker_2020`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lkpp_satker_2020` (
  `satker_id` int NOT NULL,
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kldi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_satker` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_aktif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`satker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `log_doc_elektronik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `log_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log_info` (
  `info_id` int NOT NULL,
  `data_id` int DEFAULT NULL,
  `waktu_progres` timestamp NOT NULL,
  `info_progres` text COLLATE utf8mb4_unicode_ci,
  `admin_progres` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_pengadaan_id` int NOT NULL,
  `from_user_id` int unsigned NOT NULL,
  `to_user_id` int unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `monitoring`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`monitoring_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `opd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `opd` (
  `id_opd` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_opd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `penilaian_poll`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `penilaian_poll` (
  `poll_id` int NOT NULL,
  `poll_time` timestamp NOT NULL,
  `poll_ip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_access` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_hp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poll_value` enum('C','B','SB') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`poll_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan` (
  `pesan_id` int NOT NULL,
  `pesan_waktu` timestamp NOT NULL,
  `pesan_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_hp` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_email` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan_status` enum('0','1','N') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pesan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pesan_balasan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`balasan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `pokja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pokja` (
  `id_pokja` int unsigned NOT NULL AUTO_INCREMENT,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pokja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_pokja`),
  UNIQUE KEY `pokja_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `polling`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `polling` (
  `pol_id` int NOT NULL,
  `pol_post` timestamp NOT NULL,
  `pol_tahun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_user_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_skpd_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_value` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL,
  `pol_komen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pol_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`profil_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `skpd_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skpd_kategori` (
  `skpd_kat_id` int NOT NULL,
  `skpd_kat_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skpd_kat_pimpinan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`skpd_kat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `skpd_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`skpd_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `sub_opd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_opd` (
  `id_subopd` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_opd` int NOT NULL,
  `kebutuhan` int NOT NULL,
  `tersedia` int NOT NULL,
  `kurang` int NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `syarat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_subopd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `syarat_dokumen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `syarat_dokumen` (
  `syarat_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `jenis_pengadaan` enum('pengadaan_barang','jasa_konsultasi','pekerjaan_konstruksi','jasa_lainnya') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`syarat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `user_disposisi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_disposisi` (
  `dis_id` int NOT NULL,
  `user_nip` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nm_asli` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_hp` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `user_skpd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_skpd` (
  `user_id` int NOT NULL AUTO_INCREMENT,
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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
DROP TABLE IF EXISTS `users_ulp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_ulp` (
  `ulp_id` int NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ulp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8,'2024_05_17_110849_create_data_sumber_danas_table',5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9,'2024_05_17_110724_create_data_sumber_danas_table',6);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (323,'2024_08_01_060500_create_syarat_dokumen_table',7);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (324,'2014_10_12_000000_create_users_disposisi',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (325,'2014_10_12_100000_create_password_reset_tokens_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (326,'2019_08_19_000000_create_failed_jobs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (327,'2019_12_14_000001_create_personal_access_tokens_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (328,'2024_05_16_025947_create_user_skpd_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (329,'2024_05_17_065429_add_time_to_user_skpd',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (330,'2024_05_17_093511_add_time_to_user_skpd',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (331,'2024_05_22_042201_create_data_pengadaans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (332,'2024_05_22_080155_create_data_jenis_kontraks_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (333,'2024_05_22_121122_create_data_jenis_kontrak_detils_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (334,'2024_05_27_033907_create_jenis_pengadaans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (335,'2024_06_02_235154_add_password_to_user_skpd',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (336,'2024_06_03_235159_create_checklist_pengadaans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (337,'2024_06_04_041637_create_checklist_penolakans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (338,'2024_06_04_045816_create_data_dokumen_pengadaans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (339,'2024_06_04_050821_create_data_evaluasis_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (340,'2024_06_04_052450_create_data_interaktifs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (341,'2024_06_04_073634_create_data_kegiatans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (342,'2024_06_04_075424_create_data_kpas_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (343,'2024_06_04_080143_create_data_pas_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (344,'2024_06_04_080635_create_data_pengadaan_pembatalans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (345,'2024_06_04_081926_create_data_pokjas_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (346,'2024_06_04_114300_create_data_pokja_kegiatans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (347,'2024_06_04_115402_create_data_pokja_kegiatan_bahps_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (348,'2024_06_04_115843_create_data_pokja_kegiatan_dok_pras_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (349,'2024_06_04_121617_create_data_pokja_subs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (350,'2024_06_04_122801_create_data_ppks_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (351,'2024_06_04_123313_create_data_programs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (352,'2024_06_04_123947_create_jenis_kontraks_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (353,'2024_06_04_124256_create_lkpp_data_kegiatans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (354,'2024_06_04_130126_create_lkpp_data_kegiatan_subs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (355,'2024_06_04_133121_create_lkpp_data_programs_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (356,'2024_06_04_133937_create_lkpp_data_satkers_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (357,'2024_06_05_033832_create_banners_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (358,'2024_06_05_035201_create_berita_kategoris_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (359,'2024_06_05_035417_create_berita_kontens_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (360,'2024_06_05_040117_create_blogrolls_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (361,'2024_06_06_015552_create_lkpp_paket_2020s_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (362,'2024_06_06_022025_create_lkpp_satker_2020s_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (363,'2024_06_06_022542_create_log_doc_elektroniks_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (364,'2024_06_06_023018_create_log_infos_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (365,'2024_06_06_023405_create_monitorings_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (366,'2024_06_06_024631_create_penilaian_polls_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (367,'2024_06_06_025541_create_pesans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (368,'2024_06_06_033045_create_pesan_balasans_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (369,'2024_06_06_033934_create_pollings_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (370,'2024_06_06_034311_create_profiles_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (371,'2024_06_06_040244_create_skpd_kategoris_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (372,'2024_06_06_042602_create_skpd_lists_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (373,'2024_06_10_062229_add_timestamp_to_jenis_pengadaan_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (374,'2024_07_29_073140_create_users_simpebaja',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (375,'2024_08_05_013353_create_syarat_dokumen_table',8);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (376,'2024_08_05_023755_create_syarat_dokumen',9);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (377,'2024_08_05_083605_create_pokja_table',10);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (378,'2024_08_05_092348_create_pokja_table2',11);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (379,'2024_08_08_032548_create_anggota_table',12);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (381,'2024_08_13_022103_create_opd_table',13);
