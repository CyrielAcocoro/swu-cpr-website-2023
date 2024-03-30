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
    public $school_year;
    public $subject_code;

    use WithPagination;

    public $perPage = 40;
    public $page = 1;

    protected $listeners = ['searchUpdated' => 'updateProjects', 'filterCategory' => 'filterProjects', 'loadMoreProjects' => 'loadMore', 'filteredSchoolYear' => 'filterSchoolYear', 'filteredSubjectCodes' => 'filterSubjectCode'];

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

    public function filterSchoolYear($school_year)
    {
        $this->school_year = $school_year;
        $this->resetLoadMore();
        $this->fetchProjects();
    }

    public function filterSubjectCode($subject_code)
    {
        $this->subject_code = $subject_code;
        $this->resetLoadMore();
        $this->fetchProjects();
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

        if ($this->school_year) {
            $query = $query->where('school_year', $this->school_year);
        }

        if ($this->subject_code) {
            $query = $query->whereHas('subject', function ($query) {
                $query->where('subject_code', $this->subject_code);
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
