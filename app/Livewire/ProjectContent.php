<?php

namespace App\Livewire;

use App\Models\subject;
use Livewire\Component;
use App\Models\categories;

class ProjectContent extends Component
{
    public $categories, $projects;
    public $search = "";
    public $filteredProject;
    public $school_year;
    public $subject_codes;

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
        $this->subject_codes = subject::all();
    }
    public function filterSchoolYear($school_year)
    {
        $this->filteredProject = $school_year;
        $this->dispatch('filteredSchoolYear', $school_year);
    }

    public function filterSubjectCode($subject_codes)
    {
        $this->filteredProject = $subject_codes;
        $this->dispatch('filteredSubjectCodes', $subject_codes);
    }


    public function render()
    {

        return view('livewire.project-content', [
            'projects' => $this->projects,
            'categories' => $this->categories,
        ]);
    }
}
