<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('src/css/app.css') }}">

    <!--  -->
    <!-- jquary -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    @yield('styles')
</head>

<body>
    @include('partials.header')
    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')
    <script src="{{ URL::to('src/js/app.js') }}"></script>

</body>

</html>
</p>
