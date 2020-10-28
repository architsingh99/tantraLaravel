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
                                                                            <input type="radio" name="service" id="service1" checked value="{{$service->id}}${{$service->three_days}}$3Days"> 
                                                                            <label for="service1">3 Days Class (₹{{$service->three_days}})</label>
                                                                         </div>
                                                                        <div class="online_booking"> 
                                                                            <input type="radio" name="service" id="service2" value="{{$service->id}}${{$service->six_days}}$6Days"> 
                                                                            <label for="service2">6 Days Class (₹{{$service->six_days}})</label>
                                                                         </div>
                                                                         <div class="online_booking">
                                                                         <input type="radio" name="service" id="service3" value="{{$service->id}}${{$service->one_month}}$1Month"> 
                                                                         <label for="service3">1 month offline certification (₹{{$service->one_month}})</label>
                                                                         </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <button type="button" class="hs_btn_hover buy_now" data-dismiss="modal">submit</button>
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
    <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
    <input type="hidden" id="paySuccesRoute" value="{{route('pay_service')}}">
    <input type="hidden" id="paymentStatusRoute" value="{{route('service-orders')}}">
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
         var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         }); 
         $('body').on('click', '.buy_now', function(e){
             console.log(document.getElementById('service1').value);
             var d;
             if(document.getElementById('service1').checked)
             {
                d = document.getElementById('service2').value.split("$");
             }
             else if(document.getElementById('service2').checked)
             {
                d = document.getElementById('service2').value.split("$");
             }
             else
             {
                d = document.getElementById('service3').value.split("$");
             }
              
	     var options = {
           "key": "rzp_test_ko4EO60xHxMY8g",
           "amount": Number(d[1]) * 100, // 2000 paise = INR 20
           "name": "ADI TANTRA YOAG",
           "currency": "INR",
           "description": "Payment",
           "image": "{{ asset('/images/header/logo.png') }}",
           "handler": function (response){
                 $.ajax({
                   url: document.getElementById('paySuccesRoute').value,
                   type: 'post',
                   dataType: 'json',
                   data: {
					   _token: document.getElementById('token').value,
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: "#" + randomString(10, '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 
                    price: Number(d[1]),
                    service_id: d[0],
                    duration: d[2]
                   }, 
                   success: function (msg) {
					console.log("259", msg);
					//document.getElementById('sellerPlanForm').submit();
					document.location.href = document.getElementById('paymentStatusRoute').value;
                      // window.location.href = SITEURL + 'razor-thank-you';
                   }
               });
             
           },
          "prefill": {
               "email": "{{Auth::check() ? Auth::user()->email : ''}}",
               "name": "{{Auth::check() ? Auth::user()->name : ''}}"
           },
           "theme": {
               "color": "#528FF0"
           }
         };
         var rzp1 = new Razorpay(options);
         rzp1.open();
         e.preventDefault();
		 });
         /*document.getElementsClass('buy_plan1').onclick = function(e){
           rzp1.open();
           e.preventDefault();
         }*/
         function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
      </script>
@include('footer')