<?php

/**
 * Fired during plugin activation
 *
 * @link       
 * @since      1.0.0
 *
 * @package    Show_Pdf_Shortcode
 * @subpackage Show_Pdf_Shortcode/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Show_Pdf_Shortcode
 * @subpackage Show_Pdf_Shortcode/includes
 * @author     Your Name <email@example.com>
 */
class Show_Pdf_Shortcode_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {

		$table_query = '';

		// Dynamin table generating code
		require_once ABSPATH . 'wp-admin/includes/upgrade.php'; 
		dbDelta($table_query);
	}

}
