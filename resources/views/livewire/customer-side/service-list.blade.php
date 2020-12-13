@section('title', 'Service lists')

<div>
    <!-- Top navbar -->
    <livewire:customer-side.components.top-navbar />
    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />

        <!-- Main content -->
        <div>
            <div class="text-center py-5 mb-7">
                <h1 class="uppercase font-black text-5xl leading-14">{{ $category_name }} Services</h1>
                <!-- <hr class="bg-blue-500 w-32 h-1 self-center"> -->
                <p class="text-gray-500">There are many variations of passages of Lorem Ipsum available, <br>but the majority have suffered alteration in some form by injected humour.</p>
            </div>

            <!-- Categories -->
            <div class="grid grid-cols-5 gap-4 px-15 my-5">
                <!-- Items -->  
                @foreach($serviceOffers as $service)
                    <div class="border hover:bg-white transform transition hover:shadow-md  rounded-md">
                        <img src="https://picsum.photos/200/200" class="object-cover w-full rounded-tr-md rounded-tl-md" alt="">
                        <div class="py-2">
                            <div class="text-center">
                                <h1 class="font-bold text-xl">{{ $service->name }}</h1>
                                <p class="text-gray-700 px-2">J hauling</p>
                            </div>

                            <div class="text-left px-3 mt-5 mb-3 flex items-center justify-between">
                                <div class="leading-3">
                                    <!-- Stars -->
                                    <div>
                                        <?php
                                            for ($x = 1; $x <= 5; $x++) {
                                            echo "<span class='material-icons md-18 text-blue-500'>star</span>";
                                            }
                                        ?>
                                    </div>
                                    <!-- Requests made -->
                                    <p class="text-gray-400 py-1 px-2 text-sm">132 Requests</p>
                                </div>
                                <a href="{{ route('request', ['service' => $service->id]) }}" class="bg-blue-500 py-2 hover:shadow px-5 rounded-full text-white">Request Now</a>
                            </div>
                        </div>
                    </div> 
                    @endforeach
            </div>
        </div>


    <!-- Apply as provider -->
    <div class="px-15 flex justify-between py-7 my-5 items-center">
        <div>
            <!-- <span class="text-gray-60 text-xl underline">Apply as provider</span> -->
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
