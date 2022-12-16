@section('header')
<div class="wrapper">
			<!-- header -->
			<header class="header block">
				<a class="header__logo" href="">
					<div class="header__icon">
						<img class="img" src="{{asset('/img/logo.svg')}}" alt="">
					</div>
					<span class="header__logoText">Lasles<b>VPN</b></span>
				</a>
				<div class="header__menuButton">
					<div class="burger burger__close"></div>
				</div>
				<nav class="header__nav hidden">
					<ul class="header__menu">
						<li><a href="../" class="header__button"><b>Home</b></a></li>
						<div class="header__line"></div>
{{--						<li><a href="" class="header__button">Features</a></li>--}}
{{--						<div class="header__line"></div>--}}
{{--						<li><a href="" class="header__button">Pricing</a></li>--}}
{{--						<div class="header__line"></div>--}}
						<li><a href="/posts" class="header__button"><b>Blog</b></a></li>
						<div class="header__line"></div>
						<li><a href="/posts/create" class="header__button"><b>Add post</b></a></li>
					</ul>
				</nav>
				<div class="header__sign hidden">
                    @guest
                        @if (Route::has('login'))
                            <button class="header__signIn"><a style="color: black" href="{{ route('login') }}">{{ __('Login') }}</a></button>
                        @endif

                        @if (Route::has('register'))
                            <button class="header__signUp"><a style="color: black" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                        @endif
                    @else
                        <p class="header__signIn" style="margin: 0px">
                            {{ Auth::user()->name }}
                        </p>

                        <button class="header__signUp">
                            <a style="color: black" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                        </button>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                        {{--                            </li>--}}
                    @endguest





				</div>
			</header>
</div>
