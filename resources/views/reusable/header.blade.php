<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lol</title>
    <link href="{{ asset('assets/css/header.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="header-container">
        <div class="logo">
            <span class="harmburger" onclick= 'toggleMenu();'><i class="fa fa-navicon"></i></span>
            {{-- <img src="{{asset('assets/logo/LOGO.png')}}" alt=""> --}}
            <h3>M-Technesia</h3>
        </div>
        <div id="menu" class="header-menu">
            <ul>
                <a href="{{url('/')}}"><li>Home</li></a>
                <a href=""><li>Services</li></a>
                <a href=""><li>Contact</li></a>
                <a href="{{url('/about-us')}}"><li>About Us</li></a>                
            </ul>
        </div>
        <i id="theme-btn" class="fa fa-moon-o" aria-hidden="true" onclick="colorMode();"></i>
    </div>
</body>
</html>

<script>
    function toggleMenu(){
        var element = document.getElementById('menu');


        if(element.style.display == 'block'){
            element.style.display='none'
            console.log('first');
        }else{
            console.log('secod');
            element.style.display=' block'
        }
    }

    function colorMode(){
        document.body.classList.add('dark');
        console.log('added');
        var x = document.getElementById('theme-btn');
        x.style.display = 'none';
    }
</script>