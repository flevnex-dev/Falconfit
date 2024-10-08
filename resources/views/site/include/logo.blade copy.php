@if (request()->is('index'))
    <?php 
        $className1 = 'col-lg-3';
        $className2 = 'col-lg-9';
    ?>
@else 
    <?php 
        $className1 = 'col-lg-3';
        $className2 = 'col-lg-9';
    ?>
@endif


<div class="header-mid-area bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="<?=$className1?> col md-custom-12">
                <!-- logo start -->
                <div class="logo">
                <a href="{{url('/index')}}"><img src="{{url('upload/sitesetting/'.$SiteSetting->main_logo)}}" alt=""></a>
                </div>
                <!-- logo end -->
            </div>
            <div class="<?=$className2?> md-custom-12">
                <!-- hot-line-area start -->
                {{-- <div class="hot-line-area">
                    <div class="phone">
                        Customer Support: <span>(012) 800 456 789-987 </span>
                    </div>
                </div> --}}
                <!-- hot-line-area end -->
                <!-- shopping-cart-box start -->
                <div class="shopping-cart-box white-cart-box">
                    <ul>
                        <?php $total = 0 ?>
                        @foreach((array) session('cart') as $id => $details)
                            <?php $total += $details['price'] ?>
                        @endforeach
                        <li>
                            <a href="#">
                                <span class="item-cart-inner">
                                    <span class="item-cont">{{ count((array) session('cart')) }}</span> 
                                    My Cart
                                </span>
                                <div class="item-total">৳ <span id="cart_summary_total">{{ $total }}</span></div>
                            </a>
                            <ul class="shopping-cart-wrapper">
                                
                                @if(session('cart'))
                                    @foreach(session('cart') as $id => $details)
                                    <?php 
                                        $names = strtolower(str_replace(' ','-',$details['name']));
                                        $proName = str_replace('/','-',$names);
                                    ?>
                                <li>
                                    <div class="shoping-cart-image">
                                        <a href="#">
                                            <img src="{{url('upload/product/'. $details['photo'] )}}" width="60" alt="">
                                            <span class="product-quantity">{{ $details['quantity'] }}</span>
                                        </a>
                                    </div>
                                    <div class="shoping-product-details">
                                        <h3><a href="{{ url('product/'.$id.'/'.$proName) }}">{{ $details['name'] }}</a></h3>
                                        <div class="price-box">
                                            <span>৳{{ $details['price'] }}</span>
                                        </div>
                                        {{-- <div class="sizeandcolor">
                                            <span>Size: S</span>
                                            <span>Color: Orange</span>
                                        </div> --}}
                                        <div class="remove">
                                            <button data-id="{{ $id }}" class="remove-from-cart" title="Remove"><i class="ion-android-delete"></i></button>
                                        </div>
                                    </div>
                                </li>
                                
                        @endforeach
                        @endif
                            @if (!empty($id))
                                <li>
                                    <div class="cart-subtotals">
                                        <h5>Subtotal<span class="float-right">৳<span id="subtotal">{{ $total }}</span></span></h5>
                                        {{-- <h5>Shipping<span class="float-right"> $7.00 </span></h5>
                                        <h5>Taxes<span class="float-right">$0.00</span></h5> --}}
                                        <h5> Total<span class="float-right">৳<span id="totalcart">{{ $total }}</span></span></h5>
                                    </div>
                                </li>
                                
                                <li class="shoping-cart-btn">
                                    <a class="checkout-btn" href="{{ url('cart') }}">checkout</a>
                                </li>
                            @else 
                                <li class="shoping-cart-btn">
                                    <code>No product in cart</code>
                                </li>
                            @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- shopping-cart-box start -->
                
                <!-- searchbox start -->
                <div class="searchbox">
                    <form action="{{url('/products-search')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="search-form-input">
                            <select id="select" name="select" class="nice-select">
                                <option value="">All Categories</option>
                                @if (isset($totalCatData))
                                    @foreach ($totalCatData as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                            <input type="text" name="search" placeholder="Enter your search key ... ">
                            <button class="top-search-btn" type="submit">Search</button>
                        </div>
                    </form>
                </div>
                <!-- searchbox end -->
            </div>
        </div>
    </div>
</div>
@section('js')


    <script type="text/javascript">

        // $(".remove-from-cart").click(function (e) {
        //     e.preventDefault();

        //     var ele = $(this);

        //     if(confirm("Are you sure")) {
        //         $.ajax({
        //             url: '{{ url('remove-from-cart') }}',
        //             method: "DELETE",
        //             data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
        //             success: function (response) {
        //                 window.location.reload();
        //             }
        //         });
        //     }
        // });

    </script>

@endsection