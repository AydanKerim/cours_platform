<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About; // Modeli daxil edirik

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title'       => 'Bizim Tədris Platformamız',
            'description' => 'Platformamız gənclərin rəqəmsal bacarıqlarını inkişaf etdirmək, onlara müasir texnologiyaları, xüsusilə süni intellekt, data analitikası və veb proqramlaşdırma sahələrini dərindən öyrətmək məqsədilə yaradılmışdır. Təcrübəli təlimçilərimiz və praktiki dərslərimizlə tələbələrimizi real iş mühitinə hazırlayırıq.',
        ]);
    }
}