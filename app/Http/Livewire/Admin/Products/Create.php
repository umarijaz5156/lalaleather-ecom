<?php

namespace App\Http\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use App\Models\Product;
use App\Models\ShippingCost;
use App\Models\ProductFaq;
use App\Models\ProductFile;
use App\Models\ProductCategory;
use App\Models\ProductVariant;
use App\Models\ProductFeature;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Services\SlugService;


class Create extends Component
{
    use WithFileUploads;
    public $product, $allData, $isEdit = false, $currentStep = 1, $allCategories, $title, $description, $parentCategory, $childCategory, $grandChildCategory, $selectedCategory = null, $sku, $gender = 'Male', $price, $price_discounted, $quantity, $size_chart_id, $shipping_cost_id, $is_active = 1, $is_promoted = 0,$additional_detail,$is_custom=0,$productSlug;
    // listner previousStep 

    protected $listeners = ['submitStep', 'previousStep', 'nextStep'];
    // mount id !=null
    public function mount($slug = null)
    {
        if (!is_null($slug)) {
            $this->product = Product::whereTitle($slug)->firstOrFail();
            $this->isEdit = true;
            $this->edit();
        }
    }

    public function render()
    {
        $allCategories = Category::where('parent_id', null)
            ->OrWhere('parent_id', $this->parentCategory)
            ->OrWhere('parent_id', $this->childCategory)
            ->get();

        $this->allCategories = $allCategories;


        // dd($allCategories);
        return view('livewire.admin.products.create', compact('allCategories'));
    }

    // onupdate $parentCategory
    public function updatedParentCategory($value)
    {
        $this->childCategory = null;
        $this->grandChildCategory = null;
    }
    // onupdate $childCategory
    public function updatedChildCategory($value)
    {
        $this->grandChildCategory = null;
    }


    public function next($allData = [] )
    {
        $this->firstStepData();
    }
    // firstStepData
    public function firstStepData()
    {
        // apply validation
        $rules = [
            'title' => 'required|string|max:100',
            'sku' => 'required|string|max:50|unique:products,sku',
            'price' => 'required|numeric|min:0|max:99999999',
            'gender' => 'required|in:Male,Female,Other',
            'description' => 'required|string|max:1000',
            'additional_detail' => 'nullable|string',
            'parentCategory' => 'required',
            'is_custom' => 'required',
            'childCategory' => [
                function ($attribute, $value, $fail) {
                    // Check if $this->allCategories contains a category with level 2
                    if (
                        !$this->allCategories->filter(function ($category) {
                        return $category->level() == 2;
                    })->isEmpty() && empty($value)
                    ) {
                        $fail($attribute . ' is required.');
                    }
                },
            ],
            'grandChildCategory' => [
                function ($attribute, $value, $fail) {
                    // Check if $this->allCategories contains a category with level 3
                    if (
                        !$this->allCategories->filter(function ($category) {
                        return $category->level() == 3;
                    })->isEmpty() && empty($value)
                    ) {
                        $fail($attribute . ' is required.');
                    }
                },
            ],
        ];
        // slug
        if ($this->isEdit) {
            $rules['productSlug'] = 'required|string|max:255|unique:products,product_slug,' . $this->product->id;
        } else {
            $rules['productSlug'] = 'required|string|max:255|unique:products,product_slug';
        }
        // Check if the product ID exists
        if (isset($this->product->id)) {
            $rules['sku'] = 'required|string|max:50|unique:products,sku,' . $this->product->id;
        } else {
            $rules['sku'] = 'required|string|max:50|unique:products,sku';
        }
        $validatedData = $this->validate($rules);
        // dd($validatedData);
        // allData
        unset($this->allData['allData']);
        $this->allData = array_merge($validatedData, $this->allData ?? []);
        $this->currentStep = 2;
    }

