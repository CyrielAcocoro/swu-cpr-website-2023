<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\developers;

class StudentDeveloper extends Component
{
    public $search = '';
    public $developers;

    public function mount()
    {
        $this->developers = developers::get()->sortBy('last_name');
    }

    public function updatedSearch()
    {
        $searchTerm = strtolower($this->search);
        $this->developers = developers::where('full_name', 'like', '%'.$searchTerm.'%')
            ->orWhere('city', 'like', '%'.$searchTerm.'%')
            ->orWhereRaw("LOWER(CASE student_year_level WHEN 1 THEN '1st Year Student' WHEN 2 THEN '2nd Year Student' WHEN 3 THEN '3rd Year Student' WHEN 4 THEN '4th Year Student' END) LIKE ?", ['%'.$searchTerm.'%'])
            ->get()->sortBy('last_name');
    }
    
    public function render()
    {
        return view('livewire.student-developer', [
            'developers' => $this->developers,
        ]);
    }
}
