@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="card rounded-0 shadow">
                <div class="card-header text-center">{{ ('Enter Information') }}</div>

                <div class="card-body rounded-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="{{route('new.student')}}" method="post">
                            @csrf
                            <p class="text-center text-success"> {{ Session('Msg') }}</p>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" placeholder="Enter First Name" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Last Name</label>
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
                                <label for="" class="col-md-4">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="phn" placeholder="Enter Phone" class="form-control rounded-0" />
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

        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">All Students</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-warning">
                                <th> SL</th>
                                <th> Name</th>
                                <th> Roll</th>
                                <th> Email</th>
                                <th> Phone</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($students as $data)
                                <tr>
                                    <td> {{$data->id}} </td>
                                    <td> {{$data->first_name.' '.$data->last_name}}</td>
                                    <td> {{$data->roll}}</td>
                                    <td> {{$data->email}} </td>
                                    <td> {{$data->phn}}</td>
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
