<?php

namespace App\Http\Livewire\CustomerSide\Components;

use Livewire\Component;
use App\Models\Carousel as CarouselItem;

class Carousel extends Component
{
    public function render()
    {
        return view('livewire.customer-side.components.carousel', [
            "carousels" => CarouselItem::all(),
        ]);
    }
}
