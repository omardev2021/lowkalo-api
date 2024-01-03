<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class SoluationsList extends Component
{


    public $selectedOrigin = null;

    public function mount()
    {
        $this->selectedOrigin = null;
    }

    public function render()
    {


        $categories = Category::with(['soluations' => function ($query) {
            if ($this->selectedOrigin !== null) {
                $query->where('origin', $this->selectedOrigin);
            }
        }]);

        if ($this->selectedOrigin !== null) {
            $categories = $categories->whereHas('soluations', function ($query) {
                $query->where('origin', $this->selectedOrigin);
            });
        }

        $categories = $categories->get();

        return view('livewire.soluations-list', [
            'categories' => $categories,
            'services' => Category::all()
        ]);
    }

    public function filterByOrigin($origin)
    {
        $this->selectedOrigin = $origin;
    }

    public function clearFilter()
    {
        $this->selectedOrigin = null;
    }




}
