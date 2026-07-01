<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article; // Modeli daxil edirik

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'title'   => 'Laravel ilə Backend Dünyasına Giriş',
                'content' => 'Laravel, PHP dilində veb tətbiqlər hazırlamaq üçün ən məşhur framework-dür. O, proqramçılara MVC strukturu, güclü ORM (Eloquent) və asan marşrutlandırma (Routing) imkanları təqdim edərək işi sürətləndirir.',
            ],
            [
                'title'   => 'Müasir Veb İnkişafında Verilənlər Bazasının Rolu',
                'content' => 'Hər bir dinamik veb saytın arxasında güclü bir verilənlər bazası dayanır. Laravel miqrasiyaları (migrations) vasitəsilə verilənlər bazası strukturunu kod səviyyəsində idarə etmək həm komanda işini asanlaşdırır, həm də təhlükəsizliyi artırır.',
            ],
        ];

        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}