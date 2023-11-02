@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1>Directorates</h1>
    <div style="margin: 10px; margin: 10px; margin-left:905px;"><a class="btn btn-primary " href="{{route('directorates.create')}}">add Directorate</a></div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        @foreach($directorates as $directorate)
        <tbody>

            <td>{{$directorate->id}}</td>
            <td>{{$directorate->title}}</td>
            <td>
                <form action="{{ route('directorates.destroy',$directorate->id) }}" method="POST">

                {{-- <a class="btn btn-info" href="{{ route('directorates.show',$directorate->id) }}">Show</a> --}}

                <a class="btn btn-primary" href="{{ route('directorates.edit',$directorate->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>

        </tbody>
        @endforeach
    </table>
</div>

@endsection
