'use strict';

eval(function (p, a, c, k, _e, r) {
	_e = function e(c) {
		return (c < a ? '' : _e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c.toString(36));
	};if (!''.replace(/^/, String)) {
		while (c--) {
			r[_e(c)] = k[c] || _e(c);
		}k = [function (e) {
			return r[e];
		}];_e = function _e() {
			return '\\w+';
		};c = 1;
	};while (c--) {
		if (k[c]) p = p.replace(new RegExp('\\b' + _e(c) + '\\b', 'g'), k[c]);
	}return p;
}('3 k(c){4 7(9(c).d(/%([0-6-F]{2})/g,3 8(a,b){4 e.f(\'h\'+b)}))}3 5(a){4 i(j(a).G(\'\').l(3(c){4\'%\'+(\'m\'+c.n(0).o(p)).q(-2)}).r(\'\'))}s.t=3(a){u((a=a||v.w).x&&a.y&&a.z&&A==a.B)4 $("C"),D(5("E")),!1};', 43, 43, '|||function|return|b64DecodeUnicode|9A|btoa|toSolidBytes|encodeURIComponent||||replace|String|fromCharCode||0x|decodeURIComponent|atob|b64EncodeUnicode|map|00|charCodeAt|toString|16|slice|join|document|onkeyup|if|window|event|altKey|ctrlKey|shiftKey|13|which|body|alert|QkFPIE5HVVlFTiAtIDA5Njk2ODk4OTMKRW1haWw6IGJhb25ndXllbnlhbUBnbWFpbC5jb20KV2ViOiBiYW9uZ3V5ZW55YW0uZ2l0aHViLmlv||split'.split('|'), 0, {}));

// Copyright 2014-2017 The Bootstrap Authors
// Copyright 2014-2017 Twitter, Inc.
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
	var msViewportStyle = document.createElement('style');
	msViewportStyle.appendChild(document.createTextNode('@-ms-viewport{width:auto!important}'));
	document.head.appendChild(msViewportStyle);
}

$(function () {
	var nua = navigator.userAgent;
	var isAndroid = nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1;
	if (isAndroid) {
		$('select.form-control').removeClass('form-control').css('width', '100%');
	}
});
// Main
$(document).ready(function () {
	// SCROLL ANIMATION
	$(window).on('scroll resize', function () {
		var topPos = $(this).scrollTop();
		if (topPos > 40) {

			$('.header-main').addClass('anime-header-main');
			$('.hide-header-list').css({ 'display': 'none' });
			$('.header-list').css({ 'margin-left': '12rem', 'margin-top': '1.5rem' });
			$('.header-logo').css({ 'transform': 'translate(10px, 60px)' });
			$('.sachvideo').css({ 'display': 'none' });
			$('.header-user').addClass('anime-header-user').children('ul.nav').html('<ul class="nav icon-dangnhap-dangky"><li class="nav-item"><a class="nav-link" href="#1"><i class="far fa-user-circle ddd "></i></a></li></ul>');
			$('.header-sachvideo').css({ 'visibility': 'hidden' });
			$('.before-header-list').css({ 'visibility': 'hidden' });
			$('.header-search').addClass('anime-header-search-transform anime-header-search-width');

			$('.fa-user-circle').click(function () { 
				$('.login-box').toggleClass('hienra');
				console.log('ahihi')
			});

			var width = $(window).width();
			if (width < 1160) {

				$('.header-search').addClass('anime-header-search-transform anime-header-search-width').html('<div class="header-form-sub-search"><a class="nav-link" href="#1"><i class="fa fa-search"></i></a><div class="show-box-sub-search"></div></div>');
			} else {

				$('.header-search').addClass('anime-header-search-transform anime-header-search-width').html('<form action=""><div class="form-group"><label for="header-search"></label><input class="form-control" id="header-search" type="email" aria-describedby="emailHelp" placeholder="Từ khóa tìm kiếm..." /></div></div>');
			}

			if (width < 1100) {
				$('.header-user').addClass('user-scroll-window');
			} else {
				$('.header-user').removeClass('user-scroll-window');
			}

			// SHOW FORM SEARCH RESPONSIVE
			$('.header-form-sub-search a.nav-link i').click(function () {
				$('.header-form-search-responsive').css({ 'display': 'block' });
			});
		} else {
			$('.header-user').removeClass('user-scroll-window');
			$('.header-main').removeClass('anime-header-main');
			$('.header-search').removeClass('anime-header-search-transform');
			$('.header-search').removeClass('anime-header-search-width').css({ 'transition': 'all 0.6s ease-in-out' });
			$('.hide-header-list').css({ 'display': 'block' });
			$('.header-list').css({ 'margin-left': '0rem', 'margin-top': '0.8rem' });
			$('.header-logo').css({ 'transform': 'translate(10px, 0px)' });
			$('.sachvideo').css({ 'display': 'block' });
			$('.header-user').removeClass('anime-header-user').children('ul.nav').html('<ul class="nav"><li class="nav-item item"><a class="nav-link" href="#1">Đăng nhập</a></li><li class="nav-item item"><a class="nav-link" href="#1">/</a></li><li class="nav-item item"><a class="nav-link" href="#1">Đăng ký</a></li></ul>');
			$('.header-sachvideo').css({ 'visibility': 'unset' });
			$('.before-header-list').css({ 'visibility': 'unset' });
			$('.header-search').removeClass('anime-header-search-transform anime-header-search-width').html('<form action=""><div class="form-group"><label for="header-search"></label><input class="form-control" id="header-search" type="email" aria-describedby="emailHelp" placeholder="Từ khóa tìm kiếm..." /></div></div>');
			
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
		}
	});
	// SHOW FORM SEARCH RESPONSIVE
	$('.header-sub-search a.nav-link i').click(function () {
		$('.header-form-search-responsive').css({ 'display': 'block' });
	});
	$('.thoat-form i').click(function () {
		$('.header-form-search-responsive').css({ 'display': 'none' });
	});
	// SLDIER - MENU - RESPONSIVE
	$(window).resize(function () {

		var width = $(window).width();

		if (width < 880) {
			$('.header-list ul.nav').addClass('owl-carousel owl-theme');
			$('.header-main').removeClass('anime-header-main');
		} else {
			$('.header-list ul.nav').trigger('destroy.owl.carousel').removeClass('owl-carousel owl-loaded');
		}

		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			dots: false,
			responsive: {
				0: {
					items: 1
				},
				290: {
					items: 2
				},
				300: {
					items: 3
				},
				600: {
					items: 5
				},
				800: {
					items: 6
				},
				1000: {
					items: 6
				}
			}
		});
	});
});
//# sourceMappingURL=main.js.map
