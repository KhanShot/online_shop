@extends('front.master')
@include('front.navbar')

@section('content')

<div class="main-content container">
    <h4 class="title-page">Корзина</h4>
    <div class="shop-table-content container">
        <form method="post" action="#" class="shoping-form">
            <a class="button button-check-out" href="#">Заказать</a>
            <div class="div-table-cart">
                <table class="shop_table cart">
                    <thead>
                        <tr>
                            <th class="product-thumbnail">&nbsp;</th>
                            <th class="product-name">Имя продукта</th>
                            <th class="product-edit">&nbsp;</th>
                            <th class="product-price">Цена за штук</th>
                            <th class="product-quantity">Количество</th>
                            <th class="product-subtotal">Общая цена</th>
                            <th class="product-remove">&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>

                    	@foreach($products as $product)
                    	@foreach($wishlist as $wish)
                    		
	                    	@if($wish->product_id == $product->id)
	                    	@if($wish->user_id == Auth::user()->id)
	                    	<?php $image = unserialize($product->images) ?>
	                        <?php $product_color = unserialize($product->product_color) ?>
		                        <tr class="cart_item">
		                            <td class="product-thumbnail" data-title="">
		                                <a href="{{ action('FrontController@detail', $product->id) }}"><img height="150" width="185" alt="s_c" class="attachment-shop_thumbnail wp-post-image" 
		                                	src="{{ url('images/'.$product->partners_id, $image[0]) }}"></a>
		                            </td>
		                            <td class="product-name" data-title="Product Name">
		                                <a href="{{ action('FrontController@detail', $product->id) }}">{{$product->name}}</a>
		                            </td>
		                            <td class="edit"><a href="{{ route('add', $product->id) }}" class="btn"><i class="flaticon-commerce" style="font-size: 25px; font-weight: bold;"></i></a></td>
		                            <td class="product-price" data-title="Unit Price">
		                                <span class="amount">$168.00</span>
		                            </td>
		                            <td class="product-quantity" data-title="Qty">
		                                <div class="quantity buttons_added">
		                                    <input type="text" class="input-text qty text"  title="Qty" value="{{$wish->total}}" name="qty">
		                                </div>
		                            </td>
		                            <td class="product-subtotal" data-title="Subtotal">
		                                <span class="amount">$168.00</span>
		                            </td>
		                            <td class="product-remove" data-title="Remove">
		                                <a title="Remove this item" class="remove" href="{{ route('deletewish', $product->id) }}">×</a>
		                            </td>
		                        </tr>
		                    @endif
		                    @endif
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div class="button-cart">
                    <a class="button button-check-out" href="{{route('deletecart', Auth::user()->id )}}">Очистить корзину</a>
                    <a class="button button-check-out" href="#">Обновить</a>
                    
                </div>
            </div>

   

    </div>
   
</div>

@endsection