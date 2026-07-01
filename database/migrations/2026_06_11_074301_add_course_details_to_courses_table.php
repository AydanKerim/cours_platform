<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('photo')->nullable();
             $table->string('duration')->nullable();
              $table->string('weekly_lessons')->nullable();
               $table->string('lesson_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropColumns([
                'photo',
                'duration',
                'weekly__lessons',
                'lesson_hours'
            ]);
        });
    }
};
