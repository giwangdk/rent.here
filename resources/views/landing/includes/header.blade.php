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
            <a class="nav-link" href="#">Layanan</a>
          </li>
          <li class="nav-item ml-4">
            <a class="nav-link" href="{{route('about')}}">About us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto d-flex justify-content-around">
          <li class="nav-item mr-3">
            <a class="nav-link btn-login" href="{{route('login')}}">Sign In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-register" href="{{route('register')}}">Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>