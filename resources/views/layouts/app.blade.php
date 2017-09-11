<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('includes.navbar')



    <div class="container">
        @if(Request::is('/'))
            @include('includes.showcase')
        @endif
    <div class="row">
        <div class='col-md-8 col-lg-8'>
            @include('includes.errormessages')

            @yield('content')
        </div>
        <div class='col-md-4 col-lg-4'>
            @include('includes.sidebar')
        </div>
    </div>
</div>
<footer id="footer" class="text-center">
<p>Copyright Electronic Shop</p></footer>


</body>
</html>
