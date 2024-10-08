@extends('site.layout.master')
@section('title','Home')
@section('content')
<!-- slider-main-area start -->
@include('site.include.slider')
<!-- slider-main-area end -->
<?php 
    function getPercentOfNumber($oldprice, $newprice){
        return number_format((($oldprice - $newprice) / ($oldprice)) * 100,0);
    }
?>
@if (count($highLightHome)>0)

<!-- banner-area start -->
<div class="banner-area mt-40">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-custom-4 col">
                <!--single-banner-box start -->
                @if($highLightHome[0]->position==1)
                    <div class="single-banner-box mb-20">
                        <a href="{{$highLightHome[0]->idproduct_link}}"><img src="{{url('upload/highlightcategoryproduct/'.$highLightHome[0]->image)}}" alt=""></a>
                    </div>
                @endif
                <!--single-banner-box end -->
                <!--single-banner-box start -->
                @if($highLightHome[1]->position==2)
                    <div class="single-banner-box">
                        <a href="{{$highLightHome[1]->idproduct_link}}"><img src="{{url('upload/highlightcategoryproduct/'.$highLightHome[1]->image)}}" alt=""></a>
                    </div>
                @endif
                <!--single-banner-box end -->
            </div>
            @if($highLightHome[2]->position==3)
            <div class="col-lg-4 centeritem col">
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="{{$highLightHome[2]->idproduct_link}}"><img src="{{url('upload/highlightcategoryproduct/'.$highLightHome[2]->image)}}" alt=""></a>
                </div>
                <!--single-banner-box end -->
            </div>
            @endif
            <div class="col-lg-4 col-custom-4 col">
                <!--single-banner-box start -->
                @if($highLightHome[3]->position==4)
                    <div class="single-banner-box mb-20">
                        <a href="{{$highLightHome[3]->idproduct_link}}"><img src="{{url('upload/highlightcategoryproduct/'.$highLightHome[3]->image)}}" alt=""></a>
                    </div>
                @endif
                <!--single-banner-box end -->
                <!--single-banner-box start -->
                @if($highLightHome[4]->position==5)
                    <div class="single-banner-box">
                        <a href="{{$highLightHome[4]->idproduct_link}}"><img src="{{url('upload/highlightcategoryproduct/'.$highLightHome[4]->image)}}" alt=""></a>
                    </div>
                @endif
                <!--single-banner-box end -->
            </div>
            
        </div>
    </div>
</div>
<!-- banner-area end -->
@endif


