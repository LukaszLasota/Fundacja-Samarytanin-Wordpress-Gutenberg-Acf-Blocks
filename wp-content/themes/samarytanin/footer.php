<?php
/**
 * The template for displaying the footer
 */

?>
	<div class="footer">       
		<div class="footer-container">
			<div class="footer-one">
				<h3 class="footer-h3"><?php _e( 'MENU', 'samarytanin' ); ?></h3>
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
				<h3 class="footer-h3"><?php _e( 'Kontakt', 'samarytanin' ); ?></h3>
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
		<div class="scrollup">
			<a href="#masthead">
				<img 
				src="<?php echo esc_url( get_theme_mod( 'icon_setting_one' ) ); ?>" 
				alt="<?php echo esc_html_e( get_theme_mod( 'icon_text_setting_two' ) ); ?>">
			</a>
		</div>
    </div>
<?php wp_footer(); ?>

</body>
</html>
