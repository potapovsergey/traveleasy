jQuery('document').ready(function () {
    $(window).scroll(function () {
        $(this).each(function () {
            if($(this).scrollTop() >= 150){
                $('.chevron_display_up').css('display', 'block');
                $('.chevron_display_down').css('display','none');
            }else{
                $('.chevron_display_up').css('display', 'none');
            }
        });
    });
    var save_sc;
    $('.chevron_display_up').on('click',function () {
        save_sc = $(window).scrollTop();
        $(window).scrollTop(0);
        $('.chevron_display_down').css('display', 'block');
    });
    $('.chevron_display_down').on('click',function () {
        $(window).scrollTop(save_sc);
        save_sc = null;
    });
});