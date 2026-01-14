/**
 * ============================================================================
 * Car Rental Database Management System - Frontend Interface Logic
 * ============================================================================
 * 
 * This script initializes and manages all frontend UI interactions, including
 * carousel sliders (Testimonials, Trending cars, Popular brands), listing
 * image galleries, price range sliders, and various toggle functionalities.
 * 
 * ----------------------------------------------------------------------------
 * AUTHORSHIP & CREDITS (AHNA Team)
 * ----------------------------------------------------------------------------
 * This project was developed by the AHNA team:
 * - Amey Thakur
 * - Hasan Rizvi
 * - Nithya Gnanasekar
 * - Anisha Gupta
 * 
 * @package     CarRentalSystem
 * @subpackage  Assets/JS
 * @author      Amey Thakur (Lead)
 * @link        https://github.com/Amey-Thakur
 * @repository  https://github.com/Amey-Thakur/CAR-RENTAL-SYSTEM
 * @version     1.0.0
 * @date        2021-01-19
 * @license     MIT
 * 
 * ============================================================================
 * CHANGE LOG:
 * ----------------------------------------------------------------------------
 * 2021-01-19 - Initial release - AHNA Team
 * ============================================================================
 */

(function ($) {
	'use strict';
	$(function (e) {

		/**
		 * Testimonial Slider Initialization
		 * 
		 * Configures the Owl Carousel for displaying user testimonials.
		 * Responsive breakpoints adjust the number of items shown.
		 */
		var owl = $("#testimonial-slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[550, 1],
				[767, 1],
				[991, 2],
			],
			loop: true,
			nav: true,
			navigation: false,
			autoPlay: 3000
		});


		/**
		 * Secondary Testimonial Slider
		 * 
		 * Alternative configuration for a predefined testimonial layout.
		 */
		var owl = $("#testimonial-slider-2");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[550, 2],
				[767, 2],
				[991, 3],
			],
			loop: true,
			nav: true,
			navigation: false,
			autoPlay: 3000
		});


		/**
		 * Trending Cars Slider
		 * 
		 * Carousel for showcasing trending or featured vehicles.
		 */
		var owl = $("#trending_slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[550, 1],
				[700, 3],
			],
			loop: true,
			nav: true,
			navigation: false,
			autoPlay: 3000
		});


		/**
		 * Popular Brands Slider
		 * 
		 * Carousel for displaying vehicle brand logos.
		 * Supports up to 5 items on large screens.
		 */
		var owl = $("#popular_brands");
		owl.owlCarousel({
			itemsCustom: [
				[0, 2],
				[450, 2],
				[550, 2],
				[700, 3],
				[1024, 4],
				[1200, 5],
			],
			loop: true,
			nav: true,
			navigation: false,
			autoPlay: 3000
		});


		/**
		 * Listing Image Slider (Style 1)
		 * 
		 * Owl Carousel configuration for vehicle listing thumbnails.
		 */
		var owl = $("#listing_img_slider");
		owl.owlCarousel({
			itemsCustom: [
				[0, 1],
				[450, 1],
				[700, 2],
				[1024, 3],
				[1200, 3],
			],
			loop: true,
			nav: true,
			navigation: true,
			pagination: false,
			autoPlay: 3000
		});


		/**
		 * Listing Image Slider (Style 2) - Syncing with Thumbnail Nav
		 * 
		 * Uses Slick Slider to synchronize a main image view with a
		 * thumbnail navigation strip.
		 */
		$('.listing_images_slider').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.listing_images_slider_nav'
		});
		$('.listing_images_slider_nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.listing_images_slider',
			dots: false,
			centerMode: true,
			focusOnSelect: true
		});


		/**
		 * Price Range Slider
		 * 
		 * Initializes the bootstrap-slider plugin for price filtering.
		 */
		$("#price_range").slider({});


		/**
		 * Search Toggle Animation
		 * 
		 * Toggles visibility of the header search form with a slide effect.
		 */
		$("#search_toggle").click(function () {
			$("#header-search-form").slideToggle();
		});


		/**
		 * Filter Form Toggle
		 * 
		 * Mobile-responsive toggle for the vehicle filter sidebar.
		 */
		$("#filter_toggle").click(function () {
			$("#filter_form").slideToggle();
		});


		/**
		 * Other Info Toggle
		 * 
		 * Toggles additional information sections on details pages.
		 */
		$("#other_info").click(function () {
			$("#info_toggle").slideToggle();
		});


		/**
		 * Back to Top Button
		 * 
		 * Manages the visibility and scroll-to-top animation of the
		 * 'back-top' button based on scroll position.
		 */
		var top = $('#back-top');
		top.hide();

		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				top.fadeIn();
			} else {
				top.fadeOut();
			}
		});
		$('#back-top a').on('click', function (e) {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});

	});

})(jQuery);