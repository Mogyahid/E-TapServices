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
        <div class="text-center my-7">
            <h1 class="uppercase font-black text-5xl">Popular Categories</h1>
            <!-- <hr class="bg-blue-500 w-32 h-1 self-center"> -->
            <p class="font-medium text-xl">Browse service you want in our popular cateories.</p>
        </div>

        <!-- Categories -->
        <div class="grid gap-3 px-15 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 my-4 mb-20 mt-10">
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
    <div class="px-15 flex justify-between py-7 mt-24  items-center">
        <div>
            <!-- <span class="text-gray-600 underline">Apply as provider</span> -->
            <h1 class="text-blue-500 font-bold text-4xl">Become our service provider</h1>
            <p class="font-medium">Yes you read it. You can be one of our partner by just applying to this platform as our provider. <br>Please read and understand carefully the instruction before applying!</p>
        </div>

        <div data-turbolinks="false">
            <a href="/provider_description" class="bg-blue-500 text-white px-10 py-4 rounded hover:shadow-md text-lg uppercase">
                Find out more
            </a>
        </div>
    </div>

    <!-- Footer -->
    <livewire:customer-side.components.footer />
</div>
