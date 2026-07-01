<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $partners = Partner::all();

    return view(
        'backend.partners.index',
        compact('partners')
    );
}

    /**
     * Show the form for creating a new resource.
     */
   public function create()
{
    return view('backend.partners.create');
}

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $logoPath = null;

    if ($request->hasFile('logo')) {

        $logoPath = $request->file('logo')
            ->store('partners', 'public');

    }

    Partner::create([
        'name' => $request->name,
        'logo' => $logoPath,
    ]);

    return redirect()
        ->route('admin.partners.index')
        ->with('success', 'Partnyor uğurla əlavə edildi!');
}

    /**
     * Display the specified resource.
     */
   public function show(Partner $partner)
{
    return view(
        'backend.partners.show',
        compact('partner')
    );
}

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Partner $partner)
{
    return view(
        'backend.partners.edit',
        compact('partner')
    );
}

    /**
     * Update the specified resource in storage.
     */
   public function update(Request $request, Partner $partner)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    if ($request->hasFile('logo')) {

        $logoPath = $request->file('logo')
            ->store('partners', 'public');

        $partner->logo = $logoPath;
    }

    $partner->name = $request->name;

    $partner->save();

    return redirect()
        ->route('admin.partners.index')
        ->with('success', 'Partnyor yeniləndi!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(Partner $partner)
{
    $partner->delete();

    return redirect()
        ->route('admin.partners.index')
        ->with('success', 'Partnyor silindi!');
}

public function allPartners()
{
    $partners = Partner::latest()->get();

    return view(
        'frontend.partners',
        compact('partners')
    );
}

public function showFrontend(Partner $partner)
{
    return view(
        'frontend.partner-detail',
        compact('partner')
    );
}
}
