<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <ul class="nav">
            <li><a href="{{ route('index') }}">Главная</a></li>

            @if (Auth::check())
                <li>Привет, {{ Auth::user()->name }}!</li>
                <li><a href="{{ route('showCreate') }}">Создать сообщения</a></li>
                <li><a href="{{ route('logout') }}">Выйти</a></li>
            @else
            <li><a href="{{ route('showRegister') }}">Регистрация</a></li>
            <li><a href="{{ route('showLogin') }}">Вход</a></li>
            @endif
        </ul>
    </header>
    <h1>сообщения</h1>
    @foreach ($messages as $message)
    <div class="message">
        <h2>№ {{ $message->id }}</h2>
        <h2>Автор: {{ $message->name }}</h2>
        <h2>{{ $message->title }}</h2>
        <p>{{ $message->text }}</p>
        <p>Дата создания: {{ $message->created_at->format('d.m.Y H:i') }}</p>

    </div>
    @endforeach
</body>
</html>
