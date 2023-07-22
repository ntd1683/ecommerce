<?php

namespace App\Http\Controllers;

use App\Http\Trait\ResponseTrait;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductImageDetail;
use App\Models\ProductInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Revolution\Google\Sheets\Facades\Sheets;

class GoogleController extends Controller
{
    use ResponseTrait;

    public function processImage($image, $value, $productId)
    {
        if ($value != '') {
            $productImage = ProductImage::create([
                'link_image' => trim($value),
                'type' => 1,
            ]);

            $productImageId = $productImage->id;

            ProductImageDetail::create([
                'product_id' => $productId,
                'product_image_id' => $productImageId,
            ]);
        }
    }

    public function importProduct(Request $request)
    {
        try {
            $listError = [];
            $sheet = $request->get('sheet');
            $arr = explode('/', $sheet);
            $spreadsheetId = $arr[array_search('d', $arr) + 1];
            $sheet = $request->get('sheet_tab_name');

            $sheets = Sheets::spreadsheet($spreadsheetId)->sheet($sheet)->get();
            $header = $sheets->pull(0);
            $posts = Sheets::collection($header, $sheets);
            $posts = $posts->take(5000);

            $data = $posts->toArray();

            $name = $request->get('name') ?: 'name';
            $sku = $request->get('sku') ?: 'sku';
            $product_category_id = $request->get('product_category_id') ?: 'product_category_id';
            $price = $request->get('price') ?: 'price';
            $pin = $request->get('pin') ?: 'pin';
            $unit = $request->get('unit') ?: 'unit';
            $quantity = $request->get('quantity') ?: 'quantity';
            $description = $request->get('description') ?: 'description';
            $image = $request->get('image') ?: '';
            $image1 = $request->get('image1') ?: '';
            $image2 = $request->get('image2') ?: '';
            $image3 = $request->get('image3') ?: '';
            $image4 = $request->get('image4') ?: '';

            foreach ($data as $key => $value) {
                $tmp = [
                    'name' => $value[$name],
                    'sku' => $value[$sku],
                    'product_category_id' => $value[$product_category_id],
                    'price' => $value[$price],
                    'pin' => $value[$pin],
                    'unit' => $value[$unit],
                    'quantity' => $value[$quantity],
                    'description' => $value[$description],
                ];

                $validator = Validator::make($tmp, [
                    'name' => ['required', 'string'],
                    'sku' => ['required', 'string', 'unique:App\Models\Product,sku'],
                    'product_category_id' => ['required', 'integer'],
                    'price' => ['required', 'digits_between:3,19'],
                    'pin' => ['nullable', Rule::in([1, 0])],
                    'unit' => ['nullable', 'string'],
                    'quantity' => ['required', 'integer'],
                    'description' => ['nullable', 'string'],
                ]);

                if ($validator->fails()) {
                    $message = implode('', $validator->errors()->all());
                    $listError[] = 'Line '.$key + 1 .': '.$message;
                } else {
                    try {
                        $product = Product::create([
                            ...$tmp,
                            'user_id' => auth()->user()->id,
                        ]);

                        ProductInventory::create([
                            'product_id' => $product->id,
                            'quantity' => $tmp['quantity'],
                        ]);

                        if ($image != '') {
                            $this->processImage($image, $value[$image], $product->id);
                        }

                        if ($image1 != '') {
                            $this->processImage($image1, $value[$image1], $product->id);
                        }

                        if ($image2 != '') {
                            $this->processImage($image2, $value[$image2], $product->id);
                        }

                        if ($image3 != '') {
                            $this->processImage($image3, $value[$image3], $product->id);
                        }

                        if ($image4 != '') {
                            $this->processImage($image4, $value[$image4], $product->id);
                        }
                    } catch (\Exception $e) {
                        $listError[] = 'Line '.$key + 1 .': '.$e->getMessage();
                    }
                }
            }

            return redirect()->route('index')->with('success', 'Upload data successfully');
        } catch (\Exception $e) {
            return redirect()->route('index')->withErrors('Upload data error');
        }
    }
}
