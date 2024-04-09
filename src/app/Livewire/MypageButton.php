<?php

namespace App\Livewire;

use Livewire\Component;

class MypageButton extends Component
{
    public $sells;
    public $purchases;
    public $activeSells = true;
    public $activePurchases = false;

    public function mount($sells, $purchases){
        $this->sells = $sells;
        $this->purchases = $purchases;
    }

    public function showSells()
    {
        $this->activeSells = true;
        $this->activePurchases = false;
    }

    public function showPurchases()
    {
        $this->activeSells = false;
        $this->activePurchases = true;
    }

    public function render()
    {
        return view('livewire.mypage-button');
    }
}
