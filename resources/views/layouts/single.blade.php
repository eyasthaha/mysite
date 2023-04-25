<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/singlepage.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
  />
</head>
<body>
    @include('reusable.header')
    <div class="singlepage-container">
        <div class="post-view">
            @yield('post')
            <h4>Share this Post :</h4>
            {!!
                $shareComponent = \Share::page(
                    url()->full()
                )
                ->facebook()
                ->twitter()
                // ->linkedin()
                ->telegram()
                ->whatsapp()        
                ->reddit();
            !!}
        </div>
        <div class="right-sidebar">
            @include('right-sidebar')
        </div>
    </div>
    <div class="comments-container">
        <div class="post-your-cmt">
            <h4>Leave a comment</h4>
            <form action="{{route('comment.add')}}" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{$post['id']}}">
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <textarea name="comment" id="" placeholder="Post your comment.." required></textarea><br>
                <button type="submit">Post comment</button>
            </form>

        </div><br>
        <div class="comments">
        <h3>Comments</h3>
        @foreach (\App\Models\Comments::where('post_id',$post['id'])->get(); as $item)
                <h5>{{$item['name']}}</h5>
                <p>{{$item['comment']}}</p>
                <p class="date"></i>{{date('Y-m-d',strtotime($item['created_at']))}}</p>
                @endforeach
            </div>
    </div>
    @include('reusable.footer')
</body>
</html>