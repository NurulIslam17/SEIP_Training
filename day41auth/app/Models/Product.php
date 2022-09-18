<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private $product,$img,$imageName,$imgDir,$imgUrl;

    public function saveImg($request)
    {
        $this->img          = $request->file('product_image');
        $this->imageName    = rand().'.'.$this->img->getClientOriginalName();
        $this->imgDir       = 'adminupload/product/';
        $this->img->move($this->imgDir,$this->imageName  );
        $this->imgUrl       = $this->imgDir.$this->imageName ;

        return $this->imgUrl;
    }

    public function addProduct($request)
    {
        $this->product                          = new Product();
        $this->product->product_name            = $request->product_name;
        $this->product->product_category        = $request->product_category;
        $this->product->product_brand           = $request->product_brand;
        $this->product->product_price           = $request->product_price;
        $this->product->product_status          = $request->product_status;
        $this->product->product_description     = $request->product_description;
        $this->product->product_image           = $this->saveImg($request);
        $this->product->save();
    }

    public function productDelete($request)
    {
        $deleteById = Product::find($request->delete_id);
        if(file_exists($deleteById->product_image))
        {
            unlink($deleteById->product_image);
        }
        $deleteById->delete();
    }

//    public function updateProduct($request)
//    {
//        $updateId = Product::find($request->updated_id);
//        return $updateId;
//    }


}
