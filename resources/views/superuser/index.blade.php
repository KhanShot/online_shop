<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<style type="text/css">
		.dropdown-submenu {
		  position: relative;
		}

		.dropdown-submenu .dropdown-menu {
		  top: 0;
		  left: 100%;
		  margin-top: -1px;
		}
	</style>
</head>
<body>
<div class="container pt-3 ">
	<h3 class="text-info">Категории</h3>

	<form action="{{ action('ProductController@category') }}">
	  <div class="form-group ">
	    <label for="formGroupExampleInput">Категория</label>
	    <div class="row">
	    	<input type="text" class="form-control col-5 " id="formGroupExampleInput" placeholder="обязательно" required="" name="category">
	    	<input type="submit" class="btn btn-info" value="добавить категорию" name="">
	    </div>
	  </div>
	</form>
	<hr>
	<form action="{{ action('ProductController@subcategory') }}">
	    <label for="formGroupExampleInput2">под категория</label>
		  <div class="form-group">
		    <div class="row">
			    <select class="form-control col-5" name="category_id">
			    	@foreach($category as $cat)
			    		<option value="{{$cat->id}}"> {{$cat->name}} </option>
			    	@endforeach
			    </select>
			    <input type="text" class="form-control ml-2 col-5 " id="formGroupExampleInput2" placeholder="не обязательно" name="subcategory">
			    <input type="submit" class="btn btn-info col-1 ml-2" name="">
		    </div>
		  </div>
	</form>

	  <hr>
	  <form action="{{ action('ProductController@sub_subcategory') }}">
	   <label for="formGroupExampleInput2">Под под категория</label>
		  <div class="form-group">
		    <div class="row">
		    	<div class="col d-flex">
			    <select class="form-control col-5 mr-3" name="category_id" id="select">
			    	<option></option>	
			    	@foreach($category as $cat)
			    		<option value="{{$cat->id}}" id="category_id"> {{$cat->name}} </option>
			    	@endforeach
			    </select>
			    <select class="form-control col-5" name="subcategory_id" id="subcategory">
			    	<option></option>
			    	@foreach($subcategory as $subcat)
			    		
			    		<option value="{{$subcat->category_id}}/{{$subcat->id}}"> {{$subcat->name}} </option>
			    		
			    	@endforeach
			    </select>
		    	</div>
			    <input type="text" class="form-control ml-2 col-5 " id="formGroupExampleInput2" placeholder="не обязательно" name="sub_subcategory">
			    <input type="submit" class="btn btn-info col-1 ml-2" name="">
		    </div>
		  </div>
	</form>
</div>


<script>
	$(document).ready(function(){
	  $('.dropdown-submenu a.test').on("click", function(e){
	    $(this).next('ul').toggle();
	    e.stopPropagation();
	    e.preventDefault();
	  });
	   $('#select').on("change", function(e){
	    	var category_id = $('#select').val();
	    	$('#subcategory  option').each(function(){
	    		var string = $(this).val().split("/");
			    $(this).hide();
			  if (string[0] == category_id) {
			  	$(this).show();
			  }
			});
	  });
	});
</script>

</body>
</html>