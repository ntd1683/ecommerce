<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Trait\ResponseTrait;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class AjaxProductCategoryController extends Controller
{
    use ResponseTrait;

    public function __invoke(Request $request)
    {
        $result = ProductCategory::query()
            ->when($request->get('q'), function($query) use ($request) {
                $query->where('name', 'like', '%' . $request->get('q') . '%');
            })
            ->get();
        return $this->successResponse($result, trans('Get Product Category Successfully'));
    }
}
