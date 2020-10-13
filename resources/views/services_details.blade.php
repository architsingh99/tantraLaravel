@include('header')
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Online Class 2</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Online Class 2</li>
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
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="hs_blog_left_sidebar_main_wrapper">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_box1_main_wrapper hs_blog_box2_main_wrapper">
                                    <div class="hs_blog_box1_img_wrapper">
                                        <div class="owl-carousel owl-theme">
                                            <div class="item">
                                                <img src="{{ Voyager::image( $service->image )}}" alt="blog_img">
                                            </div>
                                            @foreach (json_decode($service->other_images) as $image)
                                            <div class="item">
                                                <img src="{{ Voyager::image( $image )}}" alt="blog_img">
                                            </div>
                                            @endforeach
                                        </div>
                                        
                                    </div>
                                    <div class="hs_blog_box1_cont_main_wrapper">
                                        <div class="hs_blog_cont_heading_wrapper">
                                            <h2>Description.</h2>
                                            <h4><span></span></h4>
                                            <p>{!! $service->description !!}</p>
                                                <div class="hs_shop_single_cart_btn" data-toggle="modal" data-target="#myModal">
                                                    <ul>
                                                        <li><a href="#">BOOK NOW</a></li>
                                                    </ul>
                                                </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="modal fade in" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
                             
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal">&times;</button> </div> <!-- Modal body -->
                                            <div class="modal-body mb-0 pb-0 mt-0">
                                                <div class="container ">
                                                    <!-- custom radio button -->
                                                    <div class="holder">
                                                        <div class="row mb-1">
                                                            <div class="col-sm-12 ">
                                                                <h2 style="margin: 0 0 20px">Choose Your Classes</h2>
                                                            </div>
                                                        </div>
                                                        <form action="#" class="customRadio customCheckbox m-0 p-0">
                                                            <div class="row mb-0">
                                                                <div class="row justify-content-start">
                                                                    <div class="col-sm-12">
                                                                        <div class="online_booking"> 
                                                                            <input type="radio" name="textEditor" id="dreamweaver" checked> 
                                                                            <label for="dreamweaver">3 Days Class</label>
                                                                         </div>
                                                                        <div class="online_booking"> 
                                                                            <input type="radio" name="textEditor" id="sublime"> 
                                                                            <label for="sublime">6 Days Class</label>
                                                                         </div>
                                                                         <div class="online_booking">
                                                                         <input type="radio" name="textEditor" id="1 month"> 
                                                                         <label for="1 month">1 month offline certification</label>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <button type="button" class="hs_btn_hover" data-dismiss="modal">submit</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> <!-- Modal footer -->
                                            <div class="modal-footer pt-0 mt-0 pb-5 pr-6 m-1 ">
                                                <div class="col-2">
                                                     </div>
                                                <div class="col-2 justify-content-end ">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                                                     </div>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="hs_blog_right_sidebar_main_wrapper">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>{{$category->name}}</h2>
                                </div>
                                <div class="hs_blog_right_cate_list_cont_wrapper">
                                    <ul>
                                        @foreach($cat as $key => $value)
                                        <li><a href="{{route('services-details', $value->id)}}">{{$value->name}}</a></li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hs sidebar End -->
    <!-- hs online slider wrapper Start -->
    
    <!-- hs online slider wrapper End -->
    <!-- hs footer wrapper Start -->
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
    <!-- hs footer wrapper End -->
@include('footer')