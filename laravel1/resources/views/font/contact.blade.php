@extends('master')

@section('title')
    Home Page
@endsection()

@section('body')
    <section class="container mt-5">

        <div class="row">

            <div class="col-md-7">
                <h1 class="">Get in Touch</h1>
                <p class="fs-18 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic
                    minus mollitia nam necessitatibus, nihil odit perspiciatis placeat, quae quas ratione sit
                    temporibus voluptates! Ab atque commodi culpa debp it temporibus, vel voluptatum.</p>
                <p class="fs-18 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic
                    minus mollitia nam necessitatibus, nihil odit perspiciatis placeat, quae quas ratione sit
                    temporibus voluptates! Ab atque commodi culpa debp it temporibus, vel voluptatum.</p>
                <p class="fs-18 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic
                    minus mollitia nam necessitatibus, nihil odit perspiciatis placeat, quae quas ratione sit
                    temporibus voluptates! Ab atque commodi culpa debp it temporibus, vel voluptatum.</p>
                <p class="fs-18 text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, hic
                    minus mollitia nam necessitatibus, nihil odit perspiciatis placeat, quae quas ratione sit
                    temporibus voluptates! Ab atque commodi culpa debp it temporibus, vel voluptatum.</p>
            </div>

            <div class="col-md-5">

                <div class="card card-body mt-5">
                    <form action="#" class="">
                        <div class="row mb-3">
                            <label class="col-md-3">You Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control rounded-0" placeholder="Enter Name" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">You Phone</label>
                            <div class="col-md-9">
                                <input type="number" name="phone" class="form-control rounded-0" placeholder="Enter Phone" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">You Email</label>
                            <div class="col-md-9">
                                <input type="email" name="email" class="form-control rounded-0" placeholder="Enter Email" >
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3">You Opinion</label>
                            <div class="col-md-9">
                                <textarea class="form-control rounded-0" rows="7" placeholder="Comment here.." ></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="sendComment" value="Comment" class="btn btn-success rounded-0 resize-none">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="row">

        </div>




    </section>
@endsection()
