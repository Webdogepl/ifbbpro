let $ = jQuery.noConflict();

/*-----------------------  CHOOSE LANGUAGE BOX ---------------------------*/

function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(";");
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == " ") {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function chooseLanguage() {
	if (
		!getCookie("prefLang") &&
		getCookie("pll_language") === "pl" &&
		navigator.language !== "pl-PL"
	) {
		$("#chooseLanguageBox").slideDown(500).css("display", "grid");

		$("#chooseLang__PL").click(function (e) {
			e.preventDefault();
			setCookie("prefLang", "PL", 14);
			$("#chooseLanguageBox").slideUp(500);
		});

		$("#chooseLang__EN").click(function (e) {
			e.preventDefault();
			setCookie("prefLang", "EN", 14);
			window.location = $("#translatedLink")[0].href;
		});
	}
}
$(document).ready(() => {
	setTimeout(chooseLanguage, 1500);
});

/*------------------------------------------------ TOP SLIDER -------------------------------------------------*/

let total = $("#top-slider img").length;
rand = Math.floor(Math.random() * total);

$("#top-slider").slick({
	dots: false,
	infinite: true,
	autoplay: true,
	fade: true,
	arrows: false,
	speed: 1500,
	autoplaySpeed: 3000,
	useCSS: true,
	slide: "div",
	slidesToShow: 1,
	pauseOnHover: false,
	slidesToScroll: 1,
	initialSlide: rand,
});

$(".left").click(function () {
	$("#top-slider").slick("slickPrev");
});

$(".right").click(function () {
	$("#top-slider").slick("slickNext");
});

/*------------------------------------------------ FRONTPAGE BANNERS -------------------------------------------------*/

const frontpageBanners = () => {
	$(".frontpageBanners__slider").slick({
		dots: false,
		infinite: true,
		autoplay: true,
		fade: true,
		arrows: false,
		speed: 1500,
		autoplaySpeed: 3000,
		useCSS: true,
		slide: "a",
		slidesToShow: 1,
		pauseOnHover: false,
		slidesToScroll: 1,
	});
};
frontpageBanners();

/*------------------------------------------------ SPONSORS & LOGOTYPES CAROUSEL ------------------------------------------------*/

const logotypesCarousel = (handler) => {
	$(handler).slick({
		dots: false,
		infinite: true,
		autoplay: true,
		arrows: false,
		speed: 1000,
		autoplaySpeed: 0,
		useCSS: false,
		slidesToShow: 5,
		pauseOnHover: true,
		slidesToScroll: 1,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
					infinite: true,
					dots: false,
				},
			},
			{
				breakpoint: 850,
				settings: {
					slidesToShow: 4,
					slidesToScroll: 1,
				},
			},
			{
				breakpoint: 480,
				settings: {
					useCSS: true,
					slidesToShow: 3,
					slidesToScroll: 1,
				},
			},
		],
	});
};
logotypesCarousel("#sponsors-slider");
logotypesCarousel("#logotypes-slider");

/*---------------------------------- POPUP ----------------------------------*/

$(".popupToggle").click(function () {
	$(".popup").fadeToggle();
	let content = $(this).attr("popup-data");
	$(".popup__text").text(content);
});

/*------------------------------------------------ TIME LEFT COUNTER ------------------------------------------------*/

const countdown = () => {
	$(document).ready(function (date) {
		let clock_main;

		// Grab the current date
		var currentDate = new Date();

		// Set some date in the future
		var futureDate = new Date(2022, 8, 10, 10, 0, 0);

		// Calculate the difference in seconds between the future and current date
		var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

		if (diff < 0) {
			var diff = 0000000000;
		}

		// Instantiate a coutdown FlipClock
		clock_main = $("#clock").FlipClock(diff, {
			clockFace: "DailyCounter",
			countdown: true,
		});
	});
};
if ($("#clock").length > 0) {
	countdown();
}

/*------------------------------------------------ MENU ------------------------------------------------*/

$("#hamburger").click(function () {
	openBurger();
});

$("#hamburger-close").click(function () {
	closeBurger();
});

function openBurger() {
	$("#nav-overlay").fadeIn();
	setTimeout(function () {
		$(".nav-overlay-content").fadeIn();
	}, 500);
	$("main").hide();
}

function closeBurger() {
	$("#nav-overlay").fadeOut();
	$(".nav-overlay-content").fadeOut();
	$("main").show();
}

$(".menu_dropdown--trigger").click(function () {
	$(this).find(".menu_dropdown--content").slideToggle();
});

/*------------------------------------------------ MENU NA BIAŁYM TLE ------------------------------------------------*/

if ($(".main-top").is(":hidden") || !$(".main-top").length) {
	$(".mobile > a").css("color", "black");
	$("#hamburger > img").attr(
		"src",
		"/wp-content/themes/ifbbpro/img/hamburger-black.png"
	);
}

/*------------------------------------------------ NEWSLETTER ------------------------------------------------*/

$(".tnp-field").hide();

$(".tnp").click(function () {
	$(".tnp-field").fadeIn();
	$(".newsletter-button").hide();
});

