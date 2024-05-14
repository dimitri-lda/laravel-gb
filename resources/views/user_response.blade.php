<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Привет, {{ $user['name'] }}!</title>
</head>
<body>
    <p>
        Привет, {{ $user['name'] }}!
    </p>
    Ваши данные:<br>
    Имя: {{ $user['name'] }}<br>
    Фамилия: {{ $user['surname'] }}<br>
    Email: {{ $user['email'] }}
</body>
</html>
