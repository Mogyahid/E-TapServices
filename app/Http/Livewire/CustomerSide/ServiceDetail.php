<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\ServiceItem;

class ServiceDetail extends Component
{
    public $service_id;
    public function mount(ServiceOffer $service)
    {
        $this->service_id = $service->id;
    }
    public function render()
    {
        return view('livewire.customer-side.service-detail', [
            "servicedetails" => ServiceItem::where('id', $this->service_id)->get()
        ]);
    }
}
