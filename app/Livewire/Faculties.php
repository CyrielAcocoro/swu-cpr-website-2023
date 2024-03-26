<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\faculty;


class Faculties extends Component
{
    public $faculty;

    public function mount()
    {
        $this->faculty = faculty::where('is_active', true)->get()->sortBy('last_name');
    }
    public function render()
    {
        return view('livewire.faculties', [
            'faculty' => $this->faculty,
        ]);
    }
}
