<div>
    <div class="px-10 py-7">
        <div >
            <h1 class="font-black uppercase text-2xl">User Management</h1>

            <div class="mt-3">
                <div class="w-full my-3">
                    <div class="rounded-md w-full flex justify-between border items-center px-3 shadow-md">
                        <input type="text" placeholder="Enter keyword..." class="py-3 w-full focus:outline-none" wire:model="search">
                        <button class="flex justify-between items-center hover:text-blue-500 text-gray-500"><span class="material-icons">search</span></button>
                    </div>
                </div>
            </div>
            <div class="mt-2 bg-gray-200 p-1">
                <table class="w-full border relative stripe">
                    <thead>
                        <tr class="text-left bg-blue-500 text-white">
                            {{-- <th class="py-3 uppercase font-medium pl-3">Image</th> --}}
                            <th class="py-3 px-5 uppercase font-medium">Client Name</th>
                            <th class="py-3 uppercase font-medium">Contact No.</th>
                            <th class="py-3 uppercase font-medium">Address</th>
                            <th class="py-3 uppercase font-medium">No. of Requests</th>
                            <th class="py-3 uppercase font-medium">Amount Spent</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($users) > 0)
                            @foreach($users as $user)
                            <tr class="bg-white hover:bg-gray-100 border-b">
                                <td class="uppercase font-medium pl-1 py-2">
                                    {{ $user->firstname }} {{ $user->lastname }}
                                </td>
                                <td class="uppercase font-medium pl-1 py-1">
                                    {{ $user->contact_no }}
                                </td>
                                <td class="font-medium pl-1 py-1">
                                    {{ $user->address->barangay }}, {{ $user->address->street }}, {{ $user->address->city }}, {{ $user->address->province }}
                                </td>
                                <td class="uppercase font-medium pl-1 py-1">
                                    0
                                </td>
                                <td class="uppercase font-medium pl-1 py-1">
                                    {{number_format(00, 2)}}
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr class="bg-white border-b">
                                <td colspan="5" class="py-3 font-medium text-center text-red-600 text-xl">No Category Found!</td>
                            </tr>
                        @endif
                        <div class="bg-gray-500 bg-opacity-25 flex top-0 items-center justify center py-2 px-3 w-full" wire:loading wire:target="search">
                            <span>
                                Processing... Please wait <i class="fas fa-spinner fa-pulse"></i>
                            </span>
                        </div>
                    </tbody>
                </table>
                <div class="p-2">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
