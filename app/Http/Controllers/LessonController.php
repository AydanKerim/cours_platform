<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lesson;
use Illuminate\Http\Request;
use App\Models\Course;

class LessonController extends Controller
{
    // Bütün derslerin siyahısını göstərən səhifə -index()

    public function index()
    {         
    // Gələcəkdə bunu Course::where('user_id', Auth::id())->get() edə bilərik.
    $lessons = Lesson::all();
     return view('backend.lessons.index', compact('lessons'));
    }

    //Yeni ders yaratmaq üçün form səhifəsi
    public function create()
    {
         $courses = Course::all();

    return view('backend.lessons.create', compact('courses'));
}
    

    //Formdan gələn məlumatları verilənlər bazasına qeyd edən funksiya

    public function store(Request $request)
    {
    $request->validate([
        'course_id' => 'required|exists:courses,id',
        'title' => 'required|string',
        'content'=>'required|string'
    ]);

        Lesson::create([
    'course_id' => $request->course_id,
    'title' => $request->input('title'),
    'content' => $request->input('content')
    ]);

    
    //yaradilan dersin geridonush mesaji
    return redirect()->route('admin.lessons.index')->with('success', 'Ders uğurla yaradıldı!');
    }

//Kursu redakte etmek üçün forma
public function edit(Lesson $lesson)
{
    $courses = Course::all();
    return view('backend.lessons.edit', 
    compact('lesson','courses'));

}

//Kursu yenilemek uchun 

public function update(Request $request, Lesson $lesson)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'content' => 'required|string'
    ]);

    $lesson->title = $request->input('title');
    $lesson->content = $request->input('content');

    $lesson->save();

    return redirect()
        ->route('admin.lessons.index')
        ->with('success', 'Ders yeniləndi');
}
public function destroy(Lesson $lesson)
    {
        $lesson->delete();

        return redirect()
            ->route('admin.lessons.index')
            ->with('success', 'Ders silindi!');
    }


    public function showFrontend(Lesson $lesson)
    {
        return view('frontend.lesson-detail', compact('lesson'));
    }
}