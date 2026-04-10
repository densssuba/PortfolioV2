<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

Route::get('/', function () {
    return view('index');
});

Route::get('/send-message', function () {
    // Redirects the user back to the homepage, specifically down to the contact form
    return redirect('/#contact'); 
});

Route::post('/send-message', function (Request $request) {
    // 1. Validate the form data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // 2. SAVE TO DATABASE
    Contact::create($validated);

    // 3. Build and send the email
    Mail::raw("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}", function ($mail) use ($request) {
        $mail->to('subadensjoshua@gmail.com')
             ->subject('New Contact from: ' . $request->name)
             ->replyTo($request->email);
    });

    // 4. Redirect back with a success message
    return back()->with('success', 'Thank you! Your message has been saved and sent.');
});