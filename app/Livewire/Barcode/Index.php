<?php

namespace App\Livewire\Barcode;

use App\Models\Barcode;
use Illuminate\Support\Collection;
use Livewire\Component;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Spatie\LaravelPdf\Facades\Pdf;
use Spatie\Browsershot\Browsershot;

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
            'Kode',
            'Nama Sekolah',
            'Tanggal Dibuat',
        ];

        foreach ($this->barcodes as $barcode) {
            $this->rows[] = [
                $barcode->id,
                $barcode->uuid,
                $barcode->academy_recipient_id,
                $barcode->created_at,
            ];
        }
    }

    public function render()
    {
        return view('livewire.barcode.index')->layoutData(['title' => $this->title]);
    }

    public function generatePdf()
    {
        $data = [];

        foreach ($this->barcodes as $barcode) {
            $data[] = base64_encode(QrCode::format('png')->size(100)->generate($barcode->id . 'Test'));
        }

        $view = view('documents.template', ['data' => $data])->render();

        Browsershot::html($view)
            ->setNodeBinary('/usr/bin/node')
            ->setNpmBinary('/usr/bin/npm')
            ->save('document-generated.pdf');

        return response()->download(public_path('document-generated.pdf'));
    }
}
