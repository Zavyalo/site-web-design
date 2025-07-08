<?php

namespace Database\Seeders;

use App\Models\WorkTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkTag::insert(
            [
                [
                    'work_id' => 1,
                    'tag_id' => 1
                ],
                [
                    'work_id' => 1,
                    'tag_id' => 2
                ],
                [
                    'work_id' => 2,
                    'tag_id' => 1
                ],
                [
                    'work_id' => 3,
                    'tag_id' => 1
                ],
                [
                    'work_id' => 3,
                    'tag_id' => 2
                ],
                [
                    'work_id' => 4,
                    'tag_id' => 1
                ],
                [
                    'work_id' => 5,
                    'tag_id' => 1
                ],
                [
                    'work_id' => 5,
                    'tag_id' => 2
                ]
            ]
        );
    }
}
