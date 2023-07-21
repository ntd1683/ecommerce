<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Http\Trait\ResponseTrait;
use App\Models\Discount;
use Illuminate\Http\Request;

class AjaxDiscountController extends Controller
{
    use ResponseTrait;

    public function __invoke(Request $request)
    {
        $result = auth()->user()->discounts()
            ->actived()->expired()
            ->when($request->get('q'), function($query) use ($request) {
                $query->where('code', 'like', '%' . $request->get('q') . '%');
            })
            ->get();
        return $this->successResponse($result, trans('Get Discount Successfully'));
    }
}
