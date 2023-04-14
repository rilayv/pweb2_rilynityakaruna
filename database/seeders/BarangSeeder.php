<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelayanan')->insert([
            'id_barang' => 'A002',
            'nama' => 'Semir',
            'harga' => '5.000',
            'jumlah' => '10',
        ]);
    }
}
