@if (request()->is('index'))
    <?php 
        $bg_black = '';
    ?>
@else 
    <?php 
        $bg_black = 'bg-black';
    ?>
@endif
<div class="header-bottom-area <?=$bg_black?> sticky-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 d-none d-lg-block">
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
            <div class="col-lg-4">
                <!-- social-follow-box start -->
                <div class="social-follow-box">
                    <div class="follow-title">
                        <h2>Follow us:</h2>
                    </div>
                    <ul class="social-follow-list">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
                <!-- social-follow-box end -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 d-block d-lg-none">
                <!-- Mobile Menu Area Start -->
                <div class="mobile-menu-area">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul>
                                <li class="active"><a href="#">Home</a>
                                    <ul class="dropdown_menu">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                        <li><a href="index-3.html">Home Page 3</a></li>
                                        <li><a href="index-4.html">Home Page 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Features</a>
                                    <ul class="mega-menu">
                                        <li><a href="#">Shop Page</a>
                                            <ul>
                                                <li><a href="shop.html">Shop Left</a></li>
                                                <li><a href="shop-right.html">Shop Right</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog Page</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Left</a></li>
                                                <li><a href="blog-right.html">Blog Right</a></li>
                                                <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="frequently-question.html">FAQ</a></li>
                                                <li><a href="login-register.html">Login & Register</a></li>
                                                <li><a href="error404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Column</a>
                                            <ul>
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="wishlist.html">Wish List</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">For women</a>
                                    <ul class="mega-menu mega-menu-2">
                                        <li><a href="#">Jackets</a>
                                            <ul>
                                                <li><a href="#">Florals</a></li>
                                                <li><a href="#">Shirts</a></li>
                                                <li><a href="#">Shorts</a></li>
                                                <li><a href="#">Stripes</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Jeans</a>
                                            <ul>
                                                <li><a href="#">Hoodies</a></li>
                                                <li><a href="#">Sweaters</a></li>
                                                <li><a href="#">Vests</a></li>
                                                <li><a href="#">Wedges</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Men</a>
                                            <ul>
                                                <li><a href="#">Crochet</a></li>
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Jeans</a></li>
                                                <li><a href="#">Trousers</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>							
                    </div>
                </div>
                <!-- Mobile Menu Area End -->
            </div>
        </div>
    </div>
</div>