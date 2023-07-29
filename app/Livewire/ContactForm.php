<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $visitorEmail = '';
    public $visitorMessage = 'Write your message here...';

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function save()
    {

    }
}
