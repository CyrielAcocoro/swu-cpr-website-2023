<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class studentCard extends Component
{
    public $fullName;
    public $email;
    public $city;
    public $province;
    public $country;
    public $image;
    public $githubLink;

    public $linkedinLink;

    public function __construct($fullName, $email, $city, $province, $country, $image, $githubLink, $linkedinLink)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->image = $image;
        $this->githubLink = $githubLink;
        $this->linkedinLink = $linkedinLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.student-card');
    }
}
