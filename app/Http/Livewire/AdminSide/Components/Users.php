<?php

namespace App\Http\Livewire\AdminSide\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Users extends Component
{
    use WithPagination;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.admin-side.components.users', [
            'users' => User::where(["role_id" => 4])
                ->where("firstname", 'like', '%'.$this->search.'%')
                ->paginate(20),
        ]);
    }
}
