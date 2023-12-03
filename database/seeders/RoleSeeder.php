<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::create([
            'role' => 'admin',
            'role_latin' => 'admin'
        ]);
        Role::create([
            'role' => 'user',
            'role_latin' => 'user'
        ]);
    }
}
