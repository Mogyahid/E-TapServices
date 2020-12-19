<?php

namespace App\Http\Livewire\CustomerSide;

use Livewire\Component;
use App\Models\ServiceItem;
use App\Models\ServiceOffer;
use App\Models\Image;
use App\Models\ClientRequestService;
use App\Models\RequestItem;
use App\Models\Address;
use Auth;
use DB;

class ServiceDetail extends Component
{
    public $requestItems = [];
    public $totalAmount = 00.00;
    public $service_id;
    public $category_id;
    public $image_id;
    public $items = [];
    public $service_item;
    public $service_price;
    public $showModal = false;
    public $showRequestSent = false;
    public $address= '';
    public $deliveryDate;
    public $transaction_code;

    public function mount(ServiceOffer $reqservice)
    {
        $this->service_id = $reqservice->id;
        // $this->category_id = $cat_id; //Pass with reqservice
    }
    
    public function render()
    {
        // dd(session()->pull("cat_id"));
        // dd($this->category_id);
        // Get the user address

        $this->address = Address::where('user_id', Auth::user()->id)->get();
        $this->items = collect();
        foreach($this->requestItems as $req_id){
            $this->items->push(ServiceItem::find($req_id));
        }
        $this->totalAmount = $this->items->sum('price');

        return view('livewire.customer-side.service-detail', [
            "servicedetails" => ServiceItem::where('service_id', $this->service_id)->get(),
            "getDescriptions" => ServiceItem::where('id', $this->service_id)->get(),
            "offerImages" => ServiceOffer::where('id', $this->service_id)->get(),
            $this->items
        ]);
    }

    public function sendRequest()
    {
        $requestCount = ClientRequestService::all();
        $this->transaction_code = now()->format('Ydm');

        if($requestCount->count() <= 0){
            $this->transaction_code = ("T1"."-".$this->transaction_code);
        }
        else{
            $this->transaction_code = ("T".$requestCount->count()."-".$this->transaction_code);
        }

        $this->validate([
            'deliveryDate' => ['required']
        ]);

        foreach($this->address as $add){
            $this->address = ($add->street .", ". $add->barangay .", ". $add->city .", ". $add->province);
        }
        $req = ClientRequestService::create([
            'transaction_code' => $this->transaction_code,
            'category_id' => session()->pull("cat_id"),
            'customer_id' => Auth::id(),
            'serviceOffer_id' => $this->service_id,
            'totalAmount' => $this->totalAmount,
            "delivery_address" => $this->address,
            'delivery_date' => $this->deliveryDate,
        ]);
       
        foreach($this->items as $item){
            RequestItem::create([
                'request_id' => $req->id,
                'transaction_code' => $this->transaction_code ,
                'service_items' => $item["service_name"],
                'price' => $item["price"],
            ]);
        }
        $this->showModal = false;
        $this->showRequestSent = true;

        # Incremenet no of service request
        ServiceOffer::where('id', $this->service_id)
            ->update([
            'no_requests'=> DB::raw('no_requests+1'), 
        ]);
    }
}
