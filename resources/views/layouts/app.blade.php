<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Blog</title>
    @include('libraries.styles')
</head>
<body>
    @include('componets.navbar')

    @yield('app')

    @include('libraries.scripts')
</body>
</html>