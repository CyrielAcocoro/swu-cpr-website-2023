<?php

namespace App\Livewire;

use App\Models\ProgramDetails;
use Livewire\Component;

class About extends Component
{

    public $programDetails;

    public function mount()
    {
        $this->programDetails = ProgramDetails::first();
    }

    public function render()
    {
        return view('livewire.about', [
            'programDetails' => $this->programDetails,
        ]);
    }
}
