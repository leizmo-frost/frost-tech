<?php

use App\Mail\Contact;
use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use Illuminate\Support\Facades\Mail;

Route::get('/', Home::class);

Route::get('/send', function(){
    $name = "Frost Tech";

    Mail::to('karanjalermodious123@gmail.com')->send(new Contact($name));
});
