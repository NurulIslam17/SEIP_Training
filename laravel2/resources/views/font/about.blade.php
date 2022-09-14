@extends('master')

@section('title')
    About
@endsection()

@section('body')
    <section class="about">
        <div class="container">
           <div class="row">
               <h1 class="text-center"> Our Team</h1>
               <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam aperiam aspernatur corporis doloribus dolorum ducimus eius esse eum, exercitationem fugiat illo in, itaque laboriosam libero maxime mollitia nam nemo nihil nisi numquam officia quis reiciendis repudiandae saepe sapiente sed sit sunt suscipit temporibus velit veniam vitae voluptas voluptates?</p>
           </div>

            <div class="row">

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('assets/aboutImg/Designer.png')}}" class="card-img-top" style="height: 220px; width: 100%" />

                        <h4 class="ps-2">Alice Cook</h4>
                        <p class="ps-2">Web Designer</p>
                        <a href="#" class="btn btn-warning rounded-0 col-md-3 m-2">Details</a>

                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('assets/aboutImg/Fullstack.png')}}" class="card-img-top" style="height: 220px; width: 100%" />

                        <h4 class="ps-2">Sheldon</h4>
                        <p class="ps-2">Fullstack Developer</p>
                        <a href="#" class="btn btn-warning rounded-0 col-md-3 m-2">Details</a>

                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="{{asset('assets/aboutImg/ProjectAna.png')}}" class="card-img-top" style="height: 220px; width: 100%" />

                        <h4 class="ps-2">De Morgan</h4>
                        <p class="ps-2">Project Analyst</p>
                        <a href="#" class="btn btn-warning rounded-0 col-md-3 m-2">Details</a>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('assets/aboutImg/content.png')}}" class="card-img-top" style="height: 220px; width: 100%" />

                        <h4 class="ps-2">Shahed</h4>
                        <p class="ps-2">Content Writer</p>
                        <a href="#" class="btn btn-warning rounded-0 col-md-3 m-2">Details</a>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <img src="{{asset('assets/aboutImg/Dev.png')}}" class="card-img-top" style="height: 220px; width: 100%" />

                        <h4 class="ps-2">Sreyas</h4>
                        <p class="ps-2">Product Designer</p>
                        <a href="#" class="btn btn-warning rounded-0 col-md-3 m-2">Details</a>

                    </div>
                </div>


            </div>

        </div>
    </section>
@endsection()


