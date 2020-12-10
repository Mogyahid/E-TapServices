<?php

namespace App\Http\Livewire\AdminSide;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Provider;
use App\Models\Category;
use App\Models\ServiceOffer;
use App\Models\ServiceItem;
use App\Models\Image;
use DB;

class ServicePage extends Component
{
    use WithFileUploads;

    public $servicesOffer = [];
    public $establishment, $categoryID, $description, $service_image;
    #For clearing the input file value
    public $iteration;

    public function mount()
    {
        $this->servicesOffer = [
            ['name' => '', 'price' => ''],
        ];
    }

    public function render()
    {
        return view('livewire.admin-side.service-page', [
            "establishments" => Provider::all(),
            "categories" => Category::all(),
        ]);
    }

    public function removeServiceOffer($index)
    {
        unset($this->servicesOffer[$index]);
        $this->servicesOffer = array_values($this->servicesOffer);
    }

    public function addServiceOffer()
    {
        $this->servicesOffer[] = ['name' => '', 'price' => ''];
    }

    public function saveService()
    {
        $saved = ServiceOffer::create([
            'category_id' => $this->establishment,
            'provider_id' => $this->categoryID,
            'service_description' => $this->description
        ]);

        # Get the last inserted category id
        $service_id = ServiceOffer::orderBy('id','desc')->first()->id;

        #Checking ig the category saved successfully
        if($saved){
            # Save category image to categories folder
            $filename = $this->service_image->getClientOriginalName();
            $this->service_image->storeAs('services', $filename, 'public');
            Image::create([
                'url' => $filename,
                'imageable_id' => $service_id,
                'imageable_type' =>  ServiceOffer::class,
            ]);
            $this->iteration = rand();
            $this->establishment = "";
            $this->categoryID = "";
            $this->description = "";
        }

        foreach ($this->servicesOffer as $key => $service) {
            ServiceItem::create([
                'service_id' => $service_id,
                'service_name' => $service['name'],
                'price' => $service['price']
            ]);
        }
    }

}
