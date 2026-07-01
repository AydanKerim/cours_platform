<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = Course::first();

        Lesson::create([
            'course_id' => $course->id,
            'title' => 'Laravel-ə Giriş',
            'content' => 'Bu dərsdə Laravel framework haqqında ümumi məlumat verilir.',
        ]);

        Lesson::create([
            'course_id' => $course->id,
            'title' => 'Routing',
            'content' => 'Laravel Route sistemi və route tipləri izah olunur.',
        ]);

        Lesson::create([
            'course_id' => $course->id,
            'title' => 'Controllers',
            'content' => 'Controller yaradılması və istifadəsi göstərilir.',
        ]);
    }
}