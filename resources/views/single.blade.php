@extends('layouts.default')
@section('content')

    <style>
        #snackbar {
            visibility: hidden;
            min-width: 300px;
            margin-left: -125px;
            background-color: #2ecc71;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        #wishtoast {
            visibility: hidden;
            min-width: 300px;
            margin-left: -125px;
            background-color: #2ecc71;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #wishtoast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }


    </style>
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="bradcaump__inner text-center">

                    <nav class="bradcaump-content">

                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start main Content -->
<div class="maincontent bg--white pt--80 pb--55">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-12">
                <div class="wn__single__product">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div   class="wn__fotorama__wrapper">
                                <div  style="height: 300px; width: 325px;" class="fotorama wn__fotorama__action" data-nav="thumbs">
                                    <a href="{{asset('uploads/'.$product->featured_image)}}"><img style="height: 50px; width: 325px;" src="{{asset('uploads/'.$product->featured_image)}}" alt=""></a>
{{--                                    <a href="{{asset('uploads/'.$product->featured_image)}}"><img src="{{asset('uploads/'.$product->featured_image)}}jpg" alt=""></a>--}}
{{--                                    <a href="{{asset('uploads/'.$product->featured_image)}}"><img src="{{asset('uploads/'.$product->featured_image)}}" alt=""></a>--}}
{{--                                    <a href="{{asset('uploads/'.$product->featured_image)}}"><img src="{{asset('uploads/'.$product->featured_image)}}" alt=""></a>--}}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="product__info__main">
                                <h1>{{$product->name}}</h1>
                                <div class="product-info-stock-sku d-flex">
                                    <p>Availability:<span>{{$product->color}}</span></p>

                                </div>
                                <div class="product-reviews-summary d-flex">
                                    <ul class="rating-summary d-flex">
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                        <li class="off"><i class="zmdi zmdi-star-outline"></i></li>
                                    </ul>

                                </div>
                                <div class="price-box">
                                    <span>${{$product->price}}</span>
                                </div>


                                <div class="product__overview">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product__info__detailed">
                    <div class="pro_details_nav nav justify-content-start" role="tablist">
                        <a class="nav-item nav-link active" data-toggle="tab" href="#nav-details" role="tab">Details</a>

                    </div>
                    <div class="tab__container">
                        <!-- Start Single Tab Content -->
                        <div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
                            <div class="description__attribute">
<p>
    Good Product
</p>
                            </div>
                        </div>
                        <!-- End Single Tab Content -->
                        <!-- Start Single Tab Content -->

                        <!-- End Single Tab Content -->
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
                <div class="shop__sidebar">
                    <aside class="wedget__categories poroduct--cat">
                        <h3 class="wedget__title">Product Categories</h3>
                        <ul>
                            <li><a href="{{route('home')}}">All</a></li>

                        @foreach($categories as $category)
                                <li><a href="{{route('category.products', [$category->slug])}}">{{$category->name}} <span>({{$category->products_count}})</span></a></li>
                            @endforeach
                        </ul>
                    </aside>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- End main Content -->
<!-- Start Search Popup -->
<div class="box-search-content search_active block-bg close__top">
    <form id="search_mini_form--2" class="minisearch" action="#">
        <div class="field__search">
            <input type="text" placeholder="Search entire store here...">
            <div class="action">
                <a href="#"><i class="zmdi zmdi-search"></i></a>
            </div>
        </div>
    </form>
    <div class="close__wrap">
        <span>close</span>
    </div>
</div>
<!-- End Search Popup -->
<!-- Start NEwsletter Area -->
<section class="wn__newsletter__area bg-image--2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-5 col-md-12 col-12 ptb--150">
                <div class="section__title text-center">
                    <h2>Stay With Us</h2>
                </div>
                <div class="newsletter__block text-center">
                    <p>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers.</p>
                    <form action="#">
                        <div class="newsletter__box">
                            <input type="email" placeholder="Enter your e-mail">
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>





@stop
