<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormWebsite;
use App\Models\message;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
      'name' => 'required',
      'email' => 'required',
      'message' => 'required',
    ];

    public function saveMessage()
    {
        $this->validate();
        message::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
//        Mail::to($this->email)->send(new ContactFormWebsite($this->name, $this->email, $this->message));
        $this->name ='';
        $this->email ='';
        $this->message ='';

    }

    public function render()
    {
        return view('livewire.contact-form')->layout('layouts.base');
    }
}
