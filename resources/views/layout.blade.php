<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/my.css" rel="stylesheet">
    <title>Тестовое задание</title>
</head>
<body>
<section class="main-slogan">
    <div class="container">
        <h1><a href="{{route('index')}}">Список задач</a></h1>
    </div>
</section>
@if(session('status'))
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    {{session('status')}}
                </div>
            </div>
        </div>
    </div>
@endif
@yield('content')
</body>
</html>