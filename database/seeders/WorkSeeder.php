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
            [
                'name' => 'Сайт баскетбольного клуба «Челбаскет»',
                'slug' => Str::slug('Сайт баскетбольного клуба «Челбаскет»'),
                'description' => 'Аналитика и редизайн многостраничного сайта',
                'path_img' => 'content/case1.png',
                'date'=>'2025-01-01'
            ],
            [
                'name' => 'Сайт частного нутрициолога',
                'slug' => Str::slug('Сайт частного нутрициолога'),
                'description' => 'Дизайн лендинга и верстка сайта на Tilda',
                'path_img' => 'content/case2.png',
                'date'=>'2025-01-01'
            ],
            [
                'name' => 'Дизайн админ-панели для CMS системы Burger',
                'slug' => Str::slug('Дизайн админ-панели для CMS системы Burger'),
                'description' => 'Headless CMS — система для управления контентом',
                'path_img' => 'content/case3.png',
                'date'=>'2025-01-01'
            ],
            [
                'name' => 'Интернет-магазин носочной фабкики «Эталон»',
                'slug' => Str::slug('Интернет-магазин носочной фабкики «Эталон»'),
                'description' => 'Сайт для оптовых покупок чулочно-носочной продукции',
                'path_img' => 'content/case4.png',
                'date'=>'2025-01-01'
            ],
            [
                'name' => 'EcoLine — одностраничный сайт экологической инициативы',
                'slug' => Str::slug('EcoLine — одностраничный сайт экологической инициативы'),
                'description' => 'Описание кейса',
                'path_img' => 'content/case5.png',
                'date'=>'2025-01-01'
            ]

        ],
        );
    }
}
