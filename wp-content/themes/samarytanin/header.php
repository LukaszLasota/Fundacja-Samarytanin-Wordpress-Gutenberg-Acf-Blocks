<?php
/**
 * The header for our theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="description" content="Fundacja Samarytanin, profesjonalna opieka nad osobami starszymi, niepełnosprawnymi, wykluczonymi w Mielcu i okolicach. Opieka w zakresie zaspokajania codziennych potrzeb życiowych, higieniczno-sanitarnym, pielęgnacji zleconej przez lekarza, podtrzymywaniu psychofizycznej kondycji osoby, opieka godzinowa. Mielec, Powiat Mielecki, Agnieszka Godek, Barbara Bielatowicz. ">
    <meta name="keywords" content="Fundacja Samarytanin, profesjonalna opieka nad osobami starszymi, niepełnosprawnymi, wykluczonymi w Mielcu i okolicach. Opieka w zakresie zaspokajania codziennych potrzeb życiowych, higieniczno-sanitarnym, pielęgnacji zleconej przez lekarza, podtrzymywaniu psychofizycznej kondycji osoby, opieka godzinowa. Mielec, Powiat Mielecki, Agnieszka Godek, Barbara Bielatowicz. ">
        
    
	<?php wp_head(); ?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170089081-1"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'UA-170089081-1');
	</script>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
			<nav id="site-navigation"  class="main-nav">
			<?php
			
			if ( is_front_page() || is_home() ) :
				?>
				 <h1 class="logo" title="<?php bloginfo( 'name' ); ?>">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" >
					</a>
        		</h1>
				<?php
			else :
				?>
				<div class="logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" >
					</a>
				</div>
				<?php
			endif;
			?>
		

	
		<button class="hamburger" aria-controls="primary-menu" aria-expanded="false">
            <span class="sr-only">Otwórz/zamknij menu</span>
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>	
		
		<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"> esc_html_e( 'Primary Menu', 'samarytanin' );-->
		<div class="navigation">
            <ul class="navigation-list">
                <?php 
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>                 
            </ul>
        </div>			
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
