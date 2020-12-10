<div class="relative h-screen">
    <div class="px-10 py-7">
        <div >
            <div class="flex justify-between items-center">
                        <h1 class="font-black uppercase text-2xl">Service Management</h1>
                        <button class="flex items-center focus:outline-none hover:bg-blue-500 border border-blue-500 space-x-2 px-3 py-2 text-blue-500 hover:text-white rounded-md hover:shadow" @click="categoryDialog = !categoryDialog">
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
                                <th class="py-3 uppercase font-medium">Establishment / Providers</th>
                                <th class="py-3 uppercase font-medium">Category</th>
                                <th class="py-3 uppercase font-medium">Sub-Service</th>
                                <th class="py-3 uppercase font-medium">Price (Php)</th>
                                <th class="py-3 uppercase font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td><img src="https://picsum.photos/50/50" class="rounded-md shadow" alt=""></td>
                                <td>Mogyahid Ansid - Ansid's Laundry Shop</td>
                                <td>Laundry</td>
                                <td>Handwash, Washin Machine</td>
                                <td>500.00</td>
                                <td>Delete</td>
                            </tr>

                            <tr class="bg-white border-b">
                                <td class="py-5 text-center text-red-600 font-medium" colspan="6">No Service Found!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-gray-600 absolute top-0 h-full w-full flex justify-center bg-opacity-50">
        <div class="bg-white rounded-md h-5/6 shadow w-3/5 my-5">
            <div class="bg-blue-500 text-center py-3 text-white uppercase font-medium rounded-tr-md rounded-tl-md flex justify-between items-center px-5">
                <span></span>
                <span>Add Services</span>
                <button class="pt-2 focus:outline-none">
                    <span class="material-icons">close</span>
                </button>
            </div>

            <div class="p-7 relative">
                <div class="grid grid-cols-2 gap-3">
                    <!-- <img src="https://picsum.photos/80/80" class="rounded-md" alt=""> -->
                    <div class="flex flex-col">
                        <label for="" class="font-medium">Choose Service Image</label>
                        <input type="file" class="border p-2 rounded-md">
                    </div>

                    <div class="flex flex-col w-full">
                        <label for="" class="font-medium">Establishement Name</label>
                        <select name="" id="" class="border px-2 py-3 rounded-md w-full">
                            <option value="">One</option>
                            <option value="">One</option>
                            <option value="">One</option>
                            <option value="">One</option>
                        </select>
                    </div>
                </div>

                <div class="mt-3">
                    <label for="" class="font-medium">Choose Category</label>
                    <select name="" id="" class="border px-2 py-3 rounded-md w-full">
                            <option disabled selected>Please select category</option>
                            <option value="">One</option>
                            <option value="">One</option>
                            <option value="">One</option>
                            <option value="">One</option>
                    </select>
                </div>

                <div class="my-3 bg-gray-100 rounded px-3 flex flex-col h-64 overflow-y-auto relative">
                    <div>
                        <div class='flex space-x-7 pt-2 px-3  sticky top-0 w-full bg-gray-100'>
                            <label for="" class="font-medium flex-1">Service Name</label>
                            <label for="" class="font-medium flex-1">Price in Peso</label>
                        </div>

                        <div class="space-y-1">
                            <div>
                                <div class='flex space-x-2'>
                                    <input type="text" class="flex-1 border px-2 py-3 rounded-md" placeholder="Enter service name">
                                    <div class="flex flex-1">
                                        <input type="number" class="border px-2 py-3 rounded-tl-md rounded-bl-md flex-1 focus:outline-none" placeholder="Enter price">
                                        <button class="inline px-2 text-white rounded-tr-md rounded-br-md bg-red-600 flex-none hover:shadow-md"><span class="material-icons">close</span></button>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                <div class="sticky bottom-0">
                    <button class="bg-blue-500 py-2 px-5 mt-2 rounded-md text-white">Add Service Offer</button>
                </div>
            </div>
            <div class="mt-3">
                <label for="" class="font-medium">Service Description</label>
                <!-- <div id="editor-container" >
                </div> -->

                <textarea class="border rounded-md w-full p-3" rows="5"></textarea>
            </div>

            <div class="mt-1">
                <button class="bg-blue-500 px-3 py-2 mt-2 rounded-md text-white w-36">Save Service</button>
            </div>
        </div>
    </div>
</div>