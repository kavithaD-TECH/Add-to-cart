<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function index(){
    return view('cart.index');
   }
    public function viewCart()
    {
        $cartItems = Cart::all();
        return view('cart.list', compact('cartItems'));
    }

    
    // Add Product to Cart
    public function addToCart($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->route('cart.list')->with('error', 'Product not found!');
        }

        Cart::create([
            'product_id' => $product->id,
            'product_name' => $product->name,      // corrected
            'product_image' => $product->image,    // corrected
            'price' => $product->price,
            'quantity' => 1,
        ]);

        return redirect()->route('cart.list')->with('success', 'Product added to cart!');
    }


     // Edit Cart Item
    public function edit($id)
    {
        $cartItem = Cart::find($id);

        if (!$cartItem) {
            return redirect()->route('cart.index')->with('error', 'Cart item not found!');
        }

        return view('cart.edit', compact('cartItem'));
    }

    // Update Cart Quantity
    public function update(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->quantity = $request->quantity;
            $cartItem->save();
        }

        return redirect()->route('cart.list')->with('success', 'Cart updated successfully!');
    }

    // Delete Cart Item
    public function destroy($id)
    {
        $cartItem = Cart::find($id);

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('cart.list')->with('success', 'Item removed from cart!');
    }
}
