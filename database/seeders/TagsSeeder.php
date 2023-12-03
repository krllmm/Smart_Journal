<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsSeeder extends Seeder
{
    public function run(): void
    {
        Tag::create(['title' => 'Longread']);
        Tag::create(['title' => 'Science']);
        Tag::create(['title' => 'Innovation']);
        Tag::create(['title' => 'Ideas']);
        Tag::create(['title' => 'Research']);
        Tag::create(['title' => 'News']);
        Tag::create(['title' => 'Awards']);
    }
}
