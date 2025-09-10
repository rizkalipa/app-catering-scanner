<?php

namespace App\Livewire\SetMenu;

use App\Models\Menu;
use App\Models\SetMenu;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component
{
    public array $headers;
    public array $rows;
    public Collection $setMenus;

    public function mount()
    {
        $this->setMenus = SetMenu::all();
        $this->headers = [
            'Set Menu ID',
            'Nama',
            'Menu',
            'Tanggal Dibuat',
        ];

        foreach ($this->setMenus as $setMenu) {
            $menuIds = collect(explode(',', $setMenu->menu_ids));
            $menus = $menuIds->map(function ($id) {
                return ['id' => $id, 'name' => Menu::find($id)->name];
            });
            $this->rows[] = [
                $setMenu->id,
                $setMenu->name,
                $menus->pluck('name')->implode(', '),
                $setMenu->created_at
            ];
        }
    }

    public function render()
    {
        return view('livewire.set-menu.index');
    }
}
