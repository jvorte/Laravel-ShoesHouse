<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg ">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/admin/dashboard') }}">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/admin/dashboard')}}">General</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ url('/admin/products')}}">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('admin/customer-contacts')}}">Customer Contacts</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                WareHouse
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Mens</a></li>
                <li><a class="dropdown-item" href="#">Womens</a></li>
                <li><a class="dropdown-item" href="#">Kids</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">All Products</a></li>
              </ul>
            </li>
   
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-danger" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    {{--end  navbar}}


    {{-- center section --}}
<div class="container ">
  {{-- title area --}}
  <h1 class="py-4">
    @yield('title')
  </h1>

<div class="container-fluid center-dashboard">

 @yield('content')
</div>
</div>
    {{-- end center section --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>