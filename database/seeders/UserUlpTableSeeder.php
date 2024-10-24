<?php

namespace Database\Seeders;

use App\Models\UserUlp;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserUlpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        UserUlp::create([
            'ulp_nip' => '1655400090',
            'ulp_nama' => 'John Doe',
            'ulp_alamat' => 'Jl. Merdeka No. 1',
            'ulp_email' => 'johndoe@example.com',
            'ulp_hp' => '081234567890',
            'ulp_username' => 'johndoe',
            'ulp_password' => Hash::make('password123'),
            'level' => 'admin', // Sesuaikan dengan level yang ada
        ]);

    }
}
