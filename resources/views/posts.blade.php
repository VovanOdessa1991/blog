<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
        <hr class="my-4">
        <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
        <footer>
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-7 ">
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>

                    <div class="col ">
                        <button class="tegs">  <i class="far fa-comment-dots"></i>12</button>
                        <button class="tegs"> <i class="fas fa-star"></i> 23</button>
                        <button class="tegs"> <i class="fas fa-heart"></i> test</button>
                    </div>
                </div>

            </div>
        </footer>
    </div>
@endsection
</body>
</html>