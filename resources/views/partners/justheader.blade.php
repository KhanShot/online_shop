<header class="masthead mb-auto">
	<div class="inner " style="display: flex; align-items: center;">
	  <h3 class="masthead-brand"><img src="{{url('images/logo_green.jpg')}}" width="150"></h3>
	  <nav class="nav nav-masthead justify-content-center ml-5">
	    <a class="nav-link 
	    	<?php if(Route::current()->getName() == 'partners.index'){
	    		echo 'active';
	    	} ?>
	    " href="{{ route('partners.index') }}">Главная страница</a>
	    <a class="nav-link
	    	<?php if(Route::current()->getName() == 'partners.register'){
	    		echo 'active';
	    	} ?>
	    " href="{{route('partners.register')}}">Регистрация</a>
	    <a class="nav-link
	    	<?php if(Route::current()->getName() == 'partners.login'){
	    		echo 'active';
	    	} ?>
	    " href="{{ route('partners.login') }}">Войти</a>
	  </nav>
	</div>
</header>