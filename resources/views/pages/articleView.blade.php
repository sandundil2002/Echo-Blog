<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article View</title>
    <link rel="icon" href="/images/echo-blog.png">
    @include('libraries.styles')
</head>
<body>
    @include('components.articleNavbar')
    
    @include('layouts.readArticle')

    @include('libraries.scripts')
</body>
</html>
