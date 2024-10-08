<div class="header-top bg-black">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="welcome-msg">
                    <p>Trusted Online Shopping Site in Bangladesh</p>
                </div>
            </div>
            <div class="col-lg-1 col-md-4"></div>
            <div class="col-lg-3 col-md-4">
                <div class="welcome-msg">
                    <p>Call us: <span>{{$SiteSetting->mobile_number}} </span>(9am to 11pm)</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-8">
                <!-- full-setting-area start -->
                <div class="full-setting-area">
                    <div class="top-dropdown">
                        <ul>
                            {{-- <li class="drodown-show"><span>Currency:</span> <a href="#">USD <i class="fa fa-angle-down"></i></a>
                                <ul class="open-dropdown">
                                    <li><a href="#">EUR €</a></li>
                                    <li><a href="#">USD $</a></li>
                                </ul>
                            </li> --}}
                            <li class="drodown-show"><span>Language:</span> <a href="#"><img src="{{url('site/img/icon/p-1.jpg')}}" alt=""> English <i class="fa fa-angle-down"></i></a>
                                <ul class="open-dropdown">
                                    <li><a href="#"><img src="{{url('site/img/icon/p-1.jpg')}}" alt=""> English</a></li>
                                    <li><a href="#"><img src="{{url('site/img/icon/p-2.jpg')}}" alt=""> Français</a></li>
                                </ul>
                            </li>
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