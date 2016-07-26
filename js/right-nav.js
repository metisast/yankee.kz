$(function(){
    $(".right-nav-links a, .btn-free-consul").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 90;
        $('html, body').animate({ scrollTop: destination }, 1100);
        $("#right-nav").fadeOut(200);
        return false;
    });
    $(".right-nav, .top-right-nav").click(function(){
        $("#right-nav").fadeIn(200);
        $('.right-nav-block').animate({
            right: 0
        }, 500);
        return false;
    });
    $(".right-nav-angle").on('touchstart click', function(e){
         $('.right-nav-block').animate({
            right: -1000
         }, 500);
         $("#right-nav").fadeOut(200);
         return false;
     });
});
