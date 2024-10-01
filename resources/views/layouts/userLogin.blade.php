<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('componets.loginSignupStyles')
</head>
<body>
    <section id="login-form" class="form-section active">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 shadow box-area">
            <div class="col-md-12 right-box">
                <div class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h2 class="fw-bold">Hello Again</h2>
                        <p>We are happy to have you back.</p>
                    </div>
                    <div class="input-group mb-3 d-flex">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <a class="btn btn-lg btn-primary w-100 fs-6 text-decoration-none" href="{{ route('userProfile') }}">Login<a>
                    </div>
                    <div class="d-flex">
                        <small>Don't have an account? &nbsp; <a href="#" id="show-signup">Sign Up</a></small>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
</body>
</html>