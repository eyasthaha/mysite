<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>M-Technesia</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <link href="{{ asset('assets/css/home.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    @include('reusable.header')

    <div class="featured-container">
        <div class="content">
            @yield('content')
        </div>
    </div>
    <hr class="dashed">
    {{-- <div style="border:1px solid red;text-align:center;padding:5%;margin: 0 15%;">Banner ads here</div> --}}
    <div class="post-section">
        <div class="posts">
            @yield('posts')
        </div>
        <div class="right-sidebar">
            @include('right-sidebar')
        </div>
    </div>

    <div class="login-container">
        <i id="close" onclick="close();" class="fa fa-close close-icon"></i>
        <form id="login" action="{{route('user.login')}}" method="post">
          @csrf
            <h2>Login</h2>
            <div class="mb-2 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
              </div>
              <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input name="password" type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <button type="submit" >Login</button>
            </form>
            <a id="signup" href="#">Sign up</a>       

        <form id="signup-form" action="{{route('register.user')}}" method="post" style="display: none">
            @csrf
            <h2>Sign Up</h2>
            <div class="mb-2 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input name="name" type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
              </div>
             <div class="mb-2 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input name="email" type="text" class="form-control" id="staticEmail" value="email@example.com">
                </div>
              </div>
              <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                  <input name="password" type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="mb-2 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input name="cpassword" type="password" class="form-control" id="inputPassword">
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Sign Up</button>               
        </form>

    </div>

    @include('reusable.footer')
</body>

<script>
    $("#close").on("click",function(){
        $('.login-container').hide();
    });

    $("#signup").on("click",function(){
        $('#login').hide();
        $('#signup-form').show();
    });
</script>

</html>