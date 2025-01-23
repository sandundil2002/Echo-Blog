<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('savePost') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="m-3">
            <div class="mb-3 d-flex gap-4">
                <input type="text" class="form-control w-50 fs-5 border border-1 border-info text-capitalize" name="title" id="exampleFormControlInput1" placeholder="Title" required>
                <select class="form-select w-50 fs-5 border border-1 border-info" name="category" aria-label="Default select example" required>
                    <option selected>Select Category</option>
                    <option value="Education">Education</option>
                    <option value="Programming">Programming</option>
                    <option value="Technology">Technology</option>
                    <option value="Social Media">Social Media</option>
                    <option value="Artificial Intelligence">Artificial Intelligence</option>
                    <option value="Freelancing">Freelancing</option>
                    <option value="E-Money">E-Money</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Other">Other</option>
                </select>
            </div>

            <div class="mb-3">
                <textarea class="form-control fs-5 border border-2 border-info text-capitalize" name="contents" id="exampleFormControlTextarea1" rows="10" placeholder="Content..." required></textarea>
            </div>

            <div class="center-div fs-5">
                <div class="d-block m-0 text-center">
                    <label for="formFile" class="form-label">Add an image</label>
                    <input class="form-control border border-1 border-info" type="file" name="image" id="formFile">
                    <button type="submit" class="btn btn-success mt-4 fs-5">Publish</button>
                </div>
            </div>

            <div id="errorMessages" class="text-danger">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
        </div>
    </form>
    
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