@extends('layout.main')
@section('content')
    <section class="blog-details pt-70 pb-100">
        <div class="container">
            <div class="row ">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="blog-card">
                            <div class="blog-card-img">
                                @php
                                    $postImage = $post->media ?
                                    str_replace('/Users/mac/Documents/psirs-new/storage/app/public/', 'storage/',
                                    $post->getFirstMediaPath('post_image'))
                                    : 'images/avatar.jpg';
                                @endphp
                                <a href="{{route('posts.show', $post)}}"><img src="{{asset($postImage)}}" style="height: 20rem" alt="image"></a>
                            </div>
                            <div class="blog-card-text-area">
                                <div class="blog-date">
                                    <ul>
                                        <li><i class="fas fa-user"></i> By <a href="posted-by.html">Admin</a></li>
                                        <li><i class="far fa-comments"></i> No Comment</li>
                                        <li><i class="far fa-calendar-alt"></i> {{now()->parse($post->created_at)->format('M d, Y')}}</li>
                                    </ul>
                                </div>
                                <h4><a href="{{route('posts.show', $post)}}">{{$post->title}}</a></h4>
                                <p>{{Str::limit($post->body, 80)}}</p>
                                <a class="read-more-btn" href="{{route('posts.show', $post)}}">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="paginations mt-30">
                {{$posts->links()}}
            </div>
        </div>
    </section>
@endsection