$(function(){
    var top_show = 600; // � ����� ��������� ������ ��������� �������� ����� ������ "������"
    var delay = 1000; // �������� ���������
    $(document).ready(function() {
        $(window).scroll(function () { // ��� ��������� �������� � ��� �������
            /* � ����������� �� ��������� ������ ��������� � �������� top_show, �������� ��� ��������� ������ "������" */
            if ($(this).scrollTop() > top_show) $('#top-nav').fadeIn();
            else $('#top-nav').fadeOut();
        });
        $('.go-top').click(function () { // ��� ����� �� ������ "������" �������� � ��� �������
            /* ������� ��������� ������ */
            $('body, html').animate({
                scrollTop: 0
            }, delay);
        });
    });
});
