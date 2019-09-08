@extends('front.master')
@include('front.navbar')

@section('content')
<div class="main-content categories categories-grid1" style="background-color: #F5F5F5" data-background-color="#F5F5F5">
    <div class="container">
        <div class="categories-page">
            <div class="row">
                <div class="content col-md-9 has-sidebar-left">
                    <div class="banner-categories-grid">
                        <img src="{{ asset ('images/bn-blog')}}.jpg" alt="banner" height="175" width="868">
                    </div>
                    <div class="categories-grid">
                        <div class="breadcrumb-sidebar">
                            <div class="breadcrumb-wrap">
                                <nav class="breadcrumb-trail breadcrumbs">
                                    <ul class="trail-items">
                                        <li class="trail-item trail-begin">
                                            <a href="#"><span>Home</span></a>
                                        </li>
                                        <li class="trail-item trail-end">
                                            <span>Electronic</span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="panel-categories">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="view-categories">
                                        <div class="click-grid color-active">
                                            <i class="flaticon-four-grid-layout-design-interface-symbol"></i>
                                        </div>
                                        <div class="click-list">
                                            <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-categories">
                                        <div class="select-categories-content">
                                            <span>Short by</span>
                                            <select name="position">
                                                <option value="position1">Position</option>
                                                <option value="position2">Position 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="page-nav">
                                        <div class="page-nav-item active">1</div>
                                        <div class="page-nav-item">2</div>
                                        <div class="page-nav-item">3</div>
                                        <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-categories">
                        	@foreach($products as $product)
                            <div class="product-box">
                                <div class="product-box-content">
                                    <figure class="img-product">
                                        <img src="{{ asset ('images/p1.jpg')}}" alt="product" height="207" width="175">
                                        <a href="#" class="flaticon-search"></a>
                                    </figure>
                                    <div class="product-box-text">
                                        <a href="#" class="product-name">{{$product->name}}</a>
                                        <div class="dflex justifybetween">
                                        	<p class="product-cost">$200.00</p> <small><p>Наличие:{{$product->status}}</p></small>
                                        </div>
                                        <p class="desc-product">{{ $product->product_info }}</p>
                                        <div class="product-box-bottom">
                                            <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Add To Cart</a>
                                            <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                            <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                         
                          
                           
                        </div>
                        <div class="panel-categories">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="view-categories">
                                        <div class="click-grid color-active">
                                            <i class="flaticon-four-grid-layout-design-interface-symbol"></i>
                                        </div>
                                        <div class="click-list">
                                            <i class="flaticon-squares-gallery-grid-layout-interface-symbol"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="select-categories">
                                        <div class="select-categories-content">
                                            <span>Short by</span>
                                            <select name="position">
                                                <option value="position1">Position</option>
                                                <option value="position2">Position 2</option>
                                            </select>
                                        </div>
                                        <div class="select-categories-content">
                                            <span>Show</span>
                                            <select name="show">
                                                <option value="show1">6</option>
                                                <option value="show2">Show all</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="page-nav">
                                        <div class="page-nav-item active">1</div>
                                        <div class="page-nav-item">2</div>
                                        <div class="page-nav-item">3</div>
                                        <div class="page-nav-item"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <div class="breadcrumb-sidebar">
                        <div class="breadcrumb-wrap">
                            <nav class="breadcrumb-trail breadcrumbs">
                                <ul class="trail-items">
                                    <li class="trail-item trail-begin">
                                        <a href="#"><span>Home</span></a>
                                    </li>
                                    <li class="trail-item trail-end">
                                        <span>Electronic</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="sidebar-categories">
                        <div class="shop-sidebar">
                            <div class="sidebar-title">Shop By</div>
                            <div class="shop-sidebar-content">
                                <div class="categories-sidebar">
                                    <div class="sidebar-title-section">Categories</div>
                                    <div class="categories-checkbox">
                                        <ul class="categories-list-wrap">
                                            <li><input type="checkbox" value="Smartphone & Mp3 Player"><label>Smartphone & Mp3 Player</label></li>
                                            <li><input type="checkbox" value="Network & Computer"><label>Network & Computer</label></li>
                                            <li><input type="checkbox" value="Batteries & Chargers"><label>Batteries & Chargers</label></li>
                                            <li><input type="checkbox" value="Headphone & Headset"><label>Headphone & Headset</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="price-sidebar">
                                    <div class="sidebar-title-section">Price</div>
                                    <div class="price-filter">
                                        <div class="slider-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="filter-top">
                                                <span class="amount">$1</span>
                                                <span class="amount2">$150</span>
                                                <a class="button orange" href="#">Search</a>
                                            </div>
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;">
                                        <span class="amount">$1</span>
                                    </span>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;">
                                    <span class="amount2">$150</span>
                                </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="manufacture-sidebar">
                                    <div class="sidebar-title-section">Manufacture</div>
                                    <div class="categories-checkbox">
                                        <ul class="brands">
                                            <li><input type="checkbox" value="Ercol"><label>Ercol</label></li>
                                            <li><input type="checkbox" value="Duresta"><label>Duresta</label></li>
                                            <li><input type="checkbox" value="G Plan"><label>G Plan</label><br>
                                            <li><input type="checkbox" value="Parker Knoll"><label>Parker Knoll</label></li>
                                            <li><input type="checkbox" value="Collins & Hayes"><label>Collins & Hayes</label></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="color-sidebar">
                                    <div class="sidebar-title-section">Color</div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-orange"></div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-brown"></div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-red"></div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-black"></div>
                                        <span>(5)</span>
                                    </div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-white">CYAL</div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="color-sidebar-content">
                                        <div class="box-color box-color-cyan"></div>
                                        <span>(2)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bestseller-sidebar">
                            <div class="sidebar-title">Bestseller Products</div>
                            <div class="bestseller-sidebar">
                                <ul class="bestseller-list">
                                    <li class="bestseller-item">
                                        <a href="#"><img src="{{ asset ('images/sb-cat1')}}.jpg" alt="sb" height="130" width="112"></a>
                                        <div class="bestseller-content">
                                            <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                            <span>$1000.00</span>
                                        </div>
                                    </li>
                                    <li class="bestseller-item">
                                        <a href="#"><img src="{{ asset ('images/sb-cat2')}}.jpg" alt="sb" height="130" width="112"></a>
                                        <div class="bestseller-content">
                                            <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                            <span>$1000.00</span>
                                        </div>
                                    </li>
                                    <li class="bestseller-item">
                                        <a href="#"><img src="{{ asset ('images/sb-cat3')}}.jpg" alt="sb" height="130" width="112"></a>
                                        <div class="bestseller-content">
                                            <a href="#" class="bestseller-text">Washing Machine Pro</a>
                                            <span>$1000.00</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="section-icon-box">
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-umbrella"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>Buyer Protection</h4>
                                        <p>Secure payments
                                            Guaranteed refunds
                                            Escrow protection on every oder</p>
                                        <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-return-of-investment"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>RETURN & EXCHANGE</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-box style1">
                            <div class="row">
                                <div class="col-md-4">
                                    <i class="flaticon-transport"></i>
                                </div>
                                <div class="col-md-8">
                                    <div class="icon-box-content">
                                        <h4>FREE DELIVERY</h4>
                                        <p>Wholesale products from certified
                                            Worldwide shipping
                                            Low prices from US $0.1</p>
                                        <a href="#">Read More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection