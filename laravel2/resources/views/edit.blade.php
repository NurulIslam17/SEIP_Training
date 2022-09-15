
@extends('layouts.app')
@section('content')
    <div class="container my-5">
        <div class="row mx-">
            <div class="col-md-5 mx-auto">
                <div class="card rounded-0 shadow">
                    <div class="card-header text-center">
                        <h3> Edit Information</h3>
                    </div>

                    <div class="card-body rounded-0">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


                        <form action="{{route('update.student')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <p class="text-center text-success"> {{ Session('Msg') }}</p>
                            <input type="hidden" name="update_id" value="{{ $editStudent->id }}" class="form-control rounded-0" />
                            <div class="row mb-2">
                                <label for="" class="col-md-4">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" value="{{ $editStudent->first_name }}" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" value="{{ $editStudent->last_name }}"  class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Roll</label>
                                <div class="col-md-8">
                                    <input type="number" name="roll" value="{{ $editStudent->roll }}"  class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" value="{{ $editStudent->email }}" class="form-control rounded-0" />
                                </div>
                            </div>
                            <div class="row mb-2">
                                <label for="" class="col-md-4">Phone Number</label>
                                <div class="col-md-8">
                                    <input type="number" name="phone" value="{{ $editStudent->phone }}" class="form-control rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">New Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class=" rounded-0" />
                                </div>
                            </div>

                            <div class="row mb-2">
                                <label for="" class="col-md-4">Old Img</label>
                                <div class="col-md-8">
                                    <td>
                                        <img src="{{ asset($editStudent->image) }}" height="100px" width="100px">
                                    </td>
                                    </td>
                                </div>
                            </div>



                            <div class="row mb-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="Update" class="btn btn-success rounded-0" />
                                </div>
                            </div>


                        </form>

                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
