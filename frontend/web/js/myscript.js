$(document).ready(function(){

    jQuery(".galleryCommand").owlCarousel({
        navigation : true, // Show next and prev buttons
        slideSpeed : 300,
        pagination : false,
        //singleItem:true,
        //navigationText : false,
        items: 4,
        navigationText : ["<span class='icon icon-slide-prev'></span>","<span class='icon icon-slide-next'></span>"],
    });

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

    $(document).on('click', '.news-box__more', function(){
        var type = $(this).data("type");
        var csrf = $(this).data('csrf');
        var page = parseInt($(this).data('count'),10);
        $(this).data('count', page + 1);
        $.ajax({
            type: 'POST',
            url: "/specials/default/ajax_get_specials/",
            data: 'page=' + page + '&_csrf=' + csrf + '&type=' + type,
            success: function (data) {

                $( 'a.news-box__more[data-type="' + type +'"' ).before( data );
            }
        });
        return false;
    });

    $(document).on('click', '.requestStiling', function(e){

        var name = $("input[name='name']").val(),
            lastname = $("input[name='lasname']").val(),
            email = $("input[name='email']").val(),
            csrf = $("input[name='csrf']").val();

        var emailB = email.indexOf("@");
        //console.log(emailB);

        if(name != '' && lastname != '' && emailB > 0){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "/mainpage/default/request_stailing/",
                data: 'name=' + name + '&_csrf=' + csrf + '&lastname=' + lastname + '&email=' + email,
                success: function (data) {
                    console.log(data);
                    $('.form').html(data);
                }
            });
            return false;
        }
    });
});