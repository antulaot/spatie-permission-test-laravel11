<?php

namespace Database\Seeders;

use App\Models\Gudang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GudangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 20; $i++) {
            Gudang::create([
                'nama' => 'Gudang ' . $i,
                'lokasi' => 'Lokasi ' . $i,
            ]);
        }
    }
}
