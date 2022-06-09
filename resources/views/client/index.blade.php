@extends('client.master')

@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All categories</span>
                        </div>
                        <ul>
                            <?php foreach ($allProtypes as $value) {
                                ?>
                            <li><a href="{{url('/protype')}}?type_id={{$value->id}}">{{ $value->name }}</a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ url('/productsearch') }}">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input oninput="Search(this.value)" type="text" placeholder="What do yo u need?" id="keyword" name="keyword">
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
                    <div class="hero__item set-bg" data-setbg="img/hero/banner2.jpg">
                        {{-- <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($allProtypes as $value)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg">
                        @foreach ($allProducts as $key)
                            @if ($key->type_id == $value->id)
                            <a href="/product"><img src="../img/{{$key->image}}" alt=""></a>
                                @break
                            @endif
                        @endforeach        
                            <h5><a href="/product">{{ $value->name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
            @foreach($allProtypes as $key)
                @foreach ($pagination as $value)        
                    @if($value->type_id == $key->id)
                <div class="col-lg-4 col-md-4 col-sm-6 mix {{$key->name}}">
                    <div class="featured__item">
                        <div class="featured__item__pic">
                            <img src="../img/{{$value->image}}" alt="" class="product_photo" data-product-id="{{ $value->id }}"
                            data-bs-toggle="modal" data-bs-target="#exampleModal"; >   
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="{{url('shoping-cart')}}?product_id={{$value->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{url('/productDetail')}}?product_id={{$value->id}}">{{$value->name}}</a>&nbsp;&nbsp;<span class="badge bg-warning text-dark">{{$key->name}}</span></h6>                                               
                            <h5>{{number_format($value->price)}} VND </h5>
                        </div>
                    </div>
                        {{-- @if(Auth::check())
                        <button class="btn btn-danger btn-like" data-url="{{ route('products.like') }}" 
                        data-product-id="{{ $value->id }}">Like {{$value->likes}}</button> 
                        @endif --}}
                </div>
                        @endif
                    @endforeach
                @endforeach
                <div id="result"></div>
            </div>
            <div id="result"></div>          
            <div style="margin-left: 80%; ">
                {{$pagination->links();}}
            </div>       
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner3.jpg" style="height: 220px" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="img/banner/banner4.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->
    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($latestProducts as $aa)
                            <div class="latest-prdouct__slider__item">
                                @foreach ($latestProducts as $aa)
                                <a href="{{url('/productDetail')}}?product_id={{$aa->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/{{$aa->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$aa->name}}</h6>
                                        <span>{{number_format($aa->price)}} VND</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @endforeach                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Sale Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($SaleProducts as $aa)
                            <div class="latest-prdouct__slider__item">
                                @foreach ($SaleProducts as $aa)
                                <a href="{{url('/productDetail')}}?product_id={{$aa->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/{{$aa->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$aa->name}}</h6>
                                        <span>{{number_format($aa->price)}} VND</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @endforeach                         
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Like Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($likeProducts as $aa)
                            <div class="latest-prdouct__slider__item">
                                @foreach ($likeProducts as $aa)
                                <a href="{{url('/productDetail')}}?product_id={{$aa->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/{{$aa->image}}" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$aa->name}}</h6>
                                        <span>{{number_format($aa->price)}} VND</span>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                            @endforeach                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->  
 @endsection('content')