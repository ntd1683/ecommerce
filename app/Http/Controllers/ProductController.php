<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Media;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductImageDetail;
use App\Models\ProductInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        try {
            $arr = $request->validated();
            $product = Product::create([
                ...$arr,
            ]);

            ProductInventory::create([
                'product_id' => $product->id,
                'quantity' => $request->get('quantity'),
            ]);
            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $name = 'qr_' . Str::random(5) . '.' . $image->extension();
                    $path = $image->storeAs('images', $name, 'public');

                    $productImage = ProductImage::create([
                        'type' => 0,
                        'link_image' => $path . $image->extension(),
                    ]);

                    $productImageId = $productImage->id;

                    ProductImageDetail::create([
                        'product_id' => $product->id,
                        'product_image_id' => $productImageId,
                    ]);
                }
            }

            return redirect()->route('admin.index')->with('success', trans('Add Product Successfully'));
        } catch (\Exception $e) {
            return redirect()->route('admin.index')->withErrors(trans('Add Product Failed'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
