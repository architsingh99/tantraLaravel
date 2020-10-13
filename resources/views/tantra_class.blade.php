@include('header')

    <!-- hs Navigation End -->
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Tantra Class</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Tantra Class</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs About Title End -->
    <!-- hs sidebar Start -->
    <div class="hs_blog_categories_main_wrapper">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_blog_left_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_shop_tabs_cont_sec_wrapper">
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="row">
                                                @foreach($cat as $key => $value)
                                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                                                    <a href="{{route('services-details', $value->id)}}">
                                                    <div class="hs_shop_prodt_main_box service_cart">
                                                        <div class="hs_shop_prodt_img_wrapper">
                                                            <img src="{{ Voyager::image( $value->image )}}" alt="shop_product">
                                                            <!-- <a href="{{route('services-details', $value->id)}}">Book Now</a> -->
                                                        </div>
                                                        <div class="hs_shop_prodt_img_cont_wrapper">
                                                            <h2><a href="{{route('services-details', $value->id)}}">{{$value->name}}</a></h2>
                                                                                                                </div>
                                                    </div></a>
                                                </div>
                                                @endforeach
                                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-lg visible-md">
                                                    <div class="pager_wrapper">
                                                        <ul class="pagination">
                                                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                                            <li class="btc_shop_pagi"><a href="#">01</a></li>
                                                            <li class="btc_shop_pagi"><a href="#">02</a></li>
                                                            <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                                            <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-sm visible-xs">
                    <div class="hs_blog_right_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 visible-sm visible-xs">
                                <div class="pager_wrapper">
                                    <ul class="pagination">
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="btc_shop_pagi"><a href="#">01</a></li>
                                        <li class="btc_shop_pagi"><a href="#">02</a></li>
                                        <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                        <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('footer')