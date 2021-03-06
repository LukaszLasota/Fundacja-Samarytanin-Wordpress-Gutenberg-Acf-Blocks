<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       
 * @since      1.0.0
 *
 * @package    Show_Pdf_Shortcode
 * @subpackage Show_Pdf_Shortcode/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Show_Pdf_Shortcode
 * @subpackage Show_Pdf_Shortcode/admin
 * @author     Łukasz Lasota 
 */
class Show_Pdf_Shortcode_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/show-pdf-shortcode-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/show-pdf-shortcode-admin.js', array( 'jquery' ), $this->version, false );

	}
	//Creta manu methods
	public function pdf_list_menu(){
		add_menu_page('Pdf Managment Tool', 'Pdf Managment Tool', 'manage_options', 'pdf-managment-tool', array($this, 'pdf_managment_plugin'), 'dashicons-pdf', 22 );

		// Create plugin submenu
		add_submenu_page('pdf-managment-tool', 'Dashboard', 'Dashboard', 'manage_options', 'pdf_managment_dashboard', array($this, 'pdf_managment_plugin') );

	}
	
	// Menu callback function
	public function pdf_managment_dashboard(){
		echo "<h3>Witaj w pod menu pluginu</h3>";
	}

	public function pdf_managment_plugin(){
		
		echo "<h3>Witaj w menu pluginu</h3>";
		global $wpdb;
		// $user_email = $wpdb->get_var('SELECT user_email from fs_users');
		// echo $user_email;  
		
	}

}
