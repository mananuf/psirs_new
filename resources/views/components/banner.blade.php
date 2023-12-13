@props(['bigHeading', 'smallHeading', ])
<section class="uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>{{$bigHeading}}</h1>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li>{{$smallHeading}}</li>
            </ul>
        </div>
    </div>
</section>