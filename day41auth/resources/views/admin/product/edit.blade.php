@extends('admin.master')

@section('body')
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="text-center">Edit Product</h3>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('update.product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <p class="text-center text-danger"> {{ Session('msg') }}</p>

                                <input type="hidden" name="updated_id" value="{{$edit_id->id}}">

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" value="{{ $edit_id->product_name }}" class="form-control rounded-0" placeholder="Enter Product Name">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_category" value="{{ $edit_id->product_category }}" class="form-control rounded-0" placeholder="Enter Product Category">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Brand</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_brand" value="{{ $edit_id->product_brand }}" class="form-control rounded-0" placeholder="Enter Product Brand">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="product_price" value="{{ $edit_id->product_price }}" class="form-control rounded-0" placeholder="Enter Product Price">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Status</label>
                                    <div class="col-md-8">
                                        <input type="radio" value="1" {{$edit_id->product_status == '1' ? 'checked':'' }} name="product_status"> Published
                                        <input type="radio" value="0" {{$edit_id->product_status == '0' ? 'checked':'' }} name="product_status"> Unpublished
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control rounded-0" name="product_description"  cols="10" rows="6" placeholder="Description">
                                           {{ $edit_id->product_description }}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Old Image</label>
                                    <div class="col-md-8">
                                        <img src="{{asset($edit_id->product_image)}}" style="height: 100px"; width="100px">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">New Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="product_image" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" name="add-productbtn" value="Update Product" class="btn btn-success rounded-0">
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
