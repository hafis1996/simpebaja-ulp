<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\SyaratDokumen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SyaratDokumenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('syarat_dokumen')->insert([
        //     [
        //         'syarat_id' => '1',
        //         'jenis_pengadaan' => 'pengadaan barang',
        //         'nama_dokumen' => 'Dokumen Pengadaan Barang',
        //         'keterangan' => 'Keterangan untuk pengadaan barang',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        //     [
        //         'syarat_id' => '2',
        //         'jenis_pengadaan' => 'jasa konsultasi',
        //         'nama_dokumen' => 'Dokumen Jasa Konsultasi',
        //         'keterangan' => 'Keterangan untuk jasa konsultasi',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        //     [
        //         'syarat_id' => '3',
        //         'jenis_pengadaan' => 'pekerjaan konstruksi',
        //         'nama_dokumen' => 'Dokumen Pekerjaan Konstruksi',
        //         'keterangan' => 'Keterangan untuk pekerjaan konstruksi',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        //     [
        //         'syarat_id' => '4',
        //         'jenis_pengadaan' => 'jasa lainnya',
        //         'nama_dokumen' => 'Dokumen Jasa Lainnya',
        //         'keterangan' => 'Keterangan untuk jasa lainnya',
        //         // 'created_at' => now(),
        //         // 'updated_at' => now(),
        //     ],
        // ]);

        SyaratDokumen::create([
            'jenis_pengadaan' => 'pengadaan_barang',
            'nama_dokumen' => 'Contoh Dokumen 1',
            'keterangan' => 'Ini adalah contoh dokumen pertama.',
        ]);

        SyaratDokumen::create([
            'jenis_pengadaan' => 'jasa_konsultasi',
            'nama_dokumen' => 'Contoh Dokumen 2',
            'keterangan' => 'Ini adalah contoh dokumen kedua.',
        ]);

    }
}
