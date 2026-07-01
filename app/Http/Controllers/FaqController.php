<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $faqs = Faq::all();

    return view('backend.faqs.index', compact('faqs'));
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('backend.faqs.create');
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([

        'question' => 'required|string|max:255',

        'answer' => 'required|string',

    ]);

    Faq::create([

        'question' => $request->question,

        'answer' => $request->answer,

    ]);

    return redirect()
        ->route('admin.faqs.index')
        ->with('success', 'Sual uğurla əlavə edildi!');
}

    /**
     * Display the specified resource.
     */
   public function show(Faq $faq)
{
    return view('backend.faqs.show', compact('faq'));
}

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Faq $faq)
{
    return view('backend.faqs.edit', compact('faq'));
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Faq $faq)
{
    $request->validate([

        'question' => 'required|string|max:255',

        'answer' => 'required|string',

    ]);

    $faq->question = $request->question;

    $faq->answer = $request->answer;

    $faq->save();

    return redirect()
        ->route('admin.faqs.index')
        ->with('success', 'Sual yeniləndi!');
}

    /**
     * Remove the specified resource from storage.
     */
  public function destroy(Faq $faq)
{
    $faq->delete();

    return redirect()
        ->route('admin.faqs.index')
        ->with('success', 'Sual silindi!');
}

public function allFaqs()
{
    $faqs = Faq::latest()->get();

    return view('frontend.faqs', compact('faqs'));
}

public function showFrontend(Faq $faq)
{
    return view('frontend.faq-detail', compact('faq'));
}
}
