@include('header')
  <!-- hs Navigation End -->
  <!-- hs About Title Start -->
  <div class="hs_indx_title_main_wrapper">
      <div class="hs_title_img_overlay"></div>
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                  <div class="hs_indx_title_left_wrapper">
                      <h2>Products</h2>
                  </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                  <div class="hs_indx_title_right_wrapper">
                      <ul>
                          <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                          <li>Products</li>
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
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 visible-lg visible-md">
                  <div class="hs_blog_right_sidebar_main_wrapper">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_blog_right_cate_list_heading_wrapper">
                                  <h2>Our Products</h2>
                              </div>
                              <div class="hs_blog_right_cate_list_cont_wrapper">
                                  <ul>
                                  @foreach($products as $key => $value)
                                      <li><a href="#">{{$value->name}}</a></li>
                                      @endforeach
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <div class="hs_blog_left_sidebar_main_wrapper">
                      <div class="row">
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_shop_tabs_cont_sec_wrapper">
                                  <div class="tab-content">
                                      <div id="home" class="tab-pane fade in active">
                                          <div class="row">
                                              @foreach($products as $key => $value)
                                              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                  <div class="hs_shop_prodt_main_box">
                                                      <div class="hs_shop_prodt_img_wrapper">
                                                          <img src="{{ Voyager::image( $value->main_image )}}" alt="shop_product">
                                                          <a href="#">Add to Cart</a>
                                                      </div>
                                                      <div class="hs_shop_prodt_img_cont_wrapper">
                                                          <h2><a href="{{route('product-details', $value->id)}}">{{$value->name}}</h2>
                                                          <p>  </a></p>

                                                          <h3>₹{{$value->selling_price}} &nbsp;<del>₹{{$value->selling_price + ($value->selling_price * $value->discount_percentage / 100)}}</del>&nbsp; <span>({{$value->discount_percentage}}% off)</span></h3>
                                                          <i class="fa fa-star"></i>
                                                          <i class="fa fa-star"></i>
                                                          <i class="fa fa-star"></i>
                                                          <i class="fa fa-star-o"></i>
                                                          <i class="fa fa-star-o"></i>
                                                          
                                                      </div>
                                                  </div>
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
                         
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_blog_right_cate_list_heading_wrapper">
                                  <h2>CATEGORIES</h2>
                              </div>
                              
                          </div>
                          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_blog_right_cate_list_heading_wrapper">
                                  <h2>Talisman</h2>
                              </div>
                              <div class="hs_blog_right_cate_list_cont_wrapper">
                                  <ul>
                                      <li><a href="#">Talisman by Zodiac</a></li>
                                     
                                  </ul>
                              </div>
                          </div> -->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_blog_right_cate_list_heading_wrapper">
                                  <h2>Protection Talisman</h2>
                              </div>
                              <div class="hs_blog_right_cate_list_cont_wrapper">
                                  <ul>
                                      <li><a href="#">Love Talisman</a></li>
                                      <li> <a href="#">Laxmi/Mony Attraction Talisman</a></li>
                                      <li><a href="#"> Vashi karam/Attraction Talisman</a></li>
                                      <li><a href="#">Herbs and Roots</a></li>
                                      <li><a href="#">Personal care Crystals</a></li>
                                      <li><a href="#">Charms</a></li>
                                      <li><a href="#">Condles Incense and Resins</a></li>
                                      <li><a href="#">Tantra Oils and Powders</a></li>
                                  </ul>
                              </div>
                          </div>
                          <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                              <div class="hs_kd_right_first_sec_wrapper2">
                                  <div class="hs_kd_right_first_sec_heading">
                                      <h2>Black magic</h2>
                                  </div>
                                  <div class="hs_kd_right_first_sec_img_heading">
                                      <img src="images/content/kundali/patrika3.jpg" alt="patrika" />
                                  </div>
                                  <div class="hs_kd_right_first_sec_img_price_heading">
                                      <ul>
                                          <li>Kundli Patrika</li>
                                          <li>₹26</li>
                                      </ul>
                                  </div>
                              </div>
                          </div> -->
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