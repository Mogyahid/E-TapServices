<?php

namespace App\Http\Livewire\CustomerSide\Components;

use Livewire\Component;
use App\Models\Category;

class Navbar extends Component
{
    public function render()
    {
        return view('livewire.customer-side.components.navbar', [
            'categories' => Category::all(),
        ]);
    }
}