/*------------------------------------------------ BUTTON SOUND ------------------------------------------------*/

$("#menu a").click(function () {
	new Audio("/wp-content/themes/ifbbpro/js/sound.mp3").play();
});

$(".nav-overlay-content a").click(function () {
	new Audio("/wp-content/themes/ifbbpro/js/sound.mp3").play();
});

/*------------------------------------------------ KONTAKT PODŚWIETLANIE LINKÓW ------------------------------------------------*/

$(".contact-tymczak").mouseover(function () {
	$(".contact-tymczak a").css("color", "white");
});

$(".contact-tymczak").mouseleave(function () {
	$(".contact-tymczak a").css("color", "red");
});

$(".contact-piotrkowicz").mouseover(function () {
	$(".contact-piotrkowicz a").css("color", "white");
});

$(".contact-piotrkowicz").mouseleave(function () {
	$(".contact-piotrkowicz a").css("color", "red");
});

/*----------------------------------------- PAKIET MULTIMEDIALNY ----------------------------------------------*/

$(".sold-individually .button").click(function () {
	let btn = this;

	setTimeout(function () {
		$(btn).removeAttr("href");
		$(btn).removeAttr("data-product_id");

		if ($("html").is(":lang(pl-pl)")) {
			$(btn).text("Dodano do koszyka");
		} else {
			$(btn).text("Added to cart");
		}
	}, 500);
});

/*--------------------------------------- WALUTA W EURO ----------------------------------------------------------*/

function customEuroPrice() {
	console.log("ok");
	if ($("html").is(":lang(en-us)")) {
		let loop = $(".product").length;

		let regularPriceDiv = $("span.price del span.woocommerce-Price-amount bdi");
		let salePriceDiv = $("span.price > ins > span > bdi");

		let regularPrice = 0;
		let salePrice = 0;

		for (let i = 0; i < loop; i++) {
			let product = $(".product").eq(i);

			if (product.hasClass("sale")) {
				let regularPrice = Math.ceil(
					parseInt(product.find(regularPriceDiv).text()) / 4.59
				);
				let salePrice = Math.ceil(
					parseInt(product.find(salePriceDiv).text()) / 4.59
				);

				product
					.find(".price")
					.before(
						'<p class="euroPrice"><span style="color:black"></span> <del>' +
							regularPrice +
							"€</del> " +
							salePrice +
							'€ <span style="color:black"></span></p>'
					);
			} else {
				regularPrice = Math.ceil(parseInt(product.find("bdi").text()) / 4.59);
				product
					.find(".price")
					.before(
						'<p class="euroPrice"><span style="color:black"></span> ' +
							regularPrice +
							'€ <span style="color:black"></span></p>'
					);
			}
		}
	}
}
if ($(".price").length > 0) {
	customEuroPrice();
}

/*------------------------------------------------ BILETY NIEDOSTĘPNE ------------------------------------------------*/

const fiweTicket = (handler, lang) => {
	$(`${handler} a`).attr("href", "https://fiwe.pl/kup-bilet/");
	$(`${handler} a`).attr("target", "_blank");
	if (lang === "pl") {
		$(`${handler} .price`).text("Od 70 zł");
		$(`${handler} .button`).text("Kup bilet na fiwe.pl");
	} else {
		$(`${handler} .price`).text("From 70 PLN (14 €)");
		$(`${handler} .euroPrice`).hide();
		$(`${handler} .button`).text("Buy ticket on fiwe.pl");
	}
};
fiweTicket(".post-6972", "pl");
fiweTicket(".post-6982", "en");

const registrationTicket = (handler, lang) => {
	$(`${handler} a`).removeAttr("href");
	$(`${handler} .button`)
		.text("Add to cart")
		.click(function () {
			if (lang === "pl") {
				alert(
					"Bilety dla trenerów i osób towarzyszących na zawody odbywające się 10 września 2022 r. umożliwiające wejście na obiekt zawodów na targach FIWE, na backstage za sceną i miejsce na widowni może kupić jedynie startujący zawodnik podczas rejestracji on-line lub w dniu weryfikacji w piątek. "
				);
			} else {
				alert(
					"Tickets for coaches and accompanying persons for the competition taking place on September 10, 2022, enabling entry to the competition venue FIWE, backstage behind the stage and a seat in the audience can only be purchased by a competitor during online registration or on the day of check-in / verification on the Friday before  competition."
				);
			}
		});
};
registrationTicket(".post-6973", "pl");
registrationTicket(".post-6983", "en");

/*------------------------------------------ CHEKCOUT ANGIELSKA WERSJA -------------------------------------------*/

function checkoutPL() {
	setInterval(function () {
		$(".added_to_cart").attr("href", "/koszyk");
		$(".checkout-button").attr("href", "/zamowienie");
	}, 300);
}

if ($("html").is(":lang(pl-pl)") && $(".woocommerce").length > 0) {
	checkoutPL();
}

