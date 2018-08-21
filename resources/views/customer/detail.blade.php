
@extends('layout.master-Home')
@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 single-right-left ">
                <div class="grid images_3_of_2">
                    <div class="flexslider">


                        <div class="clearfix"></div>
                        <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0.6s; transform: translate3d(-1413px, 0px, 0px);"><li data-thumb="images/d3.jpg" class="clone" aria-hidden="true" style="width: 471px; float: left; display: block;">
                                    <div class="thumb-image"> <img src="{{asset('asset/images/d3.jpg')}}" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('asset/images/d2.jpg')}}" style="width: 471px; float: left; display: block;" class="">
                                    <div class="thumb-image"> <img src="{{asset('asset/images/d3.jpg')}}" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('asset/images/d1.jpg')}}" class="" style="width: 471px; float: left; display: block;">
                                    <div class="thumb-image"> <img src="{{asset('asset/images/d2.jpg')}}" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('asset/images/d3.jpg')}}" class="flex-active-slide" style="width: 471px; float: left; display: block;">
                                    <div class="thumb-image"> <img src="{{asset('asset/images/d1jpg')}}" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                                </li>
                                <li data-thumb="{{asset('asset/images/d2.jpg')}}" style="width: 471px; float: left; display: block;" class="clone" aria-hidden="true">
                                    <div class="thumb-image"> <img src="{{asset('asset/images/d32.jpg')}}" data-imagezoom="true" class="img-responsive" draggable="false"> </div>
                                </li></ul></div><ol class="flex-control-nav flex-control-thumbs"><li><img src="images/d2.jpg" class="" draggable="false"></li><li><img src="images/d1.jpg" draggable="false" class=""></li><li><img src="images/d3.jpg" draggable="false" class="flex-active"></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trước</font></font></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kế tiếp</font></font></a></li></ul></div>
                </div>
            </div>
            <div class="col-md-8 single-right-left simpleCart_shelfItem">
                <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Big Wing Sneakers (Hải quân)</font></font></h3>
                <p><span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">650 đô la</font></font></span> <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">- 900 đô la</font></font></del></p>
                <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></label>
							<input id="rating3" type="radio" name="rating" value="3" checked="">
							<label for="rating3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></label>
						</span>
                </div>
                <div class="description">
                    <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Kiểm tra các tùy chọn thanh toán, giao hàng và thanh toán tại địa điểm của bạn</font></font></h5>
                    <form action="#" method="post">
                        <input type="text" value="Enter pincode" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter pincode';}" required="">
                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Kiểm tra"></font></font>
                    </form>
                </div>
                <div class="color-quality">
                    <div class="color-quality-right">
                        <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phẩm chất :</font></font></h5>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5 số lượng</font></font></option>
                            <option value="null"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6 Số lượng</font></font></option>
                            <option value="null"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7 Số lượng</font></font></option>
                            <option value="null"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10 số lượng</font></font></option>
                        </select>
                    </div>
                </div>
                <div class="occasional">
                    <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Các loại:</font></font></h5>
                    <div class="colr ert">
                        <label class="radio"><input type="radio" name="radio" checked=""><i></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giày kiểu đơn giản</font></font></label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giày thể thao </font></font></label>
                    </div>
                    <div class="colr">
                        <label class="radio"><input type="radio" name="radio"><i></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giày chính thức</font></font></label>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="occasion-cart">
                    <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="business" value=" ">
                                <input type="hidden" name="item_name" value="Wing Sneakers">
                                <input type="hidden" name="amount" value="650.00">
                                <input type="hidden" name="discount_amount" value="1.00">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="return" value=" ">
                                <input type="hidden" name="cancel_return" value=" ">
                                <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button"></font></font>
                            </fieldset>
                        </form>
                    </div>

                </div>
                <ul class="social-nav model-3d-0 footer-social w3_agile_social single_page_w3ls">
                    <li class="share"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chia sẻ : </font></font></li>
                    <li><a href="#" class="facebook">
                            <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="twitter">
                            <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="instagram">
                            <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
                    <li><a href="#" class="pinterest">
                            <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
                </ul>

            </div>
            <div class="clearfix"> </div>
            <!-- /new_arrivals -->
            <div class="responsive_tabs_agileits">
                <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                    <ul class="resp-tabs-list">
                        <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sự miêu tả</font></font></li>
                        <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhận xét</font></font></li>
                        <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin</font></font></li>
                    </ul>
                    <div class="resp-tabs-container">
                        <!--/tab_one-->
                        <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sự miêu tả</font></font></h2><div class="tab1 resp-tab-content resp-tab-content-active" style="display:block" aria-labelledby="tab_item-0">

                            <div class="single_page_agile_its_w3ls">
                                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet</font></font></h6>
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. </font><font style="vertical-align: inherit;">Mauris volutpat augue dolor.Consectetur adipisicing elit, sed làm eiusmod thời gian incididunt ut phòng thí nghiệm quặng et dolore magna aliqua. </font><font style="vertical-align: inherit;">Ut enim quảng cáo tối thiểu veniam, quis nostrud tập thể dục ullamco. </font><font style="vertical-align: inherit;">labore et dolore magna aliqua.</font></font></p>
                                <p class="w3ls_para"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. </font><font style="vertical-align: inherit;">Mauris volutpat augue dolor.Consectetur adipisicing elit, sed làm eiusmod thời gian incididunt ut phòng thí nghiệm quặng et dolore magna aliqua. </font><font style="vertical-align: inherit;">Ut enim quảng cáo tối thiểu veniam, quis nostrud tập thể dục ullamco. </font><font style="vertical-align: inherit;">labore et dolore magna aliqua.</font></font></p>
                            </div>
                        </div>
                        <!--//tab_one-->
                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhận xét</font></font></h2><div class="tab2 resp-tab-content" aria-labelledby="tab_item-1">

                            <div class="single_page_agile_its_w3ls">
                                <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                        <div class="bootstrap-tab-text-grid-left">
                                            <img src="{{asset('asset/images/t1.jpg')}}" alt=" " class="img-responsive">
                                        </div>
                                        <div class="bootstrap-tab-text-grid-right">
                                            <ul>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">quản trị viên</font></font></a></li>
                                                <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Đáp lại</font></font></a></li>
                                            </ul>
                                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam, quis nostrum tập thể dục ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi hậu quả? </font><font style="vertical-align: inherit;">Quis autem vel eum iure reprehenderit.</font></font></p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                        <h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">thêm một bài đánh giá</font></font></h4>
                                        <form action="#" method="post">
                                            <input type="text" name="Name" required="Name">
                                            <input type="email" name="Email" required="Email">
                                            <textarea name="Message" required=""></textarea>
                                            <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="GỬI"></font></font>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin</font></font></h2><div class="tab3 resp-tab-content" aria-labelledby="tab_item-2">

                            <div class="single_page_agile_its_w3ls">
                                <h6><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Big Wing Sneakers (Hải quân)</font></font></h6>
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. </font><font style="vertical-align: inherit;">Mauris volutpat augue dolor.Consectetur adipisicing elit, sed làm eiusmod thời gian incididunt ut phòng thí nghiệm quặng et dolore magna aliqua. </font><font style="vertical-align: inherit;">Ut enim quảng cáo tối thiểu veniam, quis nostrud tập thể dục ullamco. </font><font style="vertical-align: inherit;">labore et dolore magna aliqua.</font></font></p>
                                <p class="w3ls_para"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor ngồi amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. </font><font style="vertical-align: inherit;">Mauris volutpat augue dolor.Consectetur adipisicing elit, sed làm eiusmod thời gian incididunt ut phòng thí nghiệm quặng et dolore magna aliqua. </font><font style="vertical-align: inherit;">Ut enim quảng cáo tối thiểu veniam, quis nostrud tập thể dục ullamco. </font><font style="vertical-align: inherit;">labore et dolore magna aliqua.</font></font></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //new_arrivals -->
            <!--/slider_owl-->

            <div class="w3_agile_latest_arrivals">
                <h3 class="wthree_text_info"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điểm </font><span><font style="vertical-align: inherit;">đến</font></span><font style="vertical-align: inherit;"> nổi bật</font></font><span><font style="vertical-align: inherit;"></font></span></h3>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('asset/images/w2.jpg')}}" alt="" class="pro-image-front">
                            <img src="{{asset('asset/images/w2.jpg')}}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem lướt qua</font></font></a>
                                </div>
                            </div>
                            <span class="product-new-top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mới</font></font></span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Không tay rắn Blue Top</font></font></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">140,99 đô la</font></font></span>
                                <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 189,71</font></font></del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Sleeveless Solid Blue Top">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button"></font></font>
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('asset/images/w4.jpg')}}" alt="" class="pro-image-front">
                            <img src="{{asset('asset/images/w4.jpg')}}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem lướt qua</font></font></a>
                                </div>
                            </div>
                            <span class="product-new-top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mới</font></font></span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đen cơ bản Shorts</font></font></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 120,99</font></font></span>
                                <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 189,71</font></font></del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Black Basic Shorts">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button"></font></font>
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('asset/images/s6.jpg')}}" alt="" class="pro-image-front">
                            <img src="{{asset('asset/images/s6.jpg')}}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem lướt qua</font></font></a>
                                </div>
                            </div>
                            <span class="product-new-top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mới</font></font></span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aero Canvas đôi giày lười  </font></font></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 120,99</font></font></span>
                                <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 199,71</font></font></del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Aero Canvas Loafers">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button"></font></font>
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 product-men single">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset('asset/images/w7.jpg')}}" alt="" class="pro-image-front">
                            <img src="{{asset('asset/images/w7.jpg')}}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem lướt qua</font></font></a>
                                </div>
                            </div>
                            <span class="product-new-top"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mới</font></font></span>

                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Vớ dài mắt cá chân</font></font></a></h4>
                            <div class="info-product-price">
                                <span class="item_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 100,99</font></font></span>
                                <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$ 159,71</font></font></del>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="post">
                                    <fieldset>
                                        <input type="hidden" name="cmd" value="_cart">
                                        <input type="hidden" name="add" value="1">
                                        <input type="hidden" name="business" value=" ">
                                        <input type="hidden" name="item_name" value="Ankle Length Socks">
                                        <input type="hidden" name="amount" value="30.99">
                                        <input type="hidden" name="discount_amount" value="1.00">
                                        <input type="hidden" name="currency_code" value="USD">
                                        <input type="hidden" name="return" value=" ">
                                        <input type="hidden" name="cancel_return" value=" ">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button"></font></font>
                                    </fieldset>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
                <!--//slider_owl-->
            </div>
        </div>
    </div>
@endsection