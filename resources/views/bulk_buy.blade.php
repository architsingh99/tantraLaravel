@include('header')

    <!-- hs Navigation End -->
    <!-- hs About Title Start -->
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Bulk Order</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Bulk Order</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hs Counter wrapper Start -->
    <div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper">
        <div class="container">
            @if(isset($msg) && $msg == '1')
            Your request has been sent. Our team will reach out to  you.
            @endif
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <form action="bulk_order_post" method="post" id="bulkBuyForm">
                    @csrf
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_kd_five_heading_sec_wrapper">
                            <h2>Send us a request for bulk purchase</h2>
                            <h4><span></span></h4>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_kd_six_sec_input_wrapper">
                            <label>Name</label>
                            <input type="text" name="name" required value="{{Auth::check() ? Auth::user()->name : ''}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_kd_six_sec_input_wrapper">
                            <label>Email</label>
                            <input type="email" name="email" required value="{{Auth::check() ? Auth::user()->email : ''}}">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="hs_kd_six_sec_input_wrapper">
                            <label>Phone Number</label>
                            <input type="tel" name="phone" required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_kd_six_sec_input_wrapper">
                            <label>Comments</label>
                            <textarea rows="6"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="hs_kd_six_sec_btn">
                            <ul>
                                <li><a href="#!" onclick="submitForm('bulkBuyForm')">Send</a></li>
                            </ul>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <!-- hs online slider wrapper End -->
     <!-- hs About Title End -->
@include('footer')