@extends('layouts.app')
{{-- @php( $products = App\Models\Product::all() ) --}}
@section('content')

<div class="container">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Store</li>
    </ol>
  </nav>

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
    <div class="container">

      @foreach ($products as $product)
      <div class="card text-center my-3 mx-3 product-card" style="width: 15.3rem; height:500px">
        <img src="\{{$product->image}}" class="card-img-top" style="width: auto; height:170px" alt="...">
      
  
        <div class="card-body">
          <h5 class="card-title">Brand: {{$product->brandname}}</h5>
          <p class="card-text">{{$product->description}}</p>
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
