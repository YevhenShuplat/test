import $, { css, get } from "jquery";

// import popper from "popper.js";
// import bootstrap from "bootstrap";

$(function ($) {
	console.log("rseady!");
	let slider = new Swiper(".merch-slider", {
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev",
		},
		pagination: {
			el: ".swiper-pagination",
		},
	});


	$('#menu-header-menu .menu-item-has-children').on('click', function (e) {
		e.preventDefault()
		$(this).toggleClass('is-active')
	})
	$('.search-button-outer').on('click', function (e) {
		$('.header-search-input').parent().addClass('is-active')
	})


	$(document).on('click', function (event) {
		let $target = $(event.target);
		if (!$target.closest('.menu-item-has-children').length && $('.menu-item-has-children').is(":visible")) {
			$('.menu-item-has-children').removeClass('is-active');
		}
	});
	$(document).on('click', function (event) {
		let $target = $(event.target);
		if (!$target.closest('.header-search').length && $('.header-search').is(":visible")) {
			$('.header-search').removeClass('is-active');
		}
	});


	$(".hamburger").on("click", () => {
		$(".hamburger").toggleClass("is-active");
		$(".main-menu").toggleClass("active");
		if ($(".hamburger").hasClass("is-active")) {
			$("body").css({ overflow: "hidden" });
		} else {
			$("body").css({ overflow: "auto" });
		}
	
	});

});

