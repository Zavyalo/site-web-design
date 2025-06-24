<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::insert(
            [
                [
                    'name' => 'Статья 1',
                    'slug' => Str::slug('Статья 1'),
                    'description' => 'описание',
                    'path_img' => 'content/articles/article1.jpg',
                    'date' => '2025-01-01',
                    'author' => 'Иванов Иван',
                    'path_img_author' => 'content/authors/article1.jpg'
                ],
                [
                    'name' => 'Статья 1',
                    'slug' => Str::slug('Статья 1'),
                    'description' => 'описание',
                    'path_img' => 'content/articles/article1.jpg',
                    'date' => '2025-01-01',
                    'author' => 'Иванов Иван',
                    'path_img_author' => 'content/authors/article1.jpg'
                ]

            ],
        );
    }
}
