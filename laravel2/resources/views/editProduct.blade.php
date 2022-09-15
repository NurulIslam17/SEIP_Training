{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}

{{--            <div class="col-md-5">--}}
{{--                <div class="card rounded-0 shadow">--}}
{{--                    <div class="card-header text-center">--}}
{{--                        <h3> Enter Product</h3>--}}
{{--                    </div>--}}

{{--                    <div class="card-body rounded-0">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <p class="text-center text-success"> {{ Session('Msg') }}</p>--}}

{{--                            <input type="hidden" name="update_id" value="{{ $editProduct->id }}">--}}
{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">product_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="product_name" value="{{ $editProduct->product_name }}" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">product_price</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="product_price"  value="{{ $editProduct->product_price }}" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">brand_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="brand_name" value="{{ $editProduct->brand_name }}" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">category_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="category_name" value="{{ $editProduct->category_name }}" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4"></label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="submit" name="btnProduct" value="Update" class="btn btn-success rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

