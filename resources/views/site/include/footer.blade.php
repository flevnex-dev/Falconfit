@if (request()->is('index'))
<?php $classNameFo = '';?>
@else 
<?php $classNameFo = 'mt-95';?>
@endif
<footer class="footer-area <?=$classNameFo?> ">
    <!-- our-service-area  start -->
    <div class="our-service-area">
        <div class="container-fluid">
            <div class="our-service-inner">
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('site/img/icon/f-1.png')}}" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Free delivery</h3>
                            <p>Free shipping on all order</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('site/img/icon/f-2.png')}}" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Online Support 24/7</h3>
                            <p>Support online 24 hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('site/img/icon/f-3.png')}}" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Money Return</h3>
                            <p>guarantee under 7 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('site/img/icon/f-5.png')}}" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>Member Discount</h3>
                            <p>Onevery order over $130</p>
                        </div>
                    </div>
                </div>
                <div class="col-custom">
                    <div class="single-service">
                        <div class="service-icon">
                            <img src="{{url('site/img/icon/f-6.png')}}" alt="">
                        </div>
                        <div class="serivce-cont">
                            <h3>SECURE PAYMENT</h3>
                            <p>All cards accepted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- our-service-area  end -->
    <div class="footer-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="about-us-footer">
                        <div class="footer-logo">
                            <a href="#"><img src="{{url('upload/sitesetting/'.$SiteSetting->bottom_logo)}}" alt=""></a>
                        </div>
                        <div class="footer-info">
                            <p class="phone">{{$SiteSetting->mobile_number}}</p>
                            <p class="desc_footer">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                            <div class="social_follow">
                                <ul class="social-follow-list">
                                    <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li class="google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="footer-info-inner">
                        <div class="row">
                            <div class="col-lg-2 col-md-6 col-sm-6"></div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="footer-title">
                                    <h3>Menu</h3>
                                </div>
                                <ul>
                                    <li><a href="#">Privacy Policy </a></li>
                                    <li><a href="#">Cookie Policy </a></li>
                                    <li><a href="#">Purchasing Policy </a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Career</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-lg-5 offset-xl-1 col-md-6 col-sm-6">
                                <div class="footer-title">
                                    <h3>Get in touch</h3>
                                </div>
                                <div class="block-contact-text">
                                    <p> {{$SiteSetting->address}}</p>
                                    <p>Call us: <span>{{$SiteSetting->mobile_number}} </span></p>
                                    <p>Email us: <span>{{$SiteSetting->email}}</span></p>
                                </div>
                                <div class="time">
                                    <h3 class="time-title">Opening time</h3>
                                    <div class="time-text">
                                        <p>
                                            {{$SiteSetting->opening_time}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright">Copyright &copy; <?= date('Y');?> <a href="http://falconfitbd.com/">Falconfit</a>. All Rights Reserved</div>
                </div>	
                <div class="col-lg-6 col-md-6">
                     <div class="payment"><img alt="" src="{{url('site/img/icon/payment.png')}}"></div>
                </div>
            </div>
        </div>
    </div>
</footer>