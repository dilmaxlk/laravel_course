<h1>Home Page</h1>

<p>This is Home Page</p>


{{-- These are the ways we can link the pages. --}}

<ul>
    <li><a href="{{ route('frontend_name') }}">Home</a></li>
    <li><a href="{{ route('frontend_about') }}">About</a></li>
</ul>

{{-- <ul>
    <li><a href="{{ URL::to('/') }}">Home</a></li>
    <li><a href="{{ URL::to('about') }}">About</a></li>
</ul> --}}

{{-- <ul>
    <li><a href="{{ url('/') }}">Home</a></li>
    <li><a href="{{ url('/about') }}">About</a></li>
</ul> --}}
