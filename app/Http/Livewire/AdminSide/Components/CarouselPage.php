<?php

namespace App\Http\Livewire\AdminSide\Components;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

use App\Models\Carousel AS CarouselModel;
use App\Models\Image;
use DB;

class CarouselPage extends Component
{
    use WithFileUploads;

    public $carousel_image;
    public $carousel_name;

    #For clearing the input file value
    public $iteration;

    public $pastDeletedImage;
    
    public function render()
    {
        return view('livewire.admin-side.components.carousel-page', [
            'carousel' => CarouselModel::all()
        ]);
    }
    
    public function saveCategory()
    {
        $this->validate(['carousel_name' => ['required', 'string', 'max:25']]);
        # Checking if the name is already exists
        $isExists = CarouselModel::where('name', $this->carousel_image)->first();

        // if($isExists){
        //     session()->flash('message', 'Carousel exists. Please insert new category only!');
        //     $this->iteration = rand();
        // }

        $saved = CarouselModel::create(['name' => $this->carousel_name]);
        # Get the last inserted category id
        $carousel_id = CarouselModel::orderBy('id','desc')->first()->id;

        if($saved){
            # Save category image to categories folder
            $filename = $this->carousel_image->getClientOriginalName();
            $this->carousel_image->storeAs('carousel', $filename, 'public');
            Image::create([
                'url' => $filename,
                'imageable_id' => $carousel_id,
                'imageable_type' =>  CarouselModel::class,
            ]);
            $this->iteration = rand();
            $this->carousel_name = "";
        }
    }

    public function deleteCarousel(CarouselModel $carousel)
    {
        # Getting the image by comparing the pass id to its id
        $images = DB::table('images')->select('url')->where('imageable_id', $carousel->id)->get();

        foreach($images as $image_url){
            $this->pastDeletedImage = $image_url->url; # Store editting image name
        }
        $deleted = $carousel->delete();

        if($deleted){
            Storage::delete('public/carousel/'.$this->pastDeletedImage);
        }
    }
}