<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Models\Category;
use App\Models\Promotion;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Livewire\WithPagination;
use Image;

class ManageCategories extends Component
{
    use WithFileUploads;
    use WithPagination;

    public $title;
    public $parent_id;
    public $slugStore;
    public $slugManufacturer;
    public $shortDescription;
    public $description;
    public $promotion;
    public $enabled = 1;
    public $child_categories;
    public $catId;
    // public $tagline;
    public $cover_photo;
    public $category_icon;

    public $showHideLevel2;
    public $showHideLevel3;
    public $updateCatId;
    public $addNewCategory = false;
    public $editCategoryModal = false;
    public $confirmingDeletionModal = false;


    protected function rules()
    {
        return [
            'title' => 'required|string|min:2|max:255|unique:categories,title,' . $this->updateCatId,
            'slugStore' => 'required|string|min:2|max:255|unique:categories,slug_store,' . $this->updateCatId,
            'slugManufacturer' => 'required|string|min:2|max:255|unique:categories,title,' . $this->updateCatId,
            'parent_id' => 'numeric|nullable',
            'shortDescription' => ['required', 'string', 'max:300'],
            'description' => ['required', 'string', 'max:1000'],
            'promotion' => ['nullable', 'numeric'],
            'enabled' => ['required', 'boolean'],
            'cover_photo' => ['required', 'image', 'dimensions:min_width=360,min_height=410,max_width=370,max_height=420'],
            'category_icon' => ['required', 'image']
        ];
    }

    // Close Modal
    public function closeModal($modal)
    {
        $this->$modal = false;
    }

    // Show Modal
    public function showModal($modal)
    {
        if ($modal == "addNewCategory")
            $this->clearForm();
        $this->$modal = true;
    }

    //////////////////// DropDown Menu Show Sub Categories
    public function getSubCategories($parentCategory)
    {
        $this->child_categories = Category::where('parent_id', '=', $parentCategory)->get();
    }

    public function createCategory()
    {
        $this->validate();


        $this->parent_id = $this->parent_id > 0 ? $this->parent_id : NULL;

        // $cover_photo_name = basename(parse_url($this->cover_photo->temporaryUrl(), PHP_URL_PATH));
        // $icon_name = basename(parse_url($this->category_icon->temporaryUrl(), PHP_URL_PATH));

        $categoryData = [
            'title' => $this->title,
            'short_description' => $this->shortDescription,
            'description' => $this->description,
            'parent_id' => $this->parent_id,
            'slug_store' => $this->slugStore,
            'slug_manufacturer' => $this->slugManufacturer,
            'promotion_id' => $this->promotion,
            'enabled' => $this->enabled,
        ];

        $coverPhoto = $this->cover_photo;
        $icon = $this->category_icon;

        if (isset($coverPhoto)) {
            $categoryData['banner_path'] = $coverPhoto->storeAs('categories', Carbon::now()->timestamp . "-" . $coverPhoto->getClientOriginalName(), 'public');
        }

        if (isset($icon)) {
           // Store the original image
            $originalPath = $icon->storeAs('categories', Carbon::now()->timestamp . "-" . $icon->getClientOriginalName(), 'public');

            // Resize the image to 32x32 pixels
            $resizedPath = 'categories/' . 'resized-' . Carbon::now()->timestamp . "-" . $icon->getClientOriginalName();
            $resizedImage = Image::make(storage_path('app/public/' . $originalPath))->resize(32, 32)->save(storage_path('app/public/' . $resizedPath));

            $categoryData['icon_path'] = $resizedPath;
        }

        Category::create($categoryData);

        $message = $this->parent_id > 0 ? "Sub Category successfully added" : "Category successfully added";

        // session()->flash('success', $message);
        $this->clearForm(); // reset form in modal
        $this->addNewCategory = false;


        session()->flash('success', $message);
        // return redirect()->route('admin.categories')->with('success', $message);


        // $this->dispatchBrowserEvent('refresh'); // refresh page
    }

    //////////////////// Clear Form Data
    public function clearForm()
    {

        $this->reset('title', 'parent_id', 'cover_photo', 'category_icon', 'updateCatId', 'shortDescription', 'description', 'slugStore', 'slugManufacturer', 'promotion', 'enabled');

        $this->resetErrorBag();
        $this->resetValidation();
    }

    public function deleteCategory($id)
    {
        $this->catId = $id;
        $this->confirmingDeletionModal = true;
    }

