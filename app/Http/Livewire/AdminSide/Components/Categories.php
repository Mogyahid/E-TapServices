<?php

namespace App\Http\Livewire\AdminSide\Components;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Http\Request;

use Livewire\Component;
use App\Models\Image;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use DB;

class Categories extends Component
{
    use WithFileUploads;
    use WithPagination;
   
    // public $categories;

    #modals
    public $showCategoryModal = false;
    public $showEditCategory = false;
    public $showAssignAdmin = false;

    #For clearing the input file value
    public $iteration;

    public $ifForEdit;

    # Add Controls/Inputs
    public $category_image, $category_name;

    # Edit Controls/Inputs
    public $editCategory_image, $editCategory_name;

    # Assigning Admin controls
    public $category_fullname, $contact_number, $password;    
    public $pastDeletedImage;

    public $search = '';

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        // $this->categories = Category::paginate(4);
        return view('livewire.admin-side.components.categories', [
            'categories' => Category::where('name', 'like', '%'.$this->search.'%')->paginate(8)
        ]);
    }

    public function saveCategory()
    {
        $this->validate([
            'category_image' => ['required'],
            'category_name' => ['required', 'string', 'max:255'],
        ]);
        
        # Checking if the name is already exists
        $isExists = Category::where('name', $this->category_name)->first();
        $categoryImageExists = Image::where('url', $this->category_image)->first();

        # If both image and name exists
        if($isExists){
            session()->flash('message', 'Category already exists. Please insert new category only!');
            $this->iteration = rand();
        }

        #If only name
        else if($isExists){
            session()->flash('message', 'Category name already exists. Please insert new category only!');
            $this->iteration = rand();
        }

        #if only image 
        else if($categoryImageExists){
            session()->flash('message', 'Category image name already exists. Please insert new category only!');
            $this->iteration = rand();
        }
        else{
            # Save Cagotery
            $saved = Category::create(['name' => $this->category_name]);
            
            # Get the last inserted category id
            $category_id = Category::orderBy('id','desc')->first()->id;

            #Checking ig the category saved successfully
            if($saved){
                # Save category image to categories folder
                $filename = $this->category_image->getClientOriginalName();
                $this->category_image->storeAs('categories', $filename, 'public');
                Image::create([
                    'url' => $filename,
                    'imageable_id' => $category_id,
                    'imageable_type' =>  Category::class,
                ]);
                $this->showCategoryModal = false;
                $this->iteration = rand();
                $this->category_name = "";
            }
        }
    }

    public function editCategory(Category $category)
    {
        $this->ifForEdit = $category->id;

        # Getting the image by comparing the pass id to its id
        $images = DB::table('images')->select('url')->where('imageable_id', $category->id)->get();
        
        foreach($images as $image_url){
            $this->pastDeletedImage = $image_url->url; # Store editting image name
        }
        $this->editCategory_name = $category->name; 
    }

    public function updateCategory(Request $request)
    {        
        # Checking if the name is already exists
        $categoryExists = Category::where('name', $this->editCategory_name)->first();
        $categoryImageExists = Image::where('url', $this->editCategory_image)->first();

        # update Cagotery
        $updated = Category::where('id', $this->ifForEdit)
            ->update(['name' => $this->editCategory_name]);

        if($updated){
            if(request()->hasFile($this->editCategory_image)){
                #Checking ig the category saved successfully
                # Save category image to categories folder
                $filename = $this->editCategory_image->getClientOriginalName();
                $this->editCategory_image->storeAs('categories', $filename, 'public');
                $imageUpdated = Image::where(['imageable_id' => $this->ifForEdit, 'imageable_type' => Category::class])->update(['url' => $filename]);
    
                #If image updated, remove the past image from the storage
                if($imageUpdated){
                    Storage::delete('public/categories/'.$this->pastDeletedImage);
                }
            }
            $this->showEditCategory = false;
            $this->iteration = rand();
            $this->category_name = "";
        }
    }
    public function deleteCategory(Category $category)
    {
        # Getting the image by comparing the pass id to its id
        $images = DB::table('images')->select('url')->where('imageable_id', $category->id)->get();

        foreach($images as $image_url){
            $this->pastDeletedImage = $image_url->url; # Store editting image name
        }
        $deleted = $category->delete();

        if($deleted){
            Storage::delete('public/categories/'.$this->pastDeletedImage);
        }
    }

    public function assignCategoryAdmin()
    {
        $this->showAssignAdmin = false;
    }
}
