<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::insert([
            'name' => 'Веб-дизайн',
            'slug' => Str::slug('Веб-дизайн')            
        ],
        [
            'name' => 'Исследования',
            'slug' => Str::slug('Исследования')            
        ]);
    }
}
