<div class="container">
    @if ($articles->isEmpty())
        <h2 class="text-center">No articles available at the moment.</h2>
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
                            <p class="card-text text-capitalize" id="post-content">
                                {{ Str::limit($article->content, 200, '...') }}
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 d-flex justify-content-end align-items-center">
                        <img src="{{ $article->image ? asset('storage/' . $article->image) : asset('path/to/default/image.jpg') }}"
                            class="img-fluid rounded-start" alt="{{ $article->title }}" />
                    </div>
                </div>

                <div class="card-footer d-flex justify-content-end">
                    <form action="{{ route('deleteArticle', ['id' => $article->id]) }}" method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this article?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    @endif
</div>
