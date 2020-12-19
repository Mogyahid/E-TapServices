<?php

namespace App\Http\Livewire\ProviderSide\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Provider;
use App\Models\Category;
use App\Models\ServiceOffer;
use App\Models\ServiceItem;
use App\Models\Image;
use App\Models\ClientRequestService;
use DB;
use Auth;

class Services extends Component
{
    use WithFileUploads;

    public $servicesOffer = [];
    public $establishment, $categoryID, $description, $service_image, $service_name;
    #For clearing the input file value
    public $iteration;

    public $showServiceDialog = false;
    public $showEditService = false;
    public $ifForEdit;

    public function render()
    {
        return view('livewire.provider-side.components.services', [
            // "requests" => ClientRequestService::where(),
            "establishments" => Provider::all(),
            "categories" => Category::all(),
            'services' => ServiceOffer::where('provider_id', Auth::user()->id)->get(),
        ]);
    }
}
