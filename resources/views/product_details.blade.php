@include('header')
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Product Details</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Product Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs shop single prod slider Start -->
    <?php
    $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
    ?>
    <div class="hs_shop_single_prod_slider_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="video_img_section_wrapper">
                        <div class="cc_ps_top_slider_section">
                            <div class="owl-carousel owl-theme">
                                <div class="item" data-hash="zero">

                                    <img class="small img-responsive" src="{{ Voyager::image( $product->main_image )}}" alt="small_img" />

                                </div>
                                @foreach (json_decode($product->images) as $key => $image)
                                <div class="item" data-hash="{{$digit->format($key + 1)}}">

                                    <img class="small img-responsive" src="{{ Voyager::image( $image )}}" alt="small_img" />

                                </div>
                                @endforeach
                                <!-- <div class="item" data-hash="two">

                                    <img class="small img-responsive" src="images/content/shop/sp1.jpg" alt="small_img" />
                                </div>
								<div class="item" data-hash="three">

                                    <img class="small img-responsive" src="images/content/shop/sp1.jpg" alt="small_img" />
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="video_nav_img">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#zero"><img src="{{ Voyager::image( $product->main_image )}}" class="img-responsive" alt="nav_img"></a>
                                            </div>
                                            @foreach (json_decode($product->images) as $key => $image)
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 cc_ps_tabs">
                                                <a class="button secondary url owl_nav" href="#{{$digit->format($key + 1)}}"><img src="{{ Voyager::image( $image )}}" class="img-responsive" alt="nav_img"></a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_shop_single_cart_wrapper">
                        <h2>{{$product->name}}</h2>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i> &nbsp;&nbsp;
                        <span>5,331 Ratings & 1,151 Reviews</span>
                        <h3>₹{{$product->selling_price}} &nbsp;<del>₹{{$product->selling_price + ($product->selling_price * $product->discount_percentage / 100)}}</del>&nbsp; <span>({{$product->discount_percentage}}% off)</span></h3>
                    </div>
                    <div class="hs_shop_single_cart_icon_wrapper">
                        <div class="hs_shop_single_cart_icon_left">
                            <i class="fa fa-cart-arrow-down"></i>
                        </div>
                        <div class="hs_shop_single_cart_icon_cont_left">
                            <p>Ships in 4 - 5 Days </p>
                        </div>
                    </div>
                    <div class="hs_shop_single_cart_icon_wrapper">
                        <div class="hs_shop_single_cart_icon_left">
                            <i class="fa fa-money"></i>
                        </div>
                        <div class="hs_shop_single_cart_icon_cont_left">
                            <p>Check Deliverable Location</p>
                        </div>
                    </div>
                    <div class="hs_shop_single_co_wrapper">
                        <input type="text" placeholder="Enter Pin Code">
                        <button type="submit">CHECK OUT</button>
                        <p>30 Days Refund/Exchange</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-5 col-sm-4 col-xs-12">
                            <div class="btc_shop_prod_quanty_bar">
                                <div class="cc_ps_quantily_info">
                                    <div class="select_number">
                                        <button onclick="changeQty(1); return false;" class="increase"><i class="fa fa-plus"></i>
									</button>
                                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
                                        <button onclick="changeQty(0); return false;" class="decrease"><i class="fa fa-minus"></i>
									</button>
                                    </div>
                                    <input type="hidden" name="product_id" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7 col-sm-8 col-xs-12">
                            <div class="hs_shop_single_cart_btn">
                                <ul>
                                    <li><a href="#">BUY NOW</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs shop single prod slider End -->
    <!-- btc shop single tabs Wrapper Start -->
    <div class="btc_shop_single_tabs_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_tabs_wrapper">
                        <ul class="nav nav-pills">
                            <li class="active"><a data-toggle="pill" href="#home">Description</a></li>
                            <li><a data-toggle="pill" href="#menu1">Specification</a></li>
                           
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="btc_shop_single_tabs_content_main_wrapper">
                        <div class="tab-content">
                            <div id="home" class="tab-pane fade in active">
                                <div class="btc_shop_single_tabs_img_wrapper">
                                    <img src="{{ Voyager::image( $product->main_image )}}" alt="tab_img" class="img-responsive" />
                                </div>
                                <div class="btc_shop_single_tabs_img_content_wrapper">
                                    {!! $product->description !!}
                                </div>
                            
                            </div>
                            <div id="menu1" class="tab-pane fade">
                                <div class="btc_shop_single_tabs_img_wrapper">
                                    <img src="{{ Voyager::image( $product->main_image )}}" alt="tab_img" class="img-responsive" />
                                </div>
                                <div class="btc_shop_single_tabs_img_content_wrapper">
                                {!! $product->specification !!}
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')