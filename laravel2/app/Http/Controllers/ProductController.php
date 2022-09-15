<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Product;
//use Illuminate\Http\Request;
//
//class ProductController extends Controller
//{
//    public  function addProduct(Request $request)
//    {
//
//        $product = new Product();
//        $product->product_name = $request->product_name;
//        $product->product_price = $request->product_price;
//        $product->brand_name = $request->brand_name;
//        $product->category_name = $request->category_name;
//
//        $product->save();
//        return redirect()->back();
//
//    }
//
//    public  function deleteProduct(Request $request)
//    {
//        $del = Product::find($request->delete_id);
//        $del->delete();
//        return redirect()->back();
//
//    }
//
//    public  function editProduct($id)
//    {
//        return view('editProduct',
//            [
//                'editProduct' => Product::find($id),
//                'product'=>Product::all()
//            ]
//        );
//    }
//
//    public function updateProduct(Request $request)
//    {
//        $product = Product::find($request->update_id);
//
//
//        $product->product_name = $request->product_name;
//        $product->product_price = $request->product_price;
//        $product->brand_name = $request->brand_name;
//        $product->category_name = $request->category_name;
//
//        $product->save();
//        return redirect('/home');
//    }
//}
