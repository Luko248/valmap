$(document).ready(function () {
    $("#nav-icon4").click(function () {
        if (!$(".menu").hasClass('showed')) {
            $(".menu").addClass('showed');
        }
        else {
            $('.menu').removeClass('showed');
        }
    });

    $(document).click(function (e) {
        if ($(window).width() < 982 && !$(e.target).hasID('show-nav')) {
            $('.menu').removeClass('showed');
        }
    });

    $('li').click(function () {
        $("li.active").removeClass("active");
        $(this).addClass('active');
    });

    $(window).scroll(function () {
        if ($(document).scrollTop() > 100) {
            $(".navigation-bar").addClass("small");
        } else {
            $(".navigation-bar").removeClass("small");
        }
    });
    $("#homeScroll").click(function () {
        $('html,body').animate({
            scrollTop: $(".banner-section").offset().top
        }, 'slow');
    });

    $(".footer-content__logo").click(function () {
        $('html,body').animate({
            scrollTop: $(".banner-section").offset().top
        }, 'slow');
    });

    $("#aboutScroll").click(function () {
        $('html,body').animate({
            scrollTop: $(".about-section").offset().top - 70
        }, 'slow');
    });

    $("#productsScroll").click(function () {
        $('html,body').animate({
            scrollTop: $(".products-section").offset().top - 70
        }, 'slow');
    });

    $("#projectsScroll").click(function () {
        $('html,body').animate({
            scrollTop: $(".smallbanner-section").offset().top - 70
        }, 'slow');
    });

    $("#contactScroll").click(function () {
        $('html,body').animate({
            scrollTop: $(".contact-section").offset().top - 70
        }, 'slow');
    });

    $('#nav-icon4').click(function () {
        $(this).toggleClass('open');
    });

    $('.prod1').click(function () {
        $('.contact-form__message').val('Dobrý den, rád bych poptal exteriérové práce, konkrétně:');
        $('#athleteBody1').slideUp("slow");
    });

    $('.prod2').click(function () {
        $('.contact-form__message').val('Dobrý den, rád bych poptal interiérové práce, konkrétně');
        $('#athleteBody1').slideUp("slow");
    });

    $('.prod3').click(function () {
        $('.contact-form__message').val('Dobrý den, rád bych poptal výstavbu či rekonstrukci střešních systémů, moje představa je');
        $('#athleteBody1').slideUp("slow");
    });
});

window.onload = function (e) {
    if (document.location.hash) $(document).scrollTop(document.body.scrollTop - 70);
}


