@include('header')
<div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>{{Auth::user()->name}}</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Product Orders</li>
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
                                <div class="hs_kd_five_heading_sec_wrapper">
                                    <h2>My Orders</h2>
                                    <h4><span></span></h4>
                                </div>
                            </div> 
                            @foreach($orders as $key => $value)
                            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_astro_team_img_main_wrapper hs_kd_five_box_sec_wrapper">
                                    <div class="hs_astro_img_cont_wrapper">
                                        <p>Order id: {{$value->order_id}}</p>
                                        <p>Service Name: {{$value->name}}</p>
                                        <p>Duration: {{$value->duration}}</p>
                                        <ul>
                                            <li>Total order value:</li>
                                            <li>₹{{$value->price}}</li>
                                        </ul>
                                    </div>
                                    <div class="hs_astro_img_bottom_cont">
                                        <ul> <li><a href="#"><i class="fa fa-phone"></i>&nbsp; Need help</a></li>
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
   
    @include('footer')
    