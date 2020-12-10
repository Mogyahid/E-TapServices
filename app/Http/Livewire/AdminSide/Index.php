<?php

namespace App\Http\Livewire\AdminSide;

use Livewire\Component;

use Livewire\WithFileUploads;
use App\Models\Image;
use App\Models\Category;

class Index extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin-side.index');
    }
}
