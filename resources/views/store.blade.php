@extends('layouts.app')
{{-- @php( $products = App\Models\Product::all() ) --}}
@section('content')

<div class="container">

  <!-- Heading -->
  <div class="bg-body-tertiary mb-5">
    <h1 class="">Store</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex">
      <h6 class="mb-0">
        <a href="{{ url('/home') }}" class="text-reset">Home</a>
        <span>/</span>
        <a href="" class="text-reset"><u>Store</u></a>
      </h6>
    </nav>
    <!-- Breadcrumb -->
  </div>
  <!-- Heading -->

  {{-- message added to cart successfully! --}}
  <div class="row mt-3">
    <div class="col-md-10 offset-md-1"> 
        @if(session('success'))
            <div class="alert alert-success">
              {{ session('success') }}
            </div> 
        @endif
      
        @yield('content')
    </div>
</div>

  {{-- end message added to cart successfully! --}}
  {{-- second navbar area --}}
  <ul class="nav text-bg-danger justify-content-end">
   
    <div class="dropdown">
      <a class="btn dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Sort by
      </a>
    
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </ul>

  {{-- end second navbar area --}}


</div>


    {{--card --}}
    <div class="container ">

      @foreach ($products as $product)
      <div class="card text-center my-3 mx-3 product-card " style="width: 15.3rem; height:500px">
        <img src="\{{$product->image}}" class="card-img-top zoom" style="width: auto; height:170px" alt="...">
      
  
        <div class="card-body">
          <h5 class="card-title">Brand: {{$product->brandname}}</h5>
          <p class="card-text" id="text-height" >{{$product->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
       
          <li class="list-group-item">Color: {{$product->colour}}</li>
          <li class="list-group-item">Price: {{$product->price}} €</li>
        </ul>

        <div class="card-body">
          <div>       
      {{-- <button type="button" class="btn btn-outline-danger">Buy</button> --}}
      <a href="{{ route('add.to.cart', $product->id) }}" class="btn btn-outline-danger btn-block text-center" role="button">Add to cart</a>
        </div>       
        </div>

      </div>
      @endforeach
   
  
        {{--end card --}}
        
    </div>
   
  @endsection
