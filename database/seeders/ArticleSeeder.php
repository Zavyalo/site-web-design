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
                    'name' => 'Прототипирование. Интерактивные digital-прототипы',
                    'slug' => Str::slug('Прототипирование. Интерактивные digital-прототипы'),
                    'link' => 'https://m.vk.com/@midisdesign-prototipirovanie-interaktivnye-digital-prototipy?context=author_page_date&ref=author_page',
                    'description' => 'В прошлой статье мы начали рассматривать тему прототипирования и как создавать прототипы из подручных средств. Теперь переходим на уровень сложности повыше и поговорим про прототипы, которые создаются с помощью специальных программ',
                    'path_img' => 'content/vk/panel.jpg',
                    'date' => '2024-03-22',
                    'author' => 'Александра Усынина',
                ],
                [
                    'name' => '«Новые идеи. Мозговой штурм',
                    'slug' => Str::slug('«Новые идеи. Мозговой штурм'),
                    'link' => 'https://m.vk.com/@midisdesign-novye-idei-mozgovoi-shturm?context=author_page_date&ref=author_page',
                    'description' => 'После определения главной, основной боли пользователя возникает вопрос «А как теперь её решить?». Значит пришло время новых идей! А значит и для мозгового штурма',
                    'path_img' => 'content/vk/party.jpg',
                    'date' => '2024-02-02',
                    'author' => 'Александра Усынина',
                ],
                [
                    'name' => 'UX-исследования. Исследование аналогов',
                    'slug' => Str::slug('UX-исследования. Исследование аналогов'),
                    'link' => 'https://m.vk.com/@midisdesign-ux-issledovaniya-issledovanie-analogov?context=author_page_date&ref=author_page',
                    'description' => 'Узнаём нюансы еще одного инструмента UX-исследования — исследования аналогов',
                    'path_img' => 'content/vk/birdplaner.jpg',
                    'date' => '2023-10-27',
                    'author' => 'Александра Усынина',
                ],
                [
                    'name' => 'Типографика как меч, ты должен владеть им в совершенстве',
                    'slug' => Str::slug('Типографика как меч, ты должен владеть им в совершенстве'),
                    'link' => 'https://m.vk.com/@midisdesign-tipografika-kak-mech-ty-dolzhen-vladet-im-v-sovershenstve?context=author_page_date&ref=author_page',
                    'description' => 'Веб-дизайн играет важную роль в создании удобных веб-сайтов. Одним из ключевых аспектов, которые определяют успех дизайна, является типографика. Веб-типографика помогает правильно использовать и сочетать шрифты нужного размера, отступы и других элементы текста для создания читабельного и привлекательного пользовательского опыта.',
                    'path_img' => 'content/vk/sword.jpg',
                    'date' => '2023-10-21',
                    'author' => 'Мидис',
                ],
                [
                    'name' => 'UX-исследования. «Мокасины»',
                    'slug' => Str::slug('UX-исследования. «Мокасины»'),
                    'link' => 'https://m.vk.com/@midisdesign-ux-issledovaniya-mokasiny?context=author_page_date&ref=author_page',
                    'description' => 'Неотъемлемой частью UX-исследований является тесная работа и взаимодействие с пользователем, но иногда стоит встать на место пользователя и прочувствовать весь его опыт или грубо говоря испытать на своей шкуре. Погружаемся в опыт пользователя и проходим весь путь в его «обуви»',
                    'path_img' => 'content/vk/moccasins.jpg',
                    'date' => '2023-10-11',
                    'author' => 'Александра Усынина',
                ],
                [
                    'name' => 'Тестим. HADI-циклы',
                    'slug' => Str::slug('Тестим. HADI-циклы'),
                    'link' => 'https://m.vk.com/@midisdesign-testim-hadi-cikly?context=author_page_date&ref=author_page',
                    'description' => 'После создания прототипов обязательно необходимо провести их тестирование, иначе зачем создавать прототип без обратной связи от пользователя? Но любой прототип содержит в себе гипотезу по решению боли пользователю, которую нужно либо подтвердить, либо опровергнуть. Одним из инструментов проверки гипотезы являются HADI-циклы',
                    'path_img' => 'content/vk/portalsky.jpg',
                    'date' => '2024-11-10',
                    'author' => 'Александра Усынина',
                ]
            ],
        );
    }
}
