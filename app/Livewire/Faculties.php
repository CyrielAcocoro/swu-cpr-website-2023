<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\faculty;


class Faculties extends Component
{
    public $faculty;

    public function mount()
    {
        $this->faculty = faculty::all();
    }
    public function render()
    {
        return view('livewire.faculties', [
            'faculty' => $this->faculty,
        ]);
    }
}
