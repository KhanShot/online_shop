@extends('partners.master')



@section('content')
<div class="content">
  <div class=" bg-ano" >
    <div class="login">
      <p class="d-flex justify-content-end">
        @if(Auth::check())
            @if(Auth::user()->is_partner == 'yes')
              <div style="position: absolute; right:  5%; top: 3%;">
                <p>
                  <a href="{{ route('partners.dashboard') }}" class="mr-5 mt-3 heading enter-text">Перейти</a>
                </p>
              </div>
            @else
              <a href="{{ route('partners.login') }}" class="mr-5 mt-3 heading enter-text">Войти</a>
            @endif
        @endif
      </p>
    </div>
    <div class="container contain d-flex justify-content-center align-items-center">
      <div class=" content1 d-flex justify-content-center align-items-center flex-column">
        <p class="text text-heading mr-5"> Продавайте свои товары на <span class="span">Tasbaqa Market</span> </p>
        <p class=" text-center"> Это просто и удобно</p>
        <a href="{{route('partners.enterpage')}}" class="bg-text p-1 mt-5">Начните продавать</a>
        
      </div>
    </div>
  </div>
</div>

@endsection