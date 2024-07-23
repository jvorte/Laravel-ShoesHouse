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
</div>


    {{--card --}}
    <div class="container">

      @foreach ($products as $product)
      <div class="card text-center my-3 mx-3 product-card" style="width:  17.6rem;">
        <img src="\{{$product->image}}" class="card-img-top" style="height: 200px" alt="...">
      
  
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
      <button type="button" class="btn btn-outline-danger">Buy</button>
        </div>       
        </div>

      </div>
      @endforeach
   
  
        {{--end card --}}
    </div>
   
  @endsection
