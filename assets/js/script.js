$(".open").click(function() {
    var container = $(this).parents(".topic");
    var answer = container.find(".answer");
    var trigger = container.find(".faq-t");

    answer.slideToggle(200);

    if (trigger.hasClass("faq-o")) {
        trigger.removeClass("faq-o");
    } else {
        trigger.addClass("faq-o");
    }

    if (container.hasClass("expanded")) {
        container.removeClass("expanded");
    } else {
        container.addClass("expanded");
    }
});

jQuery(document).ready(function($) {
    $('.question').each(function() {
        $(this).attr('data-search-term', $(this).text().toLowerCase() + $(this).find("ptag").text().toLowerCase());

    });

    $('.live-search-box').on('keyup', function() {

        var searchTerm = $(this).val().toLowerCase();

        $('.question').each(function() {

            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                $(this).parent().parent().show();
            } else {
                $(this).parent().parent().hide();
            }

        });

    });

});

$(window).load(function() { // makes sure the whole site is loaded
    $("#status").fadeOut(); // will first fade out the loading animation
    $("#preloader").delay(500).fadeOut("slow"); // will fade out the white DIV that covers the website.
})