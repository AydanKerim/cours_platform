<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    /**
     * Admin panel - Mesajların siyahısı
     */
    public function index()
    {
        $messages = ContactMessage::latest()->get();

        return view(
            'backend.contact-messages.index',
            compact('messages')
        );
    }

    /**
     * Frontend - Yeni mesaj göndər
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string|max:255',

            'email' => 'required|email|max:255',

            'phone' => 'required|string|max:50',

            'subject' => 'required|string|max:255',

            'message' => 'required|string',

        ]);

        ContactMessage::create([

            'name' => $request->name,

            'email' => $request->email,

            'phone' => $request->phone,

            'subject' => $request->subject,

            'message' => $request->message,

        ]);

        return back()->with(
            'success',
            'Mesajınız uğurla göndərildi.'
        );
    }

    /**
     * Admin - Mesaja bax
     */
    public function show(ContactMessage $contactMessage)
    {
        return view(
            'backend.contact-messages.show',
            compact('contactMessage')
        );
    }

    /**
     * Admin - Mesajı sil
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();

        return redirect()
            ->route('admin.contact-messages.index')
            ->with(
                'success',
                'Mesaj silindi.'
            );
    }
}