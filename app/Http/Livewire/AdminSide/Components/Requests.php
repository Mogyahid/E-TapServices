<?php

namespace App\Http\Livewire\AdminSide\Components;

use Livewire\Component;
use App\Models\ClientRequestService;

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
    }
}
