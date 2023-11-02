<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Student</title>
</head>
<body>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value={{$data['id']}}><br>
        Name : <input type="text" name="name" placeholder="Enter Name" value="{{$data['name']}}"><br>
        &nbsp&nbsp Age : <input type="text" name="age" placeholder="Enter Age" value="{{$data['age']}}"><br>    
        <input type="submit" value="Submit" />
    </form>
</body>
</html>