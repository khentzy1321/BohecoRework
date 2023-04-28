<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'BOHECO') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <section class="more">
        <nav class="navbar1">
            <div class="container">
              <div class="brand-and-toggler">
                <div class="logo"><img src="{{asset('images/logo.png')}}" alt="LOGO"> </div>
                <a href="/" class="logoname">
                  BOHECO I
                </a>

                <button type="button" class="navbar-toggler text-white" id="navbar-toggler">
                  <i class="fas fa-bars"></i>
                </button>
              </div>
              <div class="navbar-collapse">
                <ul class="navbar-nav text-center text-light">

                  <div class = "nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href = "#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">NEWS AND UPDATES</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown">
                      <li> <a href = "{{ url('/news') }}" class = "dropdown-item">NEWS</a></li>
                      <li> <a href = "{{url('/advisory')}}" class = "dropdown-item">ADVISORIES</a></li>
                      <li> <a href = "{{url('/int')}}" class = "dropdown-item">INTERRUPTIONS</a></li>
                    </div>
                  </div>
                  <div class = "nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href = "#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ABOUT US</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown">
                      <li> <a href = "{{route('history.index')}}" class = "dropdown-item">HISTORY</a></li>
                    <li> <a href = "{{route('core.index')}}" class = "dropdown-item">CORE VALUES</a></li>
                    <li> <a href = "{{route('leaders.index')}}" class = "dropdown-item">LEADERS</a></li>
                    <li> <a href = "{{route('awards.index')}}" class = "dropdown-item">AWARDS</a></li>
                    </div>
                  </div>

                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </section>

    @include('layouts.footer')

    <script src="{{asset('resources/jquery-3.5.1.js')}}"></script>
    <!-- wow js -->
    <script src="{{asset('resources/WOW-master/dist/wow.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    {{-- Custom Js --}}
    <script src="{{asset('js/script.js')}}">
    <script type='text/javascript' src='https://boheco1.com/wp-includes/js/wp-embed.min.js?ver=5.4.12'></script>
 
</body>
</html>
