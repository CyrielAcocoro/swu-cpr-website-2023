<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Logo;
use Illuminate\Support\Facades\Route;

class Navbar extends Component
{
    public $logo;
    public $currentRoute;

    public function mount()
    {
        $this->logo = Logo::first();
        $this->currentRoute = Route::currentRouteName();
    }

    public function render()
    {
        return view('livewire.navbar', [
            'logo' => $this->logo,
            'currentRoute' => $this->currentRoute,
        ]);
    }
}
