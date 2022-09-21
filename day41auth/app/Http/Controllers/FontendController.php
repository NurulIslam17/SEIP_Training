<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class FontendController extends Controller
{
    public $product;
    public function index()
    {
        $product = Product::where('product_status',1)->orderBy('id','DESC')->take(5)->get();
        return view('fontend.home.home',[
            'product'=>$product
        ]);
    }
    public function productDetails($id)
    {
        $this->product = Product::find($id);
        return view('fontend.home.product-detail',[
            'product' => $this->product
        ]);
    }
}
