@extends('site.layout.master')
@section('title','wishlist')
@section('content') 
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Wishlist</li>
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
                <form action="#">
                    <div class=" table-content table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-remove">remove</th>
                                    <th class="plantmore-product-thumbnail">images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-stock-status">Stock Status</th>
                                    <th class="plantmore-product-add-cart">add to cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img alt="" src="{{url('site/img/cart/1.jpg')}}"></a></td>
                                    <td class="plantmore-product-name"><a href="#">Nullam maximus</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$23.39</span></td>
                                    <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img alt="" src="{{url('site/img/cart/2.jpg')}}"></a></td>
                                    <td class="plantmore-product-name"><a href="#">Natus erro</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$30.50</span></td>
                                    <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                </tr>
                                <tr>
                                    <td class="plantmore-product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                                    <td class="plantmore-product-thumbnail"><a href="#"><img alt="" src="{{url('site/img/cart/3.jpg')}}"></a></td>
                                    <td class="plantmore-product-name"><a href="#">Sit voluptatem</a></td>
                                    <td class="plantmore-product-price"><span class="amount">$40.19</span></td>
                                    <td class="plantmore-product-stock-status"><span class="out-stock">out stock</span></td>
                                    <td class="plantmore-product-add-cart"><a href="#">add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
                </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->

            
@endsection