@extends('layouts.app')

@section('content')


    {{-- form section --}}
    <div class="container">

               <!-- Heading -->
               <div class="bg-body-tertiary mb-5">
                <h1 class="">Contact</h1>
                <!-- Breadcrumb -->
                <nav class="d-flex">
                  <h6 class="mb-0">
                    <a href="{{ url('/home') }}" class="text-reset">Home</a>
                    <span>/</span>
                    <a href="" class="text-reset"><u>Contact</u></a>
                  </h6>
                </nav>
                <!-- Breadcrumb -->
              </div>
              <!-- Heading -->
          

        <form method="POST" class="row g-3 needs-validation my-5" novalidate>
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