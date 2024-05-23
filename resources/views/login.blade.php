@extends('layout')
@section('content')
<div>
    <h1>User login page</h1>
    <form method="post" action="login">
    @csrf

  <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label >password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter password">
    
  </div>

    
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop