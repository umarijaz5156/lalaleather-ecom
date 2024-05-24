<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ManufacturerCategory;
use App\Models\ManufacturerProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ManufacturerController extends Controller
{
    public function store(Request $request)
    {
        try {

            DB::beginTransaction();
            $validatedFields = $request->validate([
                'title' => 'required|string|min:3|max:255|unique:manufacturer_products,title',
                'shopProductURL' => 'nullable|max:255',
                'productSlug' => 'nullable|max:2048',
                'category.level1' => 'required',
                'image' => 'required|file|mimes:jpg,jpeg,png',
                'moq' => 'required|numeric',
                'price' => 'required|numeric',
                'enabled' => 'required|boolean',
                'content' => 'required'
            ]);

            if (isset($request?->category, $request?->category['level1'])) {
                $image = $request->file('image');
                $imagePath = $image->storeAs('/manufacturer/images', Carbon::now()->timestamp . '_' . $image->getClientOriginalName(), 'public');

                $data = [
                    'title' => $request->title,
                    'shop_product_url' => $request->shopProductURL,
                    'product_slug' => $request->productSlug,
                    'category_id' => $request->category['level1'],
                    'price' => $request->price,
                    'min_order_quantity' => $request->moq,
                    'enabled' => $request->enabled,
                    'content' => $request->content,
                    'image' => $imagePath
                ];

                $ManufacturerProduct = ManufacturerProduct::create($data);

                foreach ($request?->category as $key => $category) {
                    if (isset($request?->category[$key])) {
                        $level = $key == 'level1' ? 1 : ($key == 'level2' ? 2 : 3);
                        $ManufacturerProduct->categories()->attach($category, ['level' => $level]);
                    }
                }
            }
            DB::commit();
            return redirect()->route('admin.manufacturer-products-list')->with('success', 'Manufacturer product added successfully.');

        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }


    public function update(Request $request)
    {
        $validatedFields = $request->validate([
            'title' => 'required|string|min:3|max:255|unique:manufacturer_products,title,' . $request->id,
            'shopProductURL' => 'required|max:255',
            'productSlug' => 'required|max:2048',
            'image' => 'nullable|file|mimes:jpg,jpeg,png',
            'moq' => 'required|numeric',
            'price' => 'required|numeric',
            'enabled' => 'required|boolean',
            'content' => 'required'
        ]);

        $id = $request->id;

        $manufacturerProduct = ManufacturerProduct::findOrFail($id);

        $data = [
            'title' => $request->title,
            'shop_product_url' => $request->shopProductURL,
            'product_slug' => $request->productSlug,
            // 'category_id' => $request->category['level1'],
            'price' => $request->price,
            'min_order_quantity' => $request->moq,
            'enabled' => $request->enabled,
            'content' => $request->content,
        ];

        // Check if a new picture is uploaded
        if ($request->hasFile('image')) {
            // Delete previous picture if it exists
            if ($manufacturerProduct->image) {
                Storage::delete($manufacturerProduct->image);
            }

            // Upload the new picture
            $image = $request->file('image');
            $imagePath = $image->storeAs('/manufacturer/images', Carbon::now()->timestamp . '_' . $image->getClientOriginalName(), 'public');

            $data['image'] = $imagePath;
        }

        $manufacturerProduct->update($data);

        return redirect()->route('admin.manufacturer-products-list')->with('success', 'Record updated successfully.');
    }
}
