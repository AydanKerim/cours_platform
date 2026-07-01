<?php

namespace App\Http\Controllers;

use App\Models\Graduate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $graduates = Graduate::all();

        return view('backend.graduates.index', compact('graduates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.graduates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'company' => 'required|string',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('graduates', 'public');
        }

        Graduate::create([
            'name' => $request->name,
            'course' => $request->course,
            'company' => $request->company,
            'position' => $request->position,
            'photo' => $photoPath,
        ]);

        return redirect()
            ->route('admin.graduates.index')
            ->with('success', 'Məzun uğurla yaradıldı!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Graduate $graduate)
   {

        return view('backend.graduates.show', compact('graduate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Graduate $graduate)
     {
        return view('backend.graduates.edit', compact('graduate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Graduate $graduate)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'company' => 'nullable|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('graduates', 'public');

            $graduate->photo = $photoPath;
        }
        $graduate->name = $request->name;
        $graduate->course = $request->course;
        $graduate->company = $request->company;
        $graduate->position = $request->position;
        $graduate->save();

        return redirect()
            ->route('admin.graduates.index')
            ->with('success', 'Məzun yeniləndi');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graduate $graduate)
    {

        $graduate->delete();

        return redirect()
            ->route('admin.graduates.index')
            ->with('success', 'Məzun silindi!');

    }

     public function allGraduates()
    {
        $graduates = Graduate::latest()->get();
        return view ('frontend.graduates', compact('graduates'));
    }

    public function showFrontend(Graduate $graduate)
{
    return view('frontend.graduate-detail', compact('graduate'));
}
}
