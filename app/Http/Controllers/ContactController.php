<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\Request;

class ContactController
{
    public function index()
    {
        return view('contact');
    }
    public function submit(Request $request)
    {
        $stringRule = 'required|string|max:255';

        $validatedData = $request->validate([
            'inquiry' => $stringRule,
            'name' => $stringRule,
            'number' => 'required|numeric',
            'email' => 'required|email|max:255',
            'message' => $stringRule
        ]);

        // Send email
        Mail::to('humaircontroller@yopmail.com')->send(new ContactFormSubmitted($validatedData));


        // Passing data to the view
        return redirect()->route('contact')->with('success', 'Data has been saved successfully!');
    }
}
