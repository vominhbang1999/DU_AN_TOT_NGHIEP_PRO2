$(document).ready(function () {
    $('.slider1').slick({
        arrows: !0,
        dots: !0,
        autoplay: !0,
        infinite: !1,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1199.98,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                arrows: !1,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                arrows: !1,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
            }
        }]
    })
});
$(document).ready(function () {
    $('.slider2').slick({
        prevArrow: $('.custom-slick-prevl'),
        nextArrow: $('.custom-slick-nextl'),
        dots: !1,
        arrows: !0,
        infinite: !1,
        autoplay: !0,
        speed: 600,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !0,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !0,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: !1,
                arrows: !0,
            }
        }]
    })
});
$(document).ready(function () {
    $('.slider3').slick({
        prevArrow: $('.custom-slick-prev'),
        nextArrow: $('.custom-slick-next'),
        dots: !1,
        arrows: !0,
        infinite: !1,
        speed: 600,
        autoplay: !0,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 1199.98,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !0,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !0,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !0,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !0,
            }
        }]
    })
});
$(document).ready(function () {
    $('.slider4').slick({
        prevArrow: $('.custom-slick-prev4'),
        nextArrow: $('.custom-slick-next4'),
        dots: !1,
        arrows: !0,
        infinite: !1,
        speed: 600,
        autoplay: !0,
        slidesToShow: 1,
        slidesToScroll: 1,
    })
});
$(document).ready(function () {
    $('.slider5').slick({
        dots: !1,
        arrows: !1,
        infinite: !1,
        speed: 500,
        autoplay: !0,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1199.98,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        }]
    })
});
$(document).ready(function () {
    $('.slider6').slick({
        prevArrow: $('.custom-slick-prev6'),
        nextArrow: $('.custom-slick-next6'),
        dots: !1,
        arrows: !0,
        infinite: !1,
        speed: 500,
        autoplay: !0,
        slidesToShow: 6,
        slidesToScroll: 3,
        responsive: [{
            breakpoint: 1199.98,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                dots: !1,
                arrows: !1,
                autoplay: !0,
            }
        }]
    })
});
$(document).ready(function () {
    $('.slider10').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !0,
        fade: !0,
        speed: 500,
        autoplay: !0,
        asNavFor: '.slider-nav',
        responsive: [{
            breakpoint: 1199.98,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                dots: !0,
                arrows: !1,
                autoplay: !0,
            }
        },
        ]
    });
    $('.slider-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.slider10',
        dots: !1,
        centerMode: !0,
        focusOnSelect: !0
    })
});
new WOW().init();
var listitem = document.querySelectorAll(".slider10");
listitem.forEach(function (i) {
    i.classList.add("wow", "swing")
    i.setAttribute("data-wow-duration", "1.5s")
})
var listitem1 = document.querySelectorAll(".amimate ")
listitem1.forEach(function (i) {
    i.classList.add("wow", "bounceInUp")
    i.setAttribute("data-wow-duration", "2s")   
})
var listitem2 = document.querySelectorAll(".animate1")
listitem2.forEach(function (i) {
    i.classList.add("wow", "jackInTheBox");
    i.setAttribute("data-wow-delay", "1s");
    i.setAttribute("data-wow-duration", "1.8s")
})
var listitem3 = document.querySelectorAll(".animate2")
listitem3.forEach(function (i) {
    i.classList.add("wow", "swing")
    i.setAttribute("data-wow-offset", "140")
})
var listitem4 = document.querySelectorAll(".animate3")
listitem4.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "240")
    i.setAttribute("data-wow-duration", "1.5s") 
    
})
var listitem5 = document.querySelectorAll(".animate4")
listitem5.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "150");
    i.setAttribute("data-wow-duration", "1.7s") 
})
var listitem6 = document.querySelectorAll(".animate5")
listitem6.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "100");
    i.setAttribute("data-wow-duration", "1.7s") 
})
var listitem7 = document.querySelectorAll(".animate6")
listitem7.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "100");

    i.setAttribute("data-wow-duration", "1.7s") 
})
var listitem8 = document.querySelectorAll(".animate7")
listitem8.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "100");
    i.setAttribute("data-wow-duration", "1.7s") 
})
var listitem9 = document.querySelectorAll(".animate8")
listitem9.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "100");
    i.setAttribute("data-wow-duration", "1.2s") 
})
var listitem10 = document.querySelectorAll(".animate9")
listitem10.forEach(function (i) {
    i.classList.add("wow", "slideInUp");
    i.setAttribute("data-wow-offset", "100");
    i.setAttribute("data-wow-duration", "0.8s");
        
})
$(document).ready(function () {
    $(window).scroll(function(){ 
      if ($(this).scrollTop() > 1000) { 
          $('.backtotop').fadeIn(); 
      } else { 
          $('.backtotop').fadeOut(); 
      } 
  }); 
    
    $('.backtotop').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 1500); 
      return false; 
  }); 
    
  });





$(document).ready(function () {
    $(".lyrics .xt").click(function (e) {
        e.preventDefault();
        $(".containlyrics").toggleClass("changeheight");
        $(this).toggleClass("changedeg")
    })
})


//====================================== JS  HIỆN  FORM ĐĂNG NHẬP ĐĂNG KÝ =================================================//

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

