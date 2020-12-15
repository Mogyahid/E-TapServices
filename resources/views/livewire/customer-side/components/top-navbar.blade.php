<div>
    <div class="px-15 flex justify-between items-center relative z-50" x-data="{ isAccountOpen : false, isNotificationOpen : false }">
        <div class="text-sm text-gray-500 space-x-2">
            <span>Call us now: (+63) 9123456789 |</span>
            <span>e-tapservices@gmail.com</span>
        </div>

            <div class="flex items-center space-x-5">
                <!-- Search here -->

                <!-- Notification -->
                <!-- My account -->
                @auth
                    <button class="relative" @click="isNotificationOpen = !isNotificationOpen">
                        <span class="bg-red-600 text-white absolute right-5 rounded-full text-xs w-5 h-5 p-1">0</span>
                        <span class="material-icons text-gray-600">notifications</span>
                    </button>
                    <button class="bg-blue-500 uppercase text-white py-3 px-7 flex items-center font-bold cursor-pointer" @click="isAccountOpen = !isAccountOpen">
                        <span>My Account</span>
                        <span class="material-icons">arrow_drop_down</span>
                    </button>
                @endauth
                @guest
                    <div class="flex items-center space-x-2">
                        <a href="{{ route('login') }}" class="bg-blue-500 uppercase text-white py-3 px-7 flex items-center font-bold cursor-pointer rounded">login to your account</a>
                        <a href="{{ route('register') }}" class="uppercase text-blue-500 border border-blue-500 my-1 py-3 px-7 flex items-center font-bold cursor-pointer rounded hover:bg-blue-500 hover:text-white">Register</a>
                    </div>
                @endguest
            </div>

            <!-- Notification Dropdown -->
            <div class="bg-white w-96 z-20 border rounded-md absolute right-32 top-10" x-show="isNotificationOpen" @click.away="isNotificationOpen = false">
                <h1 class="px-3 py-2 border-b-2 flex items-center"><span class="material-icons text-blue-500">notifications</span> Unread Notifications</h1>
                <ul>
                    <!-- <li class="px-3 py-2 hover:bg-gray-200 border-b-2">
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
                    </li> -->

                    <li class="py-5 text-center">
                        <span>You have 0 notification</span>
                    </li>

                </ul>
            </div>

            <!-- Account Dropdown -->
            <div class="bg-white border rounded-md z-20 absolute right-7 top-10 w-64" x-show="isAccountOpen" @click.away="isAccountOpen = false">
                    <ul>
                        <li class="py-5 px-5 hover:bg-gray-200"><a href="#" class="flex items-center space-x-2"><span class="material-icons">settings</span> <span>Account Settings</span></a></li>
                        <li class="py-5 px-5 hover:bg-gray-200">
                            <a href="{{ url('/logout') }}" class="flex items-center space-x-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <span class="material-icons">exit_to_app</span> 
                            <span>Logout</span></a>
                        </li>
                    </ul>
            </div>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
    </form>
</div>