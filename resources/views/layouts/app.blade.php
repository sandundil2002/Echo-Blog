<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Blog</title>
    <link rel="icon" href="images/echo-blog.png">
    @include('libraries.styles')
</head>
<body>
    @include('components.navbar')

    @include('components.categorybar')

    @include('components.homeArticles')

    @include('libraries.scripts')
</body>
</html>
