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
             <div class="hs_blog_categories_main_wrapper_card col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="hs_shop_tabs_cont_sec_wrapper">
                     <div class="tab-content">
                 <div style="color: #000" class="table-responsive">
                     <table class="table table-striped">
                         <thead>
                             <tr>
                                 <th scope="col">Product </th>
                                 <th scope="col"></th>
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
                             <tr class="add_card">
                                 <td><img class="add_img"  src="{{ Voyager::image( $value->product->image )}}" /> </td>
                                 <td>{{$value->product->name}}</td>
                                 <td>In stock</td>
                                 <td><input class="form-control" type="number" min="1" value="{{$value->quantity}}" onchange="changeQuantity(this.value, '{{$value->product->selling_price}}', '{{$value->id}}', '{{$updateUrl}}')" /></td>
                                 <td class="text-right" id="price{{$value->id}}">{{$value->quantity * $value->product->selling_price}}</td>
                             </tr>
                             @endforeach
                         </tbody>
                     </table>
                 </div>
                 
             </div>
             <input type="hidden" id="token" name="_token" value="{{csrf_token()}}">
             
             <div class="col mb-2">
                 <div class="row">
                     <div class="col-sm-12  col-md-6">
                         <button class="btn btn-lg btn-block btn-light btn-shopp">Continue Shopping</button>
                     </div>
                     <div class="col-sm-12 col-md-6 text-right">
                     <a href="{{route('checkout')}}">
                         <button class="btn btn-lg btn-block btn-success text-uppercase">
                                 Checkout </button>
                                 </a>
                     </div>
                 </div>
             </div>
             </div>
             </div>
         </div>
     </div>
   
    
@include('footer')