<?php

namespace Database\Seeders;

use App\Models\data_ppk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PPKTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ppk = [
            [
                'skpd_id'           => '1',
                'ppk_nip'           => '12345',
                'ppk_nama'          => 'Fitri',
                'ppk_jabatan'       => 'Kabid Aptika',
                'ppk_no_sk'         => '098765',
                'ppk_cp'            => '082218181821',
                'ppk_usernm'        => 'Fitri',
                'password'          => '12345',
                
            ],
        ];
        foreach ($ppk as $Uppk) {
            data_ppk::create($Uppk);
        }
    }
}
