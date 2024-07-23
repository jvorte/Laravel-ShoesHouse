{{-- @php( $contacts = App\Models\Store::all() )  μπορεις να φερεις δεδομενα απευθειας απο db--}} 
@extends('admin.admin-layout.admin-app')


@section('title')
    Edit Product
@endsection


@section('content') 
<div class="container" style="display: flex; justify-content: center;">
 
    <div class="card my-5" style="width: 800px;">
      
        <div class="card-body">
            <form action="{{ route('admin/create-products') }}" method="POST" enctype="multipart/form-data">
                @csrf
              
                    <div class="col-12">
                      <label for="inputAddress" class="form-label">Brand</label>
                      <input type="text" name="brandname" class="form-control" id="inputAddress" placeholder="" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                      <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div>
                    <div class="col-6">
                     
                      <label for="image" class="form-label">Image:</label>
                      <input type="file" name="image" id="image">
                    </div>
                    <div class="col-md-6">
                      <label for="inputState" class="form-label">Colour</label>
                      <select id="inputState" name="colour" class="form-select" required>
                        <option selected>Choose...</option>
                        <option>Black</option>
                        <option>White</option>
                        <option>Red</option>
                        <option>Grey</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="inputCity" class="form-label" >Price</label>
                      <input type="text" name="price" class="form-control" id="inputCity" required>
                    </div>
                     <div class="modal-footer">
                        <a class="btn btn-outline-danger" href="{{url('admin/products')}}" role="button">Close</a>
               
                        <button type="submit" class="btn btn-outline-primary ms-2">Save</button>
                </div>
              </form>
        </div>
      </div>
</div>

@endsection