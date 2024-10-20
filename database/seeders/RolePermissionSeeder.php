<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'edit-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'lihat-user']);


        Permission::create(['name' => 'tambah-buku']);
        Permission::create(['name' => 'edit-buku']);
        Permission::create(['name' => 'hapus-buku']);
        Permission::create(['name' => 'lihat-buku']);
       

        Permission::create(['name' => 'pinjam-buku']);
        Permission::create(['name' => 'kembalikan-buku']);
        

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin -> givePermissionTo([
            'tambah-user',
            'hapus-user',
            'edit-user',
            'lihat-user',
            'tambah-buku',
            'hapus-buku',
            'edit-buku',
            'lihat-buku',
        ]);

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo([
            'pinjam-buku',
            'kembalikan-buku',
        ]); 

    }
}
