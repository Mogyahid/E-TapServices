<?php

namespace App\Http\Livewire\AdminSide;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Provider;
use App\Models\User;
use App\Models\Category;
use App\Models\ServiceOffer;
use App\Models\ServiceItem;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;
use DB;

class ServicePage extends Component
{
    use WithFileUploads;

    public $servicesOffer = [];
    public $establishment, $categoryID, $description, $service_image, $service_name;
    #For clearing the input file value
    public $iteration;

    public $showServiceDialog = false;
    public $showEditService = false;
    public $ifForEdit;


    public function mount()
    {
        $this->servicesOffer = [
            ['name' => '', 'price' => ''],
        ];
    }

    public function render()
    {
        return view('livewire.admin-side.service-page', [
            "providers" => User::where("isProviderConfirmed", 1)->get(),
            "categories" => Category::all(),
            'services' => ServiceOffer::all(),
        ]);
    }

    //Removing the service items
    public function removeServiceOffer($index)
    {
        unset($this->servicesOffer[$index]);
        $this->servicesOffer = array_values($this->servicesOffer);
    }

    // Add service items
    public function addServiceOffer()
    {
        $this->servicesOffer[] = ['name' => '', 'price' => ''];
    }

    public function saveService()
    {   
        $saved = ServiceOffer::create([
            'name' => $this->service_name,
            'category_id' => $this->categoryID,
            'provider_id' => $this->establishment,
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
        }

        foreach ($this->servicesOffer as $key => $service) {
            ServiceItem::create([
                'service_id' => $service_id,
                'service_name' => $service['name'],
                'price' => $service['price']
            ]);
        }

        # Incremenet no of service request
        Category::where('id', $this->establishment)
            ->update([
            'no_services'=> DB::raw('no_services+1'), 
        ]);

        $this->showServiceDialog = false;
        $this->iteration = rand();
        $this->establishment = "";
        $this->categoryID = "";
        $this->description = "";
    }

    // To Do
    public function deleteService(ServiceOffer $service)
    {
        # Getting the image by comparing the pass id to its id
        $images = DB::table('images')->select('url')->where('imageable_id', $service->id)->get();

        foreach($images as $image_url){
            $this->pastDeletedImage = $image_url->url; # Store editting image name
        }
        $deleted = $service->delete();

        if($deleted){
            Storage::delete('public/categories/'.$this->pastDeletedImage);
        }
    }
}
