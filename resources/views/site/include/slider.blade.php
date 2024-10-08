<div class="slider-main-area">
    <div class="slider-active owl-carousel">
        
        @if (isset($SliderCMS)>0)
            @foreach ($SliderCMS as $slider)
                <?php
                if ($slider->product_upcoming_status =='Yes')
                {
                    $rowClass = 'row justify-content-end';
                    $sliderStyle='style-1 slider-2-style';
                    $title = 'title2';
                    $upTitle = 'title1';
                }
                else
                {
                    $rowClass = 'row';
                    $sliderStyle='style-2 text-center';
                    $title = 'title1';
                    $upTitle = '';
                }
                $names = strtolower(str_replace(' ','-',$slider->product_product_name));
                $details = str_replace('/','-',$names);
                ?>
                <!-- slider-wrapper start -->
                <div class="slider-wrapper" style="background-image:url({{url('upload/slidercms/'.$slider->slider_image)}})">
                    <div class="container-fluid">
                        <div class="<?=$rowClass?>">
                            <div class="col">
                                <div class="slider-text-info <?=$sliderStyle?> slider-text-animation">
                                    <h4 class="<?=$upTitle?>">{{$slider->product_upcoming_content}}</h4>
                                    <h1 class="<?=$title?>">{{$slider->title}}</h1>
                                    <p>{{$slider->sub_title}}</p>
                                    @if (!empty($slider->product))
                                        <div class="slier-btn-1">
                                            <a title="shop now" href="{{ url('product/'.$slider->product.'/'.$details) }}" class="shop-btn">Shopping now</a>
                                        </div> 
                                    @else 
                                    <div class="slier-btn-1">
                                        <a title="shop now" href="{{ url('contact/') }}" class="shop-btn">Contact Us</a>
                                    </div> 
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- slider-wrapper end -->
            @endforeach
            
        @endif
        
    </div>
</div>