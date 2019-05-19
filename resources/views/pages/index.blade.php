@extends('layout')

@section('content')
    <section class="main-content">

        <div class="container">
            <div class="row">
                @if(Auth::check())
                    <div class="form-group col-sm-4">
                        <a href="{{route('logout')}}" class="btn btn-success">Выход</a>
                    </div>
                    <div class="form-group col-sm-4">
                        <a href="{{route('create')}}" class="btn btn-primary">Создать задачу</a>
                    </div>
                    <div class="form-group col-sm-4">
                        <a href="{{route('api')}}" class="btn btn-danger">API</a>
                    </div>
                @else
                <div class="form-group col-sm-4">
                    <a href="{{route('login')}}" class="btn btn-success">Авторизоваться</a>
                </div>
                @endif
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <h3>TODO</h3><hr>
                    @foreach($todo as $i)
                    <p><a href="{{route('edit', $i->id)}}">{{$i->title}}</a> - комментарии: {{$i->comments()->count()}}</p><hr>
                    @endforeach
                </div>

                <div class="col-sm-4">
                    <h3>DOING</h3><hr>
                    @foreach($doing as $i)
                        <p><a href="{{route('edit', $i->id)}}">{{$i->title}}</a> - комментарии: {{$i->comments()->count()}}</p><hr>
                    @endforeach
                </div>

                <div class="col-sm-4">
                    <h3>DONE</h3><hr>
                    @foreach($done as $i)
                        <p><a href="{{route('edit', $i->id)}}">{{$i->title}}</a> - комментарии: {{$i->comments()->count()}}</p><hr>
                    @endforeach
                </div>
            </div>
        </div>

    </section>
@endsection