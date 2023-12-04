<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['category' => 'Mathematics']);
        Category::create(['category' => 'Engineering']);
        Category::create(['category' => 'Physics']);
        Category::create(['category' => 'Chemistry']);
        Category::create(['category' => 'Medicine']);
        Category::create(['category' => 'Biology']);
        Category::create(['category' => 'Language']);
        Category::create(['category' => 'Economics']);
        Category::create(['category' => 'Programming']);
    }
}
