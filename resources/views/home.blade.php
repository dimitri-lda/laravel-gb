@extends('layouts.default')

@section('content')
    <div>
        <p>Главная страница</p>
        @if ($age > 18)
            <p>Возраст: {{$age}}</p>
        @else
            <p>Пользователь слишком молод!</p>
        @endif
    </div>
@stop
