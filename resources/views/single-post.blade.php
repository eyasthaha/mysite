@extends('layouts.single')

@section('title',$post['title'])

@section('post')
    <h2>{{$post['title']}}</h2>
    <img src="{{env('STORAGE_LOC').'/featured_images/'.$post['featured_image']}}" alt="">

    <p class="post-content">
        {!!$post['content']!!}
    </p>



@endsection