<?php

namespace App\Livewire\Menu;

use App\Models\Menu;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public array $headers;
    public array $rows;
    public Collection $menus;

    public function mount()
    {
        $menus = Menu::all();
        $this->headers = [
            'Menu ID',
            'Nama',
            'Jenis',
            'Tanggal Dibuat',
            ''
        ];

        foreach ($menus as $menu) {
            $image = '';

            if ($menu->image) {
                $imageUrl = url('storage/' . $menu->image);
                $image = <<<IMG
                    <div class="">
                        <img src="$imageUrl" class="">
                    </div>
                IMG;
            };

            $this->rows[] = [
                $menu->id,
                $menu->name,
                $menu->type === 'food' ? 'Makanan' : 'Minuman',
                $menu->created_at->format('d M Y'),
                $image
            ];
        }
    }

    public function render()
    {
        return view('livewire.menu.index');
    }
}
