<?php

namespace Database\Seeders;

use App\Models\DataSumberDana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataSumberDanaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datasumberdana = [
            [
                'dana_nama' => 'APBD 2024',
            ],
        ];

        foreach ($datasumberdana as $dana)
        {
            DataSumberDana::create($dana);
        }
    }
}
