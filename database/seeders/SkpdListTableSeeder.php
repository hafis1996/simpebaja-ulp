<?php

namespace Database\Seeders;

use App\Models\skpd_list;
use App\Models\SkpdList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkpdListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skpdlist = [
            [

                // 'skpd_id' => '1',
                // 'skpd_kode' => '12345',
                // 'skpd_nama' => 'Dinas Kominfo',
                // 'skpd_inisial' => 'Kominfo',
                // 'skpd_alamat' => 'Bakung',
                // 'skpd_telp' => '089121',
                // 'skpd_pimpinan' => 'Priyatno',
                // 'skpd_pimpinan_nip' => '8912121',

                'skpd_id' => '2',
                'skpd_kode' => '12345',
                'skpd_nama' => 'Dinas Pertanian',
                'skpd_inisial' => 'Pertanian',
                'skpd_alamat' => 'Bakung',
                'skpd_telp' => '089121',
                'skpd_pimpinan' => 'Sam',
                'skpd_pimpinan_nip' => '8912121',
                
                
            ],
        ];
        foreach ($skpdlist as $Slist) {
            SkpdList::create($Slist);
        }
    }
}
