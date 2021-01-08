<div class="sticky top-0 w-full bg-white z-30 shadow-md" x-data="{ categoryHover: false }">
    <!-- Top Section -->

    <!-- Bottom Section -->
    <div class="sticky top-0 w-full">
        <div class="px-7 md:px-15 flex justify-between items-center relative">
                <!-- Logo Here -->
                <a href="/"><img src="{{ asset('logo/final-logo.jpg') }}" alt="Logo" class="w-32 object-cover"></a>
                <!-- Components -->
                <ul class="md:flex space-x-5 items-center uppercase text-xl">
                    <div class='flex  items-center space-x-7"'>
                        <li class="hover:text-blue-500 flex items-center font-medium cursor-pointer" x-on:mouseover="categoryHover = true">
                            <button class="uppercase">Categories</button>
                            <span class="material-icons">arrow_drop_down</span>
                        </li>
                        <button class="material-icons md:hidden">menu</button>
                    </div>

                    <li class="hover:text-blue-500 font-medium cursor-pointer hidden md:block"><a href="#">About us</a></li>
                    <li class="hover:text-blue-500 font-medium cursor-pointer hidden md:block"><a href="#">Contact us</a></li>
                    <!-- <li>  <a href="{{ route('provider.register') }}" class="uppercase text-blue-500 border border-blue-500 my-1 py-3 px-2 flex items-center font-medium cursor-pointer rounded hover:bg-blue-500 hover:text-white">APPLY AS PROVIDER</a>
                    </li> -->
                </ul>
        </div>
    </div>

    <div x-show="categoryHover"  x-on:mouseleave="categoryHover = false" @click.away="categoryHover = false">
        @if(count($categories) > 0)
            <div class="bg-white border-t-4 border-blue-500 shadow-md w-full absolute top-17 p-7 flex flex-wrap space-x-5 rounded-md">
                @foreach($categories as $category)
                    <a href="{{ route('services', ['category' => $category->id]) }}" class="flex space-x-1 flex flex-col hover:shadow">
                        <img src="{{ asset('/storage/categories/' . $category->image->url) }}" class="rounded-tr-md rounded-tl-md w-36 h-36" alt="">
                    </a>
                @endforeach
            </div>
        @else
            <div class="bg-white border-t-4 border-blue-500 shadow-md w-full absolute h-80 top-17 p-5 text-center flex items-center space-x-2">
                <span class="text-center w-full text-2xl uppercase font-medium">No category on the list</span>
            </div>
        @endif
    </div>
</div>