    public function previousStep($allData = [])
    {
        unset($this->allData['allData']);
        $this->allData = array_merge($this->allData ?? [],$allData ?? []);
        $this->currentStep -= 1;
    }
    // nextStep
    public function nextStep($allData)
    {

        unset($this->allData['allData']);
        $this->allData = array_merge($this->allData ?? [], $allData);
        $this->currentStep += 1;
    }
    // submitStep
   
    public function submitStep($filesData)
    {
        DB::beginTransaction(); // Start a transaction
        
        try {
            $product = $this->createOrUpdateProduct();

            $product_id = $product->id;

            $this->filesData($filesData, $product_id);

            $this->storeShippingCost($this->allData['shippingZones'], $product_id);

            $this->storeVariants($this->allData['variants'], $product_id);

            $this->storeFeatures($this->allData['features'], $product_id);

            $this->storeFAQs($this->allData['faqs'], $product_id);

            $this->storeCategories([
                array('level' => 1, 'category_id' => $this->allData['parentCategory']),
                array('level' => 2, 'category_id' => $this->allData['childCategory']),
                array('level' => 3, 'category_id' => $this->allData['grandChildCategory']),
            ], $product_id);

            $this->allData = [];

            DB::commit(); // Commit the transaction

            session()->flash('success', $this->isEdit ? 'Product updated successfully.' : 'Product Added successfully.');
            return redirect()->route('admin.product');
        } catch (\Exception $e) {
            DB::rollBack(); // Rollback the transaction if an exception occurs
            
            // Log the error or handle it appropriately
            session()->flash('error', 'An error occurred while saving the product.');
            return back()->withInput();
        }
    }
    private function createOrUpdateProduct()
    {
        if (!$this->isEdit) {
            $product = new Product();
        } else {
            $product = $this->product;
        }

        // Extract only the allowed fields from $this->allData
        $allowedFields = array_intersect_key($this->allData, array_flip($product->getFillable()));
        $allowedFields['size_chart_id'] = $this->allData['sizeChart'];
        $allowedFields['price_original'] = $this->allData['price'];
        $allowedFields['product_slug'] = $this->allData['productSlug'] ?? null;
        $product->fill($allowedFields);
        $product->save();

        return $product;
    }

    // filesData

    public function filesData($fileData, $productId)
    {
        foreach ($fileData as $fileType => $files) {
            foreach ($files as $file) {
                $this->storeFile($productId, $fileType, $file);
            }
        }
    }

