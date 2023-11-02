@extends('layouts.master')
@section('content')
<div style="margin: 20px" class="container-fluid px-4 myDiv">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif
    <div style="margin: 10px; margin-left:855px;"><a class="btn btn-primary " href="{{route('imagess.create')}}">add image</a></div>
    @foreach ($images as $image )
    <div class="card" style="width: 18rem; position:relative; margin:10px">
    <img class="card-img-top" src="{{ Storage::url($image->image) }}" alt="Card image cap" style="height: 150px">
    <div class="">
        <div style="margin: 5px; position:relative">

        </div>
        <div style="margin: 5px;">
            <form action="{{ route('imagess.destroy',$image->id) }}" method="POST">

                <a style="margin-left: 25%;" class="btn btn-primary" href="{{ route('imagess.edit',$image->id) }}">Edit</a>
                @csrf
                @method('DELETE')

                <button style="margin-left: 20px" type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
    <div class="card-body">
     <h4>{{$image->name}}</h4>
    </div>
  </div>
  @endforeach
</div>
  @endsection
