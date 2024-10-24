<?php

namespace Database\Seeders;

use App\Models\jenis_pengadaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisPengadaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenispengadaan = [
            [
                'jenis_id' => '1',
                'nama_pengadaan'  => 'Pengadaan Barang',
            ],
            [
                'jenis_id' => '2',
                'nama_pengadaan'  => 'Jasa Konsultansi Badan Usaha',
            ],
            [
                'jenis_id' => '3',
                'nama_pengadaan'  => 'Pekerjaan Konstruksi',
            ],
            [
                'jenis_id' => '4',
                'nama_pengadaan'  => 'Jasa Lainnya',
            ],
        ];
        foreach ($jenispengadaan as $jPengadaan) {
            jenis_pengadaan::create($jPengadaan);
        }
    }
}
