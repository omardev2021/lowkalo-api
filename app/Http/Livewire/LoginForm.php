<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginForm extends Component
{


    public $email;
    public $password;

    public $successMessage;
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',

    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $contact = $this->validate();

        // $contact['name'] = $this->name;
        // $contact['email'] = $this->email;
        // $contact['phone'] = $this->phone;
        // $contact['message'] = $this->message;

        sleep(1);

        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
        // session()->flash('success_message', 'We received your message successfully and will get back to you shortly!');

        $this->resetForm();
    }

    private function resetForm()
    {

        $this->email = '';
        $this->password = '';

    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
