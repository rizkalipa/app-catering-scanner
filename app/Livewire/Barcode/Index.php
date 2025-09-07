<?php

namespace App\Livewire\Barcode;

use App\Models\Barcode;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public $title = 'List Barcode';
    public Collection $barcodes;
    public array $headers;
    public array $rows;

    public function mount()
    {
        $this->barcodes = Barcode::all();
        $this->headers = [
            'Barcode ID',
            'Nama Sekolah',
            'Tanggal Dibuat',
            'Dibuat Oleh',
            ' '
        ];

        foreach ($this->barcodes as $barcode) {
            $this->rows[] = $barcode->toArray();
        }
    }

    public function render()
    {
        return view('livewire.barcode.index')->layoutData(['title' => $this->title]);
    }
}
