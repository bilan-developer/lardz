@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading"><strong>Добавление товара</strong> <a href="news/create">Добавить</a></div>
                    @foreach($news as $public)
                            <div class="panel-body">
                                <p>{!! $public->title !!}</p>
                                <p>{!! $public->markdownContent !!}</p>
                                <a href="news/destroy/{{ $public->id }}">Удалить</a>
                                <a href="news/edit/{{ $public->id }}">Редактировать</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
@endsection
