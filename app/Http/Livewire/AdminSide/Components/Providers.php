<?php

namespace App\Http\Livewire\AdminSide\Components;

use Livewire\Component;
use App\Models\User;

use Carbon\Carbon;

class Providers extends Component
{
    public function render()
    {
        return view('livewire.admin-side.components.providers', [
            "pending_providers" => User::where(["isProviderConfirmed" => 0, 'role_id' => 3])->get(),
            "approved_providers" => User::where(["isProviderConfirmed" => 1, 'role_id' => 3])->get(),
        ]);
    }

    public function approve($id)
    {
        $approve = User::where('id', $id)->update(['isProviderConfirmed' => 1]);
    }
}
