<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
    'title',
    'description',
    'photo',
    'duration',
    'weekly_lessons',
    'lesson_hours',
    'user_id'
];

    //Kursun derslerini getiren elaqe (One-to-Many)

    public function lessons(){
        return $this->hasMany(Lesson::class);
    }
}
