<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('libraries.styles')
</head>
<body>
    <div class="container mt-1">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1 class="text-center">18 Programming Concepts You've Never Heard of (But Should!)</h1>

                <p class="mt-4 text-justify fs-5">As a programmer, you’re constantly learning new terms, techniques, and best practices. But what if I told you there’s a whole world of concepts that many programmers don’t even know exist concepts that could change the way you write and think about code? Whether you’re a beginner or a seasoned coder, these 18 little-known terms will help you level up. Let’s dive in! Examples are going to be in JS and Python.</p>

                <img src="images\software-developer.jpg" class="img-fluid" alt="">

                <p class="mt-4 text-justify fs-5">Ever delayed doing something until the last possible moment? A thunk does exactly that - it delays the execution of a function until it's absolutely necessary. Imagine you have a task that's expensive to compute, but you're not sure you'll need the result. Instead of computing it upfront, you wrap it in a thunk.</p>
                <p class="mt-4 text-end"><strong>Written by,</strong><br>Rahul Dravid</p>
            </div>
        </div>
    </div>

    @include('libraries.scripts')
</body>
</html>

<style>  
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    h1{
        font-family: 'Poppins';
    }
</style>