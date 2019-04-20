@extends('layouts.blog-without-sidebar')

@section('content')
    <div class="container ">
        <div class="row justify-content-md-center ">
            <div class="col-md-6 bg-light">
                <form>

                    <div class="form-group">
                        <h1 class="text-center">Регистрация!</h1>
                        <div class="alert alert-primary" role="alert">
                            Регистрация успешна!
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Капец! Все сломалось! Критическая ошибка!
                        </div>
                        <label for="exampleInputEmail1">Email</label>
                        <div class="alert alert-danger" role="alert">
                            Неверно указана почта
                        </div>
                        <div class="alert alert-danger" role="alert">
                            Такой пользователь уже существует
                        </div>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ваша почта">
                        <small id="emailHelp" class="form-text text-muted">Укажите вашу почту.</small>
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Пароли не совпадают!
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ваш пароль">
                    </div>
                    <div class="alert alert-danger" role="alert">
                        Пароли не совпадают!
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword2">Повторите Ваш пароль</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Повторите Ваш пароль">
                    </div>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col"><button type="submit" class="btn btn-primary">Зарегистрироватся</button></div>

                        </div>
                    </div>




                </form>
            </div>
        </div>
    </div>
@endsection