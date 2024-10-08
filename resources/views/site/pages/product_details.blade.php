@extends('site.layout.master')
@section('title',$product[0]->product_name)
@section('content') 
            
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
                    <li class="breadcrumb-item active">{{$product[0]->product_name}}</li>
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
            <div class="col">
                <div class="row single-product-area">
                    <div class="col-xl-4  col-lg-6 offset-xl-1 col-md-5 col-sm-12">
                        <div class="single-product-tab">
                            <div class="zoomWrapper">
                                <?php
                                    $img = explode(",",$product[0]->image); 
                                ?>
                                <input type="hidden" name="product_id" id="product_id" value="{{$product[0]->id}}">
                                <div id="img-1" class="zoomWrapper single-zoom">
                                    <a href="#">
                                        <img id="zoom1" src="{{url('upload/product/'.$img[0])}}" data-zoom-image="{{url('upload/product/'.$img[0])}}" alt="{{$product[0]->product_name}}">
                                    </a>
                                </div>
                                <div class="single-zoom-thumb">
                                    <ul class="s-tab-zoom single-product-active owl-carousel" id="gallery_01">
                                        @foreach ($img as $key => $value)
                                        {{-- {{dd($key)}} --}}
                                        <li>
                                            <a href="#" class="elevatezoom-gallery active" data-update="{{url('upload/product/'.$value)}}" data-image="{{url('upload/product/'.$value)}}" data-zoom-image="{{url('upload/product/'.$value)}}"><img src="{{url('upload/product/'.$value)}}" alt="{{$product[0]->product_name}}"/></a>
                                        </li>
                                        @endforeach
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-7 col-sm-12">
                        <!-- product-thumbnail-content start -->
                        <div class="quick-view-content">
                            <div class="product-info">
                                <h2>{{$product[0]->product_name}}</h2>
                                <h6>Product code : {{$product[0]->product_code}}</h6>
                                <div class="rating-box">
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="price-box">
                                    @if (!empty($product[0]->old_price))
                                    <span class="new-price">৳{{$product[0]->price}}</span>
                                    <span class="old-price">৳{{$product[0]->old_price}}</span>
                                    @else 
                                    <span class="new-price">৳{{$product[0]->price}}</span>
                                    @endif
                                </div>
                                <p><?= html_entity_decode($product[0]->short_details)?></p>
                                <div class="modal-size">
                                    <h4>Size</h4>
                                    <select class="form-control size" name="size" id="size">
                                        @foreach($size as $tt)
                                            <option title="{{$tt->size_id_name}}" value="{{$tt->size_id}}">{{$tt->size_id_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-color">
                                    <h4>Color</h4>
                                    <div class="color-list">
                                
                                        <ul>
                                            
                                            @foreach($colorDB as $row)
                                            <style>
                                                .checkboxField-<?= $row->color_id?>:before {
                                                        transition-timing-function: cubic-bezier(.075, .820, .165, 1);
                                                            border: 2px solid;
                                                            border-radius: 0;
                                                            background-color: <?= $row->color_code?>;
                                                            border-color: transparent;
                                                            box-sizing: border-box;
                                                            color: <?= $row->color_id?>;
                                                            content: close-quote;
                                                            display: inline-block;
                                                            height: 12px;
                                                            outline: 2px solid #ddd;
                                                            transition-duration: .5s;
                                                            transition-property: background-color, border-color;
                                                            width: 12px;
                                                        }

                                                        .checkboxField-<?= $row->color_id?>:checked:before {
                                                        background-color: <?= $row->color_code?>;
                                                        border-color: <?= $row->color_code?>;
                                                        }
                                            </style>
                                            <li>
                                                <div class="custom-control color custom-checkbox-<?= $row->color_id?>">
                                                    <input class="custom-control-input" id="package-<?= $row->color_id?>" value="<?= $row->color_id?>" name="chkcolor" type="radio" >
                                                    <label class="custom-control-label checkboxField-<?= $row->color_id?>" for="package-<?= $row->color_id?>">{{$row->color_id_name}}</label>  
                                                </div>    
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="quick-add-to-cart">
                                    <form class="modal-cart">
                                        <div class="quantity">
                                            <label>Quantity</label>
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" id="product_quantity" type="number" value="1">
                                            </div>
                                        </div>
                                        {{-- <a href="{{ url('add-to-cart/'.$product[0]->id) }}" class="add-to-cart" id="add_to_cart" type="submit">Add to cart</a> --}}
                                        <button class="add-to-cart" id="add_to_cart" type="button">Add to cart</button>
                                    </form>
                                </div>
                                <div class="instock">
                                    <p>In stock </p>
                                </div>
                                <div class="social-sharing">
                                    <h3>Share</h3>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- product-thumbnail-content end -->
                    </div>
                </div>
            </div>
        </div>
        <div class="product-info-review">
            <div class="row">
                <div class="col">
                    <div class="product-info-detailed">
                        <div class="discription-tab-menu">
                            <ul role="tablist" class="nav">
                                <li class="active"><a href="#description" data-toggle="tab" class="active show">Description</a></li>
                                <li><a href="#review" data-toggle="tab">Reviews (1)</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="discription-content">
                        <div class="tab-content">
                            <div class="tab-pane fade in active show" id="description">
                                <div class="description-content">
                                    <p><?= html_entity_decode($product[0]->description)?></p>
                                </div>
                            </div>
                            <div id="review" class="tab-pane fade">
                                <form class="form-review">
                                    <div class="review">
                                        <table class="table table-striped table-bordered table-responsive">
                                            <tbody>
                                                <tr>
                                                    <td class="table-name"><strong>Palora Themes</strong></td>
                                                    <td class="text-right">08/06/2018</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <p>It’s both good and bad. If Nikon had achieved a high-quality wide lens camera with a 1 inch sensor, that would have been a very competitive product. So in that sense, it’s good for us. But actually, from the perspective of driving the 1 inch sensor market, we want to stimulate this market and that means multiple manufacturers.</p>    
                                                        <ul>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                            <li><i class="fa fa-star-o"></i></li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="review-wrap">
                                        <h2>Write a review</h2>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="control-label">Your Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="control-label">Your Review</label>
                                                <textarea class="form-control"></textarea>
                                                <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col">
                                                <label class="control-label">Rating</label>
                                                &nbsp;&nbsp;&nbsp; Bad&nbsp;
                                                <input type="radio" value="1" name="rating">
                                                &nbsp;
                                                <input type="radio" value="2" name="rating">
                                                &nbsp;
                                                <input type="radio" value="3" name="rating">
                                                &nbsp;
                                                <input type="radio" value="4" name="rating">
                                                &nbsp;
                                                <input type="radio" value="5" name="rating">
                                                &nbsp;Good
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-right">
                                            <button class="button-review" type="button">Continue</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->

<!-- product-area start -->
<div class="product-area ptb-95">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="section-title-3">
                    <h2>{{$caterogyWiseProduct[0]->category_name_name}}:</h2>
                </div>
            </div>
        </div>
        <?php 
            function getPercentOfNumber($oldprice, $newprice){
                return number_format((($oldprice - $newprice) / ($oldprice)) * 100,0);
            }
        ?>
        <div class="row">
            <div class="product-active-3 owl-carousel">
                @if(isset($caterogyWiseProduct))    
                @if(count($caterogyWiseProduct)>0)
                    @foreach($caterogyWiseProduct as $row)
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
                                <img class="primary-image" src="{{url('upload/product/'.$img[0])}}" alt="{{$row->product_name}}">
                                @if (isset($img[1]))
                                <img class="secondary-image" src="{{url('upload/product/'.$img[1])}}" alt="{{$row->product_name}}">
                                @endif
                            </a>
                            <div class="label-product">-{{getPercentOfNumber($row->old_price,$row->price)}} off</div>
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
</div>
<!-- product-area end -->
@endsection
@section('js')
    
    <script type="text/javascript" src="{{asset('site/js/cart.js')}}"></script>
@endsection