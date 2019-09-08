@extends('partners.master')

@include('partners.navbar')
@include('partners.sidebar')

@section('content')
<div class="lefter">
	@if (\Session::has('deleted'))
	<div class="alert alert-success" style="margin-bottom: -15px;">
	  <p>{{ \Session::get('deleted') }}</p>
	</div><br />
	@endif
	<table class="table">
	  <thead class="bg-ano white-text">
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">Фото</th>
	      <th scope="col">Имя товара</th>
	      <th scope="col">Категория</th>
	      <th scope="col">Тип товара</th>
	      <th scope="col">Цвет товара</th>
	      <th scope="col">Формат товара</th>
	      <th scope="col">наличие товара</th>
	      <th scope="col"><span data-feather="eye"></span></th>
	      <th scope="col"><span data-feather="edit"></span></th>
	      <th scope="col"><span data-feather="delete"></span></th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach($products as $product)
	  	<?php $image = unserialize($product->images) ?>
	  	<?php $product_color = unserialize($product->product_color) ?>
		    <tr>
		      <th scope="row">{{$product->id}}</td>
		      <td scope="col"><img src="{{ url('images/'.Auth::user()->id, $image[0]) }}" width="80" ></td>
		      <td scope="col">{{$product->name}}</td>
		      <td scope="col">
		      	@foreach($category as $cat)
		      		@if($cat->id == $product->category)
		      			{{$cat->name}}
		      		@endif
		      	@endforeach
		      </td>
		      <td scope="col">{{$product->product_type}}</td>
		      <td scope="col">
		      		<div class="d-flex ">
		      	@foreach($product_color as $pc)
		      			<div class="p-2 ml-1" style="background-color: {{$pc}}"></div>
		      	@endforeach
		      		</div>
		      </td>
		      <td scope="col">{{$product->product_format}}</td>
		      <td scope="col">{{$product->status}}</td>
		      <td scope="col"><a href="{{action('ProductController@view', $product->id)}}"><span data-feather="eye"></span></a></td>
		      <td scope="col"><a href="{{action('ProductController@edit', $product->id)}}"><span data-feather="edit"></span></a></td>
		      <td scope="col"><a href="{{action('ProductController@destroy', $product->id)}}"><span data-feather="delete"></span></a></td>
		    </tr>
		@endforeach
	  </tbody>
	</table>
</div>
@endsection
