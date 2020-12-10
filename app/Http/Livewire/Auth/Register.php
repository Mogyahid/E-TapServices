<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use DB;
use App\Models\customer;

class Register extends Component
{
    public $firstname, $middlename, $lastname, $gender, $dob, $email, $password, $province, $city, $barangay, $street, $contactNo, $passwordConfirmation;

    // public $province;
    public $cities = [];
    // public $city;
    public $barangays = [];
    // public $barangay;

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'firstname' => ['required'],
            'middlename' => ['string'],
            'lastname' => ['required'],
            'gender' => ['required'],
            'dob' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'street' => ['required'],
            'contactNo' => ['required', 'max:11', 'min:11']
        ]);
    }
    public function register()
    {

        $this->validate([
            'firstname' => ['required'],
            'middlename' => ['string'],
            'lastname' => ['required'],
            'gender' => ['required'],
            'dob' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'street' => ['required'],
            'contactNo' => ['required', 'max:11', 'min:11']
        ]);

        $user = User::create([
            'firstname' => $this->firstname,
            'contact_no' => $this->contactNo,
            'email' => $this->email,
            'city' => $this->city,
            'password' => Hash::make($this->password),
        ]);
        

        $provider = Customer::create([
            'firstname' => $this->firstname,
            'middlename' => $this->middlename,
            'lastname' => $this->lastname,
            'gender'=> $this->gender,
            'dob' => $this->dob,
        ]);

        Auth::login($user, true);


        event(new Registered($user));

        return redirect()->intended(route('home'));
    }

    public function render()
    {   
        if(!empty($this->province)){
            $this->cities = DB::table('refcitymun')->where('provCode', $this->province)->orderBy('citymunDesc', 'Asc')->get();
            if(!empty($this->city)){
                $this->barangays = DB::table('refbrgy')->where('citymunCode', $this->city)->orderBy('brgyDesc', 'Asc')->get();
            }
        }
        return view('livewire.auth.register', [
            "provinces" => DB::table('refprovince')->orderBy('provDesc', 'Asc')->get(),
        ])->extends('layouts.auth');
    }
}
