<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
<form name="employee-form" id="employee-form" method="POST" action="{{ url('store-form') }}">
    @csrf
    <div class="form-group">
        <label for="name">First Name:</label>
        <input type="text" id="name" name="name" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="position">Position:</label>
        <input type="text" id="position" name="position" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" class="form-control" required="true">
    </div>
    <div class="form-group">
        <label for="workData">Work Data:</label>
        <textarea type="text" id="workData" name="workData" class="form-control" required="true"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
