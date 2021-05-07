var current = 0;


// Project carousel
$(function () {
    $('[data-navigation] li').on("click", function () {
        $('.card-project:eq(' + current + ')').removeClass('card-project--active');

        current = $(this).index();
        $(this).addClass("is-active").siblings().removeClass('is-active');
        $('.card-project:eq(' + current + ')').addClass('card-project--active');
    });

});

// Contact form 
$('.js-input').keyup(function () {
    if ($(this).val()) {
        $(this).addClass('not-empty');
    } else {
        $(this).removeClass('not-empty');
    }
});

// Resume link
var resume = "#resume";
$(resume).click(function () {
    window.location.href = "/assets/images/2021 Resume Software development.pdf";
});