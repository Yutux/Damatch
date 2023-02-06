
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Damatch</title>
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
    <link href="{{ asset('css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/Cookies.css') }}" rel="stylesheet">

    @yield('link')
</head>

<header>
    <h1 class="new" color="white">
        
    </h1>
    @include('flash::message')

    <!-- Left Side Of Navbar -->
    <nav>
        <!-- Right Side Of Navbar -->
        <ul id="menu-deroulant">
            <!-- Authentication Links -->
            <li><a href="/"><img src="{{asset('img/home_icon1.png')}}" alt="home" height="50px" width="50px"></a>
                <ul>
                    @guest
                    <li>
                        <a href="/connexion" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>{{ __('connexion') }}</a>
                    </li>
                
                    <li>
                        <a href="/inscription" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>{{ __('inscription') }}</a>
                    </li>
                   
                    @else
                    <li>
                        <a href="/Account" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/review_page" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            v-pre>
                            review <span class="caret"></span>
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="buttom">Logout</a>
                    </li>
                    @endguest
                </ul>
            </li>
        </ul>
    </nav>
</header>
<div class="footer">
    <h3>copyright</h3>
    <a href="#"><img src="{{asset('img/4fa213fc0a5e3b0.png')}}" alt="twitter" height="65px" width="65px"></a>
    <a href="#"><img src="{{asset('img/84e74675b19a3d8.png')}}" alt="facebook" height="65px" width="65px"></a>
    <h3>Damatch</h3>
</div>

<body>
        @yield('content')
</body>

</html>
