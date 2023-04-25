{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Document</title>
<style>
    body{
        margin: 0;
        font-family: "Poppins";
        position: relative;
    }

    .top{
        height: 420px;
        background-color: cornflowerblue;
    }

    .top h2{
        padding: 200px;
        margin: 0;
        text-align: center;
        font-size: 50px;
        color: rgba(0, 0, 0, 0.74);
    }

    .content{
        width: 600px;
        background-color: rgb(240, 240, 240);
        margin: auto;
        padding: 50px;
        position: absolute;
        top: 100px;
        left: 30%;
        right: 50%;
    }

    .content h2{
        text-align: center;
    }

    .content img{
        width: 100%;
    }

    .content button{
        display: flex;
        justify-content: center;
        border: none;
        background-color: cornflowerblue;
        color: white;
        font-size: 20px;
        border-radius:10px;
        padding: 10px;
        margin: auto;
    }

    .footer{
        margin: auto;
        position: relative;
        display: block;
        text-align: center;
        position: absolute;
        bottom: 0;
    }


</style>
</head>
<body>
    <div class="top">
        <h2>M-Technesia</h2>
    </div>
    <div class="content">
        <h2>M-Technesia</h2>
        <h2>What is Lorem Ipsum?</h2>
        <img src="{{asset('assets/images.1.jpg')}}" alt="">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
        <button>Read more</button>
    </div>
    <div class="footer">
        © 2017 - {{now()->year}} M-Technesia | All Rights Reserved
    </div>
</body>
</html> --}}

<x-mail::message>
# {{$mailData['title']}}
[logo]: {{asset('assets/images/1.jpg')}} "Logo"  
{!! Str::words($mailData['content'],50) !!}
 
{{-- <x-mail::button :url="$url">
View Order
</x-mail::button> --}}
 
Thanks,<br>
{{ config('app.name') }}
</x-mail::message>