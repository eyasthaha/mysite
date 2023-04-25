@extends('layouts.admin')

<link href="{{ asset('assets/admin/css/addpost.css') }}" rel="stylesheet">


@section('title','All Post')


@section('admin_content')

<div class="container-fluid py-4 px-5">

    @foreach ($posts as $post)
        <div class="list-container {{$post['status'] ? 'deleted' : ''}}">
            <img src="{{env('STORAGE_LOC').'/featured_images/'.$post['featured_image']}}" alt="">
            <div class="texts">
                <h5>{{$post['title']}}</h5>
                <p class="content">
                        {!! Str::words($post['content'],30) !!}
                </p>
            </div>
            <div class="action">

                @if ($post['status'])
                    <p>Deleted</p>
                @else
                    <a href="{{route('post.editPost',$post['id'])}}" @disabled(true)><button style="background-color: #0f172a"><i class="fa fa-pen"></i></button></a>
                    <a href="{{route('post.deletePost',$post['id'])}}"><button onclick="return confirm('Are you sure?')" style="background-color: rgb(214, 38, 38)"><i class="fa fa-trash"></i></button></a>
                @endif
                
            </div>
            <div class="view-count"><i class="fa fa-eye"></i>{{\App\Models\Postview::where('post_id',$post['id'])->count('post_id');}}</div>
        </div>
    @endforeach

</div>

@endsection