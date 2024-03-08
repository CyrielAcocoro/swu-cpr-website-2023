<?php

namespace App\Livewire;

use Livewire\Component;
use Closure;
use Illuminate\Contracts\View\View;
use App\Models\headlines;
use App\Models\projects;
use App\Models\testimonials;

class Home extends Component
{
    public $headline, $testimonials, $projects;

    public function mount()
    {
        $this->projects = projects::latest()->get();
        $this->headline = headlines::first();
        $this->testimonials = testimonials::latest()->get();
    }
    public function render(): View|Closure|string
    {
        return view('livewire.home', [
            'headline' => $this->headline,
            'testimonials' => $this->testimonials,
            'projects' => $this->projects,
        ]);
    }
}
