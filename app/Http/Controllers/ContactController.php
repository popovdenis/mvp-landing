<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'contact_organisation'  => 'required|string|max:255',
            'contact_country'  => 'required|string|max:255',
            'contact_website'  => 'required|string|max:255',
            'contact_email' => 'required|email|max:255',
            'contact_firstname' => 'required|string|max:255',
            'contact_role' => 'required|string|max:255',
            'contact_lastname' => 'required|string|max:255',
            'contact_number_students' => 'required|string|max:255',
        ]);

        $contactForm = new ContactFormMail($validated['name'], $validated['email']);

        Mail::to('denispopov2112@gmail.com')->send($contactForm);

        return back()->with('success', 'Email sent successfully!');
    }
}
