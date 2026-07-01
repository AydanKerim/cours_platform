<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trainer; // Modeli daxil edirik

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainers = [
            [
                'name'     => 'Əhməd Məmmədov',
                'position' => 'Senior Backend Developer',
                'bio'      => '10 ildən çox təcrübəyə malik PHP və Laravel mütəxəssisi.',
                'photo'    => 'trainer1.jpg', // Bura hələlik simvolik ad yazırıq
            ],
            [
                'name'     => 'Aysel Əliyeva',
                'position' => 'UI/UX Designer',
                'bio'      => 'Rəqəmsal məhsulların dizaynı və istifadəçi təcrübəsi üzrə ekspert.',
                'photo'    => 'trainer2.jpg',
            ],
            [
                'name'     => 'Elvin Həsənov',
                'position' => 'Frontend Developer',
                'bio'      => 'React, Vue və müasir JavaScript texnologiyaları üzrə təlimçi.',
                'photo'    => 'trainer3.jpg',
            ]
        ];

        foreach ($trainers as $trainer) {
            Trainer::create($trainer);
        }
    }
}