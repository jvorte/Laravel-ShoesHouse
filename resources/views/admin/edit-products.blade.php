{{-- @php( $contacts = App\Models\Store::all() )  μπορεις να φερεις δεδομενα απευθειας απο db--}} 
@extends('admin.admin-layout.admin-app')


@section('title')
    Edit Product
@endsection


@section('content') 
<div class="container" style="display: flex; justify-content: center;">
 
    <div class="card my-5" style="width: 800px; ">
    
        <div class="card-body">
            <form class="row g-3 needs-validation" novalidate>

              <div class="col-md-7 position-relative">                              
                <img src="\{{$product->image}}" class="img-fluid rounded-start"  style="width: 280px; height: 280px;" alt="...">             
              </div>

                <div class="col-md-6 position-relative">
                  <label for="validationTooltip01" class="form-label">First name</label>
                  <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>
                <div class="col-md-6 position-relative">
                  <label for="validationTooltip02" class="form-label">Last name</label>
                  <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                  <div class="valid-tooltip">
                    Looks good!
                  </div>
                </div>

                <div class="col-md-6 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>

                  <div class="col-md-6 position-relative">
                    <label for="validationTooltip01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 position-relative">
                    <label for="validationTooltip02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
                    <div class="valid-tooltip">
                      Looks good!
                    </div>
                  </div>
                
               <div class="col-12">
                  <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
              </form>
        </div>
      </div>
</div>

@endsection