<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
   {
        $contacts = Contact::all();

        return view('backend.contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|string|max:255',
            'working_hours' => 'required|string|max:255',
            'map' => 'required|string',
        ]);
          
            Contact::create([

            'title' => $request->title,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'working_hours' => $request-> working_hours,
            'map' => $request -> map
        ]);

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Əlaqə uğurla yaradıldı!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        return view('backend.contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('backend.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
                 $request->validate([
            'title' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|string|max:255',
            'working_hours' => 'required|string|max:255',
            'map' => 'required|string',
        ]);

        $contact->title = $request->title;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->working_hours = $request->working_hours;
        $contact->map = $request->map;

        $contact->save();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Əlaqə uğurla yeniləndi!');
    

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
         $contact->delete();

        return redirect()
            ->route('admin.contacts.index')
            ->with('success', 'Konatkt silindi!');

    }

    public function allContacts()
{
    $contacts = Contact::latest()->get();

    return view(
        'frontend.contact',
        compact('contacts')
    );
}

public function showFrontend(Contact $contact)
{
    return view(
        'frontend.contact-detail',
        compact('contact')
    );
}
}
