<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bundle;
use App\Models\Product;
use App\Models\BundleProduct;

class BundleController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $bundles = $user->bundles()->get();
        return view('bundles.index', compact('bundles'));
    }

    public function create()
    {
        $products = Product::all();
        return view('bundles.create', compact('products'->$products));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $bundle = new Bundle();
        $bundle->name = $request->input('name');
        $bundle->price = $request->input('price');
        $bundle->user_id = $user->id;
        $bundle->save();

        $bundle->products()->attach($request->input('products'));

        return redirect()->route('bundles.index')->with('success', 'Bundle created successfully');
    }

    public function show(Bundle $bundle)
    {
        return view('bundles.show', compact('bundle'));
    }

    public function edit(Bundle $bundle)
    {
        $products = Product::all();
        return view('bundles.edit', compact('bundle', 'products'->$products));
    }

    public function update(Request $request, Bundle $bundle)
    {
        $bundle->name = $request->input('name');
        $bundle->price = $request->input('price');
        $bundle->save();

        $bundle->products()->sync($request->input('products'));

        return redirect()->route('bundles.index')->with('success', 'Bundle updated successfully');
    }

    public function destroy(Bundle $bundle)
    {
        $bundle->products()->detach();
        $bundle->delete();

        return redirect()->route('bundles.index')->with('success', 'Bundle deleted successfully');
    }
}
