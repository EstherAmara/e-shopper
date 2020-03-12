<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Products;

class AdminController extends Controller
{
    public function index() {
        return view ('admin.index');
    }

    public function products() {
        $products = Products::where('status', Products::PENDING)->latest()->get();
        return view('admin.products', compact('products'));
    }
}
