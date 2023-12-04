<?php
namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {

        function randomDate($start_date, $end_date)
        {
            $min = strtotime($start_date);
            $max = strtotime($end_date);

            $val = rand($min, $max);
            return date('Y-m-d H:i:s', $val);
        }

        for($i = 1; $i < 100; $i++){
            Article::create([
                'title' => 'Title ' . $i,
                'content' => 'Content ' . $i,
                'deadline' => randomDate('2023-12-10', '2024-06-31'),
                'category_id' => random_int(1, 9),
                'user_id' => random_int(1, 11),
                'rating' => random_int(10, 50),
            ]);
        }
    }
}
