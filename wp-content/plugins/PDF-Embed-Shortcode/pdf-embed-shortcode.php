<?php
/**
* Plugin Name: PDF Embed Shortcode 
* Plugin URI: No domain yet
* Description: PDF embed shortcode using pdfjs library
* Version: 1.0.0
* Author: Łukasz Lasota 
* Author URI: 
* License: GPL2
*/

class core_pdf{
    
    /**
	 * Undocumented function
	 *
	 * @return void
	 */
	public function define_version() {
        if ( !defined( 'PDF_EMBED_VERSION' ) ) {
        // Replace the version number of the theme on each release.
            define( 'PDF_EMBED_VERSION', '1.0.0' );
        }
	}
    
    /**
	 * Undocumented function
	 *
	 * @return void
	 */
    public function add_scripts(){
        
        add_action( 'wp_enqueue_scripts', 'pdf_embed_scripts' );
        function pdf_embed_scripts() {
            wp_enqueue_style( 'pdf_embed-style',  plugin_dir_url( __FILE__ ) . '/dist/style.css', PDF_EMBED_VERSION );
            wp_style_add_data( 'pdf_embed-style', 'rtl', 'replace' );

            wp_enqueue_script( 'pdf_embed-navigation', 'https://mozilla.github.io/pdf.js/build/pdf.js', array(), PDF_EMBED_VERSION, true );
            wp_enqueue_script( 'pdf_embed-js',  plugin_dir_url( __FILE__ ) . '/dist/app.js', array('jquery'), PDF_EMBED_VERSION, true );
        }
    }

    /**
	 * shortcode
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */

    public function generate_shortcode(){
        add_shortcode( 'PDF', 'show_pdf' );

        function show_pdf( $atts, $content = null, $tag = '' ) {
        $atr = shortcode_atts( array(
        'link' => '#',
        'pdf-link' => '',
        ), $atts );
        ?>
        <script>
            const url = '<?php echo esc_url( $atr['pdf-link'] ) ?>';
        </script>
        <?php
        $output = '<section class="statut-page">

        <div class="statut-page-head">
           
        <div class="center-pdf">
        
        <button id="prev" ><img src="' . esc_url( $atr['link'] ) . '" alt="Zdjecie strzałki kierującej na poprzednią stronę" title="Poprzednia strona"></button>
        <button id="next"><img src="' . esc_url( $atr['link'] ) . '" alt="Zdjecie strzałki kierującej na nastepną stronę" title="Następna strona"></button>
        &nbsp; &nbsp;
        <span>Page: <span id="page_num"></span> z <span id="page_count"></span></span>

        <canvas id="the-canvas"></canvas>

        <a class="more" href="' . esc_url( $atr['pdf-link'] ) . '">POBIERZ STATUT</a>
                
        </div>   

        </div>

        </section>';


        return $output;
        }
    }

}

$pluginCore = new core_pdf;
$pluginCore->define_version();
$pluginCore->add_scripts();
$pluginCore->generate_shortcode();
