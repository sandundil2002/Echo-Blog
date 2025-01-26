<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login & Signup</title>
    <link rel="icon" href="/images/echo-blog.png">
    @include('libraries.styles')
</head>
<body>
    @include('layouts.userLogin')
    
    @include('layouts.userSignup')
    
    @include('libraries.scripts')
</body>
</html>

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

