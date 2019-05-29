var typed = new Typed(".textp", {
    strings: [
        "I'm 26 Years Old,^700\n",
        "FullsStuck Developer",
        "Fullstuck Developer. ^900\n"
    ],
    smartBackspace: true,
    backSpeed: 50,
    typeSpeed: 90,
    backDelay: 30,
    loop: true
});

$(window).scroll(function () {
    if ($(document).scrollTop() > 330) {
        $('nav').addClass('shrink');
    } else {
        $('nav').removeClass('shrink');
    }
});

// $(function () {
//     $('.selectpicker').selectpicker();
// });