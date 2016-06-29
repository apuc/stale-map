$(document).ready(function(){
    $(document).on('click', '#more-news', function(){
        var page = parseInt($(this).attr('data-count'),10);
        var csrf = $(this).attr('data-csrf');
       // $(this).remove();
        $(this).attr('data-count', page + 1);
        $.ajax({
            type: 'POST',
            url: "/blog/default/ajax_get_blog/",
            data: 'page=' + page + '&_csrf=' + csrf,
            success: function (data) {

                $( ".wall" ).append( data  );
            }
        });
        return false;
    });


    $(document).on('click', '.showPhoto', function(){
        var id = $(this).attr('data-id');
        //console.log(id);
        var csrf = $(this).attr('data-csrf');
        $.ajax({
            type: 'POST',
            url: "/gallery/default/show_photo/",
            data: 'id=' + id + '&_csrf=' + csrf,
            success: function (data) {
                $('.gallery-wrap').html(data);
                jQuery(".gallery-carousel").owlCarousel({
                    navigation : true, // Show next and prev buttons
                    slideSpeed : 300,
                    pagination : false,
                    singleItem:true,
                    navigationText : false,
                });

            }
        });

        return false;
    });
});