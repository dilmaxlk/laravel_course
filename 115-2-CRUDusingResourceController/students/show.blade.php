<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Single Student Data</title>
</head>
<body>
        <h2>Show Single Student Data</h2>
        <ul style="margin-bottom: 40px;">
            <li><a href="{{ route('students.create') }}">Create Student</a></li>
            <li><a href="{{ route('students.index') }}">All Students</a></li>
        </ul>

        <div>
            <label for="">Photo:</label><br>
            <img src="{{ asset('uploads/'.$student->photo) }}" style="width: 300px;">
        </div>

        <div>
            <label for="">Name:</label><br>
           {{ $student->name }}<br><br>
            
        </div>

        <div>
            <label for="">Email:</label><br>
            {{ $student->email }}<br><br>
            
        </div>


</body>
</html>