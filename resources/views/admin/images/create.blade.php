@extends('layouts.master')
@section('content')
<div style="margin: 100px">
    <div style="margin: 10px; position: relative;left:1025px;"><a class="btn btn-primary " href="{{route('imagess.index')}}">back</a></div>
<form class="row g-3" method="POST" action="{{route('imagess.store')}}">
    @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">TITLE</label>
      <input type="text" name="name" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-4">
        <label for="inputState" class="form-label">Image category</label>
        <select id="inputState" name="category_id" class="form-select">
          <option selected>Choose...</option>
          @foreach($categories as $category)
          <option>{{$category->name}}</option>
          @endforeach
        </select>
      </div>
    <div class="col-md-6">
        <label for="inputCity" class="form-label">Featured image</label>
        <input type="file" name="image" class="form-control" id="inputCity">
      </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">post</button>
    </div>
  </form>
</div>
@endsection
