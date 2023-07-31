<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{
    #[Rule('required|email', message: 'Please provide a valid e-mail address.', onUpdate: false)]
    public $visitorEmail = '';
    #[Rule('required', message: 'Please provide an inquiry message.', onUpdate: false)]
    public $visitorMessage = '';

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function save():void
    {
        if($this->validate()) {
            //TODO: Create an email object based on form data. Send to personal email address.
            $this->resetForm();
        }
    }

    public function resetForm():void
    {
        $this->visitorEmail = '';
        $this->visitorMessage = '';
    }
}
