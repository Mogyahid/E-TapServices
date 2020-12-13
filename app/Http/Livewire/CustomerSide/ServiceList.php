<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\ServiceOffer;
use App\Models\Category;

class ServiceList extends Component
{
    public $cat_id, $category_name;

    public function mount(Category $category)
    {
        $this->cat_id = $category->id;
        $this->category_name = $category->name;
    }

    public function render()
    {
        return view('livewire.customer-side.service-list', [
            "serviceOffers" => ServiceOffer::where('category_id', $this->cat_id)->get(),
            $this->category_name,
        ]);
    }
}
