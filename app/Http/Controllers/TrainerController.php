<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainers = Trainer::all();

        return view('backend.trainers.index', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $photoPath = null;

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('trainers', 'public');
        }

        Trainer::create([
            'name' => $request->name,
            'position' => $request->position,
            'bio' => $request->bio,
            'photo' => $photoPath,
        ]);

        return redirect()
            ->route('admin.trainers.index')
            ->with('success', 'Təlimçi uğurla yaradıldı!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Trainer $trainer)
    {

        return view('backend.trainers.show', compact('trainer'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Trainer $trainer)
    {
        return view('backend.trainers.edit', compact('trainer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Trainer $trainer)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'required|string',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);

        if ($request->hasFile('photo')) {

            $photoPath = $request->file('photo')
                ->store('trainers', 'public');

            $trainer->photo = $photoPath;
        }
        $trainer->name = $request->name;
        $trainer->position = $request->position;
        $trainer->bio = $request->bio;
        $trainer->save();

        return redirect()
            ->route('admin.trainers.index')
            ->with('success', 'Təlimçi yeniləndi');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Trainer $trainer)
    {

        $trainer->delete();

        return redirect()
            ->route('admin.trainers.index')
            ->with('success', 'Təlimçi silindi!');

    }

    public function allTrainers()
    {
        $trainers = Trainer::latest()->get();
        return view ('frontend.trainers', compact('trainers'));
    }

    public function showFrontend(Trainer $trainer)
{
    return view('frontend.trainer-detail', compact('trainer'));
}

}