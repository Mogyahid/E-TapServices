<div class="flex-1 relative"
    x-data="{ 
        categoryDialog:@entangle('showCategoryModal'), 
        editCategory:@entangle('showEditCategory'), 
        assignAdminModal:@entangle('showAssignAdmin') }">
        <div class="px-10 py-7">
            <div class="flex justify-between items-center">
                    <h1 class="font-black uppercase text-2xl">Category Management</h1>
                    <button class="flex items-center focus:outline-none hover:bg-blue-500 border border-blue-500 space-x-2 px-3 py-2 text-blue-500 hover:text-white rounded-md hover:shadow" @click="categoryDialog = !categoryDialog">
                        <span class="material-icons">control_point</span>
                        <span>Add Category</span>
                    </button>
                </div>

            <div class="mt-3">
                <div class="w-full my-3">
                    <div class="rounded-md w-full flex justify-between border items-center px-3 shadow-md">
                        <input type="text" placeholder="Enter keyword..." class="py-3 w-full focus:outline-none" wire:model="search">
                        <button class="flex justify-between items-center hover:text-blue-500 text-gray-500"><span class="material-icons">search</span></button>
                    </div>
                </div>
    
                <div class="mt-2 bg-gray-200 p-1">
                    <table class="w-full border relative">
                        <thead>
                            <tr class="text-left bg-blue-500 text-white">
                                <th class="py-3 uppercase font-medium pl-3">Image</th>
                                <th class="py-3 uppercase font-medium">Category Name</th>
                                <th class="py-3 uppercase font-medium">No. of Registered Services</th>
                                <th class="py-3 uppercase font-medium">Admin Information</th>
                                <th class="py-3 uppercase font-medium">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($categories) > 0)
                                @foreach($categories as $category)
                                <tr class="bg-white hover:bg-gray-100 border-b">
                                    <td class="uppercase font-medium pl-1 py-1">
                                        <img src="{{ asset('/storage/categories/' . $category->image->url) }}" class="rounded-md w-15 shadow" alt="">
                                    </td>
                                    <td class="py-3 uppercase font-medium">{{ $category->name }}</td>
                                    <td class="py-3 uppercase font-medium">{{ $category->no_services }}</td>
                                    @if($category->admin == 1)
                                        <td class="py-3 uppercase font-medium space-x-2">
                                            <span class="font-bold align-middle">Default Admin</span>
                                            <button class="material-icons md-18 align-middle hover:shadow hover:bg-blue-500 hover:text-white rounded-md p-2" @click="assignAdminModal = !assignAdminModal">menu</button>
                                        </td>
                                    @else
                                        <td class="py-3 uppercase font-medium flex flex-col">
                                            <span class="font-bold">Admin Category name here</span>
                                            <span>His/her number</span>
                                        </td>
                                    @endif
                                    <td class="py-3 uppercase font-medium">
                                        <button class="hover:bg-blue-500 hover:text-white text-blue-500 p-1 hover:shadow-md material-icons rounded-md align-middle" wire:click="editCategory({{ $category->id }})" @click="editCategory = !editCategory">edit</button>
                                        <button class="hover:bg-red-600 hover:text-white text-red-600 p-1 hover:shadow-md material-icons rounded-md align-middle" wire:click="deleteCategory({{ $category->id }})">delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr class="bg-white border-b">
                                    <td colspan="5" class="py-3 font-medium text-center text-red-600 text-xl">No Category Found!</td>
                                </tr>
                            @endif
                            <div class="bg-gray-500 bg-opacity-25 flex top-0 items-center justify center py-2 px-3 w-full" wire:loading wire:target="search">
                                <span>
                                    Processing... Please wait <i class="fas fa-spinner fa-pulse"></i>
                                </span>
                            </div>
                        </tbody>
                    </table>
                    <div class="p-2">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>

    <!--Adding Category Modal -->
    <div class="bg-gray-500 bg-opacity-25 h-screen absolute top-0 w-full flex justify-center overflow-auto p-0" x-show="categoryDialog" x-cloak>
            <div class="bg-white h-2/5 w-3/6 mt-15 rounded-md" x-show="categoryDialog">
                <div class="bg-blue-500 text-white  flex items-center justify-between px-7 py-3 uppercase font-bold rounded-tl-md rounded-tr-md">
                    <span>Category Information</span>
                    <button class="material-icons hover:bg-red-600 rounded focus:outline-none" @click="categoryDialog = !categoryDialog">close</button>
                </div>

                <div class="my-3">
                    <form class="px-5" wire:submit.prevent="saveCategory()" id="upload{{ $iteration }}">
                        @csrf
                        <div class="flex flex-col space-y-2">
                            <label for="" class="font-bold uppercase">Upload image file</label>
                            <div class="leading-7 flex flex-col">
                                <input type="file" class="border rounded px-2 py-2" wire:model="category_image" required>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-2 my-2">
                            <label for="" class="font-bold uppercase">Category Name</label>
                            <input type="text" class="border rounded px-2 py-2 border-red-500" placeholder="Enter category name" wire:model="category_name" required autofocus>
                            @error('category_name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        @if (session()->has('message'))
                            <div class="mb-3 flex w-full alert alert-success">
                                <span class="bg-red-500 w-full bg-opacity-25 px-3 py-2 font-medium border-l-1 border-red-600">{{ session('message') }}</span>
                            </div>
                            <div>
                                <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Save Category 
                                    <div wire:loading wire:target="saveCategory"><i class="fas fa-spinner fa-pulse"></i></div>
                                </button>
                            </div>
                        @else
                            <div class="mt-10">
                                <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Save Category 
                                    <div wire:loading wire:target="saveCategory"><i class="fas fa-spinner fa-pulse"></i></div>
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
    </div>

    <!-- Edit Category Modal -->
    <div class="bg-gray-500 bg-opacity-25 h-screen absolute top-0 w-full flex justify-center overflow-auto p-0" x-show="editCategory" x-cloak>
        <div class="bg-white h-2/5 w-3/6 mt-15 rounded-md" x-show="editCategory">
            <div class="bg-blue-500 text-white  flex items-center justify-between px-7 py-3 uppercase font-bold rounded-tl-md rounded-tr-md">
                <span>Edit Category Information</span>
                <button class="material-icons hover:bg-red-600 rounded focus:outline-none" @click="editCategory = !editCategory">close</button>
            </div>

            <div class="my-3">
                <form class="px-5" wire:submit.prevent="updateCategory()" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col space-y-2">
                        <label for="" class="font-bold uppercase">Upload image file</label>
                        <div class="leading-7 flex flex-col">
                            <input type="file" class="border rounded px-2 py-2" wire:model="editCategory_image" name="edit_image">
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2 my-2">
                        <label for="" class="font-bold uppercase">Category Name</label>
                        <input type="text" class="border rounded px-2 py-2 border-red-500" placeholder="Enter category name" wire:model="editCategory_name" required autofocus>
                    </div>
                    @if (session()->has('message'))
                        <div class="mb-3 flex w-full alert alert-success">
                            <span class="bg-red-500 w-full bg-opacity-25 px-3 py-2 font-medium border-l-1 border-red-600">{{ session('message') }}</span>
                        </div>
                        <div>
                            <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Update Category <div wire:loading wire:target="updateCategory"><i class="fas fa-spinner fa-pulse"></i></div></button>
                        </div>
                    @else
                        <div class="mt-10">
                            <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Update Category <div wire:loading wire:target="updateCategory"><i class="fas fa-spinner fa-pulse"></i></div></button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <!-- Assign Admin Category Modal -->
    <div class="bg-gray-500 bg-opacity-25 h-screen absolute top-0 w-full flex justify-center overflow-auto p-0" x-show="assignAdminModal" x-cloak>
        <div class="bg-white h-3/6 w-3/6 mt-15 rounded-md" x-show="assignAdminModal">
            <div class="bg-blue-500 text-white  flex items-center justify-between px-7 py-3 uppercase font-bold rounded-tl-md rounded-tr-md">
                <span>Assign Category Admin</span>
                <button class="material-icons hover:bg-red-600 rounded focus:outline-none" @click="assignAdminModal = !assignAdminModal">close</button>
            </div>

            <div class="my-3">
                <form class="px-5" wire:submit.prevent="assignCategoryAdmin()" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col space-y-2 my-2">
                        <label for="" class="font-bold uppercase">Full Name</label>
                        <input type="text" class="border rounded px-2 py-2 focus:border-blue-500" placeholder="Enter admin full name" wire:model="category_fullname" required autofocus>
                    </div>
                    <div class="flex flex-col space-y-2 my-2">
                        <label for="" class="font-bold uppercase">Contact Number</label>
                        <input type="number" class="border rounded px-2 py-2 focus:border-blue-500" placeholder="Contact number must be 11 digits" wire:model="contact_number" required autofocus>
                    </div>
                    <div class="flex flex-col space-y-2 my-2">
                        <label for="" class="font-bold uppercase">Password</label>
                        <input type="text" class="border rounded px-2 py-2 focus:border-blue-500" placeholder="Enter strong password" wire:model="password" required autofocus>
                    </div>


                    @if (session()->has('message'))
                        <div class="mb-3 flex w-full alert alert-success">
                            <span class="bg-red-500 w-full bg-opacity-25 px-3 py-2 font-medium border-l-1 border-red-600">{{ session('message') }}</span>
                        </div>
                        <div>
                            <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Update Category <div wire:loading wire:target="assignCategoryAdmin"><i class="fas fa-spinner fa-pulse"></i></div></button>
                        </div>
                    @else
                        <div class="mt-10">
                            <button class="bg-blue-500 text-white py-3 float-right px-3 rounded hover:shadow uppercase font-medium">Update Category <div wire:loading wire:target="assignCategoryAdmin"><i class="fas fa-spinner fa-pulse"></i></div></button>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>