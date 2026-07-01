<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Faq;
use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abouts = About::all();
        return view('backend.abouts.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);


        About::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()
            ->route('admin.abouts.index')
            ->with('success', 'Haqqında uğurla əlavə edildi');
    }


    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        return view('backend.abouts.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('backend.abouts.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' =>'required|string',
        ]);


        $about->title=$request->title;
        $about->description=$request->description;
        $about->save();

        return redirect()
        ->route('admin.abouts.index')
        ->with('success', 'Mətn yeniləndi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()
        ->route('admin.abouts.index')
        ->with('success', 'Mətn silindi');
    }


public function allAbouts()
{
    $abouts = About::latest()->get();

    $faqs = Faq::latest()->get();

    $partners = Partner::latest()->get();

    return view(
        'frontend.about',
        compact('abouts', 'faqs', 'partners')
    );
}

    public function showFrontend(About $about)
    {
        return view('frontend.about-detail', compact('about'));
    }
}
