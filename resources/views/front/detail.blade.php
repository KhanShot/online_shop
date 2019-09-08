@extends('front.master')
@include('front.navbar')
@section('content')
<div class="container" style="padding-top: 2rem;">
	<div class="product-box product-box-primary">
                <div class="product-box-content">
                    <div class="row">
                        <div class="col-md-5">
                        	<?php $image = unserialize($product->images) ?>
                            <?php $product_color = unserialize($product->product_color) ?>
                            <figure class="img-product" >
                                <img src="{{ url('images/'.$product->partners_id, $image[0]) }}" alt="product" height="536" width="467">
                                
                            </figure>
                            <div class="featue-slide supermartket-owl-carousel" data-number="3" data-margin="15" data-navcontrol="yes">
                            	@foreach($image as $img)
	                                <div class="feature-slide-item">
	                                    <figure><img src="{{ url('images/'.$product->partners_id, $img) }}" alt="feature" width="126" height="143"></figure>
	                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                
                                
                                <h3 class="product-title">{{$product->name}}</h3>
                                категории
                                <div class="breadcrumb-sidebar">
					                <div class="breadcrumb-wrap">
					                    <nav class="breadcrumb-trail breadcrumbs">
					                        <ul class="trail-items">
					                        	@foreach($category as $categor)
						                        	@if($categor->id == $product->category)
						                            <li class="trail-item ">
						                                <a href="#"><span>{{$categor->name}}</span></a>
						                            </li>
						                            @foreach($subcategory as $subcat)
                                                        @if($subcat->id == $product->subcategory)
                                                        	<li class="trail-item">
								                                <a href="#"><span>{{$subcat->name}}</span></a>
								                            </li>
								                            @foreach($sub_subcategory as $sub_sub)
	                                                            @if($sub_sub->id == $product->sub_subcategory)
	                                                            	<li class="trail-item">
										                                <a href="#"><span>{{$sub_sub->name}}</span></a>
										                            </li>
	                                                            @endif
		                                                    @endforeach
                                                        @endif
                                                    @endforeach
						                            @endif

					                            @endforeach
					                            
					                        </ul>
					                    </nav>
					                </div>
					            </div>
                                <p class="product-cost">$200.00</p>
                                <p class="stock">наличие товара:
                                	@if($product->status == 'Имеется')
                                        <span><i class="fa fa-check" aria-hidden="true"></i>есть</span>
                                    @else
                                        <span><i class="fa fa-times" aria-hidden="true"></i>нет</span>
                                    @endif
                                	
                                </p>
                                <div class="desc-product-title">Описание товара</div>
                                <div class="desc-product">{{$product->product_info}}</div>
                                
                                <p>цвета:</p>
                                    @foreach($product_color as $colore)
                                    	<div style="padding: 10px; display: inline-block; background-color: {{$colore}}">
                                    		
                                    	</div>
                                    @endforeach
                                
                                <div class="select-detail">
                                    <span>формат/размеры:</span>
                                    <span>{{$product->product_format}}</span>
                                </div>

                                <div class="product-box-bottom">
                                    <div class="quanlity-product">
                                        <span>Qty:</span>
                                        <div class="quantity buttons_added">
                                            <a class="sign minus" href="#"><i class="fa fa-minus" aria-hidden="true"></i></a>
                                            <input type="text" size="1" class="input-text qty text" title="Qty" value="1">
                                            <a class="sign plus" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="button-detail">
                                        <a href="#" class="add-to-cart"><i class="flaticon-commerce"></i>Добавить в карзину</a>
                                        <a href="#" class="wishlist"><i class="flaticon-like"></i></a>
                                        <a href="#" class="refresh-product"><i class="flaticon-arrows"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>
@endsection