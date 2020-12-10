@section('title', 'Cleaning Dashboard')
<div class="bg-white h-screen relative">
    <div class="bg-white flex justify-between px-15 items-center py-2 shadow-md">

        <!-- Logo -->
        <div>
            Logo
        </div>

        <!-- Buttons -->
        <div>
            <ul class="flex space-x-7">
                <li class="flex text-blue-500 space-x-2">
                    <span class="material-icons">dashboard</span>
                    <a href="#">Dashboard</a>
                </li>
                <li class="hover:text-blue-500"><a href="#">Requests</a></li>
                <li class="hover:text-blue-500"><a href="#">Services</a></li>
            </ul>
        </div>

        <!-- Account Settings -->
        <button class=" focus:outline-none">
            <div class="flex space-x-2 items-center">
                <img src="https://picsum.photos/40/40" class="rounded-full" alt="">
                <div class="leading-5 text-left">
                    <h1 class="font-semibold">Juan Tamad</h1>
                    <p class="text-gray-400 text-xs">Cleaning Admin</p>
                </div>
                <span class="material-icons text-gray-500">arrow_drop_down</span>
            </div>
        </button>
    </div>

    <livewire:provider-side.components.services/>

    <div class="bg-gray-600 absolute top-0 h-screen w-full flex justify-center bg-opacity-50">
        <div class="bg-white rounded-md shadow w-3/5 my-5">
            <div class="bg-blue-500 text-center py-3 text-white uppercase font-medium rounded-tr-md rounded-tl-md flex justify-between items-center px-5">
                <span></span>
                <span>Add Services</span>
                <button class="pt-2 focus:outline-none">
                    <span class="material-icons">close</span>
                </button>
            </div>

            <div class="p-7">
                <div class="grid grid-cols-2 gap-3">
                    <!-- <img src="https://picsum.photos/80/80" class="rounded-md" alt=""> -->
                    <div class="flex flex-col">
                        <label for="" class="font-medium">Choose Service Image</label>
                        <button class="border px-2 text-white py-2 rounded-md">
                            <input type="file">
                        </button>
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

                <div class="my-3 bg-gray-100 rounded p-3 flex flex-col">
                    <div>
                        <div class='flex space-x-7'>
                            <label for="" class="font-medium flex-1">Service Name</label>
                            <label for="" class="font-medium flex-1">Price in Peso</label>
                        </div>

                        <div class="">
                            <div class='flex space-x-2'>
                                <input type="text" class="flex-1 border px-2 py-3 rounded-md" placeholder="Enter service name">
                                <div class="flex flex-1">
                                    <input type="number" class="border px-2 py-3 rounded-tl-md rounded-bl-md flex-1 focus:outline-none" placeholder="Enter price">
                                    <button class="inline pt-2 px-2 text-white rounded-tr-md rounded-br-md bg-red-600 flex-none py"><span class="material-icons">close</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <button class="bg-blue-500 px-1 py-2 mt-2 rounded-md text-white w-24">Add Row</button>
            </div>
            <div class="mt-5">
                <label for="" class="font-medium">Service Description</label>
                <div id="quill_editor">
                    You can write your description here... Please replace these texts
                </div>
            </div>

            <div class="mt-3">
                <button class="bg-blue-500 px-3 py-2 mt-2 rounded-md text-white w-36">Save Service</button>
            </div>
        </div>
    </div>
</div>
