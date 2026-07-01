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
    Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('title'); 
        $table->string('address');
        $table->string('phone'); 
        $table->string('email'); // Emaillərin təkrarlanmaması üçün
        $table->string('working_hours')->nullable(); // Boş buraxıla bilər
        $table->text('map')->nullable(); // İframe kodu uzun ola biləcəyi üçün text və nullable
        $table->timestamps(); 
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
