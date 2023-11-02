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
            <th>Name</th>
            <th>Age</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ( $students as $student )
            <tr>
                <td>{{$student['name']}}</td>
                <td>{{$student['age']}}</td>
                <td><a href={{"edit/" . $student['id']}}>Edit</a></td>
                <td><a href={{"delete/" . $student['id']}}>delete</a></td>
            </tr>
        @endforeach
    </table>
    <a href={{"add_student"}}>
        <button>Add</button>
    </a>
</body>
</html>