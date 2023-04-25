
<link href="{{ asset('assets/css/trending.css') }}" rel="stylesheet">

<h3>Trending</h3>

<div class="trending-posts">

    @foreach (\App\Models\posts::get(); as $post)
    <div class="posts">
        <a href="">
            <div class="imagesss">
                <img src="{{env('STORAGE_LOC').'/featured_images/'.$post['featured_image']}}" alt="">
            </div>
            <div class="post-text"><h5>{{$post['title']}}</h5></div>
        </a>
    </div>
    @endforeach

    {{-- <div class="posts">
        <img src="{{asset('assets/images/1.jpg')}}" alt="">
        <div class="post-text"><h5>Resident Evil Games Are Super Cheap Right Now.</h5></div>
    </div>
    <div class="posts">
        <img src="{{asset('assets/images/1.jpg')}}" alt="">
        <div class="post-text"><h5>Resident Evil Games Are Super Cheap Right Now.</h5></div>
    </div>
    <div class="posts">
        <img src="{{asset('assets/images/1.jpg')}}" alt="">
        <div class="post-text"><h5>Resident Evil Games Are Super Cheap Right Now.</h5></div>
    </div>
    <div class="posts">
        <img src="{{asset('assets/images/1.jpg')}}" alt="">
        <div class="post-text"><h5>Resident Evil Games Are Super Cheap Right Now.</h5></div>
    </div> --}}
</div>