@extends('master')

@section('title')
    Gallery
@endsection()

@section('body')
    <section class=" container mt-4">
        <div class="row">
            <h4 class="text-center">Gallery</h4>
            <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aperiam, aut consectetur culpa debitis eaque earum eligendi excepturi explicabo incidunt itaque iure iusto laboriosam magni maiores obcaecati odio odit praesentium quas qui quibusdam recusandae rerum sunt tempora tempore unde vitae!</p>
        </div>

        <div class="row mx-5 my-2" id="animated-thumbnails">
            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/cafeteria.png')}}" data-lightbox="cafeteria">
                    <img src="{{asset('assets/image/cafeteria.png')}}" height="250px" width="100%"/>
                </a>
            </div>
            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/img1 (1).jpg')}}" data-lightbox="img1 (1)">
                    <img src="{{asset('assets/image/img1 (1).jpg')}}" height="250px" width="100%"/>
                </a>
            </div>
            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/img1 (2).jpg')}}" data-lightbox="img1 (2)">
                    <img src="{{asset('assets/image/img1 (2).jpg')}}" height="250px" width="100%"/>
                </a>
            </div>
            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/nature1.jpg')}}" data-lightbox="nature1">
                    <img src="{{asset('assets/image/nature1.jpg')}}" height="250px" width="100%"/>
                </a>
            </div>

            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/cafeteria.png')}}" data-lightbox="cafeteria">
                    <img src="{{asset('assets/image/cafeteria.png')}}" height="250px" width="100%"/>
                </a>
            </div>

            <div class="col-md-4 mx-0 px-0">
                <a href="{{asset('assets/image/nature2.jpg')}}" data-lightbox="nature2">
                    <img src="{{asset('assets/image/nature2.jpg')}}" height="250px" width="100%"/>
                </a>
            </div>

        </div>

    </section>
@endsection()

