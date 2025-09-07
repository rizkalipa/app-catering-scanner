<?php

namespace App\Livewire;

use Livewire\Component;

class PageSwitcher extends Component
{
    public string $currentPage = 'dashboard';
    public string $title = 'Dashboard';

    public function showPage($pageName, $title)
    {
        $this->currentPage = $pageName;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.page-switcher');
    }
}
