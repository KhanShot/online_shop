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
                    	@foreach($cartitem as $item)
                    		
	                    	@if($item->product_id == $product->id)
	                    	@if($item->user_id == Auth::user()->id)
	                    	<?php $image = unserialize($product->images) ?>
	                        <?php $product_color = unserialize($product->product_color) ?>
		                        <tr class="cart_item">
		                            <td class="product-thumbnail" data-title="">
		                                <a href="#"><img height="150" width="185" alt="s_c" class="attachment-shop_thumbnail wp-post-image" 
		                                	src="{{ url('images/'.$product->partners_id, $image[0]) }}"></a>
		                            </td>
		                            <td class="product-name" data-title="Product Name">
		                                <a href="#">{{$product->name}}</a>
		                            </td>
		                            <td class="edit"><a href="#">Edit</a></td>
		                            <td class="product-price" data-title="Unit Price">
		                                <span class="amount">$168.00</span>
		                            </td>
		                            <td class="product-quantity" data-title="Qty">
		                                <div class="quantity buttons_added">
		                                    <input type="text" class="input-text qty text"  title="Qty" value="{{$item->total}}" name="qty">
		                                </div>
		                            </td>
		                            <td class="product-subtotal" data-title="Subtotal">
		                                <span class="amount">$168.00</span>
		                            </td>
		                            <td class="product-remove" data-title="Remove">
		                                <a title="Remove this item" class="remove" href="#">×</a>
		                            </td>
		                        </tr>
		                    @endif
		                    @endif
                        @endforeach
                        @endforeach
                    </tbody>
                </table>
                <div class="button-cart">
                    <a class="button button-check-out" href="{{route('deletecart', Auth::user()->id )}}">Clear Shoping Cart</a>
                    <a class="button button-check-out" href="#">Update Shoping Cart</a>
                    <a class="button button-check-out" href="#">Continue Shoping</a>
                </div>
            </div>

        </form>
        <div class="row">
            <div class="col-md-4">
                <div class="base-selector cart-box">
                    <p>Based on your selection, you may be interested in the<br/>
                        following items:
                    </p>
                    <div class="base-selector-box">
                        <figure><img src="assets/images/ba1.jpg" alt="ba" height="118" width="100"></figure>
                        <div class="base-selector-content">
                            <a class="product-name" href="#">Acne Studios -  Silver</a>
                            <p class="product-cost">$168.00</p>
                            <a class="button button-check-out" href="#">Add To Cart</a>
                            <p><a href="#">Add to Wishlist</a>
                                <a href="#">Add to Compare</a>
                            </p>
                        </div>
                    </div>
                    <div class="base-selector-box">
                        <figure><img src="assets/images/ba2.jpg" alt="ba" height="118" width="100"></figure>
                        <div class="base-selector-content">
                            <a class="product-name" href="#">Acne Studios -  Silver</a>
                            <p class="product-cost">$168.00</p>
                            <a class="button button-check-out" href="#">Add To Cart</a>
                            <p><a href="#">Add to Wishlist</a>
                                <a href="#">Add to Compare</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="discount-cost-box cart-box">
                    <p>Discount codes</p>
                    <span>Enter your coupon code if you have one.</span>
                    <input type="text" placeholder="" value="">
                    <a class="button button-check-out" href="#">Apply Coupon</a>
                </div>
               
            </div>
            <div class="col-md-4">
                <div class="cart_totals cart-box">
                    <table>
                        <tbody><tr class="cart-subtotal">
                            <th>Subtotal:</th>
                            <td><span class="amount">$168.00</span></td>
                        </tr>
                        <tr class="grand">
                            <th>Grand Total:</th>
                            <td><span class="amount">$168.00</span></td>
                        </tr>
                        </tbody>
                    </table>
                    <a class="button button-check-out" href="#">Proceed To Checkout</a>
                </div>
            </div>
        </div>

    </div>
    <div id="section-icon-box">
        <div class="container">
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
                                    <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
                                    <h4>RETURN &amp; EXCHANGE</h4>
                                    <p>Wholesale products from certified
                                        Worldwide shipping
                                        Low prices from US $0.1</p>
                                    <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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
                                    <a href="#">Read More<i aria-hidden="true" class="fa fa-angle-double-right"></i></a>
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