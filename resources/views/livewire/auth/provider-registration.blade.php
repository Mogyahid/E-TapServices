@section('title', 'Provider Registration')
<div class="bg-red-600">
    <div class="bg-gradient-to-r from-blue-600 to-blue-400 h-screen p-0 bg-opacity-25">
    <!-- style="background-image: url('logo/Logo.png'); background-repeat: no-repeat; background-size: cover" -->
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
        </div>
    
        <div class="flex h-screen w-screen justify-center items-center">
            <div class="h-5/5 flex w-4/5 bg-white shadow-md">
                <div class="border-r-2 border-blue-500">
                    <img class="object-cover w-80 object-left h-full" src="https://images.pexels.com/photos/5410082/pexels-photo-5410082.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                </div>
                <div class="p-7 flex-1">
                    <div class="flex justify-between items-center mb-3">
                        <h1 class="font-bold text-footer text-2xl">Register as Provider</h1>
                        <div class="rounded-full">
                            <a href="{{ route('login') }}" class="px-5 py-2 border-2 border-blue-500 hover:bg-blue-500 hover:shadow-md text-blue-500 hover:text-white rounded-full">Login instead</a>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-3">
                            <div class="flex-col flex">
                                <label for="firstname" class="dium">First Name</label>
                                <input type="text" placeholder="Enter your first name" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:shadow focus:border-blue-500" autofocus>
                            </div>

                            <div class="flex-col flex">
                                <label for="middlename" class="font-medium">Middle Name (optional)</label>
                                <input type="text" placeholder="Enter your middle name" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="lastname" class="font-medium">Last Name</label>
                                <input type="text" placeholder="Enter your last name" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="gender" class="font-medium">Gender</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-sm w-full focus:border-blue-500">
                                    <option disabled selected>Select Gender</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="flex-col flex">
                                <label for="dob" class="font-medium">Date of Birth</label>
                                <input type="date" placeholder="Enter your valid email address" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="email" class="font-medium">Email Address</label>
                                <input type="email" placeholder="Enter your valid email address" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="password" class="font-medium">Password</label>
                                <input type="password" placeholder="Password must be 8 characters and above" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex-col flex">
                                <label for="establishment" class="font-medium">Establishment Name</label>
                                <input type="text" placeholder="Enter establishment name" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="province" class="font-medium">Select Province</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-sm w-full focus:border-blue-500">
                                    <option disabled selected>Select Province</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="flex-col flex">
                                <label for="city" class="font-medium">Select City</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-sm w-full focus:border-blue-500">
                                    <option disabled selected>Select City</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="flex-col flex">
                                <label for="barangay" class="font-medium">Select Barangay</label>
                                <select name="" id="" class="border px-3 py-2 focus:outline-none rounded-md text-sm w-full focus:border-blue-500">
                                    <option disabled selected>Select Barangay</option>
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                </select>
                            </div>

                            <div class="flex-col flex">
                                <label for="street" class="font-medium">Purok / Street / Subdivision</label>
                                <input type="text" placeholder="Purok / Street / Subdivision" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="contactno" class="font-medium">Contact Number</label>
                                <input type="number" placeholder="Enter establishment name" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>

                            <div class="flex-col flex">
                                <label for="confirm_password" class="font-medium">Confirm Password</label>
                                <input type="confirm_password" placeholder="Password must be 8 characters and above" class="border px-3 py-2 focus:outline-none rounded-md text-sm focus:border-blue-500">
                            </div>
                        </div>
                    </div>

                    <!-- Bottom section -->
                    <div class="mt-5 flex items-center justify-between">
                        <p>By clicking register button, you are agree to our <br><a href="#" class="text-blue-500 hover:underline">Terms and Conditions</a> and <a href="#" class="text-blue-500 hover:underline">Service Policy</a>.</p>
                        <a href="#" class="px-10 py-3 rounded-full hover:shadow-md bg-gradient-to-r from-blue-600 to-blue-400 items-center bg-blue-500 text-white flex w-46 space-x-2 mb-3 float-right">
                            <span>Register</span>
                            <span class="material-icons md-18">east</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
