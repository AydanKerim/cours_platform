<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([

            'name' => 'Admin',

            'email' => 'admin@outbox.az',

            'password' => bcrypt('12345678'),

        ]);

        $this->call([

            CourseSeeder::class,
            LessonSeeder::class,
            TrainerSeeder::class,
            GraduateSeeder::class,
            AboutSeeder::class,
            FaqSeeder::class,
            PartnerSeeder::class,
            ArticleSeeder::class,
            ContactSeeder::class,


        ]);
    }
}