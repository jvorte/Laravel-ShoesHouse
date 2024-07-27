@extends('layouts.app')

@section('content')
  {{-- breadcrumb section --}}
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Search Result</li>
        </ol>
      </nav>
    </div>
  {{--end breadcrumb section --}}

    {{-- result section --}}
    <div class="container">

      <h1 class="my-5">Search Result</h1>

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