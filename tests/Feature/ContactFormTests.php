<?php

use App\Livewire\ContactForm;
use Livewire\Livewire;

test('renders the contact form', function() {
    $this->get('/contact')
        ->assertSeeLivewire(ContactForm::class);
});

test('can set a name', function() {
    Livewire::test(ContactForm::class)
        ->set('visitorName', 'Brayden')
        ->assertSet('visitorName', 'Brayden');
});

test('can set an email', function() {
    Livewire::test(ContactForm::class)
        ->set('visitorEmail', 'braybowler1995@gmail.com')
        ->assertSet('visitorEmail', 'braybowler1995@gmail.com');
});

test('can set a message', function() {
    Livewire::test(ContactForm::class)
        ->set('visitorMessage', 'Test message.')
        ->assertSet('visitorMessage', 'Test message.');
});

test('name field is required', function() {
   Livewire::test(ContactForm::class)->set('visitorName', '')
       ->call('save')
       ->assertHasErrors('visitorName');
});

test('email field is required', function() {
    Livewire::test(ContactForm::class)->set('visitorEmail', '')
        ->call('save')
        ->assertHasErrors('visitorEmail');
});

test('message field is required', function() {
    Livewire::test(ContactForm::class)->set('visitorMessage', '')
        ->call('save')
        ->assertHasErrors('visitorMessage');
});

test('form resets on save', function() {
    Livewire::test(ContactForm::class)
        ->set('visitorName', 'Brayden Bowler')
        ->set('visitorEmail', 'braybowler1995@gmail.com')
        ->set('visitorMessage', 'Test message.')
        ->call('save')
        ->assertViewHas('visitorName', '')
        ->assertViewHas('visitorEmail', '')
        ->assertViewHas('visitorMessage', '');
});
