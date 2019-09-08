@extends('partners.master')

@section('content')
<div class="enterpage_container d-flex align-items-center justify-content-center pt-2">
	<div class="enterpage_inner_container">
		<div class="login">
			@if(Auth::check())
	          @if(Auth::user()->is_partner == 'yes')
	                <p class="d-flex justify-content-end"><a href="{{ route('partners.dashboard') }}" class="mr-5 mt-3 text heading ">Перейти</a></p>
	          @endif
	          @else
	            <p class="d-flex justify-content-end"><a href="{{ route('partners.login') }}" class="mr-5 mt-3 text heading ">Войти</a></p>
	        @endif
	      
	    </div>
	    <div class="section_container d-flex pl-5 r-5" >
	    	<div class="section  ml-5">
	    		<h3 class="heading asdasd mb-4 "> Дорогой партнер!</h3>
	    		<div class="text_container d-flex flex-column justify-content-around pb-3"> 
		    		<p class="normal_text">
		    			Добро пожаловать в <span class="text_green text_bold"> Tasbaqa Market </span>!
		    			<br>
		    			<br>
		    			Если вы владелец/продавец торгвой точки в любом рынке Казахстане, то Вы можете продавать свои товары здесь на нашем сайте!
		    			<br>
		    			<br>
		    			Для этого Вам необходимо <span class="text_bold">создать аккаунт партнера</span> и загрузить сведения о Ваших товарах.
		    			<br>
		    			<br>
		    			<br>
		    			Это займет немного времени.


		    		</p>
		    		<p class="normal_text mid_text text_bold">
		    			Удачи Вам в продаже!
		    		</p>
		    		<p class="normal_text bottom_text">
		    			В случае  возникновения вопросов просим обращаться в службу поддержки по телефону:<br> <a href="" type="tel" >+7 707 700 00 00</a>
		    			<br><br>
		    			либо напишите нам, мы вам ответим в самые кратчайшие сроки: <br> <a href="" class="text" type="email">tasbaqa.market@gmail.com</a>
		    			<br><br><br>
		    			Мы рады, что Вы с нами!
		    			<br><br>
		    			Ваш <span class="text_bold text_green"> Tasbaqa market</span>
		    		</p>
		    	</div>
	    	</div>
	    	<div class="section section_right p-2 d-flex flex-column justify-content-center align-items-center mt-5">
	    		<a href="{{route('partners.register')}}" class="btn btn_create "> СОЗДАТЬ АККАУНТ </a>
	    	</div>
	    </div>
	</div>
</div>
@endsection