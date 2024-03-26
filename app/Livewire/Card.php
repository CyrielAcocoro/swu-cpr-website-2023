<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\projects;
use App\Models\categories;
use Livewire\WithPagination;

class Card extends Component
{
    public $projects = [];
    public $categories;
    public $search = '';

    use WithPagination;

    public $perPage = 8;
    public $page = 1;

    protected $listeners = ['searchUpdated' => 'updateProjects', 'filterCategory' => 'filterProjects', 'loadMoreProjects' => 'loadMore'];

    public function mount()
    {
        $this->fetchProjects();
    }
    public function updateProjects($search)
    {
        $this->search = $search;
        $this->resetLoadMore();
        $this->fetchProjects();
    }

    public function resetLoadMore()
    {
        $this->page = 1;
        $this->projects = [];
    }
    public function filterProjects($filteredProject)
    {
        $this->projects = projects::where('category_id', $filteredProject)->latest()->get();
        $this->categories = categories::withCount('projects')->get();
    }

    public function fetchProjects()
    {
        $query = projects::latest();

        if ($this->search) {
            $query = $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhereHas('developers', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                });
        }

        $newProjects = $query->offset(($this->page - 1) * $this->perPage)
            ->limit($this->perPage)
            ->get();

        if ($newProjects->isNotEmpty()) {
            $this->projects = collect($this->projects)->merge($newProjects)->all();
        }
    }
    public function loadMore()
    {
        $this->page++;
        $this->fetchProjects();
    }

    public function render()
    {
        return view('livewire.card', [
            'projects' => $this->projects,
            'categories' => categories::withCount('projects')->get(),
        ]);
    }
}
