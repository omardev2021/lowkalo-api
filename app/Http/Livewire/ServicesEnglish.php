<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ServicesEnglish extends Component
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

        return view('livewire.services-english', [
            'categories' => $categories,
            'services' => Category::all()
        ]);
    }

    public function filterByOriginTest($origin)
    {
        $this->selectedOrigin = $origin;
    }

    public function clearFilterTest()
    {
        $this->selectedOrigin = null;
    }

    public function ksa()
    {

        $this->services = Category::whereHas('soluations', function ($query) {
            $query->where('origin', 'd');
        })->get();

//        return view('livewire.service-live',[
//            'services' => Category::with('soluationksa')->get()
//        ]);


//        return view('livewire.service-live',[
//            'services' => $this->services
//        ]);
    }

    public function getCategories()
    {

        return Category::whereHas('soluationksa', function ($query) {
            $query->where('origin', 'ksa');
        })->get();


    }
}



