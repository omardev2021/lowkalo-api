<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {
        if (strlen($this->search) < 2) {
            $this->searchResults = [];

            return;
        }

//        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');
        $response =Category::where('name', 'like', "%{$this->search}%")
            ->orWhere('name_ar', 'like', "%{$this->search}%")
            ->get();
        $this->searchResults = $response;
    }

    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
