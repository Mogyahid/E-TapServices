@section('title', 'Service Detail')

<div class="relative">
    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />

    <!-- Main content -->
    <div class="px-15 my-7">
        <div class="flex">
            <div class="flex-1">
                    <!-- Service name -->
                    <!-- <h1 class="text-2xl bg-blue-500 font-bold text-white py-2 px-5 uppercase mb-2 rounded">Service Images</h1> -->
                    <!-- Image here -->
                    <div class="relative">
                        <img src="https://picsum.photos/500/400" class="object-cover w-full h-96 rounded" alt="">
                        <!-- <button><span class="material-icons absolute top-7 right-7 text-white">favorite_border</span></button> -->
                        <button><span class="material-icons absolute top-7 right-7 text-red-500">favorite</span></button>
                    </div>
                <!-- Description -->
            <div class="mt-7">
               <div>
                   <div class="leading-7"> 
                        <h1 class="text-3xl uppercase font-black">Offered Services</h1>
                        <span class="text-l text-gray-500">Please choose services you want.</span>
                    </div>
                    
                    <form class="mt-5">
                        <ul class="space-y-1">
                            <li class="bg-gray-100 py-2 uppercase px-2 text-xl flex justify-between items-center pr-15 cursor-pointer">
                                <div>
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1" class="font-medium"> Backhoe 1 for Rent</label><br>
                                </div>
                                <span class="font-medium text-blue-500">Php 500.00</span>
                            </li>
                            <li class="bg-gray-100 py-2 uppercase px-2 text-xl flex justify-between items-center pr-15 cursor-pointer">
                                <div>
                                    <input type="checkbox" id="vehicle2" name="vehicle1" value="Bike">
                                    <label for="vehicle2" class="font-medium"> Backhoe 2 for Rent</label><br>
                                </div>
                                <span class="font-medium text-blue-500">Php 500.00</span>
                            </li>
                            <li class="bg-gray-100 py-2 uppercase px-2 text-xl flex justify-between items-center pr-15 cursor-pointer">
                                <div>
                                    <input type="checkbox" id="vehicle3" name="vehicle1" value="Bike">
                                    <label for="vehicle3" class="font-medium"> Backhoe 3 for Rent</label><br>
                                </div>
                                <span class="font-medium text-blue-500">Php 500.00</span>
                            </li>
                            <li class="bg-blue-500 py-2 px-2 shadow text-white text-2xl flex justify-between items-center pr-15">
                                <div>
                                    <label class="font-bold uppercase"> Total Amount:</label><br>
                                </div>
                                <span class="font-bold text-white">Php 500.00</span>
                            </li>
                        </ul>
                    </form>
               </div>

               <div>
                    <h1 class="text-3xl uppercase font-black mt-5">Description</h1>
                    <p class="text-justify mr-10 text-xl text-gray-700">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore illum delectus dolorum dignissimos, 
                        deserunt recusandae odio soluta animi saepe veniam blanditiis assumenda fugit at hic corrupti provident dolorem reprehenderit rem!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore illum delectus dolorum dignissimos, 
                        deserunt recusandae odio soluta animi saepe veniam blanditiis assumenda fugit at hic corrupti provident dolorem reprehenderit rem!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore illum delectus dolorum dignissimos, 
                        deserunt recusandae odio soluta animi saepe veniam blanditiis assumenda fugit at hic corrupti provident dolorem reprehenderit rem!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore illum delectus dolorum dignissimos, 
                        deserunt recusandae odio soluta animi saepe veniam blanditiis assumenda fugit at hic corrupti provident dolorem reprehenderit rem!
                    </p>
               </div>

               <div class="mt-5 w-full space-x-3 flex">
                    <button class="bg-blue-500 text-white py-3 px-5 rounded-md font-medium uppercase text-xl hover:shadow">Continue Request</button>
                    <button class="border border-blue-500 text-blue-500 flex items-center py-3 px-5 rounded-md font-medium uppercase text-xl hover:shadow">
                        <span class="material-icons">location_on</span> 
                        <span> Change Delivery Address</span>
                    </button>
                </div>

                <div class="mt-32">
                    <h1 class="text-3xl uppercase font-black mt-5">Service Rating</h1>
                    <hr>
                    <div class="bg-blue-500">
                        <h1 class="text-white text-xl px-2 py-3"><span class="font-bold">4.5 out of 5</span> - 135 Reviews</h1>
                    </div>

                    <!-- Rated Customers -->
                    <div class="mt-5 space-y-3">
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <img src="https://picsum.photos/70/70" class="object-cover rounded-md" alt="">
                            <div>
                                <h1 class="font-bold text-xl">Jane Doe</h1>
                                <!-- Star -->
                                <div>
                                    <?php
                                        for ($x = 1; $x <= 5; $x++) {
                                        echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                        }
                                    ?>
                                </div>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum autem explicabo optio, temporibus enim magni!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <!-- Other services from the same company -->
            <div class="h-4/6 overflow-y-auto">
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
            </div>
        </div>
    </div>
    
    <!-- Modal - Your request is being process -->
    <div class="bg-gray-800 bg-opacity-75 h-screen flex items-center justify-center absolute top-0 w-full z-20 hidden">
        <div class="bg-white rounded-md h-2/5 w-2/5 text-center py-13">
            <div class="text-center">
                <span class="material-icons md-60 text-green">check_circle</span>
            </div>
            <div class="text-xl font-medium">
                <span class="font-bold">Your request is being process...</span><br>
                <span>You will receive a notification about your request.</span>
            </div>
            <button class="mt-7 bg-blue-500 text-white py-2 hover:shadow w-64 font-medium text-2xl rounded-md">OK</button>
        </div>
    </div>
    
    <!-- Other Services -->
    <div class="px-15 mt-24">
        <h1 class="text-3xl uppercase font-black">Other Services</h1>
        <div class="mt-2 overflor-y-auto grid grid-cols-9 gap-2 space-x-3 mx-3">
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
            <a href="#">
                <img src="https://picsum.photos/120/120" class="rounded-md" alt="">
                <div class="mt-2 leading-5">
                    <h1 class="font-bold text-l">Car Rental</h1>
                    <span class="text-gray-700 text-sm">34 Requests</span>
                </div>
            </a>
        </div>
    </div>
    <!-- Apply as provider -->
    <div class="px-15 flex justify-between py-7 my-5 mt-10 items-center">
        <div>
            <span class="text-gray-60 text-xl underline">Apply as provider</span> 
            <h1 class="text-blue-500 font-bold text-4xl">Become our service provider</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam est nihil officiis, id in praesentium.</p>
        </div>

        <div>
            <a href="#" class="bg-blue-500 text-white px-5 py-4 rounded hover:shadow-md">
                Find out more
            </a>
        </div>
    </div>
    <!-- Footer -->
    <livewire:customer-side.components.footer />
</div>