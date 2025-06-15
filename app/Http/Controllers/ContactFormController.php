<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|min:3|max:255',
            'email' => 'required|email',
            'messaggio' => 'required|min:10',
        ]);

        Mail::to('info@sitiwebromatrottamatteo.com')->send(new ContactMail($validated));

        return back()->with('success', 'Thank you for your message!');
    }
}
