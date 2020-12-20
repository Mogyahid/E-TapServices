@section('title', 'Admin Dashboard')
<div class="flex relative" x-data="{ page:'dashboard', isLarge:false }">
    <div class="h-screen bg-blue-500 py-5 sticky left-0 top-0 bottom-0" x-show="isLarge">
        <div class="text-white  px-5 mb-5">
            <div class="flex justify-between item-center">
                <button class="focus:outline-none -rotate-180 transform" x-show="isLarge" @click="isLarge =!isLarge"><span class="material-icons">menu_open</span></button>
            </div>
        </div>

        <div class="mt-7 text-white text-center">
            <ul class="space-y-7">
                <li class="bg-white text-blue-500 py-3">
                    <button class="focus:outline-none" @click="page = 'dashboard'">
                        <span class="material-icons align-middle">dashboard</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'request'">
                        <span class="material-icons align-middle">autorenew</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'categories'">
                        <span class="material-icons align-middle">format_align_left</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'providers'">
                        <span class="material-icons align-middle">business_center</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'services'">
                        <span class="material-icons align-middle">drag_indicator</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button  class=" items-center focus:outline-none" @click="page = 'advertisement'">
                        <span class="material-icons align-middle">amp_stories</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'user'">
                        <span class="material-icons align-middle">social_distance</span> 
                    </button>
                </li>
                <li><hr></li>
                <li class="hover:text-gray-300">
                    <button class="items-center focus:outline-none" @click="page = 'settings'">
                        <span class="material-icons align-middle">settings</span> 
                    </button>
                </li>
                <li class="hover:text-gray-300">
                    <a href="{{ url('/logout') }}" class="flex justify-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class=" items-center focus:outline-none">
                        <span class="material-icons" align-middle>exit_to_app</span> 
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- Width = 64 -->
    <div class="w-64 h-screen bg-blue-500 py-5 sticky left-0 top-0 bottom-0" x-show="!isLarge">
        <div class="text-white  px-5 mb-5">
            <div class="flex justify-between item-center">
                <span class="font-black text-xl">E-TAP</span>
                <button class="focus:outline-none" x-show="!isLarge" @click="isLarge =!isLarge"><span class="material-icons">menu_open</span></button>
            </div>
        </div>

        <div class="mt-7 text-white">
            <ul>
                <li class="bg-white text-blue-500 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'dashboard'">
                        <span class="material-icons">dashboard</span> 
                        <span>Dashboard</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'request'">
                        <span class="material-icons">autorenew</span> 
                        <span>Requests</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'categories'">
                        <span class="material-icons">format_align_left</span> 
                        <span>Category List</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'providers'">
                        <span class="material-icons">business_center</span> 
                        <span>Providers</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'services'">
                        <span class="material-icons">drag_indicator</span> 
                        <span>Services</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button  class="flex space-x-3 items-center focus:outline-none" @click="page = 'advertisement'">
                        <span class="material-icons">amp_stories</span> 
                        <span>Carousel</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'user'">
                        <span class="material-icons">social_distance</span> 
                        <span>Users</span>
                    </button>
                </li>
                <li><hr></li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <button class="flex space-x-3 items-center focus:outline-none" @click="page = 'settings'">
                        <span class="material-icons">settings</span> 
                        <span>Settings</span>
                    </button>
                </li>
                <li class="hover:text-gray-300 px-3 py-3">
                    <a href="{{ url('/logout') }}" class="space-x-3 flex items-center" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"  class="flex space-x-3 items-center focus:outline-none">
                        <span class="material-icons">exit_to_app</span> 
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>

    <!-- Right Side -->

    <!-- Requests List -->

    <!-- Category List -->
    <div x-show="page === 'dashboard'" class="w-full">   
        <livewire:admin-side.components.dashboard />
    </div>
    <div x-show="page === 'request'" class="w-full">
        <livewire:admin-side.components.requests />
    </div>
    <div x-show="page === 'categories'" class="w-full">
        <livewire:admin-side.components.categories />
    </div>
    <div x-show="page === 'providers'" class="w-full">   
        <livewire:admin-side.components.providers />
    </div>
    <div x-show="page === 'advertisement'" class="w-full">
        <livewire:admin-side.components.carousel />
    </div>
    <div x-show="page === 'user'" class="w-full">
        <livewire:admin-side.components.users />
    </div>
    <div x-show="page === 'settings'" class="w-full">
        <livewire:admin-side.components.settings />
    </div>
    <div x-show="page === 'services'" class="w-full">
        <livewire:admin-side.service-page />
    </div>
</div>