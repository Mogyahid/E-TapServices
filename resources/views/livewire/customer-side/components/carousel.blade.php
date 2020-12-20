<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach ($carousels as $carouselItem)
        <div class="item h-4/6 w-full">
            <img src="{{ asset("/storage/carousel/".$carouselItem->image->url) }}" alt="" class="h-full w-full">
        </div>
    @endforeach
</div>

