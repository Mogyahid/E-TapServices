<div class="px-32 mt-7 mx-5">
    <div>
        <h1 class="font-black uppercase text-2xl">Requests Management</h1>
    </div>

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
                    <th class="py-3 uppercase font-medium pl-3">Code</th>
                    <th class="py-3 uppercase font-medium">Service Name</th>
                    <th class="py-3 uppercase font-medium">Service Avail</th>
                    <th class="py-3 uppercase font-medium">Price (Php)</th>
                    <th class="py-3 uppercase font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($pendingRequests) > 0)
                    @foreach($pendingRequests as $request)
                        <tr class="bg-white hover:bg-gray-100 border-b">
                            <td class="uppercase font-medium pl-1 py-1">
                                {{  $request->transaction_code }}
                            </td>
                            <td class="py-3 uppercase font-medium">{{ $request->serviceOffer->name }}</td>
                            <td class="py-3 font-medium">
                                @foreach($request->requestItems as $items)
                                    {{$items->service_name}}<br>
                                @endforeach
                            </td>
                            <td class="py-3 uppercase font-medium">{{ number_format($request->totalAmount, 2, '.', ',') }}</td>
                            <td class="py-3 uppercase font-medium">
                                <button class="hover:text-white text-blue-500 hover:bg-blue-500 p-2 rounded-md hover:shadow-md flex items-center space-x-2" wire:click="approveRequest({{ $request->id }})">
                                    <span class="material-icons text-sm">thumb_up</span>
                                    <span>Approve</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center py-3" colspan="6">No request Yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>