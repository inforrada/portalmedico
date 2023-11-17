<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public static $globalcount = 0;
      public function increment () {
        self::$globalcount++;
        $this->count++;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
