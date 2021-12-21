<nav class="navbar nav navbar-expand-lg fixed-top py-3">
    <div class="container">
      <a class="navbar-brand" style="" href="./index.html"  aria-label="Front">
        Rent Here
   </a>
   
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ml-4">
            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ml-4">
            <a class="nav-link" href="{{route('layanan')}}">Layanan</a>
          </li>
          <li class="nav-item ml-4">
            <a class="nav-link" href="{{route('about')}}">About us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto d-flex justify-content-around">
          @guest
          <li class="nav-item mr-3">
            <a class="nav-link btn-login" href="{{route('login')}}">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-register" href="{{route('register')}}">Sign Up</a>
          </li>
          @endguest
          @auth

        @if  (Auth::user() && Auth::user()->roles == 'ADMIN')
        <li class="nav-item">
            <a class="btn btn-register" href="/admin">Dashboard </a>
            </li>
        @endif

            <li class="nav-item">
            <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="btn btn-login ml-2">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>