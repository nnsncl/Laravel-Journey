<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatty Chatty</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-white" >
    <nav class="p-6 mb-10 bg-white border-b-2 flex justify-between" >
        <ul class="flex items-center" >
            <li class="mr-5" >
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Post</a>
            </li>
        </ul>
        <ul class="flex items-center" >
            <li class="mr-5" >
                <a href="">Nuni</a>
            </li>
            <li class="mr-5" >
                <a href="">Dashboard</a>
            </li>
            <li class="mr-5" >
                <a href="">Login</a>
            </li>
            <li class="mr-5"  >
                <a href="">Register</a>
            </li>
            <li>
                <a href="">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>