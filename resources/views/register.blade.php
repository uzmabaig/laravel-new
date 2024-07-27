@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
   <h4>Register:</h4>
    <form action="{{route('registerSave')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="" class="form-control  @error('name') is-invalid  @enderror" id="name" name="name">
        <span class="text-danger">
          @error('name')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Email:</label>
        <input type="email" value="" class="form-control  @error('email') is-invalid  @enderror" id="email" name="email">
        <span class="text-danger">
          @error('email')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Password:</label>
        <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password">
        <span class="text-danger">
          @error('password')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Confirm Password:</label>
        <input type="password" value="" class="form-control  @error('password') is-invalid  @enderror" id="password" name="password_confirmation">
        <span class="text-danger">
          @error('password')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary" type="submit" name="submit">Register</button>
        <a href='/login' class="btn btn-primary">Login</a>
      </div>
    </form>
  </div>
</div>
@endsection

@section('title')
   register
@endsection