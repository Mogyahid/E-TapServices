<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\ServiceOffer;
use App\Models\Category;
use App\Models\Provider;
use Auth;

class ServiceList extends Component
{
    public $cat_id, $category_name;
    public $serviceOffers;

    public function mount(Category $category)
    {
        $this->cat_id = $category->id;
        $this->category_name = $category->name;
    }

    public function render()
    {       
        session()->put("cat_id", $this->cat_id); # Set the category id
        // dd(session()->pull("cat_id"));
        return view('livewire.customer-side.service-list', [
           "providers" => Provider::where('city', Auth::user()->address->city)
                ->with(["services" => function($query){
                    $query->where("category_id", $this->cat_id);
                }])->get(),
            $this->category_name,
            // $this->cat_id
        ]);
    }
}
