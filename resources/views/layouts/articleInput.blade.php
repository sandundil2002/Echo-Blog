<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="m-3">
        <div class="mb-3 d-flex gap-4">
            <input type="text" class="form-control w-50 fs-5 border border-1 border-info" id="exampleFormControlInput1" placeholder="Title">
            <select class="form-select w-50 fs-5 border border-1 border-info" aria-label="Default select example">
                <option selected>Category</option>
                <option value="1">Education</option>
                <option value="2">Programming</option>
                <option value="3">Technology</option>
                <option value="4">Social Media</option>
                <option value="5">Artificial Intelligence</option>
                <option value="6">Freelancing</option>
                <option value="7">E-Money</option>
                <option value="8">Marketing</option>
            </select>
        </div>

        <div class="mb-3">
            <textarea class="form-control fs-5 border border-2 border-info" id="exampleFormControlTextarea1" rows="10" placeholder="Content..."></textarea>
        </div>

        <div class="center-div fs-5">
            <div class="d-block m-0 text-center">
                <label for="formFile" class="form-label">Add an image</label>
                <input class="form-control border border-1 border-info" type="file" id="formFile">
                <button type="button" class="btn btn-success mt-4 fs-5">Publish</button>
            </div>
        </div>
    </div>
    
    @include('libraries.scripts')
</body>
</html>

<style>
    .center-div {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>