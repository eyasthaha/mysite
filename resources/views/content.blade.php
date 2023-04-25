@extends('layouts.master')
<link href="{{ asset('assets/css/content.css') }}" rel="stylesheet">

@section('content')
{{-- {{$posts}} --}}
<div class="featured-post">
    
    @foreach ($posts->slice(0,3) as $post)
        
            <div class="post-container">
                <img src="{{env('STORAGE_LOC').'/featured_images/'.$post['featured_image']}}" alt="">
                <a href="{{route('singlePage',$post['id'])}}">
                    <span class="texts">
                    <h3>{{$post['title']}}</h3>
                    <p>{!! Str::words($post['content'],15) !!}</p>
                    </span>
                </a>
            </div>
    @endforeach

</div>

@stop

@section('posts')
    
<h3>Recent posts</h3>
    <div class="list-container">

        @foreach ($posts as $post)
            <a href="{{route('singlePage',$post['id'])}}">
                <div class="post">
                    <img src="{{env('STORAGE_LOC').'/featured_images/'.$post['featured_image']}}" alt="">
                    <span class="post-text">
                        <h3>{{$post['title']}}</h3>
                        <p class="excerpt">{!! Str::words($post['content'],50) !!}
                        </p>
                        <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
                    </span>
                </div>
            </a>
        @endforeach

        {{-- <div class="post">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
            <span class="post-text">
                <h3>Resident Evil Games Are Super Cheap Right Now.</h3>
                <p>The highly anticipated Resident Evil 4 remake launches on March 24, but ahead of its arrival later this month, you can cash in 
                    on huge savings for other games in the franchise. Most notably, Resident Evil 2 and Resident Evil 3 
                    are on sale for just about every available platform--making this a great time to catch up on the nightmare-inducing action....
                </p>
                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
            </span>
        </div>
        <div class="post">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
            <span class="post-text">
                <h3>Resident Evil Games Are Super Cheap Right Now.</h3>
                <p>The highly anticipated Resident Evil 4 remake launches on March 24, but ahead of its arrival later this month, you can cash in 
                    on huge savings for other games in the franchise. Most notably, Resident Evil 2 and Resident Evil 3 
                    are on sale for just about every available platform--making this a great time to catch up on the nightmare-inducing action....
                </p>
                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
            </span>
        </div>
        <div class="post">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
            <span class="post-text">
                <h3>Resident Evil Games Are Super Cheap Right Now.</h3>
                <p>The highly anticipated Resident Evil 4 remake launches on March 24, but ahead of its arrival later this month, you can cash in 
                    on huge savings for other games in the franchise. Most notably, Resident Evil 2 and Resident Evil 3 
                    are on sale for just about every available platform--making this a great time to catch up on the nightmare-inducing action....
                </p>
                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
            </span>
        </div>
        <div class="post">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
            <span class="post-text">
                <h3>Resident Evil Games Are Super Cheap Right Now.</h3>
                <p>The highly anticipated Resident Evil 4 remake launches on March 24, but ahead of its arrival later this month, you can cash in 
                    on huge savings for other games in the franchise. Most notably, Resident Evil 2 and Resident Evil 3 
                    are on sale for just about every available platform--making this a great time to catch up on the nightmare-inducing action....
                </p>
                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
            </span>
        </div>
        <div class="post">
            <img src="{{asset('assets/images/1.jpg')}}" alt="">
            <span class="post-text">
                <h3>Resident Evil Games Are Super Cheap Right Now.</h3>
                <p>The highly anticipated Resident Evil 4 remake launches on March 24, but ahead of its arrival later this month, you can cash in 
                    on huge savings for other games in the franchise. Most notably, Resident Evil 2 and Resident Evil 3 
                    are on sale for just about every available platform--making this a great time to catch up on the nightmare-inducing action....
                </p>
                <span class="post-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;{{date('Y-m-d');}}</span>
            </span>
        </div> --}}
    </div>

@stop