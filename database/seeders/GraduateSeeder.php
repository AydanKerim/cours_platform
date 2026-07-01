<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Graduate; // Modeli daxil edirik

class GraduateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $graduates = [
            [
                'name'     => 'Əjdər Kərimov',
                'course'   => 'Laravel ilə Backend Proqramlaşdırma',
                'company'  => 'Tech Solutions',
                'position' => 'Backend Developer Intern',
                'photo'    => 'graduate1.jpg',
            ],
            [
                'name'     => 'Leyla Məmmədova',
                'course'   => 'Full-Stack Veb İnkişafı',
                'company'  => 'CyberNet',
                'position' => 'Junior PHP Developer',
                'photo'    => 'graduate2.jpg',
            ],
            [
                'name'     => 'Rəşad Əliyev',
                'course'   => 'Laravel Pro Layihələr',
                'company'  => null, // Hələlik işə başlamayıb
                'position' => null,
                'photo'    => 'graduate3.jpg',
            ]
        ];

        foreach ($graduates as $graduate) {
            Graduate::create($graduate);
        }
    }
}