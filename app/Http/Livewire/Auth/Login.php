<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];
    
    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));
        }
        else{
            switch (Auth::user()->role_id) {
                case 1:
                    return redirect()->route('admin.dashboard');
                    break;
                case 2:
                    return redirect()->route('categoryAdmin.dashboard');
                    break;
                case 3:
                    return redirect()->route('provider.dashboard');
                    break;
                case 4:
                    return redirect()->route('home');
                    break;
                
                default:
                    return redirect()->route('login');
                    break;
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
