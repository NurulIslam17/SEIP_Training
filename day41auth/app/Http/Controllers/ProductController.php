<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public $product,$products;

    public function addProduct()
    {
        return view('admin.product.addproduct');
    }
    public function newProduct(Request $request)
    {
        $product = new Product();
        $product->addProduct($request);
        return redirect()->back()->with('msg','Product Inserted');
    }
    public function viewProduct()
    {
        $products = Product::orderBy('id','DESC')->get();
        return view('admin.product.viewproduct',compact('products'));
    }

    public  function deleteProduct(Request $request)
    {
        $product = new Product();
        $product ->productDelete($request);
        return redirect()->back()->with('dlt','Product Deleted');
    }

    public function editProduct(Request $request)
    {
        $edit_id = Product::find($request->edit_id);
        return view('admin.product.edit',compact('edit_id'));
    }

    public  function updateProduct(Request $request)
    {

//        $update_id = new Product();
//        $update_id->updateProduct($request);
//        return redirect()->back()->with('update','Product Updated');

        $update_id = $request->updated_id;
        return $update_id;
    }
}
