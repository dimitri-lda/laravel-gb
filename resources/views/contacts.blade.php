@extends('layouts.default')

@section('content')
    <div>
        @if ($age > 18)
            <p>Возраст: {{$age}}</p>
        @else
            <p>Возраст: Пользователь слишком молод!</p>
        @endif
    </div>

    <div>
        @if (!empty($email))
            <p>Email: {{$email}}</p>
        @else
            <p>Email: Адрес электронной почты не указан</p>
        @endif
            <p>Адрес: {{$address}}</p>
            <p>Индекс: {{$postcode}}</p>
            <p>Телефон: {{$phone}}</p>
    </div>
@stop
