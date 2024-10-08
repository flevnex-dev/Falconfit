@extends('site.layout.master')
@section('title','Checkout')
@section('content') 
            
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/checkout')}}">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-xl-10 offset-xl-1">
                <!-- coupon-area start -->
                <div class="coupon-area mb-60">
                    @if (empty(Auth::user()))
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span id="showlogin" class="coupon">Click here to login</span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                                <form action="{{ url('customerLogin') }}" method="POST">
                                    {{ csrf_field() }} 
                                    
                                    <p class="coupon-input form-row-first">
                                        <label>email <span class="required">*</span></label>
                                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" >
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>password <span class="required">*</span></label>
                                        <input type="password"  placeholder="Password" name="password">
                                    </p>
                                    <div class="clear"></div>
                                    <p>
                                        <button value="Login" name="login" class="button-login" type="submit">Login</button>
                                        <label><input type="checkbox" value="1"><span>Remember me</span></label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="coupon-accordion">
                        <h3>Have a coupon? <span id="showcoupon" class="coupon">Click here to enter your code</span></h3>
                        <div id="checkout-coupon" class="coupon-content">
                            <div class="coupon-info">
                                <form action="#"> 
                                    <p class="checkout-coupon">
                                        <input type="text" placeholder="Coupon code">
                                        <button value="Apply coupon" name="apply_coupon" class="button-apply-coupon" type="submit">Apply coupon</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- coupon-area end -->
            </div>
        </div>
        <!-- checkout-area start -->
        <div class="checkout-area">
            <div class="row">
                <form action="{{url('/checkout/payment')}}" method="POST">
                    <div class="col-lg-12">
                        
                        <div class="row">
                            <div class="col-lg-6 offset-xl-1 col-xl-5 col-sm-12">
                                @include('admin.include.msg')
                                {{-- <form action="#" method="POST"> --}}
                                    {{ csrf_field() }}
                                    
                                    <div class="checkbox-form">
                                        <h3 class="shoping-checkboxt-title">Billing Details</h3>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <p class="single-form-row">
                                                    {{-- {{dd($customer->address)}} --}}
                                                    <label>Full name <span class="required">*</span></label>
                                                    <input type="text" name="name" @if (Auth::user()) value="{{ Auth::user()->name }}" readonly @endif placeholder="Full name" required='required'>
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="single-form-row">
                                                    <label>Email <span class="required">*</span></label>
                                                    <input type="email" name="email" @if (Auth::user()) value="{{ Auth::user()->email }}" readonly @endif placeholder="Email Address" required>
                                                </p>
                                            </div>
                                            {{-- {{dd(Auth::user())}} --}}
                                            <div class="col-lg-12">
                                                <p class="single-form-row">
                                                    <label>Phone <span class="required">*</span></label>
                                                    <input type="text" name="mobile_number" @if (!empty($customer)) value="{{ $customer->phone_number }}" disabled @endif placeholder="Enter your mobile number">
                                                </p>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="single-form-row">
                                                    <label>Address <span class="required">*</span></label>
                                                    <textarea cols="5" rows="2" name="address" class="checkout-mess" @if (!empty($customer)) disabled @endif placeholder="Enter your address.">
                                                        @if (!empty($customer)) {!! $customer->address !!} @endif
                                                    </textarea>
                                                </p>
                                            </div>
                                            @if (empty(Auth::user()))
                                            <div class="col-lg-12">
                                                <div class="single-form-row checkout-area">
                                                    <label><input type="checkbox" name="createAccount" id="chekout-box"> Create an account?</label>
                                                    <div class="account-create single-form-row">
                                                        <label class="creat-pass">Create account password <span>*</span></label>
                                                        <input type="password" name="password" class="input-text" >
                                                    </div>
                                                </div>
                                            </div>   
                                            @endif
                                            
                                            <div class="col-lg-12">
                                                <div class="single-form-row">
                                                    <label id="chekout-box-2"><input name="is_ship" type="checkbox"> Ship to a different address?</label>
                                                    <div class="ship-box-info">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <p class="single-form-row">
                                                                    <label>Full name <span class="required">*</span></label>
                                                                    <input type="text" name="nameShip" placeholder="Full name">
                                                                </p>
                                                            </div>
                                                            
                                                            <div class="col-lg-12">
                                                                <p class="single-form-row">
                                                                    <label>Address <span class="required">*</span></label>
                                                                    <textarea cols="5" rows="2" name="addressShip" class="checkout-mess" placeholder="Enter your address."></textarea>
                                                                </p>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <p class="single-form-row m-0">
                                                    <label>Order notes</label>
                                                    <textarea cols="5" rows="2" name="order_notes" class="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                {{-- </form> --}}
                            </div>
                            <div class="col-lg-6  col-xl-5 col-sm-12">
                                <div class="checkout-review-order">
                                    {{-- <form action="{{url('/checkout/payment')}}" method="POST"> --}}
                                        {{ csrf_field() }}
                                        <h3 class="shoping-checkboxt-title">Your order</h3>
                                        <table class="checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                    <th class="t-product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $total=0;?>
                                            @if(session('cart'))
                                                @foreach(session('cart') as $id => $details)
                                                <?php 
                                                    $total += $details['price'] * $details['quantity'] ;
                                                ?>
                                                <tr class="cart_item">
                                                    <td class="t-product-name">{{ $details['name'] }} <strong class="product-quantity">× {{ $details['quantity'] }}</strong></td>
                                                    <td class="t-product-price"><span>৳ {{ $details['price'] * $details['quantity'] }}</span></td>
                                                </tr>
                                                
                                                @endforeach
                                                <tr class="cart_item" id="shippingCost">
                                                    <td>Shipping Cost</td>
                                                    <td>৳ <span id="shippingAmount"></span></td>
                                                </tr>
                                            @endif
                                            </tbody>
                                            <tfoot>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td>
                                                        ৳ <span id="subTotalAmount">{{ $total }}</span>
                                                        <input type="hidden" id="hiddenSubTotalAmount" name="hiddenSubTotal" value="{{ $total }}">
                                                    </td>
                                                </tr>
                                                {{-- <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td>Free shipping</td>
                                                </tr> --}}
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <strong>৳ <span id="totalAmount">{{ $total }}</span></strong>
                                                        <input type="hidden" id="hiddenTotalAmount" name="hiddenTotal" value="{{ $total }}">
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="checkout-payment">
                                            <div class="payment_methods">
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Payment Type <span class="required">*</span></label>
                                                        @if (isset($PaymentMethod))
                                                        <select class="form-control" name="payment_type" id="payment_type" class="payment_type">
                                                            <option value="">Select Payment Type </option>
                                                            @foreach ($PaymentMethod as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @endif
                                                    </p>
                                                    <div id="pt">
                                                        <p class="single-form-row">
                                                            <b><span id="ptTitle"></span> Number : <span class="required" id="number"></span></b>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Shipping Cost <span class="required">*</span></label>
                                                        @if (isset($ShippingCost))
                                                        <select class="form-control" name="shipping_cost" id="shipping_cost">
                                                            <option value="">Select Shipping Cost </option>
                                                            @foreach ($ShippingCost as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @endif
                                                        
                                                    </p>
                                                </div>
                                            </div>
                                            <button class="button-continue-payment" type="submit">Order Now</button>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- checkout-area end -->
    </div>
</div>
<!-- content-wraper end -->
        
@endsection

@section('js')
    <script>
        $(function(){
            $("#pt,#shippingCost").hide();
            $("#payment_type").change(function(){
                var data = this.value;
                // alert(data);
                $.post("{{url('checkout/ajax/paymentType')}}", {'data': data, '_token': '<?php echo csrf_token(); ?>'}, function (data) {
                    console.log(data);
                    if(data[0]['mobile_number'] !=null){
                        $("#ptTitle").html(data[0]['name']);
                        $("#number").html(data[0]['mobile_number']);
                        $("#pt").show();
                    }else{
                        $("#pt").hide();
                    }
                    
                });
            });

            $("#shipping_cost").change(function(){
                var data = this.value;
                // alert(data);
                $.post("{{url('checkout/ajax/shippingcost')}}", {'data': data, '_token': '<?php echo csrf_token(); ?>'}, function (data) {
                    console.log(data);
                    var amount = data[0]['amount'];
                    $("#shippingAmount").html(amount);
                    var subTotalAmount = $('#subTotalAmount').text();
                    var totalAmount = $('#totalAmount').text();
                    var total = '<?php echo $total; ?>';
                    //alert(total);
                    $("#shippingAmount").html(amount);
                    $("#subTotalAmount").html(parseInt(amount) + parseInt(total));
                    $("#totalAmount").html(parseInt(amount) + parseInt(total));
                    $("#hiddenSubTotalAmount").val(parseInt(amount) + parseInt(total));
                    $("#hiddenTotalAmount").val(parseInt(amount) + parseInt(total));
                    $("#shippingCost").show();
                });
            });
        });
    </script>
@endsection