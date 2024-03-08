<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\developers;

class StudentDeveloper extends Component
{
    public $studentDev;

    public function mount()
    {
        $this->studentDev = developers::all();
    }
    public function render()
    {
        return view('livewire.student-developer', [
            'studentDev' => $this->studentDev,
        ]);
    }
}
