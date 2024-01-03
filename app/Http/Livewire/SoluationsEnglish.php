<?php

namespace App\Http\Livewire;

use App\Models\Soluation;
use Livewire\Component;
use App\Models\Category;

class SoluationsEnglish extends Component
{

    public $category;
    public $selectedOrigin = null;
    public $soluations;

    public function mount(Category $category)
    {
        $this->category = $category;

    }

    public function render()
    {

        $this->soluations = $this->category->soluations;
        $category = $this->category;
        if ($this->selectedOrigin !== null) {
//            $soluations = $soluations->where('origin', $this->selectedOriginName);
            $soluations = $this->category->soluationkw;
            $category = $this->category->whereHas('soluations', function ($query) {
                $query->where('origin', $this->selectedOrigin);
            });
        }

        return view('livewire.soluations-english', [
            'soluations' => $this->soluations,
            'category' => $category
        ]);
    }

    public function filterByOriginName($origin)
    {
        $this->selectedOrigin = $origin;
    }

    public function clearFilter()
    {
        $this->selectedOrigin = null;
    }

}

