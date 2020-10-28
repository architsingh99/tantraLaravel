<!DOCTYPE html>

<html lang="en">
<!--[endif]-->


<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Tantra</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Horoscope" />
    <meta name="keywords" content="Horoscope" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('css/sign_flaticon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/floating-wpp.css') }}">
    <script src="{{ asset('js/jquery_min.js')}}"></script>
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{asset('images/header/favicon.ico')}}" />
<script src='../../../google_analytics_auto.js'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
@error('name')
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('email')
                                    <span class="invalid-feedback" role="alert"  style="color:red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @error('password')
                                    <span class="invalid-feedback" role="alert"  style="color:red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
    <div class="hs_navigation_header_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="hs_logo_wrapper">
                        <a href="{{route('dashboard')}}"><img src="{{ asset('images/header/logo.png')}}" alt="logo"></a>
                    </div>
                    <nav class="hs_main_menu hidden-xs">
                        <ul>
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button" href="{{route('dashboard')}}">Home</a>
                                    
                                </div>
                            </li>
                            
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button" href="{{route('products')}}">Products</a>
                                    <div class="drop-menu hs_mega_menu">
                                        @foreach($productCat as $key => $value)
                                        <a class="menu-button" href="{{route('products2', $value->id)}}">{{$value->name}}</a>
                                        @endforeach
                                       
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button" href="{{route('service')}}">Services</a>
                                    <div class="drop-menu hs_mega_menu">
                                        @foreach($serviceCat as $key => $value)
                                        <a class="menu-button" href="{{route('services', $value->id)}}">{{$value->name}}</a>
                                        @endforeach
                                       
                                    </div>
                                   
                                </div>
                            </li>
                            @if(Auth::check())
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button">Orders</a>
                                    <div class="drop-menu hs_mega_menu">
                                        <a class="menu-button" href="{{route('product-orders')}}">Products</a>
                                        <a class="menu-button" href="{{route('service-orders')}}">Service</a>
                                       
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-wrapper menu-button">
                                    <a class="menu-button" href="{{route('bulk-buy')}}">Bulk Buy</a>
                                    
                                </div>
                            </li>
                            @endif
                            <li>
                                <a class="menu-button" href="about.html">About-us</a>
                            </li>
                            <li>
                                <a class="menu-button" href="contact.html">Contact </a>
                            </li>
                        </ul>
                    </nav>
                    <header class="mobail_menu visible-xs">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-8 col-sm-8">
                                    <div class="cd-dropdown-wrapper">
                                        <a class="house_toggle" href="#0">
													<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
															 width="511.63px" height="511.631px" viewBox="0 0 511.63 511.631" style="enable-background:new 0 0 511.63 511.631;"
															 xml:space="preserve">
														<g>
															<g>
																<path d="M493.356,274.088H18.274c-4.952,0-9.233,1.811-12.851,5.428C1.809,283.129,0,287.417,0,292.362v36.545
																	c0,4.948,1.809,9.236,5.424,12.847c3.621,3.617,7.904,5.432,12.851,5.432h475.082c4.944,0,9.232-1.814,12.85-5.432
																	c3.614-3.61,5.425-7.898,5.425-12.847v-36.545c0-4.945-1.811-9.233-5.425-12.847C502.588,275.895,498.3,274.088,493.356,274.088z"
																	/>
																<path d="M493.356,383.721H18.274c-4.952,0-9.233,1.81-12.851,5.427C1.809,392.762,0,397.046,0,401.994v36.546
																	c0,4.948,1.809,9.232,5.424,12.854c3.621,3.61,7.904,5.421,12.851,5.421h475.082c4.944,0,9.232-1.811,12.85-5.421
																	c3.614-3.621,5.425-7.905,5.425-12.854v-36.546c0-4.948-1.811-9.232-5.425-12.847C502.588,385.53,498.3,383.721,493.356,383.721z"
																	/>
																<path d="M506.206,60.241c-3.617-3.612-7.905-5.424-12.85-5.424H18.274c-4.952,0-9.233,1.812-12.851,5.424
																	C1.809,63.858,0,68.143,0,73.091v36.547c0,4.948,1.809,9.229,5.424,12.847c3.621,3.616,7.904,5.424,12.851,5.424h475.082
																	c4.944,0,9.232-1.809,12.85-5.424c3.614-3.617,5.425-7.898,5.425-12.847V73.091C511.63,68.143,509.82,63.861,506.206,60.241z"/>
																<path d="M493.356,164.456H18.274c-4.952,0-9.233,1.807-12.851,5.424C1.809,173.495,0,177.778,0,182.727v36.547
																	c0,4.947,1.809,9.233,5.424,12.845c3.621,3.617,7.904,5.429,12.851,5.429h475.082c4.944,0,9.232-1.812,12.85-5.429
																	c3.614-3.612,5.425-7.898,5.425-12.845v-36.547c0-4.952-1.811-9.231-5.425-12.847C502.588,166.263,498.3,164.456,493.356,164.456z
																	"/>
															</g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														</svg>
													</a>
                                        <nav class="cd-dropdown">
                                            <h2><a href="{{route('dashboard')}}">Tantra</a></h2>
                                            <a href="#0" class="cd-close">Close</a>
                                            <ul class="cd-dropdown-content">
                                                @if(!Auth::check())
                                                <li>
                                                  
                                                    <div class="dropdown-wrapper menu-button" data-toggle="modal" data-target="#signInModal">
                                                        <a class="menu-button" href="#"><i class="fa fa-user-circle-o"></i>
                                                            <span>Login</span></a>
                                                        
                                                        </div>
                                                
                                            </li>
                                            @endif
                                                <li >
                                                    <a href="{{route('dashboard')}}">Home</a>

                                
                                                </li>
                                                <!-- .has-children -->
                                                <li>
                                                    <a href="{{route('service')}}">Services</a>
                                                </li>
                                                <li class="has-children">
                                                    <a href="product.html">Products</a>

                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                        <li class="go-back"><a href="#0"></a></li>
                                                        <li>
                                                            <a href="#">Love Talisman</a>
                                                        </li>
                                                        <!-- .has-children -->

                                                        <li>
                                                            <a href="#">Laxmi/Mony Attraction Talisman</a>
                                                        </li>
                                                        <!-- .has-children -->

                                                        <li>
                                                            <a href="#">Vashi karam/Attraction Talisman</a>
                                                        </li>
                                                        <!-- .has-children -->

                                                        <li>
                                                            <a href="#">Herbs and Roots</a>
                                                        </li>
                                                        <!-- .has-children -->

                                                        <li>
                                                            <a href="#">Personal care Crystals</a>
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="#">Charms</a>
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="#">Condles Incense and Resins</a>
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="#">Tantra Oils and Powders</a>
                                                        </li>
                                                        <!-- .has-children -->
                                                        

                                                    </ul>
                                                    <!-- .cd-secondary-dropdown -->
                                                </li>
                                                <li>
                                                    <a href="product.html">Products</a>

                                                    
                                                </li>
                                                <!-- .has-children -->
                                                <!-- <li class="has-children">
                                                    <a href="#">Blog</a>

                                                    <ul class="cd-secondary-dropdown is-hidden">
                                                        <li class="go-back"><a href="#0">Menu</a></li>
                                                        <li>
                                                            <a href="blog_categories.html">Blog-Categories</a>
                                                        </li>
                                                        

                                                        <li>
                                                            <a href="blog_single.html">Blog-Single</a>
                                                        </li>
                                                        


                                                    </ul>
                                                   
                                                </li> -->
                                               
                                                <li>
                                                    <a href="about.html">About-us</a>
                                                </li>
                                                <li>
                                                    <a href="contact.html">Contact</a>
                                                </li>
                                               

                                            </ul>
                                            <!-- .cd-dropdown-content -->



                                        </nav>
                                        <!-- .cd-dropdown -->

                                    </div>
                                    @if(Auth::check())
                                    <div class="hs_navi_cart_wrapper">
                                        <div class="dropdown-wrapper menu-button">
                                            <a class="menu-button" href="#"><i class="flaticon-shop"></i></a>
                                            
                                        </div>
                                    </div>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                        <!-- .cd-dropdown-wrapper -->
                    </header>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs">
                    <!-- <div class="hs_navi_searchbar_wrapper">
                        <input type="text" placeholder="Search here">
                        <button><i class="fa fa-search"></i></button>
                    </div> -->
                    @if(Auth::check())
                    <div class="hs_navi_cart_wrapper">
                        <div class="dropdown-wrapper menu-button">
                            <a class="menu-button" href="{{route('cart')}}"><i class="flaticon-shop"></i></a>
                        </div>
                    </div>
                    @endif
                    <div class="hs_navi_cart_wrapper">
                        @if(!Auth::check())
                        <div  class="dropdown-wrapper menu-button"  data-toggle="modal" data-target="#signInModal" > 
                            <a style="color: #fff;" class="menu-button" href="#"> LogIn<i style=" margin-left: 10px;" class="fa fa-user-circle-o"></i></a>
                            </div>
                        @else
                        <div  class="dropdown-wrapper menu-button"> 
                        <a style="color: #fff;" class="menu-button">
                        {{Auth::user()->name}}
                        <i style=" margin-left: 10px;" class="fa fa-user-circle-o"></i></a>
                        <div class="drop-menu hs_mega_menu">
                                        <a class="menu-button" href="{{route('account')}}">Your Account</a>
                                        <a class="menu-button" href="{{route('logout')}}">Logout</a>
                                       
                                    </div>
                     </div>
                        
                            @endif
                    </div>
                    <!-- <div class="hs_top_user_profile" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        
                    </div> -->
                </div>
                <div class="modal fade in" id="signInModal" role="dialog" data-backdrop="static" data-keyboard="false">
                    <div class="modal-dialog">

                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Sing In</h4>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div style="text-align: center" class="modal-body">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter Your Email...">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password...">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                                <a  href="#" id="forgotPW_popup" >Forgot Your Password</a>
                                <p style="    margin-top: 10px;">Don't have an account <a href="#" id="register_popup" ><b> Register</b></a> </p>
                             <button style="float: none;" class="hs_btn_hover" type="submit">LogIn</button>
                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                           
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- SingUp modal -->
    <div class="modal fade in" id="signUpModal" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">

            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sing Up</h4>
                </div>
                <div class="modal-body centered">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Name...">
                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Your Email...">
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                    <!-- <input style="margin-top: 20px;" type="number" placeholder="Enter Your Phone Number..."> -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter Your Password...">
                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Your Password...">
                    <button type="submit">Register</button>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
               
            </div>

        </div>
    </div>
    <!-- SingUp modal -->

    <!-- Forgotpassword modal -->
    <div class="modal fade in" id="forgotPaswordModel" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">

            
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Forgot Password</h4>
                    <p>Reset it Easily Using Registered email</p>
                </div>
                <div class="modal-body centered">
                    <input type="email" placeholder="Enter Your Email...">
                    
                    <button type="submit">send</button>
                    
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
               
            </div>

        </div>
    </div>
     <!-- Forgotpassword modal -->