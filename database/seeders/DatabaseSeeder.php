<?php

namespace Database\Seeders;

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
        OneInput::create(
            [
                'digit' => '4718',
                'kd_kro' => 'BMB',
                'kd_ro' => '1',
                'bidang' => 'Umum',
                'nama_ro' => 'Pembinaan/Edukasi PubliK',
                'capaian_ro' => 'Kegiatan Publikasi',
                'volume_target' => 4,
                'satuan' => 'Kegiatan',
                'volume_jumlah' => 5,
                'rvo' => 125,
                'rvo_maksimal' => 1.2,
                'volume_target_realisasi' => 1,
                'capaian_realisasi' => 120,
                'pagu' => 19000000,
                'rp' => 15969300,
                'capaian' => 84.05,
                'sisa' => 3030700,
            ]
        );

        OneInput::create(
            [
                'digit' => '4718',
                'kd_kro' => 'BMB',
                'kd_ro' => '1',
                'bidang' => 'PPA I',
                'nama_ro' => 'Pembinaan/Edukasi PubliK',
                'capaian_ro' => 'Kegiatan Publikasi',
                'volume_target' => 4,
                'satuan' => 'Kegiatan',
                'volume_jumlah' => 5,
                'rvo' => 125,
                'rvo_maksimal' => 1.2,
                'volume_target_realisasi' => 1,
                'capaian_realisasi' => 120,
                'pagu' => 19000000,
                'rp' => 15969300,
                'capaian' => 84.05,
                'sisa' => 3030700,
            ]
        );

        OneInput::create(
            [
                'digit' => '4718',
                'kd_kro' => 'BMB',
                'kd_ro' => '1',
                'bidang' => 'PPA II',
                'nama_ro' => 'Pembinaan/Edukasi PubliK',
                'capaian_ro' => 'Kegiatan Publikasi',
                'volume_target' => 4,
                'satuan' => 'Kegiatan',
                'volume_jumlah' => 5,
                'rvo' => 125,
                'rvo_maksimal' => 1.2,
                'volume_target_realisasi' => 1,
                'capaian_realisasi' => 120,
                'pagu' => 19000000,
                'rp' => 15969300,
                'capaian' => 84.05,
                'sisa' => 3030700,
            ]
        );

        OneInput::create(
            [
                'digit' => '4718',
                'kd_kro' => 'BMB',
                'kd_ro' => '1',
                'bidang' => 'SKKI',
                'nama_ro' => 'Pembinaan/Edukasi PubliK',
                'capaian_ro' => 'Kegiatan Publikasi',
                'volume_target' => 4,
                'satuan' => 'Kegiatan',
                'volume_jumlah' => 5,
                'rvo' => 125,
                'rvo_maksimal' => 1.2,
                'volume_target_realisasi' => 1,
                'capaian_realisasi' => 120,
                'pagu' => 19000000,
                'rp' => 15969300,
                'capaian' => 84.05,
                'sisa' => 3030700,
            ]
        );

        OneInput::create(
            [
                'digit' => '4718',
                'kd_kro' => 'BMB',
                'kd_ro' => '1',
                'bidang' => 'PAPK',
                'nama_ro' => 'Pembinaan/Edukasi PubliK',
                'capaian_ro' => 'Kegiatan Publikasi',
                'volume_target' => 4,
                'satuan' => 'Kegiatan',
                'volume_jumlah' => 5,
                'rvo' => 125,
                'rvo_maksimal' => 1.2,
                'volume_target_realisasi' => 1,
                'capaian_realisasi' => 120,
                'pagu' => 19000000,
                'rp' => 15969300,
                'capaian' => 84.05,
                'sisa' => 3030700,
            ]
        );

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
    }
}