function checkoutEN() {
	let policyText =
		"Your personal data will be proceed due to process your order.";
	let checkboxText =
		'I accecpted <a href="/buying-rules" target="_blank">terms and conditions.</a>';

	setInterval(function () {
		$(".woocommerce-privacy-policy-text p").text(policyText);
		$(".woocommerce-terms-and-conditions-checkbox-text").html(checkboxText);
		$("thead .product-name").text("Product");
		$(".cart-subtotal th").text("Subtotal");
		$(".fee th").text("Online payment comission");
		$(".fee td").attr("data-title", "Online payment comission");
		$(".order-total th").text("Total");
		$("thead .product-total").text("Sum");
		$("#place_order").text("Place order");
		$(".about_paypal").text("");

		let alert = $(".woocommerce-message").text();
		let error = $(".woocommerce-error").text();

		if (alert.indexOf("pomyślnie") > 0) {
			$(".woocommerce-message").text("Coupon activated!");
		}

		if (alert.indexOf("usunięty") > 0) {
			$(".woocommerce-message").text("Coupon deactivated!");
		}

		if (alert.indexOf("Kupon został zastosowany") > 0) {
			$(".woocommerce-message").text("Coupon is already active!");
		}

		if (error.indexOf("stracił") > 0) {
			$(".woocommerce-error").text("This coupon has expired");
		}

		if (error.indexOf("nie istnieje") > 0) {
			$(".woocommerce-error").text("Coupon is not valid!");
		}

		if (error.indexOf("Limit wykorzystania") > 0) {
			$(".woocommerce-error").text("Limit for this coupon is already reached!");
		}
	}, 300);
}
if ($("html").is(":lang(en-us)") && $(".woocommerce").length > 0) {
	checkoutEN();
}

/*----------------------------------------------- SZKOLENIA ONLINE ------------------------------------------------*/

function szkoleniaOnline() {
	$(".wpcf7-list-item input[type=checkbox]")
		.not(".first")
		.each(function () {
			let slide = false;

			for (let i = 2; i < $(".wpcf7-list-item").length; i++) {
				if (
					document.querySelector(
						"#wpcf7-f2272-o1 > form > p:nth-child(7) > span > span > span:nth-child(" +
							i +
							") > input[type=checkbox]"
					).checked
				) {
					slide = true;
				}
			}

			if (slide == false) {
				$(".form-adress").slideUp();
			} else {
				$(".form-adress").slideDown();
			}
		});

	let first = document.querySelector(
		"#wpcf7-f2272-o1 > form > p:nth-child(7) > span > span > span:nth-child(2) > input[type=checkbox]"
	);
	let second = document.querySelector(
		"#wpcf7-f2272-o1 > form > p:nth-child(7) > span > span > span:nth-child(3) > input[type=checkbox]"
	);

	$(first).click(function () {
		second.checked = false;
	});

	$(second).click(function () {
		first.checked = false;
	});
}
if ($(".wpcf7-list-item input[type=checkbox]").length > 0) {
	szkoleniaOnline();
}

/*-------------------------------------- LOST PASSWORD - PRZEKIEROWANIE NA ANGIELSKĄ -----------------------------------------*/
function lostPasswordRedirect() {
	$(".woocommerce-LostPassword a").attr("href", "/my-account/lost-password");
	$("#socialButtonOnPage span").text("Share on Facebook");
}
if (
	$("html").is(":lang(en-us)") &&
	$(".woocommerce-LostPassword a").length > 0
) {
	lostPasswordRedirect();
}

/*-------------------------------------- RELACJA -----------------------------------------*/

function liveAutoReaload() {
	var timer2 = "3:01";
	var interval = setInterval(function () {
		var timer = timer2.split(":");
		//by parsing integer, I avoid all extra string processing
		var minutes = parseInt(timer[0], 10);
		var seconds = parseInt(timer[1], 10);
		--seconds;
		minutes = seconds < 0 ? --minutes : minutes;
		if (minutes < 0) clearInterval(interval);
		seconds = seconds < 0 ? 59 : seconds;
		seconds = seconds < 10 ? "0" + seconds : seconds;
		//minutes = (minutes < 10) ?  minutes : minutes;
		$("#live-stream-timer").html(minutes + ":" + seconds);
		timer2 = minutes + ":" + seconds;

		if (minutes == 0 && seconds == 0) {
			window.location.reload();
			clearInterval(interval);
		}
	}, 1000);
}
if ($("#live-stream-timer").length > 0) {
	liveAutoReaload();
}

setInterval(function () {
	if ($(".woocommerce-error .showlogin").length > 0) {
		return;
	}
	$(".woocommerce-error .showlogin").closest(".woocommerce-error").show();
}, 2000);

/*-------------------------------------- YOUTUBE -----------------------------------------*/
let video_wrapper = $(".youtube-video-place");
if (video_wrapper.length) {
	$(".play-youtube-video").on("click", function () {
		video_wrapper.html(
			'<iframe id="home_video" allowfullscreen frameborder="0" width="100%" class="embed-responsive-item" src="' +
				video_wrapper.data("yt-url") +
				'"></iframe>'
		);
	});
}
