
@extends('layouts.master')
@section('content')
<div class="container-fluid px-4">
    <h1>Users</h1>
    <div style="margin: 10px; margin-left:905px;"><a class="btn btn-primary" href="{{route('user.create')}}">add user</a></div>
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@push('child-scripts')
<script type="text/javascript">
    $(function () {

 var table = $('.data-table').DataTable({
     processing: true,
     serverSide: true,
     ajax: "{{ route('user.index') }}",
     columns: [
         {data: 'id', name: 'id'},
         {data: 'name', name: 'name'},
         {data: 'email', name: 'email'},
         {data: 'action', name: 'action', orderable: false, searchable: true},
     ]
 });

});
</script>
 {{-- datatables --}}
     {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet"> --}}
     <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
     <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
     {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
     <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
@endpush

@endsection
