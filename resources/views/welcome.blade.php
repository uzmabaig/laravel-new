@extends('layouts.app')


@section('content')
<div class="row">
  <div class="col-6 offset-2 mt-4">
  <h5>Welcome {{Auth::user()->name}}:</h5>
  <h5>There's a better way to grow.</h5>
  <p>Marketing,sales and services software that helps your business grow without compromise. Because "good for the business"
    should also mean "good for the customer."</p>
    <a href='{{route('logout')}}' class="btn btn-danger">Logout</a>
  
</div>
</div>
@endsection

