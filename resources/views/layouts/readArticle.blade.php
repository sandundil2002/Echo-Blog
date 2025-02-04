<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/echo-blog.png">
    <title>{{ $article->title }}</title>
    @include('libraries.styles')
</head>

<body>
    <div class="container mt-1 mb-3 border border-2 border-info rounded">
        <div class="row ">
            <div class="col-md-8 offset-md-2 mt-3">
                <h1 class="text-center text-capitalize">{{ $article->title }}</h1>
                <p class="mt-4 fs-5 text-capitalize">{{ $article->content }}</p>

                @if ($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid center-image" alt="{{ $article->title }}">
                @endif

                <p class="mt-4 text-end text-capitalize ">
                    <strong>Written by,</strong><br>
                    {{ $article->author ?? 'Unknown Author' }}
                </p>
            </div>
        </div>
    </div>

    @include('libraries.scripts')
</body>

</html>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    h1 {
        font-family: 'Poppins';
    }

    p{
        text-align: justify
    }

    .center-image {
        display: block;
        margin: 0 auto;
    }
</style>