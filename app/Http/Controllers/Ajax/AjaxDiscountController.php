<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Discount;
use Illuminate\Http\Request;

class AjaxDiscountController extends Controller
{
    public function __invoke(Request $request)
    {
        $result = Discount::query()
            ->when($request->get('q'), function($query) use ($request) {
                $query->where('name', 'like', '%' . $request->get('q') . '%');
            })
            ->get();
        return $this->successResponse($result, trans('Get Product Category Successfully'));
    }
}
