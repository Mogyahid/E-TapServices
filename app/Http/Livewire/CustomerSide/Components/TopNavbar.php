<?php

namespace App\Http\Livewire\CustomerSide\Components;

use Livewire\Component;
use Auth;

class TopNavbar extends Component
{
    public $user_id;
    public $notif_counter;

    public function mount()
    {
        $this->user_id = Auth::user()->id;
    }
    public function getListeners()
    {
        return [
            "echo-private:users.{$this->user_id},.Illuminate\Notifications\Events\BroadcastNotificationCreated" => 'requestApproved',
        ];
    }


    public function render()
    {
        $this->notif_counter = Auth::user()->unreadNotifications->count();
        return view('livewire.customer-side.components.top-navbar',[
            "unread" => Auth::user()->unreadNotifications,
        ]);
    }

    public function requestApproved()
    {
       
    }
}

