<?php

namespace App\Http\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Livewire\Component;
use App\Models\User;
use App\Models\Address;
use App\Models\Provider;
use DB;

class ProviderRegistration extends Component
{
    public $response;
    
    public $firstname, $middlename, $lastname, $gender, $dob, $email, $password, $establishment, $province = 1265, $city, $barangay, $street, $contactNo, $passwordConfirmation;
    public $province_value, $city_value, $brgy_value;

    public $cities = [];
    public $barangays = [];

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
            'establishment' => ['required','string'],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'street' => ['required'],
            'contactNo' => ['required', 'digits:11', 'unique:users,contact_no'],
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
            'establishment' => ['required','string'],
            'province' => ['required'],
            'city' => ['required'],
            'barangay' => ['required'],
            'street' => ['required'],
            'contactNo' => ['required', 'digits:11', 'unique:users,contact_no'],
        ]);

            $user = User::create([
                'firstname' => $this->firstname,
                'contact_no' => $this->contactNo,
                'email' => $this->email,
                'city' => $this->city_value,
                'password' => Hash::make($this->password),
            ]);

            $user->update(['role_id' => 3]);
    
            $user_id = $user->id;
        
            $provider = Provider::create([
                'user_id' => $user_id, //Last inserted id in the user table
                'middlename' => $this->middlename,
                'gender'=> $this->gender,
                'dob' => $this->dob,
                'establishment' => $this->establishment,
            ]);
    
        # Customer Address
        $address = Address::create([
            'user_id' => $user_id,
            'province' => $this->province_value,
            'city' => $this->city_value,
            'barangay' => $this->brgy_value,
            'street' => $this->street,
        ]);

        return redirect()->route("registrationFeedback");
    }
    
    public function render()
    {
        if(!empty($this->province)){
            //Converting the provCode to provDesc
            $this->province_value = DB::table('refprovince')->select('provDesc')->where('provCode', $this->province)->get();
            foreach($this->province_value as $prov){
                $this->province_value = $prov->provDesc;
            }

            $this->cities = DB::table('refcitymun')->where('provCode', $this->province)->orderBy('citymunDesc', 'Asc')->get();

            //Converting the citymunCode to citymunDesc
            $this->city_value = DB::table('refcitymun')->select('citymunDesc')->where('citymunCode', $this->city)->get();
            foreach($this->city_value as $city){
                $this->city_value = $city->citymunDesc;
            }

            if(!empty($this->city)){
                $this->barangays = DB::table('refbrgy')->where('citymunCode', $this->city)->orderBy('brgyDesc', 'Asc')->get();

                //Converting the citymunCode to citymunDesc
                $this->brgy_value = DB::table('refbrgy')->select('brgyDesc')->where('brgyCode', $this->barangay)->get();
                foreach($this->brgy_value as $brgy){
                    $this->brgy_value = $brgy->brgyDesc;
                }
            }
        }
        return view('livewire.auth.provider-registration', [
            "provinces" => DB::table('refprovince')->orderBy('provDesc', 'Asc')->get(),
        ]);
    }
}
