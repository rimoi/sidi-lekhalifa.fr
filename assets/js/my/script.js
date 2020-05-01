$(function(){
    $(".dropdown-menu.js-language li a").click(function(){
        var selText = $(this).attr('href');
        window.location.href = selText;
    });
});