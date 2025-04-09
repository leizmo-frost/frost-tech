<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{
    public $name, $email, $message;

    public function submit()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::send('emails.contact', [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ], function ($mail) {
            $mail->to('your@email.com')
                ->from($this->email, $this->name)
                ->subject('New Contact Message from ' . $this->name);
        });

        session()->flash('success', 'Message sent successfully!');
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
