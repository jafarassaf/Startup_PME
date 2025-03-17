<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate(Contact::rules());

        $contact = Contact::create($validated);

        // Envoi de l'email
        Mail::to(config('mail.from.address'))->send(new \App\Mail\ContactFormMail($contact));

        return redirect()->route('contact')
            ->with('success', 'Votre message a été envoyé avec succès. Nous vous répondrons dans les plus brefs délais.');
    }
}
