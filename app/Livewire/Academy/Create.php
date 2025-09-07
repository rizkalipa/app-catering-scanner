<?php

namespace App\Livewire\Academy;

use App\Models\AcademyRecipient;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $phone;
    public $totalPax;
    public $notes;

    public bool $isLoading = false;
    public string $successMessage = '';

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'totalPax' => 'required|numeric',
        'notes' => 'nullable'
    ];

    protected $messages = [
        'name.required' => 'Nama sekolah wajib diisi.',
        'name.min' => 'Nama sekolah minimal 3 karakter.',
        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Masukkan email yang valid.',
        'phone.numeric' => 'Masukkan nomor telepon yang valid.',
        'totalPax.required' => 'Jumlah pax wajib diisi.',
    ];

    public function render()
    {
        return view('livewire.academy.create')->layoutData(['title' => 'Data Sekolah']);
    }

    public function submitForm(): void
    {
        $this->validate();
        $this->isLoading = true;

        try {
            AcademyRecipient::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'total_pax' => $this->totalPax,
                'notes' => $this->notes
            ]);

            $this->successMessage = 'Berhasil menyimpan data!';
        } catch (\Exception $e) {
            $this->successMessage = $e->getMessage();
        }
    }
}
