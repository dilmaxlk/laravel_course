<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .page-item{
            list-style: none;
            float: left;
            margin-left: 3px;
            margin-right: 3px;

        }
    </style>
</head>
<body>
    
</body>
</html>

@foreach ($students as $student )
    {{ $student->id }} -
    {{ $student->name }}<br>
@endforeach

{{ $students->links() }}