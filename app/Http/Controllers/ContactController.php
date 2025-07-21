<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Mail\WelcomeEmail;
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

        $contactForm = new ContactFormMail($validated);

        Mail::to(['eugene@grn.one', 'tania.green@outlook.com.au'])->cc('denispopov2112@gmail.com')->send(
            new WelcomeEmail(
                contact_organisation: $validated['contact_organisation'],
                contact_country: $validated['contact_country'],
                contact_website: $validated['contact_website'],
                contact_email: $validated['contact_email'],
                contact_firstname: $validated['contact_firstname'],
                contact_role: $validated['contact_role'],
                contact_lastname: $validated['contact_lastname'],
                contact_number_students: $validated['contact_number_students'],
            )
        );

//        Mail::to('denispopov2112@gmail.com')->send($contactForm);

        return back()->with('success', 'Email sent successfully!');
    }
}
