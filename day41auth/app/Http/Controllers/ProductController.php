<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct()
    {
        return view('admin.product.addproduct');
    }
    public function viewProduct()
    {
        return view('admin.product.viewproduct');
    }
}
