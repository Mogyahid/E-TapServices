<?php

namespace App\Http\Livewire\AdminSide\Components;

use Livewire\Component;
use App\Models\ClientRequestService;
use App\Models\Provider;
use App\Models\User;
use App\Models\RequestItem;
use App\Notifications\RequestApproved; //Notification
use App\Events\ApprovedRequest; //Echo

class Requests extends Component
{
    public function render()
    {
        return view('livewire.admin-side.components.requests', [
            "pendingrequests" => ClientRequestService::where(["admin_confirm" => 0, "categoryadmin_confirm" => 0])->get(),
            "approvedrequests" => ClientRequestService::where(["admin_confirm" => 1, "categoryadmin_confirm" => 1])->get(),
        ]);
    }

    public function acceptRequest(ClientRequestService $client)
    {
        ClientRequestService::where(["id" => $client->id])->update(["admin_confirm" => 1]);
    }

    public function fullApproved(ClientRequestService $client)
    {
        ClientRequestService::where(["id" => $client->id])->update(["admin_confirm" => 1, "categoryadmin_confirm" => 1]);
        $service = ClientRequestService::find($client->id); # Getting the request information
        $user_id = Provider::find($service->provider_id);
        
        $items = RequestItem::where('request_id', $service->id)->get();
        $service->customer->notify(new RequestApproved($service, $user_id->establishment, $items));
        event(new ApprovedRequest);
        
        // dd($user_id->establishment); 
        // foreach($items as $item){
        //     dd($item->service_items);
        // }
        // dd($items->service_name); 

        // foreach($user_id as $provider){
        //     dd($provider->establishment);
        // }
        // $provider = User::where('id', $user_id->user_id)->get();
    }
}
