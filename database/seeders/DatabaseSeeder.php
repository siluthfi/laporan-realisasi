<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Panduan;
use App\Models\OneInput;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Panduan::create(
            [
                'nama' => 'Input Data',
                'file' => null
            ]);

        Panduan::create(
            [
                'nama' => 'Pelaksanaan Anggaran',
                'file' => null
            ]);

        Panduan::create(
            [
                'nama' => 'Pelaksanaan Anggaran',
                'file' => null
            ]);
    }
}

        // User::create(
        //     [
        //         'nama' => 'Pengguna Admin',
        //         'username' => 'admin',
        //         'email' => 'admin@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '30192837561234',
        //         'nomor_telepon' => '07129038576190',
        //         'gender' => 'Pria',
        //         'bidang' => 'Admin',
        //         'password' => bcrypt('password'),
        //     ],
        // );
        // User::create(
        //     [
        //         'nama' => 'Pengguna Umum',
        //         'username' => 'umum',
        //         'email' => 'umum@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '19023509126116',
        //         'nomor_telepon' => '081923468102',
        //         'gender' => 'Perempuan',
        //         'bidang' => 'Umum',
        //         'password' => bcrypt('password'),
        //     ]
        // );
        // User::create(
        //     [
        //         'nama' => 'Pengguna PPA I',
        //         'username' => 'ppai',
        //         'email' => 'ppai@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '851239010235',
        //         'nomor_telepon' => '012374667',
        //         'gender' => 'Pria',
        //         'bidang' => 'PPA I',
        //         'password' => bcrypt('password'),
        //     ]
        // );
        // User::create(
        //     [
        //         'nama' => 'Pengguna PPA II',
        //         'username' => 'ppaii',
        //         'email' => 'ppaii@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '310963357223',
        //         'nomor_telepon' => '06123496236',
        //         'gender' => 'Perempuan',
        //         'bidang' => 'SKKI',
        //         'password' => bcrypt('password'),
        //     ]
        // );
        // User::create(
        //     [
        //         'nama' => 'Pengguna PAPK',
        //         'username' => 'papk',
        //         'email' => 'papk@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '420123486923',
        //         'nomor_telepon' => '0826459113',
        //         'gender' => 'Pria',
        //         'bidang' => 'PAPK',
        //         'password' => bcrypt('password'),
        //     ]
        // );
        // User::create(
        //     [
        //         'nama' => 'Pengguna SKKI',
        //         'username' => 'skki',
        //         'email' => 'skki@laporan.real',
        //         'user_profile' => 'default',
        //         'nip' => '57812312375',
        //         'nomor_telepon' => '08123466863',
        //         'gender' => 'Perempuan',
        //         'bidang' => 'SKKI',
        //         'password' => bcrypt('password'),
        //     ]
        // );