<!-- product-area start -->
<div class="product-area pt-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title sectoin-title-left"> 
                    <!-- product-tabs-list start -->
                    <div class="product-tabs-list">
                        <ul role="tablist" class="nav">
                           <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="best-sellers" href="#best-sellers" class="active show" aria-selected="true">Bestseller</a></li>
                           <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="on-sellers" href="#on-sellers"> Featured Products</a></li>
                       </ul>
                    </div>
                    <!-- product-tabs-list end -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <div id="best-sellers" class="tab-pane active show" role="tabpanel">
                        <div class="row">
                            <div class="product-active-3 owl-carousel">
                                @if(isset($bestProduct))    
                                    @if(count($bestProduct)>0)
                                        @foreach($bestProduct as $row)
                                        <?php 
                                            $names = strtolower(str_replace(' ','-',$row->product_name));
                                            $details = str_replace('/','-',$names);
                                        ?>
                                <div class="col">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ url('product/'.$row->id.'/'.$details) }}">
                                                <?php
                                                    $img = explode(",",$row->image); 
                                                ?>
                                                <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_name}}">
                                                @if (isset($img[1]))
                                                <img class="secondary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_name}}">
                                                @endif
                                            </a>
                                            @if (!empty($row->old_price))
                                            <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}}% off</div>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="rating-box">
                                                    {{-- <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul> --}}
                                                </div>
                                                <h4><a class="product_name" href="{{ url('product/'.$row->id.'/'.$details) }}">{{$row->product_name}}</a></h4>
                                                {{-- <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div> --}}
                                                <div class="price-box">
                                                    @if (!empty($row->old_price))
                                                    <span class="new-price">৳ {{$row->price}}</span>
                                                    <span class="old-price">৳ {{$row->old_price}}</span>
                                                    @else 
                                                    <span class="new-price">৳ {{$row->price}}</span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->id}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                                    {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                                    <li><a class="links-details" href="{{ url('product/'.$row->id.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endforeach
                                @else
                                <code style="font-size: 18px;">No Product Found!</code>
                                @endif
                            @endif 
                            </div>
                        </div>
                    </div>
                    <div id="on-sellers" class="tab-pane" role="tabpanel">
                        <div class="row">
                            <div class="product-active-3 owl-carousel"> 
                                @if(count($featureProduct)>0)
                                    @foreach($featureProduct as $row)
                                    <?php 
                                        $names = strtolower(str_replace(' ','-',$row->product_product_name));
                                        $details = str_replace('/','-',$names);
                                    ?>
                                <div class="col">
                                    <!-- single-product-wrap start -->
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="{{ url('product/'.$row->product.'/'.$details) }}">
                                                <?php
                                                    $img = explode(",",$row->image); 
                                                ?>
                                                <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_product_name}}">
                                                @if (isset($img[1]))
                                                <img class="secondary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_product_name}}">
                                                @endif
                                            </a>
                                            @if (!empty($row->old_price))
                                                <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}}% off</div>
                                            @endif
                                        </div>
                                        <div class="product_desc">
                                            <div class="product_desc_info">
                                                <div class="rating-box">
                                                    {{-- <ul class="rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                        <li class="no-star"><i class="fa fa-star"></i></li>
                                                    </ul> --}}
                                                </div>
                                                <h4><a class="product_name" href="{{ url('product/'.$row->product.'/'.$details) }}">{{$row->product_product_name}}</a></h4>
                                                {{-- <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div> --}}
                                                <div class="price-box">
                                                    @if (!empty($row->old_price))
                                                    <span class="new-price">৳{{$row->price}}</span>
                                                    <span class="old-price">৳{{$row->old_price}}</span>
                                                    @else 
                                                    <span class="new-price">৳{{$row->price}}</span>
                                                    @endif
                                                    
                                                </div>
                                            </div>
                                            <div class="add-actions">
                                                <ul class="add-actions-link">
                                                    <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->product}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                                    {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                                    <li><a class="links-details" href="{{ url('product/'.$row->product.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- single-product-wrap end -->
                                </div>
                                @endforeach
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-area end -->

<!-- product-area start -->
<div class="product-area pt-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title-3">
                    <h2>For {{$category_position1[0]->category_name}}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="product-active-3 owl-carousel">
                @if (isset($category_position1))
                    @foreach ($category_position1 as $row)
                    <?php 
                        $names = strtolower(str_replace(' ','-',$row->product_name));
                        $details = str_replace('/','-',$names);
                    ?>
                    <div class="col">
                        <!-- single-product-wrap start -->
                        <div class="single-product-wrap">
                            <div class="product-image">
                                <a href="{{ url('product/'.$row->proID.'/'.$details) }}">
                                    <?php
                                        $img = explode(",",$row->image); 
                                    ?>
                                    <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_name}}">
                                    @if (isset($img[1]))
                                    <img class="secondary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_name}}">
                                    @endif
                                </a>
                                @if (!empty($row->old_price))
                                    <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}}% off</div>
                                @endif
                            </div>
                            <div class="product_desc">
                                <div class="product_desc_info">
                                    <div class="rating-box">
                                        {{-- <ul class="rating">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li class="no-star"><i class="fa fa-star"></i></li>
                                            <li class="no-star"><i class="fa fa-star"></i></li>
                                        </ul> --}}
                                    </div>
                                    <h4><a class="product_name" href="{{ url('product/'.$row->proID.'/'.$details) }}">{{$row->product_name}}</a></h4>
                                    {{-- <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div> --}}
                                    <div class="price-box">
                                        @if (!empty($row->old_price))
                                        <span class="new-price">৳{{$row->price}}</span>
                                        <span class="old-price">৳{{$row->old_price}}</span>
                                        @else 
                                        <span class="new-price">৳{{$row->price}}</span>
                                        @endif
                                    
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->proID}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                        {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                        <li><a class="links-details" href="{{ url('product/'.$row->proID.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endforeach
                @endif
                
                
            </div>
        </div>
    </div>
</div>
<!-- product-area end -->
@if (isset($category_position2))
<?php 
    if ($category_position2[0]->category !=''){
        $link = 'products/'.$category_position2[0]->category.'/'.$category_position2[0]->category_name;
        $alt = $category_position2[0]->category_name;
    }
    else {
        $link = 'product/'.$category_position2[0]->product.'/'.$category_position2[0]->product_product_name;
        $alt = $category_position2[0]->product_product_name;
    }
?>
    
<!-- banner-area start -->
<div class="banner-area ptb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-banner-box-2">
                    <a href="{{$link}}">
                        <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/homepagecategoryposition/'.$category_position2[0]->side_image)}}" alt="{{$alt}}">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area end -->
@endif

@if (isset($category_position3))
<!-- product-area start -->
<div class="product-area pb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="section-title-3">
                            <h2>For {{$category_position3[0]->category_name}}</h2>
                            <div class="product-tabs-list-2">
                                <ul class="nav" role="tablist">
                                    
                                   {{-- <li role="presentation" class="active"><a aria-selected="true" class="active show" href="#for-men" aria-controls="for-men" role="tab" data-toggle="tab">For {{$category_position1[0]->category_name}}</a></li> --}}
                                   {{-- <li role="presentation"><a href="#for-women" aria-controls="for-women" role="tab" data-toggle="tab">For women</a></li>
                                   <li role="presentation"><a href="#for-kids" aria-controls="for-kids" role="tab" data-toggle="tab">For kids </a></li> --}}
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tab-content">
                            <div id="for-men" class="tab-pane active show" role="tabpanel">
                                <div class="row">
                                    <div class="product-active-3 owl-carousel">
                                        @if (isset($category_position3))
                                            @foreach ($category_position3 as $row)
                                            <?php 
                                                $names = strtolower(str_replace(' ','-',$row->product_name));
                                                $details = str_replace('/','-',$names);
                                            ?>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="{{ url('product/'.$row->proID.'/'.$details) }}">
                                                            <?php
                                                                $img = explode(",",$row->image); 
                                                            ?>
                                                            <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_name}}">
                                                            @if (isset($img[1]))
                                                            <img class="secondary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_name}}">
                                                            @endif
                                                        </a>
                                                        @if (!empty($row->old_price))
                                                            <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}}% off</div>
                                                        @endif
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                {{-- <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul> --}}
                                                            </div>
                                                            <h4><a class="product_name" href="{{ url('product/'.$row->proID.'/'.$details) }}">{{$row->product_name}}</a></h4>
                                                            {{-- <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div> --}}
                                                            <div class="price-box">
                                                                @if (!empty($row->old_price))
                                                                <span class="new-price">৳{{$row->price}}</span>
                                                                <span class="old-price">৳{{$row->old_price}}</span>
                                                                @else 
                                                                <span class="new-price">৳{{$row->price}}</span>
                                                                @endif
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->proID}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                                                <li><a class="links-details" href="{{ url('product/'.$row->proID.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            @endforeach
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($category_position5))
            <?php 
                if ($category_position5[0]->category !=''){
                    $link = 'products/'.$category_position5[0]->category.'/'.$category_position5[0]->category_name;
                    $alt = $category_position5[0]->category_name;
                }
                else {
                    $link = 'product/'.$category_position5[0]->product.'/'.$category_position5[0]->product_product_name;
                    $alt = $category_position5[0]->product_product_name;
                }
            ?>
            <div class="col-lg-3">
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="{{$link}}">
                        <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/homepagecategoryposition/'.$category_position5[0]->side_image)}}" alt="{{$alt}}">
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- product-area end -->
@endif


