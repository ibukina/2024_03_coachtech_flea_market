<?php

namespace App\Livewire;

use Livewire\Component;

class CommentSelect extends Component
{
    public $comments;
    public $item;

    public function mount($comments, $item){
        $this->comments = $comments;
        $this->item = $item;
    }

    public function render()
    {
        return view('livewire.comment-select');
    }
}
