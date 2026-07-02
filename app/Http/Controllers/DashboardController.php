<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Trainer;
use App\Models\Graduate;
use App\Models\Partner;
use App\Models\Article;
use App\Models\Faq;

class DashboardController extends Controller
{
    public function index()
    {
        // Modellərdən sayları götürürük
        $coursesCount = Course::count();
        $trainersCount = Trainer::count();
        $graduatesCount = Graduate::count();
        $partnersCount = Partner::count();
        $articlesCount = Article::count();
        $faqsCount = Faq::count();

        // Məlumatları backend/dashboard blade-inizə ötürürük
        return view('backend.dashboard', compact(
            'coursesCount', 
            'trainersCount', 
            'graduatesCount', 
            'partnersCount', 
            'articlesCount', 
            'faqsCount'
        ));
    }
}