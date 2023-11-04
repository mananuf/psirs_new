@extends('layouts.master')
@section('content')
<div style="margin: 100px">
    <div style="margin: 10px;"><a class="btn btn-primary " href="{{route('user.index')}}">back</a></div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>

            @endforeach
        </ul>

    </div>

    @endif
<form class="row g-3" method="POST" action="{{route('user.update', $user->id)}}">
    @csrf
    @method("PUT")
    <div class="col-md-6">
      <label for="title" class="form-label">Username</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" value="{{$user->name}}">
    </div>
    <div class="col-md-6">
      <label for="inputPassword4" class="form-label">New Password</label>
      <input type="password" name="password" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Confirm Password</label>
        <input id="password-confirm" type="password" name="password_confirmation" class="form-control" id="inputPassword4">
      </div>

    <div class="col-md-6">
        <label for="inputCity" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputCity" value="{{$user->email}}">
      </div>

    {{-- <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div> --}}
    {{-- <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div> --}}

    <div class="col-12">
      <button type="submit" class="btn btn-primary">Add</button>
    </div>
  </form>
</div>
@endsection
