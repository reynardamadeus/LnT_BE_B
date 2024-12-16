@extends('layout.app')

@section('content')
<h1>Create New Inventory</h1>
<form action="{{route('product.create')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="{{old('name')}}">
    </div>
    @error('name')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Description</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="description"  value="{{old('description')}}">
    </div>
    @error('description')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Stock</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="stock"  value="{{old('stock')}}">
    </div>
    @error('stock')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Price</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" name="price" value="{{old('price')}}">
    </div>
    @error('price')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Production Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1" name="production_date"  value="{{old('production_date')}}">
    </div>
    @error('production_date')
        <p class="alert alert-danger">{{$message}}</p>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
