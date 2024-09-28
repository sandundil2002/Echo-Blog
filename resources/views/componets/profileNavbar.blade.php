<nav class="navbar" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="{{ route('articleWrite') }}" role="button">Write an article</a>
    <h1 class="navbar-brand text-center fw-bold fs-3 mt-2">User Name </h1>
    <a class="btn btn-outline-success bg-danger text-light" href="{{ route('home') }}" role="button">Log Out</a>
  </div>
</nav>

<style>
  /*styles for the nav bar */
  .navbar {
      background: linear-gradient(to right, #333, #777);
  }
</style>
