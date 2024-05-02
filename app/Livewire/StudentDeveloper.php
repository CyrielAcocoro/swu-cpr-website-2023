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
        $this->developers = developers::where('full_name', 'like', '%'.$this->search.'%')
            ->orWhere('city', 'like', '%'.$this->search.'%')
            ->get()->sortBy('last_name');
    }

    public function render()
    {
        return view('livewire.student-developer', [
            'developers' => $this->developers,
        ]);
    }
}
