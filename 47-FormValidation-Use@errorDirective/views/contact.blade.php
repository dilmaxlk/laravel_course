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

        .error{
            color: red;
        }

        .error1{
            border-color: red;
        }
    </style>
</head>
<body>
    <h2>Contact Form</h2>

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }} <br>
        @endforeach
    @endif --}}


    <form action="{{ route('store') }}" method="POST">
        @csrf
        
        <div class="mb_10">
            <label for="">Name:</label><br>
            <input type="text" name="name" value="{{ old('name') }}" class="@error('name') error1
            @enderror">
           
            @error('name')
                <div class="error">{{$message}}</div>
            @enderror

        </div>
        <div class="mb_10">
            <label for="">Email:</label><br>
            <input type="text" name="email" class="@error('name') error1 @enderror" value="{{ old('email') }}">

            @error('email')
                 <div class="error">{{$message}}</div>
            @enderror

        </div>
        <div class="mb_10">
            <label for="">Phone:</label><br>
            <input type="text" name="phone" class="@error('name') error1 @enderror"  value="{{ old('phone') }}">

            @error('phone')
            <div class="error">{{$message}}</div>
            @enderror

        </div>    
        <div class="mb_10">
            <label for="">Message:</label><br>
            <textarea name="message" cols="30" rows="10" class="@error('message') error1 @enderror"> {{ old('message') }}</textarea>
            @error('message')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>  
              <button type="submit">Submit</button>     
    </form>
</body>
</html>