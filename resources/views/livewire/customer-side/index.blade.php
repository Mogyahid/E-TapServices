@section('title', 'E-tap Services - Let others discover you.')
<div class="relative">
    <!-- Top navbar -->
    <livewire:customer-side.components.top-navbar />
    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />
    <!-- Carousel Section -->
    <!-- <livewire:customer-side.components.carousel /> -->

    <!-- Main content -->
    <div class="mt-5">
        <div class="text-center my-7">
            <h1 class="uppercase font-black text-5xl">Popular Categories</h1>
            <!-- <hr class="bg-blue-500 w-32 h-1 self-center"> -->
            <p>There are many variations of passages of Lorem Ipsum available, <br>but the majority have suffered alteration in some form by injected humour.</p>
        </div>

        <!-- Categories -->
        <div class="grid gap-3 px-15 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-4 my-4 mt-10">
            <!-- Items -->
            @foreach($categories as $category)
            <div class="border hover:bg-white transform transition hover:-translate-y-2 hover:shadow-md  rounded-md">
                <a href="{{ route('services', ['category' => $category->id]) }}">
                    <img src="{{ asset('/storage/categories/' . $category->image->url) }}" class="object-cover w-full rounded-tr-md rounded-tl-md" alt="">
                </a>
            </div>
            @endforeach
        </div>


    <!-- Apply as provider -->
    <div class="px-15 flex justify-between py-7 my-5 items-center">
        <div>
            <!-- <span class="text-gray-600 underline">Apply as provider</span> -->
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
