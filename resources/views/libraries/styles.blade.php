 {{-- bootstrap-css --}}
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>

    /*styles for the nav bar */
    .navbar {
        background: linear-gradient(to right, #333, #777);
    }

    /*styles for the category bar */
    .category-bar-container{
        background-color: #e0e0e0;
    }

   .scrollable-bar {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        padding: 10px;
        overflow-x: auto;
    }

    .scrollable-content {
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
    }

    .scrollable-content a {
        margin-right: 20px;
        text-decoration: none;
        color: black;
    }
    
    .scrollable-content a.active,
    .scrollable-content a:focus {
        font-weight: bold;
    }

    .scroll-button {
        background-color: #000;
        color: #fff;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }

    .scroll-button:hover {
        background-color: #333;
    }

</style>