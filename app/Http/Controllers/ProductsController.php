<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Products;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::where('status', Products::APPROVED)->with('user')->latest()->paginate(12);

        return view('shop', compact('products'));
    }

    public function store() {
        $data = request()->validate([
            'name' => 'required',
            'web_id' => 'required',
            'amount' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'condition' => 'required',
            'brand' => 'required',
            'image' => 'required|image'
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $data['image'] = $imagePath;

        $create = auth()->user()->products()->create($data);

        if($create) {
            return redirect()->back()->with('success', 'Product Successfully Added');
        }

        return redirect()->back()->with('error', 'Error adding product');
    }

    public function accept(Products $product) {
        $product->status = Products::APPROVED;
        $product->admin_id = auth()->user()->id;
        $product->save();

        return redirect()->back();
    }

    public function reject(Products $product) {
        $product->status = Products::REJECTED;
        $product->admin_id = auth()->user()->id;
        $product->save();

        return redirect()->back();

    }

    public function show() {
        return view("product-details");
    }
}
