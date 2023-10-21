@extends('layouts.master')
@section('content')
<div style="margin: 20px" class="container-fluid px-4">
    <div style="margin: 10px; position: relative;left:1025px;"><a class="btn btn-primary " href="{{route('imagess.create')}}">add image</a></div>
    @foreach ($images as $image )
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="button" onClick="updateData()">
        <i class="fa fa-edit" style="font-size:24px"></i>
    </div>
    <div class="button" onClick="deleteData()">
        <span aria-hidden="true" style="font-size:40px">&times;</span>
    </div>
    <div class="card-body">
     <h4>{{$image->name}}</h4>
    </div>
  </div>
  @endforeach
</div>
  @endsection
