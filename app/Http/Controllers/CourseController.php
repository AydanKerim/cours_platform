<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Trainer;
use App\Models\Graduate;
use App\Models\About;
use App\Models\Faq;
use App\Models\Partner;
use App\Models\Article;
use App\Models\Contact;

class CourseController extends Controller
{
    /**
     * Bütün kursların siyahısını göstərən səhifə
     */

   public function home()
{
    $courses = Course::latest()->get();

    $trainers = Trainer::latest()->get();

    $graduates = Graduate::latest()->get();

    $abouts = About::latest()->get();

    $faqs = Faq::latest()->get();

    $partners = Partner::latest()->get();

    $articles = Article::latest()->get();

    $contact = Contact::first();

    return view('home', compact(
        'courses',
        'trainers',
        'graduates',
        'abouts',
        'faqs',
        'partners',
        'articles',
        'contact'
    ));
}

    public function index()
    {
        // Hələlik sistemdə login məcburiyyəti tam oturmayıbsa xəta verməsin deyə bütün kursları çəkirik.
        // Gələcəkdə bunu Course::where('user_id', Auth::id())->get() edə bilərik.
        $courses = Course::all();

        return view('backend.courses.index', compact('courses'));
    }

    /**
     * Yeni kurs yaratmaq üçün form səhifəsi
     */
    public function create()
    {
        return view('backend.courses.create');
    }

    /**
     * Formdan gələn məlumatları verilənlər bazasına qeyd edən funksiya
     */
    public function store(Request $request)
    {
        // Məlumatların doğruluğunu yoxlayırıq
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'duration' => 'nullable|string|max:255',

            'weekly_lessons' => 'nullable|integer',

            'lesson_hours' => 'nullable|integer',
        ]);
        $photoPath = null;

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('courses', 'public');
        }

        // Kursu bazada yaradırıq
        Course::create([
            // 'user_id' => Auth::id() ?? 1, // Giriş edən yoxdursa, default olaraq 1-ci ID-li istifadəçiyə bağlayır
            'user_id' => 1, // Müvəqqəti olaraq birbaşa 1 nömrəli admin ID-sinə bağlayırıq
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoPath,

            'duration' => $request->duration,

            'weekly_lessons' => $request->weekly_lessons,

            'lesson_hours' => $request->lesson_hours,
            //'user_id' => 1, // login söndürdüyün üçün müvəqqəti
        ]);

        // Kurs yaradılandan sonra siyahı səhifəsinə uğurlu mesajla qaytarır
        return redirect()->route('admin.courses.index')->with('success', 'Kurs uğurla yaradıldı!');
    }
    /**
     * Kursu redaktə etmək üçün forma
     */
    public function edit(Course $course)
    {
        return view('backend.courses.edit', compact('course'));
    }

    /**
     * Kursu yenilə
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'duration' => 'nullable|string|max:255',
            'weekly_lessons' => 'nullable',
            'lesson_hours' => 'nullable',
            'photo' => 'nullable|image',
        ]);

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('courses', 'public');

            $course->photo = $photoPath;
        }

        $course->title = $request->title;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->weekly_lessons = $request->weekly_lessons;
        $course->lesson_hours = $request->lesson_hours;

        $course->save();

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Kurs yeniləndi');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()
            ->route('admin.courses.index')
            ->with('success', 'Kurs silindi!');
    }


    public function show(Course $course)
    {
        return view('backend.courses.show', compact('course'));

    }
    public function showFrontend(Course $course)
    {
        $course->load('lessons');
        return view('frontend.course-detail', compact('course'));
    }

    public  function allCourses()
    {
        $courses = Course::paginate(3);
        return view ('frontend.courses', compact('courses'));

    }
}