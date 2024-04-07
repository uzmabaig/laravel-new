@extends('layouts.customer')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>Add Customer:</h3>
    <form action="{{ route('add.customer')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Firstname:</label>
        <input type="text" value="{{ old('firstname')}}" class="form-control  @error('firstname') is-invalid  @enderror" id="firstname" name="firstname">
        <span class="text-danger">
          @error('firstname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Lastname:</label>
        <input type="text" value="{{ old('lastname') }}" class="form-control  @error('lastname') is-invalid  @enderror" id="lastname" name="lastname">
        <span class="text-danger">
          @error('lastname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Email:</label>
        <input type="text" value="{{ old('email')}}" class="form-control  @error('email') is-invalid  @enderror" id="email" name="email">
        <span class="text-danger">
          @error('email')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Contact:</label>
        <input type="number" value="{{ old('phonenumber') }}" class="form-control  @error('phonenumber') is-invalid  @enderror" id="phonenumber" name="phonenumber">
        <span class="text-danger">
          @error('phonenumber')
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
   Add
@endsection