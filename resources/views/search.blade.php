@extends('layouts.app')

@section('content')


    {{-- result section --}}
    <div class="container">

     <!-- Heading -->
  <div class="bg-body-tertiary mb-5">
    <h1 class="">Search Result</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex">
      <h6 class="mb-0">
        <a href="{{ url('/home') }}" class="text-reset">Home</a>
        <span>/</span>
        <a href="{{ url('/store') }}" class="text-reset">Store</a>
        <span>/</span>
        <a href="" class="text-reset"><u>Search Result</u></a>
      </h6>
    </nav>
    <!-- Breadcrumb -->
  </div>
  <!-- Heading -->

    @if (count($results) > 0)
    <ul>
        @foreach ($results as $result)
         <div class="card text-center my-3 mx-3 product-card" style="width: 15.3rem; height:500px">
        <img src="\{{$result->image}}" class="card-img-top" style="width: auto; height:170px" alt="...">
      
  
        <div class="card-body">
          <h5 class="card-title">Brand: {{$result->brandname}}</h5>
          <p class="card-text" id="text-hide" >{{$result->description}}</p>
        </div>
        <ul class="list-group list-group-flush">
       
          <li class="list-group-item">Color: {{$result->colour}}</li>
          <li class="list-group-item">Price: {{$result->price}} €</li>
        </ul>

        <div class="card-body">
          <div>       
      {{-- <button type="button" class="btn btn-outline-danger">Buy</button> --}}
      <a href="{{ route('add.to.cart', $result->id) }}" class="btn btn-outline-danger btn-block text-center" role="button">Add to cart</a>
        </div>       
        </div>

      </div>
        @endforeach
    </ul>
@else
    <p>No results found.</p>
@endif

    </div>

      {{--end result section --}}
@endsection