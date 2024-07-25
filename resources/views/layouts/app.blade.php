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
            <div class="container">
                <img src="images\addidas.png" alt="" srcset="" style="width: 130px;">
                <a class="navbar-brand text-white" href="{{ url('/home') }}">
                    {{ config('app.name', 'ShoesHouse') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    <li class="nav-item ">
                    <a class="nav-link text-white active" aria-current="page" href="#{{ url('/home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ url('/store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{url('/contact')}}">Contact</a>
                    </li>
                    </ul>
                    <form class="d-flex" method="GET" action="search" role="search">
                        <input class="form-control me-2" name="search"  placeholder="Search" aria-label="Search" required>
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
                                </div>
                            </li>
                        @endguest
                    </ul>
                          {{-- ----------------basket---------------------------- --}}
                          <div class="dropdown">
                            <button type="button" class="btn btn-danger  dropdown-toggle mt-1" data-bs-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </button>
                            <div class="dropdown-menu">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </div>
                                    @php $total = 0 @endphp
                                    @foreach((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <div class="col-md-6 text-end">
                                        <p><strong>Total: <span class="text-info">${{ $total }}</span></strong></p>
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
                                            <span class="fs-8 text-info"> Price: ${{ $details['price'] }}</span> <br/>
                                            <span class="fs-8 fw-lighter"> Quantity: {{ $details['quantity'] }}</span>
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

        <main class="py-4">
            @yield('content')
               
        </main>
      
      
      
    </div>
{{-- footer section-------------------------------------------------- --}}   

    <footer>
  
    <!-- Copyright -->
 
    <!-- Copyright -->
  </footer>
  {{-- end footer section-------------------------------------------------- --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
