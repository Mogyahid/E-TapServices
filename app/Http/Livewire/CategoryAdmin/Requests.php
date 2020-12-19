<?php

namespace App\Http\Livewire\CategoryAdmin;

use Livewire\Component;
use App\Models\ClientRequestService;
use App\Notifications\RequestApproved; //Notification
use App\Events\ApprovedRequest; //Echo
use Auth;

class Requests extends Component
{
    public function render()
    {
        return view('livewire.category-admin.requests', [
            "pendingRequests" => ClientRequestService::where(["category_id" => Auth::user()->category_id, "admin_confirm" => 1, "categoryadmin_confirm" => 0])->get(),
        ]);
    }

    public function approveRequest($id)
    {
        $request = ClientRequestService::where("id", $id)->update(["categoryadmin_confirm" => 1]);
        $service = ClientRequestService::find($id); # Getting the request information
        // dd($service->customer);
        $service->customer->notify(new RequestApproved($service));
        event(new ApprovedRequest);
    }
}
