$(document).ready(function () {


    $(".phone").mask("+ 7 (999) 999 - 99 - 99?");

    $('a[name=modal]').click(function (e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({ 'width': maskWidth, 'height': maskHeight });
        $('#mask').fadeTo("slow", 0.8);
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        $(id).css('top', posTop + 50);
        $(id).css('left', winW / 2 - $(id).width() / 2);
        $('html, body').css("overflow-y", "hidden");
        $(id).fadeIn(500);
    });
    $('.window .close-btn').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
        $('html, body').removeAttr("style");
    });

    $('#mask').click(function () {
        $('#mask').hide();
        $('.window').hide();
        $('html, body').removeAttr("style");
    });

    $(".form").submit(function () {
        var tel = $(this).find('input[name="phone"]');
        var empty = false;
        if (tel.val() == "") {
            empty = true;
        }
        if (empty == true) {
            tel.addClass("error-input");
            tel.focus();
        } else {
            var form_data = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "/sendmessage.php",
                data: form_data,
                success: function () {
                    cleanTnanks(this);
                }
            });
        }
        return false;
    });
    function cleanTnanks(form) {
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window, #mask').hide();
        $('a[href="#thanks"]').trigger('click');
        // location = "spasibo.php";
    };

});