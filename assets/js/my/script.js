$(function(){
    $(".dropdown-menu.js-language li a").click(function(){
        var selText = $(this).attr('href');
        window.location.href = selText;
    });

    let input_select2 = $('.js-select2');
    input_select2.select2({
        allowClear: true,
        placeholder: input_select2.attr('placeholder'),
    });
});