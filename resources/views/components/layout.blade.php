<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        @if (Auth::check())
        <a href="{{route('profile')}}">Профиль</a>
        @if (Auth::user()->admin)
        <a href="{{route('admin')}}">Админ</a>
        @endif
        <a href="{{route('logout')}}">Выйти</a>
        @else
        <a href="{{route('show_log')}}">Авторизация</a>
        <a href="{{route('show_reg')}}">Регистрация</a>
        @endif
        
    </nav>
{{$slot}}
</body>
</html>