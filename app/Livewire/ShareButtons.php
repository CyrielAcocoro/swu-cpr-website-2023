<?php

namespace App\Livewire;

use Jorenvh\Share\Share as ShareService;
use Livewire\Component;

class ShareButtons extends Component
{
    protected $shareService;

    public function __construct()
    {
        $this->shareService = app(ShareService::class);
    }

    public function getShareLinksProperty()
    {
        $url = url()->current(); // Your URL here
        $title = 'Southwester University Cite Repository'; // Your share title here

        return $this->shareService->page($url, $title)
            ->facebook()
            ->twitter()
            ->linkedin()
            ->reddit()
            ->whatsapp()
            ->pinterest()
            ->getRawLinks();
    }

    public function render()
    {
        return view('livewire.share-buttons');
    }
}
