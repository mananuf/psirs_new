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
                            <a href="{{route('admin.posts.create')}}"
                                class="btn dark-green-bg waves-effect waves-light">
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
                <h4 class="header-title mb-3">{{$pageTitle}}</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="border-top-0">{{__('Post Title')}}</th>
                                <th class="border-top-0">{{__('Image')}}</th>
                                <th class="border-top-0">{{__('Post Content')}}</th>
                                <th class="border-top-0">{{__('Status')}}</th>
                                <th class="border-top-0">{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogPosts as $post)
                            <tr>
                                <td>
                                    <span class="ms-2">{{$post->title}}</span>
                                </td>
                                <td>
                                    @php
                                    $postImage = $post->media ?
                                    str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                                    $post->getFirstMediaPath('post_image'))
                                    : 'images/avatar.jpg';
                                    @endphp
                                    <img src={{asset($postImage)}} alt="user-pic"
                                        class="rounded-circle avatar-sm bx-shadow-lg" />
                                </td>
                                <td>{{Str::limit( $post->body, 50)}}</td>
                                <td>
                                    @if ($post->status === App\Enums\GenericStatus::enabled())
                                    <span class="badge rounded-pill bg-success">{{$post->status}}</span>
                                    @endif
                                    @if ($post->status === App\Enums\GenericStatus::disabled())
                                    <span class="badge rounded-pill bg-error">{{$post->status}}</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{route('admin.posts.edit', $post)}}"
                                        class="btn btn-xs btn-light"><i class="mdi mdi-pencil"></i></a>
                                    <a class="btn btn-xs btn-light" data-bs-toggle="modal"
                                        data-bs-target="#deleteModal-{{$post->id}}">
                                        <i class="mdi mdi-trash-can"></i>
                                    </a>
                                </td>
                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal-{{$post->id}}" data-bs-backdrop="static"
                                    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="{{route('admin.posts.destroy', $post)}}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModal-{{$post->id}}">Delete
                                                        {{$post->title}}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete <span
                                                        class="modal-title">{{$post->title}}</span>?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger"
                                                        data-bs-dismiss="modal">No</button>
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