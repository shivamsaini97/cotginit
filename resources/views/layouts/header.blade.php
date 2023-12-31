<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('images/logo/cotgin.png') }}" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active-tab" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Our Company
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('about')}}">About</a></li>
              <li><a class="dropdown-item" href="{{route('blog')}}">Blog</a></li>
              <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
    
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Help Desk</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('it-services')}}">IT Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">UI/UX Design</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Marketing Solutions</a>
          </li>
          <li class="nav-item position-relative">
            <a class="btn btns" href="#" data-attr="Request A Quote"><span>Request A Quote</span></a>
          </li>
        </ul>
        {{-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> --}}
      </div>
    </div>
  </nav>
</header>