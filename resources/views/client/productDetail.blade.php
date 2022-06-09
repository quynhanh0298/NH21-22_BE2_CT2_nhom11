@extends('client.master')

@section('content')
<!-- Hero Section Begin -->
<section class="hero hero-normal">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>All departments</span>
                    </div>
                    <ul>
                        <li><a href="#">Fresh Meat</a></li>
                        <li><a href="#">Vegetables</a></li>
                        <li><a href="#">Fruit & Nut Gifts</a></li>
                        <li><a href="#">Fresh Berries</a></li>
                        <li><a href="#">Ocean Foods</a></li>
                        <li><a href="#">Butter & Eggs</a></li>
                        <li><a href="#">Fastfood</a></li>
                        <li><a href="#">Fresh Onion</a></li>
                        <li><a href="#">Papayaya & Crisps</a></li>
                        <li><a href="#">Oatmeal</a></li>
                        <li><a href="#">Fresh Bananas</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="#">
                            <div class="hero__search__categories">
                                All Categories
                                <span class="arrow_carrot-down"></span>
                            </div>
                            <input type="text" placeholder="What do yo u need?">
                            <button type="submit" class="site-btn">SEARCH</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>support 24/7 time</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Vegetable’s Package</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <a href="./index.html">Vegetables</a>
                        <span>Vegetable’s Package</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        @foreach($product_Id as $value)
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="{{asset('img/' .$value->image )}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3>{{$value->name}}</h3>
                    <div class="product__details__price">{{number_format ($value->price)}} VND</div>
                    <p>{{$value->description}}</p>
                    <div class="product__details__quantity">
                        <div class="quantity">
                            <div class="pro-qty">
                                <input type="text" value="1">
                            </div>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">ADD TO CARD</a>
                    <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="product__details__tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab" aria-selected="false">Reviews <span>(1)</span></a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Description</h6>
                                <p>{{$value->description}}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="tabs-3" role="tabpanel">
                            <div class="product__details__tab__desc">
                                <h6>Products Reviews</h6>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div id="comments">
                                            @foreach ($value->comments as $comment)
                                            <span style="pading-left: 42%;" class="comment_rating">
                                                @for($i =1; $i <= 5; $i++) <i class="fa fa-star {{$i <= $comment->rating ? 'active_rating' : ''}}" style="padding: 2px;"></i>
                                                    @endfor
                                            </span>
                                            <p>{{$comment->comment_content}}</p>
                                            <hr>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="comment_content" class="form-label">Comment</label>
                                            <textarea type="text" class="form-control" id="comment_content" name="comment_content" aria-describedby="emailHelp" rows="4" placeholder="Enter comment"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="rating" class="form-label">Rating</label><br>
                                            <div style="display: flex; font-size: 35px;">
                                                <span style="pading-left: 42%;" class="list_start">
                                                    @for($i =1; $i <= 5; $i++) <i class="rating fa fa-star" data-key="{{$i}}" style="padding: 3spx;"></i>
                                                        @endfor
                                                </span>
                                                <input type="hidden" value="" name="number" class="number_rating" id="rating">
                                            </div>
                                        </div>
                                        <button id="btn-comment" type="button" class="btn btn-primary" data-product-id="{{ $value->id }}" data-url="{{ route('comments.store') }}">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($productRelated as $value)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg">
                        <img src="../img/{{$value->image}}" alt="" class="product_photo" data-product-id="{{ $value->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal" ;>
                        <ul class="product__item__pic__hover">
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6><a href={{url('/productDetail')}}?product_id={{$value->id}}>{{$value->name}}</a></h6>
                        <h5>{{number_format ($value->price)}} VND</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div id="result"></div>
    </div>
</section>
<!-- Related Product Section End -->
@endsection('content')