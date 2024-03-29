<?php

namespace Database\Seeders;

use App\Models\Urk;
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
                'nama' => 'Cara Input Data',
                'file' => null
            ]
        );

        Panduan::create(
            [
                'nama' => 'Panduan Pelaksanaan Anggaran',
                'file' => null
            ]
        );

        Panduan::create(
            [
                'nama' => 'RKAKL',
                'file' => null
            ]
        );
        Panduan::create(
            [
                'nama' => 'Usulan Rencana Kerja',
                'file' => null
            ]
        );

        Urk::create(
            [
                'bidang' => 'Umum',
                'file' => null
            ]
        );
        Urk::create(
            [
                'bidang' =>  'PPA I',
                'file' => null
            ]
        );
        Urk::create(
            [
                'bidang' =>  'PPA II',
                'file' => null
            ]
        );
        Urk::create(
            [
                'bidang' =>  'SKKI',
                'file' => null
            ]
        );
        Urk::create(
            [
                'bidang' => 'PAPK',
                'file' => null
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna Admin',
                'username' => 'admin',
                'email' => 'admin@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '30192837561234',
                'nomor_telepon' => '07129038576190',
                'gender' => 'Pria',
                'bidang' => 'Admin',
                'password' => bcrypt('admin'),
            ],
        );
        User::create(
            [
                'nama' => 'Pengguna Umum',
                'username' => 'umum',
                'email' => 'umum@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '19023509126116',
                'nomor_telepon' => '081923468102',
                'gender' => 'Perempuan',
                'bidang' => 'Umum',
                'password' => bcrypt('umum'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PPA I',
                'username' => 'ppai',
                'email' => 'ppai@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '851239010235',
                'nomor_telepon' => '012374667',
                'gender' => 'Pria',
                'bidang' => 'PPA I',
                'password' => bcrypt('ppai'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PPA II',
                'username' => 'ppaii',
                'email' => 'ppaii@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '851239010235',
                'nomor_telepon' => '012374667',
                'gender' => 'Pria',
                'bidang' => 'PPA II',
                'password' => bcrypt('ppaii'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PAPK',
                'username' => 'papk',
                'email' => 'papk@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '420123486923',
                'nomor_telepon' => '0826459113',
                'gender' => 'Pria',
                'bidang' => 'PAPK',
                'password' => bcrypt('papk'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna SKKI',
                'username' => 'skki',
                'email' => 'skki@laporan.real',
                'user_profile' => 'user.png',
                'nip' => '57812312375',
                'nomor_telepon' => '08123466863',
                'gender' => 'Perempuan',
                'bidang' => 'SKKI',
                'password' => bcrypt('skki'),
            ]
        );
    }
}


