<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('componets.loginSignupStyles')
    @include('libraries.styles')
</head>
<body>
    <form action="{{ route('saveUser') }}" id="signup-form" class="form-section" method="POST">
        @csrf
        <div class="container d-flex justify-content-center align-items-center min-vh-100">
            <div class="row border rounded-5 p-3 shadow box-area">
                <div class="col-md-12 right-box">
                    <div class="row align-items-center">
                        <div class="header-text text-center mb-4">
                            <h2 class="fw-bold">Welcome</h2>
                            <p>We warmly welcome you to Echo Blog.</p>
                        </div>
                        <div class="input-group mb-3 d-flex">
                            <input type="text" id="name" name="name" class="form-control text-capitalize form-control-lg bg-light fs-6" placeholder="Your Name" required>
                        </div>
                        <div class="input-group mb-3 d-flex">
                            <input type="text" id="email" name="email" class="form-control form-control-lg bg-light fs-6" placeholder="Email address" required>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password" required>
                        </div>
                        <div class="input-group mb-3">
                            <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 text-decoration-none" >Signup</button>
                        </div>
                        <div class="d-flex">
                            <small>Already have an account? &nbsp; <a href="#" id="show-login">Log In</a></small>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </form>

    @include('libraries.scripts')
</body>
</html>