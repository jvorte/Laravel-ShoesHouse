{{-- @php( $contacts = App\Models\Store::all() )  μπορεις να φερεις δεδομενα απευθειας απο db--}} 
@extends('admin.admin-layout.admin-app')


@section('title')
         <!-- Heading -->
         <div class="bg-body-tertiary my-5">
          <h1 class="">Contacts</h1>
          <!-- Breadcrumb -->
          <nav class="d-flex">
            <h6 class="mb-0">
              <a href="{{ url('/home') }}" class="text-reset">Home</a>
              <span>/</span>
                    <a href="" class="text-reset"><u>Contacts</u></a>
            </h6>
          </nav>
          <!-- Breadcrumb -->
        </div>
        <!-- Heading -->
@endsection


@section('content') 
<div class="container">

  {{-- contact card --}}

  @foreach($contacts as $contact)
  <div class="card my-3" style="">
    <div class="card-body">
      <h5 class="card-title">Message from:  {{ $contact->name }} {{ $contact->lastname }} Email: {{ $contact->email }}</h5>
      <h6 class="card-subtitle mb-2 text-muted"> City: {{ $contact->city }} State: {{ $contact->state }} Zip: {{ $contact->zip }}</h6>
      <p class="card-text">{{ $contact->message }}</p>
      <p class="card-text">      Date: {{ $contact->created_at }} </p>
      <a href="#" class="card-link">reply</a>
      <a href="#" class="card-link">delete</a>
     
    </div>
  </div>
      @endforeach
{{-- contact card --}}

</div>

@endsection