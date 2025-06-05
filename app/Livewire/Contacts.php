<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact; // Ensure you still have your Mailable class

class Contacts extends Component
{
    // Public properties that will be bound to your form inputs
    public $name;
    public $email;
    public $message;

    // Livewire's validation rules
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    // Properties to store success/error messages
    public $successMessage = '';
    public $errorMessage = '';

    /**
     * Handle the form submission.
     */
    public function submitForm()
    {
        // Validate the form data
        $this->validate();

        // Prepare data for the Mailable
        $formData = [
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ];

        // Send the email
        try {
            Mail::to('karanjalermodious123@gmail.com')->send(new Contact($formData));
            // Replace 'your_recipient_email@example.com' with the Gmail address where you want to receive emails.

            $this->successMessage = 'Your message has been sent successfully!';
            // Clear the form fields after successful submission
            $this->reset(['name', 'email', 'message']);
        } catch (\Exception $e) {
            \Log::error('Email sending failed: ' . $e->getMessage());
            $this->errorMessage = 'There was an error sending your message. Please try again later.';
        }
    }

    /**
     * Render the component's view.
     */
    public function render()
    {
        return view('livewire.contact-from');
    }
}
