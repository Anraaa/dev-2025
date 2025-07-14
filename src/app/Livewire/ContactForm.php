<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string|min:10',
    ];

    public function submit()
    {
        $this->validate();

        // save or send data (log or mail)
        // Contact::create([...]) or Mail::to(...)

        session()->flash('success', 'Your message has been sent!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
