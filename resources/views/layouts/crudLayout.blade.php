<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar bg-primary mb-4">
    <div class="container d-flex flex-column flex-md-row align-items-lg-center">
        <div class="d-flex flex-column align-items-center">
            <h1 class="text-white text-center">@lang("CRUD with laravel 8.0 and bootstrap")</h1>
        </div>
        @auth
            <form class="m-0 align-items-center d-flex flex-column" action="{{route("logout")}}" method="POST">
                @csrf
                <button class="btn btn-light" type="submit">@lang("Logout")</button>
                <p class="text-white m-0 mt-2 d-none d-lg-block">@lang("Welcome") {{auth()->user()->name}}</p>
            </form>
        @else
            <div class="d-flex">
                <a class="nav-link text-white" href="{{route("login")}}">@lang("Log In")</a>
                <a class="nav-link text-white" href="{{route("register")}}">@lang("Register")</a>
            </div>
        @endauth
    </div>
</nav>

@yield('content')
</body>
</html>


