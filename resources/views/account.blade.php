@include('header')
<div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Mr.X</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="#">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>My Account</li>
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
                             
                                <div class="hs_vs_left_side_first_wrapper">
                                    <img src="images/header/top_user.jpg" alt="vastu_img" />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_blog_right_cate_list_heading_wrapper">
                                    <h2>Your Account</h2>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="hs_blog_left_sidebar_main_wrapper">
                        <div class="row">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_vs_first_sec_wrapper">
                                    <h2>Account details</h2>
                                    <form action="{{route('update-account')}}" method="POST" id="accountForm">
                                        @csrf
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Name</label>
                                            <input type="text" value="{{Auth::user()->name}}" name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Email</label>
                                            <input type="email" value="{{Auth::user()->email}}" name="email" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Update Password</label>
                                            <input type="password" name="password" value="">
                                        </div>
                                    </div>
                                   <div class="hs_num_input_btn_wrapper hs_cn_birth_btn_wrapper">
                                        <ul>
                                            <li><a href="#!" onclick="submitForm('accountForm')">Update</a></li>
                                        </ul>
                                    </div>
                                    </form>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    @include('footer')
    