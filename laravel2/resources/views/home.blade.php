@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
            <div class="card rounded-0">
                <div class="card-header text-center">{{ ('Enter Information') }}</div>

                <div class="card-body rounded-0">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <form action="" method="post">
                            @csrf

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
            dgbdf
        </div>

    </div>
</div>
@endsection
