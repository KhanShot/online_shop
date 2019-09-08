<header class="header header-style2">
    
    @if (\Session::has('success'))
        <div class="alert alert-success">
            
            {!! \Session::get('success') !!}
        </div>
    @endif
    @if (\Session::has('msg'))
        <div class="alert alert-warning">
            
            {!! \Session::get('msg') !!}
        </div>
    @endif
    <div class="header-mid">
        <div class="container">
            <div class="header-mid-left">
                @if(Auth::check())
                    <p class="wellcome-to">Добро пожаловать в Tasbaqa Market, {{Auth::user()->name}}</p>
                
                    <a href="{{route('logout')}}">Выйти</a>
                @else
                    <p class="wellcome-to">Добро пожаловать в Tasbaqa Market</p>
                    <p class="register-or-login">
                        <a href="#" class="register" data-toggle="modal" data-target="#modalReg">Регистрация</a>
                        или
                        <a href="#" class="login btn" data-toggle="modal" data-target="#modalAuth">Вход</a>
                    </p>
                @endif
                
            </div>
            <div class="header-mid-right">
                @if(Auth::check())
                <div class="header-mid-right-content first" style="margin-left: 80px;">
                    <a href="{{  action('FrontController@userprofile', Auth::user()->id)}}">Мой профиль</a>
                </div>
                @endif
                <div class="header-mid-right-content">
                    <a href="#"> Условия Оплаты</a>
                </div>
                <div class="header-mid-right-content">
                    <a href="#"> Условия Доставки</a>
                </div>

                <div class="header-mid-right-content">
                    <a href="#">Помощь</a>
                </div>

                <div class="header-mid-right-content country-select-menu">
                    <div class="country-select">
                        <div class="country select">
                            <a href="{{ route('partners.index') }}">Для Партнеров</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom-left">
                <h1 class="logo">
                    <a href="{{ url('/') }}">
                        <img src="{{asset ('images/logo_green.jpg')}}" width="245px" height="60px" alt="logo">
                    </a>
                </h1>
                <div class="header-search">
                    <form action="form.php" class="form form-search-header">
                        <select name="show-categories" id="show-categories" data-toggle="modal" data-target="#myModal">
                            <option value="all" >Все Категории</option>
                        </select>
                        <input type="text" placeholder="Поиск...">
                        <button class="button-search"><i class="flaticon-search"></i></button>
                    </form>
                </div>
            </div>

                <!-- Modal Category-->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Выберите раздел для поиска </h4>
                            </div>
                            <div class="modal-body">
                                <p>This is a large modal.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Register-->
                <div class="modal fade" id="modalReg" role="dialog">
                    <div class="modal-dialog modal-md modal-sm modalReg">
                        <div class="modal-content m1">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Дорогой покупатель!</h4>
                            </div>
                            <div class="modal-body telo-modal">
                                <form action="{{ route('createUser') }}">
                                    <div style="display: none;">{{ csrf_token() }}</div>
                                    <p>Мы рады приветствовать вас в <span style="color: #52bdb1;font-weight: bold;"><br>Tasbaqa Market</span>.</p>
                                    <br>
                                    <p>Для того, чтобы сделать заказ Вам необходимо <span style="color: black ">создать аккаунт</span> на нашем сайте.</p>
                                    <div class="form-group reg-forms">
                                        <input type="text" required="" class="form-control" id="email" placeholder="Имя" name="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" required="" class="form-control"  placeholder="Электронная почта" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="phone" required="" class="form-control"  placeholder="Мобильный телефон" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required="" class="form-control" id="pas1" placeholder="Пароль" name="password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required="" class="form-control" id="pas2" placeholder="Повторите пароль" >
                                    </div>

                                    <div class="form-group form-check">
                                        <label class="form-check-label agree">
                                            <input class="form-check-input" required="" type="checkbox" name="agree" > Я cогласен с <span style="color: #52bdb1;font-weight: bold;">обработкой персональных данных</span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-reg">Далее</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Modal Auth-->
            <div class="modal fade" id="modalAuth" role="dialog">
                <div class="modal-dialog modal-md modal-sm modalReg">
                    <div class="modal-content m1">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Авторизация!</h4>
                        </div>
                        <div class="modal-body telo-modal">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                
                                <div class="form-group reg-forms">
                                    <input id="email" type="email" placeholder="Электронная почта" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>
                                

                                <div class="form-group">
                                    <input id="password" type="password" placeholder="Пароль" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                </div>

                                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-reg">Вход</button>

                                        
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom-right">
                <div class="header-bottom-right-content">
                    <a href="{{route('wishlist')}}"
                    <?php if(!Auth::check()){
                        echo 'data-toggle="modal"  data-target="#modalAuth"';
                    } ?>
                    >
                        <i class="flaticon-like"></i>
                        Избранные
                    </a>
                </div>
                
                <div class="header-bottom-right-content cart-menu-relative">
                    <div class="cart-menu">
                        <a href="{{ route('cart') }}" 
                            <?php if(!Auth::check()){
                                echo 'data-toggle="modal"  data-target="#modalAuth"';
                            } ?>
                         >
                            <i class="flaticon-commerce"></i>
                            Корзина
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                                @if(Auth::check())
                                <p class="cart-amount">
                                {{ $countcart->count() }}
                                </p>
                                @endif
                        </a>
                    </div>
                    <div class="cart-hover">
                        <div class="cart-hover-title">Ваши продукты<span>Прайс</span></div>
                        <ul class="list-hover-cart">
                            @if(Auth::check())
                                
                                @foreach($cartitem as $item)
                                @if($item->user_id == Auth::user()->id)
                                @foreach($products as $product)
                                @if($product->id == $item->product_id)
                                    <li class="hover-cart-item" style="padding-bottom: 10px;">
                                        <a href="{{ route('delete', $product->id) }}" class="img-hover-cart">
                                            <img src="{{asset ('images/img-hover-cart.jpg')}}" alt="img-hover-cart" width="75" height="80">
                                            <span class="delete-product-hover-cart"><i class="fa fa-times-circle" aria-hidden="true"></i></span>
                                        </a>
                                        <div class="text-hover-cart">
                                            <a href="#" class="name-hover-cart">{{$product->name}}</a>
                                            <div class="quantity">
                                                <p class="quanlity-hover-cart">Quanlity: <span>{{$item->total}}</span></p>
                                            </div>
                                        </div>
                                        <div class="price-hover-cart" style=" padding: 10px ; ">$150</div>
                                    </li>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                            
                            @endif
                        <div class="subtotal-hover-cart">Subtotal <span>$150</span></div>
                        </ul>
                        
                        <div class="button-cart-hover">
                            <a href="#" class="go-to-cart button">Go to cart</a>
                            <a href="#" class="check-out button orange">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-primary">
        <div class="container">
            <nav class="menu-item has-mega-menu " id="categories-menu" style="padding-bottom:  3px; padding-top: 5px;">
                <ul class="menu">
                    <li class="menu-item" >
                        <a href="#" >Категории</a>
                        <span class="click-categories flaticon-bars show-before" ></span>
                        <div class="category-drop-list" style="display: none;">
                            <div class="category-drop-list-inner" >
                                <ul class="sub-menu sub-menu-open">
                                    @foreach($category as $categor)
                                        <li class="menu-item has-mega">
                                            <a href="#">{{$categor->name}}</a>
                                            <div class="sub-menu mega-menu">
                                                @foreach($subcategory as $subcat)
                                                    @if($subcat->category_id == $categor->id)
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <div class="mega-content">
                                                                    <p class="mega-item-title">{{$subcat->name}}</p>
                                                                    <ul class="menu">
                                                                        @foreach($sub_subcategory as $sub_sub)
                                                                            @if($sub_sub->subcategory_id == $subcat->id)
                                                                                <li class="menu-item"><a href="#">{{$sub_sub->name}}</a></li>
                                                                            @endif
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>                                                    
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                                <span class="more-categories open-cate">More Categories</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="#primary-navigation" class="menu-button primary-navigation-button">
                <span class="flaticon-bars"></span>Main Menu
            </a>
            <nav id="primary-navigation" class="site-navigation main-menu">
                <ul id="primary-menu" class="menu">
                    <span style="color:#000;">Ваш</span>
                    <span style="color:#000; margin-left: 5px;">Город:</span>
                    <li class="menu-item"><a href="#" style="text-decoration: underline;">Алматы</a></li>
                    <span style="color:#000;margin-left: 20px;">Место:</span>
                    <li class="menu-item"><a href="#" style="text-decoration: underline">Караван</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>