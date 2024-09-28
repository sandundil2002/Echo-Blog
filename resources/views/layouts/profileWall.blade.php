<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('libraries.styles')
</head>
<body>

    @include('componets.articlePost')
    @include('componets.articlePost')
    @include('componets.articlePost')
    
    @include('libraries.scripts')
</body>
</html>

<style>
    .card-body {
        padding-right: 10px; 
    }

    .col-md-4 {
        padding-left: 0;
    }

    .img-fluid {
        object-fit: cover; 
        height: 30vh;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    const contents = document.getElementsByClassName('card-text');
        Array.from(contents).forEach(content => {
            const words = content.innerText.split(' ');
            if (words.length > 50) {
                content.innerText = words.slice(0, 50).join(' ') + '...';
            }
        });
    });
</script>
