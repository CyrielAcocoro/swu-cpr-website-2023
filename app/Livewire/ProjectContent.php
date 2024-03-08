<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\categories;

class ProjectContent extends Component
{
    public $categories, $projects;
    public $search = "";
    public $filteredProject;

    public function filterProjectsByCategory($categoryId)
    {
        $this->filteredProject = $categoryId;
        $this->dispatch('filterCategory', $categoryId);
        $this->categories = categories::withCount('projects')->get();
    }

    public function updateSearch()
    {
        $this->dispatch('searchUpdated', $this->search);
        $this->categories = categories::withCount('projects')->get();
    }

    public function mount()
    {
        $this->categories = categories::withCount('projects')->get();
    }


    public function render()
    {

        return view('livewire.project-content', [
            'projects' => $this->projects,
            'categories' => $this->categories,
        ]);
    }
}
