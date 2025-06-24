<?php

namespace Database\Seeders;

use App\Models\ArticleHashtag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleHashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ArticleHashtag::insert(
            [
                [
                    'article_id' => 1,
                    'hashtag_id' => 1
                ],
                [
                    'article_id' => 1,
                    'hashtag_id' => 2
                ]
            ]
        );
    }
}
