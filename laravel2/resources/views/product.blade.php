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
{{--                        <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">--}}
{{--                            @csrf--}}
{{--                            <p class="text-center text-success"> {{ Session('Msg') }}</p>--}}
{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">product_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="product_name" placeholder="product_name" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">product_price</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="product_price" placeholder="product_price" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">brand_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="brand_name" placeholder="brand_name" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4">category_name</label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="text" name="category_name" placeholder="category_name" class="form-control rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                            <div class="row mb-2">--}}
{{--                                <label for="" class="col-md-4"></label>--}}
{{--                                <div class="col-md-8">--}}
{{--                                    <input type="submit" name="btnProduct" class="btn btn-success rounded-0" />--}}
{{--                                </div>--}}
{{--                            </div>--}}


{{--                        </form>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-md-7">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">--}}
{{--                        <h3 class="text-center">All Students</h3>--}}
{{--                        <p class="text-center text-danger"> {{Session('dltMsg')}}</p>--}}
{{--                    </div>--}}

{{--                    <div class="card-body">--}}
{{--                        <table class="table table-bordered table-striped">--}}
{{--                            <thead>--}}
{{--                            <tr class="bg-info">--}}
{{--                                <th> SL</th>--}}
{{--                                <th> Product</th>--}}
{{--                                <th> Price</th>--}}
{{--                                <th> Brand</th>--}}
{{--                                <th> Category</th>--}}
{{--                                <th> Action</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}

{{--                            <tbody>--}}
{{--                                @foreach($product as $val)--}}
{{--                                    <tr>--}}

{{--                                        <td> 1</td>--}}
{{--                                        <td> {{ $val->product_name }}</td>--}}
{{--                                        <td> {{ $val->product_price }}</td>--}}
{{--                                        <td> {{ $val->brand_name }}</td>--}}
{{--                                        <td> {{ $val->category_name }}</td>--}}
{{--                                        <td>--}}

{{--                                            <a href="{{ route('edit.product',['id'=>$val->id])}}" class="btn btn-success rounded-0"> Edit</a>--}}

{{--                                            <form action="{{ route('delete.product') }}" method="post">--}}
{{--                                                @csrf--}}
{{--                                                <input type="hidden" name="delete_id" value="{{ $val->id }}">--}}
{{--                                                <input type="submit" value="Delete" class="btn btn-danger">--}}

{{--                                            </form>--}}

{{--                                        </td>--}}

{{--                                    </tr>--}}
{{--                                @endforeach()--}}

{{--                            </tbody>--}}



{{--                        </table>--}}

{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
