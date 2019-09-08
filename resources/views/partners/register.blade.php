@extends('partners.master')
	@if (\Session::has('success'))
	    <p class="alert alert-warning">
	        
	        {!! \Session::get('success') !!}
	    </p>
	@endif
	@section('content')
	@if(Auth::check())
	    @if(Auth::user()->is_partner == 'yes')
			<div style="position: absolute; right:  5%; top: 3%;">
				<p>
					<a href="{{route('partners.dashboard')}}">перейти</a>
				</p>
			</div>
		@endif
	@endif
	<div class="enterpage_container d-flex align-items-center justify-content-center ">
		<div class="enterpage_inner_container">
			
		    <div class="section_container d-flex justify-content-center" >
		    	<div class="form_container">
		    		<div class="enter_block enter_block1">
						
						<div class="enter_container">
							<div class="form-block">
								<form class="form" action="{{route('partners.create')}}" id="formCheckPassword">
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small">Имя</label>
										<input type="text" name="name" class="form-control enter_input" required="" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small">Фамилия</label>
										<input type="text" name="surname" class="form-control enter_input" required="">
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small"> Электронная почта</label>
										<input type="text" name="email" class="form-control enter_input" required="" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small"> Телефон номер</label>
										<input type="number" name="phone" class="form-control enter_input" required="" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-3">
										<label class="input_label_small"> Пароль</label>
										<input type="password" name="password" class="form-control enter_input" required="" id="password">
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-3">
										<label class="input_label_small"> Повторите пароль</label>
										<input type="password" name="cfmpassword" class="form-control enter_input" required="" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-1">
										<label class="input_label_small"> Владелец или Продавец торговой точки</label>
										<select class="form-control enter_input" name="market" required="">
											<option value="Владелец торговой точки"> Владелец торговой точки </option>
											<option value="Продавец торговой точки"> Продавец торговой точки </option>
										</select>
									</div>
									
										<label class="container d-flex justify-content-start pt-2">
										<input type="checkbox" id="checkbox" name="agree" class="mt-1" required="">
										<p class="text_align_left"> Я согласен с <a href="#" class="text text_bold"> обработкой персональных данных</a> и с <a href="#" class="text text_bold">уловиями продажи </a></p>  
										</label>
									
									<input type="submit" id="submit" value="СОЗДАТЬ" class="btn btn_create mb-3 " name="">
								</form>

							</div>
							
						</div>
					</div>
		    	</div>
		    </div>
		</div>
	</div>

@endsection
