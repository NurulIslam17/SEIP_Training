@extends('fontend.master')

@section('title')
    Single Page Product
@endsection

@section('body')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row my-0">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">

            <div class="row my-0 py-0">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 me-0">
                    <div class="product-breadcroumb">
                        <a href="{{route('home.page')}}">Home</a>
                        <a href="#">Category Name</a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="product-images">
                        <div class="product-main-img">
                            <img src="{{asset($product->product_image)}}" class="img-fluid" alt="">
                        </div>

                        <div class="product-gallery">
                            <img src="{{asset('/')}}fontend/img/product-thumb-1.jpg" alt="">
                            <img src="{{asset('/')}}fontend/img/product-thumb-2.jpg" alt="">
                            <img src="{{asset('/')}}fontend/img/product-thumb-3.jpg" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-inner">
                        <h2 class="product-name">{{$product->product_name}}</h2>
                        <div class="product-inner-price">
                            <ins>{{$product->product_price}} <span class="text-dark fw-bolder"> ৳ </span></ins>
                        </div>

                        <form action="" class="cart">
                            <div class="quantity">
                                <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                            </div>
                            <button class="add_to_cart_button" type="submit">Add to cart</button>
                        </form>

                        <div class="product-inner-category">
                            <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                        </div>

                        <div role="tabpanel">
                            <ul class="product-tab" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home">
                                    <h2>Product Description</h2>
                                    <p>{{$product->product_description}}</p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <h2>Reviews</h2>
                                    <div class="submit-review">
                                        <p><label for="name">Name</label> <input name="name" type="text"></p>
                                        <p><label for="email">Email</label> <input name="email" type="email"></p>
                                        <div class="rating-chooser">
                                            <p>Your rating</p>

                                            <div class="rating-wrap-post">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                        <p><input type="submit" value="Submit"></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
