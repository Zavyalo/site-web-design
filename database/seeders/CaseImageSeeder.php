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
                    'path_img' => 'content/behance/сhelbasket/redisign.jpg',
                    'work_id' => 1,
                    
                ],
                [
                    'path_img' => 'content/behance/сhelbasket/aboutproject.jpg',
                    'work_id' => 1,
                    
                ],
                [
                    'path_img' => 'content/behance/сhelbasket/stageswork.jpg',
                    'work_id' => 1,
                    
                ],
                [
                    'path_img' =>  'content/behance/сhelbasket/corporateidentity.jpg',
                    'work_id' => 1,
                ],
                [
                    'path_img' =>  'content/behance/сhelbasket/uikit.jpg',
                    'work_id' => 1,
                ],
                [
                    'path_img' =>  'content/behance/сhelbasket/player-team.jpg',
                    'work_id' => 1,
                ],
                [
                    'path_img' =>  'content/behance/сhelbasket/teamprogeck.jpg',
                    'work_id' => 1,
                ],
                [
                    'path_img' =>  'content/behance/etalon/1.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/2.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/3.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/4.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/5.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/6.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/7.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/8.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/9.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/10.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/11.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/12.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/13.jpg',
                    'work_id' => 4,
                ],
                [
                    'path_img' =>  'content/behance/etalon/MacBook13.jpg',
                    'work_id' => 4,
                ],
            ]
        );
    }
}
