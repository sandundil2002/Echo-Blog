{{-- bootstrap-js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

{{-- jquery --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    // script for title bar
    $(document).ready(function() {
        const links = $('.scrollable-content a');
        links.first().css('font-weight', 'bold');

        links.on('click', function() {
            links.removeClass('active');
            links.css('font-weight', 'normal');
            $(this).addClass('active');
            $(this).css('font-weight', 'bold');
        });
    });

</script>