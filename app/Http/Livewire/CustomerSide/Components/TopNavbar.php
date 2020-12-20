<?php

namespace App\Http\Livewire\CustomerSide\Components;

use Livewire\Component;
use Auth;

class TopNavbar extends Component
{
    public $user_id;
    public $notif_counter;
    public $unread;

    public function mount()
    {
        if(Auth::check()){
            $this->user_id = Auth::user()->id;
        }
    }
    public function getListeners()
    {
        return [
            "echo-private:users.{$this->user_id},.Illuminate\Notifications\Events\BroadcastNotificationCreated" => 'requestApproved',
        ];
    }


    public function render()
    {
        if(Auth::check()){
            $this->notif_counter = Auth::user()->unreadNotifications->count();
            $this->unread = Auth::user()->unreadNotifications;
        }
        return view('livewire.customer-side.components.top-navbar');
    }

    public function requestApproved()
    {
       
    }
}

