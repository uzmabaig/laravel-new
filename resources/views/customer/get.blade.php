@extends('layouts.customerlayout')


@section('content')
<div class="row">
    <div class="col-6 offset-3 mt-4">
        <h3>Customer Detail: </h3>
        <div class="mb-3">
            <label for="form-label">Firstname: {{ $data->firstname }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Lastname: {{ $data->lastname }}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Email: {{ $data->email}}</label>
        </div>
        <div class="mb-3">
            <label for="form-label">Contact: {{ $data->phonenumber }}</label>
        </div>
        
    </div>
</div>
@endsection


@section('title')
  View
@endsection