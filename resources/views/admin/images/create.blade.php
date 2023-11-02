@extends('layouts.master')
@section('content')
<div style="margin: 100px">
    <div style="margin: 10px; position: relative;left:1025px;"><a class="btn btn-primary " href="{{route('imagess.index')}}">back</a></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif
<form class="row g-3" method="POST" action="{{route('imagess.store')}}" enctype="multipart/form-data">
    @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Image category</label>
        <select  name="category_id" id="inputState" class="form-select">
          <option ></option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Featured image</label>
        <input type="file" name="image" class="form-control" id="inputCity">
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">upload</button>
    </div>
  </form>
</div>
@endsection
