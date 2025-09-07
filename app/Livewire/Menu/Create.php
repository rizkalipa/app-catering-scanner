<?php

namespace App\Livewire\Menu;

use App\DTOs\NotificationDTO;
use App\Models\Menu;
use App\Traits\WithNotifications;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads, WithNotifications;

    #[Validate('required|string|max:255')]
    public $name = '';

    #[Validate('required|string')]
    public $type = '';

    #[Validate('nullable|string|max:500')]
    public $notes = '';

    #[Validate('nullable|image|max:2048')]
    public $image;

    public bool $isCreated = false;

    public array $types = [
        ['label' => 'Makanan', 'value' => 'food'],
        ['label' => 'Minuman', 'value' => 'drink'],
    ];

    public function render()
    {
        return view('livewire.menu.create');
    }

    public function submitForm()
    {
        $this->validate();

        try {
            $imagePath = null;

            if ($this->image) {
                $imagePath = $this->image->store('images/menu', 'public');
            }

            Menu::create([
                'name' => $this->name,
                'type' => $this->type,
                'image' => $imagePath,
                'created_by' => auth()->id()
            ]);

            $this->isCreated = true;
            $this->successNotification(message: 'Berhasil menyimpan data!');
        } catch (\Exception $e) {
            $this->errorNotification(message: $e->getMessage());
        }
    }
}
