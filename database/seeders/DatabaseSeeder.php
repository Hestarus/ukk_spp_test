<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Spp;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $users = [
            [
               'nama_petugas'=>'Admin',
               'username' => 'Yoekinon',
               'email'=>'admin@spp.com',
               'password'=> bcrypt('asdfasdf'),
               'type'=>1,
            ],
            [
               'nama_petugas'=>'Manager',
               'username' => 'Yui',
               'email'=>'manager@spp.com',
               'password'=> bcrypt('asdfasdf'),
               'type'=> 2,
            ],
            [
               'nama_petugas'=>'Siswa',
               'email'=>'siswa@spp.com',
               'password'=> bcrypt('asdfadsf'),
               'type'=>0,
            ],
        ];

        $kelas = [
            [
               'nama_kelas' => '10',
               'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
            ],
            [
                'nama_kelas' => '10',
                'kompetensi_keahlian' => 'Design Komunikasi Visual',
             ],
             [
                'nama_kelas' => '10',
                'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan',
             ],
             [
                'nama_kelas' => '10',
                'kompetensi_keahlian' => 'Teknik Kendaraan Ringan',
             ],
             [
                'nama_kelas' => '11',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
             ],
             [
                 'nama_kelas' => '11',
                 'kompetensi_keahlian' => 'Design Komunikasi Visual',
              ],
              [
                 'nama_kelas' => '11',
                 'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan',
              ],
              [
                 'nama_kelas' => '11',
                 'kompetensi_keahlian' => 'Teknik Kendaraan Ringan',
              ],
              [
                'nama_kelas' => '12',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak',
             ],
             [
                 'nama_kelas' => '12',
                 'kompetensi_keahlian' => 'Design Komunikasi Visual',
              ],
              [
                 'nama_kelas' => '12',
                 'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan',
              ],
              [
                 'nama_kelas' => '12',
                 'kompetensi_keahlian' => 'Teknik Kendaraan Ringan',
              ],
            ];

        $spp = [
            [
                'tahun' => 2022,
                'nominal' => 150000,
            ],
            [
                'tahun' => 2022,
                'nominal' => 200000,
            ],
            [
                'tahun' => 2022,
                'nominal' => 250000,
            ],
        ];

        foreach ($spp as $key => $sp){
            Spp::create($sp);
        }

        foreach ($users as $key => $user) {
            User::create($user);
        }

        foreach ($kelas as $key => $kel) {
            Kelas::create($kel);
        }
    }
}
