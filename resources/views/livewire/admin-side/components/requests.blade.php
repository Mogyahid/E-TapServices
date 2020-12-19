<div class="flex-1 mx-7 py-5">
        <h1 class="font-black uppercase text-2xl">Pending Requests</h1>

        <div class="mt-1">
            <div class="w-full my-3">
                <div class="rounded-md w-full flex justify-between border items-center px-3">
                    <input type="text" placeholder="Enter keyword..." class="py-2 w-full focus:outline-none">
                <button class="flex justify-between items-center "><span class="material-icons">search</span></button>
                </div>
            </div>

            <div class="mt-2">
                <table class="w-full border">
                    <thead>
                        <tr class="text-left bg-blue-500 text-white">
                            <th class="py-3 uppercase font-medium pl-3">Customer Info</th>
                            <th class="py-3 uppercase font-medium">Establishment / Provider</th>
                            <th class="py-3 uppercase font-medium">Category</th>
                            <th class="py-3 uppercase font-medium">Avail. Services</th>
                            <th class="py-3 uppercase font-medium">Price (Php)</th>
                            <!-- <th class="py-3 uppercase font-medium">Delivery Address</th> -->
                            <th class="py-3 uppercase font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(count($pendingrequests) > 0)
                        @foreach($pendingrequests as $request)
                            <tr class="bg-white hover:bg-gray-100 border-b">
                                <td class="uppercase font-medium pl-1 py-1">
                                    <!-- {{ $request}} -->
                                </td>
                                <td class="py-3 font-medium flex flex-col">
                                @dump($request->user)
                                    <span class="uppercase">{{ $request->provider }}</span>
                                    <span class="text-sm text-gray-400">Ansid, Mogyahid - 09357788005</span>
                                </td>
                                <td class="py-3 font-medium flex flex-col">
                                    <span class="uppercase">Ansid's Laundry Shop</span>
                                    <span class="text-sm text-gray-400">Ansid, Mogyahid - 09357788005</span>
                                </td>
                                <td class="py-3 uppercase font-medium"></td>
                                <td class="py-3 uppercase font-medium">Bedroom Cleaning</td>
                                <td class="py-3 uppercase font-medium">{{ number_format($request->totalAmount, 2, '.', ',') }}</td>
                                <!-- <td class="py-3 uppercase font-medium text-sm">{{ $request->delivery_address}}</td> -->
                                <td class="uppercase font-medium flex space-x-2 align-middle">
                                    <button class="text-white bg-blue-500 px-2 py-2 rounded-md hover:shadow-md flex items-center space-x-2" wire:click="acceptRequest({{$request->id}})">
                                        <span class="material-icons text-sm">thumb_up</span>
                                        <span>Accept</span>
                                    </button>
                                    <button class="text-white bg-red-600 px-2 py-2 rounded-md hover:shadow-md flex items-center space-x-2">
                                        <span class="material-icons text-sm">thumb_down</span>
                                        <span>Decline</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center py-3 text-red-500" colspan="6">No Request Found!</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Accepted Requests -->
        <h1 class="font-black text-footer mt-5 uppercase text-2xl px-3 py-2 bg-orange-500 bg-opacity-25">Accepted Requests</h1>
        <div>
            <div class="w-full mb-3 mt-1">
                <div class="rounded-md w-full flex justify-between border items-center px-3">
                    <input type="text" placeholder="Enter keyword..." class="py-2 w-full focus:outline-none">
                <button class="flex justify-between items-center "><span class="material-icons">search</span></button>
                </div>
            </div>

            <div class="mt-2">
                <table class="w-full border">
                    <thead>
                        <tr class="text-left bg-blue-500 text-white">
                            <th class="py-3 uppercase font-medium pl-3">Image</th>
                            <th class="py-3 uppercase font-medium">Establishment / Provider</th>
                            <th class="py-3 uppercase font-medium">Category</th>
                            <th class="py-3 uppercase font-medium">Avail. Services</th>
                            <th class="py-3 uppercase font-medium">Price (Php)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($approvedrequests) > 0)
                            @foreach($approvedrequests as $request)
                                <tr class="bg-white hover:bg-gray-100 border-b">
                                    <td class="uppercase font-medium pl-1 py-1">
                                        <img src="https://picsum.photos/50/50" class="rounded-md shadow" alt="">
                                    </td>
                                    <td class="py-3 font-medium flex flex-col">
                                        <span class="uppercase">Ansid's Laundry Shop</span>
                                        <span class="text-sm text-gray-400">Ansid, Mogyahid - 09357788005</span>
                                    </td>
                                    <td class="py-3 uppercase font-medium"></td>
                                    <td class="py-3 uppercase font-medium">Bedroom Cleaning</td>
                                    <td class="py-3 uppercase font-medium">{{ number_format($request->totalAmount, 2, '.', ',') }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center py-3 text-red-500" colspan="6">No Request Found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>