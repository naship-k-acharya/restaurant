@extends('layout')
@section('content')

<div>
    <h1>Search the resturent</h1>
    
    @csrf
    <div class="input-group">
    <input class="form-control  " type="search" placeholder="Search" aria-label="Search">
    <div class="input-group-append">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </div>
</div>
</div>

</div>
@stop