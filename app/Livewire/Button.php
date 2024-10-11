<?php

namespace App\Livewire;

use Livewire\Component;

class Button extends Component

{
    public $count = 0;
    public function add() {
        dump("clicked");
    }
    public function render()
    {
        return view('livewire.button');
    }
}
