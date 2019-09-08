@extends('partners.master')
@include('partners.navbar')
@include('partners.sidebar')

@section('content')
	<div class="lefter  d-flex justify-content-around p-3">
		<?php $images = unserialize($product->images) ?>
		<div class="create_section pt-3 pb-1" style="margin-left: -30px;">
	  		<h5 class="text_green"> Редактировать товар № {{$product->id}} </h5>
	  		<div class="form_container">
	  			<form class="form" action="{{ route('products.store', Auth::user()->id ) }}" enctype="multipart/form-data" method="post" >
	  				{{ csrf_field() }}
	  			
	  				<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Выберите категорию</label>
						<select class="form-control input_create_border_green " name="category" required="">
							<option value="Одежда" >Одежда</option>
						
						</select>
					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Выберите подкатегорию</label>
						<select class="form-control input_create_border_green " name="subcategory" required="">
							<option >   </option>
							<option value="Машины"  >Машины</option>
						</select>
					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Выберите подраздел подкатегорию</label>
						<select class="form-control input_create_border_green " name="sub_subcategory" required="">
							<option >   </option>
							<option value="Машины"  >Машины</option>
						</select>
					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Есть в наличие ?</label>
						<select class="form-control input_create_border_green " name="status" required="">
							
							<option value="Имеется" 
								<?php if ($product->status=='Имеется') {
					                echo "selected";
					              } ?>
							 >Имеется</option>
							<option value="Не имеется" 
							<?php if ($product->status=='Не имеется') {
				                echo "selected";
				              } ?>
							 >Не имеется</option>
							<option value="В архиве" 
							<?php if ($product->status=='В архиве') {
				                echo "selected";
				              } ?>
							 >В архиве</option>
						</select>
					</div>

					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Укажите тип товара</label>
						<input type="text" name="product_type" class="form-control input_create_border_green"  value="{{$product->product_type}}" >
					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Укажите названия товара(если имеется)</label>
						<input type="text" name="name" class="form-control input_create_border_green"  value="{{$product->name}}" >
					</div>
					<div class="row mt-2">
						<div class="col-5">
							<label class="input_label_small font_15px">Страна изготовитель</label>
					        <input required="" type="text" name="madefrom" class="form-control input_create_border_green" list="country_made" value="{{$product->madefrom}}" >
					        <datalist id="country_made">
					          <option value="Казахстан"></option>
					          <option value="Россия"></option>
					          <option value="Китай"></option>
					          <option value="Узбекстан"></option>
					          <option value="Кыргызстан"></option>
					          <option value="Белорусь"></option>
					        </datalist>
							
						</div>
						<div class="col-7">
							<label class="input_label_small font_15px">Бренд</label>
							<input type="text" name="product_brand" class="form-control input_create_border_green" value="{{$product->product_brand}}">
						</div>
					</div>
					<div class="row mt-2">
						<div class="col-4">
							<label class="input_label_small font_15px">Цвет</label>
					        <input required="" type="text" name="product_color" class="form-control input_create_border_green" list="color" value="{{$product->product_color}}" >
					        <datalist id="color">
					          <option value="Желтый"></option>
					          <option value="Красный"></option>
					          <option value="Зелений"></option>
					          <option value="Бежевый"></option>
					          <option value="Оранжевый"></option>
					          <option value="Черный"></option>
					        </datalist>
							
						</div>
						<div class="col-4">
							<label class="input_label_small font_15px">Формат/Размеры</label>
							<input type="text" name="product_format" class="form-control input_create_border_green" value="{{$product->product_format}}">
						</div>

					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="input_label_small font_15px">Краткое опсание товара</label>
						<textarea type="text" name="product_info" class="form-control input_create_border_green" rows="2">{{$product->product_info}}</textarea>
					</div>
					<div class="input_container d-flex flex-column align-items-start pt-1">
						<label class="custom-file-upload">
						    <input type="file" name="images[]" multiple="">
						    Выберите файлы
						</label>
					</div>
					<input type="submit" value="Сохранить" class="btn btn-secondary btn_save">
	  			</form>
	  		</div>
	  	</div>
	  	<div class="create_section second_section">
	  		
	  		<div class="form_container form_container_left pt-3">
	  			@foreach($images as $image)
					<img src="{{ url('images/'.Auth::user()->id, $image) }}" width="150">

				@endforeach

	  		</div>
	  	</div>
		
	</div>
@endsection