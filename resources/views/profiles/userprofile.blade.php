@extends('partners.master')

@include('partners.navbar')
@include('partners.sidebar')
@section('content')
	<div class="lefter">
		@if (\Session::has('edited'))
			<div class="alert alert-success" style="margin-bottom: -15px;">
			  <p>{{ \Session::get('edited') }}</p>
			</div><br />
		@endif
		<h2 class="heading">Ваш профиль, {{$user->name}}</h2>
		<div class="enter_block enter_block1">
						
						<div class="enter_container">
							<div class="form-block col-5">
								<form class="form" action="{{ action('UsersController@edit', $user->id)}}" id="formCheckPassword">
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small">Имя</label>
										<input type="text" name="name" class="form-control enter_input" required="" value="{{$user->name}}" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2" value="{{$user->name}}">
										<label class="input_label_small">Фамилия</label>
										<input type="text" name="surname" class="form-control enter_input" required="" value="{{$user->surname}}">
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small"> Электронная почта</label>
										<input type="text" name="email" class="form-control enter_input" required="" disabled=""  value="{{$user->email}}">
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-2">
										<label class="input_label_small"> Телефон номер</label>
										<input type="number" name="phone" class="form-control enter_input" required="" value="{{$user->phone}}">
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-1">
										<label class="input_label_small"> Владелец или Продавец торговой точки</label>
										<select class="form-control enter_input" name="market" required="">
											<option value="Владелец торговой точки" 
											<?php if ($user->market=='Владелец торговой точки') {
								                echo "selected";
								              } ?>
											> Владелец торговой точки </option>
											<option value="Продавец торговой точки"
											<?php if ($user->market=='Продавец торговой точки') {
								                echo "selected";
								              } ?>
											> Продавец торговой точки </option>
										</select>
									</div>
									<hr style="background-color: #333531;" >

									<div class="input_container d-flex flex-column align-items-start pt-3">
										<label class="input_label_small"> Пароль</label>
										<input type="password" name="password" class="form-control enter_input" id="password" >
									</div>
									<div class="input_container d-flex flex-column align-items-start pt-3">
										<label class="input_label_small"> Повторите пароль</label>
										<input type="password" name="cfmpassword" class="form-control enter_input"  >
									</div>
									<input type="submit" id="submit" value="обновить" class="btn btn_create mb-3 mt-2 " name="">
								</form>

							</div>
							
						</div>
					</div>
	</div>
@endsection