    private function storeFile($productId, $fileType, $files)
    {
        // dd($productId, $fileType, $file);
        // Create a new instance of ProductFile
        foreach ($files as $file) {
            if (!isset($file['file_path']) || !isset($file['file_name']) || !isset($file['file_original_name'])) {
                continue;
            }
            $productFile = new ProductFile();
            // Assign values to the attributes
            $productFile->product_id = $productId;
            $productFile->image_type = $file['image_type'] ?? null;
            $productFile->file_type = $fileType;
            $productFile->file_path = $file['file_path']; // Adjust as needed
            $productFile->file_name = $file['file_name'];
            $productFile->file_original_name = $file['file_original_name'];

            // Save the product file to the database
            $productFile->save();
        }
    }
    // shippingCost
    public function storeShippingCost($shippingCostData, $product_id)
    {
        // if edit and exist $product->shippingCosts()->delete();
        if ($this->isEdit) {
            $this->product->shippingCosts()->delete();
        }
        // $shippingCostData => zone_id cost,product_id
        foreach ($shippingCostData ?? [] as $shipping) {
            // Check if all required fields are set
            if (!isset($shipping['zone'], $shipping['cost'], $shipping['shipping_method'], $shipping['delivery_time']) 
            || $shipping['zone'] == '' 
            || $shipping['cost'] == '' 
            || $shipping['shipping_method'] == '' 
            || $shipping['delivery_time'] == '') {
            continue; // Skip this iteration if any required field is missing or empty
        }
            // Create a new instance of ShippingCost
            $shippingCost = new ShippingCost();

            // Assign values to the attributes
            $shippingCost->product_id = $product_id;
            $shippingCost->zone_id = $shipping['zone'];
            $shippingCost->cost = $shipping['cost'];
            $shippingCost->shipping_method = $shipping['shipping_method'];
            $shippingCost->delivery_time = $shipping['delivery_time'];


            // Save the shipping cost to the database
            $shippingCost->save();
        }
    }
    // variants
    public function storeVariants($variantsData, $product_id)
    {
        // $product->variants()->delete();
        if ($this->isEdit) {
            $this->product->variants()->delete();
        }

        // $variantsData => name cost,product_id
        foreach ($variantsData as $variant) {
            if (!isset($variant['variant_id']) || !isset($variant['cost']) || !isset($variant['variant_option_id'])) {
                continue;
            }
            // Create a new instance of ShippingCost
            $productVariant = new ProductVariant();
            // Assign values to the attributes
            $productVariant->product_id = $product_id;
            $productVariant->variant_id = $variant['variant_id'];
            $productVariant->cost = $variant['cost'];
            $productVariant->variant_option_id = $variant['variant_option_id'] ?? null;


            // Save the shipping cost to the database
            $productVariant->save();
        }
    }
    // features
    public function storeFeatures($featuresData, $product_id)
    {
        // $product->features()->delete();
        if ($this->isEdit) {
            $this->product->features()->delete();
        }
        // $featuresData => name,product_id
        foreach ($featuresData as $feature) {
            if (!isset($feature)) {
                continue;
            }
            // Create a new instance of ShippingCost
            $productFeature = new ProductFeature();

            // Assign values to the attributes
            $productFeature->product_id = $product_id;
            $productFeature->feature = $feature;

            // Save the shipping cost to the database
            $productFeature->save();
        }
    }
    // storeFAQs
    public function storeFAQs($faqsData, $product_id)
    {
        // $product->faqs()->delete();
        if ($this->isEdit) {
            $this->product->faqs()->delete();
        }
        // $faqsData => question,answer,product_id
        foreach ($faqsData as $faq) {
            if (!isset($faq['question']) || !isset($faq['answer'])) {
                continue;
            }
            // Create a new instance of ShippingCost
            $productFAQ = new ProductFaq();

            // Assign values to the attributes
            $productFAQ->product_id = $product_id;
            $productFAQ->question = $faq['question'];
            $productFAQ->answer = $faq['answer'];

            // Save the shipping cost to the database
            $productFAQ->save();
        }
    }
    // storeCategories
    public function storeCategories($categoriesData, $product_id)
    {
        // $product->categories()->delete();
        if ($this->isEdit) {
            $this->product->categories()->delete();
        }
        // $categoriesData => level,category_id,product_id
        foreach ($categoriesData as $category) {
            // Create a new instance of ShippingCost
            if (!isset($category['level']) || !isset($category['category_id'])) {
                continue;
            }
            $productCategory = new ProductCategory();

            // Assign values to the attributes
            $productCategory->product_id = $product_id;
            $productCategory->level = $category['level'];
            $productCategory->category_id = $category['category_id'];

            // Save the product category to the database
            $productCategory->save();
        }
    }

    // edit => get values and set to $this->allData
    public function edit()
    {
        $allData = $this->product->toArray();
        $this->title = $allData['title'];
        $this->description = $allData['description'];
        $this->parentCategory = $allData['parentCategory'];
        $this->childCategory = $allData['childCategory'];
        $this->grandChildCategory = $allData['grandChildCategory'];
        $this->sku = $allData['sku'];
        $this->price = $allData['price_original'];
        $this->gender = $allData['gender'];
        $this->additional_detail = $allData['additional_detail'] ?? null;
        $this->is_custom = $allData['is_custom'] ?? 0;
        $this->is_active = $allData['is_active'] ?? 0;
        // productSlug
        $this->productSlug = $allData['product_slug'];
    }
}
