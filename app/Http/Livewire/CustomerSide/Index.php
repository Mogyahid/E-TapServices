<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\Category;

class Index extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.customer-side.index');
    }
}
