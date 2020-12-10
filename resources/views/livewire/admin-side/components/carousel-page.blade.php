<div>
    <div class="flex-1 px-10 py-7">
        <h1 class="font-black uppercase text-2xl">Advertisement Management</h1>
        <h1 class="font-black text-gray-500 uppercase mt-5 text-xl mb-2">Carousel Preview</h1>

        <div class="flex justify-between">

            <div class="flex-1 pr-10">
                <div class="carousel h-4/6 shadow-md border border-blue-500">
                    @if(count($carousel) > 0)
                        @foreach($carousel as $item)
                            <div class="carousel-cell w-full h-full">
                                <img src="{{ asset('/storage/carousel/' . $item->image->url) }}" class="object-cover h-full w-full rounded-md shadow-md" alt="">
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-cell w-full h-full">
                            <img src="{{ asset('carousel_preview.jpg') }}" class="object-auto h-full w-full rounded-md shadow-md" alt="">
                        </div>
                    @endif
                </div>

                <div class="mt-3">
                    <h1 class="font-black uppercase text-xl text-gray-500">Advertisement List</h1>
                    <table class="w-full border shadow">
                        <thead>
                            <tr class="bg-blue-500 text-white">
                                <td class="font-medium uppercase px-3 py-2">Image</td>
                                <td class="font-medium uppercase py-2">Name</td>
                                <td class="font-medium uppercase py-2 float-right mr-10">Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($carousel) > 0)
                                @foreach($carousel as $item)
                                    <tr class="border-b">
                                        <td class="py-1">
                                            <img src="{{ asset('/storage/carousel/' . $item->image->url) }}" class="ml-2 object-cover rounded-md w-15 h-15 shadow" alt="">
                                        </td>
                                        <td>{{ $item->name }}</td>
                                        <td class="py-3 uppercase font-medium float-right mr-10">
                                            <button class="text-red-600 px-1 py-1 rounded-md hover:bg-red-600 hover:text-white hover:shadow-md" wire:click="deleteCarousel({{$item->id}})"><span class="material-icons">delete</span></button>
                                        </td>
                                    </tr>
                                @endforeach
                            
                            @else
                                <tr class="border-b">
                                    <td class="py-3 text-center align-middle font-medium text-red-600" colspan="3">
                                        No carousel item!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div> 
            </div>

    <div class="bg-gray-100 px-5 pt-5 w-2/6">
        <div class="bg-footer text-white rounded-md">
            <h1 class="py-3 font-bold px-2 uppercase">Add Carousel</h1>
        </div>
            <div class="mt-3">
                <form wire:submit.prevent="saveCategory" id="upload{{ $iteration }}">
                    <div>
                        <label for="" class="font-medium text-gray-500">Image Preview</label>
                        @if ($carousel_image)
                            <img src="{{ $carousel_image->temporaryUrl() }}" class="bg-contain w-full rounded-md shadow-md mb-2 h-80">
                        @else
                            <div>
                                <img src="{{ asset('carousel_preview.jpg') }}" class="object-cover w-full rounded-md shadow-md mb-2 h-80" alt="">
                            </div>
                        @endif
                        <div class="flex flex-col">
                            <label for="" class="font-bold">Upload Image File</label>
                            <input type="file" class="mt-2 border rounded p-2" wire:model="carousel_image" required>    
                        </div>
                        </div>
                        <div class="mt-3">
                            <label for="" class="font-bold">Carousel Name</label>
                            <input type="text" placeholder="Carousel Name" class='mt-2 rounded-md border px-3 py-3 w-full focus:border-blue-500' wire:model="carousel_name">
                            <button class="py-3 uppercase text-white font-medium w-full mt-2 bg-blue-500 hover:bg-blue-600 rounded hover:shadow">
                                Save Carousel
                                <div wire:loading wire:target="saveCategory"><i class="fas fa-spinner fa-pulse"></i></div>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>