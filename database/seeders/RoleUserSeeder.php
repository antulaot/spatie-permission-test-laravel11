<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleUserSeeder extends Seeder
{
    
    public function run(): void
    {
        $superuser = Role::create(['name' => 'superuser']);

        $kepalaGudang = Role::create(['name' => 'kepala gudang']);

        $adminGudang = Role::create(['name' => 'admin gudang']);
    }
}
