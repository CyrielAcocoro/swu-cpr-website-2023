<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Logo;
use Illuminate\Support\Facades\Route;

class Navbar extends Component
{
    public $logo;
    public $isMobileMenuOpen = false;
    public $currentRoute;

    public function mount()
    {
        $this->logo = Logo::first();
        $this->currentRoute = Route::currentRouteName();
    }

    public function toggleMobileMenu()
    {
        $this->isMobileMenuOpen = !$this->isMobileMenuOpen;
    }

    public function render()
    {
        return view('livewire.navbar', [
            'logo' => $this->logo,
        ]);
    }
}
