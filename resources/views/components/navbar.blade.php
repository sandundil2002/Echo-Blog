<nav class="navbar" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ route('loginSignup') }}" role="button">Write an article</a>
    <a class="navbar-brand fw-bold" href="" role="button">Echo Blog</a>
    <form class="d-flex" action="{{ route('articleSearch') }}" method="GET" role="search">
      <input class="form-control me-2 bg-secondary text-light text-capitalize border-light" type="search" name="query"
        placeholder="Search" value="{{ request('query') }}">
      <button class="btn btn-outline-success bg-success text-light" type="submit">Find</button>
    </form>
  </div>
</nav>

<style>
  .navbar {
      background: linear-gradient(to right, #333, #777);
  }
</style>
