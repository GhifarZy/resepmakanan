<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class katagoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('katagoris')->insert([
            'katagori' => 'makanan utama',
            'keterangan' => 'hidangnan utama',
        ]);
    }
}
