<?php

namespace App\Livewire\Barcode;

use App\Models\AcademyRecipient;
use App\Models\Barcode;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Livewire\Component;

class Create extends Component
{
    public string $successMessage = '';
    public ?array $dataPreviewBarcode = null;
    public Collection $academies;
    public int $academyId;
    public int $totalBarcode;

    public array $headers = [];
    public array $rows = [];

    protected $rules = [
        'academyId' => 'required',
        'totalBarcode' => 'required',
    ];

    protected $messages = [
        'academyId.required' => 'Pilihan sekolah wajib diisi.',
        'totalBarcode.required' => 'Jumlah barcode wajib diisi.',
    ];

    public function mount()
    {
        $this->headers = [
            'Barcode ID',
            'Nama Sekolah',
            'Kode'
        ];
        $this->academies = AcademyRecipient::all()->map(fn ($item) => ['value' => $item->id, 'label' => $item->name]);
    }

    public function render()
    {
        return view('livewire.barcode.create');
    }

    public function previewBarcode(): void
    {
        $this->validate();

        $generateListBarcode = $this->generateBarcode();
        $this->rows = $generateListBarcode;
        $this->dataPreviewBarcode = $this->generateBarcode();
    }

    public function submitForm(): void
    {
        $this->validate();
        $listBarcodes = $this->generateBarcode();

        foreach ($listBarcodes as $barcode) {
            Barcode::create([
                'academy_recipient_id' => $this->academyId,
                'uuid' => Str::uuid(),
            ]);
        }

        $this->successMessage = 'Barcode berhasil digenerate.';
    }

    private function generateBarcode(): array
    {
        $i = 0;
        $academyName = AcademyRecipient::find($this->academyId)?->name;
        $lastBarcodeId = Barcode::orderBy('id', 'desc')->first()?->id ?? 0;
        $data = [];

        while ($i < $this->totalBarcode) {
            $barcodeId = str_pad($lastBarcodeId + 1, 5, '0', STR_PAD_LEFT);
            $data[] = [
                'barcode' => $barcodeId,
                'sekolah' => $academyName,
                'kode' => $barcodeId . '-' . $this->academyId . '-XXXX',
            ];

            $lastBarcodeId++;
            $i++;
        }

        return $data;
    }
}
