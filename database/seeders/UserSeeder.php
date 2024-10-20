<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('11111111'),
        ]);
        $admin->assignRole('admin');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@localhost.com',
            'password' => bcrypt('11111111'),
        ]);
        $user->assignRole('user');
    }
}
