<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        return view('user.page.cart', compact('cartItems'));
    }
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->get('id'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity'),
            'attributes' => array(
                'unit' => $request->get('unit'),
                'image' => $request->get('image'),
                'typeImage' => $request->get('typeImage'),
                'special_price' => $request->get('special_price'),
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('cart.index');
    }
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        session()->flash('success', 'Item Cart is Updated Successfully !');
        return redirect()->route('cart.index');
    }
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        return redirect()->route('cart.index');
    }
    public function clearAllCart()
    {
        \Cart::clear();
        session()->flash('success', 'All Item Cart Clear Successfully !');
        return redirect()->route('cart.index');
    }
}
