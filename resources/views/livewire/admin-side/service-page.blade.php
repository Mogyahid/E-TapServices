<div class="relative h-screen" x-data="{serviceDialog:@entangle('showServiceDialog') }">
    <div class="px-10 py-7">
        <div >
            <div class="flex justify-between items-center">
                        <h1 class="font-black uppercase text-2xl">Service Management</h1>
                        <button class="flex items-center focus:outline-none hover:bg-blue-500 border border-blue-500 space-x-2 px-3 py-2 text-blue-500 hover:text-white rounded-md hover:shadow" @click="serviceDialog = !serviceDialog">
                            <span class="material-icons">control_point</span>
                            <span>Add Service</span>
                        </button>
                    </div>
            
            <div class="mt-1">
                <div class="w-full my-3">
                    <div class="rounded-md w-full flex justify-between border items-center px-3">
                        <input type="text" placeholder="Enter keyword..." class="py-3 w-full focus:outline-none">
                        <button class="flex justify-between items-center "><span class="material-icons">search</span></button>
                    </div>
                </div>

                <div class="mt-2 bg-gray-200 p-2">
                    <table class="w-full border">
                        <thead>
                            <tr class="text-left bg-blue-500 text-white">
                                <th class="py-3 uppercase font-medium pl-3">Image</th>
                                <th class="py-3 uppercase font-medium">Establishment</th>
                                <th class="py-3 uppercase font-medium">Category</th>
                                <th class="py-3 uppercase font-medium">Sub-Service</th>
                                <th class="py-3 uppercase font-medium">Price (Php)</th>
                                <th class="py-3 uppercase font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($services) > 0)
                                @foreach($services as $service)
                                    <tr class="bg-white border-b hover:bg-gray-100">
                                        <td><img src="{{ asset('/storage/services/' .$service->image->url) }}" class="object-cover h-15 ml-1 rounded-md w-15 shadow" alt=""></td>
                                        <td>
                                            <span class="font-bold">{{ $service->provider->establishment }}</span>
                                        </td>
                                        <td>{{ $service->category->name }}</td>
                                        <td>
                                            @foreach($service->serviceItem as $item)
                                                {{ $item->service_name }}<br>
                                            @endforeach
                                        </td>
                                        <td class="font-medium">
                                            @foreach($service->serviceItem as $item)
                                                {{ number_format($item->price, 2) }}<br>
                                            @endforeach
                                        </td>
                                        <td>
                                            <button class="hover:bg-blue-500 hover:text-white text-blue-500 p-1 hover:shadow-md material-icons rounded-md align-middle" wire:click="" @click="">edit</button>
                                            <button class="hover:bg-red-600 hover:text-white text-red-600 p-1 hover:shadow-md material-icons rounded-md align-middle" wire:click="deleteService({{ $service->id }})">delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="bg-white border-b">
                                        <td class="py-5 text-center text-red-600 font-medium" colspan="6">No Service Found!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

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
                            <label for="" class="font-medium">Establishement Name</label>
                            <select class="border px-2 py-3 rounded-md w-full" wire:model="establishment">
                                @if(count($providers) > 0)
                                    <option selected class="text-gray-400">Please select provider</option>
                                    @foreach($providers as $service_provider)
                                        <option value="{{ $service_provider->provider->id }}">{{$service_provider->provider->establishment}}</option>
                                    @endforeach
                                @else
                                    <option selected class="text-gray-400">No Provider in the list</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-2 gap-3 mt-3">
                        <div>
                            <label for="" class="font-medium">Choose Category</label>
                            <select name="" id="" class="border px-2 py-3 rounded-md w-full" wire:model="categoryID">
                                    <option selected>Please select category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                            </select>
                        </div>
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
