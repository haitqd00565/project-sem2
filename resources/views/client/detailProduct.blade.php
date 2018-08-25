@extends('layout.client-layout-v2')
@section('content')
    <div class="container bgwhite p-t-35 p-b-80">
        <div class="flex-w flex-sb">
            <div class="w-size13 p-t-30 respon5">
                <div class="wrap-slick3 flex-sb flex-w">
                    {{--<div class="wrap-slick3-dots"><ul class="slick3-dots" role="tablist" style=""><li class="slick-active" role="presentation"><img src=" http://znews-photo.d.za.zdn.vn/w660/Uploaded/cqxrcajwp/2015_06_28/di_bien_6.png "><div class="slick3-dot-overlay"></div></li><li role="presentation"><img src=" images/thumb-item-02.jpg "><div class="slick3-dot-overlay"></div></li><li role="presentation"><img src=" images/thumb-item-03.jpg "><div class="slick3-dot-overlay"></div></li></ul></div>--}}

                    <div class="slick3 slick-initialized slick-slider slick-dotted">
                        <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1737px;"><div class="item-slick3 slick-slide slick-current slick-active" data-thumb="images/thumb-item-01.jpg" data-slick-index="0" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 449px;  position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;">
                                    <div class="wrap-pic-w">
                                        <img src="http://2sao.vietnamnetjsc.vn/2015/06/29/10/21/bikini1.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </div><div class="item-slick3 slick-slide" data-thumb="images/thumb-item-02.jpg" data-slick-index="1" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11" style="width: 579px; position: relative; left: -579px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="wrap-pic-w">
                                        <img src="images/product-detail-02.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </div><div class="item-slick3 slick-slide" data-thumb="images/thumb-item-03.jpg" data-slick-index="2" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide12" aria-describedby="slick-slide-control12" style="width: 579px; position: relative; left: -1158px; top: 0px; z-index: 998; opacity: 0;">
                                    <div class="wrap-pic-w">
                                        <img src="images/product-detail-03.jpg" alt="IMG-PRODUCT">
                                    </div>
                                </div></div></div>




                    </div>
                </div>
            </div>

            <div class="w-size14 p-t-30 respon5">
                <h4 class="product-detail-name m-text16 p-b-13">
                    Boxy T-Shirt with Roll Sleeve Detail
                </h4>

                <span class="m-text17">
					$22
				</span>

                <p class="s-text8 p-t-10">
                    Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.
                </p>

                <!--  -->
                <div class="p-t-33 p-b-60">
                    <div class="flex-m flex-w p-b-10">
                        <div class="s-text15 w-size15 t-center">
                            Size
                        </div>

                        <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16">
                            <select class="selection-2 select2-hidden-accessible" name="size" tabindex="-1" aria-hidden="true">
                                <option>Choose an option</option>
                                <option>Size S</option>
                                <option>Size M</option>
                                <option>Size L</option>
                                <option>Size XL</option>
                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 150px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-size-11-container"><span class="select2-selection__rendered" id="select2-size-11-container" title="Choose an option">Choose an option</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                    </div>


                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">
                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
                                <!-- Button -->
                                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                    Mua
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
