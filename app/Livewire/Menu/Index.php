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
            'Menu',
            'Jenis',
            'Tanggal Dibuat',
        ];

        foreach ($menus as $menu) {
            $image = '';

            if ($menu->image) {
                $imageUrl = url('storage/' . $menu->image);
                $labelName = <<<IMG
                    <div class="flex items-center gap-x-16">
                        <img class="shrink-0 w-32 rounded-lg" src="$imageUrl" alt="Product Image">
                        <div>
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">$menu->name</span>
                        </div>
                    </div>
                IMG;
            } else {
                $labelName = <<<IMG
                    <div class="flex items-center gap-x-16">
                        <div class="shrink-0 w-32 rounded-lg"></div>
                        <div>
                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">$menu->name</span>
                        </div>
                    </div>
                IMG;
            }

            $this->rows[] = [
                $labelName,
                $menu->type === 'food' ? 'Makanan' : 'Minuman',
                $menu->created_at->format('d M Y'),
            ];
        }
    }

    public function render()
    {
        return view('livewire.menu.index');
    }
}
