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

    {{-- <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb_10">
            <label for="">File:</label><br>
            <input type="file" name="file"><br>
           
            @error('file')
                <div class="error">{{$message}}</div>
            @enderror

        </div> 

        <div class="mb_10">
            <button type="submit">Submit</button>  
        </div>  
                 
    </form> --}}

    <form action="{{ route('store') }}" method="POST">
        @csrf
        
        <div class="mb_10">
            <label for="">Password:</label><br>
            <input type="password" name="pw" class="@error('pw') error1 @enderror">
           
            @error('pw')
                <div class="error">{{$message}}</div>
            @enderror

            {{-- <div class="mb_10">
                <label for="">Confirm Password:</label><br>
                <input type="password" name="password_confirmation" class="@error('password_confirmation') error1 @enderror">
               
                @error('password_confirmation')
                    <div class="error">{{$message}}</div>
                @enderror
    
            </div> --}}


        </div>

        <div class="mb_10">
            <button type="submit">Submit</button>  
        </div>  
                 
    </form>


</body>
</html>