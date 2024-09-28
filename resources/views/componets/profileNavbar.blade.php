<nav class="navbar" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="" role="button">Write an article</a>
    <a class="navbar-brand fw-bold" href="{{ route('home') }}" role="button">Echo Blog</a>
    <a class="btn btn-outline-success bg-danger text-light" href="{{ route('loginSignup') }}" role="button">Log Out</a>
  </div>
</nav>

<style>
  /*styles for the nav bar */
  .navbar {
      background: linear-gradient(to right, #333, #777);
  }
</style>
