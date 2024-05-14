<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<form method="POST" action="/store_form">
    @csrf
    <label for="name">Имя:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="surname">Фамилия:</label>
    <input type="text" id="surname" name="surname" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <button type="submit">Submit</button>
</form>
</body>
</html>
