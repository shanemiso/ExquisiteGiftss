<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PaymentDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->validate([
            'vendor_id' => 'required|exists:vendors,id',
        ]);
        
        $products = Product::where('vendor_id', $request->vendor_id);
        return view('home', ['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Product  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = Product::find($request('id'));

        return view('home', compact('products'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $paymentDetails
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $products = Product::find($request('id'));

        return view('home', compact('products'));
    }
}
