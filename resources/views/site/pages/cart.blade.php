@extends('site.layout.master')
@section('title','Shopping cart')
@section('content') 
            
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Cart</li>
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
            <div class="col-12">
                <div class="cart-table">
                    <div class="table-content table-responsive">
                        <table class="table"  id="cart">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="cart-product-name">Color</th>
                                    <th class="cart-product-name">Size</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                    <th class="plantmore-product-remove">update / remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $total = 0 ?>
                                @if (!empty($id))
                                <tr>
                                    <td colspan="6">Cart is empty!</td>
                                </tr>
                                @else
                                                                
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                        <?php 
                                            $total += $details['price'] * $details['quantity'] ;
                                            $names = strtolower(str_replace(' ','-',$details['name']));
                                            $proName = str_replace('/','-',$names);
                                        ?>
                            <tr>
                                
                                <td data-th="Product" class="plantmore-product-thumbnail"><a href="#"><img src="{{url('upload/product/'. $details['photo'] )}}" alt="" width="60"></a></td>
                                <td class="plantmore-product-name"><a href="{{ url('product/'.$id.'/'.$proName) }}">{{ $details['name'] }}</a></td>
                                <td class="plantmore-product-color">
                                    <a href="">{{ $details['product_color_name'] }}</a>
                                </td>
                                <td class="plantmore-product-size">
                                    <a href="">{{ $details['product_size_name'] }}</a>
                                </td>
                                <td data-th="Price" class="plantmore-product-price"><span class="amount">৳ {{ $details['price'] }}</span></td>
                                <td data-th="Quantity" class="plantmore-product-quantity">
                                    <input type="number" min="1" value="{{ $details['quantity'] }}" class="quantity" />
                                </td>
                                <td data-th="Subtotal" class="product-subtotal"><span class="amount">৳ {{ $details['price'] * $details['quantity'] }}</span></td>
                                <td data-th="" class="plantmore-product-remove">
                                    {{-- <a href="#"><i class="fa fa-times"></i></a> --}}
                                    <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                                    <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-times"></i></button>
                                </td>
                            </tr>
                                    @endforeach
                                @endif
                                    @endif
                            </tbody>
                        </table>
                    </div>
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="coupon-all">
                                <div class="coupon">
                                    <input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                                <div data-th="" class="coupon2">
                                    <input class="button update-cart" name="update_cart" value="Update cart" type="submit">
                                    <button class="button btn btn-info btn-sm update-cart" data-id="@if (!empty($id)){{ $id }} @endif"><i class="fa fa-refresh"></i> Update cart</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>৳ {{ $total }}</span></li>
                                    <li>Total <span>৳ {{ $total }}</span></li>
                                </ul>
                                <a href="{{url('/checkout')}}">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
            
            
@endsection
@section('js')


    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);
            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
                
               }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);
            // alert(ele);
            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection