<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{

    public $class;
    public $class2;
    public $msj;

    /**
     * Create a new component instance.
     */
    public function __construct($icon , $type, $msj)
    {
        $this->class = $type;
        $this->class2 = $icon;
        $this->msj = $msj;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
