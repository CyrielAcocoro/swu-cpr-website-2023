<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class developerCard extends Component
{
    public $alt, $avatar, $name, $role, $about, $facebookLink, $showFacebookIcon, $instagramLink, $showInstagramIcon, $linkedinLink, $showLinkedinIcon;
    /**
     * Create a new component instance.
     */
    public function __construct($alt, $avatar, $name, $role, $about, $facebookLink, $showFacebookIcon, $instagramLink, $showInstagramIcon, $linkedinLink, $showLinkedinIcon)
    {
        $this->alt=$alt;
        $this->avatar=$avatar;
        $this->name=$name;
        $this->role=$role;
        $this->about=$about;
        $this->facebookLink=$facebookLink;
        $this->showFacebookIcon=$showFacebookIcon;
        $this->instagramLink=$instagramLink;
        $this->showInstagramIcon=$showInstagramIcon;
        $this->linkedinLink=$linkedinLink;
        $this->showLinkedinIcon=$showLinkedinIcon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.developer-card');
    }
}
