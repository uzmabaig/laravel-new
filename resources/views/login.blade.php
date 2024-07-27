@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
  <h4>Login:</h4>
    <form action="{{route('loginMatch')}}" method="POST">
      @csrf
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
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
       
      </div>
    </form>
  </div>
</div>
@endsection

@section('title')
   login
@endsection