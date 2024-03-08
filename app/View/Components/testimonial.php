<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\testimonials;

class testimonial extends Component
{
    public $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = testimonials::latest()->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.testimonial');
    }
}
