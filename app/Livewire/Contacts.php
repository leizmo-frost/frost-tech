<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;

class Contacts extends Component
{
    public $name, $email, $message, $honeypot;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:10',
        'honeypot' => 'present|max:0' // Honeypot spam protection
    ];

    public function submit()
    {
        $this->validate();

        // Send email using Mailable class
        Mail::to('karanjalermodious123@gmail.com')->send(new Contact(
            $this->name,
            $this->email,
            $this->message
        ));

        session()->flash('success', 'Thank you for your message! I will get back to you soon.');

        $this->reset(['name', 'email', 'message', 'honeypot']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
