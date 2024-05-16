<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data</title>
</head>
<body>
        <h2>Edit Students</h2>
        <ul style="margin-bottom: 40px;">
            <li><a href="{{ route('students.create') }}">Create Student</a></li>
            <li><a href="{{ route('students.index') }}">All Students</a></li>
        </ul>

        @if (session('success'))
            <div>{{ session('success') }}</div>
            
        @endif

        @if ($errors->any())
        
            @foreach ($errors->all() as $error )
            {{ $error }} <br>
            
            @endforeach
        
        @endif

        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">

            @csrf

            @method('PUT')

            <div>
                <label for="">Existing Photo:</label><br>
               <img src="{{ asset('uploads/'.$student->photo) }}" alt="">

            </div>

            <div>
                <label for="">Photo:</label>
                <input type="file" name="photo"><br><br>

            </div>

            <div>
                <label for="">Name:</label>
                <input type="text" name="name" value="{{ $student->name }}"><br><br>
                
            </div>

            <div>
                <label for="">Email:</label>
                <input type="text" name="email" value="{{ $student->email }}"><br><br>
                
            </div>

            <div>
                
               <button type="submit">Update</button>
                
            </div>

        </form>
</body>
</html>