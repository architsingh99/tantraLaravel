@include('header')
    <!-- hs Navigation End -->
    <!-- hs Slider Start -->
    <div class="slider-area">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h1 data-animation="animated flipInX"><img class="animated_logo" src="images/header/slider_logo.jpg" alt="logo"></h1>
                                        <h2 data-animation="animated zoomInDown"></h2>
                                        <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br> consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                    <div class="row">
                                        @foreach($cat as $key => $value)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper {{($key % 2 == 0 ? '' : 'hs_slider_right_tabs_wrapper2')}}" data-animation="animated {{($key % 2 == 0 ? 'bounceInLeft hs_slider_tab_one' : 'animated bounceInRight hs_slider_tab_tow')}}">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class="{{($key % 2 == 0 ? 'flaticon-horse-head' : 'flaticon-home')}}"></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="{{route('services', $value->id)}}" class="hs_tabs_btn">{{$value->name}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class=" carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h1 data-animation="animated zoomInDown"><img  class="animated_logo" src="images/header/slider_logo.jpg" alt="logo"></h1>
                                        <h2 data-animation="animated zoomInDown"></h2>
                                        <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br> consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                    @foreach($cat as $key => $value)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper {{($key % 2 == 0 ? '' : 'hs_slider_right_tabs_wrapper2')}}" data-animation="animated {{($key % 2 == 0 ? 'bounceInLeft hs_slider_tab_one' : 'animated bounceInRight hs_slider_tab_tow')}}">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class="{{($key % 2 == 0 ? 'flaticon-horse-head' : 'flaticon-home')}}"></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="{{route('services', $value->id)}}" class="hs_tabs_btn">{{$value->name}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="content">
                                        <h1 data-animation="animated bounceInLeft hs_slider_tab_one"><img  class="animated_logo" src="images/header/slider_logo.jpg" alt="logo"></h1>
                                        <h2 data-animation="animated zoomInDown"></h2>
                                        <p data-animation="animated bounceInUp">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit<br> consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio.</p>
                                        <div class="hs_effect_btn">
                                            <ul>
                                                <li data-animation="animated flipInX"><a href="#" class="hs_btn_hover">Read more</a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                    <div class="content_tabs">
                                        <div class="row">
                                        @foreach($cat as $key => $value)
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="hs_slider_right_tabs_wrapper {{($key % 2 == 0 ? '' : 'hs_slider_right_tabs_wrapper2')}}" data-animation="animated {{($key % 2 == 0 ? 'bounceInLeft hs_slider_tab_one' : 'animated bounceInRight hs_slider_tab_tow')}}">
                                                    <div class="hs_slider_tabs_icon_wrapper">
                                                        <i class="{{($key % 2 == 0 ? 'flaticon-horse-head' : 'flaticon-home')}}"></i>
                                                    </div>
                                                    <div class="hs_slider_tabs_icon_cont_wrapper">
                                                        <ul>
                                                            <li><a href="tantra_class.html" class="hs_tabs_btn">{{$value->name}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number"></span></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number"></span></li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
							<i class="fa fa-angle-left"></i>
							
						</a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
						
						  <i class="fa fa-angle-right"></i>
						</a>
                </div>
            </div>
        </div>
    </div>
    <div class="hs_service_main_wrapper">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Popular <span> Product</span></h2>
                            <p>Adi Tantra Provides all Tantra occult services.</p>
                        </div>
                    </div>
                </div>
                @foreach($product as $key => $value)
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6">
                    <div class="hs_shop_pp_main_box_wrapper">
                        <div class="hs_shop_pp_img_main_wrapper colortobw img">
                            <img src="{{ Voyager::image( $value->main_image )}}" alt="product_img" />
							<a href="#">Add to Cart</a>
                        </div>
                        <div class="hs_shop_prodt_img_cont_wrapper hs_shop_pp_img_cont_main_wrapper">
                            <h2><a href="product_details.html">{{$value->name}}</a></h2>
                            <h3 style="color: #000;">₹{{$value->selling_price}} &nbsp;<del>₹{{$value->selling_price + ($value->selling_price * $value->discount_percentage / 100)}}</del>&nbsp; <span>({{$value->discount_percentage}}% off)</span></h3>
                            
                        </div>
                    </div>
                </div>
                @endforeach
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="hs_pp_bottom_btn_wrapper">
						<div class="hs_pp_bottom_btn">
							<ul>
								<li><a href="{{route('products')}}">View All</a></li>
							</ul>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <!-- hs sign wrapper End -->
    <!-- hs service wrapper Start -->
    <div class="hs_shop_pp_main_wrapper">
        <div class="hs_shop_pp_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>Our <span> Services</span></h2>
                            <p>Adi Tantra Provides all Tantra occult services.</p>
                        </div>
                    </div>
                </div>
                @foreach($cat as $key => $value)
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 {{($key == 0)?'col-md-offset-3' : ''}}">
                    <div class="hs_shop_pp_main_box_wrapper service_cart">
                        <div class="hs_shop_pp_img_main_wrapper">
                            <img src="{{ Voyager::image( $value->image )}}" alt="product_img" />
							<a href="{{route('services', $value->id)}}">View details</a>
                        </div>
                        <div class="hs_shop_prodt_img_cont_wrapper hs_shop_pp_img_cont_main_wrapper">
                            <h2><a href="{{route('services', $value->id)}}">{{$value->name}}</a></h2>
                            <!-- <h3>₹20 &nbsp;<del>₹80</del>&nbsp; <span>(60% off)</span></h3>
                             -->
                        </div>
                    </div>
                </div>
                @endforeach
               
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="hs_pp_bottom_btn_wrapper">
						<div class="hs_pp_bottom_btn">
							<ul>
								<li><a href="services.html">View All</a></li>
							</ul>
						</div>
					</div>
				</div>
                <!--/.portfolio-area-->
            </div>
        </div>
    </div>

    <!-- hs Counter wrapper End -->
    <div class="hs_about_indx_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>About <span>Adi Tanta</span></h2>
                            <h4><span></span></h4>
                             <p>Adi Tantra Yoga Foundation</p>                        
                       </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_left_img_wrapper">
                        <img src="images/content/about_img.jpg" alt="about_img" />
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="hs_about_right_cont_wrapper">
                        <h2>Adi Tantra </h2>
                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsumLorem ipsum</p>
                        <h3>Contact Us</h3>
                        <h1>+1800-123-123</h1>
                        <div class="hs_effect_btn hs_about_btn">
                            <ul>
                                <li><a href="#" class="hs_btn_hover">Read more</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs testi slider wrapper Start -->
    <div class="hs_testi_slider_main_wrapper">
       
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_about_heading_main_wrapper">
                        <div class="hs_about_heading_wrapper">
                            <h2>What clients <span> are saying</span></h2>
                            <h4><span></span></h4>
                            <p>Adi Tantra Yoga Foundation</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div style="color: #000;" class="hs_testi_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div  class="hs_testi_quote_cont_wrapper">
                                                    <p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                        <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs">
                                        <div class="hs_testi_cont_main_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper">
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img1.jpg" alt="testi_img" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_testi_cont_main_wrapper hs_testi_cont_main_right_wrapper">
                                            <div class="hs_testi_cont_inner_wrapper">
                                                <div class="hs_testi_quote_wrapper">
                                                    <i class="fa fa-quote-left"></i>
                                                </div>
                                                <div class="hs_testi_quote_cont_wrapper">
                                                    <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="hs_testi_client_main_wrapper hs_testi_client_main_right_wrapper">
                                            <div class="hs_testi_client_cont_img_sec">
                                                <img src="images/content/testi_client_img2.jpg" alt="testi_img" />
                                            </div>
                                            <div class="hs_testi_client_cont_sec">
                                                <h2 style="color: #000;">Joan doe</h2>
                                                <p>Designer</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </div>
    <div class="hs_footer_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_logo_wrapper">
                        <img src="images/header/logo.png" alt="footer_logo" class="img-responsive" />
                        <p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum</p>
                        <h4><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_help_wrapper">
                        <h2>Need <span>Our Help</span></h2>
                        <p>Need help with designing your brand new website Need help with designing your brand new website  Need help with designing your brand new website  Need help with designing your brand new website  </p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="hs_footer_contact_wrapper">
                        <h2>Contact <span>Us Today</span></h2>
                        <p>Call Us <span>666 777 888</span> OR <span>111 222 333</span> Send an Email on <a href="#">contact@example.com</a> Visit Us 
                            <br>kolkata west bengal</p>
                        <div class="hs_footer_contact_input_wrapper">
                            <input type="text" placeholder="Email Address..."><i class="fa fa-envelope"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')