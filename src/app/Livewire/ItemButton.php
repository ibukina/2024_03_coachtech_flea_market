<?php

namespace App\Livewire;

use Livewire\Component;

class ItemButton extends Component
{
    public $items;
    public $likes;
    public $activeItems = true;
    public $activeLikes = false;

    public function mount($items, $likes){
        $this->items = $items;
        $this->likes = $likes;
    }

    public function showItems()
    {
        $this->activeItems = true;
        $this->activeLikes = false;
    }

    public function showLikes()
    {
        $this->activeItems = false;
        $this->activeLikes = true;
    }

    public function render()
    {
        return view('livewire.item-button');
    }
}
