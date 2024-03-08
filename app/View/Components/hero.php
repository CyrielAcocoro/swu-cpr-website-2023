<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class hero extends Component
{
    public $headlineDescription, $headlineTitle;
    /**
     * Create a new component instance.
     */
    public function __construct($headlineDescription, $headlineTitle)
    {
        $this->headlineDescription = $headlineDescription;
        $this->headlineTitle = $headlineTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.hero');
    }
}
