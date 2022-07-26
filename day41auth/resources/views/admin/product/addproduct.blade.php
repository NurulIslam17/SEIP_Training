@extends('admin.master')

@section('body')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="text-center">Add Product</h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ route('new.product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <p class="text-center text-danger"> {{ Session('msg') }}</p>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name"  class="form-control rounded-0" placeholder="Enter Product Name">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_category"  class="form-control rounded-0" placeholder="Enter Product Category">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Product Brand</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_brand" class="form-control rounded-0" placeholder="Enter Product Brand">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="product_price" class="form-control rounded-0" placeholder="Enter Product Price">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Status</label>
                                    <div class="col-md-8">
                                        <input type="radio" value="1" name="product_status"> Published
                                        <input type="radio" value="0" name="product_status"> Unpublished
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control rounded-0" name="product_description"  cols="10" rows="6" placeholder="Description">

                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="product_image" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="add-productbtn" value="Add Product" class="btn btn-success rounded-0">
                                    </div>
                                </div>


                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
