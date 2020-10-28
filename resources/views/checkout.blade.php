@include('header')
    <div class="hs_indx_title_main_wrapper">
        <div class="hs_title_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_left_wrapper">
                        <h2>Checkout</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="hs_indx_title_right_wrapper">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a> &nbsp;&nbsp;&nbsp;> </li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="hs_kd_sidebar_main_wrapper hs_num_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="hs_kd_left_sidebar_main_wrapper">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="hs_num_four_sec_wrapper">
                                    <h2>Review your order</h2>
                                    <h4><span></span></h4>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                <div class="hs_cn_second_sec_wrapper">
                                    <h2>Shipping address</h2>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Name</label>
                                            <input type="text" required id="fullName">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Phone Number</label>
                                            <input type="text" required id="phoneNumber">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Address</label>
                                            <input type="text" required id="address">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>landmark</label>
                                            <input type="text" required id="landmark">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="hs_num_input_wrapper">
                                            <label>Pin code</label>
                                            <input type="text" required id="pincode">
                                        </div>
                                    </div>
                                </div>
                                <?php
                            $routeUrl = route('pincode');
                            ?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div style="margin-top: 58px"
                                        class="hs_num_input_btn_wrapper hs_cn_birth_btn_wrapper">
                                        <ul>
                                            <li id="calculateDeliveryCharges"><a onclick="calculate('{{$routeUrl}}')">Calculate</a></li>
                                            <li id="editPincode" style="display: none;"><a onclick="editPincode()">Edit Pincode</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <div class="hs_num_input_btn_wrapper hs_cn_birth_btn_wrapper_previous">

                                        <ul>
                                            <li id="placeOrder" style="display: none;"><a href="#" class="buy_now">Place Order</a></li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <div class="hs_cn_second_sec_wrapper">
                                    <h2>Order Summery</h2>
                                </div>
                                <div class="hs_shop_tabs_cont_sec_wrapper">
                                    <div class="tab-content">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>

                                                        <th scope="col">Product</th>

                                                        <th scope="col" style="width: 7em;" class="text-center">Quantity
                                                        </th>
                                                        <th scope="col" class="text-right">Price</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $total = 0;
                                                    ?>
                                                @foreach($cart as $key => $value)
                                                    <tr style="background-color: #222629;">

                                                        <td>{{$value->product->name}}</td>
                                                        <?php
                                                        $total = $total + ($value->quantity * $value->product->selling_price);
                                                         ?>
                                                        <td class="text-right">{{$value->quantity}}</td>
                                                        <td class="text-right">{{$value->quantity * $value->product->selling_price}}</td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            <div style="font-size:18px" class="cart-text"> Subtotal : &nbsp <p id="subtotal">{{$total}}</p></div> <br>
                                           <div style="font-size:18px"  class="cart-text"> Delivery Charges : &nbsp <p id="deliveryCharge"></p></div><br>
                                           <div style="color: #e4ff00"class="cart-text"> Total : &nbsp <p id="total"></p></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="hs_num_input_btn_wrapper hs_cn_birth_btn_wrapper_previous"
                                    data-toggle="modal" data-target="#Address">

                                    <ul>
                                        <li><a href="#">Place Order</a></li>
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
    <input type="hidden" id="totalValue" value="{{$total}}">
    <input type="hidden" id="pincodeValue">
    <input type="hidden" id="paySuccesRoute" value="{{route('paysuccess')}}">
    <input type="hidden" id="paymentStatusRoute" value="{{route('payment-successsfull')}}">
    </div>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function calculate(url)
    {
        var p = document.getElementById('pincode').value;
        if(p == null || p.trim() == "")
        {
            swal({
            		title: "Error",
            		text: "Pincode is must",
            		icon: "error"
        	})
        }
        else
        {
            $.ajax({
                type: "POST",
                url: url, // You add the id of the post and the update datetime to the url as well
				data: {
                _token: document.getElementById('token').value,
                pincode: p
            },
                success: function (response) {
                    if(Number(response.data.status) == 201)
                    {
                        swal({
            		title: "Error",
            		text: response.data.message,
            		icon: "error"
        	})
                    }
                    else
                {
                    document.getElementById('deliveryCharge').innerHTML = response.data.deliveryCharge;
                    document.getElementById('total').innerHTML = Number(document.getElementById('totalValue').value) + Number(response.data.deliveryCharge);
                    document.getElementById('pincode').readOnly = true;
                    document.getElementById('calculateDeliveryCharges').style.display = 'none';
                    document.getElementById('pincodeValue').value = response.data.deliveryCharge;
                    document.getElementById('editPincode').style.display = 'block';
                    document.getElementById('placeOrder').style.display = 'block';
                }
                }
            });
        }
    }

    function editPincode()
    {
        document.getElementById('pincode').readOnly = false;
                    document.getElementById('calculateDeliveryCharges').style.display = 'block';
                    document.getElementById('editPincode').style.display = 'none';
                    document.getElementById('placeOrder').style.display = 'none';
    }
</script>
<script>
         var SITEURL = '{{URL::to('')}}';
         $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
         }); 
         $('body').on('click', '.buy_now', function(e){
             console.log(document.getElementById('pincode').value, document.getElementById('fullName').value, document.getElementById('address').value, document.getElementById('landmark').value.trim(), document.getElementById('phoneNumber').value)
             if(document.getElementById('pincode').value == null || document.getElementById('pincode').value.trim(), document.getElementById('fullName').value == null || document.getElementById('fullName').value.trim() == "" || document.getElementById('address').value == null || document.getElementById('address').value.trim() == "" || document.getElementById('landmark').value == null || document.getElementById('landmark').value.trim() == "" || document.getElementById('phoneNumber').value == null || document.getElementById('phoneNumber').value.trim() == "")
         {
            swal({
            		title: "Error",
            		text: "Please fillup required fields.",
            		icon: "error"
        	})
         }
         else
         {
             var total = (Number(document.getElementById('totalValue').value)) + (Number(document.getElementById('pincodeValue').value));
             console.log(total);
	     var options = {
           "key": "rzp_test_ko4EO60xHxMY8g",
           "amount": total * 100, // 2000 paise = INR 20
           "name": "ADI TANTRA YOAG",
           "currency": "INR",
           "description": "Payment",
           "image": "http://test2.electronmedialab.in/images/header/logo.png",
           "handler": function (response){
                 $.ajax({
                   url: document.getElementById('paySuccesRoute').value,
                   type: 'post',
                   dataType: 'json',
                   data: {
					   _token: document.getElementById('token').value,
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: "#" + randomString(10, '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 
                    subtotal: document.getElementById('totalValue').value,
                    deliveryCharge: document.getElementById('pincodeValue').value,
                     totalAmount : (Number(document.getElementById('totalValue').value)) + (Number(document.getElementById('pincodeValue').value)),
					 pincode: document.getElementById('pincode').value,
                     name: document.getElementById('fullName').value,
                     phone: document.getElementById('phoneNumber').value,
                     address: document.getElementById('address').value,
                     landmark: document.getElementById('landmark').value 
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
               "contact": document.getElementById('phoneNumber').value,
               "email": "{{Auth::user()->email}}",
               "name": document.getElementById('fullName').value
           },
           "theme": {
               "color": "#528FF0"
           }
         };
         var rzp1 = new Razorpay(options);
         rzp1.open();
         e.preventDefault();
         }
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