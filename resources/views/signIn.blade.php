@extends('layouts.blog-without-sidebar')

@section('content')
    <div class="container ">
        <div class="row justify-content-md-center ">
            <div class="col-md-6 bg-light">
                <form>

                    <div class="form-group">
                        <h1 class="text-center">Вход</h1>
                        <div class="alert alert-primary" role="alert">
                            Вход успешен!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Капец! Все сломалось! Критическая ошибка!
                        </div>
                        <label for="exampleInputEmail1">Email</label>
                        <div class="alert alert-danger" role="alert">
                            Неверный адресс или пароль
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Пользователя не существует
                        </div>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта">
                        <small id="emailHelp" class="form-text text-muted">Укажите вашу почту.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ваш пароль">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                    </div>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col"><button type="submit" class="btn btn-primary">Войти</button></div>
                            <div class="col ">
                                <p class="text-right"><a href="#"> Забыл пароль?</a></p>
                            </div>
                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
@endsection