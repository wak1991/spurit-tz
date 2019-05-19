@extends('layout')

@section('content')
    <div class="container">
        <h2>Авторизация</h2>
        @include('pages.errors')
        <form class="form-horizontal contact-form" role="form" method="post" action="/login">
            {{csrf_field()}}
        <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="text" class="form-control" id="email" name="email" value="" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Пароль</label>
                    <input type="text" class="form-control" id="password" name="password" value="" placeholder="">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button class="btn btn-success pull-right">Войти</button>
        </div>
        </form>
    </div>
@endsection