    public function delete(Category $category)
    {
        if ($category = Category::find($this->catId)) {
            if($category->icon_path) {
                Storage::disk('public')->delete($category->icon_path);
            }

            if($category->banner_path) {
                Storage::disk('public')->delete($category->banner_path);
            }

            $category->delete();
            session()->flash('success', 'Category successfully deleted.');
        }
        $this->catId = '';
        $this->confirmingDeletionModal = false;
    }

    // show edit details
    public function editCategory($id)
    {
        $this->clearForm();
        $showCatDetail = Category::where('id', $id)->first();
        $this->updateCatId = $id;
        $this->title = $showCatDetail->title;
        $this->parent_id = $showCatDetail->parent_id;
        $this->shortDescription = $showCatDetail->short_description;
        $this->description = $showCatDetail->description;
        $this->slugStore = $showCatDetail->slug_store;
        $this->slugManufacturer = $showCatDetail->slug_manufacturer;
        $this->promotion = $showCatDetail->promotion_id;
        $this->enabled = $showCatDetail->enabled;

        $this->editCategoryModal = true;

    }

    // update category
    public function updateCategory()
    {
        $this->validate([
            'title' => 'required|string|min:2|max:255|unique:categories,title,' . $this->updateCatId,
            'slugStore' => 'required|string|min:2|max:255|unique:categories,slug_store,' . $this->updateCatId,
            'slugManufacturer' => 'required|string|min:2|max:255|unique:categories,slug_manufacturer,' . $this->updateCatId,
            'parent_id' => 'numeric|nullable',
            'shortDescription' => ['required', 'string', 'max:300'],
            'description' => ['required', 'string', 'max:1000'],
            'promotion' => ['nullable', 'numeric'],
            'enabled' => ['required', 'boolean'],
            'cover_photo' => ['nullable', 'image', 'dimensions:min_width=970,min_height=250,max_width=970,max_height=250'],
            'category_icon' => ['nullable', 'image']
        ]);

        $category = Category::findorFail($this->updateCatId);

        $categoryData = [
            'title' => $this->title,
            'short_description' => $this->shortDescription,
            'description' => $this->description,
            'slug_store' => $this->slugStore,
            'slug_manufacturer' => $this->slugManufacturer,
            'promotion_id' => $this->promotion,
            'enabled' => $this->enabled,
        ];

        $coverPhoto = $this->cover_photo;
        $icon = $this->category_icon;

        if (isset($this->cover_photo) && !empty($this->cover_photo)) {
            $categoryData['banner_path'] = $coverPhoto->storeAs('categories', Carbon::now()->timestamp . "-" . $coverPhoto->getClientOriginalName(), 'public');

            if ($categoryData['banner_path']) {
                Storage::disk('public')->delete(Category::where('id', $category->id)->first()->banner_path);
            }
        }

        if (isset($this->category_icon) && !empty($this->category_icon)) {
            $categoryData['icon_path'] = $icon->storeAs('categories', Carbon::now()->timestamp . "-" . $icon->getClientOriginalName(), 'public');
            
            if ($categoryData['icon_path']) {
                Storage::disk('public')->delete(Category::where('id', $category->id)->first()->icon_path);
            }
        }

        $category->update($categoryData);

        $this->editCategoryModal = false;
        session()->flash('success', 'Category updated successfully.');
        // return redirect()->route('admin.categories')->with('success', 'Category updated successfully.');
        // $this->dispatchBrowserEvent('refresh'); // refresh page
    }

    // show hide child accordion
    public function collapseSubChild($id, $parent1 = -1)
    {
        if ($id == $parent1) {
            $this->showHideLevel2 = NULL;
            $this->showHideLevel3 = NULL;
        } else {
            $this->showHideLevel2 = $id;
        }
    }

    // show hide subchild accordion
    public function collapseChildOfSubChild($id, $parent2 = -1)
    {
        if ($id == $parent2) {
            $this->showHideLevel3 = NULL;
        } else {
            $this->showHideLevel3 = $id;
        }
    }

    public function render()
    {
        $categories = Category::with(['childCategories' => function ($query) {
            $query->with('childCategories');
        }])->whereNull('parent_id')->get();

        $promotions = Promotion::where('active', 1)->get();

        return view('livewire.admin.categories.manage-categories', [
            'categories' => Category::with(['childCategories' => function ($query) {
                $query->with('childCategories');
            }])->whereNull('parent_id')->paginate(10)
        ],
        [
            'promotions' => Promotion::where('active',1)->get()
        ]);
    }
}
