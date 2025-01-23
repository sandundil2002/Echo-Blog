@include('libraries.scripts')

<div class="category-bar-container">
    <div class="d-flex align-items-center scrollable-bar">
        <div class="scrollable-content" id="scrollableContent">
            <a href="#">All</a>
            <a href="#">Education</a>
            <a href="#">Programming</a>
            <a href="#">Technology</a>
            <a href="#">Social Media</a>
            <a href="#">Artificial Intelligence</a>
            <a href="#">Freelancing</a>
            <a href="#">E-Money</a>
            <a href="#">Marketing</a>
        </div>
    </div>
</div>

<style>
    /*styles for the category bar */
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
    // script for title bar
    $(document).ready(function () {
        const links = $(".scrollable-content a");
        links.first().css("font-weight", "bold");

        links.on("click", function () {
            links.removeClass("active");
            links.css("font-weight", "normal");
            $(this).addClass("active");
            $(this).css("font-weight", "bold");
        });
    });
</script>