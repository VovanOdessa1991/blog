@extends('layouts.blog-with-sidebar')

@section('title', 'Категория 1')
@section('category1', 'active')
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

