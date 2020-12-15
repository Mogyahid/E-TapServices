<div class="flex-1 mx-7 py-5">
        <h1 class="font-black uppercase text-2xl">Provider Management</h1>

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
                            <th class="py-3 uppercase font-medium pl-3">Provider Information</th>
                            <th class="py-3 uppercase font-medium">Address</th>
                            <th class="py-3 uppercase font-medium">Establishment</th>
                            <th class="py-3 uppercase font-medium">Approve?</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pending_providers as $pending)
                        <tr class="bg-white hover:bg-gray-100 border-b">
                            <td class="font-medium pl-2 py-3 ">
                                <span class="uppercase font-bold">{{ $pending->lastname }}, {{ $pending->firstname}}</span>
                                <span class="text-gray-500">- {{ $pending->contact_no }}</span>
                            </td>
                            <td class="py-3 font-medium">
                                {{ $pending->address->street }}, {{ $pending->address->barangay }}, {{ $pending->address->city }}, {{ $pending->address->province }}
                            </td>
                            <td class="py-3 uppercase font-medium">{{ $pending->provider->establishment }}</td>
                            <td class="py-3 uppercase font-medium flex space-x-2">
                                <button class="hover:text-white text-blue-500 hover:bg-blue-500 p-2 rounded-md hover:shadow-md flex items-center space-x-2" wire:click="approve({{ $pending->id }})">
                                    <span class="material-icons text-sm">thumb_up</span>
                                    <span>Approve</span>
                                </button>
                                <button class="hover:text-white text-red-600 hover:bg-red-600 p-2 rounded-md hover:shadow-md flex items-center space-x-2">
                                    <span class="material-icons text-sm">thumb_down</span>
                                    <span>Decline</span>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                        <tr class="bg-white border-b">
                            <td class="py-3 text-center text-red-600 font-medium" colspan="4">No Providers Found!</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Approved Providers -->
            <div class="mt-7" x-data="{showApprovedProviders:false}">
                <div class="font-bold uppercase text-xl bg-blue-500 text-white py-2 px-5 my-2 flex justify-between items-center hover:shadow-md">
                    <span>Approved Providers</span>
                    <button class="material-icons cursor-pointer hover:shadow hover:bg-white rounded hover:text-footer" x-show="showApprovedProviders" @click="showApprovedProviders = !showApprovedProviders">
                        keyboard_arrow_down
                    </button>
                    <button class="material-icons cursor-pointer hover:shadow hover:bg-white rounded hover:text-footer" x-show="!showApprovedProviders" @click="showApprovedProviders = !showApprovedProviders">
                        keyboard_arrow_up
                    </button>
                </div>
                    <div class="bg-gray-200 p-2" x-show="!showApprovedProviders">
                        <table class="w-full border">
                            <thead>
                                <tr class="text-left bg-gray-400 text-white">
                                    <th class="py-3 uppercase font-medium pl-3">Provider Information</th>
                                    <th class="py-3 uppercase font-medium">Address</th>
                                    <th class="py-3 uppercase font-medium">Establishment</th>
                                    <th class="py-3 uppercase font-medium">Date Approved</th>
                                </tr>
                            </thead>
                            <tbody>
                            @if(count($approved_providers) > 0)
                                @foreach($approved_providers as $approved)
                                    <tr class="bg-white hover:bg-gray-100 border-b">
                                        <td class="font-medium pl-2 py-3 ">
                                            <span class="uppercase font-bold">{{ $approved->lastname }}, {{ $approved->firstname}}</span>
                                            <span class="text-gray-500">- {{ $approved->contact_no }}</span>
                                        </td>
                                        <td class="py-3 font-medium">
                                            {{ $approved->address->street }}, {{ $approved->address->barangay }}, {{ $approved->address->city }}, {{ $approved->address->province }}
                                        </td>
                                        <td class="py-3 uppercase font-medium">{{ $approved->provider->establishment }}</td>
                                        <td class="py-3 uppercase font-medium flex space-x-2">
                                            {{ now()->toFormattedDateString($approved->created_at) }}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="bg-white border-b">
                                    <td class="py-3 text-center text-red-600 font-medium" colspan="4">No Provider Found!</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

    </div>