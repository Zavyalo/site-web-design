<?php

namespace Database\Seeders;

use App\Models\Hashtag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HashtagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hashtag::insert([
            [
                'name' => 'UX/UI',
                'slug' => Str::slug('UX/UI')
            ],
            [
                'name' => 'дизайн',
                'slug' => Str::slug('дизайн')
            ]
        ]);
    }
}
