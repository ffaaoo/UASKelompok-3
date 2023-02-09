
    

<header class="d-flex flex-wrap justify-content-center py-3 px-5 mb-4 shadow-sm bg-white">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img src="{{ asset('/img/DVDLOGO.png') }}" height="50px">
      <span class="px-3 fs-4" style="font-weight: bolder; color: #1a375f">Rental DVD</span>
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item mt-3 px-3"><a href="/" style=" text-decoration: none; color: #1a375f;">Home</a></li>
      <li class="nav-item mt-3 px-3"><a href="{{ url('/listdvd') }}" style=" text-decoration: none; color: #1a375f;">List Dvd</a></li>
      <li class="nav-item mt-3 px-3"><a href="{{ url('/about') }}" style=" text-decoration: none; color: #1a375f;">About</a></li>
      @guest
        @if (Route::has('login'))
          <li class="nav-item mt-3 px-3"><a href="{{ route('login') }}" style=" text-decoration: none; color: #1a375f;">Login</a></li>
        @endif
        @if (Route::has('register'))
          <li class="nav-item mt-3 px-3"><a href="{{ route('register') }}" style=" text-decoration: none; color: #1a375f;">Register</a></li>
        @endif
        @else
        <li class="nav-item dropdown mt-2">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          @if (Auth::user()->role == '1')
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <a class="dropdown-item" href="{{ route('order.index') }}">List Order</a>
            <a class="dropdown-item" href="{{ route('user.index') }}">Data User</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
          @else
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
          @endif

          
      </li>
    </ul>
      @endguest
  </header>

  @yield('main')
