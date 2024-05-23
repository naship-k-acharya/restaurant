@extends('layout')
@section('content')
<div>
    <h1>list of Resturant</h1>
    @if(session()->get('status'))
    <div class="alert alert-success" role="alert">
    This is a success alert—check it out!
        </div>
    @endif
    <table class="table">
    @csrf
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
      <th>edit</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->address}}</td>
      <td> <a href="delete/{{$item->id}} "><i class="fa fa-trash"></i></a></td>
    </tr>
    
    @endforeach
  </tbody>
</table>
    
    
    
</div>
@stop