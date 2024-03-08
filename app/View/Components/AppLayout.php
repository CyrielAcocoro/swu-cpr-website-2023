<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\logo;

class AppLayout extends Component
{


    public function __construct()
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        $logo = logo::first();
        return view('layouts.app', ['logo' => $logo]);
    }
}