<!-- product-area start -->
<div class="product-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col">
                        <div class="section-title-3">
                            <h2>For {{$category_position4[0]->category_name}}</h2>
                            <div class="product-tabs-list-2">
                                {{-- <ul class="nav" role="tablist">
                                   <li role="presentation" class="active"><a aria-selected="true" class="active show" href="#cat-tb-1" aria-controls="cat-tb-1" role="tab" data-toggle="tab">Categories</a></li>
                                   <li role="presentation"><a href="#cat-tb-2" aria-controls="cat-tb-2" role="tab" data-toggle="tab">New arrivals</a></li>
                                   <li role="presentation"><a href="#cat-tb-3" aria-controls="cat-tb-3" role="tab" data-toggle="tab">Lookbook</a></li>
                               </ul> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="tab-content">
                            <div id="cat-tb-1" class="tab-pane active show" role="tabpanel">
                                <div class="row">
                                    <div class="product-active-3 owl-carousel">
                                        @if (isset($category_position4))
                                            @foreach ($category_position4 as $row)
                                            <?php 
                                                $names = strtolower(str_replace(' ','-',$row->product_name));
                                                $details = str_replace('/','-',$names);
                                            ?>
                                            <div class="col">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="{{ url('product/'.$row->proID.'/'.$details) }}">
                                                            <?php
                                                                $img = explode(",",$row->image); 
                                                            ?>
                                                            <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_name}}">
                                                            @if (isset($img[1]))
                                                            <img class="secondary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_name}}">
                                                            @endif
                                                        </a>
                                                        @if (!empty($row->old_price))
                                                            <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}}% off</div>
                                                        @endif
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="rating-box">
                                                                {{-- <ul class="rating">
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                    <li class="no-star"><i class="fa fa-star"></i></li>
                                                                </ul> --}}
                                                            </div>
                                                            <h4><a class="product_name" href="{{ url('product/'.$row->proID.'/'.$details) }}">{{$row->product_name}}</a></h4>
                                                            {{-- <div class="manufacturer"><a href="single-product.html">Fashion Manufacturer</a></div> --}}
                                                            <div class="price-box">
                                                                @if (!empty($row->old_price))
                                                                <span class="new-price">৳{{$row->price}}</span>
                                                                <span class="old-price">৳{{$row->old_price}}</span>
                                                                @else 
                                                                <span class="new-price">৳{{$row->price}}</span>
                                                                @endif
                                                            
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->proID}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                                                {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                                                <li><a class="links-details" href="{{ url('product/'.$row->proID.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @if (isset($category_position6))
            <?php 
                if ($category_position6[0]->category !=''){
                    $link = 'products/'.$category_position6[0]->category.'/'.$category_position6[0]->category_name;
                    $alt = $category_position6[0]->category_name;
                }
                else {
                    $link = 'product/'.$category_position6[0]->product.'/'.$category_position6[0]->product_product_name;
                    $alt = $category_position6[0]->product_product_name;
                }
            ?>
            <div class="col-lg-3">
                <!--single-banner-box start -->
                <div class="single-banner-box">
                    <a href="{{$link}}">
                        <img class="primary-image img-fit mx-auto h-160px h-md-220px h-xl-270px h-xxl-250px" src="{{url('upload/homepagecategoryposition/'.$category_position6[0]->side_image)}}" alt="{{$alt}}">
                    </a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>
<!-- product-area end -->

<!-- newsletter-area start -->
@include('site.include.newsletter')
<!-- newsletter-area end -->

<!-- Modal start-->
@include('site.include.modal')   
<!-- Modal end-->
@endsection

@section('js')
    
    <script type="text/javascript" src="{{asset('site/js/cart.js')}}"></script>
    
@endsection