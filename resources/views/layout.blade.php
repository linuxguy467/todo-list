<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div class="container">
    @include('partials.navbar')
    <div class="container-fluid">
        @yield('content')
    </div>
    <footer class="footer">
        @include('partials.footer')
    </footer>
</div>
<script src="/js/app.js"></script>
</body>
</html>
