<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class featured extends Component
{
    public $title, $description, $featuredImage;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $description, $featuredImage)
    {
        $this->title = $title;
        $this->description = $description;
        $imagePathParts = explode('/', $featuredImage);
        $filename = array_pop($imagePathParts); // Extract the filename
        $encodedFilename = rawurlencode($filename); // Encode only the filename
        $imagePathParts[] = $encodedFilename; // Re-add the encoded filename

        $this->featuredImage = implode('/', $imagePathParts);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured');
    }
}
