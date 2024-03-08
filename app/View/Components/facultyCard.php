<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class facultyCard extends Component
{
    public $alt, $about, $avatar, $name, $position, $specialization;
    public function __construct($alt, $about, $avatar, $name, $position, $specialization)
    {
        $this->alt = $alt;
        $this->about = $about;
        $this->avatar = $avatar;
        $this->name = $name;
        $this->position = $position;
        $this->specialization = $specialization;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faculty-card');
    }
}
