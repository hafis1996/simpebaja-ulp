<?php

namespace Database\Seeders;

use App\Models\jenis_kontrak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisKontrakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jeniskontrak = [
            [
                'pengadaan_id'  => '1',
                'kontrak_nama'    => 'Lump sum',
            ],
            [
                'pengadaan_id'  => '1',
                'kontrak_nama'    => 'Harga Satuan',
            ],
            [
                'pengadaan_id'  => '1',
                'kontrak_nama'    => 'Gabungan Lump sum dan Harga Satuan',
            ],
            [
                'pengadaan_id'  => '1',
                'kontrak_nama'    => 'Terima Jadi (Turnkey)',
            ],
            [
                'pengadaan_id'  => '1',
                'kontrak_nama'    => 'Kontrak Payung',
            ],
            [
                'pengadaan_id'  => '2',
                'kontrak_nama'    => 'Lumpsum',
            ],
            [
                'pengadaan_id'  => '2',
                'kontrak_nama'    => 'Waktu Penugasan',
            ],
            [
                'pengadaan_id'  => '2',
                'kontrak_nama'    => 'Kontrak Payung',
            ],
            [
                'pengadaan_id'  => '3',
                'kontrak_nama'    => 'Lumsum',
            ],
            [
                'pengadaan_id'  => '3',
                'kontrak_nama'    => 'Harga Satuan',
            ],
            [
                'pengadaan_id'  => '3',
                'kontrak_nama'    => 'Gabungan Lumsum dan Harga Satuan',
            ],
            [
                'pengadaan_id'  => '3',
                'kontrak_nama'    => 'Terima Jadi (Turnkey)',
            ],
            [
                'pengadaan_id'  => '4',
                'kontrak_nama'    => 'Lumsum',
            ],
            [
                'pengadaan_id'  => '4',
                'kontrak_nama'    => 'Harga Satuan',
            ],
            [
                'pengadaan_id'  => '4',
                'kontrak_nama'    => 'Gabungan Lumsum dan Harga Satuan',
            ],
            [
                'pengadaan_id'  => '4',
                'kontrak_nama'    => 'Terima Jadi (Turnkey)',
            ],
            [
                'pengadaan_id'  => '4',
                'kontrak_nama'    => 'Kontrak Payung',
            ],
        ];
        foreach ($jeniskontrak as $Jkontrak) {
            jenis_kontrak::create($Jkontrak);
        }
    }
}
