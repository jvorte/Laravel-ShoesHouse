@extends('layouts.app')

@section('content')
  {{-- breadcrumb section --}}
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">contact</li>
        </ol>
      </nav>
    </div>
  {{--end breadcrumb section --}}

    {{-- form section --}}
    <div class="container">

        <h1 class="my-5">Contact</h1>

        <form method="POST" class="row g-3 needs-validation" novalidate>
            @csrf
            <div class="col-md-4">
              <label for="validationCustom01" class="form-label">First name</label>
              <input type="text" class="form-control" id="validationCustom01" name="name" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Lastname</label>
              <input type="text" class="form-control" id="validationCustom02" name="lastname" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4">
              <label for="validationCustom02" class="form-label">Email</label>
              <input type="email" class="form-control" id="validationCustom02" name="email" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
              </div>
            <div class="col-md-6">
              <label for="validationCustom03" class="form-label">City</label>
              <input type="text" class="form-control" id="validationCustom03" name="city" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">State</label>
              <select class="form-select" id="validationCustom04" name="state" required>
                <option selected disabled value="">Choose...</option>
                <option>Greece</option>
                <option>England</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid state.
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Zip</label>
              <input type="text" class="form-control" name="zip" id="validationCustom05" required>
              <div class="invalid-feedback">
                Please provide a valid zip.
              </div>
            </div>
        
            <div class="col-12">
              <button class="btn btn-primary" type="submit">Send Message</button>
            </div>
          </form>
    </div>
      {{--end form section --}}
@endsection