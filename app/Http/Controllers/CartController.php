<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Product $product)
    {
        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 4,
            'attributes' => array(),
            'associatedModel' => $product
        ));

        return back();
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.index', compact('cartItems'));
    }

    public function update($itemId)
    {
        \Cart::session(auth()->id())->update($itemId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            ),
        ]);

        return back();
    }

    public function destroy($itemId)
    {
        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }
}
