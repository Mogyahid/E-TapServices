<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\Category;
// use App\Models\ClientRequestService;

class Index extends Component
{
    public $cat_id;
    public $categories, $category_id;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.customer-side.index');
    }

    public function categoryID(Category $category){
        // $category = Category::find($id);
        // dd($category->id);
        $this->emit('categoryid', $category->id);
      }
}
