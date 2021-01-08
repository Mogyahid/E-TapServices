<div id="owl-demo" class="owl-carousel owl-theme">
    @foreach ($carousels as $carouselItem)
        <div class="item md:h-4/6 h-2/5  w-full">
            <img src="{{ asset("/storage/carousel/".$carouselItem->image->url) }}" alt="" class="h-full w-full">
        </div>
    @endforeach
</div>

