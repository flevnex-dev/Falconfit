@extends('site.layout.master')
@section('title','Shop')
@section('content')
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->

<!-- content-wraper start -->
<div class="content-wraper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1">
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box mt-95">
                    <div class="sidebar-title">
                        <h2>Category</h2>
                    </div>
                    <!-- category-sub-menu start -->
                    <div class="category-sub-menu">
                        <ul>
                            @if(isset($cat))
                            @foreach($cat as $ca)
                            <?php 
                                $names = strtolower(str_replace(' ','-',$ca['name']));
                                $catName = str_replace('/','-',$names);
                            ?>
                            <li class="has-sub"><a href="{{url('/products/'.$ca['id'].'/'.$catName)}}">{{$ca['name']}}</a>
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
                    </div>
                    <!-- category-sub-menu end -->
                </div>
                <!--sidebar-categores-box end  -->
                <!--sidebar-categores-box start  -->
                <div class="sidebar-categores-box">
                    <div class="sidebar-title">
                        <h2>Filter By</h2>
                    </div>
                    <!-- btn-clear-all start -->
                    <button class="btn-clear-all">Clear all</button>
                    <!-- btn-clear-all end -->
                    <!-- filter-sub-area start -->
                    {{-- <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Price</h5>
                        <div class="price-checkbox">
                            <form action="#">
                                <ul> 
                                    <li><input type="radio" name="price-filter" checked=""><a href="#">$10.00 - $11.00 (1)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#">$14.00 - $15.00 (2)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#">$16.00 - $17.00 (2)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#">$18.00 - $19.00 (1)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#"> $24.00 - $28.00 (5)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#"> $30.00 - $32.00 (1)</a></li>
                                    <li><input type="radio" name="price-filter"><a href="#"> $50.00 - $53.00 (2) </a></li>
                                </ul>
                            </form>
                        </div>
                    </div> --}}
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Size</h5>
                        <div class="size-checkbox">
                            <form action="{{url('products-shop-size-data')}}" id="formSize" method="POST">
                                {{ csrf_field() }}
                                <ul>
                                    @if (!empty($size))
                                        @foreach ($size as $row)
                                        <li><label><input onchange="$('#formSize').submit();" type="checkbox" name="product_size" value="{{$row->id}}"><a href="#">{{$row->name}}</a></label></li>
                                        @endforeach
                                    @endif
                                    
                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Color</h5>
                        <div class="color-categoriy">
                            <form id="formColor" action="{{url('products-shop-color-data')}}" method="post">
                                {{ csrf_field() }}
                                <ul>
                                    @if (!empty($color))
                                        @foreach ($color as $item)
                                        <li><span style="background:<?= $item->color_code?>"></span>
                                            <a href="#" data-role="submitColor">{{$item->name}}</a>
                                            <input type="hidden" name="product_colors" value="{{$item->id}}">
                                        </li>
                                    
                                        @endforeach
                                    @endif

                                </ul>
                            </form>
                        </div>
                    </div>
                    <!-- filter-sub-area end -->
                    <!-- filter-sub-area start -->
                    {{-- <div class="filter-sub-area">
                        <h5 class="filter-sub-titel">Compositions</h5>
                        <div class="categori-checkbox">
                            <form action="#">
                                <ul>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Cotton (5)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Polyester (4)</a></li>
                                    <li><input type="checkbox" name="product-categori"><a href="#">Viscose (4)</a></li>
                                </ul>
                            </form>
                        </div>
                     </div> --}}
                    <!-- filter-sub-area end -->
                </div>
                <!--sidebar-categores-box end  -->
                
                <!-- shop-banner start -->
                <div class="shop-banner">
                    <div class="single-banner">
                        <a href="#"><img src="{{url('site/img/banner/shop-banner.jpg')}}" alt=""></a>
                    </div>
                </div>
                <!-- shop-banner end -->
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- shop-top-bar start -->
                <div class="shop-top-bar mt-95">
                    <div class="shop-bar-inner">
                        <div class="product-view-mode">
                            <!-- shop-item-filter-list start -->
                            <ul class="nav shop-item-filter-list" role="tablist">
                                <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                            </ul>
                            <!-- shop-item-filter-list end -->
                        </div>
                        <div class="toolbar-amount">
                            <span>Showing {{($Product->currentpage()-1)*$Product->perpage()+1}} to {{$Product->currentpage()*$Product->perpage()}}
                                of  {{$Product->total()}}</span>
                        </div>
                    </div>
                    <!-- product-select-box start -->
                    <div class="product-select-box">
                        <div class="product-short">
                            <p>Sort By:</p>
                            <select class="nice-select">
                                <option value="trending">Relevance</option>
                                <option value="sales">Name (A - Z)</option>
                                <option value="sales">Name (Z - A)</option>
                                <option value="rating">Price (Low &gt; High)</option>
                                <option value="date">Rating (Lowest)</option>
                                <option value="price-asc">Model (A - Z)</option>
                                <option value="price-asc">Model (Z - A)</option>
                            </select>
                        </div>
                    </div>
                    <!-- product-select-box end -->
                </div>
                <!-- shop-top-bar end -->
                <!-- shop-products-wrapper start -->
                <?php 
                    function getPercentOfNumber($oldprice, $newprice){
                        return number_format((($oldprice - $newprice) / ($oldprice)) * 100,0);
                    }
                ?>
                <div class="shop-products-wrapper">
                    <div class="tab-content">
                        <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                            <div class="shop-product-area">
                                <div class="row">
                                    @if(isset($Product))    
                                      @if(count($Product)>0)
                                          @foreach($Product as $row)
                                          <?php 
                                                $names = strtolower(str_replace(' ','-',$row->product_name));
                                                $details = str_replace('/','-',$names);
                                            ?>
                                          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mt-40">
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
                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                                <div class="col">
                                    @if(isset($Product))    
                                      @if(count($Product)>0)
                                          @foreach($Product as $row)
                                          <?php 
                                                $names = strtolower(str_replace(' ','-',$row->product_name));
                                                $details = str_replace('/','-',$names);
                                            ?>
                                    <div class="row product-layout-list">
                                        <div class="col-lg-4 col-md-5 ">
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
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7">
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="rating-box">
                                                        {{-- <ul class="rating">
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
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
                                                    <p>{{$row->short_details}}</p>
                                                    <div class="list-add-actions">
                                                        <ul>
                                                            <li class="add-cart"><a href="javascript:void(0);" class="add-to-cart-short" data-id="{{$row->id}}" ><i class="ion-android-cart"></i> Add to cart</a></li>
                                                            {{-- <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="ion-android-open"></i></a></li> --}}
                                                            <li><a class="links-details" href="{{ url('product/'.$row->id.'/'.$details) }}"><i class="ion-clipboard"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                        @else
                                        <code style="font-size: 18px;">No Product Found!</code>
                                      @endif
                                    @endif 
                                
                                </div>
                            </div>
                        </div>
                        @if ($Product->lastPage() > 1)
                        <div class="paginatoin-area">
                            <div class="row">
                                
                                <div class="col-lg-6 col-md-6">
                                    <p>Showing {{($Product->currentpage()-1)*$Product->perpage()+1}} to {{$Product->currentpage()*$Product->perpage()}}
                                        of  {{$Product->total()}} item(s)</p>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul class="pagination-box">
                                        <li class="{{ ($Product->currentPage() == 1) ? ' disabled' : '' }}">
                                            <a href="{{ $Product->url(1) }}"><i class="fa fa-chevron-left"></i> Previous</a>
                                        </li>
                                        @for ($i = 1; $i <= $Product->lastPage(); $i++)
                                            <li class="{{ ($Product->currentPage() == $i) ? ' active' : '' }}">
                                                <a href="{{ $Product->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endfor
                                        <li class="{{ ($Product->currentPage() == $Product->lastPage()) ? ' disabled' : '' }}">
                                            <a href="{{ $Product->url($Product->currentPage()+1) }}" >Next <i class="fa fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- shop-products-wrapper end -->
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->

<!-- Modal start-->
@include('site.include.modal')   
<!-- Modal end-->

@endsection
@section('js')
    
    <script type="text/javascript" src="{{asset('site/js/cart.js')}}"></script>
    <script>
        $("[data-role=submitColor]").click(function(){
            $(this).closest("form").submit();
        });
    </script>
@endsection
