<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\OneInput;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // OneInput::create(
        //     [
        //         'digit' => '4718',
        //         'kd_kro' => 'BMB',
        //         'kd_ro' => '1',
        //         'bidang' => 'Umum',
        //         'nama_ro' => 'Pembinaan/Edukasi PubliK',
        //         'capaian_ro' => 'Kegiatan Publikasi',
        //         'volume_target' => 4,
        //         'satuan' => 'Kegiatan',
        //         'volume_jumlah' => 5,
        //         'rvo' => 125,
        //         'rvo_maksimal' => 1.2,
        //         'volume_target_realisasi' => 1,
        //         'capaian_realisasi' => 120,
        //         'pagu' => 19000000,
        //         'rp' => 15969300,
        //         'capaian' => 84.05,
        //         'sisa' => 3030700,
        //     ]
        // );

        // OneInput::create(
        //     [
        //         'digit' => '4718',
        //         'kd_kro' => 'BMB',
        //         'kd_ro' => '1',
        //         'bidang' => 'PPA I',
        //         'nama_ro' => 'Pembinaan/Edukasi PubliK',
        //         'capaian_ro' => 'Kegiatan Publikasi',
        //         'volume_target' => 4,
        //         'satuan' => 'Kegiatan',
        //         'volume_jumlah' => 5,
        //         'rvo' => 125,
        //         'rvo_maksimal' => 1.2,
        //         'volume_target_realisasi' => 1,
        //         'capaian_realisasi' => 120,
        //         'pagu' => 19000000,
        //         'rp' => 15969300,
        //         'capaian' => 84.05,
        //         'sisa' => 3030700,
        //     ]
        // );

        // OneInput::create(
        //     [
        //         'digit' => '4718',
        //         'kd_kro' => 'BMB',
        //         'kd_ro' => '1',
        //         'bidang' => 'PPA II',
        //         'nama_ro' => 'Pembinaan/Edukasi PubliK',
        //         'capaian_ro' => 'Kegiatan Publikasi',
        //         'volume_target' => 4,
        //         'satuan' => 'Kegiatan',
        //         'volume_jumlah' => 5,
        //         'rvo' => 125,
        //         'rvo_maksimal' => 1.2,
        //         'volume_target_realisasi' => 1,
        //         'capaian_realisasi' => 120,
        //         'pagu' => 19000000,
        //         'rp' => 15969300,
        //         'capaian' => 84.05,
        //         'sisa' => 3030700,
        //     ]
        // );

        // OneInput::create(
        //     [
        //         'digit' => '4718',
        //         'kd_kro' => 'BMB',
        //         'kd_ro' => '1',
        //         'bidang' => 'SKKI',
        //         'nama_ro' => 'Pembinaan/Edukasi PubliK',
        //         'capaian_ro' => 'Kegiatan Publikasi',
        //         'volume_target' => 4,
        //         'satuan' => 'Kegiatan',
        //         'volume_jumlah' => 5,
        //         'rvo' => 125,
        //         'rvo_maksimal' => 1.2,
        //         'volume_target_realisasi' => 1,
        //         'capaian_realisasi' => 120,
        //         'pagu' => 19000000,
        //         'rp' => 15969300,
        //         'capaian' => 84.05,
        //         'sisa' => 3030700,
        //     ]
        // );

        // OneInput::create(
        //     [
        //         'digit' => '4718',
        //         'kd_kro' => 'BMB',
        //         'kd_ro' => '1',
        //         'bidang' => 'PAPK',
        //         'nama_ro' => 'Pembinaan/Edukasi PubliK',
        //         'capaian_ro' => 'Kegiatan Publikasi',
        //         'volume_target' => 4,
        //         'satuan' => 'Kegiatan',
        //         'volume_jumlah' => 5,
        //         'rvo' => 125,
        //         'rvo_maksimal' => 1.2,
        //         'volume_target_realisasi' => 1,
        //         'capaian_realisasi' => 120,
        //         'pagu' => 19000000,
        //         'rp' => 15969300,
        //         'capaian' => 84.05,
        //         'sisa' => 3030700,
        //     ]
        // );

        // OneInput::create(
        //     [
        //         'digit' => ,
        //         'kd_kro' => ,
        //         'kd_ro' => ,
        //         'bidang' => ,
        //         'nama_ro' => ,
        //         'capaian_ro' => ,
        //         'volume_target' => ,
        //         'satuan' => ,
        //         'volume_jumlah' => ,
        //         'rvo' => ,
        //         'rvo_maksimal' => ,
        //         'volume_target_realisasi' => ,
        //         'capaian_realisasi' => ,
        //         'pagu' => ,
        //         'rp' => ,
        //         'capaian' => ,
        //         'sisa' => ,
        //     ]
        // );

        User::create(
            [
                'nama' => 'Pengguna Admin',
                'username' => 'admin',
                'email' => 'admin@laporan.real',
                'user_profile' => 'default',
                'nip' => '30192837561234',
                'nomor_telepon' => '07129038576190',
                'gender' => 'Pria',
                'bidang' => 'Admin',
                'password' => bcrypt('password'),
            ],
        );
        User::create(
            [
                'nama' => 'Pengguna Umum',
                'username' => 'umum',
                'email' => 'umum@laporan.real',
                'user_profile' => 'default',
                'nip' => '19023509126116',
                'nomor_telepon' => '081923468102',
                'gender' => 'Perempuan',
                'bidang' => 'Umum',
                'password' => bcrypt('password'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PPA I',
                'username' => 'ppai',
                'email' => 'ppai@laporan.real',
                'user_profile' => 'default',
                'nip' => '851239010235',
                'nomor_telepon' => '012374667',
                'gender' => 'Pria',
                'bidang' => 'PPA I',
                'password' => bcrypt('password'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PPA II',
                'username' => 'ppaii',
                'email' => 'ppaii@laporan.real',
                'user_profile' => 'default',
                'nip' => '310963357223',
                'nomor_telepon' => '06123496236',
                'gender' => 'Perempuan',
                'bidang' => 'SKKI',
                'password' => bcrypt('password'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna PAPK',
                'username' => 'papk',
                'email' => 'papk@laporan.real',
                'user_profile' => 'default',
                'nip' => '420123486923',
                'nomor_telepon' => '0826459113',
                'gender' => 'Pria',
                'bidang' => 'PAPK',
                'password' => bcrypt('password'),
            ]
        );
        User::create(
            [
                'nama' => 'Pengguna SKKI',
                'username' => 'skki',
                'email' => 'skki@laporan.real',
                'user_profile' => 'default',
                'nip' => '57812312375',
                'nomor_telepon' => '08123466863',
                'gender' => 'Perempuan',
                'bidang' => 'SKKI',
                'password' => bcrypt('password'),
            ]
        );
    }
}
