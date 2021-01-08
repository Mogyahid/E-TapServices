@section('title', 'Service lists')

<div>
    <!-- Top navbar -->
    <livewire:customer-side.components.top-navbar />
    <!-- Navbar section here -->
    <livewire:customer-side.components.navbar />

        <!-- Main content -->
        <div>
            <div class="text-center py-5 md:mb-7 mb-3">
                <h1 class="uppercase font-black md:text-5xl text-2xl leading-14">{{ $category_name }} Services</h1>
                <!-- <hr class="bg-blue-500 w-32 h-1 self-center"> -->
                <p class="text-gray-500">There are many variations of passages of Lorem Ipsum available</p>
            </div>

            <!-- Categories -->
            @if(count($providers) > 0)
                <div class="grid gap-3 md:px-15 px-7 grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                <!-- Items -->  
                    @foreach($providers as $service)
                        @foreach($service->services as $provider_service)
                        <div class="border hover:bg-white transform transition hover:shadow-md  rounded-md">
                            <img src="{{ asset('/storage/services/' . $provider_service->image->url) }}" class="object-cover w-full rounded-tr-md rounded-tl-md" alt="">
                            <div class="py-2">
                                <div class="text-center">
                                    <h1 class="font-bold md:text-xl text-sm">{{ $provider_service->name }}</h1>
                                    <p class="text-gray-700 px-2 text-xs md:text-md">{{ $service->establishment }}</p>
                                </div>

                                <div class="text-left px-3 mt-5 mb-3 md:flex items-center justify-between">
                                    <div class="md:leading-3">
                                        <!-- Stars -->
                                        <div>
                                            <?php
                                                for ($x = 1; $x <= 5; $x++) {
                                                echo "<span class='material-icons md-18 text-gray-300'>star</span>";
                                                }
                                            ?>
                                        </div>
                                        <!-- Requests made -->
                                        <p class="text-gray-400 py-1 md:px-2 text-sm">({{$provider_service->no_requests}}) {{ Str::plural('Request', $provider_service->no_requests) }}</p>
                                    </div>,
                                    <div class="text-center">
                                        <a href="{{ route('requestservice', ['reqservice' => $provider_service->id]) }}" class="bg-blue-500 uppercase py-2 hover:shadow md:px-5 px-10 rounded-full w-full text-sm md:text-md text-white">Request Now</a>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        @endforeach
                    @endforeach
                </div>
            @else
                <div class="h-2/5 w-full text-center align-middle flex items-center justify-center">
                        <h1 class="font-medium text-2xl uppercase text-center text-gray-400">No Services Found in this category!</h1>
                </div>
            @endif
        </div>


    <!-- Apply as provider -->
    <livewire:customer-side.components.become-provider/>
    <!-- Footer -->
    <livewire:customer-side.components.footer />
</div>
