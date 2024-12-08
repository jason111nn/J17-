$(document).ready(() => {
    $(".loading").delay(1000).fadeOut(500, function () {
        $("#content").animate({ opacity: 1 }, 800);
    });
});