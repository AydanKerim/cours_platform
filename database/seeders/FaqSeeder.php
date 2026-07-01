<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq; // Modeli daxil edirik

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Kursları bitirdikdə sertifikat verilirmi?',
                'answer'   => 'Bəli, proqramı uğurla başa vuran və yekun layihəni təhvil verən bütün tələbələrə rəsmi sertifikat təqdim olunur.',
            ],
            [
                'question' => 'Dərslər onlayn yoxsa ofis daxilində keçirilir?',
                'answer'   => 'Kurslarımız həm onlayn (hibrid), həm də praktiki laboratoriya dərsləri üçün ofis şəraitində əyani olaraq təşkil edilir.',
            ],
            [
                'question' => 'Kurs müddətində real layihələr işlənilir?',
                'answer'   => 'Bəli, tədris tamamilə praktiki əsaslıdır. Tələbələr kurs boyu fərdi və komanda şəklində real veb layihələr hazırlayırlar.',
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}