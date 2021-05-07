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
    window.location.href = "https://docs.google.com/document/d/e/2PACX-1vRFD8X4CMISZjRmleC2qJ4N-KYvFhWu8ZnxCMqxHa-wAlnzzxovdoiuSV_-0BDmLHA0uUq7aSGvZn1m/pub";
});