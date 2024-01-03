<?php

namespace App\Http\Livewire;

use App\Models\Soluation;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Log\Logger;

class SoluationsDetails extends Component
{
    public $category;
    public $selectedOriginName;
    public $test = 'here';
    public function mount(Category $category)
    {
        $this->category = $category;
        $this->selectedOriginName = null;
    }

    public function render()
    {
        $solutions = $this->getSolutions();

        return view('livewire.soluations-details', [
            'solutions' => $solutions,
            'test' =>$this->test
        ]);
    }


    public function filterByOriginName($origin)
    {
        $this->selectedOriginName = $origin;
        $this->render();
    }

    private function getSolutions()
    {
        $solutions = $this->category->soluations();

        if ($this->selectedOriginName !== null) {
            $this->test = 'gk';
            $solutions = $solutions->where('origin', $this->selectedOriginName);
        }

        return $solutions->get();
    }
    public function clearFilter()
    {
        $this->selectedOriginName = null;
    }
}
