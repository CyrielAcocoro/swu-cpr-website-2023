<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categories;
use App\Models\projects;
use App\Models\ProjectHeadline;


class Project extends Component
{
    public $categories;
    public $projects;
    public $projectHeadline;

    public function mount()
    {
        $this->categories = categories::latest()->get();
        $this->projects = projects::latest()->get();
        $this->projectHeadline = ProjectHeadline::first();
    }

    public function render()
    {
        return view('livewire.project', [
            'categories' => $this->categories,
            'projects' => $this->projects,
            'projectHeadline' => $this->projectHeadline,
        ]);
    }
}
