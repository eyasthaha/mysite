@extends('layouts.admin')

<link href="{{ asset('assets/admin/css/addpost.css') }}" rel="stylesheet">

@section('title','Add Post')

@section('admin_content')


    <div class="container-fluid py-4 px-5">
        <form action="{{route('post.addPost')}}" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$editData ? $editData['id'] : ''}}">
            <input type="hidden" name="old_image" value="{{$editData ? $editData['featured_image'] : ''}}">
            <label for="title">Title</label>
            <input name="title" type="text" placeholder="Title" value="{{$editData ? $editData['title'] : ''}}">
            <label for="">Featured Image</label>
            <input name="featured_image" class="form-control" onchange='onLoad(event)' type="file">

            <img id="preview" src="{{ $editData ? asset('storage/featured_images/'.$editData['featured_image']) :asset('assets/images/img_holder.png')}}" width="20%" alt=""><br>

            
            <textarea name="editor">{{$editData ? $editData['content'] : ''}}</textarea>
            <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
            <script>
            CKEDITOR.replace( 'editor' );
            </script>
            <br>
            <button type="submit">{{$editData ? 'Update post' : 'Add Post'}}</button>
        </form>

        <button id='gallery-btn'><i class="fa fa-image"></i></button>

        <div id="popup"  class="popup-gallery">
            <button id="close-btn" class="close-btn">X</button>

            <form id="target" action="{{route('gallery.add')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="input-group">
                    <input type="file" name="images" class="form-control" multiple id="file" aria-describedby="inputGroupFileAddon04" accept=".png, .jpg, .jpeg" aria-label="Upload">
                    {{-- <button class="btn btn-outline-secondary h 10" type="submit" id="inputGroupFileAddon04">Upload</button> --}}
                </div>
            </form>

            <div class="gallery">
                <div class="container">                
                    
                </div>
            </div>

        </div>

    </div>




<script>

    function getGallery(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'GET',
            url: "{{ route('gallery.get') }}",
            contentType: false,
            processData: false,
            success: (response) => {
                console.log('getGallery');
                $('.gallery .container').empty();
                for(var i =0 ; i< response.length; i++){

                    var item = `<div class="item">
                        <i id='clone' onclick="copyToClipboard('`+response[i].image+`');" class="fa fa-clone icon"></i>
                        <img id="`+i+`" src="{{asset('storage/gallery/`+response[i].image+ `')}}" alt="">
                        </div>`

                    $(".gallery .container").append(item);
                }
            },
            error: function(response){
                $('#file-input-error').text(response.responseJSON.message);
            }
       });
    }

    function copyToClipboard(image_name){
        
        image_URL = "http://127.0.0.1:8000/storage/gallery/"+image_name;

        navigator.clipboard.writeText(image_URL);
        console.log(image_name);
        toastr.success('Copied to clipboard');

    }

    $('#file').change(function(e) {
        // $('#target').submit();

        var images = document.getElementById('file');
        console.log(images.files.length);

        var formData = new FormData();
        var files = images.files;
        console.log('formData');

        for (var i = 0; i < files.length; i++){
  
            formData.append(i,files[i]);
            console.log('ff',files[i]);
        };
            

        console.log(formData);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type:'POST',
            url: "{{ route('gallery.add') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (response) => {
                // console.log('response');
                $('#file').val('');
                getGallery();
            },
            error: function(response){
                
            }
       });
    });

    $(document).ready(function () {
        getGallery();
    });

    function onLoad(e){

        $path = URL.createObjectURL(e.target.files[0]);

        $element    =   document.getElementById('preview');

        $element.src = $path;
        
    }


        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    $("#close-btn").on("click",function(){
        $('#popup').hide(); 
    });

    $("#gallery-btn").on("click",function(){
        $('#popup').toggle(); 
    });

    
            
    </script>


@endsection