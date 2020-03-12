<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\User;

class VendorsController extends Controller
{
    public function index() {
        return view ("vendor.index");
    }

    public function product() {
        return view ("vendor.products");
    }
}
