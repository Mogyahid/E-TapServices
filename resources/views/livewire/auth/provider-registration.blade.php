@section('title', 'Provider Registration')
<div class="bg-red-600">
    <div class="bg-gradient-to-r from-blue-600 to-blue-400 h-screen p-0 bg-opacity-25">
    <!-- style="background-image: url('logo/Logo.png'); background-repeat: no-repeat; background-size: cover" -->
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        </div>
    
        <div class="flex h-screen w-screen justify-center items-center">
            <div class="h-6/6 w-5/6 bg-white shadow-md">
                <!-- <div class="border-r-2 border-blue-500">
                    <img class="object-cover w-80 object-left h-full" src="https://images.pexels.com/photos/5410082/pexels-photo-5410082.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                </div> -->
                <div class="p-7 flex-1">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-footer text-2xl">Register as Provider</h1>
                        <div class="rounded-full">
                            <a href="{{ route('login') }}" class="px-5 py-2 border-2 border-blue-500 hover:bg-blue-500 hover:shadow-md text-blue-500 hover:text-white rounded-full uppercase">I have an account</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="flex-col flex">
                                <label for="firstname" class="dium">First Name</label>
                                <input type="text" placeholder="Enter your first name" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:shadow focus:border-blue-500 @error('firstname') border-red-600 focus @enderror" autofocus wire:model="firstname">
                                @error('firstname')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="middlename" class="font-medium">Middle Name (optional)</label>
                                <input type="text" placeholder="Enter your middle name" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500" wire:model="middlename">
                            </div>

                            <div class="flex-col flex">
                                <label for="lastname" class="font-medium">Last Name</label>
                                <input type="text" placeholder="Enter your last name" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('lastname') border-red-600 focus @enderror" wire:model="lastname">
                                @error('lastname')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="gender" class="font-medium">Gender</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-md w-full focus:border-blue-500 @error('gender') border-red-600 focus @enderror" wire:model="gender">
                                    <option selected>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="dob" class="font-medium">Date of Birth</label>
                                <input type="date" placeholder="Enter your valid email address" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('dob') border-red-600 focus @enderror" wire:model="dob">
                                @error('dob')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="email" class="font-medium">Email Address</label>
                                <input type="email" placeholder="Enter your valid email address" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('email') border-red-600 focus @enderror" wire:model="email">
                                @error('email')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="password" class="font-medium">Password</label>
                                <input type="password" placeholder="Password must be 8 characters and above" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('password') border-red-600 focus @enderror" wire:model="password">
                                @error('password')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex-col flex">
                                <label for="establishment" class="font-medium">Establishment Name</label>
                                <input type="text" placeholder="Enter establishment name" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('establishment') border-red-600 focus @enderror" wire:model="establishment">
                                @error('establishment')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="flex-col flex">
                                <label for="province" class="font-medium">Select Province</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-md w-full focus:border-blue-500 @error('province') border-red-600 focus @enderror" wire:model="province">
                                    <option selected>Select Province</option>
                                    @foreach ($provinces as $province)
                                        <option value="{{$province->provCode}}">{{$province->provDesc}}</option>
                                    @endforeach
                                        <input type="hidden" value="{{$province_value}}">

                                    </select>
                                    @error('province')
                                        <p class="text-md italic text-red-600">{{ $message }}</p>
                                    @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="city" class="font-medium">Select City</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-md w-full focus:border-blue-500 @error('city') border-red-600 focus @enderror" wire:model="city">
                                    @if(count($cities) > 0)
                                        @foreach ($cities as $city)
                                            <option value="{{$city->citymunCode}}">{{$city->citymunDesc}}</option>
                                        @endforeach
                                        <input type="hidden" value="{{$city_value}}">
                                    @else
                                        <option selected>Select your province first</option>
                                    @endif
                                </select>

                                @error('city')
                                    <p class="text-md italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="barangay" class="font-medium">Select Barangay</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-md w-full focus:border-blue-500 @error('barangay') border-red-600 focus @enderror" wire:model="barangay">
                                    @if(count($barangays) > 0)
                                        @foreach ($barangays as $brgy)
                                            <option value="{{$brgy->brgyCode}}">{{$brgy->brgyDesc}}</option>
                                        @endforeach
                                        <input type="hidden" value="{{$brgy_value}}">

                                    @else
                                        <option selected>Select your city first</option>
                                    @endif
                                </select>

                                @error('barangay')
                                    <p class="text-md italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="flex-col flex">
                                <label for="street" class="font-medium">Purok / Street / Subdivision</label>
                                <input type="text" placeholder="Purok / Street / Subdivision" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('street') border-red-600 focus @enderror" wire:model="street">
                                @error('street')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="contactno" class="font-medium">Contact Number</label>
                                <input type="number" placeholder="Enter establishment name" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('contactNo') border-red-600 focus @enderror" wire:model="contactNo">
                                @error('contactNo')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex-col flex">
                                <label for="confirm_password" class="font-medium">Confirm Password</label>
                                <input type="password" placeholder="Password must be 8 characters and above" class="border px-3 py-2 focus:outline-none rounded-md text-md focus:border-blue-500 @error('passwordConfirmation') border-red-600 focus @enderror" wire:model="passwordConfirmation">
                                @error('passwordConfirmation')
                                    <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Bottom section -->
                    <div class="mt-5 flex items-center justify-between">
                        <p>By clicking register button, you are agree to our <br><a href="#" class="text-blue-500 hover:underline">Terms and Conditions</a> and <a href="#" class="text-blue-500 hover:underline">Service Policy</a>.</p>
                        <button wire:click="register()" class="uppercase px-10 py-3 rounded-full hover:shadow-md bg-gradient-to-r from-blue-600 to-blue-400 items-center bg-blue-500 text-white flex w-46 space-x-2 mb-3 float-right">
                            <span>Register</span>
                            <span class="material-icons md-18">east</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
