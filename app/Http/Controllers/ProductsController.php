<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Products;

class ProductsController extends Controller
{
    public function index() {
        $products = Products::where('status', Products::APPROVED)->latest()->get();

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
        ]);

        auth()->user()->products()->create($data);

        return redirect()->back();

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
}
