@section('title', 'Service Detail')

<div class="relative" x-data="{requestModal:@entangle('showModal'), requestSent:@entangle('showRequestSent'), changeAddress:@entangle('showChangeAddress')}">
    <livewire:customer-side.components.top-navbar />

    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />

    <!-- Main content -->
    <div class="md:px-15 px-7 my-7">
        <div class="flex">
            <div class="flex-1">
            @foreach($offerImages as $img)
                <div class="relative">
                    <img src="{{ asset('/storage/services/' . $img->image->url) }}" class="object-fill w-full md:h-96 h-36 rounded" alt="">
                    <!-- <button><span class="material-icons absolute top-7 right-7 text-white">favorite_border</span></button> -->
                    <!-- <button><span class="material-icons absolute top-7 right-7 text-red-500">favorite</span></button> -->
                </div>
            @endforeach
                <!-- Description -->
            <div class="md:mt-7 mt-3">
               <div>
                   <div class="leading-loose"> 
                        <h1 class="md:text-3xl text-xl uppercase font-black">Offered Services</h1>
                        <span class="md:text-l text-md text-gray-500">Choose services you want.</span>
                    </div>
                    <form class="mt-5">
                        <ul class="space-y-1">
                            @foreach($servicedetails as $key => $detail)
                                <li class="bg-gray-100 py-2 uppercase px-2 text-xl flex justify-between items-center pr-15 cursor-pointer border">
                                    <div>
                                        <input type="checkbox" id="service_name[{{$detail->id}}]" value="{{ $detail->id }}" wire:model="requestItems" class="service_name cursor-pointer">
                                        <label for="service_name[{{$detail->id}}]" class="font-medium cursor-pointer text-sm md:text-2xl"> {{ $detail->service_name }}</label><br>
                                    </div>
                                    <span class="font-medium text-sm md:text-2xl">&#8369 {{ number_format($detail->price, 2, '.', ',') }}</span>         
                                </li>
                            @endforeach
                            <li class="bg-blue-500 py-2 px-2 shadow text-white text-2xl flex justify-between items-center pr-15">
                                <div>
                                    <label class="font-medium uppercase text-sm md:text-2xl">Total Request Amount:</label><br>
                                </div>
                                <span class="font-medium text-white text-sm md:text-2xl" id="visibleTotalAmount">&#8369 {{ number_format($totalAmount, 2, '.', ',') }}</span>
                            </li>
                        </ul>
                    </form>
               </div>

               <div class="my-5 w-full space-x-3 flex justify-between">
                    <button class="bg-blue-500 text-white md:py-3 py-2 px-5 rounded-md font-medium uppercase text-xs md:text-xl hover:shadow" @click="requestModal = !requestModal" onClick="topFunction()">Continue Request</button>
                    <button class="border border-blue-500 text-blue-500 flex items-center md:py-3 py-2 md:px-5 px-3 rounded-md font-medium uppercase text-xs md:text-xl hover:shadow" @click="changeAddress = !changeAddress" onClick="topFunction()">
                        <span class="material-icons">location_on</span> 
                        <span> Change Delivery Address</span>
                    </button>
                </div>

                <div class="my-5">
                    <h1 class="md:text-3xl text-xl uppercase font-black">Description</h1>
                    @foreach($offerImages as $description)
                         <p class="text-justify md:text-xl text-md text-gray-700">{{ $description->service_description }}</p>
                    @endforeach
               </div>

                <div class="md:mt-32 mt-22">
                    <h1 class="md:text-xl uppercase font-black">Service Rating</h1>
                    <hr>
                    <div class="bg-blue-500">
                        <h1 class="text-white text-xl px-2 py-3"><span class="font-bold">4.5 out of 5</span> - 135 Reviews</h1>
                    </div>

                    <!-- Rated Customers -->
                    <div class="mt-5 space-y-3">
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-full w-17 h-17" alt="">
                            <div>
                                <h1 class="font-bold md:text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p class="text-sm">Comments here</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Other services from the same company -->
            {{-- <div class="h-4/6 overflow-y-auto">
                <h1 class="text-xl uppercase font-bold ml-3 text-white px-3 py-3 bg-blue-500">Other Services from the same Establishment</h1>
                <ul class="h-full ml-3 mt-5 space-y-2">
                    <li class="flex space-x-3 cursor-pointer border-b">
                        <img src="https://picsum.photos/50/50" class="object-cover border shadow rounded" alt="">
                        <div>
                            <div class="leading-6">
                                <h1 class="font-bold text-xl">Dump Truck for Rent</h1>
                                <p class="text-gray-700">Lucky J Hauling Corp.</p>
                            </div>
                            <span class="text-sm text-blue-500">(10 Requests)</span>
                        </div>
                    </li>
                </ul>
            </div> --}}
        </div>
    </div>
    
    <!-- Modal - Your request is being process -->
    <div class="bg-gray-800 bg-opacity-75 h-screen flex items-center justify-center absolute top-0 w-full z-50" x-show="requestSent">
        <div class="bg-white rounded-md h-2/5 w-2/5 text-center py-13">
            <div class="text-center">
                <span class="material-icons md-60 text-green">check_circle</span>
            </div>
            <div class="text-xl font-medium mb-7">
                <span class="font-bold">Your request is being process...</span><br>
                <span>You will receive a notification about your request.</span>
            </div>
            <a href="{{ route('home') }}" class="bg-blue-500 text-white py-2 hover:shadow w-80 px-10 font-medium text-2xl rounded-md" @click="requestSent = !requestSent">OK</a>
        </div>
    </div>
    
    <!-- Other Services -->
    {{-- <div class="px-15 mt-24">
        <h1 class="text-3xl uppercase font-black">Other Services</h1>
        <div class="mt-2 overflor-y-auto grid grid-cols-9 gap-2 space-x-3 mx-3">
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>


        </div>
    </div> --}}

    <!-- Apply as provider -->
    <livewire:customer-side.components.become-provider/>

    <!-- Footer -->
    <livewire:customer-side.components.footer />

    <!-- Request Modal -->
    <div class="absolute top-0 w-full z-50 h-screen bg-gray-500 bg-opacity-50 md:flex md:justify-center" x-show="requestModal">
        <div class="bg-white md:w-2/5 md:h-3/6 mx-5 h-3/5 mt-15 rounded-md shadow relative">
            <div class="bg-blue-500 text-white px-5 py-3 uppercase md:text-xl text-l rounded-tr-md rounded-tl-md flex justify-between">
                <span>Request Information</span>
                <button class="material-icons cursor-pointer md:text-xl text-l hover:bg-red-600" @click="requestModal = !requestModal" onclick="enableScroll()">close</button>
            </div>
            <div class="px-5 mt-3">
                @if(count($items) > 0)
                    <div class="my-2 h-3/5 relative">
                        <div class="mt-2">
                            <ul class="mt-3">                                
                                <li class="mt-2 flex items-center font-medium uppercase text-l justify-between bg-gray-100 border py-3 px-2">
                                    <span>Service Name</span>
                                    <span>Price</span>
                                </li>
                                    @foreach($items as $item)
                                        <li class="flex items-center font-medium uppercase text-l justify-between px-3 mt-3 text-blue-500">
                                            <span>{{ $item->service_name }}</span>
                                            <span>{{ number_format($item->price, 2, '.', ',') }}</span>
                                        </li>
                                    @endforeach
                            </ul>
                        </div>
                        <div class="mt-2 font-bold flex items-center w-full uppercase text-l justify-between bg-blue-300 border py-3 px-2 absolute bottom-3">
                                <span>Total Amount</span>
                                <span>{{ number_format($totalAmount, 2, '.', ',') }}</span>
                        </div>
                    </div> 
                  <div class="absolute bottom-5 left-0 right-0 mx-7">
                        <span class="font-medium uppercase text-xl mb-2">Pick Delivery Date:</span>
                        <div class="flex items-center space-x-3">
                            <div class="w-full">
                                <?php
                                    $date = date("Y-m-d", strtotime("+1 days"));
                                ?>
                                <input type="date" class="border px-3 py-3 w-full rounded focus:shadow @error('deliveryDate') border-red-600 focus @enderror" min="{{$date}}" id="deliveryDate" wire:model="deliveryDate">
                                @error('deliveryDate')
                                        <p class="text-sm italic text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            <button class="bg-blue-500 text-white py-4 hover:shadow px-3 w-64 rounded uppercase" wire:click.prevent="sendRequest()">Continue</button>      
                        </div>
                  </div>
                @else
                    <div class="md:h-5/6 h-5/6 w-full text-center mb-2 bg-gray-300 flex items-center justify-center border bg-opacity-25 rounded-md">
                        <div class="mx-7">
                            <h1 class="md:text-xl uppercase font-medium">It seems that you forgot to choose service(s)</h1>
                            <span class="text-sm font-mediumd text-gray-500">Choose at least one (1) service before you can continue.</span>
                        </div>
                    </div> 
                @endif
            </div>
        </div>
    </div>

        <!-- Change Address Modal -->
        <div class="absolute top-0 w-full z-50 h-screen bg-gray-500 bg-opacity-50 flex justify-center" x-show="changeAddress">
        <div class="bg-white md:w-2/6 md:h-3/6 w-full mt-10 mx-4 h-3/6 rounded-md shadow relative">
            <div class="bg-blue-500 text-white px-5 py-3 uppercase md:text-xl text-sm rounded-tr-md rounded-tl-md flex justify-between">
                <span>Change Delivery Information</span>
                <span class="material-icons cursor-pointer hover:bg-red-600" @click="changeAddress = !changeAddress" onClick="enableScroll()" wire:click="resetControl()">close</span>    
            </div>
            
            <div class="mx-7 mt-3">
                <div class="flex flex-col">
                    <label for="province" class="font-medium uppercase mb-1">Province</label>
                    <select name="province" id="province" wire:model="province" class="border py-2 px-2 rounded shadow">
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
                <div class="flex flex-col mt-3">
                    <label for="city" class="font-medium uppercase mb-1">City</label>
                    <select name="province" id="province" wire:model="city" class="border py-2 px-2 rounded shadow">
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
                <div class="flex flex-col mt-3">
                    <label for="barangay" class="font-medium uppercase mb-1">Barangay</label>
                    <select name="province" id="province" wire:model="barangay" class="border py-2 px-2 rounded shadow">
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
                    </select>
                </div>
                <div class="flex flex-col mt-3">
                    <label for="barangay" class="font-medium uppercase mb-1">Street Address</label>
                    <input type="text" class="border py-2 px-3 rounded shadow" wire:model="street" placeholder="Street or Barangay">
                </div>
                <div class="flex justify-between mt-3">
                    <div></div>
                    <button class="bg-blue-500 text-white py-2 uppercase px-5 rounded hover:shadow text-xl" @click="changeAddress = !changeAddress" onClick="enableScroll()">Save Delivery Address</button>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- <div class="h-4/5 w-full text-center bg-gray-300 mt-3 flex items-center justify-center border bg-opacity-25 rounded-md">
    <div>
        <h1 class="text-xl uppercase font-medium">It seems that you forgot to choose service(s)</h1>
        <span class="text-sm font-mediumd text-gray-500">Choose at least one (1) service before you can continue.</span>
    </div>
</div> -->