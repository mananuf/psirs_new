@extends('layout.dashboard.master')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <form class="d-flex flex-wrap align-items-center">
                            <label for="inputPassword2" class="visually-hidden">Search</label>
                            <div class="me-3">
                                <input type="search" class="form-control my-1 my-md-0" id="inputPassword2"
                                    placeholder="Search...">
                            </div>
                            <label for="status-select" class="me-2">Sort By</label>
                            <div class="me-sm-3">
                                <select class="form-select my-1 my-md-0" id="status-select">
                                    <option selected="">All</option>
                                    <option value="1">Name</option>
                                    <option value="2">Post</option>
                                    <option value="3">Followers</option>
                                    <option value="4">Followings</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-end mt-3 mt-md-0">
                            <a href="{{route('admin.directorates.create')}}" 
                            class="btn dark-green-bg waves-effect waves-light"
                            >
                            <i class="mdi mdi-plus-circle me-1"></i> {{__('Add New')}}
                        </a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">{{__('Directorates')}}</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">{{__('Directorate Name')}}</th>
                                <th class="border-top-0">{{__('H.O.D')}}</th>
                                <th class="border-top-0">{{__('Description')}}</th>
                                <th class="border-top-0">{{__('Status')}}</th>
                                <th class="border-top-0">{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($directorates as $directorate)
                            <tr>
                                <td>
                                    <span class="ms-2">{{$directorate->title}}</span>
                                </td>
                                <td>
                                    <img src="{{asset('dashboard/images/users/user-2.jpg')}}" alt="user-pic"
                                        class="rounded-circle avatar-sm bx-shadow-lg" />
                                    <span class="ms-2">{{__('HOD')}}</span>
                                </td>
                                <td>{{$directorate->body}}</td>
                                <td><span class="badge rounded-pill bg-success">{{__('Active')}}</span></td>
                                <td>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                            class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="btn btn-xs btn-light"><i
                                            class="mdi mdi-eye"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive -->
            </div>
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
@endsection