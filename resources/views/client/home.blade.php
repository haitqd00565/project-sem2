@extends('layout.client-layout-v2',['page_title'=>'Trang chủ'])
@section('slider')
    <section class="slide1">
        <div class="wrap-slick1">
            <div class="slick1">
                <div class="item-slick1 item1-slick1"
                     style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/outerwear_1600x.jpg?v=1532559381);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="fadeInDown">
							Welcome To
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
                            Sea Fashion
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="/danh-sach-san-pham" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua hàng
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item2-slick1"
                     style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/Grundens_1600x.jpg?v=1531778451);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="rollIn">
							Welcome To
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                            data-appear="lightSpeedIn">
                            Sea Fashion
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
                            <!-- Button -->
                            <a href="/danh-sach-san-pham" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua hàng
                            </a>
                        </div>
                    </div>
                </div>

                <div class="item-slick1 item3-slick1"
                     style="background-image: url(http:////cdn.shopify.com/s/files/1/0476/6585/files/Hats_1600x.jpg?v=1532559318);">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="rotateInDownLeft">
							Welcome To
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                            data-appear="rotateInUpRight">
                            Sea Fashion
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
                            <!-- Button -->
                            <a href="/danh-sach-san-pham" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Mua hàng
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection
@section('content')
    <section class="bgwhite p-t-45 p-b-58">
        <div class="container">
            <div class="sec-title p-b-22">
                <h3 class="m-text5 t-center">
                    SẢN PHẨM CỦA CHÚNG TÔI
                </h3>
            </div>

            <!-- Tab01 -->
            <div class="tab01">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Áo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#featured" role="tab">Quần</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Kính</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#top-rate" role="tab">Mũ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#sale" role="tab">Dép</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-t-35">
                    <!-- - -->
                    <div class="tab-pane fade show active" id="best-seller" role="tabpanel">
                        <div class="row">
                            @foreach($list_1 as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                            <img src="{{$item->images}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="/them-gio-hang?id={{$item->id}}&quantity=1">
                                                    {{--<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>--}}
                                                    {{--<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>--}}


                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Mua
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                {{$item->name}}
                                            </a>

                                            <span class="block2-newprice m-text8 p-r-5">
											{{$item->discountPrice}}
										    </span>
                                            <span class="block2-newprice m-text7 p-r-5">
                                            {{$item->originalPriceString}}
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!-- - -->
                    <div class="tab-pane fade" id="featured" role="tabpanel">
                        <div class="row">
                            @foreach($list_2 as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                            <img src="{{$item->images}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="/them-gio-hang?id={{$item->id}}&quantity=1">
                                                    {{--<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>--}}
                                                    {{--<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>--}}


                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                {{$item->name}}
                                            </a>

                                            <span class="block2-oldprice m-text7 p-r-5">
											$29.50
										</span>

                                            <span class="block2-newprice m-text8 p-r-5">
											$15.90
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!--  -->
                    <div class="tab-pane fade" id="sale" role="tabpanel">
                        <div class="row">
                            @foreach($list_3 as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                            <img src="{{$item->images}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="/them-gio-hang?id={{$item->id}}&quantity=1">
                                                    {{--<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>--}}
                                                    {{--<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>--}}


                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                {{$item->name}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
											{{$item->discountPrice}}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                    <!--  -->
                    <div class="tab-pane fade" id="top-rate" role="tabpanel">
                        <div class="row">
                            @foreach($list_4 as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                            <img src="{{$item->images}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="/them-gio-hang?id={{$item->id}}&quantity=1">
                                                    {{--<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>--}}
                                                    {{--<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>--}}


                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                {{$item->name}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
											{{$item->discountPrice}}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="tab-pane fade" id="#sale" role="tabpanel">
                        <div class="row">
                            @foreach($list_5 as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                                    <!-- Block2 -->
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative {{$item->blockStyle}}">
                                            <img src="{{$item->images}}" alt="IMG-PRODUCT">

                                            <div class="block2-overlay trans-0-4">
                                                <a href="/them-gio-hang?id={{$item->id}}&quantity=1">
                                                    {{--<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>--}}
                                                    {{--<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>--}}


                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <!-- Button -->
                                                        <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                            Add to Cart
                                                        </button>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                                {{$item->name}}
                                            </a>

                                            <span class="block2-price m-text6 p-r-5">
											{{$item->discountPrice}}
										</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <div class="row">
                <div style="text-align: center; font-size: 30px ; margin-bottom: 30px;"
                     class="col-sm-10 col-md-8 col-lg-12">BỘ SƯU TẬP
                </div>
                @foreach($collection_obj as $item)
                    <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto">
                        <!-- block1 -->
                        <div class="block1 hov-img-zoom pos-relative m-b-30">
                            <img src="{{$item->thumbnail}}" alt="">

                            <div class="block1-wrapbtn w-size2">
                                <!-- Button -->
                                <a href="#" style="text-align: center" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                    {{$item->name}}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection