@extends('layouts.master')
@section('content')
<div style="margin: 100px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif
<form class="row g-3" method="POST" action="{{route('imagess.update',$imagess->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="col-md-6">
      <label for="title" class="form-label">TITLE</label>
      <input type="text" value="{{$imagess->name}}" name="name" class="form-control" id="inputEmail4">
    </div>
    {{-- <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div> --}}
    <div class="col-md-4">
        <label for="inputState" class="form-label">Image category</label>
        <select  name="category_id" id="inputState" class="form-select">
            <option selected value="{{$imagess->category_id}}">{{$imagess->category->name}}</option>
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
    <div class="col-md-6">
        <img class="card-img-top" src="{{ Storage::url($imagess->image) }}" alt="Card image cap" style="height: 250px">
        <label for="inputCity" class="form-label">Featured image</label>
        <input type="file" name="image" class="form-control" id="inputCity" value="{{$imagess->name}}">
      </div>

    {{-- <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> --}}

    <div class="col-12">
      <button type="submit" class="btn btn-primary">update</button>
    </div>
  </form>
</div>
@endsection
