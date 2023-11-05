<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-US-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{!! asset('css/style.css') !!}">
    <title>@yield('title')</title>
    
</head>
<body>
    <nav>
        <ul>
            <img src="open-book.png" alt="book" width="9%">
            <li><a href="book/index">Z LIBRARY</a></li>
            <li><a href="">PRODUCT</a></li>
            <li><a href="">CONTACT US</a></li>
        </ul>
    </nav><br><br><br>
    <div class="content">
        @yield('content')
    </div>
</body>
</html>
