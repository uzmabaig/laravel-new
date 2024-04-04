@extends('layouts.customerlayout')

@section('content')
<div class="row">
  <div class="col-8 offset-2 mt-4">
    <h3>All Customers:</h3>
    <a href="{{ route('add.customer') }}" class="btn btn-success btn-sm mb-3">Add new</a>
    <table class="table table-bordered table-striped">
      <tr>
        <td>Id</td>
        <td>Firstname</td>
        <td>Lastname</td>
        <td>Email</td>
        <td>Contact</td>
        <td>Action</td>
      </tr>
      @foreach ($data as $id => $customers)
      <tr>
        <td>{{$id+1}}</td>
        <td>{{$customers->firstname}}</td>
        <td>{{$customers->lastname}}</td>
        <td>{{$customers->email}}</td>
        <td>{{$customers->phonenumber}}</td>
        <td><a href="{{ route('view.customer',$customers->id) }}" class="btn btn-primary btn-sm">View</a>
          <a href= "{{ route('update.customer',$customers->id)}}" class="btn btn-warning btn-sm">Update</a>
          <a href= "{{ route('delete.customer',$customers->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  @endsection

  
