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