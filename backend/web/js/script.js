$(document).ready(function(){

    $(document).on('change','.itemImg',function(){
        var path = $('.itemImg').val();
        $('.media__upload_img').html('<img src="' +path + '" width="100px"/> <br>');
    });

    $(document).on('change','.itemIcon',function(){
        var path = $('.itemIcon').val();
        $('.media__upload_icon').html('<img src="' +path + '" width="100px"/> <br>');
    });

    $(document).on('change', '.selectLang', function(){
        var langId = $(this).val();
        $.ajax({
            type: 'POST',
            url: "/secure/news/news/get_categ",
            data: 'langId=' + langId,
            success: function (data) {
                $(".selectCat").html(data);
            }
        });
    });

    $('#saveInfo').on('click', function(e){
        $('#input-5').fileinput('upload');
    });

    $(document).on('click', '.addPhone', function(){
        $(this).before('<div><input type="text" class="form-control leftInput" name="Phone[]"><span class="delPhone">Удалить</span></div>');
    });

    $(document).on('click', '.addSlid', function(){
        $.ajax({
            type: 'POST',
            url: "/secure/franchise/default/show",
            data: '',
            success: function (data) {
                console.log(data);
                $('.addSlid').before(data);
            }
        });

        return false;
    });

    $(document).on('click', '.delPhone', function(){
        $(this).parent().remove();
        $(this).remove();
    });
});