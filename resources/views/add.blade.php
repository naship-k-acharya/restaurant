@extends('layout')
@section('content')
<div>
    <h1>Add new Resturant</h1>
    <form method="post" action="add">
    @csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
    
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" placeholder="Enter address">
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop