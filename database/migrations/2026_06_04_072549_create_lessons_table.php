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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            //yeni setirleri elave etdik
            $table->foreignId('course_id')->constrained()->onDelete('cascade'); // Kursla əlaqə
            $table->string('title'); // Dərsin adı
            $table->text('content')->nullable(); // Dərsin konspekti/mətni (boş qala bilər)
            //$table->string('video_url')->nullable(); // Video linki (boş qala bilər)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
