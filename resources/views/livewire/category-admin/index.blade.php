@section('title', "Category Admin")
<div class="bg-white h-screen relative" x-data="{isAccountOpen:false}">
    <div class="bg-white flex justify-between px-15 items-center py-2 shadow-md">

        <!-- Logo -->
        <div>
            <img src="{{ asset('/logo/Logo.png') }}" alt="" class="w-36">
        </div>

        <!-- Buttons -->
        <div>
            <ul class="flex space-x-7">
                <li class="flex space-x-2 items-center uppercase">
                    <span class="material-icons">dashboard</span>
                    <a href="#">Dashboard</a>
                </li>
                <li class="flex text-blue-500 space-x-2 items-center uppercase">
                    <span class="material-icons align-middle">autorenew</span> 
                    <a href="#">Requests</a>
                </li>
                <!-- <li class="flex text-blue-500 space-x-2 items-center uppercase">
                    <span class="material-icons align-middle">drag_indicator</span> 
                    <a href="#">Services</a>
                </li> -->
            </ul>
        </div>

                <!-- Account Settings -->
        <button class=" focus:outline-none" @click="isAccountOpen = !isAccountOpen">
            <div class="flex space-x-2 items-center">
                <img src="{{ asset('/logo/user-default.jpg') }}" class="rounded-full w-13 shadow" alt="">
                <div class="leading-5 text-left flex items-center">
                    <h1 class="font-semibold">{{ Auth::user()->firstname }}</h1>
                    <span class="material-icons text-gray-500">arrow_drop_down</span>
                </div>
            </div>
        </button>
    </div>

    <livewire:category-admin.requests />
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

    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
        @csrf
    </form>
</div>
