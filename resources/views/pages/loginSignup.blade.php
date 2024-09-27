@include('libraries.styles')
@include('libraries.scripts')

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
                        <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                    </div>
                    <div class="row">
                        <small>Don't have an account? <a href="#" id="show-signup">Sign Up</a></small>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<section id="signup-form" class="form-section">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border rounded-5 p-3 shadow box-area">
            <div class="col-md-12 right-box">
                <div class="row align-items-center">
                    <div class="header-text text-center mb-4">
                        <h2 class="fw-bold">Welcome</h2>
                        <p>We warmly welcome you to Echo Blog.</p>
                    </div>
                    <div class="input-group mb-3 d-flex">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Your Name">
                    </div>
                    <div class="input-group mb-3 d-flex">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-primary w-100 fs-6">Signup</button>
                    </div>
                    <div class="row">
                        <small>Already have an account? <a href="#" id="show-login">Log In</a></small>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body{
        font-family: 'Poppins', sans-serif;
        background: url("images/login-signup.png");
        background-position: center;
        background-size: cover;
    }

    .box-area{
        width: 930px;
        background-color: transparent;
        backdrop-filter: blur(15px);
    }

    .right-box{
        padding: 40px 30px 40px 40px;
    }

    ::placeholder{
        font-size: 16px;
    }

    .rounded-4{
        border-radius: 20px;
    }
    .rounded-5{
        border-radius: 30px;
    }
    .form-section {
        display: none;
    }
    .form-section.active {
        display: block;
    }

    @media only screen and (max-width: 768px){
        .box-area{
            margin: 0 10px;
        }
        .left-box{
            height: 100px;
            overflow: hidden;
        }
        .right-box{
            padding: 20px;
        }

    }
</style>

<script>
    $(document).ready(function() {
        $('#show-signup').on('click', function(e) {
            e.preventDefault(); 
            $('#login-form').removeClass('active');
            $('#signup-form').addClass('active');
        });

        $('#show-login').on('click', function(e) {
            e.preventDefault();
            $('#signup-form').removeClass('active');
            $('#login-form').addClass('active');
        });
    });
</script>

