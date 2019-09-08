@extends('partners.master')

@include('partners.navbar')
@include('partners.sidebar')

@section('content')
<div class="lefter">
	@if (\Session::has('msg'))
	    <div class="alert alert-warning">
	        
	        {!! \Session::get('msg') !!}
	    </div>
	@endif

  <div class="section_container d-flex justify-content-around p-3">
  	<div class="create_section pt-3 pb-1" style="margin-left: -30px;">
  		<h5 class="text_green"> ЗАГРУЗИТЕ ТОВАРЫ НА САЙТ </h5>
  		<div class="form_container">
  			<form class="form" action="{{ route('products.store', Auth::user()->id ) }}" enctype="multipart/form-data" method="post" >
  				{{ csrf_field() }}
  			
  				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Выберите категорию</label>
					<select class="form-control input_create_border_green " name="category" id="select">
				    	<option></option>
				    	@foreach($category as $cat)
				    		<option value="{{$cat->id}}" id="category_id"> {{$cat->name}} </option>
				    	@endforeach
				    </select>
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Выберите подкатегорию</label>
						<select class="form-control input_create_border_green" name="subcategory" id="subcategory" data="ali">
				    	<option></option>
				    	@foreach($subcategory as $subcat)
				    		
				    		<option value="{{$subcat->id}}/{{$subcat->category_id}}" data="merey"> {{$subcat->name}} </option>
				    		
				    	@endforeach
				    </select>
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Выберите подраздел подкатегорию</label>
					<select class="form-control input_create_border_green " name="sub_subcategory" required="" id="sub_subcategory">
						<option > <small>не обязательно</small>  </option>
						@foreach($sub_subcategory as $sub_subcat)
							<option value="{{$sub_subcat->id}}/{{$sub_subcat->subcategory_id}}">{{$sub_subcat->name}}</option>
						@endforeach
					</select>
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Есть в наличие ?</label>
					<select class="form-control input_create_border_green " name="status" required="">
						
						<option value="Имеется"  >Имеется</option>
						<option value="Не имеется"  >Не имеется</option>
						<option value="В архиве"  >В архив</option>
					</select>
				</div>

				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Укажите тип товара</label>
					<input type="text" name="product_type" class="form-control input_create_border_green">
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Укажите названия товара(если имеется)</label>
					<input type="text" name="name" class="form-control input_create_border_green">
				</div>
				<div class="row mt-2">
					<div class="col-5">
						<label class="input_label_small font_15px">Страна изготовитель</label>
				        <input required="" type="text" name="madefrom" class="form-control input_create_border_green" list="country_made" >
				        <datalist id="country_made">
				          <option value="Казахстан"></option>
				          <option value="Россия"></option>
				          <option value="Китай"></option>
				          <option value="Узбекстан"></option>
				          <option value="Кыргызстан"></option>
				          <option value="Белорусь"></option>
				        </datalist>
						
					</div>
					<div class="col">
						<label class="input_label_small font_15px">Бренд</label>
						<input type="text" name="product_brand" class="form-control input_create_border_green">
					</div>
					<div class="col">
						<label class="input_label_small font_15px"><small>Формат/Размеры	</small></label>
						<input type="text" name="product_format" class="form-control input_create_border_green">
					</div>
				</div>
				<br>
					<label>Цвета</label>
				<div class="row pt-2 pb-2" style="background-color: #E2ECFF">
					<div class="col">
						<div class="row">
							<div class="col">
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: blue;"></div>
						        	<input type="checkbox" value="blue" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: red;"></div>
						        	<input type="checkbox" value="red" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: green;"></div>
						        	<input type="checkbox" value="green" name="product_color[]" class="">
								</label>
								
							</div>
							<div class="col">
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: purple;"></div>
						        	<input type="checkbox" value="purple" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: black;"></div>
						        	<input type="checkbox" value="black" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: orange;"></div>
						        	<input type="checkbox" value="orange" name="product_color[]" class="">
								</label>
								
							</div>
							<div class="col">
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: yellow;"></div>
						        	<input type="checkbox" value="yellow" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: gold;"></div>
						        	<input type="checkbox" value="gold" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: white;"></div>
						        	<input type="checkbox" value="white" name="product_color[]" class="">
								</label>
								
							</div>
							<div class="col">
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: silver;"></div>
						        	<input type="checkbox" value="silver" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									<div class="color_box p-3 mr-1" style="background-color: #FF8778;"></div>
						        	<input type="checkbox" value="#FF8778" name="product_color[]" class="">
								</label>
								<label class="input_label_small font_15px d-flex align-items-center">
									
						        	<input type="color" name="product_color_self" class="">
								</label>
								
							</div>
						</div>
						
					</div>
					

				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Краткое опсание товара</label>
					<textarea type="text" name="product_info" class="form-control input_create_border_green" rows="2"></textarea>
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
  		<div class="d-flex justify-content-center align-items-center">	
  				<h7 class="text_green second_section_heading">Для Вашего удобства здесь мы <br> разместили пример заполнения </h7>
  		</div>
  		<div class="form_container form_container_left pt-3">
  			<form class="form" action="{{ route('products.store', Auth::user()->id ) }}" enctype="multipart/form-data" method="post" >
  				{{ csrf_field() }}
  				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Выберите категорию</label>
					<select class="form-control input_create_border_green " name="category" required="">
						<option >   </option>
						<option value="Одежда" >Одежда</option>
					
					</select>
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Выберите подкатегорию</label>
					<select class="form-control input_create_border_green " name="subcategory" required="">
						<option >   </option>
						<option value="Одежда"  >Машины</option>
					</select>
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Укажите тип товара</label>
					<input type="text" name="product_type" class="form-control input_create_border_green">
				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Укажите названия товара(если имеется)</label>
					<input type="text" name="name" class="form-control input_create_border_green">
				</div>
				<div class="row mt-2">
					<div class="col-5">
						<label class="input_label_small font_15px">Страна изготовитель</label>
				        <input required="" type="text" name="madefrom" class="form-control input_create_border_green" list="country_made" >
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
						<input type="text" name="product_brand" class="form-control input_create_border_green">
					</div>
				</div>
				<div class="row mt-2">
					<div class="col-4">
						<label class="input_label_small font_15px">Цвет</label>
				        <input required="" type="text" name="product_color" class="form-control input_create_border_green" list="color" >
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
						<input type="text" name="product_format" class="form-control input_create_border_green">
					</div>

				</div>
				<div class="input_container d-flex flex-column align-items-start pt-1">
					<label class="input_label_small font_15px">Краткое опсание товара</label>
					<textarea type="text" name="product_info" class="form-control input_create_border_green" rows="2"></textarea>
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
 [] </div>
</div>
@endsection	

<script>
	$(document).ready(function(){
	   $('#select').on("change", function(e){
	    	var category_id = $('#select').val();
	    	$('#subcategory  option').each(function(){
	    		var string = $(this).val().split("/");
			    $(this).hide();
			  if (string[1] == category_id) {
			  	$(this).show();
			  }
			});
	  	});
	   $('#subcategory').on("change", function(e){
	   		var subcategory_id = $('#subcategory').val();
	   		var splited = $('#subcategory').val().split("/");
	    	$('#sub_subcategory  option').each(function(){
	    		$(this).hide();
	    		var string = $(this).val().split("/");
			  	if (string[1] == splited[0]) {
			  		$(this).show();
			  	}
			}); 	    	
	   });

	});
</script>