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

                          <p class="text-center text-danger"> {{ Session('update') }}</p>

                            <form action="{{ route('update.product') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="update_id" value="{{ $data->id }}">

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_name" value="{{$data->product_name}}" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Category</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_category" value="{{$data->product_category}}" class="form-control rounded-0">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label class="col-md-4">Product Brand</label>
                                    <div class="col-md-8">
                                        <input type="text" name="product_brand" value="{{$data->product_brand}}" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="number" name="product_price" value="{{$data->product_price}}" class="form-control rounded-0">
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Status</label>
                                    <div class="col-md-8">
                                        <input type="radio" value="1" {{ $data->product_status=='1' ? 'checked' : ' ' }} name="product_status"> Published
                                        <input type="radio" value="0" {{ $data->product_status=='0' ? 'checked' : ' ' }} name="product_status"> Unpublished
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control rounded-0" name="product_description" cols="10" rows="6">
                                            {{$data->product_description}}
                                        </textarea>
                                    </div>
                                </div>

                                <div class="row mt-2">
                                    <label class="col-md-4">Product Image</label>
                                    <div class="col-md-8">
                                        <img src="{{asset($data->product_image)}}" alt="Img" style="height: 100px; width: 100px">
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
                                        <input type="submit" onclick=" return confirm('Are You Sure to Update Info ?')" name="add-productbtn" value="Update Product" class="btn btn-success rounded-0">
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
