<?php

namespace App\Livewire\Academy;

use App\Models\AcademyRecipient;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public string $title = "List Sekolah";
    public array $headers;
    public array $rows;
    public Collection $academyRecipients;

    public function mount()
    {
        $this->academyRecipients = AcademyRecipient::all();
        $this->headers = [
            'Nama Sekolah',
            'Email',
            'No. Telpon',
            'Jumlah Pax',
            'Tanggal Dibuat',
            ' '
        ];

        foreach ($this->academyRecipients as $recipient) {
            $this->rows[] = [
                $recipient->name,
                $recipient->email,
                $recipient->phone,
                $recipient->total_pax,
                $recipient->created_at,
                '
                    <a class="block" href="#">
                        <span class="py-1.5 px-4 inline-flex items-center gap-x-2 text-xs font-medium bg-teal-100 text-teal-800 rounded-full dark:bg-teal-500/10 dark:text-teal-500">
                            <svg class="size-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>
                            Aktif
                        </span>
                    </a>
                '
            ];
        }
    }

    public function render()
    {
        return view('livewire.academy.index')->layoutData(["title" => $this->title]);
    }
}
