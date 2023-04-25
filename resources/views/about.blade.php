<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About us</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    @include('reusable.header')

    <div style="display:flex; justify-content:space-around">
        <div>
            <img src="{{asset('assets/logo/LOGO.png')}}" width="300px" alt="">
        </div>
        <div style="font-size: 25px; padding-left: 100px;">
            <h1>About Us</h1>
        <p>
            Welcome to my tech blog! Here you will find insightful and informative articles on the latest technology trends, products, and innovations from around the world.
            <br>
            <br>
            As a technology enthusiast and avid blogger, I am passionate about exploring the ever-evolving world of technology and sharing my knowledge with others. My blog covers a wide range of topics, from the latest smartphones and gadgets to emerging technologies such as artificial intelligence, machine learning, and blockchain.
            <br>
            <br>
            Whether you are a tech enthusiast, entrepreneur, or simply curious about the latest trends in the tech industry, my blog has something for everyone. I strive to provide my readers with engaging and informative content that not only keeps them up-to-date with the latest happenings but also helps them make informed decisions about technology.
            <br>
            <br>
            My articles are written in a clear and concise manner, making complex topics easy to understand. I also strive to keep my blog up-to-date with the latest industry news, so you can be sure you are always getting the most current information.
            <br>
            I believe that technology has the power to transform our lives and shape the future. Through my blog, I hope to inspire and inform readers about the potential of technology and its impact on our world.
            <br>
            <br>
            Thank you for visiting my tech blog, and I hope you find my content informative and engaging. Don't forget to subscribe for regular updates on the latest technology news and trends!
        </p>
        </div>
    </div>
    
</body>
</html>