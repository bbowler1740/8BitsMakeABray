<?php

namespace App\Livewire;

use App\Mail\InquirySent;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Rule;
use Livewire\Component;

class ContactForm extends Component
{

    #[Rule('required', message: 'Please provide your preferred name.', onUpdate: false)]
    public string $visitorName = '';
    #[Rule('required|email', message: 'Please provide a valid e-mail address.', onUpdate: false)]
    public string $visitorEmail = '';
    #[Rule('required', message: 'Please provide a message.', onUpdate: false)]
    public string $visitorMessage = '';

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function save()
    {
        if($this->validate()) {
            $this->generateMailable();
            $this->resetForm();
        }
    }

    public function generateMailable() : void
    {
        Mail::to('braybowler1995@gmail.com')
            ->send(new InquirySent($this->visitorName, $this->visitorEmail, $this->visitorMessage));
    }

    public function resetForm() : void
    {
        $this->reset('visitorName', 'visitorEmail', 'visitorMessage');
        $this->visitorName = '';
    }
}
