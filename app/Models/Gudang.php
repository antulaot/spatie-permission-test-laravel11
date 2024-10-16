<?php

namespace App\Models;

use Database\Seeders\RoleUserSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gudang extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
