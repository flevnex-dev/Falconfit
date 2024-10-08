<!doctype html>
<html class="no-js" lang="en">
    

<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="proimg" content="{{url('upload/product')}}">
    <meta name="prourl" content="{{url('product')}}">
    <meta name="cartshort" content="{{url('add-to-cart/short')}}">
    <meta name="cartsaddd" content="{{url('add_to_cart')}}">
    <meta name="cart" content="{{url('cart')}}">
    <meta name="cartremove" content="{{url('remove-from-cart')}}">
        @include('site.include.headerCss')
        @yield('css')
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. Thanks</p>
        <![endif]-->
        <!-- Add your application content here -->
        
            <?php $className = 'home-3';?>
        
        <div class="wrapper <?=$className?>">
            @if (request()->is('index'))
                <!--Notification start-->
                @include('site.include.notification')
                <!--Notification end-->
            @endif
            <!-- header start -->
           
                <!-- header-top start -->
                {{--@include('site.include.topBar')---}}
                <!-- header-top end -->
                <!-- header-mid-area start -->
                {{--@include('site.include.logo')--}}
                <!-- header-mid-area end -->
                
                <!-- header-bottom-area start -->
                @include('site.include.menu')
                <!-- header-bottom-area end -->
            
            <!-- header end -->
            
            @yield('content')
            
            <!-- footer-area start -->
            @include('site.include.footer')
            <!-- footer-area start -->
            
        </div>   
           
        
        @include('site.include.footerJs')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        @yield('js')
    </body>


</html>