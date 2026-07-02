<?php

use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\GraduateController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// HOME
Route::get('/', [CourseController::class, 'home']);

// AUTH PROFILE
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ADMIN
Route::prefix('admin')
->middleware('auth')
->name('admin.')
->group(function () {

   Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('courses', CourseController::class);

    Route::resource('lessons', LessonController::class);

    Route::resource('trainers', TrainerController::class);

    Route::resource('graduates', GraduateController::class);

    Route::resource('abouts', AboutController::class);

    Route::resource('faqs', FaqController::class);

    Route::resource('partners', PartnerController::class);

    Route::resource('articles', ArticleController::class);

    Route::resource('contacts', ContactController::class);

    Route::resource('contact-messages',ContactMessageController::class)
    ->only([
    'index',
    'show',
    'destroy'
]);


});

// FRONTEND COURSES
Route::get('/course/{course}', [CourseController::class, 'showFrontend'])
    ->name('frontend.course.show');

Route::get('/all-courses', [CourseController::class, 'allCourses'])
    ->name('frontend.courses.index');

// Trainers hissesi 
Route::get('/trainer/{trainer}', [TrainerController::class, 'showFrontend'])
    ->name('frontend.trainer.show');

Route::get('/all-trainers', [TrainerController::class, 'allTrainers'])
    ->name('frontend.trainers.index');


//Mezunlar hissesi 

Route::get('/graduate/{graduate}', [GraduateController::class, 'showFrontend'])
    ->name('frontend.graduate.show');

Route::get('/all-graduates', [GraduateController::class, 'allGraduates'])
    ->name('frontend.graduates.index');

//Abouts hissesi ucun 

Route::get('/about/{about}', [AboutController::class, 'showFrontend'])
    ->name('frontend.about.show');

Route::get('/all-abouts', [AboutController::class, 'allAbouts'])
    ->name('frontend.abouts.index');

//FAQ hissesi 
Route::get('/faq/{faq}', [FaqController::class, 'showFrontend'])
    ->name('frontend.faq.show');

Route::get('/all-faqs', [FaqController::class, 'allFaqs'])
    ->name('frontend.faqs.index');

//Partner hissesi 

// Partners

Route::get('/partner/{partner}', [PartnerController::class, 'showFrontend'])
    ->name('frontend.partner.show');

Route::get('/all-partners', [PartnerController::class, 'allPartners'])
    ->name('frontend.partners.index');

    // Articles

Route::get('/articles',[ArticleController::class, 'allArticles'])
->name('frontend.articles.index');

Route::get('/article/{article}',[ArticleController::class, 'showFrontend'])
->name('frontend.article.show');

// Contact hissesi 

Route::get('/contacts',[ContactController::class, 'allContacts'])
->name('frontend.contacts.index');

Route::get('/contact/{contact}',[ContactController::class, 'showFrontend'])
->name('frontend.contact.show');

//ContactMessage

Route::post('/contact-message',[ContactMessageController::class, 'store'])
->name('frontend.contact.message.store');



// LESSONS


Route::get('/lesson/{lesson}', [LessonController::class, 'showFrontend'])
    ->name('frontend.lesson.show');

//Route::get('/all-lessons', [LessonController::class, 'allLessons'])
//->name('frontend.lessons');

//auth.php faylini web.php`e qoshmaq

require __DIR__ . '/auth.php';