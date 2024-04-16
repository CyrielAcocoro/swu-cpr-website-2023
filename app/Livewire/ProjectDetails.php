<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\projects;
use Jorenvh\Share\Share as ShareService;

class ProjectDetails extends Component
{
    public $project;
    protected $shareService;
    public $selectedProject;
    public $selectedImage;

    public function mount($id)
    {
        $this->project = projects::with(['subject', 'developers', 'category', 'faculty'])
            ->findOrFail($id);
        // Set the selectedProject property to the fetched project
        $this->selectedProject = $this->project;
        if (count($this->selectedProject->files) > 0) {
            $this->selectedImage = $this->selectedProject->files[0];
        }
    }

    public function __construct()
    {
        $this->shareService = app(ShareService::class);
    }

    public function getShareLinks()
    {
        if ($this->selectedProject) {
            $url = url('/project/' . $this->selectedProject->id);
            $title = $this->selectedProject->title;

            return $this->shareService->page($url, $title)
                ->facebook()
                ->twitter()
                ->linkedin('Extra LinkedIn summary can be passed here')
                ->whatsapp()
                ->getRawLinks();
        }

        return [];
    }

    public function selectImage($imageFile)
    {
        $this->selectedImage = $imageFile;
    }

    public function nextImage()
    {
        if ($this->selectedProject && count($this->selectedProject->files) > 0) {
            $currentIndex = array_search($this->selectedImage, $this->selectedProject->files);
            $nextIndex = ($currentIndex + 1) % count($this->selectedProject->files);
            $this->selectedImage = $this->selectedProject->files[$nextIndex];
        }
    }

    public function previousImage()
    {
        if ($this->selectedProject && count($this->selectedProject->files) > 0) {
            $currentIndex = array_search($this->selectedImage, $this->selectedProject->files);
            $previousIndex = ($currentIndex - 1 + count($this->selectedProject->files)) % count($this->selectedProject->files);
            $this->selectedImage = $this->selectedProject->files[$previousIndex];
        }
    }

    public function render()
    {
        return view('livewire.project-details', [
            'selected' => $this->selectedProject,
            'shareLinks' => $this->getShareLinks(),
            'selectedImage' => $this->selectedImage,
        ]);
    }
}
