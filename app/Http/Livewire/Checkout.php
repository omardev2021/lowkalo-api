<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{

    public $selectedOption;

    public function render()
    {
        return view('livewire.checkout');
    }
}
