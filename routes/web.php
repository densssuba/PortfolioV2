<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

Route::get('/', function () {
    return view('index');
});

Route::get('/send-message', function () {
    return redirect('/#contact'); 
});

Route::post('/send-message', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    Contact::create($validated);

    Mail::raw("Name: {$request->name}\nEmail: {$request->email}\n\nMessage:\n{$request->message}", function ($mail) use ($request) {
        $mail->to('subadensjoshua@gmail.com')
             ->subject('New Contact from: ' . $request->name)
             ->replyTo($request->email);
    });
    return back()->with('success', 'Thank you! Your message has been saved and sent.');
});