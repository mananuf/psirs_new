@extends('layout.dashboard.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success">
                                <i class="font-24 avatar-title text-success">
                                    <i class="fa fa-briefcase"></i>
                                </i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$directoratesCount}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">{{__('Directorates')}}</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-info">
                                <i class="font-24 avatar-title text-info">
                                    <i class="fa fa-file-image"></i>
                                </i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$imagesCount}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">{{__('Images')}}</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-warning">
                                <i class="font-24 avatar-title text-warning">
                                    <i class="fa fa-comments"></i>
                                </i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$postsCount}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">{{__('Posts')}}</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    
        <div class="col-md-6 col-xl-3">
            <div class="widget-rounded-circle card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-primary">
                                <i class="font-24 avatar-title text-primary">
                                    <div class="fa fa-users"></div>
                                </i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-end">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">{{$usersCount}}</span></h3>
                                <p class="text-muted mb-1 text-truncate">{{__('Users')}}</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div>
            </div> <!-- end widget-rounded-circle-->
        </div> <!-- end col-->
    </div>
    <!-- end row -->
    
    {{-- users row  --}}
    {{-- <div class="row">
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="card-widgets">
                        <a href="javascript: void(0);" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                        <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false"
                            aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                        <a href="javascript: void(0);" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                    </div>
                    <h4 class="header-title mb-0">{{__('Total Users')}}</h4>
        
                    <div id="cardCollpase3" class="collapse show">
                        <div class="text-center pt-3">
                            <div id="total-users" data-colors="#00acc1,#4b88e4,#e3eaef,#fd7e14"></div>
                            <div class="row mt-3">
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">{{__('All')}}</p>
                                    <h4><i class="fe-arrow-down text-danger me-1"></i>{{$usersCount}}</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">{{__('Staff')}}</p>
                                    <h4><i class="fe-arrow-up text-success me-1"></i>{{$users->count()}}</h4>
                                </div>
                                <div class="col-4">
                                    <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                    <h4><i class="fe-arrow-up text-success me-1"></i>28k</h4>
                                </div>
                            </div> <!-- end row -->
                        </div>
                    </div> <!-- collapsed end -->
                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div>
    
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="dropdown float-end">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>
    
                    <h4 class="header-title mb-0">Total Revenue</h4>
    
                    <div class="widget-chart text-center" dir="ltr">
    
                        <div id="world-map-markers" style="height: 230px" class="mt-4"></div>
    
                        <h5 class="text-muted mt-4">Total sales made today</h5>
                        <h2>$178</h2>
    
                        <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best
                            in the meat of your page content.</p>
    
                        <div class="row mt-4">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$7.8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4><i class="fe-arrow-up text-success me-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4><i class="fe-arrow-down text-danger me-1"></i>$15k</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div> <!-- end col-->
    </div> --}}
    <!-- end row -->
    
    
    <div class="row">
        @if ($directoratesCount > 0)
            <div class="col-xl-6">
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
                                                <img src="{{ asset($directorsImage) }}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ms-2">{{$directorate->directors_name}}</span>
                                            </td>
                                            <td>
                                                @if ($directorate->status === \App\Enums\GenericStatus::enabled())
                                                    <span class="badge rounded-pill bg-success">{{__('Enabled')}}</span>
                                                @endif
                                                @if ($directorate->status === \App\Enums\GenericStatus::disabled())
                                                    <span class="badge rounded-pill bg-danger">{{__('Disabled')}}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        @endif
        @if ($postsCount > 0)
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">{{__('Recent Posts')}}</h4>
            
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">{{__('Title')}}</th>
                                        <th class="border-top-0">{{__('Post')}}</th>
                                        <th class="border-top-0">{{__('Added Date')}}</th>
                                        <th class="border-top-0">{{__('Added By')}}</th>
                                        <th class="border-top-0">{{__('Status')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                @php
                                                $postImage = $post->media ?
                                                str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                                                $post->getFirstMediaPath('post_image'))
                                                : 'images/avatar.jpg';
                                                @endphp
                                                <img src={{asset($postImage)}} alt="user-pic" height="36" class="rounded-circle avatar-sm bx-shadow-lg" />
                                                <span class="ms-2">{{Str::limit($post->title, 20)}}</span>
                                            </td>
                                            <td>
                                                {{Str::limit($post->body, 20)}}
                                            </td>
                                            <td>{{now()->parse($post->created_at)->format('M d Y')}}</td>
                                            <td>{{__('User')}}</td>
                                            <td>
                                                @if ($post->status === \App\Enums\GenericStatus::enabled())
                                                <span class="badge rounded-pill bg-success">{{__('Enabled')}}</span>
                                                @endif
                                                @if ($post->status === \App\Enums\GenericStatus::disabled())
                                                <span class="badge rounded-pill bg-danger">{{__('Disabled')}}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive -->
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        @endif
    {{-- </div>
    <div class="row"> --}}
        @if ($imagesCount > 0)
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">{{__('Recent Posts')}}</h4>
                        <div class="row">
                            @foreach ($images as $image)
                            <div class="col-2">
                                <img src="{{asset('storage/'.$image->id.'/'.$image->file_name)}}" alt="" class="avatar-lg">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- end card-->
            </div> <!-- end col-->
        @endif
    </div>
@endsection