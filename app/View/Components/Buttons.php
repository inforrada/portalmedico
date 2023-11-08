<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Buttons extends Component
{
    public $botones = [];
    public $bgcolor = "";
    /**
     * Create a new component instance.
     */
    public function __construct($canEdit = 0)
    {
        //
        if ($canEdit == 1) {
            $this->botones = ['volver', 'ver', 'Editar'];
            $this->bgcolor = '#A0FFA0';
        }
        else {
            $this->botones = ['volver', 'ver'];
            $this->bgcolor = '#FFFFA0';
            
        }

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.buttons');
    }
}
