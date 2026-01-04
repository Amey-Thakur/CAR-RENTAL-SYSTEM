/**
 * ============================================================================
 * Car Rental Database Management System - Admin Dashboard Logic
 * ============================================================================
 * 
 * This script handles the interactive elements of the admin dashboard,
 * including sidebar navigation toggling, DataTables initialization,
 * and file input configuration.
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
 * @subpackage  Admin/Assets
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

$(document).ready(function () {

	/**
	 * Sidebar Navigation Logic
	 * 
	 * Adds dropdown functionality to sidebar menu items that have submenus.
	 * Toggles the 'open' class on click to show/hide nested lists.
	 */
	$(".ts-sidebar-menu li a").each(function () {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	var menux = $('.ts-sidebar-menu li a.parent');
	$('<div class="more"><i class="fa fa-angle-down"></i></div>').insertBefore(menux);
	$('.more').click(function () {
		$(this).parent('li').toggleClass('open');
	});
	$('.parent').click(function (e) {
		e.preventDefault();
		$(this).parent('li').toggleClass('open');
	});

	/**
	 * Mobile Menu Toggle
	 * 
	 * Handles the opening and closing of the sidebar on mobile devices.
	 */
	$('.menu-btn').click(function () {
		$('nav.ts-sidebar').toggleClass('menu-open');
	});


	/**
	 * DataTable Localization & Initialization
	 * 
	 * Initializes the main data table (#zctb) with default settings.
	 */
	$('#zctb').DataTable();


	/**
	 * File Input Configuration
	 * 
	 * Configures the file input field (#input-43) to hide previews
	 * and restrict allowed file extensions to archives.
	 */
	$("#input-43").fileinput({
		showPreview: false,
		allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
		elErrorContainer: "#errorBlock43"
		// you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
	});

});
