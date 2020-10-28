<!-- hs footer wrapper End -->
    <!-- hs bottom footer wrapper Start -->
    <div class="hs_bottom_footer_main_wrapper">
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer_bottom_cont_wrapper">
                        <p>© Copyright 2020 Adi Tantra. All right Reserved - Developed By<a href="#"> Electron Media Lab</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myButton"></div>
    <script type="text/javascript" src="{{ asset('js/floating-wpp.js') }}"></script>
<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '+918404052003',
            popupMessage: 'Have any query? We are there to help you!',
            message: "I want to know ",
            showPopup: true,
            showOnIE: false,
            headerTitle: 'Welcome!',
            headerColor: 'crimson',
            backgroundColor: 'crimson',
            buttonImage: "<img src='{{asset('images/whatsapp.svg') }}' />"
        });
    });
</script>

    <script>

    function addToCart(url)
        {
            if(document.getElementById('loginUser').value == '1')
            {
            let d = document.getElementById('input-quantity').value;
            $.ajax({
                type: "POST",
                url: url, // You add the id of the post and the update datetime to the url as well
				data: {
                _token: document.getElementById('token').value,
                product_id: document.getElementById('product_id').value,
                quantity: d
            },
                success: function (response) {
                    swal({
            		title: "Success",
            		text: response.data.message,
            		icon: "success"
        	})
                }
            });
            }
            else {
                swal({
            		title: "Warning",
            		text: "Login first to add to cart",
            		icon: "warning"
        	})
            }
        }

        function verifyPincode(url)
        {
            let p = document.getElementById('pincode').value;
            $.ajax({
                type: "POST",
                url: url, // You add the id of the post and the update datetime to the url as well
				data: {
                _token: document.getElementById('token').value,
                pincode: p
            },
                success: function (response) {
                    document.getElementById('deliveryDays').innerHTML = response.data.message;
                }
            });
        }

        function deleteFromCart(url) {
    swal({
            title: "Are you sure?",
            text: "You wamt to delete from delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                document.location.href = url;
            } else {
                swal("Cancelled!");
            }
        });
}

function changeQuantity(quantity, sellingPrice, id, url)
        {
            let htmlId = "price" + id;
            document.getElementById(htmlId).innerHTML = Number(quantity) * Number(sellingPrice);
            $.ajax({
                type: "POST",
                url: url, // You add the id of the post and the update datetime to the url as well
				data: {
                _token: document.getElementById('token').value,
                id: id,
                quantity: quantity
            },
                success: function (response) {
                    console.log(response)
                }
            }); 
        }

        function submitForm(id)
        {
            document.getElementById(id).submit();
        }

        </script>
    
    <!-- hs bottom footer wrapper End -->
    <!--main js file start-->
    
    <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/modernizr.js')}}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js')}}"></script>
    <script src="{{ asset('js/parallax.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/jquery.shuffle.min.js')}}"></script>
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>
    <!--main js file end-->
</body>


<!-- Mirrored from www.webstrot.com/html/horoscope/light_version/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 05 Sep 2020 17:28:04 GMT -->
</html>