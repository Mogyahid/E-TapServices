@section('title', 'E-tap - Let others discover you.')
<div class="relative">
    <!-- Top navbar -->
    <livewire:customer-side.components.top-navbar />
    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />
    <!-- Carousel Section -->
    <livewire:customer-side.components.carousel />

    <!-- <livewire:customer-side.components.carousel /> -->

    <!-- Main content -->
    <div class="mt-5">
        <div class="text-center md:my-7 my-5">
            <h1 class="uppercase font-black md:text-5xl text-2xl">Popular Categories</h1>
            <!-- <hr class="bg-blue-500 w-32 h-1 self-center"> -->
            <p class="font-medium md:text-xl text-l">Browse service you want in our popular cateories.</p>
        </div>

        <!-- Categories -->
        <div class="grid gap-3 md:px-15 px-7 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 md:my-4 md:mb-20 mb-7 md:mt-10">
            <!-- Items -->
            @foreach($categories as $category)
            <div class="border hover:bg-white transform transition hover:-translate-y-2 hover:shadow-md  rounded-md">
                <a href="{{ route('services', ['category' => $category->id]) }}">
                    <img src="{{ asset('/storage/categories/' . $category->image->url) }}" class="object-cover w-full rounded-tr-md rounded-tl-md" alt="">
                </a>
            </div>
            @endforeach
        </div>

    <!-- How it Works -->
    <livewire:customer-side.components.howitworks/>

    <!-- Apply as provider -->
    <livewire:customer-side.components.become-provider/>


    <!-- Footer -->
    <livewire:customer-side.components.footer />
</div>
