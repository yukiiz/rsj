var ua = {};
ua.name = window.navigator.userAgent.toLowerCase();
ua.isiPhone = ua.name.indexOf("iphone") >= 0;
ua.isAndroid = ua.name.indexOf("android") >= 0;
ua.isTouch = "ontouchstart" in window;

var slider;
$(function () {
	var allH = $(".content-wrap").height();
	var footerH = $(".footer").height();
	$(window).on("load resize", function () {
		w = window.innerWidth ? window.innerWidth : $(window).width();
		h = window.innerHeight ? window.innerHeight : $(window).height();
	});
	if (ua.isTouch) {
		w = screen.width;
		h = screen.height;
	} else {
		w = window.innerWidth ? window.innerWidth : $(window).width();
		h = window.innerHeight ? window.innerHeight : $(window).height();
	}
	//ページ内スムーズリンク
	$(document).on("click", 'a[href*="#"]', function () {
		let time = 1000;
		let target = $(this.hash);
		if (!target.length) return;

		let targetY = target.offset().top;
		$("html,body").animate({ scrollTop: targetY }, time, "swing");
		return false;
	});

	/*-----------------------------------------------------------------*/
	//TOPに戻る
	$(window).on("load scroll resize", function () {
		if ($(window).scrollTop() < 100) {
			$(".js-pagetop").removeClass("view").addClass("fixed");
		} else if ($(window).scrollTop() < allH - footerH - h - 120) {
			$(".js-pagetop").addClass("view").addClass("fixed");
		} else {
			$(".js-pagetop").addClass("view").removeClass("fixed");
		}
	});
	/*-----------------------------------------------------------------*/
	//お知らせ開閉させる
	$(".news-def > dd.js-news").on("click", function () {
		$(this).next("dd").slideToggle();
		$(this).toggleClass("active");
	});

	$(function () {
		$(".js-accordion-title").on("click", function () {
			$(this).next().slideToggle();
			//openクラスをつける
			$(this).toggleClass("is-active");
			//クリックされていないac-parentのopenクラスを取る
			$(".js-accordion-title").not(this).removeClass("is-active");

			// 一つ開くと他は閉じるように
			$(".js-accordion-title").not($(this)).next(".ac-child").slideUp();
		});
	});
	/*-----------------------------------------------------------------*/
	/*scroll-animation*/
	$(window).on("load scroll", function () {
		$(".js-scroll-anima").each(function () {
			var winScroll = $(window).scrollTop();
			var winHeight = $(window).height();
			var scrollPos = winScroll + winHeight * 0.8;
			if ($(this).offset().top < scrollPos) {
				$(this).css({ opacity: 1, transform: "translate(0, 0)" });
			}
		});
	});
	/*-----------------------------------------------------------------*/
	/*scroll-animation2*/
	$(function () {
		// aimation呼び出し
		if ($(".js-scroll-animated").length) {
			scrollAnimation();
		}
		// aimation関数
		function scrollAnimation() {
			$(window).scroll(function () {
				$(".js-scroll-animated").each(function () {
					let position = $(this).offset().top,
						scroll = $(window).scrollTop(),
						windowHeight = $(window).height();
					if (scroll > position - windowHeight + 200) {
						$(this).addClass("is-animated");
					}
				});
			});
		}
		$(window).trigger("scroll");
	});
	/*-----------------------------------------------------------------*/
	//スライダー設定

	slider = $(".slider").slick({
		autoplay: true,
		infinite: true,
		dots: true, //ドットのナビゲーションを表示
		arrows: true,
		slidesToShow: 1, //表示するスライドの数
		slidesToScroll: 1, //スクロールで切り替わるスライドの数
		pauseOnFocus: false,
		pauseOnHover: false,
		responsive: [
			{
				breakpoint: 1023, // 600〜1023px
				settings: {
					slidesToShow: 1, //表示するスライドの数
					slidesToScroll: 1, //スクロールで切り替わるスライドの数
					//centerMode: true, //要素を中央寄せ
					dots: false, //ドットのナビゲーションを表示
					//centerPadding: "8%", //両サイドの見えている部分のサイズ
					rows: 1,
					slidesPerRow: 1,
				},
			},
			{
				breakpoint: 768, // 600〜1023px
				settings: {
					slidesToShow: 1, //表示するスライドの数
					slidesToScroll: 1, //スクロールで切り替わるスライドの数
					//centerMode: true, //要素を中央寄せ
					dots: true, //ドットのナビゲーションを表示
					//centerPadding: "8%", //両サイドの見えている部分のサイズ
					rows: 1,
					slidesPerRow: 1,
				},
			},
		],
	});

	/*------------------------------------------------------------------*/
	//sp-nav
	(function ($) {
		var $nav = $("#js-gnav_sp");
		var $btn = $(".gnav-toggle");
		var $mask = $("#mask");
		var open = "open"; // class
		// menu open close
		$btn.on("click", function () {
			if (!$nav.hasClass(open)) {
				$nav.addClass(open);
			} else {
				$nav.removeClass(open);
			}
		});
		// mask close
		$mask.on("click", function () {
			$nav.removeClass(open);
		});
	})(jQuery);
	//pc-header
	var _window = $(window),
		_header = $(".top-header"),
		heroBottom;

	_window.on("scroll", function () {
		if ($(this).scrollTop() > 100) {
			_header.addClass("transform");
		} else {
			_header.removeClass("transform");
		}
	});

	_window.trigger("scroll");

	//高さを合わせる
	if ($(".match-height01").length) {
		$(".match-height01").matchHeight();
	}
	if ($(".match-height02").length) {
		$(".match-height02").matchHeight();
	}
	if ($(".match-height03").length) {
		$(".match-height03").matchHeight();
	}

	/*-----------------------------------------------------------------*/
	// MV動画
	var is_watched = sessionStorage.getItem('movie-watched');
	if(is_watched){ //すでに動画を見た場合
		$(".mv-movie, .mv-loader").remove();
	} else{//初回再生の場合
		var player = $('#player').get(0);
		if (ua.isiPhone || ua.isAndroid) {
			//SPの場合
			$(".mv-movie, .mv-loader").remove();
		} else {
			player.addEventListener('ended',function() {
				$('.mv-movie').fadeOut();
				slider.slick("slickGoTo", 0, true);
				sessionStorage.setItem('movie-watched', true);
			});
		}
	}
});


