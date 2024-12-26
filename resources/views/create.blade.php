<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание сообщения</title>
</head>
<body>
    <h1>Добавить сообщения</h1>
    <form action="/create" method="POST">
        @csrf
        <input type="text" name="title" placeholder="Заголовок">
        <input type="text" name="text" placeholder="Текст">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>
