<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)

{
$contactMail = [
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'description' => $request->input('description'),
];

    Mail::to('matteotrotta7@gmail.com')->send(new ContactMail($contactMail));

    return redirect()->back()->with('success', 'Email inviata con successo!');
}


}
