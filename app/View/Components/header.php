<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class header extends Component
{
    public $name, $logoIcon;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $logoIcon)
    {
        $this->name = $name;
        $this->logoIcon = $logoIcon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
