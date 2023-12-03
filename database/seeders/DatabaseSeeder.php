<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call('RoleSeeder');
        $this->call('UserSeeder');
        $this->call('TagsSeeder');
        $this->call('CategorySeeder');
        $this->call('ArticleSeeder');
    }
}
