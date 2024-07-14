@extends('layouts.product')


@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>Update Product</h3>
    <form action="{{ route('update.product',$data->id)}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="{{ $data->name }}" class="form-control @error('name') is-invalid  @enderror" id="name" name="name">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Price:</label>
        <input type="number" value="{{ $data->price }}"  class="form-control  @error('price') is-invalid  @enderror" id="price" name="price">
        <span class="text-danger">
          @error('price')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="submit">Update</button>
      </div>
    </form>
    
  </div>
</div>
@endsection

@section('title')
   Update
@endsection