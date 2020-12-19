<div class="px-32 mt-7 mx-5">
    <div class="flex justify-between">
        <h1 class="font-black uppercase text-2xl">Service Management</h1>
        <button class="flex items-center bg-blue-500 space-x-2 px-3 py-2 text-md text-white rounded-md hover:shadow" @click="serviceDialog = !serviceDialog">
            <span class="material-icons">control_point</span>
            <span>Add Services</span>
        </button>
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
                    <th class="py-3 uppercase font-medium pl-3">Image</th>
                    <th class="py-3 uppercase font-medium">Category</th>
                    <th class="py-3 uppercase font-medium">Service Offer</th>
                    <th class="py-3 uppercase font-medium"># of Requests</th>
                    <th class="py-3 uppercase font-medium">Price (Php)</th>
                    <th class="py-3 uppercase font-medium">Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($services) > 0)
                    @foreach($services as $service)
                        <tr class="bg-white hover:bg-gray-100 border-b">
                            <td class="uppercase font-medium pl-1 py-1">
                                <img src="https://picsum.photos/50/50" class="rounded-md shadow" alt="">
                            </td>
                            <td class="py-3 uppercase font-medium"></td>
                            <td class="py-3 uppercase font-medium">Bedroom Cleaning</td>
                            <td class="py-3 uppercase font-medium">0</td>
                            <td class="py-3 uppercase font-medium">560.00</td>
                            <td class="py-3 uppercase font-medium">
                                <button class="text-white bg-blue-500 px-2 rounded-md hover:shadow-md py-2"><span class="material-icons text-md">edit</span></button>
                                <button class="text-white bg-red-600 px-2 rounded-md hover:shadow-md py-2"><span class="material-icons text-md">delete</span></button>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center py-3" colspan="6">No Service Yet</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>