<?php

namespace App\Livewire;

use Livewire\Component;

class CategoryCheckbox extends Component
{
    public $selectedCategories = [];
    public $categories;
    public $activeView = true;
    public $activeCheckbox = false;

    public function mount($categories){
        $this->categories = $categories;
    }

    public function showCheckbox(){
        $this->activeCheckbox = true;
        $this->activeView = false;
    }

    public function render()
    {
        return view('livewire.category-checkbox');
    }
}
