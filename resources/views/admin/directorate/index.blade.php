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
                            class="btn dark-green-btn waves-effect waves-light"
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
                                <th class="border-top-0">{{__('Director')}}</th>
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
                                    @php
                                        $directorsImage = $directorate->media ? str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                                        $directorate->getFirstMediaPath('directors_image'))
                                        : 'images/avatar.jpg';
                                    @endphp
                                    <img src={{asset($directorsImage)}}
                                        alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                    <span class="ms-2">{{$directorate->directors_name}}</span>
                                </td>
                                <td>
                                    @if ($directorate->status === App\Enums\GenericStatus::enabled())
                                        <span class="badge rounded-pill bg-success">{{$directorate->status}}</span>
                                    @endif
                                    @if ($directorate->status === App\Enums\GenericStatus::disabled())
                                        <span class="badge rounded-pill bg-error">{{$directorate->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.directorates.edit', $directorate)}}" class="btn btn-xs btn-light"><i
                                            class="mdi mdi-pencil"></i></a>
                                    <a class="btn btn-xs btn-light" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$directorate->id}}">
                                        <i class="mdi mdi-trash-can"></i>
                                    </a>
                                </td>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal-{{$directorate->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('admin.directorates.destroy', $directorate)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal-{{$directorate->id}}">Delete {{$directorate->title}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete <span class="modal-title">{{$directorate->title}}</span>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                                                    <button type="submit" class="btn btn-primary">Yes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
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