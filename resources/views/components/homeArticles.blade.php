<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/echo-blog.png">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @if ($articles->isEmpty())
            <p class="text-center fs-4 text-capitalize">No articles available</p>
        @else
            @foreach ($articles as $article)
                <div class="card mb-3 m-3">
                    <div class="row g-0">
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a class="text-decoration-none text-capitalize"
                                        href="{{ route('articleView', ['id' => $article->id]) }}">
                                        {{ $article->title }}
                                    </a>
                                </h5>

                                <p class="card-text text-capitalize fs-6" id="post-content">
                                    {{ Str::limit($article->content, 300, '.....') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 d-flex justify-content-end align-items-center">
                            <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('path/to/default/image.jpg') }}"
                                class="img-fluid rounded-start" alt="{{ $article->title }}" />
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</body>
</html>