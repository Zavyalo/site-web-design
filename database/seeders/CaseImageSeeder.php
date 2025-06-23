<?php

namespace Database\Seeders;

use App\Models\CaseImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CaseImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CaseImage::insert(
            [
                [
                    'path_img' => 'content/case1.png',
                    'work_id' => 1,
                    
                ],
                [
                    'path_img' => 'content/case1.png',
                    'work_id' => 1,
                ]
            ]
        );
    }
}
