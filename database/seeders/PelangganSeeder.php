<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Agung Septian',
                'alamat' => 'Jl. Srikaya 3 No. 4',
                'plat' => 'N 2765 TY',
                'jenis' => 'Cuci Mobil Complit (Luar Dalam)',
                'nomor_telepon' => '085467880921'
            ],
            [
                'nama' => 'Ellen Silmiyana',
                'alamat' => 'Jl. Pahlawan Gg C No. 2',
                'plat' => 'N 4071 ET',
                'jenis' => 'Cuci Mobil Biasa',
                'nomor_telepon' => '085653772010'
            ],
            [
                'nama' => 'Ahmad Syarif',
                'alamat' => 'Jl. Pahlawan',
                'plat' => 'N 5528 WJ',
                'jenis' => 'Cuci Mobil Biasa',
                'nomor_telepon' => '081924420771'
            ],
        ];
        DB::table('pelanggan')->insert($data);
    }
}
