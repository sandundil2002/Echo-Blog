@include('libraries.scripts')

<div class="category-bar-container">
    <div class="d-flex align-items-center scrollable-bar">
        <div class="scrollable-content" id="scrollableContent">
            <a href="{{ route('filterByCategory', ['category' => 'All']) }}">All</a>
            <a href="{{ route('filterByCategory', ['category' => 'Education']) }}">Education</a>
            <a href="{{ route('filterByCategory', ['category' => 'Programming']) }}">Programming</a>
            <a href="{{ route('filterByCategory', ['category' => 'Technology']) }}">Technology</a>
            <a href="{{ route('filterByCategory', ['category' => 'Social Media']) }}">Social Media</a>
            <a href="{{ route('filterByCategory', ['category' => 'Artificial Intelligence']) }}">Artificial
                Intelligence</a>
            <a href="{{ route('filterByCategory', ['category' => 'Freelancing']) }}">Freelancing</a>
            <a href="{{ route('filterByCategory', ['category' => 'E-Money']) }}">E-Money</a>
            <a href="{{ route('filterByCategory', ['category' => 'Marketing']) }}">Marketing</a>
        </div>

    </div>
</div>

<style>
    .category-bar-container {
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

<script>
    $(document).ready(function () {
            const links = $(".scrollable-content a");
            const currentCategory = window.location.href.split('/').pop();

            if (currentCategory === '' || currentCategory === 'All') {
                links.first().addClass("active").css("font-weight", "bold");
            } else {
                links.each(function () {
                    const category = $(this).attr('href').split('/').pop();
                    if (category === currentCategory) {
                        $(this).addClass('active').css("font-weight", "bold");
                    }
                });
            }

            links.on("click", function () {
                links.removeClass("active").css("font-weight", "normal");
                $(this).addClass("active").css("font-weight", "bold");
            });
        });

</script>