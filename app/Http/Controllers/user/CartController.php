<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request)
    {

        $productId = $request->input('productId');
        $quantity = $request->input('quantity', 1);

        $product = Product::find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $user = AuthController::user();

        $cartItem = Cart::where('userId', $user->id)
            ->where('productId', $productId)
            ->first();

        if ($cartItem) {
            $cartItem->quantity++;
        } else {
            $cartItem = new Cart();
            $cartItem->user_id = $user->id;
            $cartItem->product_id = $productId;
            $cartItem->quantity = $quantity;
        }

        $cartItem->save();

        return response()->json(['message' => 'Product added to cart successfully']);
    }

    public function index()
    {
        $user = Auth::user();

        $cartItems = Cart::with('bundle')->where('user_id', $user->id)->get();

        return view('cart1', ['cartItems' => $cartItems]);
    }
}
