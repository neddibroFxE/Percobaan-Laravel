<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lokasi')->insert([
        	'nama' => 'Rumah Sakit Bersama',
        	'detail' => 'Ini adalah rumah sakit',
        	'alamat' => 'Jalan Putri Kembar',
        	'harga' => 300000
        ]);
        
    }
}
