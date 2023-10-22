@extends('layouts.master')
@section('content')
<div style="margin: 100px">
    <div style="margin: 10px;"><a class="btn btn-primary " href="{{route('directorate.index')}}">back</a></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif
<form class="row g-3" method="POST" action="{{route('directorate.store')}}">
    @csrf
    <div class="col-md-6">
      <label for="title" class="form-label">TITLE</label>
      <input type="text" name="title" class="form-control" id="inputEmail4">
    </div>
    {{-- <div class="col-md-6">
      <label for="inputPassword4" class="form-label">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div> --}}
    {{-- <div class="col-md-6">
        <label for="inputCity" class="form-label">Featured image</label>
        <input type="file" class="form-control" id="inputCity">
      </div> --}}
    <div class="col-12">
        <label><strong>Conent :</strong></label>
        <textarea class="summernote" name="body"></textarea>
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
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </form>
</div>
@endsection
