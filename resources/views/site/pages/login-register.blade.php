@extends('site.layout.master')
@section('title','Login and Register')
@section('content')       

<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Login and Register</li>
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
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="customer-login-register">
                    <h3>Login</h3>
                    <div class="login-Register-info">
                        <form action="{{ url('customerLogin') }}" method="POST">
                            {{ csrf_field() }} 
                            <p class="coupon-input form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text" name="email" >
                            </p>
                            <p class="coupon-input form-row-last">
                                <label>password <span class="required">*</span></label>
                                <input type="password" name="password">
                            </p>
                            <div class="clear"></div>
                            <p>
                                <button value="Login" name="login" class="button-login" type="submit">Login</button>
                                <label><input type="checkbox" value="1"><span>Remember me</span></label>
                                <a href="#" class="lost-password">Lost your password?</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6  col-md-6 col-sm-12">
                <div class="customer-login-register">
                    <h3>Register</h3>
                    <div class="login-Register-info">
                        <form action="#"> 
                            <p class="coupon-input form-row-first">
                                <label>Username or email <span class="required">*</span></label>
                                <input type="text" name="email">
                            </p>
                            <p class="coupon-input form-row-last">
                                <label>password <span class="required">*</span></label>
                                <input type="password" name="password">
                            </p>
                            <div class="clear"></div>
                            <p>
                                <button class="button-login" type="submit">Register</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection