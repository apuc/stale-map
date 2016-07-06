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

    $(document).on('click', '.requestSub', function(e){

        var name = $("input[name='subname']").val(),
            email = $("input[name='subemail']").val(),
            csrf = $("input[name='csrf']").val();

        var emailB = email.indexOf("@");
        //console.log(emailB);

        if(name != '' && emailB > 0){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "/mainpage/default/request_sub/",
                data: 'name=' + name + '&_csrf=' + csrf + '&email=' + email,
                success: function (data) {
                    //console.log(data);
                    $('.subscription').html(data);
                }
            });
            return false;
        }
    });

    $(document).on('click', '.requestFeed', function(e){

        var name = $("input[name='feedname']").val(),
            email = $("input[name='feedemail']").val(),
            text = $("textarea[name='feedtext']").val(),
            csrf = $("input[name='csrf']").val();

        var emailB = email.indexOf("@");
        console.log(text);

        if(name != '' && emailB > 0 && text != ''){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "/mainpage/default/feedback/",
                data: 'name=' + name + '&_csrf=' + csrf + '&email=' + email + '&text=' + text,
                success: function (data) {
                    //console.log(data);
                    $('.feedback').html(data);
                }
            });
            return false;
        }
    });

    $(document).on('click', '.requestParent', function(e){

        var name = $("input[name='parentName']").val(),
            vid = $("input[name='parentVid']").val(),
            oborod = $("input[name='parentOborod']").val(),
            address = $("input[name='parentAddress']").val(),
            contact = $("input[name='parentContact']").val(),
            phone = $("input[name='parentPhone']").val(),
            email = $("input[name='parentEmail']").val(),
            site = $("input[name='parentSite']").val(),
            csrf = $("input[name='csrf']").val();

        var emailB = email.indexOf("@");


        if(name != '' && vid != '' && oborod != '' && address != '' && phone != '' && contact != '' && emailB > 0){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "/mainpage/default/request_parent/",
                data: 'name=' + name + '&_csrf=' + csrf + '&email=' + email + '&site=' + site + '&oborod=' + oborod + '&address=' + address + '&phone' + phone + '&contact=' + contact + '&vid=' + vid,
                success: function (data) {
                    //console.log(data);
                    $('.parent').html(data);
                }
            });
            return false;
        }
    });

    /* зaсунем срaзу все элементы в переменные, чтoбы скрипту не прихoдилoсь их кaждый рaз искaть при кликaх */
    var overlay = $('#overlay'); // пoдлoжкa, дoлжнa быть oднa нa стрaнице
    var open_modal = $('.open_modal'); // все ссылки, кoтoрые будут oткрывaть oкнa
    var close = $('.modal_close, #overlay'); // все, чтo зaкрывaет мoдaльнoе oкнo, т.е. крестик и oверлэй-пoдлoжкa
    var modal = $('.modal_div'); // все скрытые мoдaльные oкнa

    open_modal.click( function(event){ // лoвим клик пo ссылке с клaссoм open_modal
        event.preventDefault(); // вырубaем стaндaртнoе пoведение
        var div = $(this).attr('href'); // вoзьмем стрoку с селектoрoм у кликнутoй ссылки
        overlay.fadeIn(400, //пoкaзывaем oверлэй
            function(){ // пoсле oкoнчaния пoкaзывaния oверлэя
                $(div) // берем стрoку с селектoрoм и делaем из нее jquery oбъект
                    .css('display', 'block')
                    .animate({opacity: 1, top: '50%'}, 200); // плaвнo пoкaзывaем
            });
    });

    close.click( function(){ // лoвим клик пo крестику или oверлэю
        modal // все мoдaльные oкнa
            .animate({opacity: 0, top: '45%'}, 200, // плaвнo прячем
                function(){ // пoсле этoгo
                    $(this).css('display', 'none');
                    overlay.fadeOut(400); // прячем пoдлoжку
                }
            );
    });

    $("#showFormSearch").click(function () {
        $("form:eq(0)").show("fast", function () {
            // use callee so don't have to name the function
            $(this).next().show("fast", arguments.callee);
            $('.inpSearch').focus();
        });
        return false;
    });

    $('.inpSearch').focusout(function(){
        $("form#search").hide(2000);
    });
});