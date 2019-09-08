@extends('partners.master')

@include('partners.navbar')
@include('partners.sidebar')

@section('content')
<?php $image = unserialize($product->images) ?>
	<div class="lefter">
		<div class="container row">
			<div class="col-4 green_border">
				<img src="{{ url('images/'.Auth::user()->id, $image[0]) }}" width="150">
			</div>
			<div class="col red_border">
				имя:{{$product->name}}
				<p>категория| {{$product->category}}</p>
				
			</div>
		</div>
	</div>
@endsection

<style type="text/css">
	.red_border{
		border: 2px solid red;
	}
	.green_border{
		border: 2px solid green;
	}
</style>