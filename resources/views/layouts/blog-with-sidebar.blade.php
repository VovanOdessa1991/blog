<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>@yield('title')</title>


    <style>
        .tegs{
            border: none; outline: none;
            background-color: inherit;
        }
    </style>
</head>
<body>


<div class="container mb-1">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">Vovan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item @yield('home')">
                    <a class="nav-link" href="/">Home </a>
                </li>
                <li class="nav-item @yield('category1')">
                    <a class="nav-link" href="{{route('category.find', 'Frontend' )}}">Категория 1</a>
                </li>
                <li class="nav-item @yield('category2')">
                    <a class="nav-link " href="{{route('category.find', 'backend' )}}">Категория 2</a>
                </li>
                <li class="nav-item @yield('category3')">
                    <a class="nav-link " href="{{route('category.find', 'Life' )}}">Категория 3</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">

                <a href="/signIn" class="btn btn-primary">Войти</a>
                <a href="/signUp" class="btn btn-primary">Зарегистрироваться</a>
            </form>
        </div>
    </nav>
</div>

<div class="container">
    @yield('breadcrumb')


</div>


<div class="container">
    <div class="row">
        <div class="col-9">
            @yield('content')
        </div>

        <div class="col-3">
            <div class="list-group">
                <h1 class="bg-primary">Теги</h1>
                @foreach($posts as $post)
                @foreach($post->tags as $tag)
                    <a href="{{route('tag.find', $tag->slug)}}" class="list-group-item list-group-item-action">{{$tag->name}}</a>
                @endforeach
                @endforeach
{{--                <a href="index.html" class="list-group-item list-group-item-action">PHP</a>--}}
{{--                <a href="index.html" class="list-group-item list-group-item-action">CSS</a>--}}
{{--                <a href="index.html" class="list-group-item list-group-item-action">js</a>--}}
{{--                <a href="index.html" class="list-group-item list-group-item-action">HTML</a>--}}

            </div>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>