
@extends('layouts.product')


@section('content')
<div class="row">
    <div class="col-6 offset-3 mt-4">
        <h3> Product Detail: </h3>
        <div class="mb-3">
            <label for="form-label">Name: {{ $data->name }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Price: {{ $data->price }}</label>
        </div>
        
    </div>
</div>
@endsection


@section('title')
  View
@endsection