<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Work::insert([
            'name' => 'Работа 1',
            'slug' => Str::slug('Работа 1'),
            'description' => 'описание',
            'path_img' => 'content/case1.png',
            'date'=>'2025-01-01'
        ],
        );
    }
}
