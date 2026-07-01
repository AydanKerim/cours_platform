<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mövcud ilk istifadəçini götürür
        $user = User::first();

        Course::create([
            'user_id' => $user->id,
            'title' => 'Laravel Backend',
            'description' => 'Laravel framework ilə peşəkar backend proqramlaşdırma kursu.',
        ]);

        Course::create([
            'user_id' => $user->id,
            'title' => 'Frontend Development',
            'description' => 'HTML, CSS, Bootstrap və JavaScript kursu.',
        ]);

        Course::create([
            'user_id' => $user->id,
            'title' => 'UI/UX Design',
            'description' => 'Figma və Adobe XD ilə UI/UX dizayn.',
        ]);
    }
}