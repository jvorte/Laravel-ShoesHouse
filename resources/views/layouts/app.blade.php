<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ShoesHouse') }}</title>
    {{-- icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    {{-- css file --}}
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      
    {{-- footer --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   
    
    {{-- cart --}}
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
       
        <nav class="navbar navbar-expand-md  " id="nav-first">   {{-- shadow-sm --}}
            <div class="container-fluid px-5">
                <img src="images\addidas.png" alt="" srcset="" style="width: 130px;">
                <a class="navbar-brand text-white" href="{{ url('/home') }}">
                    {{ config('app.name', 'ShoesHouse') }}
                </a>
                <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <i class="bi bi-list"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    <li class="nav-item ">
                    <a class="nav-link text-white active" aria-current="page" href="{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
                    </li>
                    </ul>
                    <form class="d-flex" action="{{ route('search') }}" method="GET">
                        <input class="form-control me-2" name="search"  placeholder="Search Products" aria-label="Search" required>
                        <button class="btn btn-outline-danger" type="submit">Search</button>
                      </form>
                
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  ms-auto">
                   
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                 Welcome {{ Auth::user()->name }}!
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
                                    @if (!empty(Auth::user()) && Auth::user()->usertype == 'admin' )
                                    <a class="dropdown-item" href="{{ url('/admin/dashboard') }}">Admin</a>                                                  
                                    @endif    
                                   
                                </div>
                            </li>
                        @endguest
                    </ul>
                          {{-- ----------------basket---------------------------- --}}
                          <div class="dropdown" id="dropdown">
                            <button type="button" class="btn btn-danger  dropdown-toggle mt-1" data-bs-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </button>
                            <div class="dropdown-menu" id="dropdown-menu">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </div>
                                    @php $total = 0 @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <div class="col-md-6 text-end">
                                        <p><strong>Total: <span class="text-info">€{{ $total }}</span></strong></p>
                                    </div>
                                </div>
                                @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    <div class="row cart-detail pb-3 pt-2">
                                        <div class="col-lg-4 col-sm-4 col-4">
                                            <img src="{{ $details['image'] }}" class="img-fluid" />
                                        </div>
                                        <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                            <p class="mb-0">{{ $details['name'] }}</p>
                                            <span class="fs-8 text-info"> Price: €{{ $details['price'] }}</span> <br/>
                                            <span class="fs-8"> Quantity: {{ $details['quantity'] }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="text-center">
                                <a href="{{ route('cart') }}" class="btn btn-danger">View all</a>
                            </div>
                    {{-- -------------------------end basket--------------------------------------- --}}
                </div>
            </div>
        </nav>

        <main class="py-5 mx-0">
            @yield('content')
               
        </main>
      
      
      
    </div>
{{-- footer section-------------------------------------------------- --}}   




   <div class="footer-clean ">
    
    <footer>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 item">
                    <h3>Careers</h3>
                    <ul>
                        <li><a href="#">Job openings</a></li>
                        <li><a href="#">Employee success</a></li>
                        <li><a href="#">Benefits</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a>
                    <p class="copyright">Created by <a href="https://jvorte.github.io/Dimitris_Vortelinas/">D.Vortelinas</a> © 2024</p>
                </div>
            </div>
        </div>
    </footer>
</div>

 
  {{-- end footer section-------------------------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
