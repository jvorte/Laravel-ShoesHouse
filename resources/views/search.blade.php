@extends('layouts.app')

@section('content')

<div class="container">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Search</li>
    </ol>
  </nav>
</div>
<div class="container">

<h1 class="my-5">Search Results</h1>

{{$search}}
</div>

  @endsection