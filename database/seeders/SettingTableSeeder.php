<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Toko Kelompok 2',
            'alamat' => 'SMKN 1 KADIPATEN',
            'telepon' => '08123477991',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/Toko.png',
            'path_kartu_member' => '/img/Member.png',
        ]);
    }
}
