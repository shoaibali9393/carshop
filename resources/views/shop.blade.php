@extends('layouts.default')
@section('content')

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
    <div class="ht__bradcaump__area bg-image--5">
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
    <!-- Start Shop Page -->
    <div class="page-shop-sidebar left--sidebar bg--white section-padding--lg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 order-2 order-lg-1 md-mt-40 sm-mt-40">
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
                <div class="col-lg-9 col-12 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="shop__list__wrapper d-flex flex-wrap flex-md-nowrap justify-content-between">
                                <div class="shop__list nav justify-content-center" role="tablist">
                                    <a class="nav-item nav-link active" data-toggle="tab" href="#nav-grid" role="tab"><i class="fa fa-th"></i></a>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="tab__container">
                        <div class="shop-grid tab-pane fade show active" id="nav-grid" role="tabpanel">
                            <div class="row">
                                <!-- Start Single Product -->
                                @foreach($products as $product)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="product">
                                            <div class="product__thumb">
                                                <a class="first__img" href="{{route('product.detail', [$product->category->slug, $product->slug])}}"><img  style="height: 200px; width: 250px;" src="{{asset('uploads/'.$product->featured_image)}}" alt="product image"></a>
                                                <a class="second__img animation1" href="{{route('product.detail', [$product->category->slug, $product->slug])}}"><img style="height: 200px; width: 250px;" src="{{asset('uploads/'.$product->featured_image)}}" alt="product image"></a>
                                                <div class="new__box">
                                                    <span class="new-label">Hot</span>
                                                </div>
                                                <ul class="prize position__right__bottom d-flex">
                                                    <li>${{$product->price}}</li>
                                                </ul>
                                                <div class="action">
                                                    <div class="actions_inner">
                                                        <ul class="add_to_links">
                                                            <li><a class="cart" href="cart.html"></a></li>
                                                            <li><a class="wishlist" href="wishlist.html"></a></li>
                                                            <li><a class="compare" href="compare.html"></a></li>
                                                            <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product__content">
                                                <h4><a href="{{route('product.detail', [$product->category->slug, $product->slug])}}">For More Details</a></h4>
                                                <div class="product-addto-links clearfix">


                                                </div>
                                                <ul class="rating d-flex">
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            <!-- End Single Product -->

                            </div>
                            <ul class="wn__pagination">
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
