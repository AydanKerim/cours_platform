<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable =[
    'course_id',
    'title',
    'content'
   ]; 
    //'video_url'
    

    //Dərsin aid olduğu kursu gətirən əlaqə (BelongsTo)

   public function course()
{
    return $this->belongsTo(Course::class);
}
}
