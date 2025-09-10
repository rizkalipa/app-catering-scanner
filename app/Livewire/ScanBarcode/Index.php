<?php

namespace App\Livewire\ScanBarcode;

use Livewire\Component;

class Index extends Component
{
    public bool $isScanActive = false;
    public string $barcode = '';

    public function render()
    {
        return view('livewire.scan-barcode.index');
    }

    public function toggleScanner()
    {
        $this->isScanActive = !$this->isScanActive;
    }
}
