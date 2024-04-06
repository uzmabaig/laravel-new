@extends('layouts.customerlayout')


@section('content')
<div class="row">
  <div class="col-6 offset-3 mt-4">
    <h3>Update Customer:</h3>
    <form action="{{ route('update.customer',$data->id)}}" method="POST">
      @csrf
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="{{ $data->firstname }}" class="form-control @error('customerfirstname') is-invalid  @enderror" id="firstname" name="customerfirstname">
        <span class="text-danger">
          @error('customerfirstname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Price:</label>
        <input type="text" value="{{ $data->lastname }}"  class="form-control  @error('customerlastname') is-invalid  @enderror" id="lastname" name="customerlastname">
        <span class="text-danger">
          @error('customerlastname')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Name:</label>
        <input type="text" value="{{ $data->email }}" class="form-control @error('customeremail') is-invalid  @enderror" id="email" name="customeremail">
        <span class="text-danger">
          @error('customeremail')
          {{ $message }}
          @enderror
        </span>
      </div>
      <div class="mb-3">
        <label for="form-label">Price:</label>
        <input type="number" value="{{ $data->phonenumber }}"  class="form-control  @error('customerphone_number') is-invalid  @enderror" id="phonenumber" name="customerphone_number">
        <span class="text-danger">
          @error('customerphone_number')
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