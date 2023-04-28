<nav class="navbar">

    <div class="container">
      <div class="brand-and-toggler">
        <div class="logo"><img src="images/logo.png" alt="LOGO"> </div>
        <a href="/" class="logoname">
          BOHECO I
        </a>

        <button type="button" class="navbar-toggler text-white" id="navbar-toggler">
          <i class="fas fa-bars"></i>
        </button>


      </div>

      <div class="navbar-collapse">
        <ul class="navbar-nav text-center">
          <div class = "nav-item dropdown">
            <a class="nav-link dropdown-toggle" href = "#" id="dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">NEWS AND UPDATES</a>
            <div class="dropdown-menu" aria-labelledby="dropdown">
              <li> <a href = "{{url('/news') }}" class = "dropdown-item">NEWS</a></li>
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
          @if (Route::has('login'))
          <div class = "nav-item">

            @auth
                <a href="{{ url('/home') }}" class="nav-link">HOME</a>
            @else
                <a href="{{ route('login') }}" class="nav-link">LOGIN</a>
            @endauth

          </div>
          @endif



        </ul>
      </div>

    </div>
  </nav>
