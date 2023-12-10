<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <style>
        textarea{
            height: 50px;
        }

        .mb_10{
           margin-bottom: 10px; 
        }
    </style>
</head>
<body>
    <h2>Contact Form</h2>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif


    <form action="{{ route('store') }}" method="POST">
        @csrf
        
        <div class="mb_10">
            <label for="">Name:</label><br>
            <input type="text" name="name">
        </div>
        <div class="mb_10">
            <label for="">Email:</label><br>
            <input type="text" name="email">
        </div>
        <div class="mb_10">
            <label for="">Phone:</label><br>
            <input type="text" name="phone">
        </div>    
        <div class="mb_10">
            <label for="">Message:</label><br>
            <textarea name="message" cols="30" rows="10"></textarea>
        </div>  
              <button type="submit">Submit</button>     
    </form>
</body>
</html>