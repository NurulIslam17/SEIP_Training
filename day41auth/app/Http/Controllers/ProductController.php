<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public $product,$products;

    private $img,$imageName,$imgDir,$imgUrl;

    public function saveImg($request)
    {
        $this->img          = $request->file('product_image');
        $this->imageName    = rand().'.'.$this->img->getClientOriginalName();
        $this->imgDir       = 'adminupload/product/';
        $this->img->move($this->imgDir,$this->imageName  );
        $this->imgUrl       = $this->imgDir.$this->imageName ;

        return $this->imgUrl;
    }

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
        return view('admin.product.edit',[
            'data'       => Product::find($request->edit_id),
            'allData'    => Product::all()
        ]);
    }

    public  function updateProduct(Request $request)
    {
        $this->product  = Product::find($request->update_id);
        return $request;
    }
}
