@extends('layout')

@section('content')
    <div class="container">
        <h2>Редактирование задачи</h2>
        {{Form::open([
            'route' => ['update', $task->id],
        ])}}
        <div class="box-body">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" class="form-control" name="title" value="{{$task->title}}" placeholder="">
                </div>
                <div class="form-group">
                    <label>Статус</label>
                    {{Form::select('status_id',
                    $statuses,
                    $task->getStatusID(),
                    ['class' => 'form-control'])
                    }}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <textarea id="" cols="30" rows="10" class="form-control" name="description">{{$task->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Комментарий</label>
                    <input type="text" class="form-control" name="text" value="" placeholder="">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <button class="btn btn-success pull-right">Сохранить</button>
        </div>
        <div class="col-md-6">
            <h3>Комментарии к задаче</h3>
            @if(!$comments->isEmpty())
            @foreach($comments as $comment)
                <p>{{$comment->text}}</p>
            @endforeach
            @else
                <p>Комментариев нет</p>
            @endif
        </div>
        {{Form::close()}}
    </div>
@endsection