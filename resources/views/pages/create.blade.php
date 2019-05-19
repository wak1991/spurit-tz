@extends('layout')

@section('content')
    <div class="container">
        <h2>Создание задачи</h2>
        @include('pages.errors')
        {{Form::open([
            'route' => 'store',
        ])}}
    <div class="box-body">
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" class="form-control" id="" name="title" value="{{old('title')}}" placeholder="">
            </div>
            <div class="form-group">
                <label>Статус</label>
                {{Form::select('status_id',
                $statuses,
                null,
                ['class' => 'form-control'])
                }}
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Описание</label>
                <textarea id="" cols="30" rows="10" class="form-control" name="description">{{old('description')}}</textarea>
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button class="btn btn-success pull-right">Сохранить</button>
    </div>
        {{Form::close()}}
    </div>
@endsection