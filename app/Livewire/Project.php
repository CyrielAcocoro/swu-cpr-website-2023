<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categories;
use App\Models\projects;

class Project extends Component
{
    public $categories;
    public $projects;

    public function mount()
    {
        $this->categories = categories::latest()->get();
        $this->projects = projects::latest()->get();
    }

    public function render()
    {
        return view('livewire.project', [
            'categories' => $this->categories,
            'projects' => $this->projects,
        ]);
    }
}
