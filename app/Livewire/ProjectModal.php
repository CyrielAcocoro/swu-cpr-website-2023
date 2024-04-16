<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\projects;
use Illuminate\Support\Facades\Log;
use Jorenvh\Share\Share as ShareService;


class ProjectModal extends Component
{
    protected $listeners = ['project-modal' => 'show'];
    public $visible = false;
    protected $shareService;
    public $selectedProject;
    public $selectedImage;
    #[On('show')]
    public function show($projectId)
    {
        $this->visible = true;
        $this->selectedProject = projects::with(['subject', 'developers', 'category', 'faculty'])
            ->find($projectId);

        if (!$this->selectedProject) {
            Log::warning("Project not found with ID: $projectId");
            $this->visible = false;
            return;
        }
        $this->selectedImage = $this->selectedProject->files[0] ?? null;
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
        $currentIndex = array_search($this->selectedImage, $this->selectedProject->files);
        $nextIndex = ($currentIndex + 1) % count($this->selectedProject->files);
        $this->selectedImage = $this->selectedProject->files[$nextIndex];
    }

    public function previousImage()
    {
        $currentIndex = array_search($this->selectedImage, $this->selectedProject->files);
        $previousIndex = ($currentIndex - 1 + count($this->selectedProject->files)) % count($this->selectedProject->files);
        $this->selectedImage = $this->selectedProject->files[$previousIndex];
    }


    #[On('hide')]
    public function hide()
    {
        $this->visible = false;
        $this->dispatch('modal-closed');
    }

    public function render()
    {
        return view('livewire.project-modal', [
            'selected' => $this->selectedProject,
            'shareLinks' => $this->getShareLinks(),
            'visible' => $this->visible,
        ]);
    }
}
