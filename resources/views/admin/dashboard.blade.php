@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1>Blog posts</h1>
    <div style="margin: 10px; position: relative;left:1050px;"><a class="btn btn-primary " href="{{route('blog.create')}}">add post</a></div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

@endsection
