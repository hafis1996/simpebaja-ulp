<?php

namespace Database\Seeders;

use App\Models\UserSkpd;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSkpdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // public function run(): void
    // {
    //     $userskpd = [
    //         [
    //             // 'user_id'     => '1',
    //             'user_usernm' => 'Tama',
    //             'user_email'  => 'ade@gmail.com',
    //             'user_nip'    => '1234',
    //             'skpd_id'     => '10',
    //             'password'    => hash::make('1234'),
                
    //         ],
    //         [
    //             //  'user_id'     => '2',
    //             'user_usernm' => 'hafis',
    //             'user_email'  => 'ade@gmail.com',
    //             'user_nip'    => '1234',
    //             'skpd_id'     => '1',
    //             'password'    => hash::make('1234'),
                
    //         ],
    //     ];
    //     foreach ($userskpd as $Uskpd) {
    //         UserSkpd::create($Uskpd);
    //     }

    // }

    public function run(): void
    {
        $userskpd = [
            // [
            //     'user_id'     => (string) Str::uuid(),
            //     'user_usernm' => 'Tama',
            //     'user_email'  => 'ade@gmail.com',
            //     'user_nip'    => '1234',
            //     'skpd_id'     => '10',
            //     'user_register' => now(),
            //     'password'    => Hash::make('1234'),
            // ],
            [
                'user_id'     => '1',
                'user_usernm' => 'hafis',
                'user_email'  => 'hafis@gmail.com',
                'user_nip'    => '1655400092',
                'skpd_id'     => '1',
                'user_register' => now(),
                'password'    => Hash::make('1234'),
                // 'password'    => '1234',
            ],
        ];

        foreach ($userskpd as $Uskpd) {
            UserSkpd::create($Uskpd);
        }
    }
}
