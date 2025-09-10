<?php

namespace App\Livewire\SetMenu;

use App\Models\Menu;
use App\Models\SetMenu;
use App\Traits\WithNotifications;
use Illuminate\Support\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    use WithNotifications;

    #[Validate('required|string|max:255')]
    public string $name;

    #[Validate('nullable|image|max:2048')]
    public $image = null;

    #[Validate('required|array')]
    public array $selectedMenu;

    #[Validate('nullable')]
    public string $date = '';

    public Collection $menus;

    public bool $isCreated = false;

    public array $menuOptions = [];

    protected $messages = [
        'name.required' => 'Nama set menu wajib diisi.',
        'selectedMenu.required' => 'Pilihan menu wajib diisi.',
        'selectedMenu.array' => 'Pilihan menu harus berbentuk [array].',
    ];

    public function mount()
    {
        $this->menus = Menu::all();
        $this->menuOptions = $this->menus->map(function ($menu) {
            return [
                'value' => $menu->id,
                'label' => $menu->name,
                'description' => $menu->type_name,
                'image' => $menu->image,
            ];
        })->toArray();
    }

    public function render()
    {
        return view('livewire.set-menu.create');
    }

    public function submitForm()
    {
        try {
            $this->validate();
            $imagePath = null;

            if (isset($this->image)) {
                $imagePath = $this->image->store('images/menu', 'public');
            }

            SetMenu::create([
                'name' => $this->name,
                'menu_ids' => implode(',', $this->selectedMenu),
                'active_at' => date('Y-m-d H:i:s', strtotime($this->date)),
                'image' => $imagePath,
                'created_by' => auth()->id()
            ]);

            $this->isCreated = true;
            $this->dispatch('post-submit');
            $this->successNotification(message: 'Berhasil menyimpan data!');
        } catch (\Exception $e) {
            $this->errorNotification(message: $e->getMessage());
            $this->dispatch('post-submit');
            throw $e;
        }
    }
}
