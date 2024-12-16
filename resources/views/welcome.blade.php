@extends('layout.app')

@section('content')
<h1>Our Inventory</h1>
@forelse ($books as $b)
<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$b->name}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$b->stock}}</h6>
      <p class="card-text">{{$b->description}}</p>
      <h6 class="card-subtitle mb-2 text-body-secondary">Price: {{$b->price}}</h6>
      <h6 class="card-subtitle mb-2 text-body-secondary">Prod.: {{$b->production_date}}</h6>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
@empty
  <p class="alert alert-warning">No Inventory Data detected</p>
@endforelse
@endsection
