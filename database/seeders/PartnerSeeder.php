<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner; // Modeli daxil edirik

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partners = [
            [
                'name' => 'Google for Education',
                'logo' => 'google-edu.png',
            ],
            [
                'name' => 'Microsoft Tech Network',
                'logo' => 'microsoft-tech.png',
            ],
            [
                'name' => 'Laragon Global',
                'logo' => 'laragon.png',
            ],
        ];

        foreach ($partners as $partner) {
            Partner::create($partner);
        }
    }
}