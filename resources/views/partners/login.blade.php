@extends('partners.master')
@section('content')
<div style="position: absolute;">
	<p> {{Session::get('msg')}} </p>
</div>
<div class="d-flex justify-content-center">
	<div class=" bg-gray d-flex justify-content-center align-items-center">
		<div class="enter_block">
			<p class="text_enter heading text-heading">Вход в личный кабинет</p>
			<div class="enter_container  p-4">
				<div class="form-block">
					<form method="POST" action="{{ route('login') }}">
    					@csrf
						<div class="input_container d-flex flex-column align-items-start pt-2">
							<label class="input_label_small"> Электронная почта</label>
							<input type="text" name="email" class="form-control enter_input" >
						</div>
						<div class="input_container d-flex flex-column align-items-start pt-3">
							<label class="input_label_small"> Пароль</label>
							<input type="password" name="password" class="form-control enter_input" >
						</div>
						<a href="#" class="text text_enter_password d-flex justify-content-start mt-2 mb-3"> Напомнить пароль </a>
						<input type="submit" value="ВОЙТИ" class="btn btn_orange_submit mb-3" name="">
					</form>
					<div>
						<p class="text_create_enter">
							Если вы еще не зарегестрировались у нас на сайте, то Вы можете
						</p>
						<a href="{{ route('partners.register') }}" class="btn p-1 pl-4 pr-4 border-green">СОЗДАТЬ АККАУНТ</a>
					</div>

					
				</div>
				
			</div>
		</div>
	</div>
	
</div>

@endsection
