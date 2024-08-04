$(function () {


    $(window).scroll(function () {
        console.log($(window).scrollTop());

        if (($(window).scrollTop() > 600)) {
            $("header").addClass("header-position");
        }
        if (($(window).scrollTop() < 100)) {
            $("header").removeClass("header-position");
        }
    });
    
});


