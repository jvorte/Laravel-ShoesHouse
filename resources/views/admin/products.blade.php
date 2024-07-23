@extends('admin.admin-layout.admin-app')
{{-- @php( $products = App\Models\Product::all() ) --}}

@section('title')
    Products
@endsection


@section('content') 

{{-- nav --}}
<ul class="nav">
    <li class="nav-item">
      <a class="nav-link active text-dark" href="{{url('admin/create-products')}}">+new product</a>
    </li>   
</ul>
  {{--end nav --}}
 <div class="">

    {{--card --}}
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

        
          <a class="btn  btn-outline-success" href="{{ url('edit-products/'.$product->id) }}" role="button">Edit</a>
          <form action="{{ url('products/'.$product->id) }}" method="POST">
              @csrf
              @method('DELETE')
           
              <button type="submit" class="btn btn-outline-danger mt-2">Delete</button>
          </form>
      </div>
      
      </div>
    </div>
    @endforeach
 {{--end card --}}
        
 
</div>




@endsection
