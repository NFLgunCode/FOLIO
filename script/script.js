var typed = new Typed(".textp", {
    strings: [
        "J'ai 26 ans,^700\n",
        "Développeur FullsStuck",
        "Développeur Fullstuck. ^900\n"
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