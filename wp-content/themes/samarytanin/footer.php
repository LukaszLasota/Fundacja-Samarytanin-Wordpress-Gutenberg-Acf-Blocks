<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<div class="footer">       
            <div class="footer-container">
                <div class="footer-one">
                    <h3 class="footer-h3">MENU</h3>
					<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id'        => 'footer-menu',
						)
					);
					?>      
                </div> 
                <div class="footer-two">
                    <h3 class="footer-h3">Kontakt</h3>
					<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'menu-3',
							'menu_id'        => 'footer-menu-two',
						)
					);
					?>  
                </div>
            </div>
        </div>


<?php wp_footer(); ?>

</body>
</html>
