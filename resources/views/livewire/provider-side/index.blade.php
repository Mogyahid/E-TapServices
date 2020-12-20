@section('title', 'Dashboard')
<div class="bg-white h-screen relative" x-data="{isAccountOpen:false, serviceDialog:@entangle('showServiceDialog')}">
    <div class="bg-white flex justify-between px-15 items-center py-2 shadow-md">

        <!-- Logo -->
        <div>
            <img src="{{ asset('/logo/Logo.png') }}" alt="" class="w-36">
        </div>

        <!-- Buttons -->
        <div>
            <ul class="flex space-x-7">
                <li class="flex space-x-2 items-center uppercase">
                    <span class="material-icons">dashboard</span>
                    <a href="#">Dashboard</a>
                </li>
                <li class="flex hover:text-blue-500 space-x-2 items-center uppercase">
                    <span class="material-icons align-middle">autorenew</span> 
                    <a href="#">Requests</a>
                </li>
                <li class="flex text-blue-500 space-x-2 items-center uppercase">
                    <span class="material-icons align-middle">drag_indicator</span> 
                    <a href="#">Services</a>
                </li>
            </ul>
        </div>

        <!-- Account Settings -->
        <button class=" focus:outline-none" @click="isAccountOpen = !isAccountOpen">
            <div class="flex space-x-2 items-center">
                <img src="{{ asset('/logo/user-default.jpg') }}" class="rounded-full w-13 shadow" alt="">
                <div class="leading-5 text-left flex items-center">
                    <h1 class="font-semibold">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h1>
                    <span class="material-icons text-gray-500">arrow_drop_down</span>
                </div>
            </div>
        </button>
    </div>

    <!-- Account Dropdown -->
    <div class="bg-white border rounded-md z-20 absolute right-7 top-10 w-64" x-show="isAccountOpen" @click.away="isAccountOpen = false">
        <ul>
            <li class="py-5 px-5 hover:bg-gray-200"><a href="#" class="flex items-center space-x-2"><span class="material-icons">settings</span> <span>Account Settings</span></a></li>
            <li class="py-5 px-5 hover:bg-gray-200">
                <a href="{{ url('/logout') }}" class="flex items-center space-x-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <span class="material-icons">exit_to_app</span> 
                <span>Logout</span></a>
            </li>
        </ul>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>

    <livewire:provider-side.components.services/>

    <div class="bg-gray-600 absolute top-0 h-full w-full flex justify-center bg-opacity-50" x-show="serviceDialog">
        <div class="bg-white rounded-md h-5/6 shadow w-3/5 my-5" x-show="serviceDialog">
            <div class="bg-blue-500 text-center py-3 text-white uppercase font-medium rounded-tr-md rounded-tl-md flex justify-between items-center px-5">
                <span></span>
                <span>Add Services</span>
                <button class="pt-2 focus:outline-none" @click="serviceDialog = !serviceDialog">
                    <span class="material-icons">close</span>
                </button>
            </div>

            <form wire:submit.prevent="saveService" id="upload{{ $iteration }}">
                <div class="p-7 relative">
                    <div class="grid grid-cols-2 gap-3">
                        <div class="flex flex-col">
                            <label for="" class="font-medium">Choose Service Image</label>
                            <input type="file" class="border p-2 rounded-md" wire:model="service_image">
                        </div>

                        <div class="flex flex-col w-full">
                            <label for="" class="font-medium">Choose Category</label>
                            <select name="" id="" class="border px-2 py-3 rounded-md w-full" wire:model="categoryID">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-3">
                        <div class="flex flex-col">
                            <label for="" class="font-medium">Service Title / Name</label>
                            <input wire:model.lazy="service_name" type="text" class="border px-2 py-3 rounded-tl-md rounded-bl-md flex-1 focus:outline-none" placeholder="Enter service title or name"/>
                        </div>
                    </div>

                    <div class="my-3 bg-gray-100 rounded px-3 flex flex-col h-64 overflow-y-auto relative">
                        <div>
                            <div class='flex space-x-7 pt-2  sticky top-0 w-full bg-gray-100'>
                                <label class="font-medium flex-1">Service Name</label>
                                <label class="font-medium flex-1">Price in Peso</label>
                            </div>

                            <div class="space-y-1">
                                @foreach ($servicesOffer as $index => $service_item)
                                    <div>
                                        <div class='flex space-x-2'>
                                        <input type="text" class="flex-1 border px-2 py-3 rounded-md" 
                                            placeholder="Enter service name" 
                                            wire:model="servicesOffer.{{$index}}.name">

                                            <div class="flex flex-1">
                                                <input type="number" class="border px-2 py-3 rounded-tl-md rounded-bl-md flex-1 focus:outline-none" 
                                                placeholder="Enter price" 
                                                wire:model="servicesOffer.{{$index}}.price">
                                                <button class="inline px-2 text-white rounded-tr-md rounded-br-md bg-red-600 flex-none hover:shadow-md"
                                                        wire:click.prevent="removeServiceOffer({{$index}})">
                                                    <span class="material-icons">close</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                        </div>
                    <div class="sticky bottom-0">
                        <button class="bg-blue-500 py-2 px-5 mt-2 rounded-md text-white" wire:click.prevent="addServiceOffer">Add Service Offer</button>
                    </div>
                </div>
                <div class="mt-3">
                    <label for="" class="font-medium">Service Description</label>

                    <textarea class="border rounded-md w-full p-3" rows="5" wire:model="description"></textarea>
                </div>

                <div class="mt-1">
                    <button type="submit" class="bg-blue-500 px-3 py-2 mt-2 rounded-md text-white w-36">Save Service</button>
                </div>

            </form>
        </div>
    </div>
</div>
