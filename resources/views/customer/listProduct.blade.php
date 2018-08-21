@extends('layout.master-Home')
@section('content')
    <div class="banner-bootom-w3-agileits">
        <div class="container">
            <div class="col-md-4 products-left">

                <div class="css-treeview">
                    <h4>Categories</h4>
                    <ul class="tree-list-pad">
                        <li>
                            <a href=""><label><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Men's Wear</label></a>
                        </li>
                        <li>
                            <a href=""><label><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Men's Wear</label></a>
                        </li>
                        <li>
                            <a href=""><label><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Men's Wear</label></a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-8 products-right">
                <h5>Product <span>Compare(0)</span></h5>
                <div class="sort-grid">
                    <div class="sorting">
                        <h6>Sort By</h6>
                        <select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">Default</option>
                            <option value="null">Name(A - Z)</option>
                            <option value="null">Name(Z - A)</option>
                            <option value="null">Price(High - Low)</option>
                            <option value="null">Price(Low - High)</option>
                            <option value="null">Model(A - Z)</option>
                            <option value="null">Model(Z - A)</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="sorting">
                        <h6>Showing</h6>
                        <select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
                            <option value="null">7</option>
                            <option value="null">14</option>
                            <option value="null">28</option>
                            <option value="null">35</option>
                        </select>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                @for($i=0;$i<10;$i++)
                    <div class="col-md-4 product-men">
                        <div class="men-pro-item simpleCart_shelfItem">
                            <div class="men-thumb-item">
                                <img src="{{asset('asset/images/m8.jpg')}}" alt="" class="pro-image-front">
                                <img src="{{asset('asset/images/m8.jpg')}}" alt="" class="pro-image-back">
                                <div class="men-cart-pro">
                                    <div class="inner-men-cart-pro">
                                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                                    </div>
                                </div>
                                <span class="product-new-top">New</span>

                            </div>
                            <div class="item-info-product ">
                                <h4><a href="single.html">Party Men's Blazer</a></h4>
                                <div class="info-product-price">
                                    <span class="item_price">$260.99</span>
                                    <del>$390.71</del>
                                </div>
                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                    <form action="#" method="post">
                                        <fieldset>
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="add" value="1">
                                            <input type="hidden" name="business" value=" ">
                                            <input type="hidden" name="item_name" value="Party Men's Blazer">
                                            <input type="hidden" name="amount" value="30.99">
                                            <input type="hidden" name="discount_amount" value="1.00">
                                            <input type="hidden" name="currency_code" value="USD">
                                            <input type="hidden" name="return" value=" ">
                                            <input type="hidden" name="cancel_return" value=" ">
                                            <input type="submit" name="submit" value="Add to cart" class="button">
                                        </fieldset>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endfor

                <div class="clearfix"></div>
            </div>
        </div>
    </div>


@endsection