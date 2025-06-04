<?php

use App\Livewire\Contacts;
use App\Mail\Contact;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;

Route::get('/', Home::class);

Route::post('/contact', [Contacts::class, 'submitForm'])->name('contact.submit');

// Route::get('/send', function(){
//     $name = "Frost Tech";

//     // Mail::to('karanjalermodious123@gmail.com')->send(new Contact($name));
// });
