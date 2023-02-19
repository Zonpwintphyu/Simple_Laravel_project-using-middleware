<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer</title>
</head>
<body>
    <h1>Customer Home Page</h1>

    @if(session('authMessage'))
        <p class="text-danger">{{session('authMessage') }}</p>
    @endif
    <span><a href="{{ url('customer/home')}}">Home</a></span> |
    <span><a href="{{ url('customer/about')}}">About</a></span> |
    <span><a href="{{ url('customer/service')}}">Service</a></span> |
    <span><a href="{{ url('userPage')}}">CustomerPage</a></span>

    <h3>{{ Auth::user()->role}}</h3>

    <form action="{{ route('logout')}}" method="post">
        @csrf
        <input type="submit" value="logout">
    </form>
</body>
</html>