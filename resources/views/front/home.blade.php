@extends('front.master')
@include('front.navbar')
@section('content')

    <div class="banner banner-home banner-home1">
        <div class="supermartket-owl-carousel" data-number="1" data-margin="0" data-navcontrol="yes" data-dots="yes">
            <div class="banner-home1-content slide1">
                <div class="container">
                    <h3 class="wow fadeInRight" data-wow-delay="0.6s">The Victoria Grand Cuisine</h3>
                    <p class="sile-desc wow fadeInRight" data-wow-delay="0.6s">LG 4k UHD features 8.3 milion pixels and four times<br/>
                        the resolution of Full HD 1080p.</p>
                    <a class="button dark wow fadeInRight" data-wow-delay="0.6s" href="#">Shop Now</a>
                </div>
            </div>
            <div class="banner-home1-content slide2">
                <div class="container">
                    <h3>The Victoria Grand<br/>Cuisine</h3>
                    <p class="sile-desc">LG 4k UHD features 8.3 milion pixels<br/>
                        and four times the resolution. </p>
                    <a class="button" href="#">Shop Now</a>
                </div>
            </div>
            <div class="banner-home1-content slide3">
                <div class="container">
                    <h3>The Victoria Grand<br/>Cuisine</h3>
                    <p class="sile-desc">LG 4k UHD features 8.3 milion pixels <br/>and four times
                        the resolution</p>
                    <a class="button drak" href="#">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="container banner-absolutes">
            <div class="banner-absolute banner-asblute-right">
                <ul class="list-banner">
                    <li class="banner-item banner-item1">
                        <h5 class="banner-item-title">Sound</h5>
                        <p class="banner-item-desc">
                            Headphone<br/>CDs 4000
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                    <li class="banner-item banner-item2">
                        <h5 class="banner-item-title">Electrolux</h5>
                        <p class="banner-item-desc">
                            ECM3200 EasySense<br/>Vacuum cleaner
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                    <li class="banner-item banner-item3">
                        <h5 class="banner-item-title">Smartphone</h5>
                        <p class="banner-item-desc">
                            Solution for your<br/>Acer Smarphone
                        </p>
                        <a href="#" class="banner-item-link">Shop now <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @foreach($category as $categor)
    <section id="section18">
        <div class="container">
            <div class="product-tabs product-tabs-style2">
                <h4 class="tab-title">{{$categor->name}}</h4>
                <div class="left-tab">
                    <ul class="left-tab-list">
                        @foreach($subcategory as $subcat)
                            @if($subcat->category_id == $categor->id)
                                <li class="tab-list-item" style="font-weight: bold;"><a href="">{{$subcat->name}}</a></li>
                                @foreach($sub_subcategory as $sub_sub)
                                    @if($sub_sub->subcategory_id == $subcat->id)
                                        <li class="tab-list-item" style="padding-left: 10px;"><a href="{{ route('sub_subcategory', $subcat->id) }}">{{$sub_sub->name}}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="right-tab">
                    <ul  class="nav nav-pills">
                        <li class="active"><a  href="#1sm" data-toggle="tab">посмотреть всё</a></li>
                    </ul>
                    <div class="product-tabs-content tab-content clearfix">
                        <div class="tab-pane active" id="1sm">
                            <div class="unclassed">
                                <div class="tab-pane-slide">
                                    @foreach($products as $product)
                                        @if($product->category == $categor->id)
                                        <?php $image = unserialize($product->images) ?>
                                        <?php $product_color = unserialize($product->product_color) ?>
                                        <a href="{{ action('FrontController@detail', $product->id) }}">
                                            <div class="product-list-content">
                                                <figure><img src="{{ url('images/'.$product->partners_id, $image[0]) }}" alt="feature" width="200" height="238"></figure>
                                                <a href="#" class="feature-slide-name">{{$product->name}}</a>
                                                <div class="feature-slide-cost">
                                                    <span class="price">$168.00</span>
                                                    <div class="info">
                                                        наличие товара: 
                                                        @if($product->status == 'Имеется')
                                                            есть
                                                        @else
                                                            нет
                                                        @endif
                                                    </div>
                                                </div>
                                                <ul class="product-item-actions">
                                                    <li><a href="#"><i class="flaticon-like"></i></a></li>
                                                    <li><a href="{{ route('add', $product->id) }}"><i class="flaticon-commerce"></i></a></li>
                                                </ul>
                                            </div>
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!--end product tab home 3-->
        </div>
    </section>
    @endforeach
@endsection

