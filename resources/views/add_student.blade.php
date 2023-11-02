<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
    <form action="/save" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name"/><br>
        <input type="text" name="age" placeholder="Enter Age"/><br>    
        <input type="submit" value="Submit" />
    </form>
</body>
</html>