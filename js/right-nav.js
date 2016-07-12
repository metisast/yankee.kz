$(function(){
    $(".right-nav-links a").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 90;
        $('html, body').animate({ scrollTop: destination }, 1100);
        return false;
    });
    $(".right-nav, .top-right-nav").click(function(){
        $("#right-nav").show(200);
        return false;
    });
    $(".right-nav-angle").click(function(){
        $("#right-nav").hide(200);
        return false;
    });
});