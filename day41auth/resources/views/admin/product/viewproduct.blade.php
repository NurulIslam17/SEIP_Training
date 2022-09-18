@extends('admin.master')

@section('body')
    <div class="row">
        <div class="col-md-11">
            <div class="card rounded-0">
                <div class="card-header">
                    <h3 class="text-center"> All Products Information</h3>
                </div>
                <div class="card-body">
                    <p class="text-center text-danger">{{Session('dlt')}}</p>
                    <p class="text-center text-danger">{{Session('update')}}</p>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> SL</th>
                                <th> Product</th>
                                <th> Category</th>
                                <th> Brand</th>
                                <th> Price</th>
                                <th> Status</th>
                                <th> Description</th>
                                <th> Image</th>
                                <th> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i=1?>
                            @foreach($products as $val)
                                <tr>
                                    <td> {{$i++}} </td>
                                    <td> {{$val->iproduct_name}} </td>
                                    <td> {{$val->product_category}} </td>
                                    <td> {{$val->product_brand}} </td>
                                    <td> {{$val->product_price}} TK</td>
                                    <td> {{$val->product_status}} </td>
                                    <td> {{$val->product_description}} </td>
                                    <td>
                                        <img src="{{asset($val->product_image)}}" style="height: 100px; width: 100px"/>
                                    </td>
                                    <td class="text-center">
                                        <span>
                                            <form action=" {{ route('edit.product') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="edit_id" value="{{$val->id}}">
                                                <input type="submit" value="Edit" class="btn btn-success mb-3">
                                            </form>
                                        </span>
                                        <span>
                                            <form action="{{ route('delete.product') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="delete_id" value="{{$val->id}}">
                                                <input type="submit" value="Delete" onclick="return confirm('Are You Sure ?')" class="btn btn-danger">
                                            </form>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
