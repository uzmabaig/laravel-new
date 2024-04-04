@extends('layouts.customerlayout')

@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>Add Customer:</h3>
    <form action="{{ route('add.customer')}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Firstname:</label>
        <input type="text" value="{{ old('customerfirstname')}}" class="form-control  @error('customerfirstname') is-invalid  @enderror" id="firstname" name="customerfirstname">
        <span class="text-danger">
          @error('customerfirstname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Lastname:</label>
        <input type="text" value="{{ old('customerlastname') }}" class="form-control  @error('customerlastname') is-invalid  @enderror" id="lastname" name="customerlastname">
        <span class="text-danger">
          @error('customerlastname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Email:</label>
        <input type="text" value="{{ old('customeremail')}}" class="form-control  @error('customeremail') is-invalid  @enderror" id="email" name="customeremail">
        <span class="text-danger">
          @error('customeremail')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Contact:</label>
        <input type="number" value="{{ old('customerphone_number') }}" class="form-control  @error('customerphone_number') is-invalid  @enderror" id="phonenumber" name="customerphone_number">
        <span class="text-danger">
          @error('customerphone_number')
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