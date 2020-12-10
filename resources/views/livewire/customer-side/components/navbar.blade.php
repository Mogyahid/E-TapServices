<div>
    <!-- Top Section -->
    <div class="px-15 flex justify-between items-center relative" x-data="{ isAccountOpen : false, isNotificationOpen : false }">
            <div class="text-sm text-gray-500 space-x-2">
                <span>Call us now: (+63) 9123456789 |</span>
                <span>e-tapservices@gmail.com</span>
            </div>

            <div class="flex items-center space-x-5">
                <!-- Search here -->
                <!-- Notification -->
                <button class="relative" @click="isNotificationOpen = !isNotificationOpen">
                    <span class="bg-red-600 text-white absolute right-5 rounded-full text-xs w-5 h-5 p-1">1</span>
                    <span class="material-icons text-gray-600">notifications</span>
                </button>
                <!-- My account -->
                <button class="bg-blue-500 uppercase text-white py-3 px-7 flex items-center rounded font-bold" @click="isAccountOpen = !isAccountOpen">My Account <span class="material-icons"> arrow_drop_down</span></button>
                <!-- <button class="hover:text-blue-500"><a href="#" class="hover:bg-blue-500 border-2 border-blue-500 hover:text-white text-blue-500 px-5 py-2 rounded-full">Register</a></button>  -->
            </div>

            <!-- Notification Dropdown -->
            <div class="bg-white w-80 z-20 border rounded-md absolute right-32 top-10" x-show="isNotificationOpen" @click.away="isNotificationOpen = false">
                <h1 class="px-3 py-2 border-b-2 flex items-center"><span class="material-icons text-blue-500">notifications</span> Unread Notifications</h1>
                <ul>
                    <li class="px-3 py-2 hover:bg-gray-200 border-b-2">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://picsum.photos/40/40" class="rounded-md" alt="Notification image">
                            <div>
                                <h1 class="font-bold text-l">From: Provider</h1>
                                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit ...</p>
                            </div>
                        </a>
                    </li>

                    <li class="px-3 py-2 hover:bg-gray-200 border-b-2">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://picsum.photos/40/40" class="rounded-md" alt="Notification image">
                            <div>
                                <h1 class="font-bold text-l">From: Provider</h1>
                                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit ...</p>
                            </div>
                        </a>
                    </li>

                    <li class="px-3 py-2 hover:bg-gray-200 border-b-2">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://picsum.photos/40/40" class="rounded-md" alt="Notification image">
                            <div>
                                <h1 class="font-bold text-l">From: Provider</h1>
                                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit ...</p>
                            </div>
                        </a>
                    </li>

                    <li class="px-3 py-2 hover:bg-gray-200 border-b-2">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://picsum.photos/40/40" class="rounded-md" alt="Notification image">
                            <div>
                                <h1 class="font-bold text-l">From: Provider</h1>
                                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit ...</p>
                            </div>
                        </a>
                    </li>

                    <li class="px-3 py-2 hover:bg-gray-200">
                        <a href="#" class="flex items-center space-x-2">
                            <img src="https://picsum.photos/40/40" class="rounded-md" alt="Notification image">
                            <div>
                                <h1 class="font-bold text-l">From: Provider</h1>
                                <p class="text-sm text-gray-500">Lorem ipsum, dolor sit ...</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Account Dropdown -->
            <div class="bg-white border rounded-md z-20 absolute right-7 top-10" x-show="isAccountOpen" @click.away="isAccountOpen = false">
                    <ul>
                        <li class="py-3 px-5 hover:bg-gray-200 flex items-center"><a href="#"><span class="material-icons">settings</span> <span>Account Settings</span></a></li>
                        <li class="py-3 px-5 hover:bg-gray-200"><a href="#"><span class="material-icons">exit_to_app</span> <span>Logout</span></a></li>
                    </ul>
            </div>
    </div>

    <!-- Bottom Section -->
    <div class="relative">
        <div class="border-t-2 px-15 flex justify-between items-center relative">
                <!-- Logo Here -->
                <a href="#"><img src="{{ asset('logo/final-logo.jpg') }}" alt="Logo" class="w-32 object-cover"></a>
                <!-- Components -->
                <ul class="flex space-x-5 items-center uppercase text-xl">
                    <li class="hover:text-blue-500 flex items-center">
                        <a href="#">Categories</a>
                        <span class="material-icons">expand_more</span>
                    </li>
                    <li class="hover:text-blue-500"><a href="#">About us</a></li>
                    <li class="hover:text-blue-500"><a href="#">Contact us</a></li>
                    <li class="hover:text-blue-500"><a href="#" class="border border-blue-500 px-3 py-2 text-blue-500 rounded hover:bg-blue-500 hover:text-white">Apply as Provider</a></li>
                </ul>
        </div>

        <!-- <div class="bg-red-500 border h-screen shadow w-full absolute bottom-0 top-16 z-10 px-10 py-7 flex">
            <a href="#" class="flex-initial flex border-2 border-gray-300 p-0 justify-start rounded-md space-x-2 hover:bg-blue-500 hover:shadow-md hover:text-white">
                <img src="https://picsum.photos/50/50" alt="Notification image" class="rounded-tl-md rounded-bl-md">
                <div class="flex flex-col justify-center">
                    <span class="text-l font-bold">Category 1</span>
                    <span class="text-sm text-gray-400 hover:text-white">354 Providers</span>
                </div>
            </a>
            <a href="#" class="flex-initial flex border-2 border-gray-300 p-0 justify-start rounded-md space-x-2 hover:bg-blue-500 hover:shadow-md hover:text-white">
                <img src="https://picsum.photos/50/50" alt="Notification image" class="rounded-tl-md rounded-bl-md">
                <div class="flex flex-col justify-center">
                    <span class="text-l font-bold">Category 1</span>
                    <span class="text-sm text-gray-400 hover:text-white">354 Providers</span>
                </div>
            </a>
        </div> -->
    </div>
</div>
