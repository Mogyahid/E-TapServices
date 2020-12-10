<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ProviderRegistration extends Component
{
    public $response;
    public function render()
    {
        return view('livewire.auth.provider-registration');
    }
}
