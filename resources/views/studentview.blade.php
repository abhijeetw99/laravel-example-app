<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student List</title>
</head>
<body>
    <table style='border:1px solid' border = 1>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
        </tr>
        @foreach ( $students as $student )
            <tr>
                <td>{{$student['id']}}</td>
                <td>{{$student['name']}}</td>
                <td>{{$student['age']}}</td>
            </tr>
        @endforeach

    </table>
</body>
</html>