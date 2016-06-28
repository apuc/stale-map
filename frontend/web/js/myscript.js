$(document).ready(function(){
    $(document).on('click', '#more-news', function(){
        var page = parseInt($(this).attr('data-count'),10);
        var csrf = $(this).attr('data-csrf');
        $(this).parent().remove();
        $.ajax({
            type: 'POST',
            url: "/blog/default/ajax_get_blog/",
            data: 'page=' + page + '&_csrf=' + csrf,
            success: function (data) {
                $( data ).insertBefore( $( ".ajaxNews" ) );
            }
        });
        return false;
    });
});

