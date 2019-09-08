@extends('partners.master')
<nav class="col-md-2 d-block bg-light sidebar navbar-static-top">
  <div class="sidebar-sticky">
    <ul class="nav flex-column " style="align-items: flex-start;">
      <li class="nav-item">
        <a class="nav-link 
        	<?php if(Route::current()->getName() == 'partners.dashboard'){
	    		echo 'active';
	    	} ?>
        " href="{{route ('partners.dashboard') }}">
          <span data-feather="home"></span>
          Главная <span class="sr-only"></span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link 
        	<?php if(Route::current()->getName() == 'products.create'){
	    		echo 'active';
	    	} ?>
        " href="{{ route('products.create' )}}">
          <span data-feather="plus"></span>
          Добавить продукт
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link 
          <?php if(Route::current()->getName() == 'products.index'){
            echo 'active';
          } ?>
         " href="{{ route ('products.index') }}">
          <span data-feather="shopping-cart"></span>
          Все продукты
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="bar-chart-2"></span>
          Заказы
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link
          <?php if(Route::current()->getName() == 'partners.profile'){
            echo 'active';
          } ?>
        " href="{{  route('partners.profile', Auth::user()->id ) }}">
          <span data-feather="user"></span>
          Профиль
        </a>
      </li>
    </ul>
  </div>
</nav>