

// end 
// js cho nut gooen
document.querySelector(".goo__toggler").addEventListener("click", function () {
    let els = document.querySelectorAll(".goo__btn");
    for (let i = 0; i < els.length; i++) {
        els[i].classList.toggle('active');
    };
    document.querySelector(".goo__toggler").classList.toggle("active");
});
// end
// js cho back top
$(document).ready(function () {

    $('.goo__btn.goo__btn--4').click(function () {
        $("html, body").animate({ scrollTop: 0 }, 1500);
        return false;
    });
});
// end back to top
$(document).ready(function () {
    $('.slider1').slick({
        arrows: true,
        dots: true,
        autoplay: true,
        infinite: false,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,

        responsive: [
            {
                breakpoint: 1199.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }

        ]
    });
});
$(document).ready(function () {
    $('.slider2').slick({
        prevArrow: $('.custom-slick-prevl'),
	    nextArrow: $('.custom-slick-nextl'),
        dots: false,
        arrows: true,
        infinite: false,
        autoplay:true,
        speed: 600,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                }
            }
           
        ]

    });
});

$(document).ready(function () {
    $('.slider3').slick({
        prevArrow: $('.custom-slick-prev'),
	    nextArrow: $('.custom-slick-next'),
        dots: false,
        arrows:true,
        infinite: false,
        speed: 600,
        autoplay:true,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1199.98,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: true,
                }
            }
        
        ]
    });
});
$(document).ready(function () {
    $('.slider4').slick({
        prevArrow: $('.custom-slick-prev4'),
	    nextArrow: $('.custom-slick-next4'),
        dots: false,
        arrows:true,
        infinite: false,
        speed: 600,
        autoplay:true,
        slidesToShow: 1,
        slidesToScroll: 1,
       
    });
});
$(document).ready(function () {
    $('.slider5').slick({
       
        dots: false,
        arrows:false,
        infinite: false,
        speed: 500,
        autoplay:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1199.98,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            }
           
        ]
    });
});
$(document).ready(function () {
    $('.slider6').slick({
        prevArrow: $('.custom-slick-prev6'),
	    nextArrow: $('.custom-slick-next6'),
        dots: false,
        arrows:true,
        infinite: false,
        speed: 500,
        autoplay:true,
        slidesToShow: 6,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 1199.98,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    dots: false,
                    arrows: false,
                    autoplay:true,
                }
            }
           
        ]
    });
});



$(document).ready(function () {
    
    $('.slider10').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        speed: 500,
        autoplay:true,
        asNavFor: '.slider-nav',
        responsive: [
            {
                breakpoint:1199.98,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                    autoplay:true,
                }
            },
        ]
      });
      $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider10',
        dots: false,
        centerMode: true,
        focusOnSelect: true
      });

});

// wowjs 

new WOW().init();
// var listitem = document.querySelectorAll(".slider10");
// listitem.forEach(function(i){
//     i.classList.add("wow", "swing")
// })
// xxxxxxxxxxxxxxx
// var listitem1 = document.querySelectorAll(".amimate ")
// listitem1.forEach(function(i){
//     i.classList.add("wow", "bounceInUp" )
// })
// xxxxxxxxxxxxxx
// var listitem2 = document.querySelectorAll(".animate1")
// listitem2.forEach(function(i){
//     i.classList.add("wow","bounceInRight");
//     i.setAttribute("data-wow-delay" ,"1s");
// })
// xxxxxxxxxxxxxxxxx


// var listitem3 = document.querySelectorAll(".animate2")
// listitem3.forEach(function(i){
//     i.classList.add("wow", "swing")
// })
// xxxxxxxxxxxxxxx
var listitem4 = document.querySelectorAll(".animate3")
listitem4.forEach(function(i){
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset","140")
})
// xxxxxxxxxxxxxxx
var listitem5 = document.querySelectorAll(".animate4")
listitem5.forEach(function(i){
    i.classList.add("wow", "bounceInLeft");
    i.setAttribute("data-wow-offset","150")
})
// animate home-mv

var listitem6 = document.querySelectorAll(".animate5")
listitem6.forEach(function(i){
    i.classList.add("wow", "bounceInLeft");
    i.setAttribute("data-wow-offset","200")
})
var listitem7 = document.querySelectorAll(".animate6")
listitem7.forEach(function(i){
    i.classList.add("wow", "bounceInRight");
    i.setAttribute("data-wow-offset","200");
    i.setAttribute("data-wow-delay" ,"0.5s");
})
var listitem8 = document.querySelectorAll(".animate7")
listitem8.forEach(function(i){
    i.classList.add("wow", "zoomIn");
    i.setAttribute("data-wow-offset","400");
    
})
var listitem9 = document.querySelectorAll(".animate8")
listitem9.forEach(function(i){
    i.classList.add("wow", "slideInLeft");
    i.setAttribute("data-wow-offset","200");
    
})
var listitem10 = document.querySelectorAll(".animate9")
listitem10.forEach(function(i){
    i.classList.add("wow", "slideInRight");
    i.setAttribute("data-wow-offset","200");
    
})

// totop

$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.totop').fadeIn();
    } else {
        $('.totop').fadeOut();
    }
});

$(".totop").click(function() {
    $("html, body").animate({scrollTop: 0}, 1000);
 });

// js
$(document).ready(function () {
    $(".lyrics .xt").click(function (e) { 
        e.preventDefault();
        $(".containlyrics").toggleClass("changeheight");
        $(this).toggleClass("changedeg");
        
    });
});




$(document).ready(function () {
    $('.header-user .nav .nav-item.item:nth-child(1)').click(function (e) { 
        e.preventDefault();
        $('.login-box').toggleClass('hienra');
    });
    
});
$(document).ready(function () {
    $('.header-user .nav .nav-item.item:nth-child(3)').click(function (e) { 
        e.preventDefault();
        $('.login-box').toggleClass('hienra');
    });
    $('i.close').click(function (e) { 
        e.preventDefault();
        $('.login-box').removeClass('hienra');
    });
    $('.ccc').click(function (e) { 
        e.preventDefault();
        $('.login-box').toggleClass('hienra');
    });

});


$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});