// ========================================== JS TRANG ALBUM ================================================== //

$('.duma').click(function (e) { 
    e.preventDefault();
    $('.mobile').toggleClass('heightauto');
    $(this).toggleClass('xoay180');
   
    
    
});



$('.duma2').click(function (e) { 
    e.preventDefault();
    $('.mobile2').toggleClass('heightauto');
    $(this).toggleClass('xoay180');
    
});
$('.duma3').click(function (e) { 
    e.preventDefault();
    $('.mobile3').toggleClass('heightauto');
    $(this).toggleClass('xoay180');
    
});
$('.duma4').click(function (e) { 
    e.preventDefault();
    $('.mobile4').toggleClass('heightauto');
    $(this).toggleClass('xoay180');
    
});
$('.duma5').click(function (e) { 
    e.preventDefault();
    $('.mobile5').toggleClass('heightauto');
    $(this).toggleClass('xoay180');
    
});

// ======================================================== DETAIL CA SI =======================================//

$(document).ready(function () {
    if ($(window).width() < 567) {
       $('#focus').addClass('focus1');
     }
     
});

// ====================================================== BACK TO TOP =========================================//

$(document).ready(function () {
    $(window).scroll(function(){ 
      if ($(this).scrollTop() > 1000) { 
          $('.backtotop').fadeIn(); 
      } else { 
          $('.backtotop').fadeOut(); 
      } 
  }); 
    
    $('.backtotop').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 1500); 
      return false; 
  }); 
  });


// ======================================================= SHOW FORM ĐĂNG NHẬP ĐĂNG KÝ =========================//

$(document).ready(function () {
    $('#dn').click(function (e) { 
        e.preventDefault();
        $('.from-dn').toggleClass('change');
        $('.momo').addClass('changemomo');
    });

    $('#dk').click(function (e) { 
        e.preventDefault();
        $('.from-dn').removeClass('change');
        $('.from-dk').toggleClass('change1');
        $('.momo').addClass('changemomo');
        
    });
    $('.close').click(function (e) { 
        e.preventDefault();
        $('.from-dn').removeClass('change');
         $('.from-edit-comment').removeClass('change');
        $('.momo').removeClass('changemomo');
    });
    $('.from-dk .close').click(function (e) { 
        e.preventDefault();
        $('.from-dk').removeClass('change1');
        $('.momo').removeClass('changemomo');
    });
    $('.momo').click(function (e) { 
        e.preventDefault();
        $(this).removeClass('changemomo');
        $('.from-dn').removeClass('change');
        $('.from-edit-comment').removeClass('change');
        $('.from-dk').removeClass('change1');
    });
    $('#tk').click(function (e) { 
        $('.from-dn').removeClass('change');
        $('.from-dk').addClass('change1');
    });
    $('#ctk').click(function (e) { 
        e.preventDefault();
        $('.from-dk').removeClass('change1');
        $('.from-dn').addClass('change');
    });
});


// ======================= VIDEO JS PLYER ====================//

document.addEventListener('DOMContentLoaded', () => { 
  // This is the bare minimum JavaScript. You can opt to pass no arguments to setup.
  const player = new Plyr('#player');
  
  // Expose
  window.player = player;

  // Bind event listener
  function on(selector, type, callback) {
    document.querySelector(selector).addEventListener(type, callback, false);
  }

});


// ===================================== DETAIL AUDIO =================================//

$(document).ready(function () {
    $(".lyrics .xt").click(function (e) { 
        e.preventDefault();
        $(".containlyrics").toggleClass("changeheight");
        $(this).toggleClass("changedeg");
        
    });
});


// ==================================== UPDATE BÌNH LUẬN =============================//

$(document).ready(function() {
    $('.fa-edit').click(function() {
        $(this).parents('.noidungbinhluan').children('.form-update-binhluan').css({
            'opacity': '1',
            'visibility': 'visible',
            'transform': 'scale(1)',
            'transition': '0.3s'
        });
        $('.huyupdate').click(function() {
            $('.form-update-binhluan').css({
                'opacity': '0',
                'visibility': 'hidden',
                'transform': 'scale(0)',
                'transition': '0.3s'
            });
        })
    })
    $('.replycomment').click(function() {
        $(this).parents('.noidungbinhluan').find('.form-traloi').css({
            'opacity': '1',
            'visibility': 'visible',
            'transform': 'scale(1)',
            'transition': '0.3s'
        });
        $('.huyreply').click(function() {
            $('.form-traloi').css({
                'opacity': '0',
                'visibility': 'hidden',
                'transform': 'scale(0)',
                'transition': '0.3s'
            });
        })
        
    })
})


// ==================================================================== Ẩn Bình Luận Nhiều ============================================= //

$(document).ready(function() {
    $('.xemthemcomment').click(function() {
        $(this).parents('.comment_cha').css({
            'height' : 'auto'
        })
        $(this).css({
            'visibility':'hidden'
        })
        $(this).parents('.comment_cha').children('.ancomment').css({
            'visibility':'unset'
        })
    })
    $('.ancomment').click(function() {
        $(this).parents('.comment_cha').css({
            'height' : '230px'
        })
        $(this).css({
            'visibility':'hidden'
        })
        $(this).parents('.comment_cha').children('.xemthemcomment').css({
            'visibility':'unset'
        })
    })

})