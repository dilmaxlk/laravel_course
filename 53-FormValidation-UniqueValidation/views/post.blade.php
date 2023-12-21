<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Create</title>
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


    <form action="{{ route('post_store') }}" method="POST">
        @csrf
        
        <div class="mb_10">
            <label for="">Title:</label><br>
            <input type="text" name="title" class="@error('title') error1 @enderror" value="{{ old('title') }}">
           
            @error('title')
                <div class="error">{{$message}}</div>
            @enderror

        </div>


        <div class="mb_10">
            <label for="">Description:</label><br>
            <textarea name="decription" cols="30" rows="10" class="@error('decription') error1 @enderror"></textarea>  <br>         
            @error('decription')
                <div class="error">{{$message}}</div>
            @enderror

        </div>


        <div class="mb_10">
            <button type="submit">Submit</button>  
        </div>  
                 
    </form>


</body>
</html>