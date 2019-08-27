<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/t0shifollow
 * @since      1.0.0
 *
 * @package    Cemetery_Listing
 * @subpackage Cemetery_Listing/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cemetery_Listing
 * @subpackage Cemetery_Listing/includes
 * @author     t0shi <toshi.webdev@gmail.com>
 */
class Cemetery_Listing_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cemetery-listing',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
