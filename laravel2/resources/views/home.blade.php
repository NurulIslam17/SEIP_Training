@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-4">
            <div class="card rounded-0 shadow">
                <div class="card-header text-center">
                    <h3> Enter Information</h3>
                </div>

                <div class="card-body rounded-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{route('new.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p class="text-center text-success"> {{ Session('Msg') }}</p>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">F Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" placeholder="Enter First Name" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">L Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" placeholder="Enter Last Name" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Roll</label>
                                <div class="col-md-8">
                                    <input type="number" name="roll" placeholder="Enter Roll" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" placeholder="Enter Email" class="form-control rounded-0" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Phone</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" placeholder="Enter Phone" class="form-control rounded-0" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class=" rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" class="btn btn-success rounded-0" />
                                </div>
                            </div>


                        </form>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">All Students</h3>
                    <p class="text-center text-danger"> {{Session('dltMsg')}}</p>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-info">
                                <th> Name</th>
                                <th> Roll</th>
                                <th> Email</th>
                                <th> Phone</th>
                                <th> Image</th>
                                <th> Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach($students as $data)
                                <tr>
                                    <td> {{$data->first_name.' '.$data->last_name}}</td>
                                    <td> {{$data->roll}}</td>
                                    <td> {{$data->email}} </td>
                                    <td> {{$data->phone}}</td>
                                    <td>
                                        <img src="{{ asset($data->image) }}" height="100px" width="100px">
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('student.edit',['id'=>$data->id]) }}" class="btn btn-success rounded-0 mb-2" title="Edit"> Edit </a>
{{--                                        <a href="{{route('student.delete',['id'=>$data->id])}}" onclick="return confirm('Are you sure to delete It ?')"  class="btn btn-danger rounded-0" title="Delete"> Delete </a>--}}

                                        <form action="{{ route('student.delete')}}" method="post">
                                          @csrf
                                            <input type="hidden" name="student_id" value="{{$data->id}}">
                                            <input type="submit" onclick="return confirm('Are you sure to delete It ?')"  class="btn btn-danger rounded-0" value="Delete">
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>



                    </table>

                </div>
            </div>
        </div>

    </div>
</div>
@endsection
