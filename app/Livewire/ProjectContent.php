<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\projects;
use App\Models\categories;
use Livewire\WithPagination;
use App\Models\subject;

class ProjectContent extends Component
{
    public $projects = [];
    public $categories;
    public $search = '';
    public $filteredProject;
    public $school_year;
    public $subject_codes;
    public $subject_code;

    use WithPagination;

    public $perPage = 20;
    public $page = 1;

    public $filterKey = 0;

    protected $listeners = ['searchUpdated' => 'updateProjects', 'filterCategory' => 'filterProjects', 'loadMoreProjects' => 'loadMore', 'filteredSchoolYear' => 'filterSchoolYear', 'filteredSubjectCodes' => 'filterSubjectCode'];

    public function mount()
    {
        $this->fetchProjects();
        $this->categories = categories::withCount('projects')->get();
        $this->subject_codes = subject::all();
    }

    public function updateProjects($search)
    {
        $this->search = $search;
        $this->resetLoadMore();
        $this->fetchProjects();
    }

    public function filterProjects($filteredProject)
    {
        $this->filteredProject = $filteredProject;
        $this->resetLoadMore();
        $this->fetchProjects();
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

    public function filterProjectsByCategory($categoryId)
    {
        $this->filteredProject = $categoryId;
        $this->resetLoadMore();
        $this->fetchProjects();
    }

    public function updateSearch()
    {
        $this->resetLoadMore();
        $this->fetchProjects();
    }

    public function clearFilters()
    {
        $this->search = '';
        $this->filteredProject = null;
        $this->school_year = '';
        $this->subject_code = '';
        $this->resetLoadMore();
        $this->fetchProjects();
        $this->filterKey++;
    }

    public function fetchProjects()
    {
        $query = projects::latest();

        if ($this->search) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhereHas('projectAuthors', function ($query) {
                    $query->where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%');
                });
        }

        if ($this->school_year) {
            $query->where('school_year', $this->school_year);
        }

        if ($this->subject_code) {
            $query->whereHas('subject', function ($query) {
                $query->where('subject_code', $this->subject_code);
            });
        }

        if ($this->filteredProject) {
            $query->where('category_id', $this->filteredProject);
        }

        $newProjects = $query->with(['projectAuthors'])
            ->offset(($this->page - 1) * $this->perPage)
            ->limit($this->perPage)
            ->get();
        if ($newProjects->isNotEmpty()) {
            $this->projects = collect($this->projects)->merge($newProjects)->all();
        }

        $this->categories = categories::withCount('projects')->get();
    }
    public function resetLoadMore()
    {
        $this->page = 1;
        $this->projects = [];
    }

    public function loadMore()
    {
        $this->page++;
        $this->fetchProjects();
    }

    public function render()
    {
        return view('livewire.project-content', [
            'projects' => $this->projects,
            'categories' => $this->categories,
        ]);
    }
}
