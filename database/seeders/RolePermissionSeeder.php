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
        // Permissions untuk mengelola gudang
        Permission::create(['name' => 'manage everything']);
        
        // Permissions untuk penerimaan barang
        Permission::create(['name' => 'access penerimaan']);
        Permission::create(['name' => 'create penerimaan']);
        Permission::create(['name' => 'edit penerimaan']);
        Permission::create(['name' => 'delete penerimaan']);
        Permission::create(['name' => 'approve penerimaan']);

        // Permissions untuk pengiriman barang
        Permission::create(['name' => 'access pengiriman']);
        Permission::create(['name' => 'create pengiriman']);
        Permission::create(['name' => 'edit pengiriman']);
        Permission::create(['name' => 'delete pengiriman']);
        Permission::create(['name' => 'approve pengiriman']);

        // Permissions untuk laporan
        Permission::create(['name' => 'access laporan penggunaan']);
        Permission::create(['name' => 'generate laporan penggunaan']);
        Permission::create(['name' => 'export laporan penggunaan']);


        Role::create(['name' => 'superuser']);
        Role::create(['name' => 'admin']);

        $roleSuperuser = Role::findByName('superuser');
        $roleSuperuser->givePermissionTo([
            'tambah-user',
            'hapus-user',
            'edit-user',
            'lihat-user',
            'tambah-barang',
            'hapus-barang',
            'edit-barang',
            'lihat-barang',
        ]);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo([
            'tambah-barang',
            'hapus-barang',
            'edit-barang',
            'lihat-barang',
        ]); 

    }
}
