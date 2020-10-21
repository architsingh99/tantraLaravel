@include('header')
@if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif
<div class=" container mb-4">
         <div class="row">
             <div class="hs_blog_categories_main_wrapper col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="hs_shop_tabs_cont_sec_wrapper">
                     <div class="tab-content">
                 <div class="table-responsive">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th scope="col"> </th>
                                 <th scope="col">Product</th>
                                 <th scope="col">Available</th>
                                 <th scope="col" style="width: 7em;" class="text-center">Quantity</th>
                                 <th scope="col" class="text-right">Price</th>
                                 <th> </th>
                             </tr>
                         </thead>
                         <tbody>
                             <?php
                             $updateUrl = route('update-cart');
                             ?>
                         @foreach($cart as $key => $value)
                             <tr>
                                 <td><img src="{{ Voyager::image( $value->product->image )}}" /> </td>
                                 <td>{{$value->product->name}}</td>
                                 <td>In stock</td>
                                 <td><input class="form-control" type="number" min="1" value="{{$value->quantity}}" onchange="changeQuantity(this.value, '{{$value->product->selling_price}}', '{{$value->id}}', '{{$updateUrl}}')" /></td>
                                 <td class="text-right" id="price{{$value->id}}">{{$value->quantity * $value->product->selling_price}}</td>
                                 <?php 
                                    $deleteRoute = route('delete-from-cart', $value->id);
                                 ?>
                                 <td class="text-right"><button class="btn btn-sm btn-danger" onclick="deleteFromCart('{{$deleteRoute}}')"><i class="fa fa-trash"></i> </button> </td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
                 <input type="text" placeholder="Enter Pin Code" id="pincode">
                        <button type="button" onclick="verifyPincode('{{$pincodeUrl}}')">Check</button>
             </div>
             <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
             
             <div class="col mb-2">
                 <div class="row">
                     <div class="col-sm-12  col-md-6">
                         <button class="btn btn-lg btn-block btn-light">Continue Shopping</button>
                     </div>
                     <div class="col-sm-12 col-md-6 text-right">
                         <button class="btn btn-lg btn-block btn-success text-uppercase"><form action="{{ route('payment') }}" method="POST" >
                                    @csrf
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="{{ env('RAZOR_KEY') }}"
                                            data-amount="1000"
                                            data-buttontext="PAY NOW"
                                            data-name="ADI TANTRA YOAG"
                                            data-description="Rozerpay"
                                            data-image="{{ asset('/images/header/logo.png') }}"
                                            data-prefill.name="name"
                                            data-prefill.email="email"
                                            data-theme.color="">
                                    </script>
                                </form></button>
                     </div>
                 </div>
             </div>
             </div>
             </div>
         </div>
     </div>
   
    
@include('footer')