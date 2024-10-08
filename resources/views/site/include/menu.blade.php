 <!-- header start -->
 <header>
    <!-- header-top start -->
    <div class="header-top bg-black sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-3 md-custom-12">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="{{url('index')}}"><img src="{{url('upload/sitesetting/'.$SiteSetting->main_logo)}}" alt="falconfitbd"></a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-lg-10 col-md-9 md-custom-12">
                    <div class="row">
                        <div class="col-lg-7 d-none d-lg-block">
                            <!-- main-menu-area start -->
                            <div class="main-menu-area">
                                <nav>
                                    <ul>
                                    <li class="{{ Request::path() == 'index' ? 'active' : '' }}"><a href="{{url('index')}}">Home</a></li>
                                    <li class="{{ Request::path() == 'features' ? 'active' : '' }}"><a href="{{url('features')}}">Features</a></li>
                                    @if (!empty(($ManuCategory[0]->menu_position)==1))
                                        <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                    @endif
                                    @if (!empty(($ManuCategory[0]->menu_position)==2))
                                        <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                    @endif
                                    <li class="{{ request()->is('products*') ? 'active' : '' }}"><a href="#">Shop <i class="ion-ios-arrow-down"></i></a>
                                            <ul class="mega-menu mega-menu-2">
                                                @if(isset($cat))
                                                    @foreach($cat as $ca)
                                                    {{-- {{dd($cat)}} --}}
                                                    <?php 
                                                        $names = strtolower(str_replace(' ','-',$ca['name']));
                                                        $catName = str_replace('/','-',$names);
                                                    ?>
                                                        <li><a href="{{url('/products/'.$ca['id'].'/'.$catName)}}">{{$ca['name']}}</a>
                                                            @if(!empty($ca['scat']))
                                                            <ul>
                                                                @foreach($ca['scat'] as $sca)
                                                                <?php 
                                                                    $names = strtolower(str_replace(' ','-',$sca['name']));
                                                                    $subcatName = str_replace('/','-',$names);
                                                                ?>
                                                                <li><a href="{{url('products/'.$ca['id'].'/subcategory/'.$sca['id'].'/'.$subcatName)}}">{{$sca['name']}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        @if (!empty(($ManuCategory[0]->menu_position)==3))
                                            <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                        @endif
                                        @if (!empty(($ManuCategory[0]->menu_position)==4))
                                            <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                        @endif
                                        <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a href="{{url('contact')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- main-menu-area end -->
                        </div>
                        <div class="col-lg-5 col-md-12">
                            <!-- full-setting-area start -->
                            <div class="full-setting-area setting-style-3">
                                <div class="top-dropdown">
                                    <ul>
                                        {{--<li class="drodown-show"><a href="#">USD <i class="fa fa-angle-down"></i></a>
                                            <ul class="open-dropdown">
                                                <li><a href="#">EUR €</a></li>
                                                <li><a href="#">USD $</a></li>
                                            </ul>
                                        </li>
                                        <li class="drodown-show"><a href="#"><img src="img/icon/p-1.jpg" alt=""> English <i class="fa fa-angle-down"></i></a>
                                            <ul class="open-dropdown">
                                                <li><a href="#"><img src="img/icon/p-1.jpg" alt=""> English</a></li>
                                                <li><a href="#"><img src="img/icon/p-2.jpg" alt=""> Français</a></li>
                                            </ul>
                                        </li>--}}
                                        <li class="drodown-show"><a href="#"> Setting <i class="fa fa-angle-down"></i></a>
                                            <ul class="open-dropdown setting">
                                                <li><a href="{{url('my-account')}}">My account</a></li>
                                                <li><a href="{{url('cart')}}">Checkout</a></li>
                                                <li><a href="{{url('login-register')}}">Sign in</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- full-setting-area end -->
                        </div>
                    </div>
                </div>
                
            </div>
                <div class="mobile-menu-style-2 row">
                <div class="col-lg-12 d-block d-lg-none">
                    <!-- Mobile Menu Area Start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="mobile-menu-active">
                                <ul>
                                <li class="{{ Request::path() == 'index' ? 'active' : '' }}"><a href="{{url('index')}}">Home</a></li>
                                    <li class="{{ Request::path() == 'features' ? 'active' : '' }}"><a href="{{url('features')}}">Features</a></li>
                                    @if (!empty(($ManuCategory[0]->menu_position)==1))
                                        <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                    @endif
                                    @if (!empty(($ManuCategory[0]->menu_position)==2))
                                        <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                    @endif
                                    <li class="{{ request()->is('products*') ? 'active' : '' }}"><a href="#">Shop </a>
                                            <ul class="mega-menu mega-menu-2">
                                                @if(isset($cat))
                                                    @foreach($cat as $ca)
                                                    {{-- {{dd($cat)}} --}}
                                                    <?php 
                                                        $names = strtolower(str_replace(' ','-',$ca['name']));
                                                        $catName = str_replace('/','-',$names);
                                                    ?>
                                                        <li><a href="{{url('/products/'.$ca['id'].'/'.$catName)}}">{{$ca['name']}}</a>
                                                            @if(!empty($ca['scat']))
                                                            <ul>
                                                                @foreach($ca['scat'] as $sca)
                                                                <?php 
                                                                    $names = strtolower(str_replace(' ','-',$sca['name']));
                                                                    $subcatName = str_replace('/','-',$names);
                                                                ?>
                                                                <li><a href="{{url('products/'.$ca['id'].'/subcategory/'.$sca['id'].'/'.$subcatName)}}">{{$sca['name']}}</a></li>
                                                                @endforeach
                                                            </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </li>
                                        @if (!empty(($ManuCategory[0]->menu_position)==3))
                                            <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                        @endif
                                        @if (!empty(($ManuCategory[0]->menu_position)==4))
                                            <li><a href="{{url($ManuCategory[0]->menu_link)}}">{{$ManuCategory[0]->menu_title}}</a></li>
                                        @endif
                                        <li class="{{ request()->is('contact*') ? 'active' : '' }}"><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </nav>							
                        </div>
                    </div>
                    <!-- Mobile Menu Area End -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end -->
    <!-- header-mid-area start -->
    <div class="header-mid-area header-mid-style-3 bg-black">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- hot-line-area start -->
                    <div class="hot-line-area">
                        <div class="phone">
                            Customer Support: <span> {{$SiteSetting->mobile_number}} </span>
                        </div>
                    </div>
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
    <!-- header-mid-area end -->
</header>
<!-- header end -->