<?php

namespace App\Http\Livewire\Components;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $naam;
    public $email;
    public $telefoonnummer;
    public $bericht;

    protected $rules = [
        'naam' => 'required|min:6',
        'email' => 'required|email',
        'telefoonnummer' => 'nullable',
        'bericht' => 'required',
    ];

    public function render()
    {
        return view('livewire.components.contact-form');
    }

    public function submit()
    {
        $this->validate();

        $email = $this->email;

        $mailData = [
            'naam' => 'Demo Email',
        ];

//        Mail::to($email)->send(new ContactMail($mailData));

        session()->flash('message', 'Post successfully updated.');
    }
}
