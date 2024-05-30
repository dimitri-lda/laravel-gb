<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<form name="user-form" id="user-form" method="POST" action="{{ url('store-user') }}">
    @csrf
    <div class="form-group">
        <label for="name">First Name:</label>
        <input type="text" id="name" name="name" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="surname">Last Name:</label>
        <input type="text" id="surname" name="surname" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control" required="true">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
