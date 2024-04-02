@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>Add Product</h3>
    <form action="{{ route('add.product')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="{{ old('productname')}}" class="form-control  @error('productname') is-invalid  @enderror" id="name" name="productname">
        <span class="text-danger">
          @error('productname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Price:</label>
        <input type="number" value="{{ old('productprice') }}" class="form-control  @error('productprice') is-invalid  @enderror" id="price" name="productprice">
        <span class="text-danger">
          @error('productprice')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
@endsection

@section('title')
   add
@endsection