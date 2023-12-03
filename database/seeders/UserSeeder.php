<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Kirill',
            'surname' => 'Matusevich',
            'login' => 'admin',
            'password' => 'admin',
            'role_id' => '1',
        ]);

        for($i = 0; $i < 10; $i++){
            User::create([
                'name' => 'username'.($i + 1),
                'surname' => 'user surname'.($i + 1),
                'login' => 'user'.($i + 1),
                'password' => 'user'.($i + 1),
                'role_id' => '2',
            ]);
        }

    }
}
